<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringTextTrait;

/**
 * String text trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringTextTraitTest extends AbstractTestCase {

    /**
     * Test setText()
     *
     * @return void
     */
    public function testSetText(): void {

        $obj = new TestStringTextTrait();

        $obj->setText("text");
        $this->assertEquals("text", $obj->getText());
    }
}
