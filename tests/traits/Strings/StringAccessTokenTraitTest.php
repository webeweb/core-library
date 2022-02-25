<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringAccessTokenTrait;

/**
 * String access token trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringAccessTokenTraitTest extends AbstractTestCase {

    /**
     * Tests setAccessToken()
     *
     * @return void
     */
    public function testSetAccessToken(): void {

        $obj = new TestStringAccessTokenTrait();

        $obj->setAccessToken("accessToken");
        $this->assertEquals("accessToken", $obj->getAccessToken());
    }
}
