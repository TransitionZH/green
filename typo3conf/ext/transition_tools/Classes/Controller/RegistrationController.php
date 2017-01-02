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
 * RegistrationController
 */
class RegistrationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * registrationRepository
     *
     * @var \TransitionTeam\TransitionTools\Domain\Repository\RegistrationRepository
     * @inject
     */
    protected $registrationRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $registrations = $this->registrationRepository->findAll();
        $this->view->assign('registrations', $registrations);
    }
    
    /**
     * action show
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Registration $registration
     * @return void
     */
    public function showAction(\TransitionTeam\TransitionTools\Domain\Model\Registration $registration)
    {
        $this->view->assign('registration', $registration);
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
     * @param \TransitionTeam\TransitionTools\Domain\Model\Registration $newRegistration
     * @return void
     */
    public function createAction(\TransitionTeam\TransitionTools\Domain\Model\Registration $newRegistration)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->registrationRepository->add($newRegistration);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Registration $registration
     * @ignorevalidation $registration
     * @return void
     */
    public function editAction(\TransitionTeam\TransitionTools\Domain\Model\Registration $registration)
    {
        $this->view->assign('registration', $registration);
    }
    
    /**
     * action update
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Registration $registration
     * @return void
     */
    public function updateAction(\TransitionTeam\TransitionTools\Domain\Model\Registration $registration)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->registrationRepository->update($registration);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Registration $registration
     * @return void
     */
    public function deleteAction(\TransitionTeam\TransitionTools\Domain\Model\Registration $registration)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->registrationRepository->remove($registration);
        $this->redirect('list');
    }

}