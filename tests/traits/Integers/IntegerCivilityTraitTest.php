<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerCivilityTrait;

/**
 * Integer civility trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerCivilityTraitTest extends AbstractTestCase {

    /**
     * Tests setCivility()
     *
     * @return void
     */
    public function testSetCivility(): void {

        $obj = new TestIntegerCivilityTrait();

        $obj->setCivility(1);
        $this->assertEquals(1, $obj->getCivility());
    }
}
