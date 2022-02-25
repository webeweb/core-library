<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerIdTrait;

/**
 * Integer id trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerIdTraitTest extends AbstractTestCase {

    /**
     * Tests setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new TestIntegerIdTrait();

        $obj->setId(1);
        $this->assertEquals(1, $obj->getId());
    }
}
