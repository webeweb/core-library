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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\HistoriqueTravaux;

/**
 * Historique travaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class HistoriqueTravauxTest extends AbstractTestCase {

    /**
     * Tests the setCataloguee() method.
     *
     * @return void
     */
    public function testSetCataloguee() {

        $obj = new HistoriqueTravaux();

        $obj->setCataloguee(true);
        $this->assertEquals(true, $obj->getCataloguee());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new HistoriqueTravaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateurClot() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurClot() {

        $obj = new HistoriqueTravaux();

        $obj->setCodeCollaborateurClot("codeCollaborateurClot");
        $this->assertEquals("codeCollaborateurClot", $obj->getCodeCollaborateurClot());
    }

    /**
     * Tests the setCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest() {

        $obj = new HistoriqueTravaux();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests the setCodeCollaborateurEntrant() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant() {

        $obj = new HistoriqueTravaux();

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

        // Set a Date/time mock.
        $dateAlerte = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateAlerte($dateAlerte);
        $this->assertSame($dateAlerte, $obj->getDateAlerte());
    }

    /**
     * Tests the setDateButoir() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateButoir() {

        // Set a Date/time mock.
        $dateButoir = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateButoir($dateButoir);
        $this->assertSame($dateButoir, $obj->getDateButoir());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests the setDemandeur() method.
     *
     * @return void
     */
    public function testSetDemandeur() {

        $obj = new HistoriqueTravaux();

        $obj->setDemandeur("demandeur");
        $this->assertEquals("demandeur", $obj->getDemandeur());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree() {

        $obj = new HistoriqueTravaux();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests the setIdTravail() method.
     *
     * @return void
     */
    public function testSetIdTravail() {

        $obj = new HistoriqueTravaux();

        $obj->setIdTravail(10);
        $this->assertEquals(10, $obj->getIdTravail());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new HistoriqueTravaux();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient() {

        $obj = new HistoriqueTravaux();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setPieceJointe() method.
     *
     * @return void
     */
    public function testSetPieceJointe() {

        $obj = new HistoriqueTravaux();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests the setReponse() method.
     *
     * @return void
     */
    public function testSetReponse() {

        $obj = new HistoriqueTravaux();

        $obj->setReponse("reponse");
        $this->assertEquals("reponse", $obj->getReponse());
    }

    /**
     * Tests the setTravailFait() method.
     *
     * @return void
     */
    public function testSetTravailFait() {

        $obj = new HistoriqueTravaux();

        $obj->setTravailFait(true);
        $this->assertEquals(true, $obj->getTravailFait());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new HistoriqueTravaux();

        $this->assertNull($obj->getCataloguee());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateurClot());
        $this->assertNull($obj->getCodeCollaborateurDest());
        $this->assertNull($obj->getCodeCollaborateurEntrant());
        $this->assertNull($obj->getDateAlerte());
        $this->assertNull($obj->getDateButoir());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDemandeur());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getIdTravail());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getReponse());
        $this->assertNull($obj->getTravailFait());
    }
}
