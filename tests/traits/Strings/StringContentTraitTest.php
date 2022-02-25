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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringContentTrait;

/**
 * String content trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringContentTraitTest extends AbstractTestCase {

    /**
     * Tests setContent()
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestStringContentTrait();

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }
}
