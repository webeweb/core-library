<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
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
     * Test setAjoutCharge()
     *
     * @return void
     */
    public function testSetAjoutCharge(): void {

        $obj = new AffectationsCharge();

        $obj->setAjoutCharge(true);
        $this->assertTrue($obj->getAjoutCharge());
    }

    /**
     * Test setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new AffectationsCharge();

        $obj->setAou(true);
        $this->assertTrue($obj->getAou());
    }

    /**
     * Test setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new AffectationsCharge();

        $obj->setAvr(true);
        $this->assertTrue($obj->getAvr());
    }

    /**
     * Test setChargeMensualisee()
     *
     * @return void
     */
    public function testSetChargeMensualisee(): void {

        $obj = new AffectationsCharge();

        $obj->setChargeMensualisee(true);
        $this->assertTrue($obj->getChargeMensualisee());
    }

    /**
     * Test setChargeQFact()
     *
     * @return void
     */
    public function testSetChargeQFact(): void {

        $obj = new AffectationsCharge();

        $obj->setChargeQFact(true);
        $this->assertTrue($obj->getChargeQFact());
    }

    /**
     * Test setChargeValidee()
     *
     * @return void
     */
    public function testSetChargeValidee(): void {

        $obj = new AffectationsCharge();

        $obj->setChargeValidee(true);
        $this->assertTrue($obj->getChargeValidee());
    }

    /**
     * Test setChefEquipe()
     *
     * @return void
     */
    public function testSetChefEquipe(): void {

        $obj = new AffectationsCharge();

        $obj->setChefEquipe("chefEquipe");
        $this->assertEquals("chefEquipe", $obj->getChefEquipe());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeCharge()
     *
     * @return void
     */
    public function testSetCodeCharge(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeInspecteur()
     *
     * @return void
     */
    public function testSetCodeInspecteur(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new AffectationsCharge();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new AffectationsCharge();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new AffectationsCharge();

        $obj->setDec(true);
        $this->assertTrue($obj->getDec());
    }

    /**
     * Test setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new AffectationsCharge();

        $obj->setFev(true);
        $this->assertTrue($obj->getFev());
    }

    /**
     * Test setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new AffectationsCharge();

        $obj->setJan(true);
        $this->assertTrue($obj->getJan());
    }

    /**
     * Test setJuil()
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new AffectationsCharge();

        $obj->setJuil(true);
        $this->assertTrue($obj->getJuil());
    }

    /**
     * Test setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new AffectationsCharge();

        $obj->setJuin(true);
        $this->assertTrue($obj->getJuin());
    }

    /**
     * Test setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new AffectationsCharge();

        $obj->setMai(true);
        $this->assertTrue($obj->getMai());
    }

    /**
     * Test setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new AffectationsCharge();

        $obj->setMar(true);
        $this->assertTrue($obj->getMar());
    }

    /**
     * Test setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new AffectationsCharge();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Test setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new AffectationsCharge();

        $obj->setNov(true);
        $this->assertTrue($obj->getNov());
    }

    /**
     * Test setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new AffectationsCharge();

        $obj->setOct(true);
        $this->assertTrue($obj->getOct());
    }

    /**
     * Test setOrigineChargeMens()
     *
     * @return void
     */
    public function testSetOrigineChargeMens(): void {

        $obj = new AffectationsCharge();

        $obj->setOrigineChargeMens(true);
        $this->assertTrue($obj->getOrigineChargeMens());
    }

    /**
     * Test setPeriodeDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new AffectationsCharge();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Test setPeriodeFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new AffectationsCharge();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new AffectationsCharge();

        $obj->setSep(true);
        $this->assertTrue($obj->getSep());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new AffectationsCharge();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test __construct()
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
