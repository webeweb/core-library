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

use WBW\Library\Quadratus\Model\Proprete\SousLignesComptaGene;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Sous lignes compta gene test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class SousLignesComptaGeneTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new SousLignesComptaGene();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new SousLignesComptaGene();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new SousLignesComptaGene();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new SousLignesComptaGene();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setIntituleCompte() method.
     *
     * @return void
     */
    public function testSetIntituleCompte(): void {

        $obj = new SousLignesComptaGene();

        $obj->setIntituleCompte("intituleCompte");
        $this->assertEquals("intituleCompte", $obj->getIntituleCompte());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new SousLignesComptaGene();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new SousLignesComptaGene();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDocument() method.
     *
     * @return void
     */
    public function testSetNumeroDocument(): void {

        $obj = new SousLignesComptaGene();

        $obj->setNumeroDocument("numeroDocument");
        $this->assertEquals("numeroDocument", $obj->getNumeroDocument());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new SousLignesComptaGene();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setNumeroSousLigne() method.
     *
     * @return void
     */
    public function testSetNumeroSousLigne(): void {

        $obj = new SousLignesComptaGene();

        $obj->setNumeroSousLigne(10);
        $this->assertEquals(10, $obj->getNumeroSousLigne());
    }

    /**
     * Tests the setTypeDocument() method.
     *
     * @return void
     */
    public function testSetTypeDocument(): void {

        $obj = new SousLignesComptaGene();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SousLignesComptaGene();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getIntituleCompte());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDocument());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getNumeroSousLigne());
        $this->assertNull($obj->getTypeDocument());
    }
}
