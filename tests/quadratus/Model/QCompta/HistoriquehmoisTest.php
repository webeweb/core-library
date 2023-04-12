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
use WBW\Library\Quadratus\Model\QCompta\Historiquehmois;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historiquehmois test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class HistoriquehmoisTest extends AbstractTestCase {

    /**
     * Tests setAlpha()
     *
     * @return void
     */
    public function testSetAlpha(): void {

        $obj = new Historiquehmois();

        $obj->setAlpha("alpha");
        $this->assertEquals("alpha", $obj->getAlpha());
    }

    /**
     * Tests setAnN()
     *
     * @return void
     */
    public function testSetAnN(): void {

        $obj = new Historiquehmois();

        $obj->setAnN(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN());
    }

    /**
     * Tests setAnN1()
     *
     * @return void
     */
    public function testSetAnN1(): void {

        $obj = new Historiquehmois();

        $obj->setAnN1(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN1());
    }

    /**
     * Tests setAnN2()
     *
     * @return void
     */
    public function testSetAnN2(): void {

        $obj = new Historiquehmois();

        $obj->setAnN2(10.092018);
        $this->assertEquals(10.092018, $obj->getAnN2());
    }

    /**
     * Tests setBudget1()
     *
     * @return void
     */
    public function testSetBudget1(): void {

        $obj = new Historiquehmois();

        $obj->setBudget1(10.092018);
        $this->assertEquals(10.092018, $obj->getBudget1());
    }

    /**
     * Tests setBudget2()
     *
     * @return void
     */
    public function testSetBudget2(): void {

        $obj = new Historiquehmois();

        $obj->setBudget2(10.092018);
        $this->assertEquals(10.092018, $obj->getBudget2());
    }

    /**
     * Tests setDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new Historiquehmois();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests setFlgAnN()
     *
     * @return void
     */
    public function testSetFlgAnN(): void {

        $obj = new Historiquehmois();

        $obj->setFlgAnN(true);
        $this->assertTrue($obj->getFlgAnN());
    }

    /**
     * Tests setFlgAnN1()
     *
     * @return void
     */
    public function testSetFlgAnN1(): void {

        $obj = new Historiquehmois();

        $obj->setFlgAnN1(true);
        $this->assertTrue($obj->getFlgAnN1());
    }

    /**
     * Tests setFlgAnN2()
     *
     * @return void
     */
    public function testSetFlgAnN2(): void {

        $obj = new Historiquehmois();

        $obj->setFlgAnN2(true);
        $this->assertTrue($obj->getFlgAnN2());
    }

    /**
     * Tests setFlgBudget1()
     *
     * @return void
     */
    public function testSetFlgBudget1(): void {

        $obj = new Historiquehmois();

        $obj->setFlgBudget1(true);
        $this->assertTrue($obj->getFlgBudget1());
    }

    /**
     * Tests setFlgBudget2()
     *
     * @return void
     */
    public function testSetFlgBudget2(): void {

        $obj = new Historiquehmois();

        $obj->setFlgBudget2(true);
        $this->assertTrue($obj->getFlgBudget2());
    }

    /**
     * Tests setFmtDec()
     *
     * @return void
     */
    public function testSetFmtDec(): void {

        $obj = new Historiquehmois();

        $obj->setFmtDec(10);
        $this->assertEquals(10, $obj->getFmtDec());
    }

    /**
     * Tests setFmtInt()
     *
     * @return void
     */
    public function testSetFmtInt(): void {

        $obj = new Historiquehmois();

        $obj->setFmtInt(10);
        $this->assertEquals(10, $obj->getFmtInt());
    }

    /**
     * Tests setMemo()
     *
     * @return void
     */
    public function testSetMemo(): void {

        $obj = new Historiquehmois();

        $obj->setMemo("memo");
        $this->assertEquals("memo", $obj->getMemo());
    }

    /**
     * Tests setNoConvEuro()
     *
     * @return void
     */
    public function testSetNoConvEuro(): void {

        $obj = new Historiquehmois();

        $obj->setNoConvEuro(true);
        $this->assertTrue($obj->getNoConvEuro());
    }

    /**
     * Tests setRegle()
     *
     * @return void
     */
    public function testSetRegle(): void {

        $obj = new Historiquehmois();

        $obj->setRegle("regle");
        $this->assertEquals("regle", $obj->getRegle());
    }

    /**
     * Tests setRub()
     *
     * @return void
     */
    public function testSetRub(): void {

        $obj = new Historiquehmois();

        $obj->setRub("rub");
        $this->assertEquals("rub", $obj->getRub());
    }

    /**
     * Tests setTypeZone()
     *
     * @return void
     */
    public function testSetTypeZone(): void {

        $obj = new Historiquehmois();

        $obj->setTypeZone("typeZone");
        $this->assertEquals("typeZone", $obj->getTypeZone());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Historiquehmois();

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
