<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Algorithm;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Algorithm\LuhnAlgorithm;

/**
 * Luhn algorithm test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Algorithm
 * @final
 */
final class LuhnAlgorithmTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the check() method.
     *
     * @return void
     */
    public function testCheck() {

        $this->assertEquals(true, LuhnAlgorithm::check("51538089700014"));
        $this->assertEquals(false, LuhnAlgorithm::check("51538089700024"));

        $this->assertEquals(true, LuhnAlgorithm::check("53897790100015"));
        $this->assertEquals(false, LuhnAlgorithm::check("53897790100025"));

        $this->assertEquals(true, LuhnAlgorithm::check("53395168700011"));
        $this->assertEquals(false, LuhnAlgorithm::check("53395168700021"));
    }

}
