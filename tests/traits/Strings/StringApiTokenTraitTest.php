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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringApiTokenTrait;

/**
 * String API token trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringApiTokenTraitTest extends AbstractTestCase {

    /**
     * Tests setApiToken()
     *
     * @return void
     */
    public function testSetApiToken(): void {

        $obj = new TestStringApiTokenTrait();

        $obj->setApiToken("apiToken");
        $this->assertEquals("apiToken", $obj->getApiToken());
    }
}
