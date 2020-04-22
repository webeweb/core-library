<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EmpruntsLignes;

/**
 * Emprunts lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EmpruntsLignesTest extends AbstractTestCase {

    /**
     * Tests the setDateRemboursement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRemboursement() {

        // Set a Date/time mock.
        $dateRemboursement = new DateTime("2018-09-10");

        $obj = new EmpruntsLignes();

        $obj->setDateRemboursement($dateRemboursement);
        $this->assertSame($dateRemboursement, $obj->getDateRemboursement());
    }

    /**
     * Tests the setDontAssurance() method.
     *
     * @return void
     */
    public function testSetDontAssurance() {

        $obj = new EmpruntsLignes();

        $obj->setDontAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getDontAssurance());
    }

    /**
     * Tests the setDontCapital() method.
     *
     * @return void
     */
    public function testSetDontCapital() {

        $obj = new EmpruntsLignes();

        $obj->setDontCapital(10.092018);
        $this->assertEquals(10.092018, $obj->getDontCapital());
    }

    /**
     * Tests the setDontInteret() method.
     *
     * @return void
     */
    public function testSetDontInteret() {

        $obj = new EmpruntsLignes();

        $obj->setDontInteret(10.092018);
        $this->assertEquals(10.092018, $obj->getDontInteret());
    }

    /**
     * Tests the setMontantRembour() method.
     *
     * @return void
     */
    public function testSetMontantRembour() {

        $obj = new EmpruntsLignes();

        $obj->setMontantRembour(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantRembour());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new EmpruntsLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new EmpruntsLignes();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setRestantDuAvant() method.
     *
     * @return void
     */
    public function testSetRestantDuAvant() {

        $obj = new EmpruntsLignes();

        $obj->setRestantDuAvant(10.092018);
        $this->assertEquals(10.092018, $obj->getRestantDuAvant());
    }

    /**
     * Tests the setTauxLigne() method.
     *
     * @return void
     */
    public function testSetTauxLigne() {

        $obj = new EmpruntsLignes();

        $obj->setTauxLigne(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxLigne());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EmpruntsLignes();

        $this->assertNull($obj->getDateRemboursement());
        $this->assertNull($obj->getDontAssurance());
        $this->assertNull($obj->getDontCapital());
        $this->assertNull($obj->getDontInteret());
        $this->assertNull($obj->getMontantRembour());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getRestantDuAvant());
        $this->assertNull($obj->getTauxLigne());
    }
}
