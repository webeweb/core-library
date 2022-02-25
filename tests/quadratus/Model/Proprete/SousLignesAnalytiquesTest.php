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

use WBW\Library\Quadratus\Model\Proprete\SousLignesAnalytiques;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Sous lignes analytiques test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class SousLignesAnalytiquesTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setNumeroDocument()
     *
     * @return void
     */
    public function testSetNumeroDocument(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroDocument("numeroDocument");
        $this->assertEquals("numeroDocument", $obj->getNumeroDocument());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests setNumeroLigneAnal()
     *
     * @return void
     */
    public function testSetNumeroLigneAnal(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroLigneAnal(10);
        $this->assertEquals(10, $obj->getNumeroLigneAnal());
    }

    /**
     * Tests setNumeroSousLigneCptHt()
     *
     * @return void
     */
    public function testSetNumeroSousLigneCptHt(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroSousLigneCptHt(10);
        $this->assertEquals(10, $obj->getNumeroSousLigneCptHt());
    }

    /**
     * Tests setTypeDocument()
     *
     * @return void
     */
    public function testSetTypeDocument(): void {

        $obj = new SousLignesAnalytiques();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SousLignesAnalytiques();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumeroDocument());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getNumeroLigneAnal());
        $this->assertNull($obj->getNumeroSousLigneCptHt());
        $this->assertNull($obj->getTypeDocument());
    }
}
