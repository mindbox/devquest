<?php
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Mbx\DevquestSite\Controller\ImmoController;

defined('TYPO3') or die('Access denied.');

(static function () {
    ExtensionUtility::configurePlugin(
        'DevquestSite',
        'Api',
        [ImmoController::class => 'list'],
        [ImmoController::class => 'list']
    );
})();

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['devquest_site'] = 'EXT:devquest_site/Configuration/RTE/Default.yaml';
