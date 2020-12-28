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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringHashTrait;

/**
 * String hash trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringHashTraitTest extends AbstractTestCase {

    /**
     * Tests the setHash() method.
     *
     * @return void
     */
    public function testSetHash(): void {

        $obj = new TestStringHashTrait();

        $obj->setHash("hash");
        $this->assertEquals("hash", $obj->getHash());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestStringHashTrait();

        $this->assertNull($obj->getHash());
    }
}
