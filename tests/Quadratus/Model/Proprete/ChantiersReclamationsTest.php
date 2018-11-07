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

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\ChantiersReclamations;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers reclamations model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ChantiersReclamationsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChantiersReclamations();

        $this->assertNull($obj->getAlerte());
        $this->assertNull($obj->getArchivee());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCritereListe1());
        $this->assertNull($obj->getCritereListe2());
        $this->assertNull($obj->getDateDebutDoc());
        $this->assertNull($obj->getDateFinDoc());
        $this->assertNull($obj->getDateReclam());
        $this->assertNull($obj->getDateTraitement());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauReclam());
        $this->assertNull($obj->getNumeroPJ());
        $this->assertNull($obj->getNumeroReclam());
        $this->assertNull($obj->getReclamation());
        $this->assertNull($obj->getResultat());
        $this->assertNull($obj->getTypeReclam());
    }

    /**
     * Tests the setAlerte() method.
     *
     * @return void
     */
    public function testSetAlerte() {

        $obj = new ChantiersReclamations();

        $obj->setAlerte(true);
        $this->assertEquals(true, $obj->getAlerte());
    }

    /**
     * Tests the setArchivee() method.
     *
     * @return void
     */
    public function testSetArchivee() {

        $obj = new ChantiersReclamations();

        $obj->setArchivee(true);
        $this->assertEquals(true, $obj->getArchivee());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new ChantiersReclamations();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new ChantiersReclamations();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new ChantiersReclamations();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new ChantiersReclamations();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCritereListe1() method.
     *
     * @return void
     */
    public function testSetCritereListe1() {

        $obj = new ChantiersReclamations();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }

    /**
     * Tests the setCritereListe2() method.
     *
     * @return void
     */
    public function testSetCritereListe2() {

        $obj = new ChantiersReclamations();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }

    /**
     * Tests the setDateDebutDoc() method.
     *
     * @return void
     */
    public function testSetDateDebutDoc() {

        $obj = new ChantiersReclamations();

        $obj->setDateDebutDoc(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutDoc());
    }

    /**
     * Tests the setDateFinDoc() method.
     *
     * @return void
     */
    public function testSetDateFinDoc() {

        $obj = new ChantiersReclamations();

        $obj->setDateFinDoc(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinDoc());
    }

    /**
     * Tests the setDateReclam() method.
     *
     * @return void
     */
    public function testSetDateReclam() {

        $obj = new ChantiersReclamations();

        $obj->setDateReclam(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReclam());
    }

    /**
     * Tests the setDateTraitement() method.
     *
     * @return void
     */
    public function testSetDateTraitement() {

        $obj = new ChantiersReclamations();

        $obj->setDateTraitement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTraitement());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new ChantiersReclamations();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Tests the setNiveauReclam() method.
     *
     * @return void
     */
    public function testSetNiveauReclam() {

        $obj = new ChantiersReclamations();

        $obj->setNiveauReclam("niveauReclam");
        $this->assertEquals("niveauReclam", $obj->getNiveauReclam());
    }

    /**
     * Tests the setNumeroPJ() method.
     *
     * @return void
     */
    public function testSetNumeroPJ() {

        $obj = new ChantiersReclamations();

        $obj->setNumeroPJ(10);
        $this->assertEquals(10, $obj->getNumeroPJ());
    }

    /**
     * Tests the setNumeroReclam() method.
     *
     * @return void
     */
    public function testSetNumeroReclam() {

        $obj = new ChantiersReclamations();

        $obj->setNumeroReclam(10);
        $this->assertEquals(10, $obj->getNumeroReclam());
    }

    /**
     * Tests the setReclamation() method.
     *
     * @return void
     */
    public function testSetReclamation() {

        $obj = new ChantiersReclamations();

        $obj->setReclamation("reclamation");
        $this->assertEquals("reclamation", $obj->getReclamation());
    }

    /**
     * Tests the setResultat() method.
     *
     * @return void
     */
    public function testSetResultat() {

        $obj = new ChantiersReclamations();

        $obj->setResultat("resultat");
        $this->assertEquals("resultat", $obj->getResultat());
    }

    /**
     * Tests the setTypeReclam() method.
     *
     * @return void
     */
    public function testSetTypeReclam() {

        $obj = new ChantiersReclamations();

        $obj->setTypeReclam("typeReclam");
        $this->assertEquals("typeReclam", $obj->getTypeReclam());
    }

}
