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
 * Test case for class TransitionTeam\TransitionTools\Controller\InitiativeController.
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class InitiativeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \TransitionTeam\TransitionTools\Controller\InitiativeController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('TransitionTeam\\TransitionTools\\Controller\\InitiativeController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllInitiativesFromRepositoryAndAssignsThemToView()
	{

		$allInitiatives = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$initiativeRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\InitiativeRepository', array('findAll'), array(), '', FALSE);
		$initiativeRepository->expects($this->once())->method('findAll')->will($this->returnValue($allInitiatives));
		$this->inject($this->subject, 'initiativeRepository', $initiativeRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('initiatives', $allInitiatives);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenInitiativeToView()
	{
		$initiative = new \TransitionTeam\TransitionTools\Domain\Model\Initiative();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('initiative', $initiative);

		$this->subject->showAction($initiative);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenInitiativeToInitiativeRepository()
	{
		$initiative = new \TransitionTeam\TransitionTools\Domain\Model\Initiative();

		$initiativeRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\InitiativeRepository', array('add'), array(), '', FALSE);
		$initiativeRepository->expects($this->once())->method('add')->with($initiative);
		$this->inject($this->subject, 'initiativeRepository', $initiativeRepository);

		$this->subject->createAction($initiative);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenInitiativeToView()
	{
		$initiative = new \TransitionTeam\TransitionTools\Domain\Model\Initiative();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('initiative', $initiative);

		$this->subject->editAction($initiative);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenInitiativeInInitiativeRepository()
	{
		$initiative = new \TransitionTeam\TransitionTools\Domain\Model\Initiative();

		$initiativeRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\InitiativeRepository', array('update'), array(), '', FALSE);
		$initiativeRepository->expects($this->once())->method('update')->with($initiative);
		$this->inject($this->subject, 'initiativeRepository', $initiativeRepository);

		$this->subject->updateAction($initiative);
	}
}
