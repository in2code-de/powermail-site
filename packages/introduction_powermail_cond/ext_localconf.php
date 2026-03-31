<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

ExtensionManagementUtility::addTypoScriptConstants('
  @import \'EXT:introduction_powermail_cond/Configuration/TypoScript/constants.typoscript\'
');

ExtensionManagementUtility::addTypoScriptSetup('
  @import \'EXT:introduction_powermail_cond/Configuration/TypoScript/setup.typoscript\'
');
