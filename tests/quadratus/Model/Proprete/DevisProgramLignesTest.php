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

use WBW\Library\Quadratus\Model\Proprete\DevisProgramLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis program lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisProgramLignesTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new DevisProgramLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new DevisProgramLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisProgramLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEchelle() method.
     *
     * @return void
     */
    public function testSetCodeEchelle(): void {

        $obj = new DevisProgramLignes();

        $obj->setCodeEchelle("codeEchelle");
        $this->assertEquals("codeEchelle", $obj->getCodeEchelle());
    }

    /**
     * Tests the setCodeOperation() method.
     *
     * @return void
     */
    public function testSetCodeOperation(): void {

        $obj = new DevisProgramLignes();

        $obj->setCodeOperation("codeOperation");
        $this->assertEquals("codeOperation", $obj->getCodeOperation());
    }

    /**
     * Tests the setCodeProgramme() method.
     *
     * @return void
     */
    public function testSetCodeProgramme(): void {

        $obj = new DevisProgramLignes();

        $obj->setCodeProgramme("codeProgramme");
        $this->assertEquals("codeProgramme", $obj->getCodeProgramme());
    }

    /**
     * Tests the setCoefficient() method.
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new DevisProgramLignes();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests the setNoteResultat() method.
     *
     * @return void
     */
    public function testSetNoteResultat(): void {

        $obj = new DevisProgramLignes();

        $obj->setNoteResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteResultat());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisProgramLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DevisProgramLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumLigneProg() method.
     *
     * @return void
     */
    public function testSetNumLigneProg(): void {

        $obj = new DevisProgramLignes();

        $obj->setNumLigneProg(10);
        $this->assertEquals(10, $obj->getNumLigneProg());
    }

    /**
     * Tests the setVitesseTheorique() method.
     *
     * @return void
     */
    public function testSetVitesseTheorique(): void {

        $obj = new DevisProgramLignes();

        $obj->setVitesseTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseTheorique());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisProgramLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEchelle());
        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCodeProgramme());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getNoteResultat());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumLigneProg());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
