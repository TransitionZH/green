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
	public function getDatesReturnsInitialValueForDate()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getDates()
		);
	}

	/**
	 * @test
	 */
	public function setDatesForObjectStorageContainingDateSetsDates()
	{
		$date = new \TransitionTeam\TransitionTools\Domain\Model\Date();
		$objectStorageHoldingExactlyOneDates = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneDates->attach($date);
		$this->subject->setDates($objectStorageHoldingExactlyOneDates);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneDates,
			'dates',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addDateToObjectStorageHoldingDates()
	{
		$date = new \TransitionTeam\TransitionTools\Domain\Model\Date();
		$datesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$datesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($date));
		$this->inject($this->subject, 'dates', $datesObjectStorageMock);

		$this->subject->addDate($date);
	}

	/**
	 * @test
	 */
	public function removeDateFromObjectStorageHoldingDates()
	{
		$date = new \TransitionTeam\TransitionTools\Domain\Model\Date();
		$datesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$datesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($date));
		$this->inject($this->subject, 'dates', $datesObjectStorageMock);

		$this->subject->removeDate($date);

	}

	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForCategory()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForObjectStorageContainingCategorySetsCategories()
	{
		$category = new \TransitionTeam\TransitionTools\Domain\Model\Category();
		$objectStorageHoldingExactlyOneCategories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategories->attach($category);
		$this->subject->setCategories($objectStorageHoldingExactlyOneCategories);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategories,
			'categories',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategories()
	{
		$category = new \TransitionTeam\TransitionTools\Domain\Model\Category();
		$categoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoriesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($category));
		$this->inject($this->subject, 'categories', $categoriesObjectStorageMock);

		$this->subject->addCategory($category);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategories()
	{
		$category = new \TransitionTeam\TransitionTools\Domain\Model\Category();
		$categoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoriesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($category));
		$this->inject($this->subject, 'categories', $categoriesObjectStorageMock);

		$this->subject->removeCategory($category);

	}

	/**
	 * @test
	 */
	public function getRelatedEventsReturnsInitialValueForEvent()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRelatedEvents()
		);
	}

	/**
	 * @test
	 */
	public function setRelatedEventsForObjectStorageContainingEventSetsRelatedEvents()
	{
		$relatedEvent = new \TransitionTeam\TransitionTools\Domain\Model\Event();
		$objectStorageHoldingExactlyOneRelatedEvents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRelatedEvents->attach($relatedEvent);
		$this->subject->setRelatedEvents($objectStorageHoldingExactlyOneRelatedEvents);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRelatedEvents,
			'relatedEvents',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRelatedEventToObjectStorageHoldingRelatedEvents()
	{
		$relatedEvent = new \TransitionTeam\TransitionTools\Domain\Model\Event();
		$relatedEventsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$relatedEventsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($relatedEvent));
		$this->inject($this->subject, 'relatedEvents', $relatedEventsObjectStorageMock);

		$this->subject->addRelatedEvent($relatedEvent);
	}

	/**
	 * @test
	 */
	public function removeRelatedEventFromObjectStorageHoldingRelatedEvents()
	{
		$relatedEvent = new \TransitionTeam\TransitionTools\Domain\Model\Event();
		$relatedEventsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$relatedEventsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($relatedEvent));
		$this->inject($this->subject, 'relatedEvents', $relatedEventsObjectStorageMock);

		$this->subject->removeRelatedEvent($relatedEvent);

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
