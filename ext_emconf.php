<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'MoceanSMS Login',
    'description' => 'MoceanAPI 2FA Login Typo3 Extension allows frontend users to opt in to SMS 2FA verification for login. This extension requires static templates(Bootstrap Package: Full Package and Typoscript Form) to function. ',
    'category' => 'plugin',
    'author' => 'moceanapi',
    'author_company' => 'Micro Ocean Technologies',
    'author_email' => 'plugin@moceanapi.com',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ]
    ]
];
