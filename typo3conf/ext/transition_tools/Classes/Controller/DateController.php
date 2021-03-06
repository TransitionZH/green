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
 * DateController
 */
class DateController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * dateRepository
     *
     * @var \TransitionTeam\TransitionTools\Domain\Repository\DateRepository
     * @inject
     */
    protected $dateRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $dates = $this->dateRepository->findAll();
        $this->view->assign('dates', $dates);
    }
    
    /**
     * action show
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Date $date
     * @return void
     */
    public function showAction(\TransitionTeam\TransitionTools\Domain\Model\Date $date)
    {
        $this->view->assign('date', $date);
    }
    
    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Date $newDate
     * @return void
     */
    public function createAction(\TransitionTeam\TransitionTools\Domain\Model\Date $newDate)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->dateRepository->add($newDate);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Date $date
     * @ignorevalidation $date
     * @return void
     */
    public function editAction(\TransitionTeam\TransitionTools\Domain\Model\Date $date)
    {
        $this->view->assign('date', $date);
    }
    
    /**
     * action update
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Date $date
     * @return void
     */
    public function updateAction(\TransitionTeam\TransitionTools\Domain\Model\Date $date)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->dateRepository->update($date);
        $this->redirect('list');
    }

}