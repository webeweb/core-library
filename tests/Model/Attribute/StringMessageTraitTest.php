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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringMessageTrait;

/**
 * String message trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringMessageTraitTest extends AbstractTestCase {

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage(): void {

        $obj = new TestStringMessageTrait();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }
}
