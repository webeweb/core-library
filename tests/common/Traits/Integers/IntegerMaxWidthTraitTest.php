<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerMaxWidthTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Integer max width trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerMaxWidthTraitTest extends AbstractTestCase {

    /**
     * Test setMaxWidth()
     *
     * @return void
     */
    public function testSetMaxWidth(): void {

        $obj = new TestIntegerMaxWidthTrait();

        $obj->setMaxWidth(1920);
        $this->assertEquals(1920, $obj->getMaxWidth());
    }
}
