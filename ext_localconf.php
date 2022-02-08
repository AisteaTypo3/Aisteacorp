<?php
defined('TYPO3_MODE') || die('Access denied.');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('@import "EXT:aisteacorp/Configuration/TSconfig/User_general.tsconfig"');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('@import "EXT:aisteacorp/Configuration/TSconfig/User_customerhome.tsconfig"');


/*
 * Custom RTE
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['aistea_presets'] = 'EXT:aisteacorp/Configuration/TsConfig/Page/Production/RTE.yaml';