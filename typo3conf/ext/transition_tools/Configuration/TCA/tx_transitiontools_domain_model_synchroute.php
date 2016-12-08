<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute',
		'label' => 'caption',
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
		'searchFields' => 'caption,import_route,class_name,import_format,import_tstamp,import_mapping,import_cache_data,import_cache_lifetime,export_route,export_format,export_tstamp,export_mapping,partner_system,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('transition_tools') . 'Resources/Public/Icons/tx_transitiontools_domain_model_synchroute.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, caption, import_route, class_name, import_format, import_tstamp, import_mapping, import_cache_data, import_cache_lifetime, export_route, export_format, export_tstamp, export_mapping, partner_system',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, caption, import_route, class_name, import_format, import_tstamp, import_mapping, import_cache_data, import_cache_lifetime, export_route, export_format, export_tstamp, export_mapping, partner_system, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_transitiontools_domain_model_synchroute',
				'foreign_table_where' => 'AND tx_transitiontools_domain_model_synchroute.pid=###CURRENT_PID### AND tx_transitiontools_domain_model_synchroute.sys_language_uid IN (-1,0)',
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

		'caption' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.caption',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'import_route' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.import_route',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'class_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.class_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'import_format' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.import_format',
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
		'import_tstamp' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.import_tstamp',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'import_mapping' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.import_mapping',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'import_cache_data' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.import_cache_data',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'import_cache_lifetime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.import_cache_lifetime',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'export_route' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.export_route',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'export_format' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.export_format',
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
		'export_tstamp' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.export_tstamp',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'export_mapping' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.export_mapping',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'partner_system' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:transition_tools/Resources/Private/Language/locallang_db.xlf:tx_transitiontools_domain_model_synchroute.partner_system',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_transitiontools_domain_model_partnersystem',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
		'partnersystem' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);