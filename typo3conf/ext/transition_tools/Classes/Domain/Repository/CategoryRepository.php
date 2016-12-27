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
 * The repository for Categories
 */
class CategoryRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * initializeObject: setRespectStoragePage = false
     */
    public function initializeObject() {
            $defaultQuerySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
            $defaultQuerySettings->setRespectStoragePage(false);
            $this->setDefaultQuerySettings($defaultQuerySettings);
    }
    
	/**
	 * return categories as a tree array, matching the given category as root
	 *
     * @param string $name
	 * @return \TransitionTeam\TransitionTools\Domain\Category $category
	 */

    public function findOneByCategoryName($name) {
            $query = $this->createQuery();
            $query->matching($query->equals('name', $name));
//            $category = $query->execute()->getFirst();
            $category = $query->execute();
            var_dump($category);
            die;
            return $category;
    }

	/**
	 * return categories as a tree array, matching the given category as root
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Category $category - optional
	 * @return array
	 */

    public function findTree(\TransitionTeam\TransitionTools\Domain\Category $category = null) {
        $categoryTree = [];
        
        // Find top categories
        if ($category) {
            $topCategories = $category;
        }
        else {
            $query = $this->createQuery();
            $query->matching($query->equals('isTopCategory', true));
            $topCategories = $query->execute()->toArray();
        }
        
        // Map to categoryTree array and find sub categories
        foreach($topCategories as $key => $topCategory) {
            // Map to array
            $categoryTree[$key]['item'] = $topCategory;
            // Find subcategories 
            $query->matching($query->equals('parentCategory', $topCategory));
            $subCategories = $query->execute()->toArray();
            $categoryTree[$key]['subCategories'] = $subCategories;
        }
        
        return $categoryTree;
    }

}