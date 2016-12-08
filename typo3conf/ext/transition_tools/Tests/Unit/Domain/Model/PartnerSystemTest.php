<?php

namespace TransitionTeam\TransitionTools\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Benno Flory <benno.flory@gmx.ch>, Benno Flory - Web und Wandel
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class PartnerSystemTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\PartnerSystem();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getCaptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCaption()
		);
	}

	/**
	 * @test
	 */
	public function setCaptionForStringSetsCaption()
	{
		$this->subject->setCaption('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'caption',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUrlReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function setUrlForStringSetsUrl()
	{
		$this->subject->setUrl('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'url',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRoutesReturnsInitialValueForSynchRoute()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRoutes()
		);
	}

	/**
	 * @test
	 */
	public function setRoutesForObjectStorageContainingSynchRouteSetsRoutes()
	{
		$route = new \TransitionTeam\TransitionTools\Domain\Model\SynchRoute();
		$objectStorageHoldingExactlyOneRoutes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRoutes->attach($route);
		$this->subject->setRoutes($objectStorageHoldingExactlyOneRoutes);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRoutes,
			'routes',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRouteToObjectStorageHoldingRoutes()
	{
		$route = new \TransitionTeam\TransitionTools\Domain\Model\SynchRoute();
		$routesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$routesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($route));
		$this->inject($this->subject, 'routes', $routesObjectStorageMock);

		$this->subject->addRoute($route);
	}

	/**
	 * @test
	 */
	public function removeRouteFromObjectStorageHoldingRoutes()
	{
		$route = new \TransitionTeam\TransitionTools\Domain\Model\SynchRoute();
		$routesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$routesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($route));
		$this->inject($this->subject, 'routes', $routesObjectStorageMock);

		$this->subject->removeRoute($route);

	}
}
