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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringNumberTrait;

/**
 * String number trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringNumberTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumber() method.
     *
     * @return void
     */
    public function testSetNumber() {

        $obj = new TestStringNumberTrait();

        $obj->setNumber("number");
        $this->assertEquals("number", $obj->getNumber());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestStringNumberTrait();

        $this->assertNull($obj->getNumber());
    }
}
