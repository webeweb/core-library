<?php

/*
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
	 * Tests the sort() method.
	 *
	 * @return void
	 */
	public function testCompare() {

		// Initialize the nodes.
		$obj = [
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
		$obj[0]->addNode($obj[9]);
		$obj[0]->addNode($obj[8]);
		$obj[0]->addNode($obj[7]);

		$obj[1]->addNode($obj[6]);
		$obj[1]->addNode($obj[5]);
		$obj[1]->addNode($obj[4]);

		$obj[4]->addNode($obj[3]);
		$obj[4]->addNode($obj[2]);

		$res = AlphabeticalTreeSort::sort(array_values($obj));
		$this->assertEquals($obj[0]->getLabel(), $res[0]->getLabel());
		$this->assertEquals($obj[7]->getLabel(), $res[1]->getLabel());
		$this->assertEquals($obj[8]->getLabel(), $res[2]->getLabel());
		$this->assertEquals($obj[9]->getLabel(), $res[3]->getLabel());
		$this->assertEquals($obj[1]->getLabel(), $res[4]->getLabel());
		$this->assertEquals($obj[4]->getLabel(), $res[5]->getLabel());
		$this->assertEquals($obj[2]->getLabel(), $res[6]->getLabel());
		$this->assertEquals($obj[3]->getLabel(), $res[7]->getLabel());
		$this->assertEquals($obj[5]->getLabel(), $res[8]->getLabel());
		$this->assertEquals($obj[6]->getLabel(), $res[9]->getLabel());
	}

	/**
	 * Tests the getLevel() method.
	 *
	 * @return void
	 */
	public function testGetLevel() {

		// Initialize the nodes.
		$obj = [
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
		$obj[0]->addNode($obj[9]);
		$obj[0]->addNode($obj[8]);
		$obj[0]->addNode($obj[7]);

		$obj[1]->addNode($obj[6]);
		$obj[1]->addNode($obj[5]);
		$obj[1]->addNode($obj[4]);

		$obj[4]->addNode($obj[3]);
		$obj[4]->addNode($obj[2]);

		$this->assertEquals(0, AlphabeticalTreeSort::getLevel($obj[0]));
		$this->assertEquals(0, AlphabeticalTreeSort::getLevel($obj[1]));
		$this->assertEquals(2, AlphabeticalTreeSort::getLevel($obj[2]));
		$this->assertEquals(2, AlphabeticalTreeSort::getLevel($obj[3]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($obj[4]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($obj[5]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($obj[6]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($obj[7]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($obj[8]));
		$this->assertEquals(1, AlphabeticalTreeSort::getLevel($obj[9]));
	}

}
