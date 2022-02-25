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

use WBW\Library\Quadratus\Model\QCompta\AffectationAna3;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affectation ana3 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class AffectationAna3Test extends AbstractTestCase {

    /**
     * Tests setAnneeRecolte()
     *
     * @return void
     */
    public function testSetAnneeRecolte(): void {

        $obj = new AffectationAna3();

        $obj->setAnneeRecolte("anneeRecolte");
        $this->assertEquals("anneeRecolte", $obj->getAnneeRecolte());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new AffectationAna3();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new AffectationAna3();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new AffectationAna3();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setNumCompte()
     *
     * @return void
     */
    public function testSetNumCompte(): void {

        $obj = new AffectationAna3();

        $obj->setNumCompte("numCompte");
        $this->assertEquals("numCompte", $obj->getNumCompte());
    }

    /**
     * Tests setPourcentage()
     *
     * @return void
     */
    public function testSetPourcentage(): void {

        $obj = new AffectationAna3();

        $obj->setPourcentage(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentage());
    }

    /**
     * Tests setQuantite1()
     *
     * @return void
     */
    public function testSetQuantite1(): void {

        $obj = new AffectationAna3();

        $obj->setQuantite1(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite1());
    }

    /**
     * Tests setQuantite2()
     *
     * @return void
     */
    public function testSetQuantite2(): void {

        $obj = new AffectationAna3();

        $obj->setQuantite2(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite2());
    }

    /**
     * Tests setSens()
     *
     * @return void
     */
    public function testSetSens(): void {

        $obj = new AffectationAna3();

        $obj->setSens("sens");
        $this->assertEquals("sens", $obj->getSens());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AffectationAna3();

        $this->assertNull($obj->getAnneeRecolte());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumCompte());
        $this->assertNull($obj->getPourcentage());
        $this->assertNull($obj->getQuantite1());
        $this->assertNull($obj->getQuantite2());
        $this->assertNull($obj->getSens());
    }
}
