<?php

namespace TransitionTeam\TransitionTools\Service;

/* 
 * Service to import data from differend external partner hosts in various formats and map them to a given model (e.g. Initiatives, Events)
 * Tbd: Register as a TYPO3 Service? https://docs.typo3.org/typo3cms/Typo3ServicesReference/singlehtml/Index.html#document-Index
 * 
 */

class ImportService implements \TYPO3\CMS\Core\SingletonInterface {
    
    /**
     * importBaseUrl - TODO: get dynamically from PartnerSystem & SynchRoute
     *
     * @var string
     */
    protected $importBaseUrl = "https://sandbox.openki.net/api/0/json/";

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
	public function initializeObject() {
        
    }
    
    /**
     * Initializes the object with stdObject data from imported source
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative
     * @param \stdClass $source
     * @return void
     */
    public function initFromSource(\TransitionTeam\TransitionTools\Domain\Model\Initiative $initiative, \stdClass $source)
    {
        $propertiesMap = [
            'name' => 'name',
            'claim' => 'claim',
            'description' => 'description',
            'logo' => 'logoUrl',
            'venue' => 'venue',
            'tags' => 'categories',
        ];
        
        // Loop and map all properties
        foreach($propertiesMap as $sourceProperty => $property) {
            if (property_exists($source, $sourceProperty)) {
                
                //-- Set special cases first
                // Set venue / geo coordinates
                if ($property == 'venue') {
                    if (property_exists($source->venue, 'loc') && property_exists($source->venue->loc, 'coordinates')) {
                        $venue = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TransitionTeam\\TransitionTools\\Domain\\Model\\Venue');
                        $venue->setLocLongitude($source->venue->loc->coordinates[0]);
                        $venue->setLocLatitude($source->venue->loc->coordinates[1]);
                        $initiative->addVenue($venue);
                    }
                }
                
                // Set categories from Source tags
                elseif ($property == 'categories') {
                    $topCategories = [];
                    foreach ($source->tags as $tag) {

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
                    $initiative->$setter($source->$sourceProperty);
//                    if ($sourceProperty == 'logo' && strpos('http', $source->$sourceProperty) === false ) {
//                        $initiative->$setter("https://openki.net/".$source->$sourceProperty);
//                    }
                }
            }
        }
    }
    
    /**
     * 
     * @param \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRoute
     */
    public function importFromPartner(\TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRoute, $modelClass, $propertiesMap, $dataFormat = 'json') {
        // Todo! => Replaces importFromSource()?
    }
    
	/**
	 * return all initiatives, get them from imported source
	 *
     * @param \TransitionTeam\TransitionTools\Domain\Model\Category $category - optional
	 * @return array
	 */
    public function importFromSource(\TransitionTeam\TransitionTools\Domain\Model\Category $category = null) {
        // Build route
        $sourceRoute = $this->importBaseUrl . "groups?tags=TransitionZH";
        if ($category) {
            $sourceRoute .= ','.$category->getName();
            if ($category->getParentCategory()) {
                $sourceRoute .= ','.$category->getParentCategory()->getName();
            }
        }

        // Get data
        $initiativesJson = file_get_contents($sourceRoute);
        $initiativesRaw = json_decode($initiativesJson);
        
        // Map to TransitionTeam\TransitionTools\Domain\Model\Initiative
        $initiatives = [];
        foreach($initiativesRaw as $initiativeRaw) {
            $initiative = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TransitionTeam\\TransitionTools\\Domain\\Model\\Initiative');
            $this->initFromSource($initiative, $initiativeRaw);
            $initiatives[] = $initiative;
        }
        return $initiatives;
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