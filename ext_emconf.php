<?php

/**
 * Extension Manager/Repository config file for ext "blog".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Blog',
    'description' => 'A TYPO3 experiment with the intention of becoming a blog',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Deepseafish\\Blog\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'deepseafish',
    'author_email' => 'mr.euki@gmail.com',
    'author_company' => 'deepseafish',
    'version' => '1.0.0',
];
