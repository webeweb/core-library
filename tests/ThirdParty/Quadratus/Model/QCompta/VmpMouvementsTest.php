<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\VmpMouvements;

/**
 * Vmp mouvements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class VmpMouvementsTest extends AbstractTestCase {

    /**
     * Tests the setCodeVmp() method.
     *
     * @return void
     */
    public function testSetCodeVmp() {

        $obj = new VmpMouvements();

        $obj->setCodeVmp("codeVmp");
        $this->assertEquals("codeVmp", $obj->getCodeVmp());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new VmpMouvements();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setFrancsEuros() method.
     *
     * @return void
     */
    public function testSetFrancsEuros() {

        $obj = new VmpMouvements();

        $obj->setFrancsEuros(10);
        $this->assertEquals(10, $obj->getFrancsEuros());
    }

    /**
     * Tests the setGratuit() method.
     *
     * @return void
     */
    public function testSetGratuit() {

        $obj = new VmpMouvements();

        $obj->setGratuit(true);
        $this->assertEquals(true, $obj->getGratuit());
    }

    /**
     * Tests the setMontantComm() method.
     *
     * @return void
     */
    public function testSetMontantComm() {

        $obj = new VmpMouvements();

        $obj->setMontantComm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantComm());
    }

    /**
     * Tests the setMontantCoupon() method.
     *
     * @return void
     */
    public function testSetMontantCoupon() {

        $obj = new VmpMouvements();

        $obj->setMontantCoupon(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCoupon());
    }

    /**
     * Tests the setMontantFrais() method.
     *
     * @return void
     */
    public function testSetMontantFrais() {

        $obj = new VmpMouvements();

        $obj->setMontantFrais(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantFrais());
    }

    /**
     * Tests the setNoLotEcr() method.
     *
     * @return void
     */
    public function testSetNoLotEcr() {

        $obj = new VmpMouvements();

        $obj->setNoLotEcr(10);
        $this->assertEquals(10, $obj->getNoLotEcr());
    }

    /**
     * Tests the setNoLotTrace() method.
     *
     * @return void
     */
    public function testSetNoLotTrace() {

        $obj = new VmpMouvements();

        $obj->setNoLotTrace("noLotTrace");
        $this->assertEquals("noLotTrace", $obj->getNoLotTrace());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new VmpMouvements();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumUniqEcr() method.
     *
     * @return void
     */
    public function testSetNumUniqEcr() {

        $obj = new VmpMouvements();

        $obj->setNumUniqEcr(10);
        $this->assertEquals(10, $obj->getNumUniqEcr());
    }

    /**
     * Tests the setPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetPrixUnitaire() {

        $obj = new VmpMouvements();

        $obj->setPrixUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitaire());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new VmpMouvements();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setSoldeQuantite() method.
     *
     * @return void
     */
    public function testSetSoldeQuantite() {

        $obj = new VmpMouvements();

        $obj->setSoldeQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeQuantite());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new VmpMouvements();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
