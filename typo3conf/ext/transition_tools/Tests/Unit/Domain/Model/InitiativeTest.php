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
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\Initiative.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class InitiativeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\Initiative
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\Initiative();
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
	public function getClaimReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getClaim()
		);
	}

	/**
	 * @test
	 */
	public function setClaimForStringSetsClaim()
	{
		$this->subject->setClaim('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'claim',
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
	public function getWebLinkReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getWebLink()
		);
	}

	/**
	 * @test
	 */
	public function setWebLinkForStringSetsWebLink()
	{
		$this->subject->setWebLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'webLink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLogoReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getLogo()
		);
	}

	/**
	 * @test
	 */
	public function setLogoForFileReferenceSetsLogo()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setLogo($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'logo',
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
	public function getEventsReturnsInitialValueForEvent()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getEvents()
		);
	}

	/**
	 * @test
	 */
	public function setEventsForObjectStorageContainingEventSetsEvents()
	{
		$event = new \TransitionTeam\TransitionTools\Domain\Model\Event();
		$objectStorageHoldingExactlyOneEvents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneEvents->attach($event);
		$this->subject->setEvents($objectStorageHoldingExactlyOneEvents);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneEvents,
			'events',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addEventToObjectStorageHoldingEvents()
	{
		$event = new \TransitionTeam\TransitionTools\Domain\Model\Event();
		$eventsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$eventsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($event));
		$this->inject($this->subject, 'events', $eventsObjectStorageMock);

		$this->subject->addEvent($event);
	}

	/**
	 * @test
	 */
	public function removeEventFromObjectStorageHoldingEvents()
	{
		$event = new \TransitionTeam\TransitionTools\Domain\Model\Event();
		$eventsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$eventsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($event));
		$this->inject($this->subject, 'events', $eventsObjectStorageMock);

		$this->subject->removeEvent($event);

	}

	/**
	 * @test
	 */
	public function getSourceReturnsInitialValueForPartnerSystem()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getSource()
		);
	}

	/**
	 * @test
	 */
	public function setSourceForPartnerSystemSetsSource()
	{
		$sourceFixture = new \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem();
		$this->subject->setSource($sourceFixture);

		$this->assertAttributeEquals(
			$sourceFixture,
			'source',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueFor()
	{	}

	/**
	 * @test
	 */
	public function setCategoriesForSetsCategories()
	{	}
}
