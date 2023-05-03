<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\AnnexeTer;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Annexe ter test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AnnexeTerTest extends AbstractTestCase {

    /**
     * Test setBoolean1()
     *
     * @return void
     */
    public function testSetBoolean1(): void {

        $obj = new AnnexeTer();

        $obj->setBoolean1(true);
        $this->assertTrue($obj->getBoolean1());
    }

    /**
     * Test setBoolean2()
     *
     * @return void
     */
    public function testSetBoolean2(): void {

        $obj = new AnnexeTer();

        $obj->setBoolean2(true);
        $this->assertTrue($obj->getBoolean2());
    }

    /**
     * Test setBoolean3()
     *
     * @return void
     */
    public function testSetBoolean3(): void {

        $obj = new AnnexeTer();

        $obj->setBoolean3(true);
        $this->assertTrue($obj->getBoolean3());
    }

    /**
     * Test setBoolean4()
     *
     * @return void
     */
    public function testSetBoolean4(): void {

        $obj = new AnnexeTer();

        $obj->setBoolean4(true);
        $this->assertTrue($obj->getBoolean4());
    }

    /**
     * Test setBoolean5()
     *
     * @return void
     */
    public function testSetBoolean5(): void {

        $obj = new AnnexeTer();

        $obj->setBoolean5(true);
        $this->assertTrue($obj->getBoolean5());
    }

    /**
     * Test setBoolean6()
     *
     * @return void
     */
    public function testSetBoolean6(): void {

        $obj = new AnnexeTer();

        $obj->setBoolean6(true);
        $this->assertTrue($obj->getBoolean6());
    }

    /**
     * Test setBoolean7()
     *
     * @return void
     */
    public function testSetBoolean7(): void {

        $obj = new AnnexeTer();

        $obj->setBoolean7(true);
        $this->assertTrue($obj->getBoolean7());
    }

    /**
     * Test setCode1()
     *
     * @return void
     */
    public function testSetCode1(): void {

        $obj = new AnnexeTer();

        $obj->setCode1("code1");
        $this->assertEquals("code1", $obj->getCode1());
    }

    /**
     * Test setCode2()
     *
     * @return void
     */
    public function testSetCode2(): void {

        $obj = new AnnexeTer();

        $obj->setCode2("code2");
        $this->assertEquals("code2", $obj->getCode2());
    }

    /**
     * Test setDate1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate1(): void {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Test setDate2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate2(): void {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }

    /**
     * Test setDate3()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate3(): void {

        // Set a Date/time mock.
        $date3 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate3($date3);
        $this->assertSame($date3, $obj->getDate3());
    }

    /**
     * Test setDate4()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate4(): void {

        // Set a Date/time mock.
        $date4 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate4($date4);
        $this->assertSame($date4, $obj->getDate4());
    }

    /**
     * Test setDate5()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate5(): void {

        // Set a Date/time mock.
        $date5 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate5($date5);
        $this->assertSame($date5, $obj->getDate5());
    }

    /**
     * Test setDate6()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate6(): void {

        // Set a Date/time mock.
        $date6 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate6($date6);
        $this->assertSame($date6, $obj->getDate6());
    }

    /**
     * Test setDate7()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate7(): void {

        // Set a Date/time mock.
        $date7 = new DateTime("2018-09-10");

        $obj = new AnnexeTer();

        $obj->setDate7($date7);
        $this->assertSame($date7, $obj->getDate7());
    }

    /**
     * Test setDouble1()
     *
     * @return void
     */
    public function testSetDouble1(): void {

        $obj = new AnnexeTer();

        $obj->setDouble1(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble1());
    }

    /**
     * Test setDouble2()
     *
     * @return void
     */
    public function testSetDouble2(): void {

        $obj = new AnnexeTer();

        $obj->setDouble2(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble2());
    }

    /**
     * Test setDouble3()
     *
     * @return void
     */
    public function testSetDouble3(): void {

        $obj = new AnnexeTer();

        $obj->setDouble3(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble3());
    }

    /**
     * Test setDouble4()
     *
     * @return void
     */
    public function testSetDouble4(): void {

        $obj = new AnnexeTer();

        $obj->setDouble4(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble4());
    }

    /**
     * Test setDouble5()
     *
     * @return void
     */
    public function testSetDouble5(): void {

        $obj = new AnnexeTer();

        $obj->setDouble5(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble5());
    }

    /**
     * Test setDouble6()
     *
     * @return void
     */
    public function testSetDouble6(): void {

        $obj = new AnnexeTer();

        $obj->setDouble6(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble6());
    }

    /**
     * Test setDouble7()
     *
     * @return void
     */
    public function testSetDouble7(): void {

        $obj = new AnnexeTer();

        $obj->setDouble7(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble7());
    }

    /**
     * Test setLong1()
     *
     * @return void
     */
    public function testSetLong1(): void {

        $obj = new AnnexeTer();

        $obj->setLong1(10);
        $this->assertEquals(10, $obj->getLong1());
    }

    /**
     * Test setLong2()
     *
     * @return void
     */
    public function testSetLong2(): void {

        $obj = new AnnexeTer();

        $obj->setLong2(10);
        $this->assertEquals(10, $obj->getLong2());
    }

    /**
     * Test setLong3()
     *
     * @return void
     */
    public function testSetLong3(): void {

        $obj = new AnnexeTer();

        $obj->setLong3(10);
        $this->assertEquals(10, $obj->getLong3());
    }

    /**
     * Test setLong4()
     *
     * @return void
     */
    public function testSetLong4(): void {

        $obj = new AnnexeTer();

        $obj->setLong4(10);
        $this->assertEquals(10, $obj->getLong4());
    }

    /**
     * Test setLong5()
     *
     * @return void
     */
    public function testSetLong5(): void {

        $obj = new AnnexeTer();

        $obj->setLong5(10);
        $this->assertEquals(10, $obj->getLong5());
    }

    /**
     * Test setLong6()
     *
     * @return void
     */
    public function testSetLong6(): void {

        $obj = new AnnexeTer();

        $obj->setLong6(10);
        $this->assertEquals(10, $obj->getLong6());
    }

    /**
     * Test setLong7()
     *
     * @return void
     */
    public function testSetLong7(): void {

        $obj = new AnnexeTer();

        $obj->setLong7(10);
        $this->assertEquals(10, $obj->getLong7());
    }

    /**
     * Test setMemo1()
     *
     * @return void
     */
    public function testSetMemo1(): void {

        $obj = new AnnexeTer();

        $obj->setMemo1("memo1");
        $this->assertEquals("memo1", $obj->getMemo1());
    }

    /**
     * Test setMemo2()
     *
     * @return void
     */
    public function testSetMemo2(): void {

        $obj = new AnnexeTer();

        $obj->setMemo2("memo2");
        $this->assertEquals("memo2", $obj->getMemo2());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new AnnexeTer();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Test setText1()
     *
     * @return void
     */
    public function testSetText1(): void {

        $obj = new AnnexeTer();

        $obj->setText1("text1");
        $this->assertEquals("text1", $obj->getText1());
    }

    /**
     * Test setText2()
     *
     * @return void
     */
    public function testSetText2(): void {

        $obj = new AnnexeTer();

        $obj->setText2("text2");
        $this->assertEquals("text2", $obj->getText2());
    }

    /**
     * Test setText3()
     *
     * @return void
     */
    public function testSetText3(): void {

        $obj = new AnnexeTer();

        $obj->setText3("text3");
        $this->assertEquals("text3", $obj->getText3());
    }

    /**
     * Test setText4()
     *
     * @return void
     */
    public function testSetText4(): void {

        $obj = new AnnexeTer();

        $obj->setText4("text4");
        $this->assertEquals("text4", $obj->getText4());
    }

    /**
     * Test setText5()
     *
     * @return void
     */
    public function testSetText5(): void {

        $obj = new AnnexeTer();

        $obj->setText5("text5");
        $this->assertEquals("text5", $obj->getText5());
    }

    /**
     * Test setText6()
     *
     * @return void
     */
    public function testSetText6(): void {

        $obj = new AnnexeTer();

        $obj->setText6("text6");
        $this->assertEquals("text6", $obj->getText6());
    }

    /**
     * Test setText7()
     *
     * @return void
     */
    public function testSetText7(): void {

        $obj = new AnnexeTer();

        $obj->setText7("text7");
        $this->assertEquals("text7", $obj->getText7());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AnnexeTer();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AnnexeTer();

        $this->assertNull($obj->getBoolean1());
        $this->assertNull($obj->getBoolean2());
        $this->assertNull($obj->getBoolean3());
        $this->assertNull($obj->getBoolean4());
        $this->assertNull($obj->getBoolean5());
        $this->assertNull($obj->getBoolean6());
        $this->assertNull($obj->getBoolean7());
        $this->assertNull($obj->getCode1());
        $this->assertNull($obj->getCode2());
        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDate2());
        $this->assertNull($obj->getDate3());
        $this->assertNull($obj->getDate4());
        $this->assertNull($obj->getDate5());
        $this->assertNull($obj->getDate6());
        $this->assertNull($obj->getDate7());
        $this->assertNull($obj->getDouble1());
        $this->assertNull($obj->getDouble2());
        $this->assertNull($obj->getDouble3());
        $this->assertNull($obj->getDouble4());
        $this->assertNull($obj->getDouble5());
        $this->assertNull($obj->getDouble6());
        $this->assertNull($obj->getDouble7());
        $this->assertNull($obj->getLong1());
        $this->assertNull($obj->getLong2());
        $this->assertNull($obj->getLong3());
        $this->assertNull($obj->getLong4());
        $this->assertNull($obj->getLong5());
        $this->assertNull($obj->getLong6());
        $this->assertNull($obj->getLong7());
        $this->assertNull($obj->getMemo1());
        $this->assertNull($obj->getMemo2());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getText1());
        $this->assertNull($obj->getText2());
        $this->assertNull($obj->getText3());
        $this->assertNull($obj->getText4());
        $this->assertNull($obj->getText5());
        $this->assertNull($obj->getText6());
        $this->assertNull($obj->getText7());
        $this->assertNull($obj->getType());
    }
}
