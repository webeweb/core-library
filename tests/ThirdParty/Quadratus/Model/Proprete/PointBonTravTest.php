<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointBonTrav;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Point bon trav model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointBonTravTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointBonTrav();

        $this->assertNull($obj->getAvenantSigne());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getDatePassage());
        $this->assertNull($obj->getDateRefBT());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFromGenBT());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getHeureDebMob());
        $this->assertNull($obj->getHeureFinMob());
        $this->assertNull($obj->getHeuresJour());
        $this->assertNull($obj->getHeuresNuit());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNomPrenom());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumChrono());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getPaniers());
        $this->assertNull($obj->getPrime1());
        $this->assertNull($obj->getPrime2());
        $this->assertNull($obj->getPrime3());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getTransfertPaie());
        $this->assertNull($obj->getUniqID());
        $this->assertNull($obj->getValideMob());
    }

    /**
     * Tests the setAvenantSigne() method.
     *
     * @return void
     */
    public function testSetAvenantSigne() {

        $obj = new PointBonTrav();

        $obj->setAvenantSigne(true);
        $this->assertEquals(true, $obj->getAvenantSigne());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new PointBonTrav();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeEquipe() method.
     *
     * @return void
     */
    public function testSetCodeEquipe() {

        $obj = new PointBonTrav();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Tests the setCodeTacheType() method.
     *
     * @return void
     */
    public function testSetCodeTacheType() {

        $obj = new PointBonTrav();

        $obj->setCodeTacheType("codeTacheType");
        $this->assertEquals("codeTacheType", $obj->getCodeTacheType());
    }

    /**
     * Tests the setDatePassage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePassage() {

        $obj = new PointBonTrav();

        $obj->setDatePassage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePassage());
    }

    /**
     * Tests the setDateRefBT() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRefBT() {

        $obj = new PointBonTrav();

        $obj->setDateRefBT(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRefBT());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new PointBonTrav();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setFromGenBT() method.
     *
     * @return void
     */
    public function testSetFromGenBT() {

        $obj = new PointBonTrav();

        $obj->setFromGenBT(true);
        $this->assertEquals(true, $obj->getFromGenBT());
    }

    /**
     * Tests the setHeureDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDeb() {

        $obj = new PointBonTrav();

        $obj->setHeureDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDeb());
    }

    /**
     * Tests the setHeureDebMob() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDebMob() {

        $obj = new PointBonTrav();

        $obj->setHeureDebMob(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDebMob());
    }

    /**
     * Tests the setHeureFinMob() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFinMob() {

        $obj = new PointBonTrav();

        $obj->setHeureFinMob(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureFinMob());
    }

    /**
     * Tests the setHeuresJour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeuresJour() {

        $obj = new PointBonTrav();

        $obj->setHeuresJour(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeuresJour());
    }

    /**
     * Tests the setHeuresNuit() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeuresNuit() {

        $obj = new PointBonTrav();

        $obj->setHeuresNuit(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeuresNuit());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new PointBonTrav();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNomPrenom() method.
     *
     * @return void
     */
    public function testSetNomPrenom() {

        $obj = new PointBonTrav();

        $obj->setNomPrenom("nomPrenom");
        $this->assertEquals("nomPrenom", $obj->getNomPrenom());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new PointBonTrav();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumChrono() method.
     *
     * @return void
     */
    public function testSetNumChrono() {

        $obj = new PointBonTrav();

        $obj->setNumChrono(10);
        $this->assertEquals(10, $obj->getNumChrono());
    }

    /**
     * Tests the setNumeroAvenant() method.
     *
     * @return void
     */
    public function testSetNumeroAvenant() {

        $obj = new PointBonTrav();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests the setPaniers() method.
     *
     * @return void
     */
    public function testSetPaniers() {

        $obj = new PointBonTrav();

        $obj->setPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getPaniers());
    }

    /**
     * Tests the setPrime1() method.
     *
     * @return void
     */
    public function testSetPrime1() {

        $obj = new PointBonTrav();

        $obj->setPrime1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime1());
    }

    /**
     * Tests the setPrime2() method.
     *
     * @return void
     */
    public function testSetPrime2() {

        $obj = new PointBonTrav();

        $obj->setPrime2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime2());
    }

    /**
     * Tests the setPrime3() method.
     *
     * @return void
     */
    public function testSetPrime3() {

        $obj = new PointBonTrav();

        $obj->setPrime3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime3());
    }

    /**
     * Tests the setQualification() method.
     *
     * @return void
     */
    public function testSetQualification() {

        $obj = new PointBonTrav();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests the setTransfertPaie() method.
     *
     * @return void
     */
    public function testSetTransfertPaie() {

        $obj = new PointBonTrav();

        $obj->setTransfertPaie("transfertPaie");
        $this->assertEquals("transfertPaie", $obj->getTransfertPaie());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new PointBonTrav();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

    /**
     * Tests the setValideMob() method.
     *
     * @return void
     */
    public function testSetValideMob() {

        $obj = new PointBonTrav();

        $obj->setValideMob(true);
        $this->assertEquals(true, $obj->getValideMob());
    }
}
