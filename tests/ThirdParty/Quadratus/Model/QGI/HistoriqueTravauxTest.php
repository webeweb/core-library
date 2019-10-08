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
 * Historique travaux model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class HistoriqueTravauxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getIDTravail());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getReponse());
        $this->assertNull($obj->getTravailFait());
    }

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

        $obj = new HistoriqueTravaux();

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

        $obj = new HistoriqueTravaux();

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

        $obj = new HistoriqueTravaux();

        $obj->setDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        $obj = new HistoriqueTravaux();

        $obj->setDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSortie());
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
     * Tests the setIDTravail() method.
     *
     * @return void
     */
    public function testSetIDTravail() {

        $obj = new HistoriqueTravaux();

        $obj->setIDTravail(10);
        $this->assertEquals(10, $obj->getIDTravail());
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
}
