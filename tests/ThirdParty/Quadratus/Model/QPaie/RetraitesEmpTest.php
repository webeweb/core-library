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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RetraitesEmp;

/**
 * Retraites emp model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RetraitesEmpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RetraitesEmp();

        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIndiceContrat());
        $this->assertNull($obj->getNonGere());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTypeOrga());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new RetraitesEmp();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setIdInstitution() method.
     *
     * @return void
     */
    public function testSetIdInstitution() {

        $obj = new RetraitesEmp();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests the setIndiceContrat() method.
     *
     * @return void
     */
    public function testSetIndiceContrat() {

        $obj = new RetraitesEmp();

        $obj->setIndiceContrat(10);
        $this->assertEquals(10, $obj->getIndiceContrat());
    }

    /**
     * Tests the setNonGere() method.
     *
     * @return void
     */
    public function testSetNonGere() {

        $obj = new RetraitesEmp();

        $obj->setNonGere(true);
        $this->assertEquals(true, $obj->getNonGere());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new RetraitesEmp();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTypeOrga() method.
     *
     * @return void
     */
    public function testSetTypeOrga() {

        $obj = new RetraitesEmp();

        $obj->setTypeOrga("typeOrga");
        $this->assertEquals("typeOrga", $obj->getTypeOrga());
    }
}
