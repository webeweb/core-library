<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerHeightTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Integer height trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerHeightTraitTest extends AbstractTestCase {

    /**
     * Test setHeight()
     *
     * @return void
     */
    public function testSetHeight(): void {

        $obj = new TestIntegerHeightTrait();

        $obj->setHeight(1);
        $this->assertEquals(1, $obj->getHeight());
    }
}
