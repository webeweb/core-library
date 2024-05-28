<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\EmpruntsLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emprunts lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class EmpruntsLignesTest extends AbstractTestCase {

    /**
     * Test setDateRemboursement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRemboursement(): void {

        // Set a Date/time mock.
        $dateRemboursement = new DateTime("2018-09-10");

        $obj = new EmpruntsLignes();

        $obj->setDateRemboursement($dateRemboursement);
        $this->assertSame($dateRemboursement, $obj->getDateRemboursement());
    }

    /**
     * Test setDontAssurance()
     *
     * @return void
     */
    public function testSetDontAssurance(): void {

        $obj = new EmpruntsLignes();

        $obj->setDontAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getDontAssurance());
    }

    /**
     * Test setDontCapital()
     *
     * @return void
     */
    public function testSetDontCapital(): void {

        $obj = new EmpruntsLignes();

        $obj->setDontCapital(10.092018);
        $this->assertEquals(10.092018, $obj->getDontCapital());
    }

    /**
     * Test setDontInteret()
     *
     * @return void
     */
    public function testSetDontInteret(): void {

        $obj = new EmpruntsLignes();

        $obj->setDontInteret(10.092018);
        $this->assertEquals(10.092018, $obj->getDontInteret());
    }

    /**
     * Test setMontantRembour()
     *
     * @return void
     */
    public function testSetMontantRembour(): void {

        $obj = new EmpruntsLignes();

        $obj->setMontantRembour(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantRembour());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new EmpruntsLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new EmpruntsLignes();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Test setRestantDuAvant()
     *
     * @return void
     */
    public function testSetRestantDuAvant(): void {

        $obj = new EmpruntsLignes();

        $obj->setRestantDuAvant(10.092018);
        $this->assertEquals(10.092018, $obj->getRestantDuAvant());
    }

    /**
     * Test setTauxLigne()
     *
     * @return void
     */
    public function testSetTauxLigne(): void {

        $obj = new EmpruntsLignes();

        $obj->setTauxLigne(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxLigne());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
