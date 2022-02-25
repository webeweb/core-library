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
use WBW\Library\Quadratus\Model\QGI\HistoriqueTravaux;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historique travaux test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class HistoriqueTravauxTest extends AbstractTestCase {

    /**
     * Tests setCataloguee()
     *
     * @return void
     */
    public function testSetCataloguee(): void {

        $obj = new HistoriqueTravaux();

        $obj->setCataloguee(true);
        $this->assertEquals(true, $obj->getCataloguee());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new HistoriqueTravaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaborateurClot()
     *
     * @return void
     */
    public function testSetCodeCollaborateurClot(): void {

        $obj = new HistoriqueTravaux();

        $obj->setCodeCollaborateurClot("codeCollaborateurClot");
        $this->assertEquals("codeCollaborateurClot", $obj->getCodeCollaborateurClot());
    }

    /**
     * Tests setCodeCollaborateurDest()
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest(): void {

        $obj = new HistoriqueTravaux();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests setCodeCollaborateurEntrant()
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant(): void {

        $obj = new HistoriqueTravaux();

        $obj->setCodeCollaborateurEntrant("codeCollaborateurEntrant");
        $this->assertEquals("codeCollaborateurEntrant", $obj->getCodeCollaborateurEntrant());
    }

    /**
     * Tests setDateAlerte()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAlerte(): void {

        // Set a Date/time mock.
        $dateAlerte = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateAlerte($dateAlerte);
        $this->assertSame($dateAlerte, $obj->getDateAlerte());
    }

    /**
     * Tests setDateButoir()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateButoir(): void {

        // Set a Date/time mock.
        $dateButoir = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateButoir($dateButoir);
        $this->assertSame($dateButoir, $obj->getDateButoir());
    }

    /**
     * Tests setDateEntree()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests setDateSortie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new HistoriqueTravaux();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests setDemandeur()
     *
     * @return void
     */
    public function testSetDemandeur(): void {

        $obj = new HistoriqueTravaux();

        $obj->setDemandeur("demandeur");
        $this->assertEquals("demandeur", $obj->getDemandeur());
    }

    /**
     * Tests setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new HistoriqueTravaux();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests setIdTravail()
     *
     * @return void
     */
    public function testSetIdTravail(): void {

        $obj = new HistoriqueTravaux();

        $obj->setIdTravail(10);
        $this->assertEquals(10, $obj->getIdTravail());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new HistoriqueTravaux();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setNomClient()
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new HistoriqueTravaux();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests setPieceJointe()
     *
     * @return void
     */
    public function testSetPieceJointe(): void {

        $obj = new HistoriqueTravaux();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests setReponse()
     *
     * @return void
     */
    public function testSetReponse(): void {

        $obj = new HistoriqueTravaux();

        $obj->setReponse("reponse");
        $this->assertEquals("reponse", $obj->getReponse());
    }

    /**
     * Tests setTravailFait()
     *
     * @return void
     */
    public function testSetTravailFait(): void {

        $obj = new HistoriqueTravaux();

        $obj->setTravailFait(true);
        $this->assertEquals(true, $obj->getTravailFait());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
