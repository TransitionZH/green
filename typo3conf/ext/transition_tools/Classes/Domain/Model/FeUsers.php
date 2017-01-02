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
 * Person mit Adresse etc.
 */
class FeUsers extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var int
     */
    protected $title = 0;
    
    /**
     * firstName
     *
     * @var string
     */
    protected $firstName = '';
    
    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';
    
    /**
     * address1
     *
     * @var string
     */
    protected $address1 = '';
    
    /**
     * address2
     *
     * @var string
     */
    protected $address2 = '';
    
    /**
     * company
     *
     * @var string
     */
    protected $company = '';
    
    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';
    
    /**
     * city
     *
     * @var string
     */
    protected $city = '';
    
    /**
     * country
     *
     * @var int
     */
    protected $country = 0;
    
    /**
     * mail
     *
     * @var string
     */
    protected $mail = '';
    
    /**
     * phoneFix
     *
     * @var string
     */
    protected $phoneFix = '';
    
    /**
     * phoneMobile
     *
     * @var string
     */
    protected $phoneMobile = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * comment
     *
     * @var string
     */
    protected $comment = '';
    
    /**
     * Returns the title
     *
     * @return int $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param int $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    /**
     * Returns the address1
     *
     * @return string $address1
     */
    public function getAddress1()
    {
        return $this->address1;
    }
    
    /**
     * Sets the address1
     *
     * @param string $address1
     * @return void
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }
    
    /**
     * Returns the address2
     *
     * @return string $address2
     */
    public function getAddress2()
    {
        return $this->address2;
    }
    
    /**
     * Sets the address2
     *
     * @param string $address2
     * @return void
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }
    
    /**
     * Returns the company
     *
     * @return string $company
     */
    public function getCompany()
    {
        return $this->company;
    }
    
    /**
     * Sets the company
     *
     * @param string $company
     * @return void
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }
    
    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }
    
    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }
    
    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    /**
     * Returns the country
     *
     * @return int $country
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Sets the country
     *
     * @param int $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
    
    /**
     * Returns the mail
     *
     * @return string $mail
     */
    public function getMail()
    {
        return $this->mail;
    }
    
    /**
     * Sets the mail
     *
     * @param string $mail
     * @return void
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    
    /**
     * Returns the phoneFix
     *
     * @return string $phoneFix
     */
    public function getPhoneFix()
    {
        return $this->phoneFix;
    }
    
    /**
     * Sets the phoneFix
     *
     * @param string $phoneFix
     * @return void
     */
    public function setPhoneFix($phoneFix)
    {
        $this->phoneFix = $phoneFix;
    }
    
    /**
     * Returns the phoneMobile
     *
     * @return string $phoneMobile
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }
    
    /**
     * Sets the phoneMobile
     *
     * @param string $phoneMobile
     * @return void
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

}