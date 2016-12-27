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
 * Transition Initiatives (Openki: Gruppe)
 */
class Initiative extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category>
     */
    protected $categories = null;
    
    /**
     * relatedInitiatives
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Initiative>
     */
    protected $relatedInitiatives = null;
    
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
        $this->events = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->relatedInitiatives = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * underscore to camelcase
     */
    public function underscoreToUpperCamelcase($underscoreString) {
        $parts = explode('_', $underscoreString);
        $ucParts = array_map(function($part) { return ucfirst($part); }, $parts);
        return implode('', $ucParts);
    }
    
    /**
     * Initializes the object with stdObject data from Openki
     *
     * @param \stdClass $initiativeFromOpenki
     * @return void
     */
    public function initFromOpenki(\stdClass $initiativeFromOpenki)
    {
        $propertiesMap = [
            'name' => 'name',
            'claim' => 'claim',
            'description' => 'description',
            'venue' => 'venue',
        ];
        
        // Loop and map all properties
        foreach($propertiesMap as $openkiProperty => $property) {
            if (property_exists($initiativeFromOpenki, $openkiProperty)) {
                
                // Set special cases first
                if ($property == 'venue') {
                    if (property_exists($initiativeFromOpenki->venue, 'loc')) {
                        $venue = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TransitionTeam\\TransitionTools\\Domain\\Model\\Venue');
                        $venue->setLocLongitude($initiativeFromOpenki->venue->loc->coordinates[0]);
                        $venue->setLocLatitude($initiativeFromOpenki->venue->loc->coordinates[1]);
                        $this->addVenue($venue);
                    }
                }
                
                // Then set the standard properties
                else {
                    $setter = 'set' . $this->underscoreToUpperCamelcase($property);
                    $this->$setter($initiativeFromOpenki->$property);
                }
            }
        }
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
     * Adds a Initiative
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $relatedInitiative
     * @return void
     */
    public function addRelatedInitiative(\TransitionTeam\TransitionTools\Domain\Model\Initiative $relatedInitiative)
    {
        $this->relatedInitiatives->attach($relatedInitiative);
    }
    
    /**
     * Removes a Initiative
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $relatedInitiativeToRemove The Initiative to be removed
     * @return void
     */
    public function removeRelatedInitiative(\TransitionTeam\TransitionTools\Domain\Model\Initiative $relatedInitiativeToRemove)
    {
        $this->relatedInitiatives->detach($relatedInitiativeToRemove);
    }
    
    /**
     * Returns the relatedInitiatives
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Initiative> $relatedInitiatives
     */
    public function getRelatedInitiatives()
    {
        return $this->relatedInitiatives;
    }
    
    /**
     * Sets the relatedInitiatives
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Initiative> $relatedInitiatives
     * @return void
     */
    public function setRelatedInitiatives(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedInitiatives)
    {
        $this->relatedInitiatives = $relatedInitiatives;
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