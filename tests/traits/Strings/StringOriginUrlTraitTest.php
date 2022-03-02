<?php

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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringOriginUrlTrait;

/**
 * String origin URL trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringOriginUrlTraitTest extends AbstractTestCase {

    /**
     * Tests setOriginUrl()
     *
     * @return void
     */
    public function testSetOriginUrl(): void {

        $obj = new TestStringOriginUrlTrait();

        $obj->setOriginUrl("originUrl");
        $this->assertEquals("originUrl", $obj->getOriginUrl());
    }
}
