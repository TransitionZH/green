<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Initiatives',
	'Initiatives'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_initiatives';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_initiatives.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Events',
	'Events'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Registrations',
	'Registrations'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Synch',
	'Synch'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Transition Tools');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_partnersystem', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_partnersystem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_partnersystem');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_initiative', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_initiative.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_initiative');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_event', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_event.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_event');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_venue', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_venue.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_venue');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_date', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_date.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_date');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_synchroute', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_synchroute.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_synchroute');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_registration', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_registration.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_registration');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_transitiontools_domain_model_feusers', 'EXT:transition_tools/Resources/Private/Language/locallang_csh_tx_transitiontools_domain_model_feusers.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_transitiontools_domain_model_feusers');
