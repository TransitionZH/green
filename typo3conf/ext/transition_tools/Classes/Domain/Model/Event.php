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
 * Veranstaltung
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

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
     * weblink
     *
     * @var string
     */
    protected $weblink = '';
    
    /**
     * location
     *
     * @var string
     */
    protected $location = '';
    
    /**
     * venue
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\Venue
     */
    protected $venue = null;
    
    /**
     * dates
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\Date
     */
    protected $dates = null;
    
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
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    /**
     * Returns the venue
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\Venue $venue
     */
    public function getVenue()
    {
        return $this->venue;
    }
    
    /**
     * Sets the venue
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Venue $venue
     * @return void
     */
    public function setVenue(\TransitionTeam\TransitionTools\Domain\Model\Venue $venue)
    {
        $this->venue = $venue;
    }
    
    /**
     * Returns the dates
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\Date $dates
     */
    public function getDates()
    {
        return $this->dates;
    }
    
    /**
     * Sets the dates
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Date $dates
     * @return void
     */
    public function setDates(\TransitionTeam\TransitionTools\Domain\Model\Date $dates)
    {
        $this->dates = $dates;
    }

}