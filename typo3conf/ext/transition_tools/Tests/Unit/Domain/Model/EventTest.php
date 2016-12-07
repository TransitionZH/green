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
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\Event.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\Event
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\Event();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
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
	public function getWeblinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getWeblink()
		);
	}

	/**
	 * @test
	 */
	public function setWeblinkForStringSetsWeblink()
	{
		$this->subject->setWeblink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'weblink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLocation()
		);
	}

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation()
	{
		$this->subject->setLocation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'location',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVenueReturnsInitialValueForVenue()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getVenue()
		);
	}

	/**
	 * @test
	 */
	public function setVenueForVenueSetsVenue()
	{
		$venueFixture = new \TransitionTeam\TransitionTools\Domain\Model\Venue();
		$this->subject->setVenue($venueFixture);

		$this->assertAttributeEquals(
			$venueFixture,
			'venue',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDatesReturnsInitialValueForDate()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getDates()
		);
	}

	/**
	 * @test
	 */
	public function setDatesForDateSetsDates()
	{
		$datesFixture = new \TransitionTeam\TransitionTools\Domain\Model\Date();
		$this->subject->setDates($datesFixture);

		$this->assertAttributeEquals(
			$datesFixture,
			'dates',
			$this->subject
		);
	}
}
