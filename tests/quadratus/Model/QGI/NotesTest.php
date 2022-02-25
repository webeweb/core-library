<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\Notes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Notes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class NotesTest extends AbstractTestCase {

    /**
     * Tests setCodeCategorie()
     *
     * @return void
     */
    public function testSetCodeCategorie(): void {

        $obj = new Notes();

        $obj->setCodeCategorie("codeCategorie");
        $this->assertEquals("codeCategorie", $obj->getCodeCategorie());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Notes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeCollaborateurModif()
     *
     * @return void
     */
    public function testSetCodeCollaborateurModif(): void {

        $obj = new Notes();

        $obj->setCodeCollaborateurModif("codeCollaborateurModif");
        $this->assertEquals("codeCollaborateurModif", $obj->getCodeCollaborateurModif());
    }

    /**
     * Tests setDateCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Notes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Notes();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setDateRappel()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRappel(): void {

        // Set a Date/time mock.
        $dateRappel = new DateTime("2018-09-10");

        $obj = new Notes();

        $obj->setDateRappel($dateRappel);
        $this->assertSame($dateRappel, $obj->getDateRappel());
    }

    /**
     * Tests setEnvoiPostIt()
     *
     * @return void
     */
    public function testSetEnvoiPostIt(): void {

        $obj = new Notes();

        $obj->setEnvoiPostIt(true);
        $this->assertEquals(true, $obj->getEnvoiPostIt());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Notes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new Notes();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Tests setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new Notes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
