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
use Exception;
use WBW\Library\Quadratus\Model\Proprete\AffectationsCharge;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affectations charge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AffectationsChargeTest extends AbstractTestCase {

    /**
     * Tests setAjoutCharge()
     *
     * @return void
     */
    public function testSetAjoutCharge(): void {

        $obj = new AffectationsCharge();

        $obj->setAjoutCharge(true);
        $this->assertEquals(true, $obj->getAjoutCharge());
    }

    /**
     * Tests setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new AffectationsCharge();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new AffectationsCharge();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests setChargeMensualisee()
     *
     * @return void
     */
    public function testSetChargeMensualisee(): void {

        $obj = new AffectationsCharge();

        $obj->setChargeMensualisee(true);
        $this->assertEquals(true, $obj->getChargeMensualisee());
    }

    /**
     * Tests setChargeQFact()
     *
     * @return void
     */
    public function testSetChargeQFact(): void {

        $obj = new AffectationsCharge();

        $obj->setChargeQFact(true);
        $this->assertEquals(true, $obj->getChargeQFact());
    }

    /**
     * Tests setChargeValidee()
     *
     * @return void
     */
    public function testSetChargeValidee(): void {

        $obj = new AffectationsCharge();

        $obj->setChargeValidee(true);
        $this->assertEquals(true, $obj->getChargeValidee());
    }

    /**
     * Tests setChefEquipe()
     *
     * @return void
     */
    public function testSetChefEquipe(): void {

        $obj = new AffectationsCharge();

        $obj->setChefEquipe("chefEquipe");
        $this->assertEquals("chefEquipe", $obj->getChefEquipe());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeCharge()
     *
     * @return void
     */
    public function testSetCodeCharge(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeInspecteur()
     *
     * @return void
     */
    public function testSetCodeInspecteur(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new AffectationsCharge();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new AffectationsCharge();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new AffectationsCharge();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new AffectationsCharge();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests setJuil()
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new AffectationsCharge();

        $obj->setJuil(true);
        $this->assertEquals(true, $obj->getJuil());
    }

    /**
     * Tests setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new AffectationsCharge();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new AffectationsCharge();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new AffectationsCharge();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new AffectationsCharge();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new AffectationsCharge();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new AffectationsCharge();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests setOrigineChargeMens()
     *
     * @return void
     */
    public function testSetOrigineChargeMens(): void {

        $obj = new AffectationsCharge();

        $obj->setOrigineChargeMens(true);
        $this->assertEquals(true, $obj->getOrigineChargeMens());
    }

    /**
     * Tests setPeriodeDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new AffectationsCharge();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests setPeriodeFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new AffectationsCharge();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new AffectationsCharge();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new AffectationsCharge();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AffectationsCharge();

        $this->assertNull($obj->getAjoutCharge());
        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getChargeMensualisee());
        $this->assertNull($obj->getChargeQFact());
        $this->assertNull($obj->getChargeValidee());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getOrigineChargeMens());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getUniqId());
    }
}
