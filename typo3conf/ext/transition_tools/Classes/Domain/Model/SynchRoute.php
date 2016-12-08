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
 * SynchRoute
 */
class SynchRoute extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * caption
     *
     * @var string
     */
    protected $caption = '';
    
    /**
     * importRoute
     *
     * @var string
     */
    protected $importRoute = '';
    
    /**
     * className
     *
     * @var string
     */
    protected $className = '';
    
    /**
     * importFormat
     *
     * @var int
     */
    protected $importFormat = 0;
    
    /**
     * importTstamp
     *
     * @var \DateTime
     */
    protected $importTstamp = null;
    
    /**
     * importMapping
     *
     * @var string
     */
    protected $importMapping = '';
    
    /**
     * importCacheData
     *
     * @var string
     */
    protected $importCacheData = '';
    
    /**
     * importCacheLifetime
     *
     * @var int
     */
    protected $importCacheLifetime = 0;
    
    /**
     * exportRoute
     *
     * @var string
     */
    protected $exportRoute = '';
    
    /**
     * exportFormat
     *
     * @var int
     */
    protected $exportFormat = 0;
    
    /**
     * exportTstamp
     *
     * @var \DateTime
     */
    protected $exportTstamp = null;
    
    /**
     * exportMapping
     *
     * @var string
     */
    protected $exportMapping = '';
    
    /**
     * partnerSystem
     *
     * @var \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem
     */
    protected $partnerSystem = null;
    
    /**
     * Returns the caption
     *
     * @return string $caption
     */
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * Sets the caption
     *
     * @param string $caption
     * @return void
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }
    
    /**
     * Returns the importRoute
     *
     * @return string $importRoute
     */
    public function getImportRoute()
    {
        return $this->importRoute;
    }
    
    /**
     * Sets the importRoute
     *
     * @param string $importRoute
     * @return void
     */
    public function setImportRoute($importRoute)
    {
        $this->importRoute = $importRoute;
    }
    
    /**
     * Returns the className
     *
     * @return string $className
     */
    public function getClassName()
    {
        return $this->className;
    }
    
    /**
     * Sets the className
     *
     * @param string $className
     * @return void
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }
    
    /**
     * Returns the importFormat
     *
     * @return int $importFormat
     */
    public function getImportFormat()
    {
        return $this->importFormat;
    }
    
    /**
     * Sets the importFormat
     *
     * @param int $importFormat
     * @return void
     */
    public function setImportFormat($importFormat)
    {
        $this->importFormat = $importFormat;
    }
    
    /**
     * Returns the importTstamp
     *
     * @return \DateTime $importTstamp
     */
    public function getImportTstamp()
    {
        return $this->importTstamp;
    }
    
    /**
     * Sets the importTstamp
     *
     * @param \DateTime $importTstamp
     * @return void
     */
    public function setImportTstamp(\DateTime $importTstamp)
    {
        $this->importTstamp = $importTstamp;
    }
    
    /**
     * Returns the importMapping
     *
     * @return string $importMapping
     */
    public function getImportMapping()
    {
        return $this->importMapping;
    }
    
    /**
     * Sets the importMapping
     *
     * @param string $importMapping
     * @return void
     */
    public function setImportMapping($importMapping)
    {
        $this->importMapping = $importMapping;
    }
    
    /**
     * Returns the importCacheData
     *
     * @return string $importCacheData
     */
    public function getImportCacheData()
    {
        return $this->importCacheData;
    }
    
    /**
     * Sets the importCacheData
     *
     * @param string $importCacheData
     * @return void
     */
    public function setImportCacheData($importCacheData)
    {
        $this->importCacheData = $importCacheData;
    }
    
    /**
     * Returns the importCacheLifetime
     *
     * @return int $importCacheLifetime
     */
    public function getImportCacheLifetime()
    {
        return $this->importCacheLifetime;
    }
    
    /**
     * Sets the importCacheLifetime
     *
     * @param int $importCacheLifetime
     * @return void
     */
    public function setImportCacheLifetime($importCacheLifetime)
    {
        $this->importCacheLifetime = $importCacheLifetime;
    }
    
    /**
     * Returns the exportRoute
     *
     * @return string $exportRoute
     */
    public function getExportRoute()
    {
        return $this->exportRoute;
    }
    
    /**
     * Sets the exportRoute
     *
     * @param string $exportRoute
     * @return void
     */
    public function setExportRoute($exportRoute)
    {
        $this->exportRoute = $exportRoute;
    }
    
    /**
     * Returns the exportFormat
     *
     * @return int $exportFormat
     */
    public function getExportFormat()
    {
        return $this->exportFormat;
    }
    
    /**
     * Sets the exportFormat
     *
     * @param int $exportFormat
     * @return void
     */
    public function setExportFormat($exportFormat)
    {
        $this->exportFormat = $exportFormat;
    }
    
    /**
     * Returns the exportTstamp
     *
     * @return \DateTime $exportTstamp
     */
    public function getExportTstamp()
    {
        return $this->exportTstamp;
    }
    
    /**
     * Sets the exportTstamp
     *
     * @param \DateTime $exportTstamp
     * @return void
     */
    public function setExportTstamp(\DateTime $exportTstamp)
    {
        $this->exportTstamp = $exportTstamp;
    }
    
    /**
     * Returns the exportMapping
     *
     * @return string $exportMapping
     */
    public function getExportMapping()
    {
        return $this->exportMapping;
    }
    
    /**
     * Sets the exportMapping
     *
     * @param string $exportMapping
     * @return void
     */
    public function setExportMapping($exportMapping)
    {
        $this->exportMapping = $exportMapping;
    }
    
    /**
     * Returns the partnerSystem
     *
     * @return \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem
     */
    public function getPartnerSystem()
    {
        return $this->partnerSystem;
    }
    
    /**
     * Sets the partnerSystem
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem
     * @return void
     */
    public function setPartnerSystem(\TransitionTeam\TransitionTools\Domain\Model\PartnerSystem $partnerSystem)
    {
        $this->partnerSystem = $partnerSystem;
    }

}