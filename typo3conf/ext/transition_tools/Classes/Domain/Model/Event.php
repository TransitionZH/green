<?php
namespace TransitionTeam\TransitionTools\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Benno Flory <benno.flory@gmx.ch>, Benno Flory - Web und Wandel
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Veranstaltung (Openki: Kurs)
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * uuid
     *
     * @var string
     */
    protected $uuid = '';
    
    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * contact
     *
     * @var string
     */
    protected $contact = '';
    
    /**
     * weblink
     *
     * @var string
     */
    protected $weblink = '';
    
    /**
     * venues
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Venue>
     */
    protected $venues = null;
    
    /**
     * dates
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Date>
     * @cascade remove
     */
    protected $dates = null;
    
    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category>
     */
    protected $categories = null;
    
    /**
     * relatedEvents
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Event>
     */
    protected $relatedEvents = null;
    
    /**
     * source
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\SynchRoute
     */
    protected $source = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->venues = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->dates = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->relatedEvents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the uuid
     *
     * @return string $uuid
     */
    public function getUuid()
    {
        return $this->uuid;
    }
    
    /**
     * Sets the uuid
     *
     * @param string $uuid
     * @return void
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the contact
     *
     * @return string $contact
     */
    public function getContact()
    {
        return $this->contact;
    }
    
    /**
     * Sets the contact
     *
     * @param string $contact
     * @return void
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }
    
    /**
     * Returns the weblink
     *
     * @return string $weblink
     */
    public function getWeblink()
    {
        return $this->weblink;
    }
    
    /**
     * Sets the weblink
     *
     * @param string $weblink
     * @return void
     */
    public function setWeblink($weblink)
    {
        $this->weblink = $weblink;
    }
    
    /**
     * Adds a Venue
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Venue $venue
     * @return void
     */
    public function addVenue(\TransitionTeam\TransitionTools\Domain\Model\Venue $venue)
    {
        $this->venues->attach($venue);
    }
    
    /**
     * Removes a Venue
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Venue $venueToRemove The Venue to be removed
     * @return void
     */
    public function removeVenue(\TransitionTeam\TransitionTools\Domain\Model\Venue $venueToRemove)
    {
        $this->venues->detach($venueToRemove);
    }
    
    /**
     * Returns the venues
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Venue> $venues
     */
    public function getVenues()
    {
        return $this->venues;
    }
    
    /**
     * Sets the venues
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Venue> $venues
     * @return void
     */
    public function setVenues(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $venues)
    {
        $this->venues = $venues;
    }
    
    /**
     * Adds a Date
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Date $date
     * @return void
     */
    public function addDate(\TransitionTeam\TransitionTools\Domain\Model\Date $date)
    {
        $this->dates->attach($date);
    }
    
    /**
     * Removes a Date
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Date $dateToRemove The Date to be removed
     * @return void
     */
    public function removeDate(\TransitionTeam\TransitionTools\Domain\Model\Date $dateToRemove)
    {
        $this->dates->detach($dateToRemove);
    }
    
    /**
     * Returns the dates
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Date> $dates
     */
    public function getDates()
    {
        return $this->dates;
    }
    
    /**
     * Sets the dates
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Date> $dates
     * @return void
     */
    public function setDates(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $dates)
    {
        $this->dates = $dates;
    }
    
    /**
     * Adds a Category
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\TransitionTeam\TransitionTools\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }
    
    /**
     * Removes a Category
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\TransitionTeam\TransitionTools\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }
    
    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
    
    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }
    
    /**
     * Adds a Event
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Event $relatedEvent
     * @return void
     */
    public function addRelatedEvent(\TransitionTeam\TransitionTools\Domain\Model\Event $relatedEvent)
    {
        $this->relatedEvents->attach($relatedEvent);
    }
    
    /**
     * Removes a Event
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Event $relatedEventToRemove The Event to be removed
     * @return void
     */
    public function removeRelatedEvent(\TransitionTeam\TransitionTools\Domain\Model\Event $relatedEventToRemove)
    {
        $this->relatedEvents->detach($relatedEventToRemove);
    }
    
    /**
     * Returns the relatedEvents
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Event> $relatedEvents
     */
    public function getRelatedEvents()
    {
        return $this->relatedEvents;
    }
    
    /**
     * Sets the relatedEvents
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Event> $relatedEvents
     * @return void
     */
    public function setRelatedEvents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedEvents)
    {
        $this->relatedEvents = $relatedEvents;
    }
    
    /**
     * Returns the source
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $source
     */
    public function getSource()
    {
        return $this->source;
    }
    
    /**
     * Sets the source
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $source
     * @return void
     */
    public function setSource(\TransitionTeam\TransitionTools\Domain\Model\SynchRoute $source)
    {
        $this->source = $source;
    }

}