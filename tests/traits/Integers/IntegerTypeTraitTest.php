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
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerTypeTrait;

/**
 * Integer type trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerTypeTraitTest extends AbstractTestCase {

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TestIntegerTypeTrait();

        $obj->setType(1);
        $this->assertEquals(1, $obj->getType());
    }
}
