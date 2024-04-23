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

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerCodeTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Integer code trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerCodeTraitTest extends AbstractTestCase {

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TestIntegerCodeTrait();

        $obj->setCode(1);
        $this->assertEquals(1, $obj->getCode());
    }
}
