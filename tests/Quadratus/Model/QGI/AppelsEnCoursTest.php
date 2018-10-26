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
use WBW\Library\Core\Quadratus\Model\QGI\AppelsEnCours;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Appels en cours model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class AppelsEnCoursTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

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
		$this->assertNull($obj->getDemandeAR());
		$this->assertNull($obj->getDestinatairesA());
		$this->assertNull($obj->getDestinatairesCc());
		$this->assertNull($obj->getEmailAuteur());
		$this->assertNull($obj->getGroupeQualifiant());
		$this->assertNull($obj->getIDAppel());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getMessageLu());
		$this->assertNull($obj->getMiseEnSommDateHeure());
		$this->assertNull($obj->getNature());
		$this->assertNull($obj->getNbAppelsEnCours());
		$this->assertNull($obj->getNomClient());
		$this->assertNull($obj->getOrigine());
		$this->assertNull($obj->getPieceJointe());
		$this->assertNull($obj->getReponse());
		$this->assertNull($obj->getSousRepRefGUID());
		$this->assertNull($obj->getSpecial());
		$this->assertNull($obj->getTel());
		$this->assertNull($obj->getTypeMessage());
		$this->assertNull($obj->getUniqID());
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
	 */
	public function testSetDateCreationClient() {

		$obj = new AppelsEnCours();

		$obj->setDateCreationClient(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreationClient());
	}

	/**
	 * Tests the setDateEntree() method.
	 *
	 * @return void
	 */
	public function testSetDateEntree() {

		$obj = new AppelsEnCours();

		$obj->setDateEntree(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree());
	}

	/**
	 * Tests the setDateMessageLu() method.
	 *
	 * @return void
	 */
	public function testSetDateMessageLu() {

		$obj = new AppelsEnCours();

		$obj->setDateMessageLu(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateMessageLu());
	}

	/**
	 * Tests the setDateRedir() method.
	 *
	 * @return void
	 */
	public function testSetDateRedir() {

		$obj = new AppelsEnCours();

		$obj->setDateRedir(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRedir());
	}

	/**
	 * Tests the setDemandeAR() method.
	 *
	 * @return void
	 */
	public function testSetDemandeAR() {

		$obj = new AppelsEnCours();

		$obj->setDemandeAR(true);
		$this->assertEquals(true, $obj->getDemandeAR());
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
	 * Tests the setIDAppel() method.
	 *
	 * @return void
	 */
	public function testSetIDAppel() {

		$obj = new AppelsEnCours();

		$obj->setIDAppel(10);
		$this->assertEquals(10, $obj->getIDAppel());
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
	 */
	public function testSetMiseEnSommDateHeure() {

		$obj = new AppelsEnCours();

		$obj->setMiseEnSommDateHeure(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMiseEnSommDateHeure());
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
	 * Tests the setSousRepRefGUID() method.
	 *
	 * @return void
	 */
	public function testSetSousRepRefGUID() {

		$obj = new AppelsEnCours();

		$obj->setSousRepRefGUID("sousRepRefGUID");
		$this->assertEquals("sousRepRefGUID", $obj->getSousRepRefGUID());
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
	 * Tests the setUniqID() method.
	 *
	 * @return void
	 */
	public function testSetUniqID() {

		$obj = new AppelsEnCours();

		$obj->setUniqID("uniqID");
		$this->assertEquals("uniqID", $obj->getUniqID());
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
