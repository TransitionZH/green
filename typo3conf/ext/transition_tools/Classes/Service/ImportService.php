<?php

namespace TransitionTeam\TransitionTools\Service;

/* 
 * Service to import data from differend external partner hosts in various formats and map them to a given model (e.g. Initiatives, Events)
 * Tbd: Register as a TYPO3 Service? https://docs.typo3.org/typo3cms/Typo3ServicesReference/singlehtml/Index.html#document-Index
 * 
 */

class ImportService implements \TYPO3\CMS\Core\SingletonInterface {
    /**
     * 
     * @param \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRoute
     * @return type
     */
    
    /**
     * 
     * @param \TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRoute
     * @param type $modelClass
     * @param type $propertiesMap
     * @param type $dataFormat
     */
    public function loadFromPartner(\TransitionTeam\TransitionTools\Domain\Model\SynchRoute $synchRoute, $modelClass, $propertiesMap, $dataFormat = 'json') {
        
    }
}