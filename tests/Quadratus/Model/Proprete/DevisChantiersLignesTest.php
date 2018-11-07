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

use WBW\Library\Core\Quadratus\Model\Proprete\DevisChantiersLignes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Devis chantiers lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class DevisChantiersLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DevisChantiersLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeLocalType());
        $this->assertNull($obj->getCodeRevetement());
        $this->assertNull($obj->getMontantHT());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getSolMur());
        $this->assertNull($obj->getSurface());
        $this->assertNull($obj->getUniqIdNoeud());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new DevisChantiersLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new DevisChantiersLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new DevisChantiersLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeLocalType() method.
     *
     * @return void
     */
    public function testSetCodeLocalType() {

        $obj = new DevisChantiersLignes();

        $obj->setCodeLocalType("codeLocalType");
        $this->assertEquals("codeLocalType", $obj->getCodeLocalType());
    }

    /**
     * Tests the setCodeRevetement() method.
     *
     * @return void
     */
    public function testSetCodeRevetement() {

        $obj = new DevisChantiersLignes();

        $obj->setCodeRevetement("codeRevetement");
        $this->assertEquals("codeRevetement", $obj->getCodeRevetement());
    }

    /**
     * Tests the setMontantHT() method.
     *
     * @return void
     */
    public function testSetMontantHT() {

        $obj = new DevisChantiersLignes();

        $obj->setMontantHT(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHT());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis() {

        $obj = new DevisChantiersLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new DevisChantiersLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setSolMur() method.
     *
     * @return void
     */
    public function testSetSolMur() {

        $obj = new DevisChantiersLignes();

        $obj->setSolMur("solMur");
        $this->assertEquals("solMur", $obj->getSolMur());
    }

    /**
     * Tests the setSurface() method.
     *
     * @return void
     */
    public function testSetSurface() {

        $obj = new DevisChantiersLignes();

        $obj->setSurface(10.092018);
        $this->assertEquals(10.092018, $obj->getSurface());
    }

    /**
     * Tests the setUniqIdNoeud() method.
     *
     * @return void
     */
    public function testSetUniqIdNoeud() {

        $obj = new DevisChantiersLignes();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }

}
