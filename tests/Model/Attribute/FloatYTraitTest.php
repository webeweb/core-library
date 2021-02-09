<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatYTrait;

/**
 * Float y trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatYTraitTest extends AbstractTestCase {

    /**
     * Tests the setY() method.
     *
     * @return void
     */
    public function testSetY(): void {

        $obj = new TestFloatYTrait();

        $obj->setY(1.01);
        $this->assertEquals(1.01, $obj->getY());
        $this->assertEquals(1, $obj->getYInt());
    }
}
