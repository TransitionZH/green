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
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class DataSourceRouteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\DataSourceRoute();
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
	public function getRouteReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getRoute()
		);
	}

	/**
	 * @test
	 */
	public function setRouteForStringSetsRoute()
	{
		$this->subject->setRoute('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'route',
			$this->subject
		);
	}
}
