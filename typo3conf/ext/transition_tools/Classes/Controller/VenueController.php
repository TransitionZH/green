<?php
namespace TransitionTeam\TransitionTools\Controller;


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
 * VenueController
 */
class VenueController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * venueRepository
     *
     * @var \TransitionTeam\TransitionTools\Domain\Repository\VenueRepository
     * @inject
     */
    protected $venueRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $venues = $this->venueRepository->findAll();
        $this->view->assign('venues', $venues);
    }
    
    /**
     * action show
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Venue $venue
     * @return void
     */
    public function showAction(\TransitionTeam\TransitionTools\Domain\Model\Venue $venue)
    {
        $this->view->assign('venue', $venue);
    }

}