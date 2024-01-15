<?php
defined('TYPO3') || die();

(static function() {})();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'dmi_table_creator',
    'Configuration/TypoScript',
    'Your Extension Description'
);