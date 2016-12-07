<?php
namespace TransitionTeam\TransitionTools\Tests\Unit\Controller;
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
 * Test case for class TransitionTeam\TransitionTools\Controller\CateogryController.
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class CateogryControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \TransitionTeam\TransitionTools\Controller\CateogryController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('TransitionTeam\\TransitionTools\\Controller\\CateogryController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllCateogriesFromRepositoryAndAssignsThemToView()
	{

		$allCateogries = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$cateogryRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\CateogryRepository', array('findAll'), array(), '', FALSE);
		$cateogryRepository->expects($this->once())->method('findAll')->will($this->returnValue($allCateogries));
		$this->inject($this->subject, 'cateogryRepository', $cateogryRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('cateogries', $allCateogries);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenCateogryToView()
	{
		$cateogry = new \TransitionTeam\TransitionTools\Domain\Model\Cateogry();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('cateogry', $cateogry);

		$this->subject->showAction($cateogry);
	}
}
