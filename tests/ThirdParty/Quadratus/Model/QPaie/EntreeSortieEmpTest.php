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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EntreeSortieEmp;

/**
 * Entree sortie emp model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EntreeSortieEmpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EntreeSortieEmp();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getDateES());
        $this->assertNull($obj->getDateFinPeriodeEssai());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateNotification());
        $this->assertNull($obj->getDateRenouvCDD1());
        $this->assertNull($obj->getDateRenouvCDD2());
        $this->assertNull($obj->getEntrepriseTravailTemp());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTransfertES());
        $this->assertNull($obj->getTravailTemp());
        $this->assertNull($obj->getTypeES());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new EntreeSortieEmp();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMotifRupture() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture() {

        $obj = new EntreeSortieEmp();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests the setDateES() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateES() {

        $obj = new EntreeSortieEmp();

        $obj->setDateES(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateES());
    }

    /**
     * Tests the setDateFinPeriodeEssai() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPeriodeEssai() {

        $obj = new EntreeSortieEmp();

        $obj->setDateFinPeriodeEssai(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinPeriodeEssai());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        $obj = new EntreeSortieEmp();

        $obj->setDateModification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
    }

    /**
     * Tests the setDateNotification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNotification() {

        $obj = new EntreeSortieEmp();

        $obj->setDateNotification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNotification());
    }

    /**
     * Tests the setDateRenouvCDD1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCDD1() {

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCDD1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRenouvCDD1());
    }

    /**
     * Tests the setDateRenouvCDD2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCDD2() {

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCDD2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRenouvCDD2());
    }

    /**
     * Tests the setEntrepriseTravailTemp() method.
     *
     * @return void
     */
    public function testSetEntrepriseTravailTemp() {

        $obj = new EntreeSortieEmp();

        $obj->setEntrepriseTravailTemp("entrepriseTravailTemp");
        $this->assertEquals("entrepriseTravailTemp", $obj->getEntrepriseTravailTemp());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new EntreeSortieEmp();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTransfertES() method.
     *
     * @return void
     */
    public function testSetTransfertES() {

        $obj = new EntreeSortieEmp();

        $obj->setTransfertES(true);
        $this->assertEquals(true, $obj->getTransfertES());
    }

    /**
     * Tests the setTravailTemp() method.
     *
     * @return void
     */
    public function testSetTravailTemp() {

        $obj = new EntreeSortieEmp();

        $obj->setTravailTemp(true);
        $this->assertEquals(true, $obj->getTravailTemp());
    }

    /**
     * Tests the setTypeES() method.
     *
     * @return void
     */
    public function testSetTypeES() {

        $obj = new EntreeSortieEmp();

        $obj->setTypeES("typeES");
        $this->assertEquals("typeES", $obj->getTypeES());
    }
}
