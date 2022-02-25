<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\TauxRetraite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taux retraite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TauxRetraiteTest extends AbstractTestCase {

    /**
     * Tests setCategCadre()
     *
     * @return void
     */
    public function testSetCategCadre(): void {

        $obj = new TauxRetraite();

        $obj->setCategCadre(true);
        $this->assertEquals(true, $obj->getCategCadre());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new TauxRetraite();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new TauxRetraite();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new TauxRetraite();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setIndiceContrat()
     *
     * @return void
     */
    public function testSetIndiceContrat(): void {

        $obj = new TauxRetraite();

        $obj->setIndiceContrat(10);
        $this->assertEquals(10, $obj->getIndiceContrat());
    }

    /**
     * Tests setLibelleBul()
     *
     * @return void
     */
    public function testSetLibelleBul(): void {

        $obj = new TauxRetraite();

        $obj->setLibelleBul("libelleBul");
        $this->assertEquals("libelleBul", $obj->getLibelleBul());
    }

    /**
     * Tests setNumDossier()
     *
     * @return void
     */
    public function testSetNumDossier(): void {

        $obj = new TauxRetraite();

        $obj->setNumDossier("numDossier");
        $this->assertEquals("numDossier", $obj->getNumDossier());
    }

    /**
     * Tests setSousDossier()
     *
     * @return void
     */
    public function testSetSousDossier(): void {

        $obj = new TauxRetraite();

        $obj->setSousDossier("sousDossier");
        $this->assertEquals("sousDossier", $obj->getSousDossier());
    }

    /**
     * Tests setTauxPatTrA()
     *
     * @return void
     */
    public function testSetTauxPatTrA(): void {

        $obj = new TauxRetraite();

        $obj->setTauxPatTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatTrA());
    }

    /**
     * Tests setTauxPatTrB()
     *
     * @return void
     */
    public function testSetTauxPatTrB(): void {

        $obj = new TauxRetraite();

        $obj->setTauxPatTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatTrB());
    }

    /**
     * Tests setTauxPatTrC()
     *
     * @return void
     */
    public function testSetTauxPatTrC(): void {

        $obj = new TauxRetraite();

        $obj->setTauxPatTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatTrC());
    }

    /**
     * Tests setTauxSalTrA()
     *
     * @return void
     */
    public function testSetTauxSalTrA(): void {

        $obj = new TauxRetraite();

        $obj->setTauxSalTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalTrA());
    }

    /**
     * Tests setTauxSalTrB()
     *
     * @return void
     */
    public function testSetTauxSalTrB(): void {

        $obj = new TauxRetraite();

        $obj->setTauxSalTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalTrB());
    }

    /**
     * Tests setTauxSalTrC()
     *
     * @return void
     */
    public function testSetTauxSalTrC(): void {

        $obj = new TauxRetraite();

        $obj->setTauxSalTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalTrC());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TauxRetraite();

        $this->assertNull($obj->getCategCadre());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getIndiceContrat());
        $this->assertNull($obj->getLibelleBul());
        $this->assertNull($obj->getNumDossier());
        $this->assertNull($obj->getSousDossier());
        $this->assertNull($obj->getTauxPatTrA());
        $this->assertNull($obj->getTauxPatTrB());
        $this->assertNull($obj->getTauxPatTrC());
        $this->assertNull($obj->getTauxSalTrA());
        $this->assertNull($obj->getTauxSalTrB());
        $this->assertNull($obj->getTauxSalTrC());
    }
}
