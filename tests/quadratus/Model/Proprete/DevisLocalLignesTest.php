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

use WBW\Library\Quadratus\Model\Proprete\DevisLocalLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis local lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisLocalLignesTest extends AbstractTestCase {

    /**
     * Tests setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new DevisLocalLignes();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new DevisLocalLignes();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeProgramme()
     *
     * @return void
     */
    public function testSetCodeProgramme(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeProgramme("codeProgramme");
        $this->assertEquals("codeProgramme", $obj->getCodeProgramme());
    }

    /**
     * Tests setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new DevisLocalLignes();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new DevisLocalLignes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests setDimanche()
     *
     * @return void
     */
    public function testSetDimanche(): void {

        $obj = new DevisLocalLignes();

        $obj->setDimanche(true);
        $this->assertEquals(true, $obj->getDimanche());
    }

    /**
     * Tests setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new DevisLocalLignes();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new DevisLocalLignes();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests setJeudi()
     *
     * @return void
     */
    public function testSetJeudi(): void {

        $obj = new DevisLocalLignes();

        $obj->setJeudi(true);
        $this->assertEquals(true, $obj->getJeudi());
    }

    /**
     * Tests setJuil()
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new DevisLocalLignes();

        $obj->setJuil(true);
        $this->assertEquals(true, $obj->getJuil());
    }

    /**
     * Tests setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new DevisLocalLignes();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests setLundi()
     *
     * @return void
     */
    public function testSetLundi(): void {

        $obj = new DevisLocalLignes();

        $obj->setLundi(true);
        $this->assertEquals(true, $obj->getLundi());
    }

    /**
     * Tests setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new DevisLocalLignes();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new DevisLocalLignes();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests setMardi()
     *
     * @return void
     */
    public function testSetMardi(): void {

        $obj = new DevisLocalLignes();

        $obj->setMardi(true);
        $this->assertEquals(true, $obj->getMardi());
    }

    /**
     * Tests setMercredi()
     *
     * @return void
     */
    public function testSetMercredi(): void {

        $obj = new DevisLocalLignes();

        $obj->setMercredi(true);
        $this->assertEquals(true, $obj->getMercredi());
    }

    /**
     * Tests setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new DevisLocalLignes();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests setNumDevis()
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisLocalLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DevisLocalLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setNumLigneLocal()
     *
     * @return void
     */
    public function testSetNumLigneLocal(): void {

        $obj = new DevisLocalLignes();

        $obj->setNumLigneLocal(10);
        $this->assertEquals(10, $obj->getNumLigneLocal());
    }

    /**
     * Tests setOccurrence()
     *
     * @return void
     */
    public function testSetOccurrence(): void {

        $obj = new DevisLocalLignes();

        $obj->setOccurrence("occurrence");
        $this->assertEquals("occurrence", $obj->getOccurrence());
    }

    /**
     * Tests setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new DevisLocalLignes();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new DevisLocalLignes();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests setSamedi()
     *
     * @return void
     */
    public function testSetSamedi(): void {

        $obj = new DevisLocalLignes();

        $obj->setSamedi(true);
        $this->assertEquals(true, $obj->getSamedi());
    }

    /**
     * Tests setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new DevisLocalLignes();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests setVendredi()
     *
     * @return void
     */
    public function testSetVendredi(): void {

        $obj = new DevisLocalLignes();

        $obj->setVendredi(true);
        $this->assertEquals(true, $obj->getVendredi());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisLocalLignes();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeProgramme());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDesignation());
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
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumLigneLocal());
        $this->assertNull($obj->getOccurrence());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getSamedi());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getVendredi());
    }
}
