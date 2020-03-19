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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringHashMd5Trait;

/**
 * String hash "MD5" trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringHashMd5TraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringHashMd5Trait();

        $this->assertNull($obj->getHashMd5());
    }

    /**
     * Tests the setHashMd5() method.
     *
     * @return void
     */
    public function testSetHashMd5() {

        $obj = new TestStringHashMd5Trait();

        $obj->setHashMd5("hashMd5");
        $this->assertEquals("hashMd5", $obj->getHashMd5());
    }
}
