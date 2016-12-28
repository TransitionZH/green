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
     * @var array $categoryCache
     */
    protected $categoryCache = [];


	/** 
	 * initialize
	 */
	public function initializeObject() {
        
    }
    
    /**
     * Initializes the object with stdObject data from Openki
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative
     * @param \stdClass $initiativeFromOpenki
     * @return void
     */
    public function initFromOpenki(\TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative, \stdClass $initiativeFromOpenki)
    {
        $propertiesMap = [
            'name' => 'name',
            'claim' => 'claim',
            'description' => 'description',
            'venue' => 'venue',
            'tags' => 'categories',
        ];
        
        // Loop and map all properties
        foreach($propertiesMap as $openkiProperty => $property) {
            if (property_exists($initiativeFromOpenki, $openkiProperty)) {
                
                //-- Set special cases first
                // Set venue / geo coordinates
                if ($property == 'venue') {
                    if (property_exists($initiativeFromOpenki->venue, 'loc') && property_exists($initiativeFromOpenki->venue->loc, 'coordinates')) {
                        $venue = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TransitionTeam\\TransitionTools\\Domain\\Model\\Venue');
                        $venue->setLocLongitude($initiativeFromOpenki->venue->loc->coordinates[0]);
                        $venue->setLocLatitude($initiativeFromOpenki->venue->loc->coordinates[1]);
                        $initiative->addVenue($venue);
                    }
                }
                
                // Set categories from Openki tags
                elseif ($property == 'categories') {
                    $topCategories = [];
                    foreach ($initiativeFromOpenki->tags as $tag) {

                        // Get category using cache to prevent multiple identical requests on repository
                        if (array_key_exists($tag, $this->categoryCache)) {
                            $category = $this->categoryCache[$tag];
                        }
                        else {
                            $category = $this->categoryRepository->findOneByName($tag);
                            $this->categoryCache[$tag] = $category;
                        }

                        // Add to initiative
                        if ($category) {
                            $initiative->addCategory($category);
                        }
                    }
                }
                
                //-- Then map the remaining standard properties
                else {
//                    $setter = 'set' . $this->underscoreToUpperCamelcase($property);
                    $setter = 'set' . ucfirst($property);
                    $initiative->$setter($initiativeFromOpenki->$property);
                }
            }
        }
    }
    
	/**
	 * return all initiatives, get them from openki
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category - optional
	 * @return array
	 */
    public function getFromOpenki(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null) {
        // Build route
        $openkiRoute = $this->openkiBaseUrl . "groups?tags=TransitionZH";
        if ($category) {
            $openkiRoute .= ','.$category->getName();
            if ($category->getParentCategory()) {
                $openkiRoute .= ','.$category->getParentCategory()->getName();
            }
        }

        // Get data
        $initiativesJson = file_get_contents($openkiRoute);
        $initiativesRaw = json_decode($initiativesJson);
        
        // Map to TransitionTeam\TransitionTools\Domain\Model\Initiative
        $initiatives = [];
        foreach($initiativesRaw as $initiativeRaw) {
            $initiative = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TransitionTeam\\TransitionTools\\Domain\\Model\\Initiative');
            $this->initFromOpenki($initiative, $initiativeRaw);
            $initiatives[] = $initiative;
        }
        return $initiatives;
    }
        
	/**
	 * return all initiatives, get them from openki
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category - optional
	 * @return array
	 */
    public function findAll() {
        return $this->getFromOpenki();
    }
    
	/**
	 * return initiatives from openki, matching the given category
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
	 * @return array
	 */
    public function findByCategory(\TransitionTeam\TransitionTools\Domain\Model\Category $category) {
        return $this->getFromOpenki($category);
    }
    
//    /**
//     * underscore to camelcase
//     */
//    public function underscoreToUpperCamelcase($underscoreString) {
//        $parts = explode('_', $underscoreString);
//        $ucParts = array_map(function($part) { return ucfirst($part); }, $parts);
//        return implode('', $ucParts);
//    }
    
}