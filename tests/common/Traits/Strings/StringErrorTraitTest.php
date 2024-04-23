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

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringErrorTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String error trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringErrorTraitTest extends AbstractTestCase {

    /**
     * Test setError()
     *
     * @return void
     */
    public function testSetError(): void {

        $obj = new TestStringErrorTrait();

        $obj->setError("error");
        $this->assertEquals("error", $obj->getError());
    }
}
