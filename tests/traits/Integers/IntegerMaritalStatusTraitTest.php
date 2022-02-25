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
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerMaritalStatusTrait;

/**
 * Integer marital status trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerMaritalStatusTraitTest extends AbstractTestCase {

    /**
     * Tests setMaritalStatus()
     *
     * @return void
     */
    public function testSetMaritalStatus(): void {

        $obj = new TestIntegerMaritalStatusTrait();

        $obj->setMaritalStatus(1);
        $this->assertEquals(1, $obj->getMaritalStatus());
    }
}
