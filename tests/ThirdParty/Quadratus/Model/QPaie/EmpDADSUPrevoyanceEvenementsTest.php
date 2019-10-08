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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDADSUPrevoyanceEvenements;

/**
 * Emp d a d s u prevoyance evenements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUPrevoyanceEvenementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $this->assertNull($obj->getADeclarerDSN());
        $this->assertNull($obj->getCodeEvenement());
        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getDateEvenement());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getRefContrat());
    }

    /**
     * Tests the setADeclarerDSN() method.
     *
     * @return void
     */
    public function testSetADeclarerDSN() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setADeclarerDSN(true);
        $this->assertEquals(true, $obj->getADeclarerDSN());
    }

    /**
     * Tests the setCodeEvenement() method.
     *
     * @return void
     */
    public function testSetCodeEvenement() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setCodeEvenement("codeEvenement");
        $this->assertEquals("codeEvenement", $obj->getCodeEvenement());
    }

    /**
     * Tests the setCodeOption() method.
     *
     * @return void
     */
    public function testSetCodeOption() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setCodeOption("codeOption");
        $this->assertEquals("codeOption", $obj->getCodeOption());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodePopulation() method.
     *
     * @return void
     */
    public function testSetCodePopulation() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setCodePopulation("codePopulation");
        $this->assertEquals("codePopulation", $obj->getCodePopulation());
    }

    /**
     * Tests the setDateEvenement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEvenement() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setDateEvenement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEvenement());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setRefContrat() method.
     *
     * @return void
     */
    public function testSetRefContrat() {

        $obj = new EmpDADSUPrevoyanceEvenements();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }
}
