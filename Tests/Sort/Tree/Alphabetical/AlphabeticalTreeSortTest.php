<?php

/**
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * © 2017 All rights reserved.
 */

namespace WBW\Library\Core\Tests\Sort\Tree\Alphabetical;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Navigation\Node\NavigationNode;
use WBW\Library\Core\Sort\Tree\Alphabetical\AlphabeticalTreeSort;

/**
 * Alphabetical tree sort test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Sort\Tree\Alphabetical
 * @final
 */
final class AlphabeticalTreeSortTest extends PHPUnit_Framework_TestCase {

	/**
	 * Objects.
	 *
	 * @var AlphabeticalTreeSortInterface[]
	 */
	private $obj;

	/**
	 * {@inheritdoc}
	 */
	public function setUp() {

		// Initialize the nodes.
		$this->obj = [
			new NavigationNode("id01"),
			new NavigationNode("id02"),
			new NavigationNode("id03"),
			new NavigationNode("id04"),
			new NavigationNode("id05"),
			new NavigationNode("id06"),
			new NavigationNode("id07"),
			new NavigationNode("id08"),
			new NavigationNode("id09"),
			new NavigationNode("id10"),
		];

		// Imbricate the nodes.
		$this->obj[0]->addNode($this->obj[9]);
		$this->obj[0]->addNode($this->obj[8]);
		$this->obj[0]->addNode($this->obj[7]);

		$this->obj[1]->addNode($this->obj[6]);
		$this->obj[1]->addNode($this->obj[5]);
		$this->obj[1]->addNode($this->obj[4]);

		$this->obj[4]->addNode($this->obj[3]);
		$this->obj[4]->addNode($this->obj[2]);
	}

	/**
	 * Tests the createChoices() method.
	 *
	 * @return void.
	 */
	public function testCreateChoices() {

		$res = AlphabeticalTreeSort::createChoices($this->obj);
		$this->assertCount(3, $res["id01"]);
		$this->assertEquals($this->obj[7], $res["id01"][0]);
		$this->assertEquals($this->obj[8], $res["id01"][1]);
		$this->assertEquals($this->obj[9], $res["id01"][2]);
		$this->assertCount(5, $res["id02"]);
		$this->assertEquals($this->obj[4], $res["id02"][0]);
		$this->assertEquals($this->obj[2], $res["id02"][1]);
		$this->assertEquals($this->obj[3], $res["id02"][2]);
		$this->assertEquals($this->obj[5], $res["id02"][3]);
		$this->assertEquals($this->obj[6], $res["id02"][4]);
	}

	/**
	 * Tests the getLevel() method.
	 *
	 * @return void
	 */
	public function testGetLevel() {

		$this->assertEquals(0, AlphabeticalTreeSort::getLevel($this->obj[0]));
		$this->assertEquals(0, AlphabeticalTreeSort::getLevel($this->obj[1]));
		$this->assertEquals(2, AlphabeticalTreeSort::getLevel($this->obj[2]));
		$this->assertEquals(2, AlphabeticalTreeSort::getLevel($this->obj[3]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->obj[4]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->obj[5]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->obj[6]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->obj[7]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->obj[8]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($this->obj[9]));
	}

	/**
	 * Tests the sort() method.
	 *
	 * @return void
	 */
	public function testSort() {

		$res = AlphabeticalTreeSort::sort(array_values($this->obj));
		$this->assertEquals($this->obj[0]->getLabel(), $res[0]->getLabel());
		$this->assertEquals($this->obj[7]->getLabel(), $res[1]->getLabel());
		$this->assertEquals($this->obj[8]->getLabel(), $res[2]->getLabel());
		$this->assertEquals($this->obj[9]->getLabel(), $res[3]->getLabel());
		$this->assertEquals($this->obj[1]->getLabel(), $res[4]->getLabel());
		$this->assertEquals($this->obj[4]->getLabel(), $res[5]->getLabel());
		$this->assertEquals($this->obj[2]->getLabel(), $res[6]->getLabel());
		$this->assertEquals($this->obj[3]->getLabel(), $res[7]->getLabel());
		$this->assertEquals($this->obj[5]->getLabel(), $res[8]->getLabel());
		$this->assertEquals($this->obj[6]->getLabel(), $res[9]->getLabel());
	}

}
