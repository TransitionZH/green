<?php
namespace TransitionTeam\TransitionTools\Domain\Repository;
/**
 * Extending categories
 * Source: http://blog.systemfehler.net/erweiterung-des-typo3-kategoriensystems/
 */

/**
 * The repository for Categories
 */
class CategoryRepository extends \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository {
    protected $defaultOrderings = array('sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING);

    /**
     * 
     * @param type $category
     * @param type $excludeCategories
     * @return type
     */
    public function findChildrenByParent($category = 0, $excludeCategories = array()) {
        $constraints = array();
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);

        $constraints[] = $query->equals('parent', $category);

        if (count($excludeCategories) > 0) {
            $constraints[] = $query->logicalNot($query->in('uid', $excludeCategories));
        }

        $query->matching($query->logicalAnd($constraints));

        return $query->execute();
    }

    /**
     * 
     * @param type $excludeCategories
     * @return type
     */
    public function findTopCategories($excludeCategories = array()) {
        $constraints = array();
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);

        $constraints[] = $query->isEmpty('parent');

        if (count($excludeCategories) > 0) {
            $constraints[] = $query->logicalNot($query->in('uid', $excludeCategories));
        }

        $query->matching($query->logicalAnd($constraints));

        return $query->execute();
    }
}