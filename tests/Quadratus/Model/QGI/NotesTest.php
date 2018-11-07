<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\Notes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Notes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class NotesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Notes();

        $this->assertNull($obj->getCodeCategorie());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeCollaborateurModif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateRappel());
        $this->assertNull($obj->getEnvoiPostIt());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getTitre());
    }

    /**
     * Tests the setCodeCategorie() method.
     *
     * @return void
     */
    public function testSetCodeCategorie() {

        $obj = new Notes();

        $obj->setCodeCategorie("codeCategorie");
        $this->assertEquals("codeCategorie", $obj->getCodeCategorie());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new Notes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeCollaborateurModif() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurModif() {

        $obj = new Notes();

        $obj->setCodeCollaborateurModif("codeCollaborateurModif");
        $this->assertEquals("codeCollaborateurModif", $obj->getCodeCollaborateurModif());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     */
    public function testSetDateCreation() {

        $obj = new Notes();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     */
    public function testSetDateModification() {

        $obj = new Notes();

        $obj->setDateModification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
    }

    /**
     * Tests the setDateRappel() method.
     *
     * @return void
     */
    public function testSetDateRappel() {

        $obj = new Notes();

        $obj->setDateRappel(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRappel());
    }

    /**
     * Tests the setEnvoiPostIt() method.
     *
     * @return void
     */
    public function testSetEnvoiPostIt() {

        $obj = new Notes();

        $obj->setEnvoiPostIt(true);
        $this->assertEquals(true, $obj->getEnvoiPostIt());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Notes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new Notes();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new Notes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

}
