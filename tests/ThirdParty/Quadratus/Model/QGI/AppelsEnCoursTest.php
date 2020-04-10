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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AppelsEnCours;

/**
 * Appels en cours test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AppelsEnCoursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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

    /**
     * Tests the setAvecMiseEnSomm() method.
     *
     * @return void
     */
    public function testSetAvecMiseEnSomm() {

        $obj = new AppelsEnCours();

        $obj->setAvecMiseEnSomm(true);
        $this->assertEquals(true, $obj->getAvecMiseEnSomm());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AppelsEnCours();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurDest() {

        $obj = new AppelsEnCours();

        $obj->setCodeCollaborateurDest("codeCollaborateurDest");
        $this->assertEquals("codeCollaborateurDest", $obj->getCodeCollaborateurDest());
    }

    /**
     * Tests the setCodeCollaborateurEntrant() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurEntrant() {

        $obj = new AppelsEnCours();

        $obj->setCodeCollaborateurEntrant("codeCollaborateurEntrant");
        $this->assertEquals("codeCollaborateurEntrant", $obj->getCodeCollaborateurEntrant());
    }

    /**
     * Tests the setCodeCollaborateurRedir() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateurRedir() {

        $obj = new AppelsEnCours();

        $obj->setCodeCollaborateurRedir("codeCollaborateurRedir");
        $this->assertEquals("codeCollaborateurRedir", $obj->getCodeCollaborateurRedir());
    }

    /**
     * Tests the setCodeProduit() method.
     *
     * @return void
     */
    public function testSetCodeProduit() {

        $obj = new AppelsEnCours();

        $obj->setCodeProduit("codeProduit");
        $this->assertEquals("codeProduit", $obj->getCodeProduit());
    }

    /**
     * Tests the setCompteurTemps() method.
     *
     * @return void
     */
    public function testSetCompteurTemps() {

        $obj = new AppelsEnCours();

        $obj->setCompteurTemps(10);
        $this->assertEquals(10, $obj->getCompteurTemps());
    }

    /**
     * Tests the setConfidentiel() method.
     *
     * @return void
     */
    public function testSetConfidentiel() {

        $obj = new AppelsEnCours();

        $obj->setConfidentiel(true);
        $this->assertEquals(true, $obj->getConfidentiel());
    }

    /**
     * Tests the setConsequence() method.
     *
     * @return void
     */
    public function testSetConsequence() {

        $obj = new AppelsEnCours();

        $obj->setConsequence("consequence");
        $this->assertEquals("consequence", $obj->getConsequence());
    }

    /**
     * Tests the setDateCreationClient() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreationClient() {

        // Set a Date/time mock.
        $dateCreationClient = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setDateCreationClient($dateCreationClient);
        $this->assertSame($dateCreationClient, $obj->getDateCreationClient());
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

        $obj = new AppelsEnCours();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateMessageLu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMessageLu() {

        // Set a Date/time mock.
        $dateMessageLu = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setDateMessageLu($dateMessageLu);
        $this->assertSame($dateMessageLu, $obj->getDateMessageLu());
    }

    /**
     * Tests the setDateRedir() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRedir() {

        // Set a Date/time mock.
        $dateRedir = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setDateRedir($dateRedir);
        $this->assertSame($dateRedir, $obj->getDateRedir());
    }

    /**
     * Tests the setDemandeAr() method.
     *
     * @return void
     */
    public function testSetDemandeAr() {

        $obj = new AppelsEnCours();

        $obj->setDemandeAr(true);
        $this->assertEquals(true, $obj->getDemandeAr());
    }

    /**
     * Tests the setDestinatairesA() method.
     *
     * @return void
     */
    public function testSetDestinatairesA() {

        $obj = new AppelsEnCours();

        $obj->setDestinatairesA("destinatairesA");
        $this->assertEquals("destinatairesA", $obj->getDestinatairesA());
    }

    /**
     * Tests the setDestinatairesCc() method.
     *
     * @return void
     */
    public function testSetDestinatairesCc() {

        $obj = new AppelsEnCours();

        $obj->setDestinatairesCc("destinatairesCc");
        $this->assertEquals("destinatairesCc", $obj->getDestinatairesCc());
    }

    /**
     * Tests the setEmailAuteur() method.
     *
     * @return void
     */
    public function testSetEmailAuteur() {

        $obj = new AppelsEnCours();

        $obj->setEmailAuteur("emailAuteur");
        $this->assertEquals("emailAuteur", $obj->getEmailAuteur());
    }

    /**
     * Tests the setGroupeQualifiant() method.
     *
     * @return void
     */
    public function testSetGroupeQualifiant() {

        $obj = new AppelsEnCours();

        $obj->setGroupeQualifiant("groupeQualifiant");
        $this->assertEquals("groupeQualifiant", $obj->getGroupeQualifiant());
    }

    /**
     * Tests the setIdAppel() method.
     *
     * @return void
     */
    public function testSetIdAppel() {

        $obj = new AppelsEnCours();

        $obj->setIdAppel(10);
        $this->assertEquals(10, $obj->getIdAppel());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new AppelsEnCours();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMessageLu() method.
     *
     * @return void
     */
    public function testSetMessageLu() {

        $obj = new AppelsEnCours();

        $obj->setMessageLu(true);
        $this->assertEquals(true, $obj->getMessageLu());
    }

    /**
     * Tests the setMiseEnSommDateHeure() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMiseEnSommDateHeure() {

        // Set a Date/time mock.
        $miseEnSommDateHeure = new DateTime("2018-09-10");

        $obj = new AppelsEnCours();

        $obj->setMiseEnSommDateHeure($miseEnSommDateHeure);
        $this->assertSame($miseEnSommDateHeure, $obj->getMiseEnSommDateHeure());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new AppelsEnCours();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNbAppelsEnCours() method.
     *
     * @return void
     */
    public function testSetNbAppelsEnCours() {

        $obj = new AppelsEnCours();

        $obj->setNbAppelsEnCours(10);
        $this->assertEquals(10, $obj->getNbAppelsEnCours());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient() {

        $obj = new AppelsEnCours();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setOrigine() method.
     *
     * @return void
     */
    public function testSetOrigine() {

        $obj = new AppelsEnCours();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Tests the setPieceJointe() method.
     *
     * @return void
     */
    public function testSetPieceJointe() {

        $obj = new AppelsEnCours();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests the setReponse() method.
     *
     * @return void
     */
    public function testSetReponse() {

        $obj = new AppelsEnCours();

        $obj->setReponse("reponse");
        $this->assertEquals("reponse", $obj->getReponse());
    }

    /**
     * Tests the setSousRepRefGuid() method.
     *
     * @return void
     */
    public function testSetSousRepRefGuid() {

        $obj = new AppelsEnCours();

        $obj->setSousRepRefGuid("sousRepRefGuid");
        $this->assertEquals("sousRepRefGuid", $obj->getSousRepRefGuid());
    }

    /**
     * Tests the setSpecial() method.
     *
     * @return void
     */
    public function testSetSpecial() {

        $obj = new AppelsEnCours();

        $obj->setSpecial("special");
        $this->assertEquals("special", $obj->getSpecial());
    }

    /**
     * Tests the setTel() method.
     *
     * @return void
     */
    public function testSetTel() {

        $obj = new AppelsEnCours();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Tests the setTypeMessage() method.
     *
     * @return void
     */
    public function testSetTypeMessage() {

        $obj = new AppelsEnCours();

        $obj->setTypeMessage("typeMessage");
        $this->assertEquals("typeMessage", $obj->getTypeMessage());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new AppelsEnCours();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the setUrgent() method.
     *
     * @return void
     */
    public function testSetUrgent() {

        $obj = new AppelsEnCours();

        $obj->setUrgent(true);
        $this->assertEquals(true, $obj->getUrgent());
    }
}
