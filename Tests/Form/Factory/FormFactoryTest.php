<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Form\Factory;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Form\Factory\FormFactory;
use WBW\Library\Core\Navigation\Node\NavigationNode;

/**
 * FormFactoryTest
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Form\Factory
 * @final
 */
final class FormFactoryTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the createChoiceType() method.
	 *
	 * @return void
	 */
	public function testCreateChoiceType() {

		$obj = [
			0	 => "0",
			1	 => "1",
			2	 => "2",
		];

		$res = ["choices" => ["0" => 0, "1" => 1, "2" => 2]];
		$this->assertEquals($res, FormFactory::createChoiceType($obj));
	}

	/**
	 * Tests the createEntityType method.
	 *
	 * @return void
	 */
	public function testCreateEntityType() {

		$obj = [
			new NavigationNode("id1"),
			new NavigationNode("id2"),
			new NavigationNode("id3"),
		];

		$res0 = FormFactory::createEntityType(NavigationNode::class, $obj);
		$this->assertEquals(NavigationNode::class, $res0["class"]);
		$this->assertCount(3, $res0["choices"]);
		$this->assertEquals($obj[0], $res0["choices"][0]);
		$this->assertEquals($obj[1], $res0["choices"][1]);
		$this->assertEquals($obj[2], $res0["choices"][2]);
		$this->assertEquals(true, is_callable($res0["choice_label"]));

		$res1 = FormFactory::createEntityType(NavigationNode::class, $obj, ["empty" => true]);
		$this->assertEquals(NavigationNode::class, $res1["class"]);
		$this->assertCount(4, $res1["choices"]);
		$this->assertEquals(null, $res1["choices"][0]);
		$this->assertEquals($obj[0], $res1["choices"][1]);
		$this->assertEquals($obj[1], $res1["choices"][2]);
		$this->assertEquals($obj[2], $res1["choices"][3]);
		$this->assertEquals(true, is_callable($res1["choice_label"]));
	}

}
