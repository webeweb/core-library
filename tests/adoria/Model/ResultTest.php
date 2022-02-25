<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\Model;

use WBW\Library\Adoria\Model\Line;
use WBW\Library\Adoria\Model\Result;
use WBW\Library\Adoria\Tests\AbstractTestCase;

/**
 * Result test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Tests\Model
 */
class ResultTest extends AbstractTestCase {

    /**
     * Tests hasData()
     *
     * @return void
     */
    public function testHasData(): void {

        // Set a Line mock.
        $line = new Line();

        $obj = new Result();

        $obj->setData([$line]);
        $this->assertTrue($obj->hasData());
    }

    /**
     * Tests hasError()
     *
     * @return void
     */
    public function testHasError(): void {

        $obj = new Result();

        $obj->setReturnCode(0);
        $this->assertTrue($obj->hasError());
    }

    /**
     * Tests setDatas()
     *
     * @return void
     */
    public function testSetDatas(): void {

        // Set a Line mock.
        $line = new Line();

        $obj = new Result();

        $obj->setData([$line]);
        $this->assertEquals([$line], $obj->getData());
    }

    /**
     * Tests setErrors()
     *
     * @return void
     */
    public function testSetErrors(): void {

        $obj = new Result();

        $obj->setErrors(["error"]);
        $this->assertEquals(["error"], $obj->getErrors());
    }

    /**
     * Tests setReturnCOde()
     *
     * @return void
     */
    public function testSetReturnCode(): void {

        $obj = new Result();

        $obj->setReturnCode(1);
        $this->assertEquals(1, $obj->getReturnCode());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Result();

        $this->assertEquals([], $obj->getData());
        $this->assertEquals([], $obj->getErrors());
        $this->assertFalse($obj->hasData());
        $this->assertFalse($obj->hasError());
        $this->assertNull($obj->getReturnCode());
    }
}
