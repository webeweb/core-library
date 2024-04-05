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

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringRedirectUrlTrait;

/**
 * String redirect URL trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringRedirectUrlTraitTest extends AbstractTestCase {

    /**
     * Test setRedirectUrl()
     *
     * @return void
     */
    public function testSetRedirectUrl(): void {

        $obj = new TestStringRedirectUrlTrait();

        $obj->setRedirectUrl("redirectUrl");
        $this->assertEquals("redirectUrl", $obj->getRedirectUrl());
    }
}
