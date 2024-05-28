<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\System;

use JsonSerializable;
use WBW\Library\Common\Model\System\Cpu;
use WBW\Library\Common\Model\System\CpuInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Current processor usage test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class CpuTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Cpu();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setHi()
     *
     * @return void
     */
    public function testSetHi(): void {

        $obj = new Cpu();

        $obj->setHi(0.123456789);
        $this->assertEquals(0.123456789, $obj->getHi());
    }

    /**
     * Test setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new Cpu();

        $obj->setId(0.123456789);
        $this->assertEquals(0.123456789, $obj->getId());
    }

    /**
     * Test setNi()
     *
     * @return void
     */
    public function testSetNi(): void {

        $obj = new Cpu();

        $obj->setNi(0.123456789);
        $this->assertEquals(0.123456789, $obj->getNi());
    }

    /**
     * Test setSi()
     *
     * @return void
     */
    public function testSetSi(): void {

        $obj = new Cpu();

        $obj->setSi(0.123456789);
        $this->assertEquals(0.123456789, $obj->getSi());
    }

    /**
     * Test setSt()
     *
     * @return void
     */
    public function testSetSt(): void {

        $obj = new Cpu();

        $obj->setSt(0.123456789);
        $this->assertEquals(0.123456789, $obj->getSt());
    }

    /**
     * Test setSy()
     *
     * @return void
     */
    public function testSetSy(): void {

        $obj = new Cpu();

        $obj->setSy(0.123456789);
        $this->assertEquals(0.123456789, $obj->getSy());
    }

    /**
     * Test setUs()
     *
     * @return void
     */
    public function testSetUs(): void {

        $obj = new Cpu();

        $obj->setUs(0.123456789);
        $this->assertEquals(0.123456789, $obj->getUs());
    }

    /**
     * Test setWa()
     *
     * @return void
     */
    public function testSetWa(): void {

        $obj = new Cpu();

        $obj->setWa(0.123456789);
        $this->assertEquals(0.123456789, $obj->getWa());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Cpu();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(CpuInterface::class, $obj);
    }
}
