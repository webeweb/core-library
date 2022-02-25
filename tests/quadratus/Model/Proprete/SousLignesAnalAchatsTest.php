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

use WBW\Library\Quadratus\Model\Proprete\SousLignesAnalAchats;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Sous lignes anal achats test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class SousLignesAnalAchatsTest extends AbstractTestCase {

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests setIndiceLigne()
     *
     * @return void
     */
    public function testSetIndiceLigne(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setIndiceLigne(10);
        $this->assertEquals(10, $obj->getIndiceLigne());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setNoPiece()
     *
     * @return void
     */
    public function testSetNoPiece(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setNoPiece("noPiece");
        $this->assertEquals("noPiece", $obj->getNoPiece());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests setNumeroLigneAnal()
     *
     * @return void
     */
    public function testSetNumeroLigneAnal(): void {

        $obj = new SousLignesAnalAchats();

        $obj->setNumeroLigneAnal(10);
        $this->assertEquals(10, $obj->getNumeroLigneAnal());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SousLignesAnalAchats();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getIndiceLigne());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNoPiece());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getNumeroLigneAnal());
    }
}
