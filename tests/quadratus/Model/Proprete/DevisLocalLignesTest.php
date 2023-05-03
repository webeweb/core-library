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
     * Test setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new DevisLocalLignes();

        $obj->setAou(true);
        $this->assertTrue($obj->getAou());
    }

    /**
     * Test setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new DevisLocalLignes();

        $obj->setAvr(true);
        $this->assertTrue($obj->getAvr());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeProgramme()
     *
     * @return void
     */
    public function testSetCodeProgramme(): void {

        $obj = new DevisLocalLignes();

        $obj->setCodeProgramme("codeProgramme");
        $this->assertEquals("codeProgramme", $obj->getCodeProgramme());
    }

    /**
     * Test setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new DevisLocalLignes();

        $obj->setDec(true);
        $this->assertTrue($obj->getDec());
    }

    /**
     * Test setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new DevisLocalLignes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Test setDimanche()
     *
     * @return void
     */
    public function testSetDimanche(): void {

        $obj = new DevisLocalLignes();

        $obj->setDimanche(true);
        $this->assertTrue($obj->getDimanche());
    }

    /**
     * Test setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new DevisLocalLignes();

        $obj->setFev(true);
        $this->assertTrue($obj->getFev());
    }

    /**
     * Test setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new DevisLocalLignes();

        $obj->setJan(true);
        $this->assertTrue($obj->getJan());
    }

    /**
     * Test setJeudi()
     *
     * @return void
     */
    public function testSetJeudi(): void {

        $obj = new DevisLocalLignes();

        $obj->setJeudi(true);
        $this->assertTrue($obj->getJeudi());
    }

    /**
     * Test setJuil()
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new DevisLocalLignes();

        $obj->setJuil(true);
        $this->assertTrue($obj->getJuil());
    }

    /**
     * Test setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new DevisLocalLignes();

        $obj->setJuin(true);
        $this->assertTrue($obj->getJuin());
    }

    /**
     * Test setLundi()
     *
     * @return void
     */
    public function testSetLundi(): void {

        $obj = new DevisLocalLignes();

        $obj->setLundi(true);
        $this->assertTrue($obj->getLundi());
    }

    /**
     * Test setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new DevisLocalLignes();

        $obj->setMai(true);
        $this->assertTrue($obj->getMai());
    }

    /**
     * Test setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new DevisLocalLignes();

        $obj->setMar(true);
        $this->assertTrue($obj->getMar());
    }

    /**
     * Test setMardi()
     *
     * @return void
     */
    public function testSetMardi(): void {

        $obj = new DevisLocalLignes();

        $obj->setMardi(true);
        $this->assertTrue($obj->getMardi());
    }

    /**
     * Test setMercredi()
     *
     * @return void
     */
    public function testSetMercredi(): void {

        $obj = new DevisLocalLignes();

        $obj->setMercredi(true);
        $this->assertTrue($obj->getMercredi());
    }

    /**
     * Test setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new DevisLocalLignes();

        $obj->setNov(true);
        $this->assertTrue($obj->getNov());
    }

    /**
     * Test setNumDevis()
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisLocalLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DevisLocalLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumLigneLocal()
     *
     * @return void
     */
    public function testSetNumLigneLocal(): void {

        $obj = new DevisLocalLignes();

        $obj->setNumLigneLocal(10);
        $this->assertEquals(10, $obj->getNumLigneLocal());
    }

    /**
     * Test setOccurrence()
     *
     * @return void
     */
    public function testSetOccurrence(): void {

        $obj = new DevisLocalLignes();

        $obj->setOccurrence("occurrence");
        $this->assertEquals("occurrence", $obj->getOccurrence());
    }

    /**
     * Test setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new DevisLocalLignes();

        $obj->setOct(true);
        $this->assertTrue($obj->getOct());
    }

    /**
     * Test setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new DevisLocalLignes();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Test setSamedi()
     *
     * @return void
     */
    public function testSetSamedi(): void {

        $obj = new DevisLocalLignes();

        $obj->setSamedi(true);
        $this->assertTrue($obj->getSamedi());
    }

    /**
     * Test setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new DevisLocalLignes();

        $obj->setSep(true);
        $this->assertTrue($obj->getSep());
    }

    /**
     * Test setVendredi()
     *
     * @return void
     */
    public function testSetVendredi(): void {

        $obj = new DevisLocalLignes();

        $obj->setVendredi(true);
        $this->assertTrue($obj->getVendredi());
    }

    /**
     * Test __construct()
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
