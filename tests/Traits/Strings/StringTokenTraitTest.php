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

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringTokenTrait;

/**
 * String token trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringTokenTraitTest extends AbstractTestCase {

    /**
     * Test setToken()
     *
     * @return void
     */
    public function testSetToken(): void {

        $obj = new TestStringTokenTrait();

        $obj->setToken("token");
        $this->assertEquals("token", $obj->getToken());
    }
}
