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
 * Ort
 */
class Venue extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * type
     *
     * @var string
     */
    protected $type = '';
    
    /**
     * loc
     *
     * @var string
     */
    protected $loc = '';
    
    /**
     * source
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem
     */
    protected $source = null;
    
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
     * Returns the loc
     *
     * @return string $loc
     */
    public function getLoc()
    {
        return $this->loc;
    }
    
    /**
     * Sets the loc
     *
     * @param string $loc
     * @return void
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
    }
    
    /**
     * Returns the source
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $source
     */
    public function getSource()
    {
        return $this->source;
    }
    
    /**
     * Sets the source
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $source
     * @return void
     */
    public function setSource(\TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $source)
    {
        $this->source = $source;
    }

}