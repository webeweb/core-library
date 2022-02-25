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
use WBW\Library\Quadratus\Model\QGI\AppelsEnCours;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Appels en cours test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AppelsEnCoursTest extends AbstractTestCase {

    /**
     * Tests setAvecMiseEnSomm()
     *
     * @return void
     */
    public function testSetAvecMiseEnSomm(): void {

        $obj = new AppelsEnCours();

        $obj->setAvecMiseEnSomm(true);
        $this->assertEquals(true, $obj->getAvecMiseEnSomm());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AppelsEnCours();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaborateurDest()
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest(): void {

        $obj = new AppelsEnCours();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests setCodeCollaborateurEntrant()
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant(): void {

        $obj = new AppelsEnCours();

        $obj->setCodeCollaborateurEntrant("codeCollaborateurEntrant");
        $this->assertEquals("codeCollaborateurEntrant", $obj->getCodeCollaborateurEntrant());
    }

    /**
     * Tests setCodeCollaborateurRedir()
     *
     * @return void
     */
    public function testSetCodeCollaborateurRedir(): void {

        $obj = new AppelsEnCours();

        $obj->setCodeCollaborateurRedir("codeCollaborateurRedir");
        $this->assertEquals("codeCollaborateurRedir", $obj->getCodeCollaborateurRedir());
    }

    /**
     * Tests setCodeProduit()
     *
     * @return void
     */
    public function testSetCodeProduit(): void {

        $obj = new AppelsEnCours();

        $obj->setCodeProduit("codeProduit");
        $this->assertEquals("codeProduit", $obj->getCodeProduit());
    }

    /**
     * Tests setCompteurTemps()
     *
     * @return void
     */
    public function testSetCompteurTemps(): void {

        $obj = new AppelsEnCours();

        $obj->setCompteurTemps(10);
        $this->assertEquals(10, $obj->getCompteurTemps());
    }

    /**
     * Tests setConfidentiel()
     *
     * @return void
     */
    public function testSetConfidentiel(): void {

        $obj = new AppelsEnCours();

        $obj->setConfidentiel(true);
        $this->assertEquals(true, $obj->getConfidentiel());
    }

    /**
     * Tests setConsequence()
     *
     * @return void
     */
    public function testSetConsequence(): void {

        $obj = new AppelsEnCours();

        $obj->setConsequence("consequence");
        $this->assertEquals("consequence", $obj->getConsequence());
    }

    /**
     * Tests setDateCreationClient()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreationClient(): void {

        // Set a Date/time mock.
        $dateCreationClient = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setDateCreationClient($dateCreationClient);
        $this->assertSame($dateCreationClient, $obj->getDateCreationClient());
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

        $obj = new AppelsEnCours();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests setDateMessageLu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMessageLu(): void {

        // Set a Date/time mock.
        $dateMessageLu = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setDateMessageLu($dateMessageLu);
        $this->assertSame($dateMessageLu, $obj->getDateMessageLu());
    }

    /**
     * Tests setDateRedir()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRedir(): void {

        // Set a Date/time mock.
        $dateRedir = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setDateRedir($dateRedir);
        $this->assertSame($dateRedir, $obj->getDateRedir());
    }

    /**
     * Tests setDemandeAr()
     *
     * @return void
     */
    public function testSetDemandeAr(): void {

        $obj = new AppelsEnCours();

        $obj->setDemandeAr(true);
        $this->assertEquals(true, $obj->getDemandeAr());
    }

    /**
     * Tests setDestinatairesA()
     *
     * @return void
     */
    public function testSetDestinatairesA(): void {

        $obj = new AppelsEnCours();

        $obj->setDestinatairesA("destinatairesA");
        $this->assertEquals("destinatairesA", $obj->getDestinatairesA());
    }

    /**
     * Tests setDestinatairesCc()
     *
     * @return void
     */
    public function testSetDestinatairesCc(): void {

        $obj = new AppelsEnCours();

        $obj->setDestinatairesCc("destinatairesCc");
        $this->assertEquals("destinatairesCc", $obj->getDestinatairesCc());
    }

    /**
     * Tests setEmailAuteur()
     *
     * @return void
     */
    public function testSetEmailAuteur(): void {

        $obj = new AppelsEnCours();

        $obj->setEmailAuteur("emailAuteur");
        $this->assertEquals("emailAuteur", $obj->getEmailAuteur());
    }

    /**
     * Tests setGroupeQualifiant()
     *
     * @return void
     */
    public function testSetGroupeQualifiant(): void {

        $obj = new AppelsEnCours();

        $obj->setGroupeQualifiant("groupeQualifiant");
        $this->assertEquals("groupeQualifiant", $obj->getGroupeQualifiant());
    }

    /**
     * Tests setIdAppel()
     *
     * @return void
     */
    public function testSetIdAppel(): void {

        $obj = new AppelsEnCours();

        $obj->setIdAppel(10);
        $this->assertEquals(10, $obj->getIdAppel());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new AppelsEnCours();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setMessageLu()
     *
     * @return void
     */
    public function testSetMessageLu(): void {

        $obj = new AppelsEnCours();

        $obj->setMessageLu(true);
        $this->assertEquals(true, $obj->getMessageLu());
    }

    /**
     * Tests setMiseEnSommDateHeure()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMiseEnSommDateHeure(): void {

        // Set a Date/time mock.
        $miseEnSommDateHeure = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setMiseEnSommDateHeure($miseEnSommDateHeure);
        $this->assertSame($miseEnSommDateHeure, $obj->getMiseEnSommDateHeure());
    }

    /**
     * Tests setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new AppelsEnCours();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests setNbAppelsEnCours()
     *
     * @return void
     */
    public function testSetNbAppelsEnCours(): void {

        $obj = new AppelsEnCours();

        $obj->setNbAppelsEnCours(10);
        $this->assertEquals(10, $obj->getNbAppelsEnCours());
    }

    /**
     * Tests setNomClient()
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new AppelsEnCours();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests setOrigine()
     *
     * @return void
     */
    public function testSetOrigine(): void {

        $obj = new AppelsEnCours();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Tests setPieceJointe()
     *
     * @return void
     */
    public function testSetPieceJointe(): void {

        $obj = new AppelsEnCours();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests setReponse()
     *
     * @return void
     */
    public function testSetReponse(): void {

        $obj = new AppelsEnCours();

        $obj->setReponse("reponse");
        $this->assertEquals("reponse", $obj->getReponse());
    }

    /**
     * Tests setSousRepRefGuid()
     *
     * @return void
     */
    public function testSetSousRepRefGuid(): void {

        $obj = new AppelsEnCours();

        $obj->setSousRepRefGuid("sousRepRefGuid");
        $this->assertEquals("sousRepRefGuid", $obj->getSousRepRefGuid());
    }

    /**
     * Tests setSpecial()
     *
     * @return void
     */
    public function testSetSpecial(): void {

        $obj = new AppelsEnCours();

        $obj->setSpecial("special");
        $this->assertEquals("special", $obj->getSpecial());
    }

    /**
     * Tests setTel()
     *
     * @return void
     */
    public function testSetTel(): void {

        $obj = new AppelsEnCours();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Tests setTypeMessage()
     *
     * @return void
     */
    public function testSetTypeMessage(): void {

        $obj = new AppelsEnCours();

        $obj->setTypeMessage("typeMessage");
        $this->assertEquals("typeMessage", $obj->getTypeMessage());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new AppelsEnCours();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests setUrgent()
     *
     * @return void
     */
    public function testSetUrgent(): void {

        $obj = new AppelsEnCours();

        $obj->setUrgent(true);
        $this->assertEquals(true, $obj->getUrgent());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AppelsEnCours();

        $this->assertNull($obj->getAvecMiseEnSomm());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateurDest());
        $this->assertNull($obj->getCodeCollaborateurEntrant());
        $this->assertNull($obj->getCodeCollaborateurRedir());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getCompteurTemps());
        $this->assertNull($obj->getConfidentiel());
        $this->assertNull($obj->getConsequence());
        $this->assertNull($obj->getDateCreationClient());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateMessageLu());
        $this->assertNull($obj->getDateRedir());
        $this->assertNull($obj->getDemandeAr());
        $this->assertNull($obj->getDestinatairesA());
        $this->assertNull($obj->getDestinatairesCc());
        $this->assertNull($obj->getEmailAuteur());
        $this->assertNull($obj->getGroupeQualifiant());
        $this->assertNull($obj->getIdAppel());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMessageLu());
        $this->assertNull($obj->getMiseEnSommDateHeure());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNbAppelsEnCours());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getReponse());
        $this->assertNull($obj->getSousRepRefGuid());
        $this->assertNull($obj->getSpecial());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTypeMessage());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUrgent());
    }
}
