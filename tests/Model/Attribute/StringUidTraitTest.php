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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringUidTrait;

/**
 * String uid trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringUidTraitTest extends AbstractTestCase {

    /**
     * Tests the setUid() method.
     *
     * @return void
     */
    public function testSetUid(): void {

        $obj = new TestStringUidTrait();

        $obj->setUid("uid");
        $this->assertEquals("uid", $obj->getUid());
    }
}
