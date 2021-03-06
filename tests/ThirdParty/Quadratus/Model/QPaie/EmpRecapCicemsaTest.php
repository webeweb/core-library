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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapCicemsa;

/**
 * Emp recap cicemsa test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCicemsaTest extends AbstractTestCase {

    /**
     * Tests the setCaisseCp() method.
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setCaisseCp(true);
        $this->assertEquals(true, $obj->getCaisseCp());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new EmpRecapCicemsa();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setRemunAssietteCice() method.
     *
     * @return void
     */
    public function testSetRemunAssietteCice(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setRemunAssietteCice(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunAssietteCice());
    }

    /**
     * Tests the setRemunBrutCice() method.
     *
     * @return void
     */
    public function testSetRemunBrutCice(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setRemunBrutCice(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunBrutCice());
    }

    /**
     * Tests the setSmicMcice() method.
     *
     * @return void
     */
    public function testSetSmicMcice(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setSmicMcice(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicMcice());
    }

    /**
     * Tests the setSortieMois() method.
     *
     * @return void
     */
    public function testSetSortieMois(): void {

        $obj = new EmpRecapCicemsa();

        $obj->setSortieMois(true);
        $this->assertEquals(true, $obj->getSortieMois());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpRecapCicemsa();

        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRemunAssietteCice());
        $this->assertNull($obj->getRemunBrutCice());
        $this->assertNull($obj->getSmicMcice());
        $this->assertNull($obj->getSortieMois());
    }
}
