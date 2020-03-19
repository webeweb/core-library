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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringHashSha1Trait;

/**
 * String hash "SHA1" trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringHashSha1TraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringHashSha1Trait();

        $this->assertNull($obj->getHashSha1());
    }

    /**
     * Tests the setHashSha1() method.
     *
     * @return void
     */
    public function testSetHashSha1() {

        $obj = new TestStringHashSha1Trait();

        $obj->setHashSha1("hashSha1");
        $this->assertEquals("hashSha1", $obj->getHashSha1());
    }
}
