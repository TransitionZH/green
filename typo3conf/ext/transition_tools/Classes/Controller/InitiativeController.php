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
 * InitiativeController
 */
class InitiativeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * initiativeRepository
     *
     * @var \TransitionTeam\TransitionTools\Domain\Repository\InitiativeRepository
     * @inject
     */
    protected $initiativeRepository = NULL;
    
    /**
     * categoryRepository
     *
     * @var \TransitionTeam\TransitionTools\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = NULL;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $initiatives = $this->initiativeRepository->findAll();
        $this->view->assign('initiatives', $initiatives);
    }
    
    /**
     * action show
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative
     * @return void
     */
    public function showAction(\TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative)
    {
        $this->view->assign('initiative', $initiative);
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
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $newInitiative
     * @return void
     */
    public function createAction(\TransitionTeam\TransitionTools\Domain\Model\Initiative $newInitiative)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->initiativeRepository->add($newInitiative);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative
     * @ignorevalidation $initiative
     * @return void
     */
    public function editAction(\TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative)
    {
        $this->view->assign('initiative', $initiative);
    }
    
    /**
     * action update
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative
     * @return void
     */
    public function updateAction(\TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->initiativeRepository->update($initiative);
        $this->redirect('list');
    }
    
    /**
     * action map
     *
     * @return void
     */
    public function mapAction()
    {
        
    }
    
    /**
     * action grid
     *
     * @return void
     */
    public function gridAction()
    {
        
    }
    
    /**
     * action categories
     *
     * @return void
     */
    public function categoriesAction()
    {
        $topCategories = $this->categoryRepository->findByIsTopCategory(true)->toArray();
        $this->view->assign('categories', $topCategories);
        /* For import filter: match main AND subcategory */
    }

}