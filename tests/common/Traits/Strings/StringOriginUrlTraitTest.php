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

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringOriginUrlTrait;

/**
 * String origin URL trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringOriginUrlTraitTest extends AbstractTestCase {

    /**
     * Test setOriginUrl()
     *
     * @return void
     */
    public function testSetOriginUrl(): void {

        $obj = new TestStringOriginUrlTrait();

        $obj->setOriginUrl("originUrl");
        $this->assertEquals("originUrl", $obj->getOriginUrl());
    }
}