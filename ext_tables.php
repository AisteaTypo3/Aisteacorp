<?php
defined('TYPO3_MODE') || die('Access denied.');

/***************
 * Setup EXTKEY
 * was null on Typo3 10
 ****************/
$_EXTKEY ='aisteacorp';
$extKey = $_EXTKEY;

call_user_func(
    function($extkey)
    {

        /********************
         * Add page TSConfig
         ********************/
        $pageTsConfig = \TYPO3\CMS\Core\Utility\GeneralUtility::getUrl(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extkey) . 'Configuration/TsConfig/Page/config.txt');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig($pageTsConfig);

    },
    $_EXTKEY
);

/********************
 * Backend CSS Styling
 ********************/
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY]['stylesheetDirectories'][] = 'EXT:aisteacorp/Resources/Public/Css/Backend/';