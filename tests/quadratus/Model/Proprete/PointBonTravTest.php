<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\PointBonTrav;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Point bon trav test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointBonTravTest extends AbstractTestCase {

    /**
     * Test setAvenantSigne()
     *
     * @return void
     */
    public function testSetAvenantSigne(): void {

        $obj = new PointBonTrav();

        $obj->setAvenantSigne(true);
        $this->assertTrue($obj->getAvenantSigne());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PointBonTrav();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setCodeEquipe()
     *
     * @return void
     */
    public function testSetCodeEquipe(): void {

        $obj = new PointBonTrav();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Test setCodeTacheType()
     *
     * @return void
     */
    public function testSetCodeTacheType(): void {

        $obj = new PointBonTrav();

        $obj->setCodeTacheType("codeTacheType");
        $this->assertEquals("codeTacheType", $obj->getCodeTacheType());
    }

    /**
     * Test setDatePassage()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePassage(): void {

        // Set a Date/time mock.
        $datePassage = new DateTime("2018-09-10");

        $obj = new PointBonTrav();

        $obj->setDatePassage($datePassage);
        $this->assertSame($datePassage, $obj->getDatePassage());
    }

    /**
     * Test setDateRefBt()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRefBt(): void {

        // Set a Date/time mock.
        $dateRefBt = new DateTime("2018-09-10");

        $obj = new PointBonTrav();

        $obj->setDateRefBt($dateRefBt);
        $this->assertSame($dateRefBt, $obj->getDateRefBt());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new PointBonTrav();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Test setFromGenBt()
     *
     * @return void
     */
    public function testSetFromGenBt(): void {

        $obj = new PointBonTrav();

        $obj->setFromGenBt(true);
        $this->assertTrue($obj->getFromGenBt());
    }

    /**
     * Test setHeureDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureDeb(): void {

        // Set a Date/time mock.
        $heureDeb = new DateTime("2018-09-10");

        $obj = new PointBonTrav();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Test setHeureDebMob()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureDebMob(): void {

        // Set a Date/time mock.
        $heureDebMob = new DateTime("2018-09-10");

        $obj = new PointBonTrav();

        $obj->setHeureDebMob($heureDebMob);
        $this->assertSame($heureDebMob, $obj->getHeureDebMob());
    }

    /**
     * Test setHeureFinMob()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureFinMob(): void {

        // Set a Date/time mock.
        $heureFinMob = new DateTime("2018-09-10");

        $obj = new PointBonTrav();

        $obj->setHeureFinMob($heureFinMob);
        $this->assertSame($heureFinMob, $obj->getHeureFinMob());
    }

    /**
     * Test setHeuresJour()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeuresJour(): void {

        // Set a Date/time mock.
        $heuresJour = new DateTime("2018-09-10");

        $obj = new PointBonTrav();

        $obj->setHeuresJour($heuresJour);
        $this->assertSame($heuresJour, $obj->getHeuresJour());
    }

    /**
     * Test setHeuresNuit()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeuresNuit(): void {

        // Set a Date/time mock.
        $heuresNuit = new DateTime("2018-09-10");

        $obj = new PointBonTrav();

        $obj->setHeuresNuit($heuresNuit);
        $this->assertSame($heuresNuit, $obj->getHeuresNuit());
    }

    /**
     * Test setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new PointBonTrav();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Test setNomPrenom()
     *
     * @return void
     */
    public function testSetNomPrenom(): void {

        $obj = new PointBonTrav();

        $obj->setNomPrenom("nomPrenom");
        $this->assertEquals("nomPrenom", $obj->getNomPrenom());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PointBonTrav();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setNumChrono()
     *
     * @return void
     */
    public function testSetNumChrono(): void {

        $obj = new PointBonTrav();

        $obj->setNumChrono(10);
        $this->assertEquals(10, $obj->getNumChrono());
    }

    /**
     * Test setNumeroAvenant()
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new PointBonTrav();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Test setPaniers()
     *
     * @return void
     */
    public function testSetPaniers(): void {

        $obj = new PointBonTrav();

        $obj->setPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getPaniers());
    }

    /**
     * Test setPrime1()
     *
     * @return void
     */
    public function testSetPrime1(): void {

        $obj = new PointBonTrav();

        $obj->setPrime1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime1());
    }

    /**
     * Test setPrime2()
     *
     * @return void
     */
    public function testSetPrime2(): void {

        $obj = new PointBonTrav();

        $obj->setPrime2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime2());
    }

    /**
     * Test setPrime3()
     *
     * @return void
     */
    public function testSetPrime3(): void {

        $obj = new PointBonTrav();

        $obj->setPrime3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime3());
    }

    /**
     * Test setQualification()
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new PointBonTrav();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Test setTransfertPaie()
     *
     * @return void
     */
    public function testSetTransfertPaie(): void {

        $obj = new PointBonTrav();

        $obj->setTransfertPaie("transfertPaie");
        $this->assertEquals("transfertPaie", $obj->getTransfertPaie());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new PointBonTrav();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test setValideMob()
     *
     * @return void
     */
    public function testSetValideMob(): void {

        $obj = new PointBonTrav();

        $obj->setValideMob(true);
        $this->assertTrue($obj->getValideMob());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointBonTrav();

        $this->assertNull($obj->getAvenantSigne());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getDatePassage());
        $this->assertNull($obj->getDateRefBt());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFromGenBt());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getHeureDebMob());
        $this->assertNull($obj->getHeureFinMob());
        $this->assertNull($obj->getHeuresJour());
        $this->assertNull($obj->getHeuresNuit());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNomPrenom());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumChrono());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getPaniers());
        $this->assertNull($obj->getPrime1());
        $this->assertNull($obj->getPrime2());
        $this->assertNull($obj->getPrime3());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getTransfertPaie());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getValideMob());
    }
}
