<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Adoria\Model;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Adoria\Model\LineInterface;
use WBW\Library\Core\ThirdParty\Adoria\Model\LineResponseInterface;
use WBW\Library\Core\ThirdParty\Adoria\Model\Result;

/**
 * Result test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Adoria\Model
 */
class ResultTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Result();

        $this->assertEquals([], $obj->getData());
        $this->assertEquals([], $obj->getErrors());
        $this->assertFalse($obj->hasData());
        $this->assertFalse($obj->hasError());
        $this->assertNull($obj->getReturnCode());
    }

    /**
     * Tests the hasData() method.
     *
     * @return void
     */
    public function testHasData() {

        // Set a Line mock.
        $line = $this->getMockBuilder(LineResponseInterface::class)->getMock();

        $obj = new Result();

        $obj->setData([$line]);
        $this->assertTrue($obj->hasData());
    }

    /**
     * Tests the hasError() method.
     *
     * @return void
     */
    public function testHasError() {

        $obj = new Result();

        $obj->setReturnCode(0);
        $this->assertTrue($obj->hasError());
    }

    /**
     * Tests the setDatas() method.
     *
     * @erturn void
     */
    public function testSetDatas() {

        // Set a Line mock.
        $line = $this->getMockBuilder(LineResponseInterface::class)->getMock();

        $obj = new Result();

        $obj->setData([$line]);
        $this->assertEquals([$line], $obj->getData());
    }

    /**
     * Tests the setErrors() method.
     *
     * @return void
     */
    public function testSetErrors() {

        $obj = new Result();

        $obj->setErrors(["error"]);
        $this->assertEquals(["error"], $obj->getErrors());
    }

    /**
     * Tests the setReturnCOde() method.
     *
     * @return void
     */
    public function testSetReturnCode() {

        $obj = new Result();

        $obj->setReturnCode(1);
        $this->assertEquals(1, $obj->getReturnCode());
    }
}
