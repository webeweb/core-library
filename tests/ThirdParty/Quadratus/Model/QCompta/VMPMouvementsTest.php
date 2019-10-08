<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\VMPMouvements;

/**
 * V m p mouvements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class VMPMouvementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VMPMouvements();

        $this->assertNull($obj->getCodeVMP());
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

    /**
     * Tests the setCodeVMP() method.
     *
     * @return void
     */
    public function testSetCodeVMP() {

        $obj = new VMPMouvements();

        $obj->setCodeVMP("codeVMP");
        $this->assertEquals("codeVMP", $obj->getCodeVMP());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        $obj = new VMPMouvements();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setFrancsEuros() method.
     *
     * @return void
     */
    public function testSetFrancsEuros() {

        $obj = new VMPMouvements();

        $obj->setFrancsEuros(10);
        $this->assertEquals(10, $obj->getFrancsEuros());
    }

    /**
     * Tests the setGratuit() method.
     *
     * @return void
     */
    public function testSetGratuit() {

        $obj = new VMPMouvements();

        $obj->setGratuit(true);
        $this->assertEquals(true, $obj->getGratuit());
    }

    /**
     * Tests the setMontantComm() method.
     *
     * @return void
     */
    public function testSetMontantComm() {

        $obj = new VMPMouvements();

        $obj->setMontantComm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantComm());
    }

    /**
     * Tests the setMontantCoupon() method.
     *
     * @return void
     */
    public function testSetMontantCoupon() {

        $obj = new VMPMouvements();

        $obj->setMontantCoupon(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCoupon());
    }

    /**
     * Tests the setMontantFrais() method.
     *
     * @return void
     */
    public function testSetMontantFrais() {

        $obj = new VMPMouvements();

        $obj->setMontantFrais(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantFrais());
    }

    /**
     * Tests the setNoLotEcr() method.
     *
     * @return void
     */
    public function testSetNoLotEcr() {

        $obj = new VMPMouvements();

        $obj->setNoLotEcr(10);
        $this->assertEquals(10, $obj->getNoLotEcr());
    }

    /**
     * Tests the setNoLotTrace() method.
     *
     * @return void
     */
    public function testSetNoLotTrace() {

        $obj = new VMPMouvements();

        $obj->setNoLotTrace("noLotTrace");
        $this->assertEquals("noLotTrace", $obj->getNoLotTrace());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new VMPMouvements();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumUniqEcr() method.
     *
     * @return void
     */
    public function testSetNumUniqEcr() {

        $obj = new VMPMouvements();

        $obj->setNumUniqEcr(10);
        $this->assertEquals(10, $obj->getNumUniqEcr());
    }

    /**
     * Tests the setPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetPrixUnitaire() {

        $obj = new VMPMouvements();

        $obj->setPrixUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitaire());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new VMPMouvements();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setSoldeQuantite() method.
     *
     * @return void
     */
    public function testSetSoldeQuantite() {

        $obj = new VMPMouvements();

        $obj->setSoldeQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeQuantite());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new VMPMouvements();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }
}
