<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use WBW\Library\Core\Quadratus\Model\QPaie\DADSUAssuranceLignesContrat;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * D a d s u assurance lignes contrat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class DADSUAssuranceLignesContratTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DADSUAssuranceLignesContrat();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePorteurRisque());
        $this->assertNull($obj->getDesignationCommerciale());
        $this->assertNull($obj->getRefContrat());
        $this->assertNull($obj->getUniteGestion());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DADSUAssuranceLignesContrat();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new DADSUAssuranceLignesContrat();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new DADSUAssuranceLignesContrat();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodePorteurRisque() method.
     *
     * @return void
     */
    public function testSetCodePorteurRisque() {

        $obj = new DADSUAssuranceLignesContrat();

        $obj->setCodePorteurRisque("codePorteurRisque");
        $this->assertEquals("codePorteurRisque", $obj->getCodePorteurRisque());
    }

    /**
     * Tests the setDesignationCommerciale() method.
     *
     * @return void
     */
    public function testSetDesignationCommerciale() {

        $obj = new DADSUAssuranceLignesContrat();

        $obj->setDesignationCommerciale("designationCommerciale");
        $this->assertEquals("designationCommerciale", $obj->getDesignationCommerciale());
    }

    /**
     * Tests the setRefContrat() method.
     *
     * @return void
     */
    public function testSetRefContrat() {

        $obj = new DADSUAssuranceLignesContrat();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests the setUniteGestion() method.
     *
     * @return void
     */
    public function testSetUniteGestion() {

        $obj = new DADSUAssuranceLignesContrat();

        $obj->setUniteGestion("uniteGestion");
        $this->assertEquals("uniteGestion", $obj->getUniteGestion());
    }

}
