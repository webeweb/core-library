<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PointEmpNbHRemplContrat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Point emp nb h rempl contrat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointEmpNbHRemplContratTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeRemplacant() method.
     *
     * @return void
     */
    public function testSetCodeRemplacant(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeRemplacant("codeRemplacant");
        $this->assertEquals("codeRemplacant", $obj->getCodeRemplacant());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new PointEmpNbHRemplContrat();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setMensualisation() method.
     *
     * @return void
     */
    public function testSetMensualisation(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setMensualisation(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisation());
    }

    /**
     * Tests the setNbHeures() method.
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
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

        $obj = new PointEmpNbHRemplContrat();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new PointEmpNbHRemplContrat();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointEmpNbHRemplContrat();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeRemplacant());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getMensualisation());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
