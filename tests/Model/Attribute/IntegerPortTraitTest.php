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

use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerPortTrait;

/**
 * Integer port trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerPortTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestIntegerPortTrait();

        $this->assertNull($obj->getPort());
    }

    /**
     * Tests the setPort() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPort() {

        $obj = new TestIntegerPortTrait();

        $obj->setPort(22);
        $this->assertEquals(22, $obj->getPort());
    }

    /**
     * Tests the setPort() method.
     *
     * @return void
     */
    public function testSetPortWithGreaterThan65536() {

        $obj = new TestIntegerPortTrait();

        try {

            $obj->setPort(65537);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The port must be between 1 and 65536", $ex->getMessage());
        }
    }

    /**
     * Tests the setPort() method.
     *
     * @return void
     */
    public function testSetPortWithLessThan1() {

        $obj = new TestIntegerPortTrait();

        try {

            $obj->setPort(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The port must be between 1 and 65536", $ex->getMessage());
        }
    }
}
