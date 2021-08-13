<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\DevisProgLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis prog lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisProgLignesTest extends AbstractTestCase {

    /**
     * Tests the setAou() method.
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new DevisProgLignes();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests the setAvr() method.
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new DevisProgLignes();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests the setCodeEchelle() method.
     *
     * @return void
     */
    public function testSetCodeEchelle(): void {

        $obj = new DevisProgLignes();

        $obj->setCodeEchelle("codeEchelle");
        $this->assertEquals("codeEchelle", $obj->getCodeEchelle());
    }

    /**
     * Tests the setCodeOperation() method.
     *
     * @return void
     */
    public function testSetCodeOperation(): void {

        $obj = new DevisProgLignes();

        $obj->setCodeOperation("codeOperation");
        $this->assertEquals("codeOperation", $obj->getCodeOperation());
    }

    /**
     * Tests the setCoefficient() method.
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new DevisProgLignes();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests the setDec() method.
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new DevisProgLignes();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests the setDimanche() method.
     *
     * @return void
     */
    public function testSetDimanche(): void {

        $obj = new DevisProgLignes();

        $obj->setDimanche(true);
        $this->assertEquals(true, $obj->getDimanche());
    }

    /**
     * Tests the setFev() method.
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new DevisProgLignes();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests the setJan() method.
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new DevisProgLignes();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests the setJeudi() method.
     *
     * @return void
     */
    public function testSetJeudi(): void {

        $obj = new DevisProgLignes();

        $obj->setJeudi(true);
        $this->assertEquals(true, $obj->getJeudi());
    }

    /**
     * Tests the setJuil() method.
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new DevisProgLignes();

        $obj->setJuil(true);
        $this->assertEquals(true, $obj->getJuil());
    }

    /**
     * Tests the setJuin() method.
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new DevisProgLignes();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests the setLundi() method.
     *
     * @return void
     */
    public function testSetLundi(): void {

        $obj = new DevisProgLignes();

        $obj->setLundi(true);
        $this->assertEquals(true, $obj->getLundi());
    }

    /**
     * Tests the setMai() method.
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new DevisProgLignes();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests the setMar() method.
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new DevisProgLignes();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests the setMardi() method.
     *
     * @return void
     */
    public function testSetMardi(): void {

        $obj = new DevisProgLignes();

        $obj->setMardi(true);
        $this->assertEquals(true, $obj->getMardi());
    }

    /**
     * Tests the setMercredi() method.
     *
     * @return void
     */
    public function testSetMercredi(): void {

        $obj = new DevisProgLignes();

        $obj->setMercredi(true);
        $this->assertEquals(true, $obj->getMercredi());
    }

    /**
     * Tests the setNoteResultat() method.
     *
     * @return void
     */
    public function testSetNoteResultat(): void {

        $obj = new DevisProgLignes();

        $obj->setNoteResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteResultat());
    }

    /**
     * Tests the setNov() method.
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new DevisProgLignes();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisProgLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DevisProgLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumProgramme() method.
     *
     * @return void
     */
    public function testSetNumProgramme(): void {

        $obj = new DevisProgLignes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

    /**
     * Tests the setOccurrence() method.
     *
     * @return void
     */
    public function testSetOccurrence(): void {

        $obj = new DevisProgLignes();

        $obj->setOccurrence("occurrence");
        $this->assertEquals("occurrence", $obj->getOccurrence());
    }

    /**
     * Tests the setOct() method.
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new DevisProgLignes();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new DevisProgLignes();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setSamedi() method.
     *
     * @return void
     */
    public function testSetSamedi(): void {

        $obj = new DevisProgLignes();

        $obj->setSamedi(true);
        $this->assertEquals(true, $obj->getSamedi());
    }

    /**
     * Tests the setSep() method.
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new DevisProgLignes();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests the setVendredi() method.
     *
     * @return void
     */
    public function testSetVendredi(): void {

        $obj = new DevisProgLignes();

        $obj->setVendredi(true);
        $this->assertEquals(true, $obj->getVendredi());
    }

    /**
     * Tests the setVitesseReelle() method.
     *
     * @return void
     */
    public function testSetVitesseReelle(): void {

        $obj = new DevisProgLignes();

        $obj->setVitesseReelle(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseReelle());
    }

    /**
     * Tests the setVitesseTheorique() method.
     *
     * @return void
     */
    public function testSetVitesseTheorique(): void {

        $obj = new DevisProgLignes();

        $obj->setVitesseTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseTheorique());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisProgLignes();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeEchelle());
        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDimanche());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJeudi());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getLundi());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getMardi());
        $this->assertNull($obj->getMercredi());
        $this->assertNull($obj->getNoteResultat());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getOccurrence());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getSamedi());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getVendredi());
        $this->assertNull($obj->getVitesseReelle());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
