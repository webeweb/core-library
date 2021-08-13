<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\TableauxPaiements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tableaux paiements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class TableauxPaiementsTest extends AbstractTestCase {

    /**
     * Tests the setAssurance() method.
     *
     * @return void
     */
    public function testSetAssurance(): void {

        $obj = new TableauxPaiements();

        $obj->setAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getAssurance());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new TableauxPaiements();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new TableauxPaiements();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setEntretien() method.
     *
     * @return void
     */
    public function testSetEntretien(): void {

        $obj = new TableauxPaiements();

        $obj->setEntretien(10.092018);
        $this->assertEquals(10.092018, $obj->getEntretien());
    }

    /**
     * Tests the setLoyerHt() method.
     *
     * @return void
     */
    public function testSetLoyerHt(): void {

        $obj = new TableauxPaiements();

        $obj->setLoyerHt(10.092018);
        $this->assertEquals(10.092018, $obj->getLoyerHt());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new TableauxPaiements();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroCb() method.
     *
     * @return void
     */
    public function testSetNumeroCb(): void {

        $obj = new TableauxPaiements();

        $obj->setNumeroCb(10);
        $this->assertEquals(10, $obj->getNumeroCb());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new TableauxPaiements();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDeuxCb() method.
     *
     * @return void
     */
    public function testSetNumeroDeuxCb(): void {

        $obj = new TableauxPaiements();

        $obj->setNumeroDeuxCb(10);
        $this->assertEquals(10, $obj->getNumeroDeuxCb());
    }

    /**
     * Tests the setValeurRachat() method.
     *
     * @return void
     */
    public function testSetValeurRachat(): void {

        $obj = new TableauxPaiements();

        $obj->setValeurRachat(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurRachat());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TableauxPaiements();

        $this->assertNull($obj->getAssurance());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEntretien());
        $this->assertNull($obj->getLoyerHt());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroCb());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeuxCb());
        $this->assertNull($obj->getValeurRachat());
    }
}
