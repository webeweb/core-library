<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use Exception;
use InvalidArgumentException;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerPortTrait;

/**
 * Integer port trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerPortTraitTest extends AbstractTestCase {

    /**
     * Tests setPort()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPort(): void {

        $obj = new TestIntegerPortTrait();

        $obj->setPort(22);
        $this->assertEquals(22, $obj->getPort());
    }

    /**
     * Tests setPort()
     *
     * @return void
     */
    public function testSetPortWithGreaterThan65536(): void {

        $obj = new TestIntegerPortTrait();

        try {

            $obj->setPort(65537);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The port must be between 1 and 65536", $ex->getMessage());
        }
    }

    /**
     * Tests setPort()
     *
     * @return void
     */
    public function testSetPortWithLessThan1(): void {

        $obj = new TestIntegerPortTrait();

        try {

            $obj->setPort(-1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The port must be between 1 and 65536", $ex->getMessage());
        }
    }
}
