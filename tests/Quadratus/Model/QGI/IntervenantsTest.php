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
use WBW\Library\Core\Quadratus\Model\QGI\Intervenants;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Intervenants model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class IntervenantsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Intervenants();

		$this->assertNull($obj->getAdresseSiteClient());
		$this->assertNull($obj->getAdresseTranspac());
		$this->assertNull($obj->getAge());
		$this->assertNull($obj->getAutoriserAccesInternet());
		$this->assertNull($obj->getBIC());
		$this->assertNull($obj->getBTQ());
		$this->assertNull($obj->getBTQ2());
		$this->assertNull($obj->getBureauDistributeur());
		$this->assertNull($obj->getBureauDistributeur2());
		$this->assertNull($obj->getCapital());
		$this->assertNull($obj->getCapitalMonnaie());
		$this->assertNull($obj->getCategorieJuridique());
		$this->assertNull($obj->getCivilite());
		$this->assertNull($obj->getCode());
		$this->assertNull($obj->getCodeEpoux());
		$this->assertNull($obj->getCodeInsee());
		$this->assertNull($obj->getCodeNAF());
		$this->assertNull($obj->getCodeNAF2008());
		$this->assertNull($obj->getCodeOfficielCommune());
		$this->assertNull($obj->getCodeOfficielCommune2());
		$this->assertNull($obj->getCodePaysISO());
		$this->assertNull($obj->getCodePaysISONaiss());
		$this->assertNull($obj->getCodePostal());
		$this->assertNull($obj->getCodePostal2());
		$this->assertNull($obj->getCodePostalMariage());
		$this->assertNull($obj->getCodePostalNaissance());
		$this->assertNull($obj->getCodePostalRC());
		$this->assertNull($obj->getCodePostalRM());
		$this->assertNull($obj->getCodeResponsable());
		$this->assertNull($obj->getComplement());
		$this->assertNull($obj->getComplement2());
		$this->assertNull($obj->getComplementSuite());
		$this->assertNull($obj->getCompteurLiens());
		$this->assertNull($obj->getContact());
		$this->assertNull($obj->getCreationSociete());
		$this->assertNull($obj->getDateCreat());
		$this->assertNull($obj->getDateDebActivite());
		$this->assertNull($obj->getDateDivorce());
		$this->assertNull($obj->getDateInstallation());
		$this->assertNull($obj->getDateMariage());
		$this->assertNull($obj->getDateModif());
		$this->assertNull($obj->getDateNaissance());
		$this->assertNull($obj->getDonneesAppel());
		$this->assertNull($obj->getDroitCollabVisuDocuments());
		$this->assertNull($obj->getDureeSociete());
		$this->assertNull($obj->getEmail());
		$this->assertNull($obj->getEmail2());
		$this->assertNull($obj->getEnseigne());
		$this->assertNull($obj->getFRPCle());
		$this->assertNull($obj->getFRPDossier());
		$this->assertNull($obj->getFRPRecette());
		$this->assertNull($obj->getFax());
		$this->assertNull($obj->getFax2());
		$this->assertNull($obj->getGestJuri());
		$this->assertNull($obj->getIBAN());
		$this->assertNull($obj->getIdentTVA());
		$this->assertNull($obj->getIdentifiant());
		$this->assertNull($obj->getIdentifiantInternet());
		$this->assertNull($obj->getInscriptionRC());
		$this->assertNull($obj->getInscriptionRM());
		$this->assertNull($obj->getIsClient());
		$this->assertNull($obj->getIsFournisseur());
		$this->assertNull($obj->getMDPInternet());
		$this->assertNull($obj->getMissionPrincipale());
		$this->assertNull($obj->getNIE1());
		$this->assertNull($obj->getNIE2());
		$this->assertNull($obj->getNIR());
		$this->assertNull($obj->getNationalite());
		$this->assertNull($obj->getNbEnfants());
		$this->assertNull($obj->getNbKm());
		$this->assertNull($obj->getNom());
		$this->assertNull($obj->getNomMarital());
		$this->assertNull($obj->getNomMere());
		$this->assertNull($obj->getNomPere());
		$this->assertNull($obj->getNomSuite());
		$this->assertNull($obj->getNomVille());
		$this->assertNull($obj->getNomVille2());
		$this->assertNull($obj->getNomVoie());
		$this->assertNull($obj->getNomVoie2());
		$this->assertNull($obj->getNombreActions());
		$this->assertNull($obj->getNumAgrementCGA());
		$this->assertNull($obj->getNumVoie());
		$this->assertNull($obj->getNumVoie2());
		$this->assertNull($obj->getPays());
		$this->assertNull($obj->getPaysNaissance());
		$this->assertNull($obj->getPersonnePhysique());
		$this->assertNull($obj->getPortable1());
		$this->assertNull($obj->getPortable12());
		$this->assertNull($obj->getPortable2());
		$this->assertNull($obj->getPortable22());
		$this->assertNull($obj->getPrenom());
		$this->assertNull($obj->getQualite());
		$this->assertNull($obj->getRC());
		$this->assertNull($obj->getRCCode());
		$this->assertNull($obj->getRIB());
		$this->assertNull($obj->getRM());
		$this->assertNull($obj->getRMCode());
		$this->assertNull($obj->getRegimeMatrimonial());
		$this->assertNull($obj->getRegimeMatrimoniale());
		$this->assertNull($obj->getSalarieIndependant());
		$this->assertNull($obj->getSiret());
		$this->assertNull($obj->getSituationFam());
		$this->assertNull($obj->getTel1());
		$this->assertNull($obj->getTel12());
		$this->assertNull($obj->getTel2());
		$this->assertNull($obj->getTel22());
		$this->assertNull($obj->getTelVoiture());
		$this->assertNull($obj->getTelVoiture2());
		$this->assertNull($obj->getTelex());
		$this->assertNull($obj->getTelex2());
		$this->assertNull($obj->getTravailADomicile());
		$this->assertNull($obj->getType());
		$this->assertNull($obj->getTypeSociete());
		$this->assertNull($obj->getVilleMariage());
		$this->assertNull($obj->getVilleNaissance());
		$this->assertNull($obj->getVilleRC());
		$this->assertNull($obj->getVilleRM());
		$this->assertNull($obj->getZipCode());
	}

	/**
	 * Tests the setAdresseSiteClient() method.
	 *
	 * @return void
	 */
	public function testSetAdresseSiteClient() {

		$obj = new Intervenants();

		$obj->setAdresseSiteClient("adresseSiteClient");
		$this->assertEquals("adresseSiteClient", $obj->getAdresseSiteClient());
	}

	/**
	 * Tests the setAdresseTranspac() method.
	 *
	 * @return void
	 */
	public function testSetAdresseTranspac() {

		$obj = new Intervenants();

		$obj->setAdresseTranspac("adresseTranspac");
		$this->assertEquals("adresseTranspac", $obj->getAdresseTranspac());
	}

	/**
	 * Tests the setAge() method.
	 *
	 * @return void
	 */
	public function testSetAge() {

		$obj = new Intervenants();

		$obj->setAge("age");
		$this->assertEquals("age", $obj->getAge());
	}

	/**
	 * Tests the setAutoriserAccesInternet() method.
	 *
	 * @return void
	 */
	public function testSetAutoriserAccesInternet() {

		$obj = new Intervenants();

		$obj->setAutoriserAccesInternet(true);
		$this->assertEquals(true, $obj->getAutoriserAccesInternet());
	}

	/**
	 * Tests the setBIC() method.
	 *
	 * @return void
	 */
	public function testSetBIC() {

		$obj = new Intervenants();

		$obj->setBIC("bIC");
		$this->assertEquals("bIC", $obj->getBIC());
	}

	/**
	 * Tests the setBTQ() method.
	 *
	 * @return void
	 */
	public function testSetBTQ() {

		$obj = new Intervenants();

		$obj->setBTQ("bTQ");
		$this->assertEquals("bTQ", $obj->getBTQ());
	}

	/**
	 * Tests the setBTQ2() method.
	 *
	 * @return void
	 */
	public function testSetBTQ2() {

		$obj = new Intervenants();

		$obj->setBTQ2("bTQ2");
		$this->assertEquals("bTQ2", $obj->getBTQ2());
	}

	/**
	 * Tests the setBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur() {

		$obj = new Intervenants();

		$obj->setBureauDistributeur("bureauDistributeur");
		$this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
	}

	/**
	 * Tests the setBureauDistributeur2() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur2() {

		$obj = new Intervenants();

		$obj->setBureauDistributeur2("bureauDistributeur2");
		$this->assertEquals("bureauDistributeur2", $obj->getBureauDistributeur2());
	}

	/**
	 * Tests the setCapital() method.
	 *
	 * @return void
	 */
	public function testSetCapital() {

		$obj = new Intervenants();

		$obj->setCapital(10.092018);
		$this->assertEquals(10.092018, $obj->getCapital());
	}

	/**
	 * Tests the setCapitalMonnaie() method.
	 *
	 * @return void
	 */
	public function testSetCapitalMonnaie() {

		$obj = new Intervenants();

		$obj->setCapitalMonnaie("capitalMonnaie");
		$this->assertEquals("capitalMonnaie", $obj->getCapitalMonnaie());
	}

	/**
	 * Tests the setCategorieJuridique() method.
	 *
	 * @return void
	 */
	public function testSetCategorieJuridique() {

		$obj = new Intervenants();

		$obj->setCategorieJuridique("categorieJuridique");
		$this->assertEquals("categorieJuridique", $obj->getCategorieJuridique());
	}

	/**
	 * Tests the setCivilite() method.
	 *
	 * @return void
	 */
	public function testSetCivilite() {

		$obj = new Intervenants();

		$obj->setCivilite("civilite");
		$this->assertEquals("civilite", $obj->getCivilite());
	}

	/**
	 * Tests the setCode() method.
	 *
	 * @return void
	 */
	public function testSetCode() {

		$obj = new Intervenants();

		$obj->setCode("code");
		$this->assertEquals("code", $obj->getCode());
	}

	/**
	 * Tests the setCodeEpoux() method.
	 *
	 * @return void
	 */
	public function testSetCodeEpoux() {

		$obj = new Intervenants();

		$obj->setCodeEpoux("codeEpoux");
		$this->assertEquals("codeEpoux", $obj->getCodeEpoux());
	}

	/**
	 * Tests the setCodeInsee() method.
	 *
	 * @return void
	 */
	public function testSetCodeInsee() {

		$obj = new Intervenants();

		$obj->setCodeInsee("codeInsee");
		$this->assertEquals("codeInsee", $obj->getCodeInsee());
	}

	/**
	 * Tests the setCodeNAF() method.
	 *
	 * @return void
	 */
	public function testSetCodeNAF() {

		$obj = new Intervenants();

		$obj->setCodeNAF("codeNAF");
		$this->assertEquals("codeNAF", $obj->getCodeNAF());
	}

	/**
	 * Tests the setCodeNAF2008() method.
	 *
	 * @return void
	 */
	public function testSetCodeNAF2008() {

		$obj = new Intervenants();

		$obj->setCodeNAF2008("codeNAF2008");
		$this->assertEquals("codeNAF2008", $obj->getCodeNAF2008());
	}

	/**
	 * Tests the setCodeOfficielCommune() method.
	 *
	 * @return void
	 */
	public function testSetCodeOfficielCommune() {

		$obj = new Intervenants();

		$obj->setCodeOfficielCommune("codeOfficielCommune");
		$this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
	}

	/**
	 * Tests the setCodeOfficielCommune2() method.
	 *
	 * @return void
	 */
	public function testSetCodeOfficielCommune2() {

		$obj = new Intervenants();

		$obj->setCodeOfficielCommune2("codeOfficielCommune2");
		$this->assertEquals("codeOfficielCommune2", $obj->getCodeOfficielCommune2());
	}

	/**
	 * Tests the setCodePaysISO() method.
	 *
	 * @return void
	 */
	public function testSetCodePaysISO() {

		$obj = new Intervenants();

		$obj->setCodePaysISO("codePaysISO");
		$this->assertEquals("codePaysISO", $obj->getCodePaysISO());
	}

	/**
	 * Tests the setCodePaysISONaiss() method.
	 *
	 * @return void
	 */
	public function testSetCodePaysISONaiss() {

		$obj = new Intervenants();

		$obj->setCodePaysISONaiss("codePaysISONaiss");
		$this->assertEquals("codePaysISONaiss", $obj->getCodePaysISONaiss());
	}

	/**
	 * Tests the setCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal() {

		$obj = new Intervenants();

		$obj->setCodePostal("codePostal");
		$this->assertEquals("codePostal", $obj->getCodePostal());
	}

	/**
	 * Tests the setCodePostal2() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal2() {

		$obj = new Intervenants();

		$obj->setCodePostal2("codePostal2");
		$this->assertEquals("codePostal2", $obj->getCodePostal2());
	}

	/**
	 * Tests the setCodePostalMariage() method.
	 *
	 * @return void
	 */
	public function testSetCodePostalMariage() {

		$obj = new Intervenants();

		$obj->setCodePostalMariage("codePostalMariage");
		$this->assertEquals("codePostalMariage", $obj->getCodePostalMariage());
	}

	/**
	 * Tests the setCodePostalNaissance() method.
	 *
	 * @return void
	 */
	public function testSetCodePostalNaissance() {

		$obj = new Intervenants();

		$obj->setCodePostalNaissance("codePostalNaissance");
		$this->assertEquals("codePostalNaissance", $obj->getCodePostalNaissance());
	}

	/**
	 * Tests the setCodePostalRC() method.
	 *
	 * @return void
	 */
	public function testSetCodePostalRC() {

		$obj = new Intervenants();

		$obj->setCodePostalRC("codePostalRC");
		$this->assertEquals("codePostalRC", $obj->getCodePostalRC());
	}

	/**
	 * Tests the setCodePostalRM() method.
	 *
	 * @return void
	 */
	public function testSetCodePostalRM() {

		$obj = new Intervenants();

		$obj->setCodePostalRM("codePostalRM");
		$this->assertEquals("codePostalRM", $obj->getCodePostalRM());
	}

	/**
	 * Tests the setCodeResponsable() method.
	 *
	 * @return void
	 */
	public function testSetCodeResponsable() {

		$obj = new Intervenants();

		$obj->setCodeResponsable("codeResponsable");
		$this->assertEquals("codeResponsable", $obj->getCodeResponsable());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new Intervenants();

		$obj->setComplement("complement");
		$this->assertEquals("complement", $obj->getComplement());
	}

	/**
	 * Tests the setComplement2() method.
	 *
	 * @return void
	 */
	public function testSetComplement2() {

		$obj = new Intervenants();

		$obj->setComplement2("complement2");
		$this->assertEquals("complement2", $obj->getComplement2());
	}

	/**
	 * Tests the setComplementSuite() method.
	 *
	 * @return void
	 */
	public function testSetComplementSuite() {

		$obj = new Intervenants();

		$obj->setComplementSuite("complementSuite");
		$this->assertEquals("complementSuite", $obj->getComplementSuite());
	}

	/**
	 * Tests the setCompteurLiens() method.
	 *
	 * @return void
	 */
	public function testSetCompteurLiens() {

		$obj = new Intervenants();

		$obj->setCompteurLiens(10);
		$this->assertEquals(10, $obj->getCompteurLiens());
	}

	/**
	 * Tests the setContact() method.
	 *
	 * @return void
	 */
	public function testSetContact() {

		$obj = new Intervenants();

		$obj->setContact("contact");
		$this->assertEquals("contact", $obj->getContact());
	}

	/**
	 * Tests the setCreationSociete() method.
	 *
	 * @return void
	 */
	public function testSetCreationSociete() {

		$obj = new Intervenants();

		$obj->setCreationSociete(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getCreationSociete());
	}

	/**
	 * Tests the setDateCreat() method.
	 *
	 * @return void
	 */
	public function testSetDateCreat() {

		$obj = new Intervenants();

		$obj->setDateCreat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
	}

	/**
	 * Tests the setDateDebActivite() method.
	 *
	 * @return void
	 */
	public function testSetDateDebActivite() {

		$obj = new Intervenants();

		$obj->setDateDebActivite(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebActivite());
	}

	/**
	 * Tests the setDateDivorce() method.
	 *
	 * @return void
	 */
	public function testSetDateDivorce() {

		$obj = new Intervenants();

		$obj->setDateDivorce(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDivorce());
	}

	/**
	 * Tests the setDateInstallation() method.
	 *
	 * @return void
	 */
	public function testSetDateInstallation() {

		$obj = new Intervenants();

		$obj->setDateInstallation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateInstallation());
	}

	/**
	 * Tests the setDateMariage() method.
	 *
	 * @return void
	 */
	public function testSetDateMariage() {

		$obj = new Intervenants();

		$obj->setDateMariage(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateMariage());
	}

	/**
	 * Tests the setDateModif() method.
	 *
	 * @return void
	 */
	public function testSetDateModif() {

		$obj = new Intervenants();

		$obj->setDateModif(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
	}

	/**
	 * Tests the setDateNaissance() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissance() {

		$obj = new Intervenants();

		$obj->setDateNaissance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
	}

	/**
	 * Tests the setDonneesAppel() method.
	 *
	 * @return void
	 */
	public function testSetDonneesAppel() {

		$obj = new Intervenants();

		$obj->setDonneesAppel("donneesAppel");
		$this->assertEquals("donneesAppel", $obj->getDonneesAppel());
	}

	/**
	 * Tests the setDroitCollabVisuDocuments() method.
	 *
	 * @return void
	 */
	public function testSetDroitCollabVisuDocuments() {

		$obj = new Intervenants();

		$obj->setDroitCollabVisuDocuments("droitCollabVisuDocuments");
		$this->assertEquals("droitCollabVisuDocuments", $obj->getDroitCollabVisuDocuments());
	}

	/**
	 * Tests the setDureeSociete() method.
	 *
	 * @return void
	 */
	public function testSetDureeSociete() {

		$obj = new Intervenants();

		$obj->setDureeSociete("dureeSociete");
		$this->assertEquals("dureeSociete", $obj->getDureeSociete());
	}

	/**
	 * Tests the setEmail() method.
	 *
	 * @return void
	 */
	public function testSetEmail() {

		$obj = new Intervenants();

		$obj->setEmail("email");
		$this->assertEquals("email", $obj->getEmail());
	}

	/**
	 * Tests the setEmail2() method.
	 *
	 * @return void
	 */
	public function testSetEmail2() {

		$obj = new Intervenants();

		$obj->setEmail2("email2");
		$this->assertEquals("email2", $obj->getEmail2());
	}

	/**
	 * Tests the setEnseigne() method.
	 *
	 * @return void
	 */
	public function testSetEnseigne() {

		$obj = new Intervenants();

		$obj->setEnseigne("enseigne");
		$this->assertEquals("enseigne", $obj->getEnseigne());
	}

	/**
	 * Tests the setFRPCle() method.
	 *
	 * @return void
	 */
	public function testSetFRPCle() {

		$obj = new Intervenants();

		$obj->setFRPCle("fRPCle");
		$this->assertEquals("fRPCle", $obj->getFRPCle());
	}

	/**
	 * Tests the setFRPDossier() method.
	 *
	 * @return void
	 */
	public function testSetFRPDossier() {

		$obj = new Intervenants();

		$obj->setFRPDossier("fRPDossier");
		$this->assertEquals("fRPDossier", $obj->getFRPDossier());
	}

	/**
	 * Tests the setFRPRecette() method.
	 *
	 * @return void
	 */
	public function testSetFRPRecette() {

		$obj = new Intervenants();

		$obj->setFRPRecette("fRPRecette");
		$this->assertEquals("fRPRecette", $obj->getFRPRecette());
	}

	/**
	 * Tests the setFax() method.
	 *
	 * @return void
	 */
	public function testSetFax() {

		$obj = new Intervenants();

		$obj->setFax("fax");
		$this->assertEquals("fax", $obj->getFax());
	}

	/**
	 * Tests the setFax2() method.
	 *
	 * @return void
	 */
	public function testSetFax2() {

		$obj = new Intervenants();

		$obj->setFax2("fax2");
		$this->assertEquals("fax2", $obj->getFax2());
	}

	/**
	 * Tests the setGestJuri() method.
	 *
	 * @return void
	 */
	public function testSetGestJuri() {

		$obj = new Intervenants();

		$obj->setGestJuri(true);
		$this->assertEquals(true, $obj->getGestJuri());
	}

	/**
	 * Tests the setIBAN() method.
	 *
	 * @return void
	 */
	public function testSetIBAN() {

		$obj = new Intervenants();

		$obj->setIBAN("iBAN");
		$this->assertEquals("iBAN", $obj->getIBAN());
	}

	/**
	 * Tests the setIdentTVA() method.
	 *
	 * @return void
	 */
	public function testSetIdentTVA() {

		$obj = new Intervenants();

		$obj->setIdentTVA("identTVA");
		$this->assertEquals("identTVA", $obj->getIdentTVA());
	}

	/**
	 * Tests the setIdentifiant() method.
	 *
	 * @return void
	 */
	public function testSetIdentifiant() {

		$obj = new Intervenants();

		$obj->setIdentifiant("identifiant");
		$this->assertEquals("identifiant", $obj->getIdentifiant());
	}

	/**
	 * Tests the setIdentifiantInternet() method.
	 *
	 * @return void
	 */
	public function testSetIdentifiantInternet() {

		$obj = new Intervenants();

		$obj->setIdentifiantInternet("identifiantInternet");
		$this->assertEquals("identifiantInternet", $obj->getIdentifiantInternet());
	}

	/**
	 * Tests the setInscriptionRC() method.
	 *
	 * @return void
	 */
	public function testSetInscriptionRC() {

		$obj = new Intervenants();

		$obj->setInscriptionRC(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getInscriptionRC());
	}

	/**
	 * Tests the setInscriptionRM() method.
	 *
	 * @return void
	 */
	public function testSetInscriptionRM() {

		$obj = new Intervenants();

		$obj->setInscriptionRM(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getInscriptionRM());
	}

	/**
	 * Tests the setIsClient() method.
	 *
	 * @return void
	 */
	public function testSetIsClient() {

		$obj = new Intervenants();

		$obj->setIsClient("isClient");
		$this->assertEquals("isClient", $obj->getIsClient());
	}

	/**
	 * Tests the setIsFournisseur() method.
	 *
	 * @return void
	 */
	public function testSetIsFournisseur() {

		$obj = new Intervenants();

		$obj->setIsFournisseur("isFournisseur");
		$this->assertEquals("isFournisseur", $obj->getIsFournisseur());
	}

	/**
	 * Tests the setMDPInternet() method.
	 *
	 * @return void
	 */
	public function testSetMDPInternet() {

		$obj = new Intervenants();

		$obj->setMDPInternet("mDPInternet");
		$this->assertEquals("mDPInternet", $obj->getMDPInternet());
	}

	/**
	 * Tests the setMissionPrincipale() method.
	 *
	 * @return void
	 */
	public function testSetMissionPrincipale() {

		$obj = new Intervenants();

		$obj->setMissionPrincipale("missionPrincipale");
		$this->assertEquals("missionPrincipale", $obj->getMissionPrincipale());
	}

	/**
	 * Tests the setNIE1() method.
	 *
	 * @return void
	 */
	public function testSetNIE1() {

		$obj = new Intervenants();

		$obj->setNIE1("nIE1");
		$this->assertEquals("nIE1", $obj->getNIE1());
	}

	/**
	 * Tests the setNIE2() method.
	 *
	 * @return void
	 */
	public function testSetNIE2() {

		$obj = new Intervenants();

		$obj->setNIE2("nIE2");
		$this->assertEquals("nIE2", $obj->getNIE2());
	}

	/**
	 * Tests the setNIR() method.
	 *
	 * @return void
	 */
	public function testSetNIR() {

		$obj = new Intervenants();

		$obj->setNIR("nIR");
		$this->assertEquals("nIR", $obj->getNIR());
	}

	/**
	 * Tests the setNationalite() method.
	 *
	 * @return void
	 */
	public function testSetNationalite() {

		$obj = new Intervenants();

		$obj->setNationalite("nationalite");
		$this->assertEquals("nationalite", $obj->getNationalite());
	}

	/**
	 * Tests the setNbEnfants() method.
	 *
	 * @return void
	 */
	public function testSetNbEnfants() {

		$obj = new Intervenants();

		$obj->setNbEnfants("nbEnfants");
		$this->assertEquals("nbEnfants", $obj->getNbEnfants());
	}

	/**
	 * Tests the setNbKm() method.
	 *
	 * @return void
	 */
	public function testSetNbKm() {

		$obj = new Intervenants();

		$obj->setNbKm(10.092018);
		$this->assertEquals(10.092018, $obj->getNbKm());
	}

	/**
	 * Tests the setNom() method.
	 *
	 * @return void
	 */
	public function testSetNom() {

		$obj = new Intervenants();

		$obj->setNom("nom");
		$this->assertEquals("nom", $obj->getNom());
	}

	/**
	 * Tests the setNomMarital() method.
	 *
	 * @return void
	 */
	public function testSetNomMarital() {

		$obj = new Intervenants();

		$obj->setNomMarital("nomMarital");
		$this->assertEquals("nomMarital", $obj->getNomMarital());
	}

	/**
	 * Tests the setNomMere() method.
	 *
	 * @return void
	 */
	public function testSetNomMere() {

		$obj = new Intervenants();

		$obj->setNomMere("nomMere");
		$this->assertEquals("nomMere", $obj->getNomMere());
	}

	/**
	 * Tests the setNomPere() method.
	 *
	 * @return void
	 */
	public function testSetNomPere() {

		$obj = new Intervenants();

		$obj->setNomPere("nomPere");
		$this->assertEquals("nomPere", $obj->getNomPere());
	}

	/**
	 * Tests the setNomSuite() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite() {

		$obj = new Intervenants();

		$obj->setNomSuite("nomSuite");
		$this->assertEquals("nomSuite", $obj->getNomSuite());
	}

	/**
	 * Tests the setNomVille() method.
	 *
	 * @return void
	 */
	public function testSetNomVille() {

		$obj = new Intervenants();

		$obj->setNomVille("nomVille");
		$this->assertEquals("nomVille", $obj->getNomVille());
	}

	/**
	 * Tests the setNomVille2() method.
	 *
	 * @return void
	 */
	public function testSetNomVille2() {

		$obj = new Intervenants();

		$obj->setNomVille2("nomVille2");
		$this->assertEquals("nomVille2", $obj->getNomVille2());
	}

	/**
	 * Tests the setNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie() {

		$obj = new Intervenants();

		$obj->setNomVoie("nomVoie");
		$this->assertEquals("nomVoie", $obj->getNomVoie());
	}

	/**
	 * Tests the setNomVoie2() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie2() {

		$obj = new Intervenants();

		$obj->setNomVoie2("nomVoie2");
		$this->assertEquals("nomVoie2", $obj->getNomVoie2());
	}

	/**
	 * Tests the setNombreActions() method.
	 *
	 * @return void
	 */
	public function testSetNombreActions() {

		$obj = new Intervenants();

		$obj->setNombreActions(10);
		$this->assertEquals(10, $obj->getNombreActions());
	}

	/**
	 * Tests the setNumAgrementCGA() method.
	 *
	 * @return void
	 */
	public function testSetNumAgrementCGA() {

		$obj = new Intervenants();

		$obj->setNumAgrementCGA("numAgrementCGA");
		$this->assertEquals("numAgrementCGA", $obj->getNumAgrementCGA());
	}

	/**
	 * Tests the setNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie() {

		$obj = new Intervenants();

		$obj->setNumVoie("numVoie");
		$this->assertEquals("numVoie", $obj->getNumVoie());
	}

	/**
	 * Tests the setNumVoie2() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie2() {

		$obj = new Intervenants();

		$obj->setNumVoie2("numVoie2");
		$this->assertEquals("numVoie2", $obj->getNumVoie2());
	}

	/**
	 * Tests the setPays() method.
	 *
	 * @return void
	 */
	public function testSetPays() {

		$obj = new Intervenants();

		$obj->setPays("pays");
		$this->assertEquals("pays", $obj->getPays());
	}

	/**
	 * Tests the setPaysNaissance() method.
	 *
	 * @return void
	 */
	public function testSetPaysNaissance() {

		$obj = new Intervenants();

		$obj->setPaysNaissance("paysNaissance");
		$this->assertEquals("paysNaissance", $obj->getPaysNaissance());
	}

	/**
	 * Tests the setPersonnePhysique() method.
	 *
	 * @return void
	 */
	public function testSetPersonnePhysique() {

		$obj = new Intervenants();

		$obj->setPersonnePhysique(true);
		$this->assertEquals(true, $obj->getPersonnePhysique());
	}

	/**
	 * Tests the setPortable1() method.
	 *
	 * @return void
	 */
	public function testSetPortable1() {

		$obj = new Intervenants();

		$obj->setPortable1("portable1");
		$this->assertEquals("portable1", $obj->getPortable1());
	}

	/**
	 * Tests the setPortable12() method.
	 *
	 * @return void
	 */
	public function testSetPortable12() {

		$obj = new Intervenants();

		$obj->setPortable12("portable12");
		$this->assertEquals("portable12", $obj->getPortable12());
	}

	/**
	 * Tests the setPortable2() method.
	 *
	 * @return void
	 */
	public function testSetPortable2() {

		$obj = new Intervenants();

		$obj->setPortable2("portable2");
		$this->assertEquals("portable2", $obj->getPortable2());
	}

	/**
	 * Tests the setPortable22() method.
	 *
	 * @return void
	 */
	public function testSetPortable22() {

		$obj = new Intervenants();

		$obj->setPortable22("portable22");
		$this->assertEquals("portable22", $obj->getPortable22());
	}

	/**
	 * Tests the setPrenom() method.
	 *
	 * @return void
	 */
	public function testSetPrenom() {

		$obj = new Intervenants();

		$obj->setPrenom("prenom");
		$this->assertEquals("prenom", $obj->getPrenom());
	}

	/**
	 * Tests the setQualite() method.
	 *
	 * @return void
	 */
	public function testSetQualite() {

		$obj = new Intervenants();

		$obj->setQualite("qualite");
		$this->assertEquals("qualite", $obj->getQualite());
	}

	/**
	 * Tests the setRC() method.
	 *
	 * @return void
	 */
	public function testSetRC() {

		$obj = new Intervenants();

		$obj->setRC("rC");
		$this->assertEquals("rC", $obj->getRC());
	}

	/**
	 * Tests the setRCCode() method.
	 *
	 * @return void
	 */
	public function testSetRCCode() {

		$obj = new Intervenants();

		$obj->setRCCode("rCCode");
		$this->assertEquals("rCCode", $obj->getRCCode());
	}

	/**
	 * Tests the setRIB() method.
	 *
	 * @return void
	 */
	public function testSetRIB() {

		$obj = new Intervenants();

		$obj->setRIB("rIB");
		$this->assertEquals("rIB", $obj->getRIB());
	}

	/**
	 * Tests the setRM() method.
	 *
	 * @return void
	 */
	public function testSetRM() {

		$obj = new Intervenants();

		$obj->setRM("rM");
		$this->assertEquals("rM", $obj->getRM());
	}

	/**
	 * Tests the setRMCode() method.
	 *
	 * @return void
	 */
	public function testSetRMCode() {

		$obj = new Intervenants();

		$obj->setRMCode("rMCode");
		$this->assertEquals("rMCode", $obj->getRMCode());
	}

	/**
	 * Tests the setRegimeMatrimonial() method.
	 *
	 * @return void
	 */
	public function testSetRegimeMatrimonial() {

		$obj = new Intervenants();

		$obj->setRegimeMatrimonial("regimeMatrimonial");
		$this->assertEquals("regimeMatrimonial", $obj->getRegimeMatrimonial());
	}

	/**
	 * Tests the setRegimeMatrimoniale() method.
	 *
	 * @return void
	 */
	public function testSetRegimeMatrimoniale() {

		$obj = new Intervenants();

		$obj->setRegimeMatrimoniale("regimeMatrimoniale");
		$this->assertEquals("regimeMatrimoniale", $obj->getRegimeMatrimoniale());
	}

	/**
	 * Tests the setSalarieIndependant() method.
	 *
	 * @return void
	 */
	public function testSetSalarieIndependant() {

		$obj = new Intervenants();

		$obj->setSalarieIndependant("salarieIndependant");
		$this->assertEquals("salarieIndependant", $obj->getSalarieIndependant());
	}

	/**
	 * Tests the setSiret() method.
	 *
	 * @return void
	 */
	public function testSetSiret() {

		$obj = new Intervenants();

		$obj->setSiret("siret");
		$this->assertEquals("siret", $obj->getSiret());
	}

	/**
	 * Tests the setSituationFam() method.
	 *
	 * @return void
	 */
	public function testSetSituationFam() {

		$obj = new Intervenants();

		$obj->setSituationFam("situationFam");
		$this->assertEquals("situationFam", $obj->getSituationFam());
	}

	/**
	 * Tests the setTel1() method.
	 *
	 * @return void
	 */
	public function testSetTel1() {

		$obj = new Intervenants();

		$obj->setTel1("tel1");
		$this->assertEquals("tel1", $obj->getTel1());
	}

	/**
	 * Tests the setTel12() method.
	 *
	 * @return void
	 */
	public function testSetTel12() {

		$obj = new Intervenants();

		$obj->setTel12("tel12");
		$this->assertEquals("tel12", $obj->getTel12());
	}

	/**
	 * Tests the setTel2() method.
	 *
	 * @return void
	 */
	public function testSetTel2() {

		$obj = new Intervenants();

		$obj->setTel2("tel2");
		$this->assertEquals("tel2", $obj->getTel2());
	}

	/**
	 * Tests the setTel22() method.
	 *
	 * @return void
	 */
	public function testSetTel22() {

		$obj = new Intervenants();

		$obj->setTel22("tel22");
		$this->assertEquals("tel22", $obj->getTel22());
	}

	/**
	 * Tests the setTelVoiture() method.
	 *
	 * @return void
	 */
	public function testSetTelVoiture() {

		$obj = new Intervenants();

		$obj->setTelVoiture("telVoiture");
		$this->assertEquals("telVoiture", $obj->getTelVoiture());
	}

	/**
	 * Tests the setTelVoiture2() method.
	 *
	 * @return void
	 */
	public function testSetTelVoiture2() {

		$obj = new Intervenants();

		$obj->setTelVoiture2("telVoiture2");
		$this->assertEquals("telVoiture2", $obj->getTelVoiture2());
	}

	/**
	 * Tests the setTelex() method.
	 *
	 * @return void
	 */
	public function testSetTelex() {

		$obj = new Intervenants();

		$obj->setTelex("telex");
		$this->assertEquals("telex", $obj->getTelex());
	}

	/**
	 * Tests the setTelex2() method.
	 *
	 * @return void
	 */
	public function testSetTelex2() {

		$obj = new Intervenants();

		$obj->setTelex2("telex2");
		$this->assertEquals("telex2", $obj->getTelex2());
	}

	/**
	 * Tests the setTravailADomicile() method.
	 *
	 * @return void
	 */
	public function testSetTravailADomicile() {

		$obj = new Intervenants();

		$obj->setTravailADomicile(true);
		$this->assertEquals(true, $obj->getTravailADomicile());
	}

	/**
	 * Tests the setType() method.
	 *
	 * @return void
	 */
	public function testSetType() {

		$obj = new Intervenants();

		$obj->setType("type");
		$this->assertEquals("type", $obj->getType());
	}

	/**
	 * Tests the setTypeSociete() method.
	 *
	 * @return void
	 */
	public function testSetTypeSociete() {

		$obj = new Intervenants();

		$obj->setTypeSociete("typeSociete");
		$this->assertEquals("typeSociete", $obj->getTypeSociete());
	}

	/**
	 * Tests the setVilleMariage() method.
	 *
	 * @return void
	 */
	public function testSetVilleMariage() {

		$obj = new Intervenants();

		$obj->setVilleMariage("villeMariage");
		$this->assertEquals("villeMariage", $obj->getVilleMariage());
	}

	/**
	 * Tests the setVilleNaissance() method.
	 *
	 * @return void
	 */
	public function testSetVilleNaissance() {

		$obj = new Intervenants();

		$obj->setVilleNaissance("villeNaissance");
		$this->assertEquals("villeNaissance", $obj->getVilleNaissance());
	}

	/**
	 * Tests the setVilleRC() method.
	 *
	 * @return void
	 */
	public function testSetVilleRC() {

		$obj = new Intervenants();

		$obj->setVilleRC("villeRC");
		$this->assertEquals("villeRC", $obj->getVilleRC());
	}

	/**
	 * Tests the setVilleRM() method.
	 *
	 * @return void
	 */
	public function testSetVilleRM() {

		$obj = new Intervenants();

		$obj->setVilleRM("villeRM");
		$this->assertEquals("villeRM", $obj->getVilleRM());
	}

	/**
	 * Tests the setZipCode() method.
	 *
	 * @return void
	 */
	public function testSetZipCode() {

		$obj = new Intervenants();

		$obj->setZipCode("zipCode");
		$this->assertEquals("zipCode", $obj->getZipCode());
	}

}
