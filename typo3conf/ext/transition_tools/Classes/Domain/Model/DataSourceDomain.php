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
class DataSourceDomain extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * routes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute>
     * @cascade remove
     */
    protected $routes = null;
    
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
        $this->routes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a DataSourceRoute
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute $route
     * @return void
     */
    public function addRoute(\TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute $route)
    {
        $this->routes->attach($route);
    }
    
    /**
     * Removes a DataSourceRoute
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute $routeToRemove The DataSourceRoute to be removed
     * @return void
     */
    public function removeRoute(\TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute $routeToRemove)
    {
        $this->routes->detach($routeToRemove);
    }
    
    /**
     * Returns the routes
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute> $routes
     */
    public function getRoutes()
    {
        return $this->routes;
    }
    
    /**
     * Sets the routes
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute> $routes
     * @return void
     */
    public function setRoutes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $routes)
    {
        $this->routes = $routes;
    }

}