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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\SousLignesAnalytiques;

/**
 * Sous lignes analytiques test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class SousLignesAnalytiquesTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new SousLignesAnalytiques();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new SousLignesAnalytiques();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNumeroDocument() method.
     *
     * @return void
     */
    public function testSetNumeroDocument() {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroDocument("numeroDocument");
        $this->assertEquals("numeroDocument", $obj->getNumeroDocument());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setNumeroLigneAnal() method.
     *
     * @return void
     */
    public function testSetNumeroLigneAnal() {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroLigneAnal(10);
        $this->assertEquals(10, $obj->getNumeroLigneAnal());
    }

    /**
     * Tests the setNumeroSousLigneCptHt() method.
     *
     * @return void
     */
    public function testSetNumeroSousLigneCptHt() {

        $obj = new SousLignesAnalytiques();

        $obj->setNumeroSousLigneCptHt(10);
        $this->assertEquals(10, $obj->getNumeroSousLigneCptHt());
    }

    /**
     * Tests the setTypeDocument() method.
     *
     * @return void
     */
    public function testSetTypeDocument() {

        $obj = new SousLignesAnalytiques();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
