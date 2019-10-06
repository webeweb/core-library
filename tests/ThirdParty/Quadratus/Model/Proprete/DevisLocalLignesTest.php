<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\DevisLocalLignes;

/**
 * Devis local lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class DevisLocalLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setAou() method.
     *
     * @return void
     */
    public function testSetAou() {

        $obj = new DevisLocalLignes();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests the setAvr() method.
     *
     * @return void
     */
    public function testSetAvr() {

        $obj = new DevisLocalLignes();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new DevisLocalLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new DevisLocalLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new DevisLocalLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeProgramme() method.
     *
     * @return void
     */
    public function testSetCodeProgramme() {

        $obj = new DevisLocalLignes();

        $obj->setCodeProgramme("codeProgramme");
        $this->assertEquals("codeProgramme", $obj->getCodeProgramme());
    }

    /**
     * Tests the setDec() method.
     *
     * @return void
     */
    public function testSetDec() {

        $obj = new DevisLocalLignes();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests the setDesignation() method.
     *
     * @return void
     */
    public function testSetDesignation() {

        $obj = new DevisLocalLignes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Tests the setDimanche() method.
     *
     * @return void
     */
    public function testSetDimanche() {

        $obj = new DevisLocalLignes();

        $obj->setDimanche(true);
        $this->assertEquals(true, $obj->getDimanche());
    }

    /**
     * Tests the setFev() method.
     *
     * @return void
     */
    public function testSetFev() {

        $obj = new DevisLocalLignes();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests the setJan() method.
     *
     * @return void
     */
    public function testSetJan() {

        $obj = new DevisLocalLignes();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests the setJeudi() method.
     *
     * @return void
     */
    public function testSetJeudi() {

        $obj = new DevisLocalLignes();

        $obj->setJeudi(true);
        $this->assertEquals(true, $obj->getJeudi());
    }

    /**
     * Tests the setJuil() method.
     *
     * @return void
     */
    public function testSetJuil() {

        $obj = new DevisLocalLignes();

        $obj->setJuil(true);
        $this->assertEquals(true, $obj->getJuil());
    }

    /**
     * Tests the setJuin() method.
     *
     * @return void
     */
    public function testSetJuin() {

        $obj = new DevisLocalLignes();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests the setLundi() method.
     *
     * @return void
     */
    public function testSetLundi() {

        $obj = new DevisLocalLignes();

        $obj->setLundi(true);
        $this->assertEquals(true, $obj->getLundi());
    }

    /**
     * Tests the setMai() method.
     *
     * @return void
     */
    public function testSetMai() {

        $obj = new DevisLocalLignes();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests the setMar() method.
     *
     * @return void
     */
    public function testSetMar() {

        $obj = new DevisLocalLignes();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests the setMardi() method.
     *
     * @return void
     */
    public function testSetMardi() {

        $obj = new DevisLocalLignes();

        $obj->setMardi(true);
        $this->assertEquals(true, $obj->getMardi());
    }

    /**
     * Tests the setMercredi() method.
     *
     * @return void
     */
    public function testSetMercredi() {

        $obj = new DevisLocalLignes();

        $obj->setMercredi(true);
        $this->assertEquals(true, $obj->getMercredi());
    }

    /**
     * Tests the setNov() method.
     *
     * @return void
     */
    public function testSetNov() {

        $obj = new DevisLocalLignes();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis() {

        $obj = new DevisLocalLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new DevisLocalLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumLigneLocal() method.
     *
     * @return void
     */
    public function testSetNumLigneLocal() {

        $obj = new DevisLocalLignes();

        $obj->setNumLigneLocal(10);
        $this->assertEquals(10, $obj->getNumLigneLocal());
    }

    /**
     * Tests the setOccurrence() method.
     *
     * @return void
     */
    public function testSetOccurrence() {

        $obj = new DevisLocalLignes();

        $obj->setOccurrence("occurrence");
        $this->assertEquals("occurrence", $obj->getOccurrence());
    }

    /**
     * Tests the setOct() method.
     *
     * @return void
     */
    public function testSetOct() {

        $obj = new DevisLocalLignes();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite() {

        $obj = new DevisLocalLignes();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setSamedi() method.
     *
     * @return void
     */
    public function testSetSamedi() {

        $obj = new DevisLocalLignes();

        $obj->setSamedi(true);
        $this->assertEquals(true, $obj->getSamedi());
    }

    /**
     * Tests the setSep() method.
     *
     * @return void
     */
    public function testSetSep() {

        $obj = new DevisLocalLignes();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests the setVendredi() method.
     *
     * @return void
     */
    public function testSetVendredi() {

        $obj = new DevisLocalLignes();

        $obj->setVendredi(true);
        $this->assertEquals(true, $obj->getVendredi());
    }
}
