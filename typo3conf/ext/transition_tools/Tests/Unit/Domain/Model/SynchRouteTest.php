<?php

namespace TransitionTeam\TransitionTools\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Benno Flory <benno.flory@gmx.ch>, Benno Flory - Web und Wandel
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\SynchRoute.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class SynchRouteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\SynchRoute
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\SynchRoute();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getCaptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCaption()
		);
	}

	/**
	 * @test
	 */
	public function setCaptionForStringSetsCaption()
	{
		$this->subject->setCaption('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'caption',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRootClassReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getRootClass()
		);
	}

	/**
	 * @test
	 */
	public function setRootClassForStringSetsRootClass()
	{
		$this->subject->setRootClass('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'rootClass',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImportRouteReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getImportRoute()
		);
	}

	/**
	 * @test
	 */
	public function setImportRouteForStringSetsImportRoute()
	{
		$this->subject->setImportRoute('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'importRoute',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImportFormatReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setImportFormatForIntSetsImportFormat()
	{	}

	/**
	 * @test
	 */
	public function getImportTstampReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImportTstamp()
		);
	}

	/**
	 * @test
	 */
	public function setImportTstampForDateTimeSetsImportTstamp()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setImportTstamp($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'importTstamp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImportMappingReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getImportMapping()
		);
	}

	/**
	 * @test
	 */
	public function setImportMappingForStringSetsImportMapping()
	{
		$this->subject->setImportMapping('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'importMapping',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImportCacheDataReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getImportCacheData()
		);
	}

	/**
	 * @test
	 */
	public function setImportCacheDataForStringSetsImportCacheData()
	{
		$this->subject->setImportCacheData('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'importCacheData',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImportCacheLifetimeReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setImportCacheLifetimeForIntSetsImportCacheLifetime()
	{	}

	/**
	 * @test
	 */
	public function getExportRouteReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getExportRoute()
		);
	}

	/**
	 * @test
	 */
	public function setExportRouteForStringSetsExportRoute()
	{
		$this->subject->setExportRoute('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'exportRoute',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getExportFormatReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setExportFormatForIntSetsExportFormat()
	{	}

	/**
	 * @test
	 */
	public function getExportTstampReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getExportTstamp()
		);
	}

	/**
	 * @test
	 */
	public function setExportTstampForDateTimeSetsExportTstamp()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setExportTstamp($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'exportTstamp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getExportMappingReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getExportMapping()
		);
	}

	/**
	 * @test
	 */
	public function setExportMappingForStringSetsExportMapping()
	{
		$this->subject->setExportMapping('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'exportMapping',
			$this->subject
		);
	}
}
