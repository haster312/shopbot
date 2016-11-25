<?php
if(!isset($bot)) $bot = require_once __DIR__ . '/../bootstrap/bot.php';

/*
|--------------------------------------------------------------------------
| Your Messenger bot first node
|--------------------------------------------------------------------------
|
| Let's try say hi to her when setup completed and then edit this message.
|
*/

$bot->answer('%hi%hello%fine%', [
	'Hello [first_name]! I could help you with the following subjects:',
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
$bot->answer('payload:USER_TAPPED_PRODUCT', 'Please let me know the product line which you interested in')
	->wait('category');
$bot->answer('@category', function($bot){
	//Check the category list
	$categories = [];
	$aCategory = [
        "title"     => "Lamborghini",
        "image_url" => "http://pictures.topspeed.com/IMG/crop/201603/2016-lamborghini-centenar-5_800x0w.jpg",
        "subtitle"  => "Amazing speed",
        "buttons"   => [
            [
                "type"  => "web_url",
                "url"   => "https://lamborghini.com",
                "title" => "Buy Now"
            ],
            [
                "type"    => "postback",
                "payload" => "BUY_LAMBORGHINI_TOMORROW",
                "title"   => "Buy Tomorrow"
            ]
        ]
    ];
    $categories[] = $aCategory;
    $categories[] = $aCategory;
    return $categories;
});

// Help
$bot->answer('payload:USER_TAPPED_ABOUT', [
	'Elite Business Solutions (E-Biz) has been operating with the vision of provide ease for enterprise digitization in Asean countries',
	'Check our website for more detail: http://ebiz.solutions']
);


/*
|--------------------------------------------------------------------------
| Define your nodes here
|--------------------------------------------------------------------------
|
| Start defining your node and make your awesome bot now
|
*/


// Action when user click "Get Started" button
$bot->answer('payload:GIGA_GET_STARTED_PAYLOAD', 'Hi [first_name]! How are you today?');

// Print some message to the browser when done
dd('Nodes seeded!');