<?php return [
    'plugin' => [
        'name' => 'VK Widgets',
        'description' => 'Easy add VK Widgets',
    ],
    'community' => [
        'name' => 'Community',
        'description' => 'A Community widget links your site with your VK community. Your users will be able to subscribe to your VK feed without leaving the page',
        'groupId' => [
            'title' => 'Сommunity ID',
            'description' => 'VK community ID',
            'placeholder' => 'VK community ID',
            'validationmessage' => 'Field must be empty or contain integer!',
        ],
        'mode' => [
            'title' => 'Layout',
            'description' => '"Members" - display community members, "Name only" — display community name only, "News" — display community feed',
            'options' => [
                'subscribers' => 'Members',
                'news' => 'News',
                'name' => 'Name only',
            ],
        ],
        'width' => [
            'title' => 'Width',
            'description' => 'Sets module width in pixels (integer more than 120). If value is auto it adjusts to the module width',
            'placeholder' => 'Module width in pixels',
            'validationmessage' => 'Field can be empty, contain a number or set to auto!',
        ],
        'height' => [
            'title' => 'Height',
            'description' => 'Sets module height in pixels (integer from 200 to 600)',
            'placeholder' => 'Module height in pixels',
            'validationmessage' => 'Field can be empty, contain a number or set to auto!',
        ],
        'color1' => [
            'title' => 'Background color',
            'description' => 'Widget background color in RRGGBB format',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Background color should be in RRGGBB format or empty!',
        ],
        'color2' => [
            'title' => 'Text color',
            'description' => 'Text color in RRGGBB format',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Text color should be in RRGGBB format or empty!',
        ],
        'color3' => [
            'title' => 'Buttons color',
            'description' => 'Button color in RRGGBB format',
            'placeholder' => 'RRGGBB',
            'validationmessage' => 'Buttons color should be in RRGGBB format or empty!',
        ],
        'wide' => [
            'title' => 'Wide mode',
            'description' => 'Disabled — standard mode. Enabled — if feed is displayed, posts in this mode are displayed with the community photo and Like counts',
        ],
        'elementid' => [
            'title' => 'Element ID',
            'description' => 'Element ID (optional)',
            'placeholder' => 'Element ID',
        ],
    ],
    'share' => [
        'name' => 'Share',
        'description' => 'You will allow VK users to share links to your materials with their friends',
        'style' => [
            'title' => 'Style',
            'description' => 'Widget layout',
            'options' => [
                'round' => 'Button',
                'round_nocount' => 'Button without a counter',
                'link' => 'Link',
                'link_noicon' => 'Link without an Icon',
                'custom' => 'Icon',
            ],
        ],
        'text' => [
            'title' => 'Text',
            'description' => 'Button text',
            'default' => 'Share',
            'placeholder' => 'Button text',
        ],
        'link' => [
            'title' => 'Link',
            'description' => 'Page link (optional)',
            'placeholder' => 'Page link',
        ],
        'elementid' => [
            'title' => 'Element ID',
            'description' => 'Element ID (optional)',
            'placeholder' => 'Element ID',
        ],
    ],
    'communitymessages' => [
        'name' => 'Community Messages',
        'description' => 'With the help of "Community Messages" widget you can create a fast tool for communication with VK users and add it to your website',
        'communityid' => [
            'title' => 'Page or Group ID',
            'description' => 'Community id the widget will be created for',
            'placeholder' => 'ID',
        ],
        'position' => [
            'title' => 'Position',
            'description' => 'Button position (left or right)',
            'options' => [
                'left' => 'Bottom left corner',
                'right' => 'Bottom right corner',
            ],
        ],
        'expandin' => [
            'title' => 'Expand in',
            'description' => 'Expanding widget',
            'default' => '1',
            'options' => [
                0 => 'Do not open',
                1 => 'Immediately',
                5000 => '5 seconds',
                10000 => '10 seconds',
                15000 => '15 seconds',
                30000 => '30 seconds',
                40000 => '40 seconds',
                50000 => '50 seconds',
                60000 => '60 seconds',
                120000 => '120 seconds',
            ],
        ],
        'openwithsound' => [
            'title' => 'Open with sound',
            'description' => 'Enable sound when widget is expanding',
        ],
        'newmessagesound' => [
            'title' => 'New message sound',
            'description' => 'New message notification sound',
        ],
        'tooltip' => [
            'title' => 'Tooltip',
            'description' => 'Enable a tooltip',
        ],
        'tooltiptext' => [
            'title' => 'Tooltip text',
            'default' => 'Any question?',
            'description' => 'Tooltip text',
            'placeholder' => 'Tooltip text',
        ],
        'elementid' => [
            'title' => 'Element ID',
            'description' => 'Element ID (optional)',
            'placeholder' => 'Element ID',
        ],
    ],
    'comments' => [
        'name' => 'Comments',
        'description' => 'This enables VK users to comment on your materials without having to register on your site.',
        'apiId' => [
            'title' => 'Open API ID',
            'description' => 'Your API ID',
            'validationMessage' => 'Open API ID must be a number!',
        ],
        'limit' => [
            'title' => 'Limit',
            'description' => 'Number of comments on the page (integer 5-100)',
            'placeholder' => 'Example: 10',
            'validationMessage' => 'Number of comments must be a number!',
        ],
        'attach' => [
            'title' => 'Attach',
            'description' => 'Allows attachments in comments. String containing comma-separated types of acceptable attachments or false if media comments are disabled. Available types: graffiti, photo, audio, video, link',
        ],
        'width' => [
            'title' => 'Width',
            'description' => 'Sets module width in pixels (integer > 300)',
            'placeholder' => 'Example: 400',
            'validationMessage' => 'Width must be a numbe!',
        ],
        'height' => [
            'title' => 'Height',
            'description' => 'Sets maximum height of the widget in pixels. Integer > 500. If 0, widget height is unlimited. If widget content is larger than the maximum allowed, internal scrolling appears',
            'placeholder' => 'Example: 600',
            'validationMessage' => 'Height must be a number!',
            'group' => 'Advanced options',
        ],
        'autoPublish' => [
            'title' => 'Auto Publish',
            'description' => 'Automatically publish the comment to the users VK page',
            'group' => 'Advanced options',
        ],
        'mini' => [
            'title' => 'Mini Version',
            'options' => [
                0 => 'disabled',
                1 => 'enabled',
                'auto' => 'auto',
            ],
            'description' => 'Enables the mini version of the widget — smaller fonts, smaller attachment thumbnails, smaller profile pcitures in second level comments',
            'group' => 'Advanced options',
        ],
        'norealtime' => [
            'title' => 'Realtime Updates',
            'description' => 'Realtime updates for the comments',
            'group' => 'Advanced options',
        ],
        'pageUrl' => [
            'title' => 'URL of the page',
            'description' => 'URL of the page, containing the widget. Comments that are automatically posted to the users VK page link to this URL, if autoPublish is enabled',
            'group' => 'Advanced options',
        ],
    ],
];