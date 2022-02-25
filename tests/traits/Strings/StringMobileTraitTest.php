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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringMobileTrait;

/**
 * String mobile trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringMobileTraitTest extends AbstractTestCase {

    /**
     * Tests setMobile()
     *
     * @return void
     */
    public function testSetMobile(): void {

        $obj = new TestStringMobileTrait();

        $obj->setMobile("mobile");
        $this->assertEquals("mobile", $obj->getMobile());
    }
}
