<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\Chantiers;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chantiers model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class ChantiersTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Chantiers();

		$this->assertNull($obj->getAdFBTQ());
		$this->assertNull($obj->getAdFBureauDistributeur());
		$this->assertNull($obj->getAdFCivilite());
		$this->assertNull($obj->getAdFCodePays());
		$this->assertNull($obj->getAdFCodePostal());
		$this->assertNull($obj->getAdFComplement());
		$this->assertNull($obj->getAdFNomClient());
		$this->assertNull($obj->getAdFNomSuite());
		$this->assertNull($obj->getAdFNomSuite2());
		$this->assertNull($obj->getAdFNomSuite3());
		$this->assertNull($obj->getAdFNomVoie());
		$this->assertNull($obj->getAdFNumVoie());
		$this->assertNull($obj->getAdFTypeAdresse());
		$this->assertNull($obj->getAdresse());
		$this->assertNull($obj->getBTQ());
		$this->assertNull($obj->getBTQLivraison());
		$this->assertNull($obj->getBudgetCommande());
		$this->assertNull($obj->getBureauDistributeur());
		$this->assertNull($obj->getBureauDistributeurLivraison());
		$this->assertNull($obj->getChantierPonctuel());
		$this->assertNull($obj->getChefEquipe());
		$this->assertNull($obj->getCleAlpha());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeAgence());
		$this->assertNull($obj->getCodeAnalytique());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeCommercial());
		$this->assertNull($obj->getCodeEmpInspecteur());
		$this->assertNull($obj->getCodeFormule());
		$this->assertNull($obj->getCodeLivraison());
		$this->assertNull($obj->getCodePays());
		$this->assertNull($obj->getCodePostal());
		$this->assertNull($obj->getCodePostalLivraison());
		$this->assertNull($obj->getCodeRegMarge());
		$this->assertNull($obj->getCodeRevision());
		$this->assertNull($obj->getCodeTVA());
		$this->assertNull($obj->getCodeVentilCompta());
		$this->assertNull($obj->getCollectif());
		$this->assertNull($obj->getCommandeIsolee());
		$this->assertNull($obj->getComplementLivraison());
		$this->assertNull($obj->getComplement());
		$this->assertNull($obj->getDateCreat());
		$this->assertNull($obj->getDateDebut());
		$this->assertNull($obj->getDateEcheanceContrat());
		$this->assertNull($obj->getDateFin());
		$this->assertNull($obj->getDateModif());
		$this->assertNull($obj->getDateRevision());
		$this->assertNull($obj->getDescriptif());
		$this->assertNull($obj->getDtAvantDernPrepa());
		$this->assertNull($obj->getDtDernPrepa());
		$this->assertNull($obj->getDtValiditeFactDeb());
		$this->assertNull($obj->getDtValiditeFactDebDebMois());
		$this->assertNull($obj->getDtValiditeFactFin());
		$this->assertNull($obj->getDtValiditeFactFinFinMois());
		$this->assertNull($obj->getEcheanceAnnuelle());
		$this->assertNull($obj->getFactNegoceIsolee());
		$this->assertNull($obj->getFactureIsolee());
		$this->assertNull($obj->getJourFact());
		$this->assertNull($obj->getLatitude());
		$this->assertNull($obj->getLoiChatelSurFacture());
		$this->assertNull($obj->getLongitude());
		$this->assertNull($obj->getMajStockByDA());
		$this->assertNull($obj->getNbControlesPrevus());
		$this->assertNull($obj->getNbMoisPreavis());
		$this->assertNull($obj->getNomAdresse());
		$this->assertNull($obj->getNomChantier());
		$this->assertNull($obj->getNomLivraison());
		$this->assertNull($obj->getNomResponsable());
		$this->assertNull($obj->getNomSuite());
		$this->assertNull($obj->getNomSuiteLivraison());
		$this->assertNull($obj->getNomVoie());
		$this->assertNull($obj->getNomVoieLivraison());
		$this->assertNull($obj->getNumVoie());
		$this->assertNull($obj->getNumVoieLivraison());
		$this->assertNull($obj->getNumeroCompte());
		$this->assertNull($obj->getPlanFact());
		$this->assertNull($obj->getPourcConsoProduit());
		$this->assertNull($obj->getPourcMargePrevis());
		$this->assertNull($obj->getReferenceFacture());
		$this->assertNull($obj->getReferenceFacture2());
		$this->assertNull($obj->getRuptDateLivraison());
		$this->assertNull($obj->getTelephone());
	}

	/**
	 * Tests the setAdFBTQ() method.
	 *
	 * @return void
	 */
	public function testSetAdFBTQ() {

		$obj = new Chantiers();

		$obj->setAdFBTQ("adFBTQ");
		$this->assertEquals("adFBTQ", $obj->getAdFBTQ());
	}

	/**
	 * Tests the setAdFBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetAdFBureauDistributeur() {

		$obj = new Chantiers();

		$obj->setAdFBureauDistributeur("adFBureauDistributeur");
		$this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
	}

	/**
	 * Tests the setAdFCivilite() method.
	 *
	 * @return void
	 */
	public function testSetAdFCivilite() {

		$obj = new Chantiers();

		$obj->setAdFCivilite("adFCivilite");
		$this->assertEquals("adFCivilite", $obj->getAdFCivilite());
	}

	/**
	 * Tests the setAdFCodePays() method.
	 *
	 * @return void
	 */
	public function testSetAdFCodePays() {

		$obj = new Chantiers();

		$obj->setAdFCodePays("adFCodePays");
		$this->assertEquals("adFCodePays", $obj->getAdFCodePays());
	}

	/**
	 * Tests the setAdFCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetAdFCodePostal() {

		$obj = new Chantiers();

		$obj->setAdFCodePostal("adFCodePostal");
		$this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
	}

	/**
	 * Tests the setAdFComplement() method.
	 *
	 * @return void
	 */
	public function testSetAdFComplement() {

		$obj = new Chantiers();

		$obj->setAdFComplement("adFComplement");
		$this->assertEquals("adFComplement", $obj->getAdFComplement());
	}

	/**
	 * Tests the setAdFNomClient() method.
	 *
	 * @return void
	 */
	public function testSetAdFNomClient() {

		$obj = new Chantiers();

		$obj->setAdFNomClient("adFNomClient");
		$this->assertEquals("adFNomClient", $obj->getAdFNomClient());
	}

	/**
	 * Tests the setAdFNomSuite() method.
	 *
	 * @return void
	 */
	public function testSetAdFNomSuite() {

		$obj = new Chantiers();

		$obj->setAdFNomSuite("adFNomSuite");
		$this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
	}

	/**
	 * Tests the setAdFNomSuite2() method.
	 *
	 * @return void
	 */
	public function testSetAdFNomSuite2() {

		$obj = new Chantiers();

		$obj->setAdFNomSuite2("adFNomSuite2");
		$this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
	}

	/**
	 * Tests the setAdFNomSuite3() method.
	 *
	 * @return void
	 */
	public function testSetAdFNomSuite3() {

		$obj = new Chantiers();

		$obj->setAdFNomSuite3("adFNomSuite3");
		$this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
	}

	/**
	 * Tests the setAdFNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetAdFNomVoie() {

		$obj = new Chantiers();

		$obj->setAdFNomVoie("adFNomVoie");
		$this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
	}

	/**
	 * Tests the setAdFNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetAdFNumVoie() {

		$obj = new Chantiers();

		$obj->setAdFNumVoie("adFNumVoie");
		$this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
	}

	/**
	 * Tests the setAdFTypeAdresse() method.
	 *
	 * @return void
	 */
	public function testSetAdFTypeAdresse() {

		$obj = new Chantiers();

		$obj->setAdFTypeAdresse("adFTypeAdresse");
		$this->assertEquals("adFTypeAdresse", $obj->getAdFTypeAdresse());
	}

	/**
	 * Tests the setAdresse() method.
	 *
	 * @return void
	 */
	public function testSetAdresse() {

		$obj = new Chantiers();

		$obj->setAdresse("adresse");
		$this->assertEquals("adresse", $obj->getAdresse());
	}

	/**
	 * Tests the setBTQ() method.
	 *
	 * @return void
	 */
	public function testSetBTQ() {

		$obj = new Chantiers();

		$obj->setBTQ("bTQ");
		$this->assertEquals("bTQ", $obj->getBTQ());
	}

	/**
	 * Tests the setBTQLivraison() method.
	 *
	 * @return void
	 */
	public function testSetBTQLivraison() {

		$obj = new Chantiers();

		$obj->setBTQLivraison("bTQLivraison");
		$this->assertEquals("bTQLivraison", $obj->getBTQLivraison());
	}

	/**
	 * Tests the setBudgetCommande() method.
	 *
	 * @return void
	 */
	public function testSetBudgetCommande() {

		$obj = new Chantiers();

		$obj->setBudgetCommande(10.092018);
		$this->assertEquals(10.092018, $obj->getBudgetCommande());
	}

	/**
	 * Tests the setBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur() {

		$obj = new Chantiers();

		$obj->setBureauDistributeur("bureauDistributeur");
		$this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
	}

	/**
	 * Tests the setBureauDistributeurLivraison() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeurLivraison() {

		$obj = new Chantiers();

		$obj->setBureauDistributeurLivraison("bureauDistributeurLivraison");
		$this->assertEquals("bureauDistributeurLivraison", $obj->getBureauDistributeurLivraison());
	}

	/**
	 * Tests the setChantierPonctuel() method.
	 *
	 * @return void
	 */
	public function testSetChantierPonctuel() {

		$obj = new Chantiers();

		$obj->setChantierPonctuel(true);
		$this->assertEquals(true, $obj->getChantierPonctuel());
	}

	/**
	 * Tests the setChefEquipe() method.
	 *
	 * @return void
	 */
	public function testSetChefEquipe() {

		$obj = new Chantiers();

		$obj->setChefEquipe("chefEquipe");
		$this->assertEquals("chefEquipe", $obj->getChefEquipe());
	}

	/**
	 * Tests the setCleAlpha() method.
	 *
	 * @return void
	 */
	public function testSetCleAlpha() {

		$obj = new Chantiers();

		$obj->setCleAlpha("cleAlpha");
		$this->assertEquals("cleAlpha", $obj->getCleAlpha());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new Chantiers();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeAgence() method.
	 *
	 * @return void
	 */
	public function testSetCodeAgence() {

		$obj = new Chantiers();

		$obj->setCodeAgence("codeAgence");
		$this->assertEquals("codeAgence", $obj->getCodeAgence());
	}

	/**
	 * Tests the setCodeAnalytique() method.
	 *
	 * @return void
	 */
	public function testSetCodeAnalytique() {

		$obj = new Chantiers();

		$obj->setCodeAnalytique("codeAnalytique");
		$this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new Chantiers();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Chantiers();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCommercial() method.
	 *
	 * @return void
	 */
	public function testSetCodeCommercial() {

		$obj = new Chantiers();

		$obj->setCodeCommercial("codeCommercial");
		$this->assertEquals("codeCommercial", $obj->getCodeCommercial());
	}

	/**
	 * Tests the setCodeEmpInspecteur() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmpInspecteur() {

		$obj = new Chantiers();

		$obj->setCodeEmpInspecteur("codeEmpInspecteur");
		$this->assertEquals("codeEmpInspecteur", $obj->getCodeEmpInspecteur());
	}

	/**
	 * Tests the setCodeFormule() method.
	 *
	 * @return void
	 */
	public function testSetCodeFormule() {

		$obj = new Chantiers();

		$obj->setCodeFormule("codeFormule");
		$this->assertEquals("codeFormule", $obj->getCodeFormule());
	}

	/**
	 * Tests the setCodeLivraison() method.
	 *
	 * @return void
	 */
	public function testSetCodeLivraison() {

		$obj = new Chantiers();

		$obj->setCodeLivraison("codeLivraison");
		$this->assertEquals("codeLivraison", $obj->getCodeLivraison());
	}

	/**
	 * Tests the setCodePays() method.
	 *
	 * @return void
	 */
	public function testSetCodePays() {

		$obj = new Chantiers();

		$obj->setCodePays("codePays");
		$this->assertEquals("codePays", $obj->getCodePays());
	}

	/**
	 * Tests the setCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal() {

		$obj = new Chantiers();

		$obj->setCodePostal("codePostal");
		$this->assertEquals("codePostal", $obj->getCodePostal());
	}

	/**
	 * Tests the setCodePostalLivraison() method.
	 *
	 * @return void
	 */
	public function testSetCodePostalLivraison() {

		$obj = new Chantiers();

		$obj->setCodePostalLivraison("codePostalLivraison");
		$this->assertEquals("codePostalLivraison", $obj->getCodePostalLivraison());
	}

	/**
	 * Tests the setCodeRegMarge() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegMarge() {

		$obj = new Chantiers();

		$obj->setCodeRegMarge("codeRegMarge");
		$this->assertEquals("codeRegMarge", $obj->getCodeRegMarge());
	}

	/**
	 * Tests the setCodeRevision() method.
	 *
	 * @return void
	 */
	public function testSetCodeRevision() {

		$obj = new Chantiers();

		$obj->setCodeRevision("codeRevision");
		$this->assertEquals("codeRevision", $obj->getCodeRevision());
	}

	/**
	 * Tests the setCodeTVA() method.
	 *
	 * @return void
	 */
	public function testSetCodeTVA() {

		$obj = new Chantiers();

		$obj->setCodeTVA("codeTVA");
		$this->assertEquals("codeTVA", $obj->getCodeTVA());
	}

	/**
	 * Tests the setCodeVentilCompta() method.
	 *
	 * @return void
	 */
	public function testSetCodeVentilCompta() {

		$obj = new Chantiers();

		$obj->setCodeVentilCompta("codeVentilCompta");
		$this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
	}

	/**
	 * Tests the setCollectif() method.
	 *
	 * @return void
	 */
	public function testSetCollectif() {

		$obj = new Chantiers();

		$obj->setCollectif("collectif");
		$this->assertEquals("collectif", $obj->getCollectif());
	}

	/**
	 * Tests the setCommandeIsolee() method.
	 *
	 * @return void
	 */
	public function testSetCommandeIsolee() {

		$obj = new Chantiers();

		$obj->setCommandeIsolee(true);
		$this->assertEquals(true, $obj->getCommandeIsolee());
	}

	/**
	 * Tests the setComplementLivraison() method.
	 *
	 * @return void
	 */
	public function testSetComplementLivraison() {

		$obj = new Chantiers();

		$obj->setComplementLivraison("complementLivraison");
		$this->assertEquals("complementLivraison", $obj->getComplementLivraison());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new Chantiers();

		$obj->setComplement("complément");
		$this->assertEquals("complément", $obj->getComplement());
	}

	/**
	 * Tests the setDateCreat() method.
	 *
	 * @return void
	 */
	public function testSetDateCreat() {

		$obj = new Chantiers();

		$obj->setDateCreat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreat());
	}

	/**
	 * Tests the setDateDebut() method.
	 *
	 * @return void
	 */
	public function testSetDateDebut() {

		$obj = new Chantiers();

		$obj->setDateDebut(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
	}

	/**
	 * Tests the setDateEcheanceContrat() method.
	 *
	 * @return void
	 */
	public function testSetDateEcheanceContrat() {

		$obj = new Chantiers();

		$obj->setDateEcheanceContrat(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEcheanceContrat());
	}

	/**
	 * Tests the setDateFin() method.
	 *
	 * @return void
	 */
	public function testSetDateFin() {

		$obj = new Chantiers();

		$obj->setDateFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
	}

	/**
	 * Tests the setDateModif() method.
	 *
	 * @return void
	 */
	public function testSetDateModif() {

		$obj = new Chantiers();

		$obj->setDateModif(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
	}

	/**
	 * Tests the setDateRevision() method.
	 *
	 * @return void
	 */
	public function testSetDateRevision() {

		$obj = new Chantiers();

		$obj->setDateRevision(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRevision());
	}

	/**
	 * Tests the setDescriptif() method.
	 *
	 * @return void
	 */
	public function testSetDescriptif() {

		$obj = new Chantiers();

		$obj->setDescriptif("descriptif");
		$this->assertEquals("descriptif", $obj->getDescriptif());
	}

	/**
	 * Tests the setDtAvantDernPrepa() method.
	 *
	 * @return void
	 */
	public function testSetDtAvantDernPrepa() {

		$obj = new Chantiers();

		$obj->setDtAvantDernPrepa(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtAvantDernPrepa());
	}

	/**
	 * Tests the setDtDernPrepa() method.
	 *
	 * @return void
	 */
	public function testSetDtDernPrepa() {

		$obj = new Chantiers();

		$obj->setDtDernPrepa(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDernPrepa());
	}

	/**
	 * Tests the setDtValiditeFactDeb() method.
	 *
	 * @return void
	 */
	public function testSetDtValiditeFactDeb() {

		$obj = new Chantiers();

		$obj->setDtValiditeFactDeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactDeb());
	}

	/**
	 * Tests the setDtValiditeFactDebDebMois() method.
	 *
	 * @return void
	 */
	public function testSetDtValiditeFactDebDebMois() {

		$obj = new Chantiers();

		$obj->setDtValiditeFactDebDebMois(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactDebDebMois());
	}

	/**
	 * Tests the setDtValiditeFactFin() method.
	 *
	 * @return void
	 */
	public function testSetDtValiditeFactFin() {

		$obj = new Chantiers();

		$obj->setDtValiditeFactFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactFin());
	}

	/**
	 * Tests the setDtValiditeFactFinFinMois() method.
	 *
	 * @return void
	 */
	public function testSetDtValiditeFactFinFinMois() {

		$obj = new Chantiers();

		$obj->setDtValiditeFactFinFinMois(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDtValiditeFactFinFinMois());
	}

	/**
	 * Tests the setEcheanceAnnuelle() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceAnnuelle() {

		$obj = new Chantiers();

		$obj->setEcheanceAnnuelle(true);
		$this->assertEquals(true, $obj->getEcheanceAnnuelle());
	}

	/**
	 * Tests the setFactNegoceIsolee() method.
	 *
	 * @return void
	 */
	public function testSetFactNegoceIsolee() {

		$obj = new Chantiers();

		$obj->setFactNegoceIsolee(true);
		$this->assertEquals(true, $obj->getFactNegoceIsolee());
	}

	/**
	 * Tests the setFactureIsolee() method.
	 *
	 * @return void
	 */
	public function testSetFactureIsolee() {

		$obj = new Chantiers();

		$obj->setFactureIsolee(true);
		$this->assertEquals(true, $obj->getFactureIsolee());
	}

	/**
	 * Tests the setJourFact() method.
	 *
	 * @return void
	 */
	public function testSetJourFact() {

		$obj = new Chantiers();

		$obj->setJourFact("jourFact");
		$this->assertEquals("jourFact", $obj->getJourFact());
	}

	/**
	 * Tests the setLatitude() method.
	 *
	 * @return void
	 */
	public function testSetLatitude() {

		$obj = new Chantiers();

		$obj->setLatitude(10.092018);
		$this->assertEquals(10.092018, $obj->getLatitude());
	}

	/**
	 * Tests the setLoiChatelSurFacture() method.
	 *
	 * @return void
	 */
	public function testSetLoiChatelSurFacture() {

		$obj = new Chantiers();

		$obj->setLoiChatelSurFacture(true);
		$this->assertEquals(true, $obj->getLoiChatelSurFacture());
	}

	/**
	 * Tests the setLongitude() method.
	 *
	 * @return void
	 */
	public function testSetLongitude() {

		$obj = new Chantiers();

		$obj->setLongitude(10.092018);
		$this->assertEquals(10.092018, $obj->getLongitude());
	}

	/**
	 * Tests the setMajStockByDA() method.
	 *
	 * @return void
	 */
	public function testSetMajStockByDA() {

		$obj = new Chantiers();

		$obj->setMajStockByDA(true);
		$this->assertEquals(true, $obj->getMajStockByDA());
	}

	/**
	 * Tests the setNbControlesPrevus() method.
	 *
	 * @return void
	 */
	public function testSetNbControlesPrevus() {

		$obj = new Chantiers();

		$obj->setNbControlesPrevus(10);
		$this->assertEquals(10, $obj->getNbControlesPrevus());
	}

	/**
	 * Tests the setNbMoisPreavis() method.
	 *
	 * @return void
	 */
	public function testSetNbMoisPreavis() {

		$obj = new Chantiers();

		$obj->setNbMoisPreavis("nbMoisPreavis");
		$this->assertEquals("nbMoisPreavis", $obj->getNbMoisPreavis());
	}

	/**
	 * Tests the setNomAdresse() method.
	 *
	 * @return void
	 */
	public function testSetNomAdresse() {

		$obj = new Chantiers();

		$obj->setNomAdresse("nomAdresse");
		$this->assertEquals("nomAdresse", $obj->getNomAdresse());
	}

	/**
	 * Tests the setNomChantier() method.
	 *
	 * @return void
	 */
	public function testSetNomChantier() {

		$obj = new Chantiers();

		$obj->setNomChantier("nomChantier");
		$this->assertEquals("nomChantier", $obj->getNomChantier());
	}

	/**
	 * Tests the setNomLivraison() method.
	 *
	 * @return void
	 */
	public function testSetNomLivraison() {

		$obj = new Chantiers();

		$obj->setNomLivraison("nomLivraison");
		$this->assertEquals("nomLivraison", $obj->getNomLivraison());
	}

	/**
	 * Tests the setNomResponsable() method.
	 *
	 * @return void
	 */
	public function testSetNomResponsable() {

		$obj = new Chantiers();

		$obj->setNomResponsable("nomResponsable");
		$this->assertEquals("nomResponsable", $obj->getNomResponsable());
	}

	/**
	 * Tests the setNomSuite() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite() {

		$obj = new Chantiers();

		$obj->setNomSuite("nomSuite");
		$this->assertEquals("nomSuite", $obj->getNomSuite());
	}

	/**
	 * Tests the setNomSuiteLivraison() method.
	 *
	 * @return void
	 */
	public function testSetNomSuiteLivraison() {

		$obj = new Chantiers();

		$obj->setNomSuiteLivraison("nomSuiteLivraison");
		$this->assertEquals("nomSuiteLivraison", $obj->getNomSuiteLivraison());
	}

	/**
	 * Tests the setNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie() {

		$obj = new Chantiers();

		$obj->setNomVoie("nomVoie");
		$this->assertEquals("nomVoie", $obj->getNomVoie());
	}

	/**
	 * Tests the setNomVoieLivraison() method.
	 *
	 * @return void
	 */
	public function testSetNomVoieLivraison() {

		$obj = new Chantiers();

		$obj->setNomVoieLivraison("nomVoieLivraison");
		$this->assertEquals("nomVoieLivraison", $obj->getNomVoieLivraison());
	}

	/**
	 * Tests the setNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie() {

		$obj = new Chantiers();

		$obj->setNumVoie("numVoie");
		$this->assertEquals("numVoie", $obj->getNumVoie());
	}

	/**
	 * Tests the setNumVoieLivraison() method.
	 *
	 * @return void
	 */
	public function testSetNumVoieLivraison() {

		$obj = new Chantiers();

		$obj->setNumVoieLivraison("numVoieLivraison");
		$this->assertEquals("numVoieLivraison", $obj->getNumVoieLivraison());
	}

	/**
	 * Tests the setNumeroCompte() method.
	 *
	 * @return void
	 */
	public function testSetNumeroCompte() {

		$obj = new Chantiers();

		$obj->setNumeroCompte("numeroCompte");
		$this->assertEquals("numeroCompte", $obj->getNumeroCompte());
	}

	/**
	 * Tests the setPlanFact() method.
	 *
	 * @return void
	 */
	public function testSetPlanFact() {

		$obj = new Chantiers();

		$obj->setPlanFact(true);
		$this->assertEquals(true, $obj->getPlanFact());
	}

	/**
	 * Tests the setPourcConsoProduit() method.
	 *
	 * @return void
	 */
	public function testSetPourcConsoProduit() {

		$obj = new Chantiers();

		$obj->setPourcConsoProduit(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcConsoProduit());
	}

	/**
	 * Tests the setPourcMargePrevis() method.
	 *
	 * @return void
	 */
	public function testSetPourcMargePrevis() {

		$obj = new Chantiers();

		$obj->setPourcMargePrevis(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcMargePrevis());
	}

	/**
	 * Tests the setReferenceFacture() method.
	 *
	 * @return void
	 */
	public function testSetReferenceFacture() {

		$obj = new Chantiers();

		$obj->setReferenceFacture("referenceFacture");
		$this->assertEquals("referenceFacture", $obj->getReferenceFacture());
	}

	/**
	 * Tests the setReferenceFacture2() method.
	 *
	 * @return void
	 */
	public function testSetReferenceFacture2() {

		$obj = new Chantiers();

		$obj->setReferenceFacture2("referenceFacture2");
		$this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
	}

	/**
	 * Tests the setRuptDateLivraison() method.
	 *
	 * @return void
	 */
	public function testSetRuptDateLivraison() {

		$obj = new Chantiers();

		$obj->setRuptDateLivraison(true);
		$this->assertEquals(true, $obj->getRuptDateLivraison());
	}

	/**
	 * Tests the setTelephone() method.
	 *
	 * @return void
	 */
	public function testSetTelephone() {

		$obj = new Chantiers();

		$obj->setTelephone("telephone");
		$this->assertEquals("telephone", $obj->getTelephone());
	}

}
