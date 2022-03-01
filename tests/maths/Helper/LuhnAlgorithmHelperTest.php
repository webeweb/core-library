<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Tests\Helper;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Maths\Helper\LuhnAlgorithmHelper;

/**
 * Luhn algorithm helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class LuhnAlgorithmHelperTest extends AbstractTestCase {

    /**
     * Tests check()
     *
     * @return void
     */
    public function testCheck(): void {

        $this->assertTrue(LuhnAlgorithmHelper::check("51538089700014"));
        $this->assertFalse(LuhnAlgorithmHelper::check("51538089700024"));

        $this->assertTrue(LuhnAlgorithmHelper::check("53897790100015"));
        $this->assertFalse(LuhnAlgorithmHelper::check("53897790100025"));

        $this->assertTrue(LuhnAlgorithmHelper::check("53395168700011"));
        $this->assertFalse(LuhnAlgorithmHelper::check("53395168700021"));
    }
}
