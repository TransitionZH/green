<?php
namespace TransitionTeam\TransitionTools\Domain\Model;
/**
 * Extending categories
 * Source: http://blog.systemfehler.net/erweiterung-des-typo3-kategoriensystems/
 */

/**
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\Domain\Model\Category {

    /**
     * Categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    protected $categories;
    
    /**
     * Css class for category
     * Values: 
     * - violet:    #CA37B8
     * - brown:     #CA6937
     * - turquoise: #37B8CA
     * - red:       #CA3737
     * - green:     #B8CA37
     * - blue:      #375CCA
     *
     * @var string
     */
    protected $css = '';
    

    /**
     * Adds a Category
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $category) {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $categoryToRemove) {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $categories
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories) {
        $this->categories = $categories;
    }

    
    /**
     * Returns the css class
     *
     * @return string $css
     */
    public function getCss()
    {
        return $this->css;
    }
    
    /**
     * Sets the css class
     *
     * @param string $css
     * @return void
     */
    public function setCss($css)
    {
        $this->css = $css;
    }
    
}