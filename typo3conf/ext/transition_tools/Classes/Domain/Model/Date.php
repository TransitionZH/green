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
 * Termin
 */
class Date extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

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

}