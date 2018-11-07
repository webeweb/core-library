<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use WBW\Library\Core\Quadratus\Model\Proprete\FichesControlesLignesEmployes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fiches controles lignes employes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class FichesControlesLignesEmployesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesControlesLignesEmployes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeRemplacant());
        $this->assertNull($obj->getNumeroFiche());
        $this->assertNull($obj->getPoste());
        $this->assertNull($obj->getRemarque());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeRemplacant() method.
     *
     * @return void
     */
    public function testSetCodeRemplacant() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setCodeRemplacant("codeRemplacant");
        $this->assertEquals("codeRemplacant", $obj->getCodeRemplacant());
    }

    /**
     * Tests the setNumeroFiche() method.
     *
     * @return void
     */
    public function testSetNumeroFiche() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }

    /**
     * Tests the setPoste() method.
     *
     * @return void
     */
    public function testSetPoste() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setPoste("poste");
        $this->assertEquals("poste", $obj->getPoste());
    }

    /**
     * Tests the setRemarque() method.
     *
     * @return void
     */
    public function testSetRemarque() {

        $obj = new FichesControlesLignesEmployes();

        $obj->setRemarque("remarque");
        $this->assertEquals("remarque", $obj->getRemarque());
    }

}
