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
use WBW\Library\Quadratus\Model\QCompta\VmpMouvements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Vmp mouvements test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class VmpMouvementsTest extends AbstractTestCase {

    /**
     * Test setCodeVmp()
     *
     * @return void
     */
    public function testSetCodeVmp(): void {

        $obj = new VmpMouvements();

        $obj->setCodeVmp("codeVmp");
        $this->assertEquals("codeVmp", $obj->getCodeVmp());
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

        $obj = new VmpMouvements();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Test setFrancsEuros()
     *
     * @return void
     */
    public function testSetFrancsEuros(): void {

        $obj = new VmpMouvements();

        $obj->setFrancsEuros(10);
        $this->assertEquals(10, $obj->getFrancsEuros());
    }

    /**
     * Test setGratuit()
     *
     * @return void
     */
    public function testSetGratuit(): void {

        $obj = new VmpMouvements();

        $obj->setGratuit(true);
        $this->assertTrue($obj->getGratuit());
    }

    /**
     * Test setMontantComm()
     *
     * @return void
     */
    public function testSetMontantComm(): void {

        $obj = new VmpMouvements();

        $obj->setMontantComm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantComm());
    }

    /**
     * Test setMontantCoupon()
     *
     * @return void
     */
    public function testSetMontantCoupon(): void {

        $obj = new VmpMouvements();

        $obj->setMontantCoupon(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCoupon());
    }

    /**
     * Test setMontantFrais()
     *
     * @return void
     */
    public function testSetMontantFrais(): void {

        $obj = new VmpMouvements();

        $obj->setMontantFrais(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantFrais());
    }

    /**
     * Test setNoLotEcr()
     *
     * @return void
     */
    public function testSetNoLotEcr(): void {

        $obj = new VmpMouvements();

        $obj->setNoLotEcr(10);
        $this->assertEquals(10, $obj->getNoLotEcr());
    }

    /**
     * Test setNoLotTrace()
     *
     * @return void
     */
    public function testSetNoLotTrace(): void {

        $obj = new VmpMouvements();

        $obj->setNoLotTrace("noLotTrace");
        $this->assertEquals("noLotTrace", $obj->getNoLotTrace());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new VmpMouvements();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumUniqEcr()
     *
     * @return void
     */
    public function testSetNumUniqEcr(): void {

        $obj = new VmpMouvements();

        $obj->setNumUniqEcr(10);
        $this->assertEquals(10, $obj->getNumUniqEcr());
    }

    /**
     * Test setPrixUnitaire()
     *
     * @return void
     */
    public function testSetPrixUnitaire(): void {

        $obj = new VmpMouvements();

        $obj->setPrixUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitaire());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new VmpMouvements();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setSoldeQuantite()
     *
     * @return void
     */
    public function testSetSoldeQuantite(): void {

        $obj = new VmpMouvements();

        $obj->setSoldeQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeQuantite());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new VmpMouvements();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new VmpMouvements();

        $this->assertNull($obj->getCodeVmp());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getFrancsEuros());
        $this->assertNull($obj->getGratuit());
        $this->assertNull($obj->getMontantComm());
        $this->assertNull($obj->getMontantCoupon());
        $this->assertNull($obj->getMontantFrais());
        $this->assertNull($obj->getNoLotEcr());
        $this->assertNull($obj->getNoLotTrace());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniqEcr());
        $this->assertNull($obj->getPrixUnitaire());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getSoldeQuantite());
        $this->assertNull($obj->getType());
    }
}
