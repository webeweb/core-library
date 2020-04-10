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
 * Entree sortie emp test.
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
    public function test__construct() {

        $obj = new EntreeSortieEmp();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getDateEs());
        $this->assertNull($obj->getDateFinPeriodeEssai());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateNotification());
        $this->assertNull($obj->getDateRenouvCdd1());
        $this->assertNull($obj->getDateRenouvCdd2());
        $this->assertNull($obj->getEntrepriseTravailTemp());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTransfertEs());
        $this->assertNull($obj->getTravailTemp());
        $this->assertNull($obj->getTypeEs());
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
     * Tests the setDateEs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEs() {

        // Set a Date/time mock.
        $dateEs = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateEs($dateEs);
        $this->assertSame($dateEs, $obj->getDateEs());
    }

    /**
     * Tests the setDateFinPeriodeEssai() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPeriodeEssai() {

        // Set a Date/time mock.
        $dateFinPeriodeEssai = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateFinPeriodeEssai($dateFinPeriodeEssai);
        $this->assertSame($dateFinPeriodeEssai, $obj->getDateFinPeriodeEssai());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDateNotification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNotification() {

        // Set a Date/time mock.
        $dateNotification = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateNotification($dateNotification);
        $this->assertSame($dateNotification, $obj->getDateNotification());
    }

    /**
     * Tests the setDateRenouvCdd1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd1() {

        // Set a Date/time mock.
        $dateRenouvCdd1 = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCdd1($dateRenouvCdd1);
        $this->assertSame($dateRenouvCdd1, $obj->getDateRenouvCdd1());
    }

    /**
     * Tests the setDateRenouvCdd2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd2() {

        // Set a Date/time mock.
        $dateRenouvCdd2 = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCdd2($dateRenouvCdd2);
        $this->assertSame($dateRenouvCdd2, $obj->getDateRenouvCdd2());
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
     * Tests the setTransfertEs() method.
     *
     * @return void
     */
    public function testSetTransfertEs() {

        $obj = new EntreeSortieEmp();

        $obj->setTransfertEs(true);
        $this->assertEquals(true, $obj->getTransfertEs());
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
     * Tests the setTypeEs() method.
     *
     * @return void
     */
    public function testSetTypeEs() {

        $obj = new EntreeSortieEmp();

        $obj->setTypeEs("typeEs");
        $this->assertEquals("typeEs", $obj->getTypeEs());
    }
}
