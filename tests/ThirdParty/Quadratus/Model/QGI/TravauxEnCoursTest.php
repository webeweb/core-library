<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TravauxEnCours;

/**
 * Travaux en cours model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TravauxEnCoursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TravauxEnCours();

        $this->assertNull($obj->getCataloguee());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateurDest());
        $this->assertNull($obj->getCodeCollaborateurEntrant());
        $this->assertNull($obj->getDateAlerte());
        $this->assertNull($obj->getDateButoir());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDemandeur());
        $this->assertNull($obj->getEnvoiPostIt());
        $this->assertNull($obj->getIDTravail());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getTravailFait());
    }

    /**
     * Tests the setCataloguee() method.
     *
     * @return void
     */
    public function testSetCataloguee() {

        $obj = new TravauxEnCours();

        $obj->setCataloguee(true);
        $this->assertEquals(true, $obj->getCataloguee());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new TravauxEnCours();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest() {

        $obj = new TravauxEnCours();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests the setCodeCollaborateurEntrant() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant() {

        $obj = new TravauxEnCours();

        $obj->setCodeCollaborateurEntrant("codeCollaborateurEntrant");
        $this->assertEquals("codeCollaborateurEntrant", $obj->getCodeCollaborateurEntrant());
    }

    /**
     * Tests the setDateAlerte() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAlerte() {

        $obj = new TravauxEnCours();

        $obj->setDateAlerte(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAlerte());
    }

    /**
     * Tests the setDateButoir() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateButoir() {

        $obj = new TravauxEnCours();

        $obj->setDateButoir(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateButoir());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        $obj = new TravauxEnCours();

        $obj->setDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        $obj = new TravauxEnCours();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setDemandeur() method.
     *
     * @return void
     */
    public function testSetDemandeur() {

        $obj = new TravauxEnCours();

        $obj->setDemandeur("demandeur");
        $this->assertEquals("demandeur", $obj->getDemandeur());
    }

    /**
     * Tests the setEnvoiPostIt() method.
     *
     * @return void
     */
    public function testSetEnvoiPostIt() {

        $obj = new TravauxEnCours();

        $obj->setEnvoiPostIt(true);
        $this->assertEquals(true, $obj->getEnvoiPostIt());
    }

    /**
     * Tests the setIDTravail() method.
     *
     * @return void
     */
    public function testSetIDTravail() {

        $obj = new TravauxEnCours();

        $obj->setIDTravail(10);
        $this->assertEquals(10, $obj->getIDTravail());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new TravauxEnCours();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient() {

        $obj = new TravauxEnCours();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setPieceJointe() method.
     *
     * @return void
     */
    public function testSetPieceJointe() {

        $obj = new TravauxEnCours();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests the setTravailFait() method.
     *
     * @return void
     */
    public function testSetTravailFait() {

        $obj = new TravauxEnCours();

        $obj->setTravailFait(true);
        $this->assertEquals(true, $obj->getTravailFait());
    }
}
