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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\EntreeSortieEmp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Entree sortie emp test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EntreeSortieEmpTest extends AbstractTestCase {

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new EntreeSortieEmp();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeMotifRupture()
     *
     * @return void
     */
    public function testSetCodeMotifRupture(): void {

        $obj = new EntreeSortieEmp();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests setDateEs()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEs(): void {

        // Set a Date/time mock.
        $dateEs = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateEs($dateEs);
        $this->assertSame($dateEs, $obj->getDateEs());
    }

    /**
     * Tests setDateFinPeriodeEssai()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinPeriodeEssai(): void {

        // Set a Date/time mock.
        $dateFinPeriodeEssai = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateFinPeriodeEssai($dateFinPeriodeEssai);
        $this->assertSame($dateFinPeriodeEssai, $obj->getDateFinPeriodeEssai());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setDateNotification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNotification(): void {

        // Set a Date/time mock.
        $dateNotification = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateNotification($dateNotification);
        $this->assertSame($dateNotification, $obj->getDateNotification());
    }

    /**
     * Tests setDateRenouvCdd1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd1(): void {

        // Set a Date/time mock.
        $dateRenouvCdd1 = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCdd1($dateRenouvCdd1);
        $this->assertSame($dateRenouvCdd1, $obj->getDateRenouvCdd1());
    }

    /**
     * Tests setDateRenouvCdd2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd2(): void {

        // Set a Date/time mock.
        $dateRenouvCdd2 = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCdd2($dateRenouvCdd2);
        $this->assertSame($dateRenouvCdd2, $obj->getDateRenouvCdd2());
    }

    /**
     * Tests setEntrepriseTravailTemp()
     *
     * @return void
     */
    public function testSetEntrepriseTravailTemp(): void {

        $obj = new EntreeSortieEmp();

        $obj->setEntrepriseTravailTemp("entrepriseTravailTemp");
        $this->assertEquals("entrepriseTravailTemp", $obj->getEntrepriseTravailTemp());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EntreeSortieEmp();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setTransfertEs()
     *
     * @return void
     */
    public function testSetTransfertEs(): void {

        $obj = new EntreeSortieEmp();

        $obj->setTransfertEs(true);
        $this->assertEquals(true, $obj->getTransfertEs());
    }

    /**
     * Tests setTravailTemp()
     *
     * @return void
     */
    public function testSetTravailTemp(): void {

        $obj = new EntreeSortieEmp();

        $obj->setTravailTemp(true);
        $this->assertEquals(true, $obj->getTravailTemp());
    }

    /**
     * Tests setTypeEs()
     *
     * @return void
     */
    public function testSetTypeEs(): void {

        $obj = new EntreeSortieEmp();

        $obj->setTypeEs("typeEs");
        $this->assertEquals("typeEs", $obj->getTypeEs());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
