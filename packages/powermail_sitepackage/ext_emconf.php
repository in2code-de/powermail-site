<?php

/**
 * Extension Manager/Repository config file for ext "powermail_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Powermail Sitepackage',
    'description' => 'Powermail development site',
    'category' => 'distribution',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.3.99',
            'bootstrap_package' => '*'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'In2code\\PowermailSitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'author' => 'Marcus Schwemer',
    'author_email' => 'Marcus Schwemer',
    'author_company' => 'in2code GmbH',
    'version' => '1.0.0',
];
