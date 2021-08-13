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
use WBW\Library\Quadratus\Model\QGI\TravauxEnCours;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Travaux en cours test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TravauxEnCoursTest extends AbstractTestCase {

    /**
     * Tests the setCataloguee() method.
     *
     * @return void
     */
    public function testSetCataloguee(): void {

        $obj = new TravauxEnCours();

        $obj->setCataloguee(true);
        $this->assertEquals(true, $obj->getCataloguee());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new TravauxEnCours();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest(): void {

        $obj = new TravauxEnCours();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests the setCodeCollaborateurEntrant() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant(): void {

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
    public function testSetDateAlerte(): void {

        // Set a Date/time mock.
        $dateAlerte = new DateTime("2018-09-10");

        $obj = new TravauxEnCours();

        $obj->setDateAlerte($dateAlerte);
        $this->assertSame($dateAlerte, $obj->getDateAlerte());
    }

    /**
     * Tests the setDateButoir() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateButoir(): void {

        // Set a Date/time mock.
        $dateButoir = new DateTime("2018-09-10");

        $obj = new TravauxEnCours();

        $obj->setDateButoir($dateButoir);
        $this->assertSame($dateButoir, $obj->getDateButoir());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new TravauxEnCours();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new TravauxEnCours();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setDemandeur() method.
     *
     * @return void
     */
    public function testSetDemandeur(): void {

        $obj = new TravauxEnCours();

        $obj->setDemandeur("demandeur");
        $this->assertEquals("demandeur", $obj->getDemandeur());
    }

    /**
     * Tests the setEnvoiPostIt() method.
     *
     * @return void
     */
    public function testSetEnvoiPostIt(): void {

        $obj = new TravauxEnCours();

        $obj->setEnvoiPostIt(true);
        $this->assertEquals(true, $obj->getEnvoiPostIt());
    }

    /**
     * Tests the setIdTravail() method.
     *
     * @return void
     */
    public function testSetIdTravail(): void {

        $obj = new TravauxEnCours();

        $obj->setIdTravail(10);
        $this->assertEquals(10, $obj->getIdTravail());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new TravauxEnCours();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new TravauxEnCours();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setPieceJointe() method.
     *
     * @return void
     */
    public function testSetPieceJointe(): void {

        $obj = new TravauxEnCours();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests the setTravailFait() method.
     *
     * @return void
     */
    public function testSetTravailFait(): void {

        $obj = new TravauxEnCours();

        $obj->setTravailFait(true);
        $this->assertEquals(true, $obj->getTravailFait());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

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
        $this->assertNull($obj->getIdTravail());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getTravailFait());
    }
}
