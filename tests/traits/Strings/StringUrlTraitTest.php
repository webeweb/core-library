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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringUrlTrait;

/**
 * String URL trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringUrlTraitTest extends AbstractTestCase {

    /**
     * Tests setUrl()
     *
     * @return void
     */
    public function testSetUrl(): void {

        $obj = new TestStringUrlTrait();

        $obj->setUrl("Url");
        $this->assertEquals("Url", $obj->getUrl());
    }
}
