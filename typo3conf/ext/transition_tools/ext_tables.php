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

/**
 * Make categorizable
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    'TransitionTeam.' . $_EXTKEY,
    'tx_transitiontools_domain_model_initiative',
    'categories',
    array(
        'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang.xlf:tx_transitiontools_domain_model_initiative.categories',
        'exclude' => FALSE,
        'fieldConfiguration' => array(
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
        )
    )
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    'TransitionTeam.' . $_EXTKEY,
    'tx_transitiontools_domain_model_event',
    'categories',
    array(
        'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang.xlf:tx_transitiontools_domain_model_event.categories',
        'exclude' => FALSE,
        'fieldConfiguration' => array(
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
        )
    )
);

// Configure new category fielda:
$temporaryColumns = array(
    'css' => array(
        'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:sys_category.css',
        'exclude' => 0,
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:sys_category.css.violet', violet),
                array('LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:sys_category.css.brown', brown),
                array('LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:sys_category.css.turquoise', turquoise),
                array('LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:sys_category.css.red', red),
                array('LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:sys_category.css.green', green),
                array('LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:sys_category.css.blue', blue),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required'
        ),
    ),
);

// Add new category fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $temporaryColumns);

// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
  'sys_category', // Table name
  'css',
//  '1', // List of specific types to add the field list to. (If empty, all type entries are affected)
  'after:title' // Insert fields before (default) or after one, or replace a field
);
//
//// Add the new palette:
//$GLOBALS['TCA']['pages']['palettes']['style'] = array(
//  'showitem' => 'css'
//);
