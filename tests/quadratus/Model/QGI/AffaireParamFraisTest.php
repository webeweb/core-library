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
use Exception;
use WBW\Library\Quadratus\Model\QGI\AffaireParamFrais;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affaire param frais test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AffaireParamFraisTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new AffaireParamFrais();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffaireParamFrais();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAvenant() method.
     *
     * @return void
     */
    public function testSetCodeAvenant(): void {

        $obj = new AffaireParamFrais();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Tests the setCodeFraisFixe() method.
     *
     * @return void
     */
    public function testSetCodeFraisFixe(): void {

        $obj = new AffaireParamFrais();

        $obj->setCodeFraisFixe("codeFraisFixe");
        $this->assertEquals("codeFraisFixe", $obj->getCodeFraisFixe());
    }

    /**
     * Tests the setCodePhase() method.
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new AffaireParamFrais();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests the setComptesComptables() method.
     *
     * @return void
     */
    public function testSetComptesComptables(): void {

        $obj = new AffaireParamFrais();

        $obj->setComptesComptables("comptesComptables");
        $this->assertEquals("comptesComptables", $obj->getComptesComptables());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new AffaireParamFrais();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new AffaireParamFrais();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMtFg1() method.
     *
     * @return void
     */
    public function testSetMtFg1(): void {

        $obj = new AffaireParamFrais();

        $obj->setMtFg1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFg1());
    }

    /**
     * Tests the setMtFg2() method.
     *
     * @return void
     */
    public function testSetMtFg2(): void {

        $obj = new AffaireParamFrais();

        $obj->setMtFg2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFg2());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new AffaireParamFrais();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPourcentage() method.
     *
     * @return void
     */
    public function testSetPourcentage(): void {

        $obj = new AffaireParamFrais();

        $obj->setPourcentage(true);
        $this->assertEquals(true, $obj->getPourcentage());
    }

    /**
     * Tests the setPrctFg1() method.
     *
     * @return void
     */
    public function testSetPrctFg1(): void {

        $obj = new AffaireParamFrais();

        $obj->setPrctFg1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctFg1());
    }

    /**
     * Tests the setPrctFg2() method.
     *
     * @return void
     */
    public function testSetPrctFg2(): void {

        $obj = new AffaireParamFrais();

        $obj->setPrctFg2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctFg2());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new AffaireParamFrais();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AffaireParamFrais();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAvenant());
        $this->assertNull($obj->getCodeFraisFixe());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getComptesComptables());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMtFg1());
        $this->assertNull($obj->getMtFg2());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentage());
        $this->assertNull($obj->getPrctFg1());
        $this->assertNull($obj->getPrctFg2());
        $this->assertNull($obj->getType());
    }
}
