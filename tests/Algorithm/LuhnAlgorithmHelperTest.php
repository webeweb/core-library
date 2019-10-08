<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Algorithm;

use WBW\Library\Core\Algorithm\LuhnAlgorithmHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Luhn algorithm helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Algorithm
 */
class LuhnAlgorithmTest extends AbstractTestCase {

    /**
     * Tests the check() method.
     *
     * @return void
     */
    public function testCheck() {

        $this->assertTrue(LuhnAlgorithmHelper::check("51538089700014"));
        $this->assertFalse(LuhnAlgorithmHelper::check("51538089700024"));

        $this->assertTrue(LuhnAlgorithmHelper::check("53897790100015"));
        $this->assertFalse(LuhnAlgorithmHelper::check("53897790100025"));

        $this->assertTrue(LuhnAlgorithmHelper::check("53395168700011"));
        $this->assertFalse(LuhnAlgorithmHelper::check("53395168700021"));
    }

}
