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

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerMinWidthTrait;

/**
 * Integer min width trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerMinWidthTraitTest extends AbstractTestCase {

    /**
     * Test setMinWidth()
     *
     * @return void
     */
    public function testSetMinWidth(): void {

        $obj = new TestIntegerMinWidthTrait();

        $obj->setMinWidth(1280);
        $this->assertEquals(1280, $obj->getMinWidth());
    }
}
