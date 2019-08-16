<?php

/**
 * Extension Manager/Repository config file for ext "fc_zollikofen".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'FC Zollikofen',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'FcZollikofen\\FcZollikofen\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Bisrat Kidane',
    'author_email' => 'bisrat.kidane@gmail.com',
    'author_company' => 'FC Zollikofen',
    'version' => '1.0.0',
];
