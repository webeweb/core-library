<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Model;

use JsonSerializable;
use WBW\Library\Common\Model\System\CpuInterface;
use WBW\Library\System\Model\Cpu;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Current processor usage test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class CpuTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/CpuTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new Cpu();
        $obj->setUs(0.123456789);
        $obj->setSy(0.234567891);
        $obj->setNi(0.345678912);
        $obj->setId(0.456789123);
        $obj->setWa(0.567891234);
        $obj->setHi(0.678912345);
        $obj->setSi(0.789123456);
        $obj->setSt(0.891234567);

        $res = $obj->jsonSerialize();
        $this->assertCount(8, $res);

        $this->assertEquals($json, $res);
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
