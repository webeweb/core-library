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
use WBW\Library\Quadratus\Model\QPaie\HistoTauxRetraiteMetier;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo taux retraite metier test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HistoTauxRetraiteMetierTest extends AbstractTestCase {

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAPartirDe(): void {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new HistoTauxRetraiteMetier();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Tests the setCategSalarie() method.
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCategSalarie(10);
        $this->assertEquals(10, $obj->getCategSalarie());
    }

    /**
     * Tests the setCodeActivite() method.
     *
     * @return void
     */
    public function testSetCodeActivite(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeMetier() method.
     *
     * @return void
     */
    public function testSetCodeMetier(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCodeMetier("codeMetier");
        $this->assertEquals("codeMetier", $obj->getCodeMetier());
    }

    /**
     * Tests the setFormatNonEtendu() method.
     *
     * @return void
     */
    public function testSetFormatNonEtendu(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setFormatNonEtendu(true);
        $this->assertEquals(true, $obj->getFormatNonEtendu());
    }

    /**
     * Tests the setIndiceCateg() method.
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setTauxPatronal() method.
     *
     * @return void
     */
    public function testSetTauxPatronal(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setTauxPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronal());
    }

    /**
     * Tests the setTauxSalarial() method.
     *
     * @return void
     */
    public function testSetTauxSalarial(): void {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setTauxSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarial());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoTauxRetraiteMetier();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeMetier());
        $this->assertNull($obj->getFormatNonEtendu());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
    }
}
