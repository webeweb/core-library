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
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringApiTokenTrait;

/**
 * String API token trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringApiTokenTraitTest extends AbstractTestCase {

    /**
     * Test setApiToken()
     *
     * @return void
     */
    public function testSetApiToken(): void {

        $obj = new TestStringApiTokenTrait();

        $obj->setApiToken("apiToken");
        $this->assertEquals("apiToken", $obj->getApiToken());
    }
}
