<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\DadsuAssuranceLignesContrat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu assurance lignes contrat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuAssuranceLignesContratTest extends AbstractTestCase {

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodePorteurRisque() method.
     *
     * @return void
     */
    public function testSetCodePorteurRisque(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $obj->setCodePorteurRisque("codePorteurRisque");
        $this->assertEquals("codePorteurRisque", $obj->getCodePorteurRisque());
    }

    /**
     * Tests the setDesignationCommerciale() method.
     *
     * @return void
     */
    public function testSetDesignationCommerciale(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $obj->setDesignationCommerciale("designationCommerciale");
        $this->assertEquals("designationCommerciale", $obj->getDesignationCommerciale());
    }

    /**
     * Tests the setRefContrat() method.
     *
     * @return void
     */
    public function testSetRefContrat(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests the setUniteGestion() method.
     *
     * @return void
     */
    public function testSetUniteGestion(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $obj->setUniteGestion("uniteGestion");
        $this->assertEquals("uniteGestion", $obj->getUniteGestion());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuAssuranceLignesContrat();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePorteurRisque());
        $this->assertNull($obj->getDesignationCommerciale());
        $this->assertNull($obj->getRefContrat());
        $this->assertNull($obj->getUniteGestion());
    }
}
