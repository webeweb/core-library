<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringCommentTrait;

/**
 * String comment trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringCommentTraitTest extends AbstractTestCase {

    /**
     * Tests the setComment() method.
     *
     * @return void
     */
    public function testSetComment(): void {

        $obj = new TestStringCommentTrait();

        $obj->setComment("comment");
        $this->assertEquals("comment", $obj->getComment());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestStringCommentTrait();

        $this->assertNull($obj->getComment());
    }
}
