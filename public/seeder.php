<?php
use \AppBundle\Entity\Category;
use \AppBundle\Entity\Lead;
use \AppBundle\Entity\Product;
use \AppBundle\Entity\ProductOrder;
use \AppBundle\Entity\Promotion;

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
$bot->answer('payload:USER_TAPPED_PRODUCT', function() {
    //Check the category list
    $mix = [];
    $mix[] = 'We have some kind of product lines for you.';
    $categories = [];
    $aCategory = [
        "title"     => "Iphone",
        "image_url" => "https://support.apple.com/library/content/dam/edam/applecare/images/en_US/iphone/iphone-6s-colors.jpg",
        "subtitle"  => "Amazing smartphone",
        "buttons"   => [
            [
                "type"    => "postback",
                "payload" => "VIEW_DETAIL",
                "title"   => "Detail"
            ]
        ]
    ];
    $categories[] = $aCategory;
    $categories[] = $aCategory;
    $mix[] = $categories;
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
    '^(thank|thank you)'                 => 'It been my pleasure!',
    'you%funny%'                => 'I don\'t think so :)',
    '^(bad|bitch)(.*)girl$'     => 'Sorry but it is my best'
]);

// Print some message to the browser when done
dd('Nodes seeded!');