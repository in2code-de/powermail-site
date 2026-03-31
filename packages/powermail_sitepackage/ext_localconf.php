<?php

/** @noinspection PhpFullyQualifiedNameUsageInspection */

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die('Access denied.');

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['powermail_sitepackage'] = 'EXT:powermail_sitepackage/Configuration/RTE/Default.yaml';


ExtensionManagementUtility::addTypoScriptConstants('
  @import \'EXT:powermail_sitepackage/Configuration/TypoScript/constants.typoscript\'
');

ExtensionManagementUtility::addTypoScriptSetup('
  @import \'EXT:powermail_sitepackage/Configuration/TypoScript/setup.typoscript\'
');
