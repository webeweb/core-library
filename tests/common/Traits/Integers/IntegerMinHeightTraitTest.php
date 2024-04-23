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

use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerMinHeightTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Integer min height trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerMinHeightTraitTest extends AbstractTestCase {

    /**
     * Test setMinHeight()
     *
     * @return void
     */
    public function testSetMinHeight(): void {

        $obj = new TestIntegerMinHeightTrait();

        $obj->setMinHeight(1280);
        $this->assertEquals(1280, $obj->getMinHeight());
    }
}
