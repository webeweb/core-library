<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Choices;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Choices\CivilityChoices;

/**
 * CivilityChoicesTest
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Choices
 * @final
 */
final class CivilityChoicesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getChoices() method.
	 *
	 * @return void
	 */
	public function testGetChoices() {

		$res = [-1 => "choices.civility.empty", 60 => "choices.civility.miss", 50 => "choices.civility.mrs", 84 => "choices.civility.mister"];
		$this->assertEquals($res, CivilityChoices::getChoices());
	}

}
