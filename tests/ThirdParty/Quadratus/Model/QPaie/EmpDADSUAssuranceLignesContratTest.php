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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDADSUAssuranceLignesContrat;

/**
 * Emp d a d s u assurance lignes contrat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUAssuranceLignesContratTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDADSUAssuranceLignesContrat();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getNbEnfants());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getRefContrat());
        $this->assertNull($obj->getUniteGestion());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpDADSUAssuranceLignesContrat();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new EmpDADSUAssuranceLignesContrat();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setNbEnfants() method.
     *
     * @return void
     */
    public function testSetNbEnfants() {

        $obj = new EmpDADSUAssuranceLignesContrat();

        $obj->setNbEnfants("nbEnfants");
        $this->assertEquals("nbEnfants", $obj->getNbEnfants());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpDADSUAssuranceLignesContrat();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setRefContrat() method.
     *
     * @return void
     */
    public function testSetRefContrat() {

        $obj = new EmpDADSUAssuranceLignesContrat();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests the setUniteGestion() method.
     *
     * @return void
     */
    public function testSetUniteGestion() {

        $obj = new EmpDADSUAssuranceLignesContrat();

        $obj->setUniteGestion("uniteGestion");
        $this->assertEquals("uniteGestion", $obj->getUniteGestion());
    }
}
