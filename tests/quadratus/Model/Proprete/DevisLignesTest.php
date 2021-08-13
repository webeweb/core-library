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

use WBW\Library\Quadratus\Model\Proprete\DevisLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisLignesTest extends AbstractTestCase {

    /**
     * Tests the setBatiment() method.
     *
     * @return void
     */
    public function testSetBatiment(): void {

        $obj = new DevisLignes();

        $obj->setBatiment("batiment");
        $this->assertEquals("batiment", $obj->getBatiment());
    }

    /**
     * Tests the setCodeLocal() method.
     *
     * @return void
     */
    public function testSetCodeLocal(): void {

        $obj = new DevisLignes();

        $obj->setCodeLocal("codeLocal");
        $this->assertEquals("codeLocal", $obj->getCodeLocal());
    }

    /**
     * Tests the setCodeRevetement() method.
     *
     * @return void
     */
    public function testSetCodeRevetement(): void {

        $obj = new DevisLignes();

        $obj->setCodeRevetement("codeRevetement");
        $this->assertEquals("codeRevetement", $obj->getCodeRevetement());
    }

    /**
     * Tests the setEtage() method.
     *
     * @return void
     */
    public function testSetEtage(): void {

        $obj = new DevisLignes();

        $obj->setEtage("etage");
        $this->assertEquals("etage", $obj->getEtage());
    }

    /**
     * Tests the setIdentification() method.
     *
     * @return void
     */
    public function testSetIdentification(): void {

        $obj = new DevisLignes();

        $obj->setIdentification("identification");
        $this->assertEquals("identification", $obj->getIdentification());
    }

    /**
     * Tests the setLibelleLocal() method.
     *
     * @return void
     */
    public function testSetLibelleLocal(): void {

        $obj = new DevisLignes();

        $obj->setLibelleLocal("libelleLocal");
        $this->assertEquals("libelleLocal", $obj->getLibelleLocal());
    }

    /**
     * Tests the setLibelleRevetement() method.
     *
     * @return void
     */
    public function testSetLibelleRevetement(): void {

        $obj = new DevisLignes();

        $obj->setLibelleRevetement("libelleRevetement");
        $this->assertEquals("libelleRevetement", $obj->getLibelleRevetement());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DevisLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumProgramme() method.
     *
     * @return void
     */
    public function testSetNumProgramme(): void {

        $obj = new DevisLignes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

    /**
     * Tests the setSolMur() method.
     *
     * @return void
     */
    public function testSetSolMur(): void {

        $obj = new DevisLignes();

        $obj->setSolMur("solMur");
        $this->assertEquals("solMur", $obj->getSolMur());
    }

    /**
     * Tests the setSurface() method.
     *
     * @return void
     */
    public function testSetSurface(): void {

        $obj = new DevisLignes();

        $obj->setSurface(10.092018);
        $this->assertEquals(10.092018, $obj->getSurface());
    }

    /**
     * Tests the setZoneGeographique() method.
     *
     * @return void
     */
    public function testSetZoneGeographique(): void {

        $obj = new DevisLignes();

        $obj->setZoneGeographique("zoneGeographique");
        $this->assertEquals("zoneGeographique", $obj->getZoneGeographique());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisLignes();

        $this->assertNull($obj->getBatiment());
        $this->assertNull($obj->getCodeLocal());
        $this->assertNull($obj->getCodeRevetement());
        $this->assertNull($obj->getEtage());
        $this->assertNull($obj->getIdentification());
        $this->assertNull($obj->getLibelleLocal());
        $this->assertNull($obj->getLibelleRevetement());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getSolMur());
        $this->assertNull($obj->getSurface());
        $this->assertNull($obj->getZoneGeographique());
    }
}
