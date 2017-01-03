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
 * SynchRoute
 */
class SynchRoute extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * caption
     *
     * @var string
     */
    protected $caption = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * className
     *
     * @var string
     */
    protected $className = '';
    
    /**
     * route
     *
     * @var string
     */
    protected $route = '';
    
    /**
     * format
     *
     * @var int
     */
    protected $format = 0;
    
    /**
     * timestamp
     *
     * @var \DateTime
     */
    protected $timestamp = null;
    
    /**
     * mapping
     *
     * @var string
     */
    protected $mapping = '';
    
    /**
     * cacheData
     *
     * @var string
     */
    protected $cacheData = '';
    
    /**
     * cacheLifetime
     *
     * @var int
     */
    protected $cacheLifetime = 0;
    
    /**
     * keysToMatch
     *
     * @var string
     */
    protected $keysToMatch = '';
    
    /**
     * partnerSystem
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem
     */
    protected $partnerSystem = null;
    
    /**
     * Returns the caption
     *
     * @return string $caption
     */
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * Sets the caption
     *
     * @param string $caption
     * @return void
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
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
     * Returns the className
     *
     * @return string $className
     */
    public function getClassName()
    {
        return $this->className;
    }
    
    /**
     * Sets the className
     *
     * @param string $className
     * @return void
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }
    
    /**
     * Returns the route
     *
     * @return string $route
     */
    public function getRoute()
    {
        return $this->route;
    }
    
    /**
     * Sets the route
     *
     * @param string $route
     * @return void
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }
    
    /**
     * Returns the format
     *
     * @return int $format
     */
    public function getFormat()
    {
        return $this->format;
    }
    
    /**
     * Sets the format
     *
     * @param int $format
     * @return void
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }
    
    /**
     * Returns the timestamp
     *
     * @return \DateTime $timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     * Sets the timestamp
     *
     * @param \DateTime $timestamp
     * @return void
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
    }
    
    /**
     * Returns the mapping
     *
     * @return string $mapping
     */
    public function getMapping()
    {
        return $this->mapping;
    }
    
    /**
     * Sets the mapping
     *
     * @param string $mapping
     * @return void
     */
    public function setMapping($mapping)
    {
        $this->mapping = $mapping;
    }
    
    /**
     * Returns the cacheData
     *
     * @return string $cacheData
     */
    public function getCacheData()
    {
        return $this->cacheData;
    }
    
    /**
     * Sets the cacheData
     *
     * @param string $cacheData
     * @return void
     */
    public function setCacheData($cacheData)
    {
        $this->cacheData = $cacheData;
    }
    
    /**
     * Returns the cacheLifetime
     *
     * @return int $cacheLifetime
     */
    public function getCacheLifetime()
    {
        return $this->cacheLifetime;
    }
    
    /**
     * Sets the cacheLifetime
     *
     * @param int $cacheLifetime
     * @return void
     */
    public function setCacheLifetime($cacheLifetime)
    {
        $this->cacheLifetime = $cacheLifetime;
    }
    
    /**
     * Returns the keysToMatch
     *
     * @return string $keysToMatch
     */
    public function getKeysToMatch()
    {
        return $this->keysToMatch;
    }
    
    /**
     * Sets the keysToMatch
     *
     * @param string $keysToMatch
     * @return void
     */
    public function setKeysToMatch($keysToMatch)
    {
        $this->keysToMatch = $keysToMatch;
    }
    
    /**
     * Returns the partnerSystem
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem
     */
    public function getPartnerSystem()
    {
        return $this->partnerSystem;
    }
    
    /**
     * Sets the partnerSystem
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem
     * @return void
     */
    public function setPartnerSystem(\TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem)
    {
        $this->partnerSystem = $partnerSystem;
    }

}