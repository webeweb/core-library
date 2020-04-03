<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringTextTrait;

/**
 * String text trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringTextTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringTextTrait();

        $this->assertNull($obj->getText());
    }

    /**
     * Tests the setText() method.
     *
     * @return void
     */
    public function testSetText() {

        $obj = new TestStringTextTrait();

        $obj->setText("text");
        $this->assertEquals("text", $obj->getText());
    }
}
