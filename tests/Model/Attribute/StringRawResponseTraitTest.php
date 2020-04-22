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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringRawResponseTrait;

/**
 * String raw response trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringRawResponseTraitTest extends AbstractTestCase {

    /**
     * Tests the setRawResponse() method.
     *
     * @return void
     */
    public function testSetRawResponse() {

        $obj = new TestStringRawResponseTrait();

        $obj->setRawResponse("rawResponse");
        $this->assertEquals("rawResponse", $obj->getRawResponse());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestStringRawResponseTrait();

        $this->assertNull($obj->getRawResponse());
    }
}
