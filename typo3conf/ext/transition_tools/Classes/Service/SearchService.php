<?php

namespace TransitionTeam\TransitionTools\Service;

/* 
 * Service to search data
 * 
 */

class SearchService implements \TYPO3\CMS\Core\SingletonInterface
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
     * @var array $categoryCache
     */
    protected $categoryCache = [];


	/** 
	 * initialize
	 */
	public function initializeObject() 
    {
        
    }
    
    /**
     * Clean search query from html, special chars and multiple space chars
     *
     * @param string $query
     * @return string
     */
    public function cleanupSearchQuery($query) 
    {
        return preg_replace('/\s+/', ' ', preg_replace("/[^\p{Latin}\d ]/u", " ", strip_tags($query)));
    }
    
    /**
     * Search initializes
     *
     * @param array $items
     * @param string $query
     * @param integer $minMatchingFactor - return only initiatives with minimal matching factor
     * @return array $items
     */
    public function findByQuery(array $items, $query, $minMatchingFactor = 0) 
    {
        // replace all non-alphanumeric characters by space, remove multiple spaces and and split by space
        $query = $this->cleanupSearchQuery(mb_strtolower($query, 'UTF-8'));
        $queryLength = strlen(str_replace(' ', '', $query));
        $queryParts = explode(' ', $query);
        
        $result = [];
        foreach ($items as $item) {
            // Create searchable string for initiative
            if (get_class($item) == 'TransitionTeam\\TransitionTools\\Domain\\Model\\Initiative') {
                $haystack = mb_strtolower(
                        $item->getName().';'.
                        $item->getName().';'. // Add double = counts double
                        $item->getClaim().';'.
                        $item->getDescription().';',
                        'UTF-8');
            }
            
            // Calc matching factor
            $matchingCharsCount = 0;
            foreach ($queryParts as $needle) {
                $matchingCharsCount += substr_count($haystack, $needle) * strlen($needle);
            }
            $matchingFactor = round($matchingCharsCount/$queryLength*100);
            
            // Add to results if minimal matching factor is reached
            if ($matchingFactor >= $minMatchingFactor) {
                $result[] = [
                    'item' => $item,
                    'matchingFactor' => $matchingFactor, // 0 .. 100
                ];
            }
        }
        
        // Sort by matchingFactor
        usort($result, function ($i1, $i2) {
            if ($i1['matchingFactor'] != $i2['matchingFactor']) {
                // Sort by factor
                return ($i1['matchingFactor'] > $i2['matchingFactor'])?-1:1;
            }
            else {
                // Sort alphabetically if same factor
                return strcmp($i1['matchingFactor'], $i2['matchingFactor']);;
            }
        });

        // Return sorted items (without matching factor at the moment
        return array_column($result, 'item');
    }
        
}