<?php
namespace TransitionTeam\TransitionTools\Domain\Repository;

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
 * The repository for Initiatives
 */
class InitiativeRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * importService
     *
     * @var \TransitionTeam\TransitionTools\Service\ImportService
     * @inject
     */
    protected $importService = NULL;
    

	/** 
	 * initialize
	 */
	public function initializeObject() {
        
    }
    
	/**
	 * return all initiatives, get them from import source
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category - optional
	 * @return array
	 */
    public function findAll() {
        return $this->importService->importFromSource();
    }
    
	/**
	 * return initiatives from import source, matching the given category
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category
	 * @return array
	 */
    public function findByCategory(\TransitionTeam\TransitionTools\Domain\Model\Category $category) {
        return $this->importService->importFromSource($category);
    }
    
}