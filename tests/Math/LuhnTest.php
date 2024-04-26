<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Math;

use WBW\Library\Common\Math\Luhn;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Luhn test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Math
 */
class LuhnTest extends AbstractTestCase {

    /**
     * Test check()
     *
     * @return void
     */
    public function testCheck(): void {

        $this->assertTrue(Luhn::check("51538089700014"));
        $this->assertFalse(Luhn::check("51538089700024"));

        $this->assertTrue(Luhn::check("53897790100015"));
        $this->assertFalse(Luhn::check("53897790100025"));

        $this->assertTrue(Luhn::check("53395168700011"));
        $this->assertFalse(Luhn::check("53395168700021"));
    }
}
