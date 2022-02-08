<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '1col', // CType
        'Section Container', // label
        '100%', // description
        [
            [
                ['name' => 'Section Container', 'colPos' => 101]
            ]
        ] 
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['1col']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '2cols', // CType
        '2 Spalten', // label
        '50% / 50%', // description
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 201, 'disallowed' => ['CType' => '2cols, 3cols']],
                ['name' => 'Rechte Spalte', 'colPos' => 202, 'disallowed' => ['CType' => '2cols, 3cols']]
            ]
        ] // grid configuration
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['2cols']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        '3cols', // CType
        '3 Spalten', // label
        '33% / 33% / 33%', // description
        [
            [
                ['name' => 'Linke Spalte', 'colPos' => 301, 'disallowed' => ['CType' => '2cols, 3cols']],
                ['name' => 'Mittlere Spalte', 'colPos' => 302, 'disallowed' => ['CType' => '2cols, 3cols']],
                ['name' => 'Rechte Spalte', 'colPos' => 303, 'disallowed' => ['CType' => '2cols, 3cols']]
            ]
        ] // grid configuration
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['3cols']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
    new \B13\Container\Tca\ContainerConfiguration(
        'accordion', // CType
        'Accordeon', // label
        'Akkordeon-Effekt', // description
        [
            [
                ['name' => 'Akkordeon Elemente', 'colPos' => 1001]
            ]
        ] // grid configuration
    )
    )
        // override default configurations
        ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
        ->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['accordion']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';