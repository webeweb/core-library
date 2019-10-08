<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AffaireParamFrais;

/**
 * Affaire param frais model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AffaireParamFraisTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffaireParamFrais();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAvenant());
        $this->assertNull($obj->getCodeFraisFixe());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getComptesComptables());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMtFG1());
        $this->assertNull($obj->getMtFG2());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentage());
        $this->assertNull($obj->getPrctFG1());
        $this->assertNull($obj->getPrctFG2());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new AffaireParamFrais();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AffaireParamFrais();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAvenant() method.
     *
     * @return void
     */
    public function testSetCodeAvenant() {

        $obj = new AffaireParamFrais();

        $obj->setCodeAvenant("codeAvenant");
        $this->assertEquals("codeAvenant", $obj->getCodeAvenant());
    }

    /**
     * Tests the setCodeFraisFixe() method.
     *
     * @return void
     */
    public function testSetCodeFraisFixe() {

        $obj = new AffaireParamFrais();

        $obj->setCodeFraisFixe("codeFraisFixe");
        $this->assertEquals("codeFraisFixe", $obj->getCodeFraisFixe());
    }

    /**
     * Tests the setCodePhase() method.
     *
     * @return void
     */
    public function testSetCodePhase() {

        $obj = new AffaireParamFrais();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Tests the setComptesComptables() method.
     *
     * @return void
     */
    public function testSetComptesComptables() {

        $obj = new AffaireParamFrais();

        $obj->setComptesComptables("comptesComptables");
        $this->assertEquals("comptesComptables", $obj->getComptesComptables());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new AffaireParamFrais();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new AffaireParamFrais();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMtFG1() method.
     *
     * @return void
     */
    public function testSetMtFG1() {

        $obj = new AffaireParamFrais();

        $obj->setMtFG1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFG1());
    }

    /**
     * Tests the setMtFG2() method.
     *
     * @return void
     */
    public function testSetMtFG2() {

        $obj = new AffaireParamFrais();

        $obj->setMtFG2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFG2());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new AffaireParamFrais();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPourcentage() method.
     *
     * @return void
     */
    public function testSetPourcentage() {

        $obj = new AffaireParamFrais();

        $obj->setPourcentage(true);
        $this->assertEquals(true, $obj->getPourcentage());
    }

    /**
     * Tests the setPrctFG1() method.
     *
     * @return void
     */
    public function testSetPrctFG1() {

        $obj = new AffaireParamFrais();

        $obj->setPrctFG1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctFG1());
    }

    /**
     * Tests the setPrctFG2() method.
     *
     * @return void
     */
    public function testSetPrctFG2() {

        $obj = new AffaireParamFrais();

        $obj->setPrctFG2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctFG2());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new AffaireParamFrais();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
