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

use WBW\Library\Quadratus\Model\QPaie\RetraitesEmp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Retraites emp test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class RetraitesEmpTest extends AbstractTestCase {

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new RetraitesEmp();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setIdInstitution()
     *
     * @return void
     */
    public function testSetIdInstitution(): void {

        $obj = new RetraitesEmp();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests setIndiceContrat()
     *
     * @return void
     */
    public function testSetIndiceContrat(): void {

        $obj = new RetraitesEmp();

        $obj->setIndiceContrat(10);
        $this->assertEquals(10, $obj->getIndiceContrat());
    }

    /**
     * Tests setNonGere()
     *
     * @return void
     */
    public function testSetNonGere(): void {

        $obj = new RetraitesEmp();

        $obj->setNonGere(true);
        $this->assertEquals(true, $obj->getNonGere());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RetraitesEmp();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setTypeOrga()
     *
     * @return void
     */
    public function testSetTypeOrga(): void {

        $obj = new RetraitesEmp();

        $obj->setTypeOrga("typeOrga");
        $this->assertEquals("typeOrga", $obj->getTypeOrga());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RetraitesEmp();

        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIndiceContrat());
        $this->assertNull($obj->getNonGere());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTypeOrga());
    }
}
