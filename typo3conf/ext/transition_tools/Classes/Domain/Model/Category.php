<?php
namespace TransitionTeam\TransitionTools\Domain\Model;


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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * uuid
     *
     * @var string
     */
    protected $uuid = '';
    
    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * isTopCategory
     *
     * @var bool
     */
    protected $isTopCategory = false;
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * subcategories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category>
     */
    protected $subcategories = null;
    
    /**
     * relatedCategories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category>
     */
    protected $relatedCategories = null;
    
    /**
     * source
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\SynchRoute
     */
    protected $source = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->subcategories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->relatedCategories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the uuid
     *
     * @return string $uuid
     */
    public function getUuid()
    {
        return $this->uuid;
    }
    
    /**
     * Sets the uuid
     *
     * @param string $uuid
     * @return void
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the isTopCategory
     *
     * @return bool $isTopCategory
     */
    public function getIsTopCategory()
    {
        return $this->isTopCategory;
    }
    
    /**
     * Sets the isTopCategory
     *
     * @param bool $isTopCategory
     * @return void
     */
    public function setIsTopCategory($isTopCategory)
    {
        $this->isTopCategory = $isTopCategory;
    }
    
    /**
     * Returns the boolean state of isTopCategory
     *
     * @return bool
     */
    public function isIsTopCategory()
    {
        return $this->isTopCategory;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Adds a Category
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $subcategory
     * @return void
     */
    public function addSubcategory(\TransitionTeam\TransitionTools\Domain\Model\Category $subcategory)
    {
        $this->subcategories->attach($subcategory);
    }
    
    /**
     * Removes a Category
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $subcategoryToRemove The Category to be removed
     * @return void
     */
    public function removeSubcategory(\TransitionTeam\TransitionTools\Domain\Model\Category $subcategoryToRemove)
    {
        $this->subcategories->detach($subcategoryToRemove);
    }
    
    /**
     * Returns the subcategories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category> $subcategories
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
    
    /**
     * Sets the subcategories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category> $subcategories
     * @return void
     */
    public function setSubcategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $subcategories)
    {
        $this->subcategories = $subcategories;
    }
    
    /**
     * Adds a Category
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $relatedCategory
     * @return void
     */
    public function addRelatedCategory(\TransitionTeam\TransitionTools\Domain\Model\Category $relatedCategory)
    {
        $this->relatedCategories->attach($relatedCategory);
    }
    
    /**
     * Removes a Category
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $relatedCategoryToRemove The Category to be removed
     * @return void
     */
    public function removeRelatedCategory(\TransitionTeam\TransitionTools\Domain\Model\Category $relatedCategoryToRemove)
    {
        $this->relatedCategories->detach($relatedCategoryToRemove);
    }
    
    /**
     * Returns the relatedCategories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category> $relatedCategories
     */
    public function getRelatedCategories()
    {
        return $this->relatedCategories;
    }
    
    /**
     * Sets the relatedCategories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\Category> $relatedCategories
     * @return void
     */
    public function setRelatedCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $relatedCategories)
    {
        $this->relatedCategories = $relatedCategories;
    }
    
    /**
     * Returns the source
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $source
     */
    public function getSource()
    {
        return $this->source;
    }
    
    /**
     * Sets the source
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $source
     * @return void
     */
    public function setSource(\TransitionTeam\TransitionTools\Domain\Model\SynchRoute $source)
    {
        $this->source = $source;
    }

}