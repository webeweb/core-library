<?php

declare(strict_types = 1);

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
use Throwable;
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
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new EntreeSortieEmp();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeMotifRupture()
     *
     * @return void
     */
    public function testSetCodeMotifRupture(): void {

        $obj = new EntreeSortieEmp();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Test setDateEs()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEs(): void {

        // Set a Date/time mock.
        $dateEs = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateEs($dateEs);
        $this->assertSame($dateEs, $obj->getDateEs());
    }

    /**
     * Test setDateFinPeriodeEssai()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinPeriodeEssai(): void {

        // Set a Date/time mock.
        $dateFinPeriodeEssai = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateFinPeriodeEssai($dateFinPeriodeEssai);
        $this->assertSame($dateFinPeriodeEssai, $obj->getDateFinPeriodeEssai());
    }

    /**
     * Test setDateModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setDateNotification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNotification(): void {

        // Set a Date/time mock.
        $dateNotification = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateNotification($dateNotification);
        $this->assertSame($dateNotification, $obj->getDateNotification());
    }

    /**
     * Test setDateRenouvCdd1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd1(): void {

        // Set a Date/time mock.
        $dateRenouvCdd1 = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCdd1($dateRenouvCdd1);
        $this->assertSame($dateRenouvCdd1, $obj->getDateRenouvCdd1());
    }

    /**
     * Test setDateRenouvCdd2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRenouvCdd2(): void {

        // Set a Date/time mock.
        $dateRenouvCdd2 = new DateTime("2018-09-10");

        $obj = new EntreeSortieEmp();

        $obj->setDateRenouvCdd2($dateRenouvCdd2);
        $this->assertSame($dateRenouvCdd2, $obj->getDateRenouvCdd2());
    }

    /**
     * Test setEntrepriseTravailTemp()
     *
     * @return void
     */
    public function testSetEntrepriseTravailTemp(): void {

        $obj = new EntreeSortieEmp();

        $obj->setEntrepriseTravailTemp("entrepriseTravailTemp");
        $this->assertEquals("entrepriseTravailTemp", $obj->getEntrepriseTravailTemp());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EntreeSortieEmp();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setTransfertEs()
     *
     * @return void
     */
    public function testSetTransfertEs(): void {

        $obj = new EntreeSortieEmp();

        $obj->setTransfertEs(true);
        $this->assertTrue($obj->getTransfertEs());
    }

    /**
     * Test setTravailTemp()
     *
     * @return void
     */
    public function testSetTravailTemp(): void {

        $obj = new EntreeSortieEmp();

        $obj->setTravailTemp(true);
        $this->assertTrue($obj->getTravailTemp());
    }

    /**
     * Test setTypeEs()
     *
     * @return void
     */
    public function testSetTypeEs(): void {

        $obj = new EntreeSortieEmp();

        $obj->setTypeEs("typeEs");
        $this->assertEquals("typeEs", $obj->getTypeEs());
    }

    /**
     * Test __construct()
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
