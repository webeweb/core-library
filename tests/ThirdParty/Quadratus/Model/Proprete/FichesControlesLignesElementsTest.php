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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FichesControlesLignesElements;

/**
 * Fiches controles lignes elements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesLignesElementsTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeElement() method.
     *
     * @return void
     */
    public function testSetCodeElement() {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeElement("codeElement");
        $this->assertEquals("codeElement", $obj->getCodeElement());
    }

    /**
     * Tests the setCoefficient() method.
     *
     * @return void
     */
    public function testSetCoefficient() {

        $obj = new FichesControlesLignesElements();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests the setMiseEnConformite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMiseEnConformite() {

        // Set a Date/time mock.
        $miseEnConformite = new DateTime("2018-09-10");

        $obj = new FichesControlesLignesElements();

        $obj->setMiseEnConformite($miseEnConformite);
        $this->assertSame($miseEnConformite, $obj->getMiseEnConformite());
    }

    /**
     * Tests the setNiveauNoeud() method.
     *
     * @return void
     */
    public function testSetNiveauNoeud() {

        $obj = new FichesControlesLignesElements();

        $obj->setNiveauNoeud(10);
        $this->assertEquals(10, $obj->getNiveauNoeud());
    }

    /**
     * Tests the setNote() method.
     *
     * @return void
     */
    public function testSetNote() {

        $obj = new FichesControlesLignesElements();

        $obj->setNote(10);
        $this->assertEquals(10, $obj->getNote());
    }

    /**
     * Tests the setNumeroFiche() method.
     *
     * @return void
     */
    public function testSetNumeroFiche() {

        $obj = new FichesControlesLignesElements();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }

    /**
     * Tests the setNumeroNoeud() method.
     *
     * @return void
     */
    public function testSetNumeroNoeud() {

        $obj = new FichesControlesLignesElements();

        $obj->setNumeroNoeud(10);
        $this->assertEquals(10, $obj->getNumeroNoeud());
    }

    /**
     * Tests the setTypeElement() method.
     *
     * @return void
     */
    public function testSetTypeElement() {

        $obj = new FichesControlesLignesElements();

        $obj->setTypeElement("typeElement");
        $this->assertEquals("typeElement", $obj->getTypeElement());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new FichesControlesLignesElements();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeElement());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getMiseEnConformite());
        $this->assertNull($obj->getNiveauNoeud());
        $this->assertNull($obj->getNote());
        $this->assertNull($obj->getNumeroFiche());
        $this->assertNull($obj->getNumeroNoeud());
        $this->assertNull($obj->getTypeElement());
    }
}
