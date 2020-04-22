<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TauxRetraite;

/**
 * Taux retraite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TauxRetraiteTest extends AbstractTestCase {

    /**
     * Tests the setCategCadre() method.
     *
     * @return void
     */
    public function testSetCategCadre() {

        $obj = new TauxRetraite();

        $obj->setCategCadre(true);
        $this->assertEquals(true, $obj->getCategCadre());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new TauxRetraite();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new TauxRetraite();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new TauxRetraite();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setIndiceContrat() method.
     *
     * @return void
     */
    public function testSetIndiceContrat() {

        $obj = new TauxRetraite();

        $obj->setIndiceContrat(10);
        $this->assertEquals(10, $obj->getIndiceContrat());
    }

    /**
     * Tests the setLibelleBul() method.
     *
     * @return void
     */
    public function testSetLibelleBul() {

        $obj = new TauxRetraite();

        $obj->setLibelleBul("libelleBul");
        $this->assertEquals("libelleBul", $obj->getLibelleBul());
    }

    /**
     * Tests the setNumDossier() method.
     *
     * @return void
     */
    public function testSetNumDossier() {

        $obj = new TauxRetraite();

        $obj->setNumDossier("numDossier");
        $this->assertEquals("numDossier", $obj->getNumDossier());
    }

    /**
     * Tests the setSousDossier() method.
     *
     * @return void
     */
    public function testSetSousDossier() {

        $obj = new TauxRetraite();

        $obj->setSousDossier("sousDossier");
        $this->assertEquals("sousDossier", $obj->getSousDossier());
    }

    /**
     * Tests the setTauxPatTrA() method.
     *
     * @return void
     */
    public function testSetTauxPatTrA() {

        $obj = new TauxRetraite();

        $obj->setTauxPatTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatTrA());
    }

    /**
     * Tests the setTauxPatTrB() method.
     *
     * @return void
     */
    public function testSetTauxPatTrB() {

        $obj = new TauxRetraite();

        $obj->setTauxPatTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatTrB());
    }

    /**
     * Tests the setTauxPatTrC() method.
     *
     * @return void
     */
    public function testSetTauxPatTrC() {

        $obj = new TauxRetraite();

        $obj->setTauxPatTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatTrC());
    }

    /**
     * Tests the setTauxSalTrA() method.
     *
     * @return void
     */
    public function testSetTauxSalTrA() {

        $obj = new TauxRetraite();

        $obj->setTauxSalTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalTrA());
    }

    /**
     * Tests the setTauxSalTrB() method.
     *
     * @return void
     */
    public function testSetTauxSalTrB() {

        $obj = new TauxRetraite();

        $obj->setTauxSalTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalTrB());
    }

    /**
     * Tests the setTauxSalTrC() method.
     *
     * @return void
     */
    public function testSetTauxSalTrC() {

        $obj = new TauxRetraite();

        $obj->setTauxSalTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalTrC());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
