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
 * DataSourceRoute
 */
class DataSourceRoute extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * caption
     *
     * @var string
     */
    protected $caption = '';
    
    /**
     * route
     *
     * @var string
     */
    protected $route = '';
    
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

}