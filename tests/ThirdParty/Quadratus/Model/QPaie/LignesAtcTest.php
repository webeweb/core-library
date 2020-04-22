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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesAtc;

/**
 * Lignes atc test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesAtcTest extends AbstractTestCase {

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new LignesAtc();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMontantCotis() method.
     *
     * @return void
     */
    public function testSetMontantCotis() {

        $obj = new LignesAtc();

        $obj->setMontantCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCotis());
    }

    /**
     * Tests the setMotif() method.
     *
     * @return void
     */
    public function testSetMotif() {

        $obj = new LignesAtc();

        $obj->setMotif("motif");
        $this->assertEquals("motif", $obj->getMotif());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesAtc();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation() {

        $obj = new LignesAtc();

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

        $obj = new LignesAtc();

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

        $obj = new LignesAtc();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests the setPsEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetPsEuroOuFranc() {

        $obj = new LignesAtc();

        $obj->setPsEuroOuFranc("psEuroOuFranc");
        $this->assertEquals("psEuroOuFranc", $obj->getPsEuroOuFranc());
    }

    /**
     * Tests the setSalaireEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetSalaireEuroOuFranc() {

        $obj = new LignesAtc();

        $obj->setSalaireEuroOuFranc("salaireEuroOuFranc");
        $this->assertEquals("salaireEuroOuFranc", $obj->getSalaireEuroOuFranc());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new LignesAtc();

        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantCotis());
        $this->assertNull($obj->getMotif());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPsEuroOuFranc());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSalaireEuroOuFranc());
    }
}
