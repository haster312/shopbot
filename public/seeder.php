<?php
/* @var $bot \GigaAI\MessengerBot */
$bot = require_once __DIR__ . '/../bootstrap/bot.php';

/*
|--------------------------------------------------------------------------
| Your Messenger bot first node
|--------------------------------------------------------------------------
|
| Let's try say hi to her when setup completed and then edit this message.
|
*/

$bot->answer('^(hi|hello|fine)', [
	'Hello [first_name]! I could help you with the following items',
    'quick_replies' => [
        [
            'content_type' => 'text',
            'title' => 'Events',
            'payload' => 'USER_TAPPED_EVENT'
        ],
        [
            'content_type' => 'text',
            'title' => 'Products',
            'payload' => 'USER_TAPPED_PRODUCT'
        ],
        [
            'content_type' => 'text',
            'title' => 'About Ebiz',
            'payload' => 'USER_TAPPED_ABOUT'
        ]
    ]
]);

/*
|--------------------------------------------------------------------------
| Handling the quick replies
|--------------------------------------------------------------------------
|
| When user tap quick replies, it sends a text message to you, so just handle it like normal text message.
| For detail: https://giga.ai/docs/standalone/quick-replies
|
*/

// Events
$bot->answer('payload:USER_TAPPED_EVENT', function() {
	//Check the events
	return "There is no event at the moment. But I guess in the next few days, it will has somethings cool.";
});

// Products
$bot->answer('payload:USER_TAPPED_PRODUCT', function($bot) {
    //Check the category list
    $hCategories = \Api\Business\CategoryBusiness::getAllCategories();
    if(count($hCategories) == 0){
        return 'Sorry, I could not get any information from Ebiz Shop for now. Please check it back later. Sorry about this :(';
    }
    $mix = [];
    $mix[] = 'We have some kind of product lines for you.';
    $categories = [];

    /* @var $hCategory \Api\Model\Category */
    foreach ($hCategories as $hCategory){
        $aCategory = [
            "title"     => $hCategory['name'],
            "image_url" => $hCategory['imageurl__c'],
            "subtitle"  => $hCategory['description__c'],
            "buttons"   => [
                [
                    "type"    => "postback",
                    "payload" => "cat_" . $hCategory['id'],
                    "title"   => "Detail"
                ]
            ]
        ];
        $categories[] = $aCategory;
    }
    $mix[] = $categories;
    return $mix;
});

/*
|--------------------------------------------------------------------------
| Handling the post back
|--------------------------------------------------------------------------
| Handle product postback
|
*/
$bot->answer('payload:cat_%', function($bot, $lead_id, $input){
    //Get category product
    $payload = $bot->received->entry[0]->messaging[0]->postback->payload;
    $categoryId = explode('_', $payload)[1];
    $hProducts = \Api\Business\CategoryBusiness::getProducts($categoryId);

    if(count($hProducts) == 0) {
        return 'Sorry, there is no product in this category at the moment.';
    }
    $mix = [];
    $mix[] = 'Check some products here, hope you interested in somethings';
    $products = [];

    /* @var $aProduct \Api\Model\Product */
    foreach ($hProducts as $hProduct){
        $aProduct = [
            "title"     => $hProduct['name'],
            "image_url" => $hProduct['imageurl__c'],
            "subtitle"  => substr($hProduct['description'], 0, 50) . '...',
            "buttons"   => [
                [
                    "type"    => "postback",
                    "payload" => 'cap_' . $hProduct['id'],
                    "title"   => "Order"
                ]
            ]
        ];
        $products[] = $aProduct;
    }
    $mix[] = $products;
    return $mix;
});

/*
|--------------------------------------------------------------------------
| Handling the post back
|--------------------------------------------------------------------------
| Handle Order postback
|
*/

$bot->answer('payload:cap_%', function($bot, $lead_id, $input){
    //Get product id
    $payload = $bot->received->entry[0]->messaging[0]->postback->payload;
    $productId = explode('_', $payload)[1];
    //Save temp data
    $result = DataBot::setData($lead_id, 'productId', $productId);

    return 'Please tell me your email.';
})->then(function($bot, $lead_id, $input){
    if(!filter_var($input, FILTER_VALIDATE_EMAIL)){
        $bot->keep('It does not look like an valid email, could you confirm?');
        return;
    }

    $userProfile = \GigaAI\Http\Request::getUserProfile($lead_id);

    $lead['firstname'] = $userProfile['first_name'];
    $lead['lastname'] = $userProfile['last_name'];
    $lead['email'] = $input;
    $lead['facebookid__c'] = $lead_id;

    //Register lead
    $hLead = \Api\Business\LeadBusiness::getLeadByFacebookId($lead_id);
    if ($hLead != null){
        //Update
        \Api\Business\LeadBusiness::updateLead($lead_id, $lead);
    } else{
        \Api\Business\LeadBusiness::createLead($lead);
    }


    return 'Please tell me your address.';
})->then(function($bot, $lead_id, $input){
    //Get product Id
    $productId = DataBot::getData($lead_id, 'productId');

    $hLead = \Api\Business\LeadBusiness::getLeadByFacebookId($lead_id);
    $hLead['street'] = $input;

    //Update
    \Api\Business\LeadBusiness::updateLead($lead_id, $hLead);

    //Create order
    $orderId = \Api\Business\ProductOrderBusiness::createOrder($lead_id, $productId);

    $bot->say('Thank you for your order. Your order code is ' . $orderId .
        '. You can check your receipt anytime by typing \'Receipt\' any time or access the Menu and choose  \'Receipt\'');
});

$bot->answer('Receipt', 'Please let me know your order id')->then(function($bot, $lead_id, $input){
    $receipt = \Api\Business\ProductOrderBusiness::getProductOrderByNumber($input);
    $bot->say('Result: ' . json_encode($receipt) . $input);

    $userProfile = \GigaAI\Http\Request::getUserProfile($lead_id);
    if($receipt == null)
        return 'It seem not a valid order id, could you check and enter again?';
    return
        [
            "recipient_name" => "Stephane Crozatier",
            "order_number" => rand(0, 100000),
            "currency" => "USD",
            "payment_method" => "COD",
            "elements" => [
                [
                    "title" => "Classic White T-Shirt",
                    "subtitle" => "100% Soft and Luxurious Cotton",
                    "quantity" => 2,
                    "price" => 50,
                    "currency" => "USD",
                    "image_url" => "http://petersapparel.parseapp.com/img/whiteshirt.png"
                ]
            ],
            "summary" => [
                "subtotal" => 75.00,
                "shipping_cost" => 4.95,
                "total_tax" => 6.19,
                "total_cost" => 56.14
            ]
        ];
});

// About Ebiz
$bot->answer('payload:USER_TAPPED_ABOUT', [
	'Elite Business Solutions (E-Biz) has been operating with the vision of provide ease for enterprise digitization in Asean countries',
	'Check our website for more detail: http://ebiz.solutions']
);



// Action when user click "Get Started" button
$bot->answer('payload:GIGA_GET_STARTED_PAYLOAD', 'Hi [first_name]! How are you today? Say \'Hello\' to begin the conversation');

// Default answer
$bot->answer('default:', 'Sorry I\'m not understand. You could check the Menu for begin the conversation. Thank you.');

// Other
$bot->answer([
    '^(thank|thank you)'                => 'It been my pleasure!',
    'you%funny%'                        => 'I don\'t think so :)',
    '^(bad|bitch|fuck|shit|hell)'       => 'Sorry but it is my best',
    '%fucking awesome%'                 => 'Really? I\'m glad to hear that'
]);

// Print some message to the browser when done
dd('Nodes seeded!');