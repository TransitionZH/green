<?php
namespace TransitionTeam\TransitionTools\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Benno Flory <benno.flory@gmx.ch>, Benno Flory - Web und Wandel
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
 * Ort
 */
class Venue extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * uuid
     *
     * @var string
     */
    protected $uuid = '';
    
    /**
     * sourceId
     *
     * @var string
     */
    protected $sourceId = '';
    
    /**
     * type
     *
     * @var string
     */
    protected $type = '';
    
    /**
     * locLatitude
     *
     * @var float
     */
    protected $locLatitude = 0.0;
    
    /**
     * locLongitude
     *
     * @var float
     */
    protected $locLongitude = 0.0;
    
    /**
     * source
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\SynchRoute
     */
    protected $source = null;
    
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
     * Returns the sourceId
     *
     * @return string $sourceId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }
    
    /**
     * Sets the sourceId
     *
     * @param string $sourceId
     * @return void
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    }
    
    /**
     * Returns the type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Sets the type
     *
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * Returns the locLatitude
     *
     * @return float $locLatitude
     */
    public function getLocLatitude()
    {
        return $this->locLatitude;
    }
    
    /**
     * Sets the locLatitude
     *
     * @param float $locLatitude
     * @return void
     */
    public function setLocLatitude($locLatitude)
    {
        $this->locLatitude = $locLatitude;
    }
    
    /**
     * Returns the locLongitude
     *
     * @return float $locLongitude
     */
    public function getLocLongitude()
    {
        return $this->locLongitude;
    }
    
    /**
     * Sets the locLongitude
     *
     * @param float $locLongitude
     * @return void
     */
    public function setLocLongitude($locLongitude)
    {
        $this->locLongitude = $locLongitude;
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