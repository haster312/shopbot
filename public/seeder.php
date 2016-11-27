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
//Handle category post back
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
            "subtitle"  => $hProduct['description__c'],
            "buttons"   => [
                [
                    "type"    => "postback",
                    "payload" => "pro_" . $hProduct['id'],
                    "title"   => "Order"
                ]
            ]
        ];
        $products[] = $aProduct;
    }
    $mix[] = $products;
    return $mix;

});


// About Ebiz
$bot->answer(['payload:USER_TAPPED_ABOUT'], [
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