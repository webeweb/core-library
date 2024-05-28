<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringStateTrait;

/**
 * String state trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringStateTraitTest extends AbstractTestCase {

    /**
     * Test setState()
     *
     * @return void
     */
    public function testSetState(): void {

        $obj = new TestStringStateTrait();

        $obj->setState("state");
        $this->assertEquals("state", $obj->getState());
    }
}
