<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Floats;

use WBW\Library\Common\Tests\Fixtures\Traits\Floats\TestFloatYTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Float y trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Floats
 */
class FloatYTraitTest extends AbstractTestCase {

    /**
     * Test setY()
     *
     * @return void
     */
    public function testSetY(): void {

        $obj = new TestFloatYTrait();

        $obj->setY(0.123456789);
        $this->assertEquals(0.123456789, $obj->getY());
        $this->assertEquals(0, $obj->getYInt());
    }
}
