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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersDescriptifLocaux;

/**
 * Chantiers descriptif locaux model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersDescriptifLocauxTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChantiersDescriptifLocaux();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeCritere1());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getFamilleElements());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleCritere1());
        $this->assertNull($obj->getNiveauNoeud());
        $this->assertNull($obj->getNoeudLocal());
        $this->assertNull($obj->getNoteObjectif());
        $this->assertNull($obj->getNumeroNoeud());
        $this->assertNull($obj->getPoste());
        $this->assertNull($obj->getUniqIDBlocage());
        $this->assertNull($obj->getUniqIdNoeud());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeCritere1() method.
     *
     * @return void
     */
    public function testSetCodeCritere1() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCodeCritere1("codeCritere1");
        $this->assertEquals("codeCritere1", $obj->getCodeCritere1());
    }

    /**
     * Tests the setCoefficient() method.
     *
     * @return void
     */
    public function testSetCoefficient() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests the setDateTransfert() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfert() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setDateTransfert(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfert());
    }

    /**
     * Tests the setFamilleElements() method.
     *
     * @return void
     */
    public function testSetFamilleElements() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setFamilleElements("familleElements");
        $this->assertEquals("familleElements", $obj->getFamilleElements());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleCritere1() method.
     *
     * @return void
     */
    public function testSetLibelleCritere1() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setLibelleCritere1("libelleCritere1");
        $this->assertEquals("libelleCritere1", $obj->getLibelleCritere1());
    }

    /**
     * Tests the setNiveauNoeud() method.
     *
     * @return void
     */
    public function testSetNiveauNoeud() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNiveauNoeud(10);
        $this->assertEquals(10, $obj->getNiveauNoeud());
    }

    /**
     * Tests the setNoeudLocal() method.
     *
     * @return void
     */
    public function testSetNoeudLocal() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNoeudLocal(true);
        $this->assertEquals(true, $obj->getNoeudLocal());
    }

    /**
     * Tests the setNoteObjectif() method.
     *
     * @return void
     */
    public function testSetNoteObjectif() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNoteObjectif(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteObjectif());
    }

    /**
     * Tests the setNumeroNoeud() method.
     *
     * @return void
     */
    public function testSetNumeroNoeud() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setNumeroNoeud(10);
        $this->assertEquals(10, $obj->getNumeroNoeud());
    }

    /**
     * Tests the setPoste() method.
     *
     * @return void
     */
    public function testSetPoste() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setPoste("poste");
        $this->assertEquals("poste", $obj->getPoste());
    }

    /**
     * Tests the setUniqIDBlocage() method.
     *
     * @return void
     */
    public function testSetUniqIDBlocage() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setUniqIDBlocage("uniqIDBlocage");
        $this->assertEquals("uniqIDBlocage", $obj->getUniqIDBlocage());
    }

    /**
     * Tests the setUniqIdNoeud() method.
     *
     * @return void
     */
    public function testSetUniqIdNoeud() {

        $obj = new ChantiersDescriptifLocaux();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }
}
