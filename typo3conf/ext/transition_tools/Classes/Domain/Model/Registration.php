<?php
namespace TransitionTeam\TransitionTools\Domain\Model;

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
 * Anmeldung
 */
class Registration extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * uuid
     *
     * @var string
     */
    protected $uuid = '';
    
    /**
     * comment
     *
     * @var string
     */
    protected $comment = '';
    
    /**
     * registrationStatus
     *
     * @var int
     */
    protected $registrationStatus = 0;
    
    /**
     * fee
     *
     * @var string
     */
    protected $fee = '';
    
    /**
     * paymentStatus
     *
     * @var int
     */
    protected $paymentStatus = 0;
    
    /**
     * persons
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\FeUsers>
     */
    protected $persons = null;
    
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
        $this->persons = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }
    
    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    
    /**
     * Returns the registrationStatus
     *
     * @return int $registrationStatus
     */
    public function getRegistrationStatus()
    {
        return $this->registrationStatus;
    }
    
    /**
     * Sets the registrationStatus
     *
     * @param int $registrationStatus
     * @return void
     */
    public function setRegistrationStatus($registrationStatus)
    {
        $this->registrationStatus = $registrationStatus;
    }
    
    /**
     * Returns the fee
     *
     * @return string $fee
     */
    public function getFee()
    {
        return $this->fee;
    }
    
    /**
     * Sets the fee
     *
     * @param string $fee
     * @return void
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }
    
    /**
     * Returns the paymentStatus
     *
     * @return int $paymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }
    
    /**
     * Sets the paymentStatus
     *
     * @param int $paymentStatus
     * @return void
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
    }
    
    /**
     * Adds a FeUsers
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\FeUsers $person
     * @return void
     */
    public function addPerson(\TransitionTeam\TransitionTools\Domain\Model\FeUsers $person)
    {
        $this->persons->attach($person);
    }
    
    /**
     * Removes a FeUsers
     *
     * @param \TransitionTeam\TransitionTools\Domain\Model\FeUsers $personToRemove The FeUsers to be removed
     * @return void
     */
    public function removePerson(\TransitionTeam\TransitionTools\Domain\Model\FeUsers $personToRemove)
    {
        $this->persons->detach($personToRemove);
    }
    
    /**
     * Returns the persons
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\FeUsers> $persons
     */
    public function getPersons()
    {
        return $this->persons;
    }
    
    /**
     * Sets the persons
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TransitionTeam\TransitionTools\Domain\Model\FeUsers> $persons
     * @return void
     */
    public function setPersons(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $persons)
    {
        $this->persons = $persons;
    }

}