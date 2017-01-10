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
     * searchService
     *
     * @var \TransitionTeam\TransitionTools\Service\SearchService
     * @inject
     */
    protected $searchService = NULL;
    
    /**
     * Render standalone view
     * Source: http://stackoverflow.com/questions/21429075/getting-html-of-fluid-template-in-controller-action-in-typo3
     * Or:     https://gist.github.com/fedir/49e3aadbd97552e60e3a
     * 
     * @param string $controllerName
     * @param string $templateName
     * @param array $variables
     * @param boolean $partialOnly
     * @return string (html)
     */
    public function getTemplateHtml($controllerName, $templateName, array $variables = array(), $partialOnly) {
        /** @var \TYPO3\CMS\Fluid\View\StandaloneView $tempView */
        $tempView = $this->objectManager->get('TYPO3\\CMS\\Fluid\\View\\StandaloneView');

        $extbaseFrameworkConfiguration = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);

        // From TYPO3 7 templateRootPath has changed to templateRootPaths (plural), so get the last existing template file in array (fallback)
        $templateRootPaths = $extbaseFrameworkConfiguration['view']['templateRootPaths'];
        foreach (array_reverse($templateRootPaths) as $templateRootPath) {
            $templatePathAndFilename = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($templateRootPath . $controllerName . '/' . $templateName . '.html');
            if (file_exists($templatePathAndFilename)) {
                break;
            }
        }
        $tempView->setTemplatePathAndFilename($templatePathAndFilename);
        // Set layout and partial root path
        $tempView->setLayoutRootPaths($extbaseFrameworkConfiguration['view']['layoutRootPaths']);
        $tempView->setPartialRootPaths($extbaseFrameworkConfiguration['view']['partialRootPaths']);
        $tempView->setControllerContext($this->controllerContext);
        
        $tempView->assignMultiple($variables);
        $tempHtml = $tempView->render();

        return $tempHtml;
    }

    /**
     * assign initiatives
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
     * @param string $format - '' or 'json'
     * @return void
     */
    public function assignInitiatives(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null, $format = '')
    {
        $initiatives = null;

        if ($category) {
            $initiatives = $this->initiativeRepository->findByCategory($cateogry);
        }
        elseif ($categoryGET = \TYPO3\CMS\Core\Utility\GeneralUtility::_GET('category')) {
            if (array_key_exists('uid', $categoryGET)) {
                $category = $this->categoryRepository->findByUid($categoryGET['uid']);
            }
            if ($category) {
                $initiatives = $this->initiativeRepository->findByCategory($category);
            }
        }
        else {
            $initiatives = $this->initiativeRepository->findAll();
        }

        // Filter initiatives by query term?
        $query = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('query');
        if ($query) {
            if (!is_array($initiatives)) {
                $initiatives = $initiatives->toArray();
            }
            // Get initiatives which match as least 50% of the characters, sorted by matching factor
            $initiatives = $this->searchService->findByQuery($initiatives, $query, 50);
        }

        // Render result as json?
        if ($format == 'json') {
            $initiativesArray = [];
            foreach ($initiatives as $initiative) {
                
                // render infobox
                $infoboxBody = $this->getTemplateHtml("Initiative", "Box", ["initiative" => $initiative]);
                
                // get venues array
                $venuesArray = [];
                foreach ($initiative->getVenues() as $venue) {
                    $venuesArray[] = [
                        "locLatitude" => $venue->getLocLatitude(),
                        "locLongitude" => $venue->getLocLongitude(),
                    ];
                }
                
                // Add initiative to assoc array (key = id)
                $initiativesArray[$initiative->getUuid()] = [
                    "name" => $initiative->getName(),
                    "infobox" => $infoboxBody,
                    "venues" => $venuesArray,
                ];
            }
            $initiatives = json_encode($initiativesArray);
        }
        
        $this->view->assignMultiple([
            'category' => $category,
            'topCategory' => ($category && $category->getParentCategory())?$category->getParentCategory():$category,
            'initiatives' => $initiatives,
        ]);
    }
    
    /**
     * action list
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
     * @return void
     */
    public function listAction(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null)
    {
        $this->assignInitiatives($category);
    }
    
//    
//    /**
//     * action show
//     *
//     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative
//     * @return void
//     */
//    public function showAction(\TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative)
//    {
//        $this->view->assign('initiative', $initiative);
//    }
    
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
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
     * @return void
     */
    public function mapAction(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null)
    {
//        // Get data asynchronous from mapDataAction()
//        $this->assignInitiatives($category);
        $this->view->assignMultiple([
            'category' => $category,
            'topCategory' => ($category && $category->getParentCategory())?$category->getParentCategory():$category,
        ]);
    }
    
    /**
     * action mapData - renders initiatives as json data - use typeNum as defined in setup.txt!
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
     * @return void
     */
    public function mapDataAction(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null)
    {
//        $this->assignInitiatives($category);
        $this->assignInitiatives($category, 'json');
    }
    
    /**
     * action grid
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
     * @return void
     */
    public function gridAction(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null)
    {
        $this->assignInitiatives($category);
    }
    
}