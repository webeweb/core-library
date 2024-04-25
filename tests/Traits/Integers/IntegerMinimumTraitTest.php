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

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerMinimumTrait;

/**
 * Integer minimum trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerMinimumTraitTest extends AbstractTestCase {

    /**
     * Test setMinimum()
     *
     * @return void
     */
    public function testSetMinimum(): void {

        $obj = new TestIntegerMinimumTrait();

        $obj->setMinimum(1);
        $this->assertEquals(1, $obj->getMinimum());
    }
}
