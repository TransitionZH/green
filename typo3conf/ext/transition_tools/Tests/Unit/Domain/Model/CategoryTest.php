<?php

namespace TransitionTeam\TransitionTools\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Benno Flory <benno.flory@gmx.ch>, Benno Flory - Web und Wandel
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
 * Test case for class \TransitionTeam\TransitionTools\Domain\Model\Category.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Benno Flory <benno.flory@gmx.ch>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TransitionTeam\TransitionTools\Domain\Model\Category
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TransitionTeam\TransitionTools\Domain\Model\Category();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getUuidReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUuid()
		);
	}

	/**
	 * @test
	 */
	public function setUuidForStringSetsUuid()
	{
		$this->subject->setUuid('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'uuid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSourceIdReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSourceId()
		);
	}

	/**
	 * @test
	 */
	public function setSourceIdForStringSetsSourceId()
	{
		$this->subject->setSourceId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sourceId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIsTopCategoryReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getIsTopCategory()
		);
	}

	/**
	 * @test
	 */
	public function setIsTopCategoryForBoolSetsIsTopCategory()
	{
		$this->subject->setIsTopCategory(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'isTopCategory',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCssReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCss()
		);
	}

	/**
	 * @test
	 */
	public function setCssForStringSetsCss()
	{
		$this->subject->setCss('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'css',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getParentCategoryReturnsInitialValueForCategory()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getParentCategory()
		);
	}

	/**
	 * @test
	 */
	public function setParentCategoryForCategorySetsParentCategory()
	{
		$parentCategoryFixture = new \TransitionTeam\TransitionTools\Domain\Model\Category();
		$this->subject->setParentCategory($parentCategoryFixture);

		$this->assertAttributeEquals(
			$parentCategoryFixture,
			'parentCategory',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRelatedCategoriesReturnsInitialValueForCategory()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRelatedCategories()
		);
	}

	/**
	 * @test
	 */
	public function setRelatedCategoriesForObjectStorageContainingCategorySetsRelatedCategories()
	{
		$relatedCategory = new \TransitionTeam\TransitionTools\Domain\Model\Category();
		$objectStorageHoldingExactlyOneRelatedCategories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRelatedCategories->attach($relatedCategory);
		$this->subject->setRelatedCategories($objectStorageHoldingExactlyOneRelatedCategories);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRelatedCategories,
			'relatedCategories',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRelatedCategoryToObjectStorageHoldingRelatedCategories()
	{
		$relatedCategory = new \TransitionTeam\TransitionTools\Domain\Model\Category();
		$relatedCategoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$relatedCategoriesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($relatedCategory));
		$this->inject($this->subject, 'relatedCategories', $relatedCategoriesObjectStorageMock);

		$this->subject->addRelatedCategory($relatedCategory);
	}

	/**
	 * @test
	 */
	public function removeRelatedCategoryFromObjectStorageHoldingRelatedCategories()
	{
		$relatedCategory = new \TransitionTeam\TransitionTools\Domain\Model\Category();
		$relatedCategoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$relatedCategoriesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($relatedCategory));
		$this->inject($this->subject, 'relatedCategories', $relatedCategoriesObjectStorageMock);

		$this->subject->removeRelatedCategory($relatedCategory);

	}

	/**
	 * @test
	 */
	public function getSourceReturnsInitialValueForSynchRoute()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getSource()
		);
	}

	/**
	 * @test
	 */
	public function setSourceForSynchRouteSetsSource()
	{
		$sourceFixture = new \TransitionTeam\TransitionTools\Domain\Model\SynchRoute();
		$this->subject->setSource($sourceFixture);

		$this->assertAttributeEquals(
			$sourceFixture,
			'source',
			$this->subject
		);
	}
}
