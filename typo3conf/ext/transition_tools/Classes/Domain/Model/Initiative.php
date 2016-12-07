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
 * Transition Initiatives
 */
class Initiative extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * claim
     *
     * @var string
     */
    protected $claim = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * webLink
     *
     * @var string
     */
    protected $webLink = '';
    
    /**
     * logo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $logo = null;
    
    /**
     * venues
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Venue>
     */
    protected $venues = null;
    
    /**
     * events
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Event>
     */
    protected $events = null;
    
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
        $this->events = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the claim
     *
     * @return string $claim
     */
    public function getClaim()
    {
        return $this->claim;
    }
    
    /**
     * Sets the claim
     *
     * @param string $claim
     * @return void
     */
    public function setClaim($claim)
    {
        $this->claim = $claim;
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
     * Returns the webLink
     *
     * @return string $webLink
     */
    public function getWebLink()
    {
        return $this->webLink;
    }
    
    /**
     * Sets the webLink
     *
     * @param string $webLink
     * @return void
     */
    public function setWebLink($webLink)
    {
        $this->webLink = $webLink;
    }
    
    /**
     * Returns the logo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }
    
    /**
     * Sets the logo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
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
     * Adds a Event
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Event $event
     * @return void
     */
    public function addEvent(\TransitionTeam\TransitionTools\Domain\Model\Event $event)
    {
        $this->events->attach($event);
    }
    
    /**
     * Removes a Event
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Event $eventToRemove The Event to be removed
     * @return void
     */
    public function removeEvent(\TransitionTeam\TransitionTools\Domain\Model\Event $eventToRemove)
    {
        $this->events->detach($eventToRemove);
    }
    
    /**
     * Returns the events
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Event> $events
     */
    public function getEvents()
    {
        return $this->events;
    }
    
    /**
     * Sets the events
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Event> $events
     * @return void
     */
    public function setEvents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $events)
    {
        $this->events = $events;
    }

}