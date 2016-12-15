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
 * Data Source Domain
 */
class PartnerSystem extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * caption
     *
     * @var string
     */
    protected $caption = '';
    
    /**
     * url
     *
     * @var string
     */
    protected $url = '';
    
    /**
     * synchRoutes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\SynchRoute>
     * @cascade remove
     */
    protected $synchRoutes = null;
    
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
        $this->synchRoutes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
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
     * Returns the url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Sets the url
     *
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    
    /**
     * Adds a SynchRoute
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRoute
     * @return void
     */
    public function addSynchRoute(\TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRoute)
    {
        $this->synchRoutes->attach($synchRoute);
    }
    
    /**
     * Removes a SynchRoute
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRouteToRemove The SynchRoute to be removed
     * @return void
     */
    public function removeSynchRoute(\TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRouteToRemove)
    {
        $this->synchRoutes->detach($synchRouteToRemove);
    }
    
    /**
     * Returns the synchRoutes
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\SynchRoute> $synchRoutes
     */
    public function getSynchRoutes()
    {
        return $this->synchRoutes;
    }
    
    /**
     * Sets the synchRoutes
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\SynchRoute> $synchRoutes
     * @return void
     */
    public function setSynchRoutes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $synchRoutes)
    {
        $this->synchRoutes = $synchRoutes;
    }

}