<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Initiatives',
	array(
		'Initiative' => 'list, show, new, create, edit, update, categories, map, grid',
		
	),
	// non-cacheable actions
	array(
		'DataSourceDomain' => '',
		'Initiative' => 'create, update, ',
		'Event' => 'create, update, ',
		'Venue' => '',
		'Date' => 'create, update',
		'Cateogry' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Events',
	array(
		'Event' => 'list, show, map',
		
	),
	// non-cacheable actions
	array(
		'DataSourceDomain' => '',
		'Initiative' => 'create, update, ',
		'Event' => 'create, update, ',
		'Venue' => '',
		'Date' => 'create, update',
		'Cateogry' => '',
		
	)
);
