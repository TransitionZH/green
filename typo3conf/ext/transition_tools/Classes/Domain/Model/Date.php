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
 * Termin (Openki: Event)
 */
class Date extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * uuid
     *
     * @var string
     */
    protected $uuid = '';
    
    /**
     * start
     *
     * @var \DateTime
     */
    protected $start = null;
    
    /**
     * end
     *
     * @var \DateTime
     */
    protected $end = null;
    
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
     * @var \DateTime
     */
    protected $weblink = null;
    
    /**
     * minRegistrations
     *
     * @var int
     */
    protected $minRegistrations = 0;
    
    /**
     * maxRegistrations
     *
     * @var int
     */
    protected $maxRegistrations = 0;
    
    /**
     * hasWaitingList
     *
     * @var bool
     */
    protected $hasWaitingList = false;
    
    /**
     * fee
     *
     * @var string
     */
    protected $fee = '';
    
    /**
     * venues
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Venue>
     */
    protected $venues = null;
    
    /**
     * registrations
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Registration>
     * @cascade remove
     */
    protected $registrations = null;
    
    /**
     * event
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\Event
     */
    protected $event = null;
    
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
        $this->registrations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the start
     *
     * @return \DateTime $start
     */
    public function getStart()
    {
        return $this->start;
    }
    
    /**
     * Sets the start
     *
     * @param \DateTime $start
     * @return void
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
    }
    
    /**
     * Returns the end
     *
     * @return \DateTime $end
     */
    public function getEnd()
    {
        return $this->end;
    }
    
    /**
     * Sets the end
     *
     * @param \DateTime $end
     * @return void
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
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
     * @return \DateTime $weblink
     */
    public function getWeblink()
    {
        return $this->weblink;
    }
    
    /**
     * Sets the weblink
     *
     * @param \DateTime $weblink
     * @return void
     */
    public function setWeblink(\DateTime $weblink)
    {
        $this->weblink = $weblink;
    }
    
    /**
     * Returns the minRegistrations
     *
     * @return int $minRegistrations
     */
    public function getMinRegistrations()
    {
        return $this->minRegistrations;
    }
    
    /**
     * Sets the minRegistrations
     *
     * @param int $minRegistrations
     * @return void
     */
    public function setMinRegistrations($minRegistrations)
    {
        $this->minRegistrations = $minRegistrations;
    }
    
    /**
     * Returns the maxRegistrations
     *
     * @return int $maxRegistrations
     */
    public function getMaxRegistrations()
    {
        return $this->maxRegistrations;
    }
    
    /**
     * Sets the maxRegistrations
     *
     * @param int $maxRegistrations
     * @return void
     */
    public function setMaxRegistrations($maxRegistrations)
    {
        $this->maxRegistrations = $maxRegistrations;
    }
    
    /**
     * Returns the hasWaitingList
     *
     * @return bool $hasWaitingList
     */
    public function getHasWaitingList()
    {
        return $this->hasWaitingList;
    }
    
    /**
     * Sets the hasWaitingList
     *
     * @param bool $hasWaitingList
     * @return void
     */
    public function setHasWaitingList($hasWaitingList)
    {
        $this->hasWaitingList = $hasWaitingList;
    }
    
    /**
     * Returns the boolean state of hasWaitingList
     *
     * @return bool
     */
    public function isHasWaitingList()
    {
        return $this->hasWaitingList;
    }
    
    /**
     * Returns the fee
     *
     * @return string $fee
     */
    public function getFee()
    {
        return $this->fee;
    }
    
    /**
     * Sets the fee
     *
     * @param string $fee
     * @return void
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
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
     * Adds a Registration
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Registration $registration
     * @return void
     */
    public function addRegistration(\TransitionTeam\TransitionTools\Domain\Model\Registration $registration)
    {
        $this->registrations->attach($registration);
    }
    
    /**
     * Removes a Registration
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Registration $registrationToRemove The Registration to be removed
     * @return void
     */
    public function removeRegistration(\TransitionTeam\TransitionTools\Domain\Model\Registration $registrationToRemove)
    {
        $this->registrations->detach($registrationToRemove);
    }
    
    /**
     * Returns the registrations
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Registration> $registrations
     */
    public function getRegistrations()
    {
        return $this->registrations;
    }
    
    /**
     * Sets the registrations
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Registration> $registrations
     * @return void
     */
    public function setRegistrations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $registrations)
    {
        $this->registrations = $registrations;
    }
    
    /**
     * Returns the event
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\Event $event
     */
    public function getEvent()
    {
        return $this->event;
    }
    
    /**
     * Sets the event
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Event $event
     * @return void
     */
    public function setEvent(\TransitionTeam\TransitionTools\Domain\Model\Event $event)
    {
        $this->event = $event;
    }

}