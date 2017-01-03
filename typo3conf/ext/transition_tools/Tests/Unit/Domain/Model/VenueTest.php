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
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\Venue.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class VenueTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\Venue
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\Venue();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getUuidReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUuid()
		);
	}

	/**
	 * @test
	 */
	public function setUuidForStringSetsUuid()
	{
		$this->subject->setUuid('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'uuid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSourceIdReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSourceId()
		);
	}

	/**
	 * @test
	 */
	public function setSourceIdForStringSetsSourceId()
	{
		$this->subject->setSourceId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sourceId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForStringSetsType()
	{
		$this->subject->setType('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'type',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocLatitudeReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getLocLatitude()
		);
	}

	/**
	 * @test
	 */
	public function setLocLatitudeForFloatSetsLocLatitude()
	{
		$this->subject->setLocLatitude(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'locLatitude',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getLocLongitudeReturnsInitialValueForFloat()
	{
		$this->assertSame(
			0.0,
			$this->subject->getLocLongitude()
		);
	}

	/**
	 * @test
	 */
	public function setLocLongitudeForFloatSetsLocLongitude()
	{
		$this->subject->setLocLongitude(3.14159265);

		$this->assertAttributeEquals(
			3.14159265,
			'locLongitude',
			$this->subject,
			'',
			0.000000001
		);
	}

	/**
	 * @test
	 */
	public function getSourceReturnsInitialValueForSynchRoute()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getSource()
		);
	}

	/**
	 * @test
	 */
	public function setSourceForSynchRouteSetsSource()
	{
		$sourceFixture = new \TransitionTeam\TransitionTools\Domain\Model\SynchRoute();
		$this->subject->setSource($sourceFixture);

		$this->assertAttributeEquals(
			$sourceFixture,
			'source',
			$this->subject
		);
	}
}
