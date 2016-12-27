<?php
namespace TransitionTeam\TransitionTools\Domain\Repository;


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
 * The repository for Initiatives
 */
class InitiativeRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * categoryRepository
     *
     * @var \TransitionTeam\TransitionTools\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = NULL;

    /**
     * openkiBaseUrl - TODO: get dynamically from PartnerSystem & SynchRoute
     *
     * @var string
     */
    protected $openkiBaseUrl = "https://sandbox.openki.net/api/0/json/";


	/** 
	 * initialize
	 */
	public function initializeObject() {
        
    }
        
	/**
	 * return all initiatives, get them from openki
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category - optional
	 * @return array
	 */
    public function findAll() {
        $openkiRoute = $this->openkiBaseUrl . "groups?tags=TransitionZH";
    }
    
	/**
	 * return initiatives from openki, matching the given category
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category - optional
	 * @return array
	 */
    public function findByCategory(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null) {
        $openkiRoute = $this->openkiBaseUrl . "groups?tags=TransitionZH," . $category->getName();
        if ($category->getParentCategory()) {
            $openkiRoute .= ','.$category->getParentCategory()->getName();
        }
        $initiativesJson = file_get_contents($openkiRoute);
        $initiativesRaw = json_decode($initiativesJson);
        $initiatives = [];
        foreach($initiativesRaw as $initiativeRaw) {
            $initiative = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TransitionTeam\\TransitionTools\\Domain\\Model\\Initiative');
            $initiative->initFromOpenki($initiativeRaw);
            $initiatives[] = $initiative;
        }
        return $initiatives;
    }
//    
//	/**
//	 * return initiatives from openki, matching the given category
//	 *
//     * @param string $categoryName - optional
//	 * @return array
//	 */
//    public function findByCategoryName($categoryName = '') {
//        $openkiRoute = $this->openkiBaseUrl . "groups?tags=TransitionZH," . $categoryName;
//        $initiativesJson = file_get_contents($openkiRoute);
//        $initiativesRaw = json_decode($initiativesJson);
//        $initiatives = [];
//        foreach($initiativesRaw as $initiativeRaw) {
//            /* @var \TransitionTeam\TransitionTools\Domain\Initiative $initiative */
//            $initiative = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TransitionTeam\\TransitionTools\\Domain\\Model\\Initiative');
//            $initiative->initFromOpenki($initiativeRaw);
//            $initiatives[] = $initiative;
//        }
//        return $initiatives;
//    }
//    
    
}