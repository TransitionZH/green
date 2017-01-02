<?php

namespace TransitionTeam\TransitionTools\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Benno Flory <benno.flory@gmx.ch>, Benno Flory - Web und Wandel
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
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getClassNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getClassName()
		);
	}

	/**
	 * @test
	 */
	public function setClassNameForStringSetsClassName()
	{
		$this->subject->setClassName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'className',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRouteReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getRoute()
		);
	}

	/**
	 * @test
	 */
	public function setRouteForStringSetsRoute()
	{
		$this->subject->setRoute('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'route',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFormatReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setFormatForIntSetsFormat()
	{	}

	/**
	 * @test
	 */
	public function getTimestampReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTimestamp()
		);
	}

	/**
	 * @test
	 */
	public function setTimestampForDateTimeSetsTimestamp()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setTimestamp($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'timestamp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMappingReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getMapping()
		);
	}

	/**
	 * @test
	 */
	public function setMappingForStringSetsMapping()
	{
		$this->subject->setMapping('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mapping',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCacheDataReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCacheData()
		);
	}

	/**
	 * @test
	 */
	public function setCacheDataForStringSetsCacheData()
	{
		$this->subject->setCacheData('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'cacheData',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCacheLifetimeReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setCacheLifetimeForIntSetsCacheLifetime()
	{	}

	/**
	 * @test
	 */
	public function getKeysToMatchReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getKeysToMatch()
		);
	}

	/**
	 * @test
	 */
	public function setKeysToMatchForStringSetsKeysToMatch()
	{
		$this->subject->setKeysToMatch('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'keysToMatch',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPartnerSystemReturnsInitialValueForPartnerSystem()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPartnerSystem()
		);
	}

	/**
	 * @test
	 */
	public function setPartnerSystemForPartnerSystemSetsPartnerSystem()
	{
		$partnerSystemFixture = new \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem();
		$this->subject->setPartnerSystem($partnerSystemFixture);

		$this->assertAttributeEquals(
			$partnerSystemFixture,
			'partnerSystem',
			$this->subject
		);
	}
}
