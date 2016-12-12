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
		'PartnerSystem' => '',
		'Initiative' => 'create, update, ',
		'Event' => 'create, update, ',
		'Venue' => '',
		'Date' => 'create, update',
		'SynchRoute' => '',
		'Registration' => 'create, update, delete',
		'FeUsers' => '',
		
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
		'PartnerSystem' => '',
		'Initiative' => 'create, update, ',
		'Event' => 'create, update, ',
		'Venue' => '',
		'Date' => 'create, update',
		'SynchRoute' => '',
		'Registration' => 'create, update, delete',
		'FeUsers' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Registrations',
	array(
		'Registration' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'PartnerSystem' => '',
		'Initiative' => 'create, update, ',
		'Event' => 'create, update, ',
		'Venue' => '',
		'Date' => 'create, update',
		'SynchRoute' => '',
		'Registration' => 'create, update, delete',
		'FeUsers' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TransitionTeam.' . $_EXTKEY,
	'Synch',
	array(
		'SynchRoute' => 'import, export',
		
	),
	// non-cacheable actions
	array(
		'PartnerSystem' => '',
		'Initiative' => 'create, update, ',
		'Event' => 'create, update, ',
		'Venue' => '',
		'Date' => 'create, update',
		'SynchRoute' => '',
		'Registration' => 'create, update, delete',
		'FeUsers' => '',
		
	)
);
