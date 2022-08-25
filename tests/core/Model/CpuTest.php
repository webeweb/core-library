<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model;

use JsonSerializable;
use WBW\Library\Core\Model\Cpu;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * CPU test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model
 */
class CpuTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
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
     * Tests setHi()
     *
     * @return void
     */
    public function testSetHi(): void {

        $obj = new Cpu();

        $obj->setHi(0.123456789);
        $this->assertEquals(0.123456789, $obj->getHi());
    }

    /**
     * Tests setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new Cpu();

        $obj->setId(0.123456789);
        $this->assertEquals(0.123456789, $obj->getId());
    }

    /**
     * Tests setNi()
     *
     * @return void
     */
    public function testSetNi(): void {

        $obj = new Cpu();

        $obj->setNi(0.123456789);
        $this->assertEquals(0.123456789, $obj->getNi());
    }

    /**
     * Tests setSi()
     *
     * @return void
     */
    public function testSetSi(): void {

        $obj = new Cpu();

        $obj->setSi(0.123456789);
        $this->assertEquals(0.123456789, $obj->getSi());
    }

    /**
     * Tests setSt()
     *
     * @return void
     */
    public function testSetSt(): void {

        $obj = new Cpu();

        $obj->setSt(0.123456789);
        $this->assertEquals(0.123456789, $obj->getSt());
    }

    /**
     * Tests setSy()
     *
     * @return void
     */
    public function testSetSy(): void {

        $obj = new Cpu();

        $obj->setSy(0.123456789);
        $this->assertEquals(0.123456789, $obj->getSy());
    }

    /**
     * Tests setUs()
     *
     * @return void
     */
    public function testSetUs(): void {

        $obj = new Cpu();

        $obj->setUs(0.123456789);
        $this->assertEquals(0.123456789, $obj->getUs());
    }

    /**
     * Tests setWa()
     *
     * @return void
     */
    public function testSetWa(): void {

        $obj = new Cpu();

        $obj->setWa(0.123456789);
        $this->assertEquals(0.123456789, $obj->getWa());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Cpu();

        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getUs());
        $this->assertNull($obj->getSy());
        $this->assertNull($obj->getNi());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getWa());
        $this->assertNull($obj->getHi());
        $this->assertNull($obj->getSi());
        $this->assertNull($obj->getSt());
    }
}
