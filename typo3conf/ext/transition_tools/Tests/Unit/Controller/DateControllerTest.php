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
 * Test case for class TransitionTeam\TransitionTools\Controller\DateController.
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class DateControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \TransitionTeam\TransitionTools\Controller\DateController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('TransitionTeam\\TransitionTools\\Controller\\DateController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllDatesFromRepositoryAndAssignsThemToView()
	{

		$allDates = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$dateRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\DateRepository', array('findAll'), array(), '', FALSE);
		$dateRepository->expects($this->once())->method('findAll')->will($this->returnValue($allDates));
		$this->inject($this->subject, 'dateRepository', $dateRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('dates', $allDates);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenDateToView()
	{
		$date = new \TransitionTeam\TransitionTools\Domain\Model\Date();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('date', $date);

		$this->subject->showAction($date);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenDateToDateRepository()
	{
		$date = new \TransitionTeam\TransitionTools\Domain\Model\Date();

		$dateRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\DateRepository', array('add'), array(), '', FALSE);
		$dateRepository->expects($this->once())->method('add')->with($date);
		$this->inject($this->subject, 'dateRepository', $dateRepository);

		$this->subject->createAction($date);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenDateToView()
	{
		$date = new \TransitionTeam\TransitionTools\Domain\Model\Date();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('date', $date);

		$this->subject->editAction($date);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenDateInDateRepository()
	{
		$date = new \TransitionTeam\TransitionTools\Domain\Model\Date();

		$dateRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\DateRepository', array('update'), array(), '', FALSE);
		$dateRepository->expects($this->once())->method('update')->with($date);
		$this->inject($this->subject, 'dateRepository', $dateRepository);

		$this->subject->updateAction($date);
	}
}
