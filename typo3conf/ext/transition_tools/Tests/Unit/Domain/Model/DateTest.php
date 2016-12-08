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
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\Date.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class DateTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\Date
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\Date();
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
	public function getStartReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getStart()
		);
	}

	/**
	 * @test
	 */
	public function setStartForDateTimeSetsStart()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setStart($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'start',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getEnd()
		);
	}

	/**
	 * @test
	 */
	public function setEndForDateTimeSetsEnd()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setEnd($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'end',
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
	public function getContactReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getContact()
		);
	}

	/**
	 * @test
	 */
	public function setContactForStringSetsContact()
	{
		$this->subject->setContact('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contact',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWeblinkReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getWeblink()
		);
	}

	/**
	 * @test
	 */
	public function setWeblinkForDateTimeSetsWeblink()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setWeblink($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'weblink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMinRegistrationsReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setMinRegistrationsForIntSetsMinRegistrations()
	{	}

	/**
	 * @test
	 */
	public function getMaxRegistrationsReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setMaxRegistrationsForIntSetsMaxRegistrations()
	{	}

	/**
	 * @test
	 */
	public function getHasWaitingListReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getHasWaitingList()
		);
	}

	/**
	 * @test
	 */
	public function setHasWaitingListForBoolSetsHasWaitingList()
	{
		$this->subject->setHasWaitingList(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'hasWaitingList',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFeeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFee()
		);
	}

	/**
	 * @test
	 */
	public function setFeeForStringSetsFee()
	{
		$this->subject->setFee('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fee',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVenuesReturnsInitialValueForVenue()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getVenues()
		);
	}

	/**
	 * @test
	 */
	public function setVenuesForObjectStorageContainingVenueSetsVenues()
	{
		$venue = new \TransitionTeam\TransitionTools\Domain\Model\Venue();
		$objectStorageHoldingExactlyOneVenues = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneVenues->attach($venue);
		$this->subject->setVenues($objectStorageHoldingExactlyOneVenues);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneVenues,
			'venues',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addVenueToObjectStorageHoldingVenues()
	{
		$venue = new \TransitionTeam\TransitionTools\Domain\Model\Venue();
		$venuesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$venuesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($venue));
		$this->inject($this->subject, 'venues', $venuesObjectStorageMock);

		$this->subject->addVenue($venue);
	}

	/**
	 * @test
	 */
	public function removeVenueFromObjectStorageHoldingVenues()
	{
		$venue = new \TransitionTeam\TransitionTools\Domain\Model\Venue();
		$venuesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$venuesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($venue));
		$this->inject($this->subject, 'venues', $venuesObjectStorageMock);

		$this->subject->removeVenue($venue);

	}

	/**
	 * @test
	 */
	public function getRegistrationsReturnsInitialValueForRegistration()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRegistrations()
		);
	}

	/**
	 * @test
	 */
	public function setRegistrationsForObjectStorageContainingRegistrationSetsRegistrations()
	{
		$registration = new \TransitionTeam\TransitionTools\Domain\Model\Registration();
		$objectStorageHoldingExactlyOneRegistrations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRegistrations->attach($registration);
		$this->subject->setRegistrations($objectStorageHoldingExactlyOneRegistrations);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRegistrations,
			'registrations',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRegistrationToObjectStorageHoldingRegistrations()
	{
		$registration = new \TransitionTeam\TransitionTools\Domain\Model\Registration();
		$registrationsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$registrationsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($registration));
		$this->inject($this->subject, 'registrations', $registrationsObjectStorageMock);

		$this->subject->addRegistration($registration);
	}

	/**
	 * @test
	 */
	public function removeRegistrationFromObjectStorageHoldingRegistrations()
	{
		$registration = new \TransitionTeam\TransitionTools\Domain\Model\Registration();
		$registrationsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$registrationsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($registration));
		$this->inject($this->subject, 'registrations', $registrationsObjectStorageMock);

		$this->subject->removeRegistration($registration);

	}

	/**
	 * @test
	 */
	public function getEventReturnsInitialValueForEvent()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getEvent()
		);
	}

	/**
	 * @test
	 */
	public function setEventForEventSetsEvent()
	{
		$eventFixture = new \TransitionTeam\TransitionTools\Domain\Model\Event();
		$this->subject->setEvent($eventFixture);

		$this->assertAttributeEquals(
			$eventFixture,
			'event',
			$this->subject
		);
	}
}
