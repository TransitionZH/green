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
 * Test case for class TransitionTeam\TransitionTools\Controller\VenueController.
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class VenueControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \TransitionTeam\TransitionTools\Controller\VenueController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('TransitionTeam\\TransitionTools\\Controller\\VenueController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllVenuesFromRepositoryAndAssignsThemToView()
	{

		$allVenues = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$venueRepository = $this->getMock('TransitionTeam\\TransitionTools\\Domain\\Repository\\VenueRepository', array('findAll'), array(), '', FALSE);
		$venueRepository->expects($this->once())->method('findAll')->will($this->returnValue($allVenues));
		$this->inject($this->subject, 'venueRepository', $venueRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('venues', $allVenues);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenVenueToView()
	{
		$venue = new \TransitionTeam\TransitionTools\Domain\Model\Venue();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('venue', $venue);

		$this->subject->showAction($venue);
	}
}
