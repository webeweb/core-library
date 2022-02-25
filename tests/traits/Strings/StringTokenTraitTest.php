<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringTokenTrait;

/**
 * String token trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringTokenTraitTest extends AbstractTestCase {

    /**
     * Tests setToken()
     *
     * @return void
     */
    public function testSetToken(): void {

        $obj = new TestStringTokenTrait();

        $obj->setToken("token");
        $this->assertEquals("token", $obj->getToken());
    }
}
