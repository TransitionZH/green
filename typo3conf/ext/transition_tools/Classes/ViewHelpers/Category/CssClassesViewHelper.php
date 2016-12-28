<?php
namespace TransitionTeam\TransitionTools\ViewHelpers\Category;

/**
 * View helper to get css classes for categories of given object
 * @author: Benno Flory - benno.flory@web-und-wandel.ch
 */

class CssClassesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	
	/**
     * __construct
     *
     * Load repositories manually because dependency injection (@inject) 
     * sometimes comes too late for further operations... :-(
     * 
     * @return void
     */
    public function __construct() {
    }
    
    /**
     * Render css classes
     *
     * @param object|array $categories - one or multiple categories
     * @param boolean $topCategoriesOnly - optional
     * @param boolean $firstCategoriesOnly - optional
     * @return string css class(es)
     */
    public function render($categories, $topCategoriesOnly = false, $firstCategoriesOnly = false) {
        
        // Init
        $cssClasses = [];
        $cssClassPrefix = 'category-';
        
        // Multiple categories
        if (get_class($categories) == 'TYPO3\CMS\Extbase\Persistence\ObjectStorage') {
            $categoriesArray = $categories->toArray();
        }

        // Single category
        elseif (get_class($categories) == 'TransitionTeam\TransitionTools\Domain\Model\Category') {
            $categoriesArray = [$categories];
//            echo '2';
//            var_dump($categories);
//            var_dump($categoriesArray);
//            die();
        }
        else {
            return '++'.get_class($categories);
        }
        
        // Render classes
        if ($categoriesArray) {
            foreach ($categoriesArray as $category) {
                if (get_class($category) == 'TransitionTeam\TransitionTools\Domain\Model\Category' 
                && ($category->getIsTopCategory() || !$topCategoriesOnly)) {
                    $cssClasses[] = $cssClassPrefix . $category->getName();
                    if ($firstCategoriesOnly) break;
                }
            }
        }
        
        // Fallback to undefined
        if (!$cssClasses) {
//            echo '***';
//            var_dump($categoryArray);die;
            $cssClasses = [$cssClassPrefix . 'undefined'];
        }            

        // To string and return
        return implode(' ', $cssClasses);
    }
}