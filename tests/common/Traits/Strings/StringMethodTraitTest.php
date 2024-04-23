<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringMethodTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String method trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringMethodTraitTest extends AbstractTestCase {

    /**
     * Test setMethod()
     *
     * @return void
     */
    public function testSetMethod(): void {

        $obj = new TestStringMethodTrait();

        $obj->setMethod("method");
        $this->assertEquals("method", $obj->getMethod());
    }
}
