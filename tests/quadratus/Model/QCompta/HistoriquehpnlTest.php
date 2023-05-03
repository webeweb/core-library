<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\Historiquehpnl;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historiquehpnl test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class HistoriquehpnlTest extends AbstractTestCase {

    /**
     * Test setAlpha()
     *
     * @return void
     */
    public function testSetAlpha(): void {

        $obj = new Historiquehpnl();

        $obj->setAlpha("alpha");
        $this->assertEquals("alpha", $obj->getAlpha());
    }

    /**
     * Test setAnN()
     *
     * @return void
     */
    public function testSetAnN(): void {

        $obj = new Historiquehpnl();

        $obj->setAnN(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN());
    }

    /**
     * Test setAnN1()
     *
     * @return void
     */
    public function testSetAnN1(): void {

        $obj = new Historiquehpnl();

        $obj->setAnN1(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN1());
    }

    /**
     * Test setAnN2()
     *
     * @return void
     */
    public function testSetAnN2(): void {

        $obj = new Historiquehpnl();

        $obj->setAnN2(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN2());
    }

    /**
     * Test setBudget1()
     *
     * @return void
     */
    public function testSetBudget1(): void {

        $obj = new Historiquehpnl();

        $obj->setBudget1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudget1());
    }

    /**
     * Test setBudget2()
     *
     * @return void
     */
    public function testSetBudget2(): void {

        $obj = new Historiquehpnl();

        $obj->setBudget2(10.092018);
        $this->assertEquals(10.092018, $obj->getBudget2());
    }

    /**
     * Test setDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new Historiquehpnl();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Test setFlgAnN()
     *
     * @return void
     */
    public function testSetFlgAnN(): void {

        $obj = new Historiquehpnl();

        $obj->setFlgAnN(true);
        $this->assertTrue($obj->getFlgAnN());
    }

    /**
     * Test setFlgAnN1()
     *
     * @return void
     */
    public function testSetFlgAnN1(): void {

        $obj = new Historiquehpnl();

        $obj->setFlgAnN1(true);
        $this->assertTrue($obj->getFlgAnN1());
    }

    /**
     * Test setFlgAnN2()
     *
     * @return void
     */
    public function testSetFlgAnN2(): void {

        $obj = new Historiquehpnl();

        $obj->setFlgAnN2(true);
        $this->assertTrue($obj->getFlgAnN2());
    }

    /**
     * Test setFlgBudget1()
     *
     * @return void
     */
    public function testSetFlgBudget1(): void {

        $obj = new Historiquehpnl();

        $obj->setFlgBudget1(true);
        $this->assertTrue($obj->getFlgBudget1());
    }

    /**
     * Test setFlgBudget2()
     *
     * @return void
     */
    public function testSetFlgBudget2(): void {

        $obj = new Historiquehpnl();

        $obj->setFlgBudget2(true);
        $this->assertTrue($obj->getFlgBudget2());
    }

    /**
     * Test setFmtDec()
     *
     * @return void
     */
    public function testSetFmtDec(): void {

        $obj = new Historiquehpnl();

        $obj->setFmtDec(10);
        $this->assertEquals(10, $obj->getFmtDec());
    }

    /**
     * Test setFmtInt()
     *
     * @return void
     */
    public function testSetFmtInt(): void {

        $obj = new Historiquehpnl();

        $obj->setFmtInt(10);
        $this->assertEquals(10, $obj->getFmtInt());
    }

    /**
     * Test setMemo()
     *
     * @return void
     */
    public function testSetMemo(): void {

        $obj = new Historiquehpnl();

        $obj->setMemo("memo");
        $this->assertEquals("memo", $obj->getMemo());
    }

    /**
     * Test setNoConvEuro()
     *
     * @return void
     */
    public function testSetNoConvEuro(): void {

        $obj = new Historiquehpnl();

        $obj->setNoConvEuro(true);
        $this->assertTrue($obj->getNoConvEuro());
    }

    /**
     * Test setRegle()
     *
     * @return void
     */
    public function testSetRegle(): void {

        $obj = new Historiquehpnl();

        $obj->setRegle("regle");
        $this->assertEquals("regle", $obj->getRegle());
    }

    /**
     * Test setRub()
     *
     * @return void
     */
    public function testSetRub(): void {

        $obj = new Historiquehpnl();

        $obj->setRub("rub");
        $this->assertEquals("rub", $obj->getRub());
    }

    /**
     * Test setTypeZone()
     *
     * @return void
     */
    public function testSetTypeZone(): void {

        $obj = new Historiquehpnl();

        $obj->setTypeZone("typeZone");
        $this->assertEquals("typeZone", $obj->getTypeZone());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Historiquehpnl();

        $this->assertNull($obj->getAlpha());
        $this->assertNull($obj->getAnN());
        $this->assertNull($obj->getAnN1());
        $this->assertNull($obj->getAnN2());
        $this->assertNull($obj->getBudget1());
        $this->assertNull($obj->getBudget2());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getFlgAnN());
        $this->assertNull($obj->getFlgAnN1());
        $this->assertNull($obj->getFlgAnN2());
        $this->assertNull($obj->getFlgBudget1());
        $this->assertNull($obj->getFlgBudget2());
        $this->assertNull($obj->getFmtDec());
        $this->assertNull($obj->getFmtInt());
        $this->assertNull($obj->getMemo());
        $this->assertNull($obj->getNoConvEuro());
        $this->assertNull($obj->getRegle());
        $this->assertNull($obj->getRub());
        $this->assertNull($obj->getTypeZone());
    }
}
