<?php
defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants('
  @import \'EXT:introduction_powermail-pro/Configuration/TypoScript/constants.typoscript\'
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
  @import \'EXT:introduction_powermail-pro/Configuration/TypoScript/setup.typoscript\'
');
