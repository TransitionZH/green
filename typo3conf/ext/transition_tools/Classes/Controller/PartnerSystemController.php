<?php
namespace TransitionTeam\TransitionTools\Controller;

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
 * PartnerSystemController
 */
class PartnerSystemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * partnerSystemRepository
     *
     * @var \TransitionTeam\TransitionTools\Domain\Repository\PartnerSystemRepository
     * @inject
     */
    protected $partnerSystemRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $partnerSystems = $this->partnerSystemRepository->findAll();
        $this->view->assign('partnerSystems', $partnerSystems);
    }
    
    /**
     * action show
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem
     * @return void
     */
    public function showAction(\TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem)
    {
        $this->view->assign('partnerSystem', $partnerSystem);
    }

}