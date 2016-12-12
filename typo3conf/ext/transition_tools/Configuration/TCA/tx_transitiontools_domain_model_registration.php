<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_registration',
		'label' => 'uuid',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'uuid,comment,registration_status,fee,payment_status,persons,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('transition_tools') . 'Resources/Public/Icons/tx_transitiontools_domain_model_registration.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, uuid, comment, registration_status, fee, payment_status, persons',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, uuid, comment, registration_status, fee, payment_status, persons, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_transitiontools_domain_model_registration',
				'foreign_table_where' => 'AND tx_transitiontools_domain_model_registration.pid=###CURRENT_PID### AND tx_transitiontools_domain_model_registration.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'uuid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_registration.uuid',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'comment' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_registration.comment',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'registration_status' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_registration.registration_status',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'fee' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_registration.fee',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'payment_status' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_registration.payment_status',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'persons' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_registration.persons',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectMultipleSideBySide',
				'foreign_table' => 'tx_transitiontools_domain_model_feusers',
				'MM' => 'tx_transitiontools_registration_feusers_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'module' => array(
							'name' => 'wizard_edit',
						),
						'type' => 'popup',
						'title' => 'Edit',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'module' => array(
							'name' => 'wizard_add',
						),
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_transitiontools_domain_model_feusers',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
					),
				),
			),
		),
		
		'date' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);