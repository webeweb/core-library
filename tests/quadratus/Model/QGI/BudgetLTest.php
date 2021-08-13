<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\BudgetL;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Budget l test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class BudgetLTest extends AbstractTestCase {

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new BudgetL();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new BudgetL();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new BudgetL();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodeTravail() method.
     *
     * @return void
     */
    public function testSetCodeTravail(): void {

        $obj = new BudgetL();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new BudgetL();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setHSoldees() method.
     *
     * @return void
     */
    public function testSetHSoldees(): void {

        $obj = new BudgetL();

        $obj->setHSoldees(true);
        $this->assertEquals(true, $obj->getHSoldees());
    }

    /**
     * Tests the setNbrHeures() method.
     *
     * @return void
     */
    public function testSetNbrHeures(): void {

        $obj = new BudgetL();

        $obj->setNbrHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbrHeures());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new BudgetL();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests the setNomTravail() method.
     *
     * @return void
     */
    public function testSetNomTravail(): void {

        $obj = new BudgetL();

        $obj->setNomTravail("nomTravail");
        $this->assertEquals("nomTravail", $obj->getNomTravail());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new BudgetL();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new BudgetL();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new BudgetL();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPrixHeure() method.
     *
     * @return void
     */
    public function testSetPrixHeure(): void {

        $obj = new BudgetL();

        $obj->setPrixHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixHeure());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new BudgetL();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setTypeAffectation() method.
     *
     * @return void
     */
    public function testSetTypeAffectation(): void {

        $obj = new BudgetL();

        $obj->setTypeAffectation("typeAffectation");
        $this->assertEquals("typeAffectation", $obj->getTypeAffectation());
    }

    /**
     * Tests the setUniqIdLm() method.
     *
     * @return void
     */
    public function testSetUniqIdLm(): void {

        $obj = new BudgetL();

        $obj->setUniqIdLm("uniqIdLm");
        $this->assertEquals("uniqIdLm", $obj->getUniqIdLm());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BudgetL();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getHSoldees());
        $this->assertNull($obj->getNbrHeures());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomTravail());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrixHeure());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getTypeAffectation());
        $this->assertNull($obj->getUniqIdLm());
    }
}
