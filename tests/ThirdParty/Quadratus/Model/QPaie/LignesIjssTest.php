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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesIjss;

/**
 * Lignes ijss test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesIjssTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesIjss();

        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontantEuroOuFranc());
        $this->assertNull($obj->getMotif());
        $this->assertNull($obj->getMtBrutPerteSalaire());
        $this->assertNull($obj->getNbC());
        $this->assertNull($obj->getNbE());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSalRetEuroOuFranc());
        $this->assertNull($obj->getSalaireRet());
        $this->assertNull($obj->getSommeRegul1());
        $this->assertNull($obj->getSommeRegul2());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new LignesIjss();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2() {

        $obj = new LignesIjss();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontantEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetMontantEuroOuFranc() {

        $obj = new LignesIjss();

        $obj->setMontantEuroOuFranc("montantEuroOuFranc");
        $this->assertEquals("montantEuroOuFranc", $obj->getMontantEuroOuFranc());
    }

    /**
     * Tests the setMotif() method.
     *
     * @return void
     */
    public function testSetMotif() {

        $obj = new LignesIjss();

        $obj->setMotif("motif");
        $this->assertEquals("motif", $obj->getMotif());
    }

    /**
     * Tests the setMtBrutPerteSalaire() method.
     *
     * @return void
     */
    public function testSetMtBrutPerteSalaire() {

        $obj = new LignesIjss();

        $obj->setMtBrutPerteSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutPerteSalaire());
    }

    /**
     * Tests the setNbC() method.
     *
     * @return void
     */
    public function testSetNbC() {

        $obj = new LignesIjss();

        $obj->setNbC(10.092018);
        $this->assertEquals(10.092018, $obj->getNbC());
    }

    /**
     * Tests the setNbE() method.
     *
     * @return void
     */
    public function testSetNbE() {

        $obj = new LignesIjss();

        $obj->setNbE(10.092018);
        $this->assertEquals(10.092018, $obj->getNbE());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesIjss();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new LignesIjss();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb() {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new LignesIjss();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin() {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new LignesIjss();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests the setSalRetEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetSalRetEuroOuFranc() {

        $obj = new LignesIjss();

        $obj->setSalRetEuroOuFranc("salRetEuroOuFranc");
        $this->assertEquals("salRetEuroOuFranc", $obj->getSalRetEuroOuFranc());
    }

    /**
     * Tests the setSalaireRet() method.
     *
     * @return void
     */
    public function testSetSalaireRet() {

        $obj = new LignesIjss();

        $obj->setSalaireRet(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRet());
    }

    /**
     * Tests the setSommeRegul1() method.
     *
     * @return void
     */
    public function testSetSommeRegul1() {

        $obj = new LignesIjss();

        $obj->setSommeRegul1(10.092018);
        $this->assertEquals(10.092018, $obj->getSommeRegul1());
    }

    /**
     * Tests the setSommeRegul2() method.
     *
     * @return void
     */
    public function testSetSommeRegul2() {

        $obj = new LignesIjss();

        $obj->setSommeRegul2(10.092018);
        $this->assertEquals(10.092018, $obj->getSommeRegul2());
    }
}
