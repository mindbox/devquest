<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Bonjov Site',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Mbx\\BonjovSite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mindbox GmbH',
    'author_email' => 'it@mindbox.de',
    'author_company' => 'mbx',
    'version' => '1.0.0',
];
