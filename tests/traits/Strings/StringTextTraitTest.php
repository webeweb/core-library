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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringTextTrait;

/**
 * String text trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringTextTraitTest extends AbstractTestCase {

    /**
     * Tests setText()
     *
     * @return void
     */
    public function testSetText(): void {

        $obj = new TestStringTextTrait();

        $obj->setText("text");
        $this->assertEquals("text", $obj->getText());
    }
}
