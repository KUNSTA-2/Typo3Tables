\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:dmi_table_creator/Resources/Private/Language/locallang_db.xlf:tt_content.table_element',
        'table_element',
        'EXT:dmi_table_creator/Resources/Public/Icons/ContentElement.svg'
    ],
    'CType',
    'dmi_table_creator'
);

$GLOBALS['TCA']['tt_content']['types']['table_element'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
        pi_flexform;LLL:EXT:dmi_table_creator/Resources/Private/Language/locallang_db.xlf:flexforms.table_settings,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
    ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ]
    ]
];

$GLOBALS['TCA']['tt_content']['types']['table_element']['columns']['pi_flexform']['config'] = [
    'ds' => [
        '*,table_element' => 'FILE:EXT:dmi_table_creator/Configuration/FlexForms/flexform_table.xml',
    ],
];