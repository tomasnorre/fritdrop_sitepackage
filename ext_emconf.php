<?php
/************************************************************************
 * Extension Manager/Repository config file for ext "fritdrop".
 ************************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Fritdrop',
    'description' => 'Base extension for project "fritdrop"',
    'category' => 'extension',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-8.99.99',
            'fluid_styled_content' => '7.6.0-8.99.99',
            'bootstrap_package' => ''
        ),
        'conflicts' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Tomasnorre\\Fritdrop\\' => 'Classes'
        ),
    ),
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tomas Norre Mikkelsen',
    'author_email' => 'tomasnorre@gmail.com',
    'author_company' => 'tomasnorre',
    'version' => '1.0.0',
);
