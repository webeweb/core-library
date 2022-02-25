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

use WBW\Library\Quadratus\Model\Proprete\DevisChantiersLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis chantiers lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisChantiersLignesTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new DevisChantiersLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new DevisChantiersLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisChantiersLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeLocalType()
     *
     * @return void
     */
    public function testSetCodeLocalType(): void {

        $obj = new DevisChantiersLignes();

        $obj->setCodeLocalType("codeLocalType");
        $this->assertEquals("codeLocalType", $obj->getCodeLocalType());
    }

    /**
     * Tests setCodeRevetement()
     *
     * @return void
     */
    public function testSetCodeRevetement(): void {

        $obj = new DevisChantiersLignes();

        $obj->setCodeRevetement("codeRevetement");
        $this->assertEquals("codeRevetement", $obj->getCodeRevetement());
    }

    /**
     * Tests setMontantHt()
     *
     * @return void
     */
    public function testSetMontantHt(): void {

        $obj = new DevisChantiersLignes();

        $obj->setMontantHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHt());
    }

    /**
     * Tests setNumDevis()
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisChantiersLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DevisChantiersLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setSolMur()
     *
     * @return void
     */
    public function testSetSolMur(): void {

        $obj = new DevisChantiersLignes();

        $obj->setSolMur("solMur");
        $this->assertEquals("solMur", $obj->getSolMur());
    }

    /**
     * Tests setSurface()
     *
     * @return void
     */
    public function testSetSurface(): void {

        $obj = new DevisChantiersLignes();

        $obj->setSurface(10.092018);
        $this->assertEquals(10.092018, $obj->getSurface());
    }

    /**
     * Tests setUniqIdNoeud()
     *
     * @return void
     */
    public function testSetUniqIdNoeud(): void {

        $obj = new DevisChantiersLignes();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisChantiersLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeLocalType());
        $this->assertNull($obj->getCodeRevetement());
        $this->assertNull($obj->getMontantHt());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getSolMur());
        $this->assertNull($obj->getSurface());
        $this->assertNull($obj->getUniqIdNoeud());
    }
}
