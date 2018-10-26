<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\Tabledeserreurs;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Table des erreurs model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class TabledeserreursTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Tabledeserreurs();

		$this->assertNull($obj->getATransfererEnP());
		$this->assertNull($obj->getAdministratif());
		$this->assertNull($obj->getAllegParticulier());
		$this->assertNull($obj->getAutreAlleg());
		$this->assertNull($obj->getBTQ());
		$this->assertNull($obj->getBureauDistributeur());
		$this->assertNull($obj->getCDDCDI());
		$this->assertNull($obj->getCalculParticip());
		$this->assertNull($obj->getCarteSejourDelivreeLe());
		$this->assertNull($obj->getCarteSejourExpireLe());
		$this->assertNull($obj->getCarteTravailDelivreeLe());
		$this->assertNull($obj->getCarteTravailExpireLe());
		$this->assertNull($obj->getCasPartSS());
		$this->assertNull($obj->getCategPopulation());
		$this->assertNull($obj->getCategSalarie());
		$this->assertNull($obj->getCategoriePermis());
		$this->assertNull($obj->getClassification());
		$this->assertNull($obj->getCledeux());
		$this->assertNull($obj->getCodeAT());
		$this->assertNull($obj->getCodeCentreUrssaf());
		$this->assertNull($obj->getCodeConvention());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeNaf());
		$this->assertNull($obj->getCodeOfficielCommune());
		$this->assertNull($obj->getCodePaysNaissance());
		$this->assertNull($obj->getCodePostal());
		$this->assertNull($obj->getCodeTypeSal());
		$this->assertNull($obj->getCoeffConvention());
		$this->assertNull($obj->getCommuneNaissance());
		$this->assertNull($obj->getComplement());
		$this->assertNull($obj->getCompteTiers());
		$this->assertNull($obj->getCptAccompte());
		$this->assertNull($obj->getCtrlTauxSalBase());
		$this->assertNull($obj->getCum30SS());
		$this->assertNull($obj->getCumBaseCsg());
		$this->assertNull($obj->getCumBaseGMP());
		$this->assertNull($obj->getCumBaseSS());
		$this->assertNull($obj->getCumBaseTrA());
		$this->assertNull($obj->getCumBaseTrACaisse1());
		$this->assertNull($obj->getCumBaseTrACaisse2());
		$this->assertNull($obj->getCumBaseTrACaisse3());
		$this->assertNull($obj->getCumBaseTrB());
		$this->assertNull($obj->getCumBaseTrBCaisse1());
		$this->assertNull($obj->getCumBaseTrBCaisse2());
		$this->assertNull($obj->getCumBaseTrBCaisse3());
		$this->assertNull($obj->getCumBaseTrC());
		$this->assertNull($obj->getCumBaseTrCCaisse1());
		$this->assertNull($obj->getCumBaseTrCCaisse2());
		$this->assertNull($obj->getCumBaseTrCCaisse3());
		$this->assertNull($obj->getCumBrutAbatNonLim());
		$this->assertNull($obj->getCumBrutNonAbattu());
		$this->assertNull($obj->getCumBrutal());
		$this->assertNull($obj->getCumCpDus());
		$this->assertNull($obj->getCumCpDus_1());
		$this->assertNull($obj->getCumCpPris());
		$this->assertNull($obj->getCumCpPris_1());
		$this->assertNull($obj->getCumHReposRemplace());
		$this->assertNull($obj->getCumHService());
		$this->assertNull($obj->getCumHSup());
		$this->assertNull($obj->getCumHSupRCIT());
		$this->assertNull($obj->getCumHeurePaye());
		$this->assertNull($obj->getCumHeureTrav());
		$this->assertNull($obj->getCumJReposRecup());
		$this->assertNull($obj->getCumJourPaye());
		$this->assertNull($obj->getCumJourTrav());
		$this->assertNull($obj->getCumMtCpPris());
		$this->assertNull($obj->getCumMtCpPris_1());
		$this->assertNull($obj->getCumNetAPayer());
		$this->assertNull($obj->getCumNetImposable());
		$this->assertNull($obj->getCumPlaf1Caisse1());
		$this->assertNull($obj->getCumPlaf1Caisse2());
		$this->assertNull($obj->getCumPlaf1Caisse3());
		$this->assertNull($obj->getCumPlaf2Caisse1());
		$this->assertNull($obj->getCumPlaf2Caisse2());
		$this->assertNull($obj->getCumPlaf2Caisse3());
		$this->assertNull($obj->getCumPlafondGMP());
		$this->assertNull($obj->getCumPlafondSS1());
		$this->assertNull($obj->getCumPlafondSS2());
		$this->assertNull($obj->getCumProvCp());
		$this->assertNull($obj->getCumProvCp_1());
		$this->assertNull($obj->getCumReposComp());
		$this->assertNull($obj->getDateAncien());
		$this->assertNull($obj->getDateEmbauche());
		$this->assertNull($obj->getDateEntree1());
		$this->assertNull($obj->getDateEntree2());
		$this->assertNull($obj->getDateLicenciement());
		$this->assertNull($obj->getDateModification());
		$this->assertNull($obj->getDateNaissConjoint());
		$this->assertNull($obj->getDateNaissance());
		$this->assertNull($obj->getDateSortie1());
		$this->assertNull($obj->getDateSortie2());
		$this->assertNull($obj->getDateVisiteMedicale());
		$this->assertNull($obj->getDateVisiteReprise());
		$this->assertNull($obj->getDeptNaissance());
		$this->assertNull($obj->getDernNumPrime());
		$this->assertNull($obj->getDimType2());
		$this->assertNull($obj->getDirNonSalarie());
		$this->assertNull($obj->getDomBanque());
		$this->assertNull($obj->getEdTauxSalBase());
		$this->assertNull($obj->getEffectif());
		$this->assertNull($obj->getEffectifDas());
		$this->assertNull($obj->getEmploi());
		$this->assertNull($obj->getFictif());
		$this->assertNull($obj->getFractionEtab());
		$this->assertNull($obj->getGestionMajDim());
		$this->assertNull($obj->getGestionMajJF());
		$this->assertNull($obj->getGestionMajNuit());
		$this->assertNull($obj->getGrilleAnc1());
		$this->assertNull($obj->getGrilleAnc2());
		$this->assertNull($obj->getGrilleAnc3());
		$this->assertNull($obj->getHNuitType2());
		$this->assertNull($obj->getHandicape());
		$this->assertNull($obj->getLieuTravailConjoint());
		$this->assertNull($obj->getMatricule());
		$this->assertNull($obj->getMensualisationTache());
		$this->assertNull($obj->getMentionCP());
		$this->assertNull($obj->getMinGaranti());
		$this->assertNull($obj->getMontant1());
		$this->assertNull($obj->getMontant2());
		$this->assertNull($obj->getMontant3());
		$this->assertNull($obj->getMontant4());
		$this->assertNull($obj->getMontant5());
		$this->assertNull($obj->getMontantAvantage());
		$this->assertNull($obj->getMtBaseAcompte());
		$this->assertNull($obj->getNationalite());
		$this->assertNull($obj->getNbHeureMois());
		$this->assertNull($obj->getNbHeureSal());
		$this->assertNull($obj->getNbHeureSup());
		$this->assertNull($obj->getNbHeureTrav());
		$this->assertNull($obj->getNbJourBaseCP());
		$this->assertNull($obj->getNbPoints());
		$this->assertNull($obj->getNiveauConfidentialite());
		$this->assertNull($obj->getNomConjoint());
		$this->assertNull($obj->getNomMarital());
		$this->assertNull($obj->getNomNaissance());
		$this->assertNull($obj->getNomVille());
		$this->assertNull($obj->getNomVoie());
		$this->assertNull($obj->getNombreEnfants());
		$this->assertNull($obj->getNumVoie());
		$this->assertNull($obj->getNumero());
		$this->assertNull($obj->getNumeroCarteSejour());
		$this->assertNull($obj->getNumeroCarteTravail());
		$this->assertNull($obj->getNumeroCasPartSecu());
		$this->assertNull($obj->getNumeroGrilleType());
		$this->assertNull($obj->getNumeroInsee());
		$this->assertNull($obj->getNumeroPermis());
		$this->assertNull($obj->getOrphelin());
		$this->assertNull($obj->getPasGestionPdp());
		$this->assertNull($obj->getPension());
		$this->assertNull($obj->getPeriodicite());
		$this->assertNull($obj->getPermisDelivreLe());
		$this->assertNull($obj->getPermisDelivrePar());
		$this->assertNull($obj->getPermisExpireLe());
		$this->assertNull($obj->getPersonneAPrevenir());
		$this->assertNull($obj->getPlafondGMP());
		$this->assertNull($obj->getPlafondSS1());
		$this->assertNull($obj->getPlafondSS30());
		$this->assertNull($obj->getPourcentAbat());
		$this->assertNull($obj->getPourcentAct());
		$this->assertNull($obj->getPourcentEffectifDUCS());
		$this->assertNull($obj->getPourcentRemuHor());
		$this->assertNull($obj->getPrenom());
		$this->assertNull($obj->getPrenomConjoint());
		$this->assertNull($obj->getPrime());
		$this->assertNull($obj->getPrudCollege());
		$this->assertNull($obj->getPrudLieuVote());
		$this->assertNull($obj->getPrudSection());
		$this->assertNull($obj->getQualification());
		$this->assertNull($obj->getRegleCalcul());
		$this->assertNull($obj->getRegroupVirement());
		$this->assertNull($obj->getRegulTDS());
		$this->assertNull($obj->getRib());
		$this->assertNull($obj->getSalaireBase());
		$this->assertNull($obj->getService());
		$this->assertNull($obj->getSexe());
		$this->assertNull($obj->getSituationFam());
		$this->assertNull($obj->getTDS100());
		$this->assertNull($obj->getTDS102());
		$this->assertNull($obj->getTDS103());
		$this->assertNull($obj->getTDS105());
		$this->assertNull($obj->getTDS107());
		$this->assertNull($obj->getTDS108());
		$this->assertNull($obj->getTDS109());
		$this->assertNull($obj->getTDS110());
		$this->assertNull($obj->getTDS112());
		$this->assertNull($obj->getTDS113());
		$this->assertNull($obj->getTDS117());
		$this->assertNull($obj->getTDS119());
		$this->assertNull($obj->getTDS120());
		$this->assertNull($obj->getTDS121());
		$this->assertNull($obj->getTDS122());
		$this->assertNull($obj->getTDS125());
		$this->assertNull($obj->getTDS127());
		$this->assertNull($obj->getTDS128());
		$this->assertNull($obj->getTDS132());
		$this->assertNull($obj->getTDS133());
		$this->assertNull($obj->getTDS134());
		$this->assertNull($obj->getTDS135());
		$this->assertNull($obj->getTDS136());
		$this->assertNull($obj->getTDS138());
		$this->assertNull($obj->getTDS139());
		$this->assertNull($obj->getTDS141());
		$this->assertNull($obj->getTDS59());
		$this->assertNull($obj->getTDS60());
		$this->assertNull($obj->getTDS61());
		$this->assertNull($obj->getTDS75());
		$this->assertNull($obj->getTDS76());
		$this->assertNull($obj->getTDS77());
		$this->assertNull($obj->getTDS78());
		$this->assertNull($obj->getTDS81());
		$this->assertNull($obj->getTDS82());
		$this->assertNull($obj->getTDS84());
		$this->assertNull($obj->getTDS85());
		$this->assertNull($obj->getTDS86());
		$this->assertNull($obj->getTDS87());
		$this->assertNull($obj->getTDS88());
		$this->assertNull($obj->getTDS89());
		$this->assertNull($obj->getTDS90());
		$this->assertNull($obj->getTDS91());
		$this->assertNull($obj->getTDS92());
		$this->assertNull($obj->getTDS93());
		$this->assertNull($obj->getTDS94());
		$this->assertNull($obj->getTDS95());
		$this->assertNull($obj->getTaux1());
		$this->assertNull($obj->getTaux2());
		$this->assertNull($obj->getTaux3());
		$this->assertNull($obj->getTaux4());
		$this->assertNull($obj->getTaux5());
		$this->assertNull($obj->getTauxAbsence());
		$this->assertNull($obj->getTauxAncien());
		$this->assertNull($obj->getTauxHSup());
		$this->assertNull($obj->getTauxPensionCivile());
		$this->assertNull($obj->getTauxPensionMilitaire());
		$this->assertNull($obj->getTaxeSalaire());
		$this->assertNull($obj->getTel1());
		$this->assertNull($obj->getTelConjoint());
		$this->assertNull($obj->getTelPersAPrevenir());
		$this->assertNull($obj->getTempsPasse());
		$this->assertNull($obj->getTitre());
		$this->assertNull($obj->getTransfertEntree1());
		$this->assertNull($obj->getTransfertEntree2());
		$this->assertNull($obj->getTransfertSortie1());
		$this->assertNull($obj->getTransfertSortie2());
		$this->assertNull($obj->getTravailleJF());
		$this->assertNull($obj->getTypeContrat());
		$this->assertNull($obj->getTypeNationalite());
		$this->assertNull($obj->getTypePaiement());
		$this->assertNull($obj->getVrpMulticarte());
		$this->assertNull($obj->getplafondSS2());
	}

	/**
	 * Tests the setATransfererEnP() method.
	 *
	 * @return void
	 */
	public function testSetATransfererEnP() {

		$obj = new Tabledeserreurs();

		$obj->setATransfererEnP(true);
		$this->assertEquals(true, $obj->getATransfererEnP());
	}

	/**
	 * Tests the setAdministratif() method.
	 *
	 * @return void
	 */
	public function testSetAdministratif() {

		$obj = new Tabledeserreurs();

		$obj->setAdministratif(true);
		$this->assertEquals(true, $obj->getAdministratif());
	}

	/**
	 * Tests the setAllegParticulier() method.
	 *
	 * @return void
	 */
	public function testSetAllegParticulier() {

		$obj = new Tabledeserreurs();

		$obj->setAllegParticulier(true);
		$this->assertEquals(true, $obj->getAllegParticulier());
	}

	/**
	 * Tests the setAutreAlleg() method.
	 *
	 * @return void
	 */
	public function testSetAutreAlleg() {

		$obj = new Tabledeserreurs();

		$obj->setAutreAlleg(true);
		$this->assertEquals(true, $obj->getAutreAlleg());
	}

	/**
	 * Tests the setBTQ() method.
	 *
	 * @return void
	 */
	public function testSetBTQ() {

		$obj = new Tabledeserreurs();

		$obj->setBTQ("bTQ");
		$this->assertEquals("bTQ", $obj->getBTQ());
	}

	/**
	 * Tests the setBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur() {

		$obj = new Tabledeserreurs();

		$obj->setBureauDistributeur("bureauDistributeur");
		$this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
	}

	/**
	 * Tests the setCDDCDI() method.
	 *
	 * @return void
	 */
	public function testSetCDDCDI() {

		$obj = new Tabledeserreurs();

		$obj->setCDDCDI(true);
		$this->assertEquals(true, $obj->getCDDCDI());
	}

	/**
	 * Tests the setCalculParticip() method.
	 *
	 * @return void
	 */
	public function testSetCalculParticip() {

		$obj = new Tabledeserreurs();

		$obj->setCalculParticip(true);
		$this->assertEquals(true, $obj->getCalculParticip());
	}

	/**
	 * Tests the setCarteSejourDelivreeLe() method.
	 *
	 * @return void
	 */
	public function testSetCarteSejourDelivreeLe() {

		$obj = new Tabledeserreurs();

		$obj->setCarteSejourDelivreeLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getCarteSejourDelivreeLe());
	}

	/**
	 * Tests the setCarteSejourExpireLe() method.
	 *
	 * @return void
	 */
	public function testSetCarteSejourExpireLe() {

		$obj = new Tabledeserreurs();

		$obj->setCarteSejourExpireLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getCarteSejourExpireLe());
	}

	/**
	 * Tests the setCarteTravailDelivreeLe() method.
	 *
	 * @return void
	 */
	public function testSetCarteTravailDelivreeLe() {

		$obj = new Tabledeserreurs();

		$obj->setCarteTravailDelivreeLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getCarteTravailDelivreeLe());
	}

	/**
	 * Tests the setCarteTravailExpireLe() method.
	 *
	 * @return void
	 */
	public function testSetCarteTravailExpireLe() {

		$obj = new Tabledeserreurs();

		$obj->setCarteTravailExpireLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getCarteTravailExpireLe());
	}

	/**
	 * Tests the setCasPartSS() method.
	 *
	 * @return void
	 */
	public function testSetCasPartSS() {

		$obj = new Tabledeserreurs();

		$obj->setCasPartSS(true);
		$this->assertEquals(true, $obj->getCasPartSS());
	}

	/**
	 * Tests the setCategPopulation() method.
	 *
	 * @return void
	 */
	public function testSetCategPopulation() {

		$obj = new Tabledeserreurs();

		$obj->setCategPopulation("categPopulation");
		$this->assertEquals("categPopulation", $obj->getCategPopulation());
	}

	/**
	 * Tests the setCategSalarie() method.
	 *
	 * @return void
	 */
	public function testSetCategSalarie() {

		$obj = new Tabledeserreurs();

		$obj->setCategSalarie("categSalarie");
		$this->assertEquals("categSalarie", $obj->getCategSalarie());
	}

	/**
	 * Tests the setCategoriePermis() method.
	 *
	 * @return void
	 */
	public function testSetCategoriePermis() {

		$obj = new Tabledeserreurs();

		$obj->setCategoriePermis("categoriePermis");
		$this->assertEquals("categoriePermis", $obj->getCategoriePermis());
	}

	/**
	 * Tests the setClassification() method.
	 *
	 * @return void
	 */
	public function testSetClassification() {

		$obj = new Tabledeserreurs();

		$obj->setClassification("classification");
		$this->assertEquals("classification", $obj->getClassification());
	}

	/**
	 * Tests the setCledeux() method.
	 *
	 * @return void
	 */
	public function testSetCledeux() {

		$obj = new Tabledeserreurs();

		$obj->setCledeux("cledeux");
		$this->assertEquals("cledeux", $obj->getCledeux());
	}

	/**
	 * Tests the setCodeAT() method.
	 *
	 * @return void
	 */
	public function testSetCodeAT() {

		$obj = new Tabledeserreurs();

		$obj->setCodeAT(10);
		$this->assertEquals(10, $obj->getCodeAT());
	}

	/**
	 * Tests the setCodeCentreUrssaf() method.
	 *
	 * @return void
	 */
	public function testSetCodeCentreUrssaf() {

		$obj = new Tabledeserreurs();

		$obj->setCodeCentreUrssaf("codeCentreUrssaf");
		$this->assertEquals("codeCentreUrssaf", $obj->getCodeCentreUrssaf());
	}

	/**
	 * Tests the setCodeConvention() method.
	 *
	 * @return void
	 */
	public function testSetCodeConvention() {

		$obj = new Tabledeserreurs();

		$obj->setCodeConvention("codeConvention");
		$this->assertEquals("codeConvention", $obj->getCodeConvention());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new Tabledeserreurs();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeNaf() method.
	 *
	 * @return void
	 */
	public function testSetCodeNaf() {

		$obj = new Tabledeserreurs();

		$obj->setCodeNaf(10);
		$this->assertEquals(10, $obj->getCodeNaf());
	}

	/**
	 * Tests the setCodeOfficielCommune() method.
	 *
	 * @return void
	 */
	public function testSetCodeOfficielCommune() {

		$obj = new Tabledeserreurs();

		$obj->setCodeOfficielCommune("codeOfficielCommune");
		$this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
	}

	/**
	 * Tests the setCodePaysNaissance() method.
	 *
	 * @return void
	 */
	public function testSetCodePaysNaissance() {

		$obj = new Tabledeserreurs();

		$obj->setCodePaysNaissance("codePaysNaissance");
		$this->assertEquals("codePaysNaissance", $obj->getCodePaysNaissance());
	}

	/**
	 * Tests the setCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal() {

		$obj = new Tabledeserreurs();

		$obj->setCodePostal("codePostal");
		$this->assertEquals("codePostal", $obj->getCodePostal());
	}

	/**
	 * Tests the setCodeTypeSal() method.
	 *
	 * @return void
	 */
	public function testSetCodeTypeSal() {

		$obj = new Tabledeserreurs();

		$obj->setCodeTypeSal("codeTypeSal");
		$this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
	}

	/**
	 * Tests the setCoeffConvention() method.
	 *
	 * @return void
	 */
	public function testSetCoeffConvention() {

		$obj = new Tabledeserreurs();

		$obj->setCoeffConvention(10.092018);
		$this->assertEquals(10.092018, $obj->getCoeffConvention());
	}

	/**
	 * Tests the setCommuneNaissance() method.
	 *
	 * @return void
	 */
	public function testSetCommuneNaissance() {

		$obj = new Tabledeserreurs();

		$obj->setCommuneNaissance("communeNaissance");
		$this->assertEquals("communeNaissance", $obj->getCommuneNaissance());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new Tabledeserreurs();

		$obj->setComplement("complement");
		$this->assertEquals("complement", $obj->getComplement());
	}

	/**
	 * Tests the setCompteTiers() method.
	 *
	 * @return void
	 */
	public function testSetCompteTiers() {

		$obj = new Tabledeserreurs();

		$obj->setCompteTiers("compteTiers");
		$this->assertEquals("compteTiers", $obj->getCompteTiers());
	}

	/**
	 * Tests the setCptAccompte() method.
	 *
	 * @return void
	 */
	public function testSetCptAccompte() {

		$obj = new Tabledeserreurs();

		$obj->setCptAccompte(10);
		$this->assertEquals(10, $obj->getCptAccompte());
	}

	/**
	 * Tests the setCtrlTauxSalBase() method.
	 *
	 * @return void
	 */
	public function testSetCtrlTauxSalBase() {

		$obj = new Tabledeserreurs();

		$obj->setCtrlTauxSalBase(true);
		$this->assertEquals(true, $obj->getCtrlTauxSalBase());
	}

	/**
	 * Tests the setCum30SS() method.
	 *
	 * @return void
	 */
	public function testSetCum30SS() {

		$obj = new Tabledeserreurs();

		$obj->setCum30SS(10.092018);
		$this->assertEquals(10.092018, $obj->getCum30SS());
	}

	/**
	 * Tests the setCumBaseCsg() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseCsg() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseCsg(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseCsg());
	}

	/**
	 * Tests the setCumBaseGMP() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseGMP() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseGMP(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseGMP());
	}

	/**
	 * Tests the setCumBaseSS() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseSS() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseSS(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseSS());
	}

	/**
	 * Tests the setCumBaseTrA() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrA() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrA(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrA());
	}

	/**
	 * Tests the setCumBaseTrACaisse1() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrACaisse1() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrACaisse1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrACaisse1());
	}

	/**
	 * Tests the setCumBaseTrACaisse2() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrACaisse2() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrACaisse2(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrACaisse2());
	}

	/**
	 * Tests the setCumBaseTrACaisse3() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrACaisse3() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrACaisse3(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrACaisse3());
	}

	/**
	 * Tests the setCumBaseTrB() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrB() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrB(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrB());
	}

	/**
	 * Tests the setCumBaseTrBCaisse1() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrBCaisse1() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrBCaisse1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse1());
	}

	/**
	 * Tests the setCumBaseTrBCaisse2() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrBCaisse2() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrBCaisse2(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse2());
	}

	/**
	 * Tests the setCumBaseTrBCaisse3() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrBCaisse3() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrBCaisse3(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse3());
	}

	/**
	 * Tests the setCumBaseTrC() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrC() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrC(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrC());
	}

	/**
	 * Tests the setCumBaseTrCCaisse1() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrCCaisse1() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrCCaisse1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse1());
	}

	/**
	 * Tests the setCumBaseTrCCaisse2() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrCCaisse2() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrCCaisse2(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse2());
	}

	/**
	 * Tests the setCumBaseTrCCaisse3() method.
	 *
	 * @return void
	 */
	public function testSetCumBaseTrCCaisse3() {

		$obj = new Tabledeserreurs();

		$obj->setCumBaseTrCCaisse3(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse3());
	}

	/**
	 * Tests the setCumBrutAbatNonLim() method.
	 *
	 * @return void
	 */
	public function testSetCumBrutAbatNonLim() {

		$obj = new Tabledeserreurs();

		$obj->setCumBrutAbatNonLim(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBrutAbatNonLim());
	}

	/**
	 * Tests the setCumBrutNonAbattu() method.
	 *
	 * @return void
	 */
	public function testSetCumBrutNonAbattu() {

		$obj = new Tabledeserreurs();

		$obj->setCumBrutNonAbattu(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBrutNonAbattu());
	}

	/**
	 * Tests the setCumBrutal() method.
	 *
	 * @return void
	 */
	public function testSetCumBrutal() {

		$obj = new Tabledeserreurs();

		$obj->setCumBrutal(10.092018);
		$this->assertEquals(10.092018, $obj->getCumBrutal());
	}

	/**
	 * Tests the setCumCpDus() method.
	 *
	 * @return void
	 */
	public function testSetCumCpDus() {

		$obj = new Tabledeserreurs();

		$obj->setCumCpDus(10.092018);
		$this->assertEquals(10.092018, $obj->getCumCpDus());
	}

	/**
	 * Tests the setCumCpDus_1() method.
	 *
	 * @return void
	 */
	public function testSetCumCpDus_1() {

		$obj = new Tabledeserreurs();

		$obj->setCumCpDus_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumCpDus_1());
	}

	/**
	 * Tests the setCumCpPris() method.
	 *
	 * @return void
	 */
	public function testSetCumCpPris() {

		$obj = new Tabledeserreurs();

		$obj->setCumCpPris(10.092018);
		$this->assertEquals(10.092018, $obj->getCumCpPris());
	}

	/**
	 * Tests the setCumCpPris_1() method.
	 *
	 * @return void
	 */
	public function testSetCumCpPris_1() {

		$obj = new Tabledeserreurs();

		$obj->setCumCpPris_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumCpPris_1());
	}

	/**
	 * Tests the setCumHReposRemplace() method.
	 *
	 * @return void
	 */
	public function testSetCumHReposRemplace() {

		$obj = new Tabledeserreurs();

		$obj->setCumHReposRemplace(10.092018);
		$this->assertEquals(10.092018, $obj->getCumHReposRemplace());
	}

	/**
	 * Tests the setCumHService() method.
	 *
	 * @return void
	 */
	public function testSetCumHService() {

		$obj = new Tabledeserreurs();

		$obj->setCumHService(10.092018);
		$this->assertEquals(10.092018, $obj->getCumHService());
	}

	/**
	 * Tests the setCumHSup() method.
	 *
	 * @return void
	 */
	public function testSetCumHSup() {

		$obj = new Tabledeserreurs();

		$obj->setCumHSup(10.092018);
		$this->assertEquals(10.092018, $obj->getCumHSup());
	}

	/**
	 * Tests the setCumHSupRCIT() method.
	 *
	 * @return void
	 */
	public function testSetCumHSupRCIT() {

		$obj = new Tabledeserreurs();

		$obj->setCumHSupRCIT(10.092018);
		$this->assertEquals(10.092018, $obj->getCumHSupRCIT());
	}

	/**
	 * Tests the setCumHeurePaye() method.
	 *
	 * @return void
	 */
	public function testSetCumHeurePaye() {

		$obj = new Tabledeserreurs();

		$obj->setCumHeurePaye(10.092018);
		$this->assertEquals(10.092018, $obj->getCumHeurePaye());
	}

	/**
	 * Tests the setCumHeureTrav() method.
	 *
	 * @return void
	 */
	public function testSetCumHeureTrav() {

		$obj = new Tabledeserreurs();

		$obj->setCumHeureTrav(10.092018);
		$this->assertEquals(10.092018, $obj->getCumHeureTrav());
	}

	/**
	 * Tests the setCumJReposRecup() method.
	 *
	 * @return void
	 */
	public function testSetCumJReposRecup() {

		$obj = new Tabledeserreurs();

		$obj->setCumJReposRecup(10.092018);
		$this->assertEquals(10.092018, $obj->getCumJReposRecup());
	}

	/**
	 * Tests the setCumJourPaye() method.
	 *
	 * @return void
	 */
	public function testSetCumJourPaye() {

		$obj = new Tabledeserreurs();

		$obj->setCumJourPaye(10.092018);
		$this->assertEquals(10.092018, $obj->getCumJourPaye());
	}

	/**
	 * Tests the setCumJourTrav() method.
	 *
	 * @return void
	 */
	public function testSetCumJourTrav() {

		$obj = new Tabledeserreurs();

		$obj->setCumJourTrav(10.092018);
		$this->assertEquals(10.092018, $obj->getCumJourTrav());
	}

	/**
	 * Tests the setCumMtCpPris() method.
	 *
	 * @return void
	 */
	public function testSetCumMtCpPris() {

		$obj = new Tabledeserreurs();

		$obj->setCumMtCpPris(10.092018);
		$this->assertEquals(10.092018, $obj->getCumMtCpPris());
	}

	/**
	 * Tests the setCumMtCpPris_1() method.
	 *
	 * @return void
	 */
	public function testSetCumMtCpPris_1() {

		$obj = new Tabledeserreurs();

		$obj->setCumMtCpPris_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumMtCpPris_1());
	}

	/**
	 * Tests the setCumNetAPayer() method.
	 *
	 * @return void
	 */
	public function testSetCumNetAPayer() {

		$obj = new Tabledeserreurs();

		$obj->setCumNetAPayer(10.092018);
		$this->assertEquals(10.092018, $obj->getCumNetAPayer());
	}

	/**
	 * Tests the setCumNetImposable() method.
	 *
	 * @return void
	 */
	public function testSetCumNetImposable() {

		$obj = new Tabledeserreurs();

		$obj->setCumNetImposable(10.092018);
		$this->assertEquals(10.092018, $obj->getCumNetImposable());
	}

	/**
	 * Tests the setCumPlaf1Caisse1() method.
	 *
	 * @return void
	 */
	public function testSetCumPlaf1Caisse1() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlaf1Caisse1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
	}

	/**
	 * Tests the setCumPlaf1Caisse2() method.
	 *
	 * @return void
	 */
	public function testSetCumPlaf1Caisse2() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlaf1Caisse2(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
	}

	/**
	 * Tests the setCumPlaf1Caisse3() method.
	 *
	 * @return void
	 */
	public function testSetCumPlaf1Caisse3() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlaf1Caisse3(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
	}

	/**
	 * Tests the setCumPlaf2Caisse1() method.
	 *
	 * @return void
	 */
	public function testSetCumPlaf2Caisse1() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlaf2Caisse1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
	}

	/**
	 * Tests the setCumPlaf2Caisse2() method.
	 *
	 * @return void
	 */
	public function testSetCumPlaf2Caisse2() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlaf2Caisse2(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
	}

	/**
	 * Tests the setCumPlaf2Caisse3() method.
	 *
	 * @return void
	 */
	public function testSetCumPlaf2Caisse3() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlaf2Caisse3(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
	}

	/**
	 * Tests the setCumPlafondGMP() method.
	 *
	 * @return void
	 */
	public function testSetCumPlafondGMP() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlafondGMP(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlafondGMP());
	}

	/**
	 * Tests the setCumPlafondSS1() method.
	 *
	 * @return void
	 */
	public function testSetCumPlafondSS1() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlafondSS1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlafondSS1());
	}

	/**
	 * Tests the setCumPlafondSS2() method.
	 *
	 * @return void
	 */
	public function testSetCumPlafondSS2() {

		$obj = new Tabledeserreurs();

		$obj->setCumPlafondSS2(10.092018);
		$this->assertEquals(10.092018, $obj->getCumPlafondSS2());
	}

	/**
	 * Tests the setCumProvCp() method.
	 *
	 * @return void
	 */
	public function testSetCumProvCp() {

		$obj = new Tabledeserreurs();

		$obj->setCumProvCp(10.092018);
		$this->assertEquals(10.092018, $obj->getCumProvCp());
	}

	/**
	 * Tests the setCumProvCp_1() method.
	 *
	 * @return void
	 */
	public function testSetCumProvCp_1() {

		$obj = new Tabledeserreurs();

		$obj->setCumProvCp_1(10.092018);
		$this->assertEquals(10.092018, $obj->getCumProvCp_1());
	}

	/**
	 * Tests the setCumReposComp() method.
	 *
	 * @return void
	 */
	public function testSetCumReposComp() {

		$obj = new Tabledeserreurs();

		$obj->setCumReposComp(10.092018);
		$this->assertEquals(10.092018, $obj->getCumReposComp());
	}

	/**
	 * Tests the setDateAncien() method.
	 *
	 * @return void
	 */
	public function testSetDateAncien() {

		$obj = new Tabledeserreurs();

		$obj->setDateAncien(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAncien());
	}

	/**
	 * Tests the setDateEmbauche() method.
	 *
	 * @return void
	 */
	public function testSetDateEmbauche() {

		$obj = new Tabledeserreurs();

		$obj->setDateEmbauche(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEmbauche());
	}

	/**
	 * Tests the setDateEntree1() method.
	 *
	 * @return void
	 */
	public function testSetDateEntree1() {

		$obj = new Tabledeserreurs();

		$obj->setDateEntree1(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree1());
	}

	/**
	 * Tests the setDateEntree2() method.
	 *
	 * @return void
	 */
	public function testSetDateEntree2() {

		$obj = new Tabledeserreurs();

		$obj->setDateEntree2(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree2());
	}

	/**
	 * Tests the setDateLicenciement() method.
	 *
	 * @return void
	 */
	public function testSetDateLicenciement() {

		$obj = new Tabledeserreurs();

		$obj->setDateLicenciement(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateLicenciement());
	}

	/**
	 * Tests the setDateModification() method.
	 *
	 * @return void
	 */
	public function testSetDateModification() {

		$obj = new Tabledeserreurs();

		$obj->setDateModification(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
	}

	/**
	 * Tests the setDateNaissConjoint() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissConjoint() {

		$obj = new Tabledeserreurs();

		$obj->setDateNaissConjoint(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissConjoint());
	}

	/**
	 * Tests the setDateNaissance() method.
	 *
	 * @return void
	 */
	public function testSetDateNaissance() {

		$obj = new Tabledeserreurs();

		$obj->setDateNaissance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNaissance());
	}

	/**
	 * Tests the setDateSortie1() method.
	 *
	 * @return void
	 */
	public function testSetDateSortie1() {

		$obj = new Tabledeserreurs();

		$obj->setDateSortie1(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSortie1());
	}

	/**
	 * Tests the setDateSortie2() method.
	 *
	 * @return void
	 */
	public function testSetDateSortie2() {

		$obj = new Tabledeserreurs();

		$obj->setDateSortie2(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSortie2());
	}

	/**
	 * Tests the setDateVisiteMedicale() method.
	 *
	 * @return void
	 */
	public function testSetDateVisiteMedicale() {

		$obj = new Tabledeserreurs();

		$obj->setDateVisiteMedicale(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateVisiteMedicale());
	}

	/**
	 * Tests the setDateVisiteReprise() method.
	 *
	 * @return void
	 */
	public function testSetDateVisiteReprise() {

		$obj = new Tabledeserreurs();

		$obj->setDateVisiteReprise(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateVisiteReprise());
	}

	/**
	 * Tests the setDeptNaissance() method.
	 *
	 * @return void
	 */
	public function testSetDeptNaissance() {

		$obj = new Tabledeserreurs();

		$obj->setDeptNaissance("deptNaissance");
		$this->assertEquals("deptNaissance", $obj->getDeptNaissance());
	}

	/**
	 * Tests the setDernNumPrime() method.
	 *
	 * @return void
	 */
	public function testSetDernNumPrime() {

		$obj = new Tabledeserreurs();

		$obj->setDernNumPrime(10);
		$this->assertEquals(10, $obj->getDernNumPrime());
	}

	/**
	 * Tests the setDimType2() method.
	 *
	 * @return void
	 */
	public function testSetDimType2() {

		$obj = new Tabledeserreurs();

		$obj->setDimType2(true);
		$this->assertEquals(true, $obj->getDimType2());
	}

	/**
	 * Tests the setDirNonSalarie() method.
	 *
	 * @return void
	 */
	public function testSetDirNonSalarie() {

		$obj = new Tabledeserreurs();

		$obj->setDirNonSalarie(true);
		$this->assertEquals(true, $obj->getDirNonSalarie());
	}

	/**
	 * Tests the setDomBanque() method.
	 *
	 * @return void
	 */
	public function testSetDomBanque() {

		$obj = new Tabledeserreurs();

		$obj->setDomBanque("domBanque");
		$this->assertEquals("domBanque", $obj->getDomBanque());
	}

	/**
	 * Tests the setEdTauxSalBase() method.
	 *
	 * @return void
	 */
	public function testSetEdTauxSalBase() {

		$obj = new Tabledeserreurs();

		$obj->setEdTauxSalBase(true);
		$this->assertEquals(true, $obj->getEdTauxSalBase());
	}

	/**
	 * Tests the setEffectif() method.
	 *
	 * @return void
	 */
	public function testSetEffectif() {

		$obj = new Tabledeserreurs();

		$obj->setEffectif(true);
		$this->assertEquals(true, $obj->getEffectif());
	}

	/**
	 * Tests the setEffectifDas() method.
	 *
	 * @return void
	 */
	public function testSetEffectifDas() {

		$obj = new Tabledeserreurs();

		$obj->setEffectifDas(true);
		$this->assertEquals(true, $obj->getEffectifDas());
	}

	/**
	 * Tests the setEmploi() method.
	 *
	 * @return void
	 */
	public function testSetEmploi() {

		$obj = new Tabledeserreurs();

		$obj->setEmploi("emploi");
		$this->assertEquals("emploi", $obj->getEmploi());
	}

	/**
	 * Tests the setFictif() method.
	 *
	 * @return void
	 */
	public function testSetFictif() {

		$obj = new Tabledeserreurs();

		$obj->setFictif(true);
		$this->assertEquals(true, $obj->getFictif());
	}

	/**
	 * Tests the setFractionEtab() method.
	 *
	 * @return void
	 */
	public function testSetFractionEtab() {

		$obj = new Tabledeserreurs();

		$obj->setFractionEtab("fractionEtab");
		$this->assertEquals("fractionEtab", $obj->getFractionEtab());
	}

	/**
	 * Tests the setGestionMajDim() method.
	 *
	 * @return void
	 */
	public function testSetGestionMajDim() {

		$obj = new Tabledeserreurs();

		$obj->setGestionMajDim("gestionMajDim");
		$this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
	}

	/**
	 * Tests the setGestionMajJF() method.
	 *
	 * @return void
	 */
	public function testSetGestionMajJF() {

		$obj = new Tabledeserreurs();

		$obj->setGestionMajJF("gestionMajJF");
		$this->assertEquals("gestionMajJF", $obj->getGestionMajJF());
	}

	/**
	 * Tests the setGestionMajNuit() method.
	 *
	 * @return void
	 */
	public function testSetGestionMajNuit() {

		$obj = new Tabledeserreurs();

		$obj->setGestionMajNuit("gestionMajNuit");
		$this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
	}

	/**
	 * Tests the setGrilleAnc1() method.
	 *
	 * @return void
	 */
	public function testSetGrilleAnc1() {

		$obj = new Tabledeserreurs();

		$obj->setGrilleAnc1("grilleAnc1");
		$this->assertEquals("grilleAnc1", $obj->getGrilleAnc1());
	}

	/**
	 * Tests the setGrilleAnc2() method.
	 *
	 * @return void
	 */
	public function testSetGrilleAnc2() {

		$obj = new Tabledeserreurs();

		$obj->setGrilleAnc2("grilleAnc2");
		$this->assertEquals("grilleAnc2", $obj->getGrilleAnc2());
	}

	/**
	 * Tests the setGrilleAnc3() method.
	 *
	 * @return void
	 */
	public function testSetGrilleAnc3() {

		$obj = new Tabledeserreurs();

		$obj->setGrilleAnc3("grilleAnc3");
		$this->assertEquals("grilleAnc3", $obj->getGrilleAnc3());
	}

	/**
	 * Tests the setHNuitType2() method.
	 *
	 * @return void
	 */
	public function testSetHNuitType2() {

		$obj = new Tabledeserreurs();

		$obj->setHNuitType2(true);
		$this->assertEquals(true, $obj->getHNuitType2());
	}

	/**
	 * Tests the setHandicape() method.
	 *
	 * @return void
	 */
	public function testSetHandicape() {

		$obj = new Tabledeserreurs();

		$obj->setHandicape(true);
		$this->assertEquals(true, $obj->getHandicape());
	}

	/**
	 * Tests the setLieuTravailConjoint() method.
	 *
	 * @return void
	 */
	public function testSetLieuTravailConjoint() {

		$obj = new Tabledeserreurs();

		$obj->setLieuTravailConjoint("lieuTravailConjoint");
		$this->assertEquals("lieuTravailConjoint", $obj->getLieuTravailConjoint());
	}

	/**
	 * Tests the setMatricule() method.
	 *
	 * @return void
	 */
	public function testSetMatricule() {

		$obj = new Tabledeserreurs();

		$obj->setMatricule("matricule");
		$this->assertEquals("matricule", $obj->getMatricule());
	}

	/**
	 * Tests the setMensualisationTache() method.
	 *
	 * @return void
	 */
	public function testSetMensualisationTache() {

		$obj = new Tabledeserreurs();

		$obj->setMensualisationTache("mensualisationTache");
		$this->assertEquals("mensualisationTache", $obj->getMensualisationTache());
	}

	/**
	 * Tests the setMentionCP() method.
	 *
	 * @return void
	 */
	public function testSetMentionCP() {

		$obj = new Tabledeserreurs();

		$obj->setMentionCP(true);
		$this->assertEquals(true, $obj->getMentionCP());
	}

	/**
	 * Tests the setMinGaranti() method.
	 *
	 * @return void
	 */
	public function testSetMinGaranti() {

		$obj = new Tabledeserreurs();

		$obj->setMinGaranti(10.092018);
		$this->assertEquals(10.092018, $obj->getMinGaranti());
	}

	/**
	 * Tests the setMontant1() method.
	 *
	 * @return void
	 */
	public function testSetMontant1() {

		$obj = new Tabledeserreurs();

		$obj->setMontant1(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant1());
	}

	/**
	 * Tests the setMontant2() method.
	 *
	 * @return void
	 */
	public function testSetMontant2() {

		$obj = new Tabledeserreurs();

		$obj->setMontant2(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant2());
	}

	/**
	 * Tests the setMontant3() method.
	 *
	 * @return void
	 */
	public function testSetMontant3() {

		$obj = new Tabledeserreurs();

		$obj->setMontant3(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant3());
	}

	/**
	 * Tests the setMontant4() method.
	 *
	 * @return void
	 */
	public function testSetMontant4() {

		$obj = new Tabledeserreurs();

		$obj->setMontant4(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant4());
	}

	/**
	 * Tests the setMontant5() method.
	 *
	 * @return void
	 */
	public function testSetMontant5() {

		$obj = new Tabledeserreurs();

		$obj->setMontant5(10.092018);
		$this->assertEquals(10.092018, $obj->getMontant5());
	}

	/**
	 * Tests the setMontantAvantage() method.
	 *
	 * @return void
	 */
	public function testSetMontantAvantage() {

		$obj = new Tabledeserreurs();

		$obj->setMontantAvantage(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantAvantage());
	}

	/**
	 * Tests the setMtBaseAcompte() method.
	 *
	 * @return void
	 */
	public function testSetMtBaseAcompte() {

		$obj = new Tabledeserreurs();

		$obj->setMtBaseAcompte(10.092018);
		$this->assertEquals(10.092018, $obj->getMtBaseAcompte());
	}

	/**
	 * Tests the setNationalite() method.
	 *
	 * @return void
	 */
	public function testSetNationalite() {

		$obj = new Tabledeserreurs();

		$obj->setNationalite("nationalite");
		$this->assertEquals("nationalite", $obj->getNationalite());
	}

	/**
	 * Tests the setNbHeureMois() method.
	 *
	 * @return void
	 */
	public function testSetNbHeureMois() {

		$obj = new Tabledeserreurs();

		$obj->setNbHeureMois(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeureMois());
	}

	/**
	 * Tests the setNbHeureSal() method.
	 *
	 * @return void
	 */
	public function testSetNbHeureSal() {

		$obj = new Tabledeserreurs();

		$obj->setNbHeureSal(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeureSal());
	}

	/**
	 * Tests the setNbHeureSup() method.
	 *
	 * @return void
	 */
	public function testSetNbHeureSup() {

		$obj = new Tabledeserreurs();

		$obj->setNbHeureSup(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeureSup());
	}

	/**
	 * Tests the setNbHeureTrav() method.
	 *
	 * @return void
	 */
	public function testSetNbHeureTrav() {

		$obj = new Tabledeserreurs();

		$obj->setNbHeureTrav(10.092018);
		$this->assertEquals(10.092018, $obj->getNbHeureTrav());
	}

	/**
	 * Tests the setNbJourBaseCP() method.
	 *
	 * @return void
	 */
	public function testSetNbJourBaseCP() {

		$obj = new Tabledeserreurs();

		$obj->setNbJourBaseCP(10.092018);
		$this->assertEquals(10.092018, $obj->getNbJourBaseCP());
	}

	/**
	 * Tests the setNbPoints() method.
	 *
	 * @return void
	 */
	public function testSetNbPoints() {

		$obj = new Tabledeserreurs();

		$obj->setNbPoints(10);
		$this->assertEquals(10, $obj->getNbPoints());
	}

	/**
	 * Tests the setNiveauConfidentialite() method.
	 *
	 * @return void
	 */
	public function testSetNiveauConfidentialite() {

		$obj = new Tabledeserreurs();

		$obj->setNiveauConfidentialite("niveauConfidentialite");
		$this->assertEquals("niveauConfidentialite", $obj->getNiveauConfidentialite());
	}

	/**
	 * Tests the setNomConjoint() method.
	 *
	 * @return void
	 */
	public function testSetNomConjoint() {

		$obj = new Tabledeserreurs();

		$obj->setNomConjoint("nomConjoint");
		$this->assertEquals("nomConjoint", $obj->getNomConjoint());
	}

	/**
	 * Tests the setNomMarital() method.
	 *
	 * @return void
	 */
	public function testSetNomMarital() {

		$obj = new Tabledeserreurs();

		$obj->setNomMarital("nomMarital");
		$this->assertEquals("nomMarital", $obj->getNomMarital());
	}

	/**
	 * Tests the setNomNaissance() method.
	 *
	 * @return void
	 */
	public function testSetNomNaissance() {

		$obj = new Tabledeserreurs();

		$obj->setNomNaissance("nomNaissance");
		$this->assertEquals("nomNaissance", $obj->getNomNaissance());
	}

	/**
	 * Tests the setNomVille() method.
	 *
	 * @return void
	 */
	public function testSetNomVille() {

		$obj = new Tabledeserreurs();

		$obj->setNomVille("nomVille");
		$this->assertEquals("nomVille", $obj->getNomVille());
	}

	/**
	 * Tests the setNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie() {

		$obj = new Tabledeserreurs();

		$obj->setNomVoie("nomVoie");
		$this->assertEquals("nomVoie", $obj->getNomVoie());
	}

	/**
	 * Tests the setNombreEnfants() method.
	 *
	 * @return void
	 */
	public function testSetNombreEnfants() {

		$obj = new Tabledeserreurs();

		$obj->setNombreEnfants("nombreEnfants");
		$this->assertEquals("nombreEnfants", $obj->getNombreEnfants());
	}

	/**
	 * Tests the setNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie() {

		$obj = new Tabledeserreurs();

		$obj->setNumVoie("numVoie");
		$this->assertEquals("numVoie", $obj->getNumVoie());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new Tabledeserreurs();

		$obj->setNumero("numero");
		$this->assertEquals("numero", $obj->getNumero());
	}

	/**
	 * Tests the setNumeroCarteSejour() method.
	 *
	 * @return void
	 */
	public function testSetNumeroCarteSejour() {

		$obj = new Tabledeserreurs();

		$obj->setNumeroCarteSejour("numeroCarteSejour");
		$this->assertEquals("numeroCarteSejour", $obj->getNumeroCarteSejour());
	}

	/**
	 * Tests the setNumeroCarteTravail() method.
	 *
	 * @return void
	 */
	public function testSetNumeroCarteTravail() {

		$obj = new Tabledeserreurs();

		$obj->setNumeroCarteTravail("numeroCarteTravail");
		$this->assertEquals("numeroCarteTravail", $obj->getNumeroCarteTravail());
	}

	/**
	 * Tests the setNumeroCasPartSecu() method.
	 *
	 * @return void
	 */
	public function testSetNumeroCasPartSecu() {

		$obj = new Tabledeserreurs();

		$obj->setNumeroCasPartSecu(10);
		$this->assertEquals(10, $obj->getNumeroCasPartSecu());
	}

	/**
	 * Tests the setNumeroGrilleType() method.
	 *
	 * @return void
	 */
	public function testSetNumeroGrilleType() {

		$obj = new Tabledeserreurs();

		$obj->setNumeroGrilleType(10);
		$this->assertEquals(10, $obj->getNumeroGrilleType());
	}

	/**
	 * Tests the setNumeroInsee() method.
	 *
	 * @return void
	 */
	public function testSetNumeroInsee() {

		$obj = new Tabledeserreurs();

		$obj->setNumeroInsee("numeroInsee");
		$this->assertEquals("numeroInsee", $obj->getNumeroInsee());
	}

	/**
	 * Tests the setNumeroPermis() method.
	 *
	 * @return void
	 */
	public function testSetNumeroPermis() {

		$obj = new Tabledeserreurs();

		$obj->setNumeroPermis("numeroPermis");
		$this->assertEquals("numeroPermis", $obj->getNumeroPermis());
	}

	/**
	 * Tests the setOrphelin() method.
	 *
	 * @return void
	 */
	public function testSetOrphelin() {

		$obj = new Tabledeserreurs();

		$obj->setOrphelin(true);
		$this->assertEquals(true, $obj->getOrphelin());
	}

	/**
	 * Tests the setPasGestionPdp() method.
	 *
	 * @return void
	 */
	public function testSetPasGestionPdp() {

		$obj = new Tabledeserreurs();

		$obj->setPasGestionPdp(true);
		$this->assertEquals(true, $obj->getPasGestionPdp());
	}

	/**
	 * Tests the setPension() method.
	 *
	 * @return void
	 */
	public function testSetPension() {

		$obj = new Tabledeserreurs();

		$obj->setPension(true);
		$this->assertEquals(true, $obj->getPension());
	}

	/**
	 * Tests the setPeriodicite() method.
	 *
	 * @return void
	 */
	public function testSetPeriodicite() {

		$obj = new Tabledeserreurs();

		$obj->setPeriodicite("periodicite");
		$this->assertEquals("periodicite", $obj->getPeriodicite());
	}

	/**
	 * Tests the setPermisDelivreLe() method.
	 *
	 * @return void
	 */
	public function testSetPermisDelivreLe() {

		$obj = new Tabledeserreurs();

		$obj->setPermisDelivreLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPermisDelivreLe());
	}

	/**
	 * Tests the setPermisDelivrePar() method.
	 *
	 * @return void
	 */
	public function testSetPermisDelivrePar() {

		$obj = new Tabledeserreurs();

		$obj->setPermisDelivrePar("permisDelivrePar");
		$this->assertEquals("permisDelivrePar", $obj->getPermisDelivrePar());
	}

	/**
	 * Tests the setPermisExpireLe() method.
	 *
	 * @return void
	 */
	public function testSetPermisExpireLe() {

		$obj = new Tabledeserreurs();

		$obj->setPermisExpireLe(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getPermisExpireLe());
	}

	/**
	 * Tests the setPersonneAPrevenir() method.
	 *
	 * @return void
	 */
	public function testSetPersonneAPrevenir() {

		$obj = new Tabledeserreurs();

		$obj->setPersonneAPrevenir("personneAPrevenir");
		$this->assertEquals("personneAPrevenir", $obj->getPersonneAPrevenir());
	}

	/**
	 * Tests the setPlafondGMP() method.
	 *
	 * @return void
	 */
	public function testSetPlafondGMP() {

		$obj = new Tabledeserreurs();

		$obj->setPlafondGMP(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafondGMP());
	}

	/**
	 * Tests the setPlafondSS1() method.
	 *
	 * @return void
	 */
	public function testSetPlafondSS1() {

		$obj = new Tabledeserreurs();

		$obj->setPlafondSS1(10.092018);
		$this->assertEquals(10.092018, $obj->getPlafondSS1());
	}

	/**
	 * Tests the setPlafondSS30() method.
	 *
	 * @return void
	 */
	public function testSetPlafondSS30() {

		$obj = new Tabledeserreurs();

		$obj->setPlafondSS30(true);
		$this->assertEquals(true, $obj->getPlafondSS30());
	}

	/**
	 * Tests the setPourcentAbat() method.
	 *
	 * @return void
	 */
	public function testSetPourcentAbat() {

		$obj = new Tabledeserreurs();

		$obj->setPourcentAbat(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcentAbat());
	}

	/**
	 * Tests the setPourcentAct() method.
	 *
	 * @return void
	 */
	public function testSetPourcentAct() {

		$obj = new Tabledeserreurs();

		$obj->setPourcentAct(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcentAct());
	}

	/**
	 * Tests the setPourcentEffectifDUCS() method.
	 *
	 * @return void
	 */
	public function testSetPourcentEffectifDUCS() {

		$obj = new Tabledeserreurs();

		$obj->setPourcentEffectifDUCS(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcentEffectifDUCS());
	}

	/**
	 * Tests the setPourcentRemuHor() method.
	 *
	 * @return void
	 */
	public function testSetPourcentRemuHor() {

		$obj = new Tabledeserreurs();

		$obj->setPourcentRemuHor(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcentRemuHor());
	}

	/**
	 * Tests the setPrenom() method.
	 *
	 * @return void
	 */
	public function testSetPrenom() {

		$obj = new Tabledeserreurs();

		$obj->setPrenom("prenom");
		$this->assertEquals("prenom", $obj->getPrenom());
	}

	/**
	 * Tests the setPrenomConjoint() method.
	 *
	 * @return void
	 */
	public function testSetPrenomConjoint() {

		$obj = new Tabledeserreurs();

		$obj->setPrenomConjoint("prenomConjoint");
		$this->assertEquals("prenomConjoint", $obj->getPrenomConjoint());
	}

	/**
	 * Tests the setPrime() method.
	 *
	 * @return void
	 */
	public function testSetPrime() {

		$obj = new Tabledeserreurs();

		$obj->setPrime(true);
		$this->assertEquals(true, $obj->getPrime());
	}

	/**
	 * Tests the setPrudCollege() method.
	 *
	 * @return void
	 */
	public function testSetPrudCollege() {

		$obj = new Tabledeserreurs();

		$obj->setPrudCollege("prudCollege");
		$this->assertEquals("prudCollege", $obj->getPrudCollege());
	}

	/**
	 * Tests the setPrudLieuVote() method.
	 *
	 * @return void
	 */
	public function testSetPrudLieuVote() {

		$obj = new Tabledeserreurs();

		$obj->setPrudLieuVote("prudLieuVote");
		$this->assertEquals("prudLieuVote", $obj->getPrudLieuVote());
	}

	/**
	 * Tests the setPrudSection() method.
	 *
	 * @return void
	 */
	public function testSetPrudSection() {

		$obj = new Tabledeserreurs();

		$obj->setPrudSection("prudSection");
		$this->assertEquals("prudSection", $obj->getPrudSection());
	}

	/**
	 * Tests the setQualification() method.
	 *
	 * @return void
	 */
	public function testSetQualification() {

		$obj = new Tabledeserreurs();

		$obj->setQualification("qualification");
		$this->assertEquals("qualification", $obj->getQualification());
	}

	/**
	 * Tests the setRegleCalcul() method.
	 *
	 * @return void
	 */
	public function testSetRegleCalcul() {

		$obj = new Tabledeserreurs();

		$obj->setRegleCalcul("regleCalcul");
		$this->assertEquals("regleCalcul", $obj->getRegleCalcul());
	}

	/**
	 * Tests the setRegroupVirement() method.
	 *
	 * @return void
	 */
	public function testSetRegroupVirement() {

		$obj = new Tabledeserreurs();

		$obj->setRegroupVirement("regroupVirement");
		$this->assertEquals("regroupVirement", $obj->getRegroupVirement());
	}

	/**
	 * Tests the setRegulTDS() method.
	 *
	 * @return void
	 */
	public function testSetRegulTDS() {

		$obj = new Tabledeserreurs();

		$obj->setRegulTDS(true);
		$this->assertEquals(true, $obj->getRegulTDS());
	}

	/**
	 * Tests the setRib() method.
	 *
	 * @return void
	 */
	public function testSetRib() {

		$obj = new Tabledeserreurs();

		$obj->setRib("rib");
		$this->assertEquals("rib", $obj->getRib());
	}

	/**
	 * Tests the setSalaireBase() method.
	 *
	 * @return void
	 */
	public function testSetSalaireBase() {

		$obj = new Tabledeserreurs();

		$obj->setSalaireBase(10.092018);
		$this->assertEquals(10.092018, $obj->getSalaireBase());
	}

	/**
	 * Tests the setService() method.
	 *
	 * @return void
	 */
	public function testSetService() {

		$obj = new Tabledeserreurs();

		$obj->setService("service");
		$this->assertEquals("service", $obj->getService());
	}

	/**
	 * Tests the setSexe() method.
	 *
	 * @return void
	 */
	public function testSetSexe() {

		$obj = new Tabledeserreurs();

		$obj->setSexe("sexe");
		$this->assertEquals("sexe", $obj->getSexe());
	}

	/**
	 * Tests the setSituationFam() method.
	 *
	 * @return void
	 */
	public function testSetSituationFam() {

		$obj = new Tabledeserreurs();

		$obj->setSituationFam("situationFam");
		$this->assertEquals("situationFam", $obj->getSituationFam());
	}

	/**
	 * Tests the setTDS100() method.
	 *
	 * @return void
	 */
	public function testSetTDS100() {

		$obj = new Tabledeserreurs();

		$obj->setTDS100(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS100());
	}

	/**
	 * Tests the setTDS102() method.
	 *
	 * @return void
	 */
	public function testSetTDS102() {

		$obj = new Tabledeserreurs();

		$obj->setTDS102(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS102());
	}

	/**
	 * Tests the setTDS103() method.
	 *
	 * @return void
	 */
	public function testSetTDS103() {

		$obj = new Tabledeserreurs();

		$obj->setTDS103(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS103());
	}

	/**
	 * Tests the setTDS105() method.
	 *
	 * @return void
	 */
	public function testSetTDS105() {

		$obj = new Tabledeserreurs();

		$obj->setTDS105(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS105());
	}

	/**
	 * Tests the setTDS107() method.
	 *
	 * @return void
	 */
	public function testSetTDS107() {

		$obj = new Tabledeserreurs();

		$obj->setTDS107(true);
		$this->assertEquals(true, $obj->getTDS107());
	}

	/**
	 * Tests the setTDS108() method.
	 *
	 * @return void
	 */
	public function testSetTDS108() {

		$obj = new Tabledeserreurs();

		$obj->setTDS108(true);
		$this->assertEquals(true, $obj->getTDS108());
	}

	/**
	 * Tests the setTDS109() method.
	 *
	 * @return void
	 */
	public function testSetTDS109() {

		$obj = new Tabledeserreurs();

		$obj->setTDS109(true);
		$this->assertEquals(true, $obj->getTDS109());
	}

	/**
	 * Tests the setTDS110() method.
	 *
	 * @return void
	 */
	public function testSetTDS110() {

		$obj = new Tabledeserreurs();

		$obj->setTDS110(true);
		$this->assertEquals(true, $obj->getTDS110());
	}

	/**
	 * Tests the setTDS112() method.
	 *
	 * @return void
	 */
	public function testSetTDS112() {

		$obj = new Tabledeserreurs();

		$obj->setTDS112(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS112());
	}

	/**
	 * Tests the setTDS113() method.
	 *
	 * @return void
	 */
	public function testSetTDS113() {

		$obj = new Tabledeserreurs();

		$obj->setTDS113(true);
		$this->assertEquals(true, $obj->getTDS113());
	}

	/**
	 * Tests the setTDS117() method.
	 *
	 * @return void
	 */
	public function testSetTDS117() {

		$obj = new Tabledeserreurs();

		$obj->setTDS117(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS117());
	}

	/**
	 * Tests the setTDS119() method.
	 *
	 * @return void
	 */
	public function testSetTDS119() {

		$obj = new Tabledeserreurs();

		$obj->setTDS119(true);
		$this->assertEquals(true, $obj->getTDS119());
	}

	/**
	 * Tests the setTDS120() method.
	 *
	 * @return void
	 */
	public function testSetTDS120() {

		$obj = new Tabledeserreurs();

		$obj->setTDS120(true);
		$this->assertEquals(true, $obj->getTDS120());
	}

	/**
	 * Tests the setTDS121() method.
	 *
	 * @return void
	 */
	public function testSetTDS121() {

		$obj = new Tabledeserreurs();

		$obj->setTDS121(true);
		$this->assertEquals(true, $obj->getTDS121());
	}

	/**
	 * Tests the setTDS122() method.
	 *
	 * @return void
	 */
	public function testSetTDS122() {

		$obj = new Tabledeserreurs();

		$obj->setTDS122(true);
		$this->assertEquals(true, $obj->getTDS122());
	}

	/**
	 * Tests the setTDS125() method.
	 *
	 * @return void
	 */
	public function testSetTDS125() {

		$obj = new Tabledeserreurs();

		$obj->setTDS125(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS125());
	}

	/**
	 * Tests the setTDS127() method.
	 *
	 * @return void
	 */
	public function testSetTDS127() {

		$obj = new Tabledeserreurs();

		$obj->setTDS127(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS127());
	}

	/**
	 * Tests the setTDS128() method.
	 *
	 * @return void
	 */
	public function testSetTDS128() {

		$obj = new Tabledeserreurs();

		$obj->setTDS128("tDS128");
		$this->assertEquals("tDS128", $obj->getTDS128());
	}

	/**
	 * Tests the setTDS132() method.
	 *
	 * @return void
	 */
	public function testSetTDS132() {

		$obj = new Tabledeserreurs();

		$obj->setTDS132(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS132());
	}

	/**
	 * Tests the setTDS133() method.
	 *
	 * @return void
	 */
	public function testSetTDS133() {

		$obj = new Tabledeserreurs();

		$obj->setTDS133("tDS133");
		$this->assertEquals("tDS133", $obj->getTDS133());
	}

	/**
	 * Tests the setTDS134() method.
	 *
	 * @return void
	 */
	public function testSetTDS134() {

		$obj = new Tabledeserreurs();

		$obj->setTDS134(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS134());
	}

	/**
	 * Tests the setTDS135() method.
	 *
	 * @return void
	 */
	public function testSetTDS135() {

		$obj = new Tabledeserreurs();

		$obj->setTDS135(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS135());
	}

	/**
	 * Tests the setTDS136() method.
	 *
	 * @return void
	 */
	public function testSetTDS136() {

		$obj = new Tabledeserreurs();

		$obj->setTDS136(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS136());
	}

	/**
	 * Tests the setTDS138() method.
	 *
	 * @return void
	 */
	public function testSetTDS138() {

		$obj = new Tabledeserreurs();

		$obj->setTDS138("tDS138");
		$this->assertEquals("tDS138", $obj->getTDS138());
	}

	/**
	 * Tests the setTDS139() method.
	 *
	 * @return void
	 */
	public function testSetTDS139() {

		$obj = new Tabledeserreurs();

		$obj->setTDS139("tDS139");
		$this->assertEquals("tDS139", $obj->getTDS139());
	}

	/**
	 * Tests the setTDS141() method.
	 *
	 * @return void
	 */
	public function testSetTDS141() {

		$obj = new Tabledeserreurs();

		$obj->setTDS141(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS141());
	}

	/**
	 * Tests the setTDS59() method.
	 *
	 * @return void
	 */
	public function testSetTDS59() {

		$obj = new Tabledeserreurs();

		$obj->setTDS59("tDS59");
		$this->assertEquals("tDS59", $obj->getTDS59());
	}

	/**
	 * Tests the setTDS60() method.
	 *
	 * @return void
	 */
	public function testSetTDS60() {

		$obj = new Tabledeserreurs();

		$obj->setTDS60(true);
		$this->assertEquals(true, $obj->getTDS60());
	}

	/**
	 * Tests the setTDS61() method.
	 *
	 * @return void
	 */
	public function testSetTDS61() {

		$obj = new Tabledeserreurs();

		$obj->setTDS61("tDS61");
		$this->assertEquals("tDS61", $obj->getTDS61());
	}

	/**
	 * Tests the setTDS75() method.
	 *
	 * @return void
	 */
	public function testSetTDS75() {

		$obj = new Tabledeserreurs();

		$obj->setTDS75(10);
		$this->assertEquals(10, $obj->getTDS75());
	}

	/**
	 * Tests the setTDS76() method.
	 *
	 * @return void
	 */
	public function testSetTDS76() {

		$obj = new Tabledeserreurs();

		$obj->setTDS76("tDS76");
		$this->assertEquals("tDS76", $obj->getTDS76());
	}

	/**
	 * Tests the setTDS77() method.
	 *
	 * @return void
	 */
	public function testSetTDS77() {

		$obj = new Tabledeserreurs();

		$obj->setTDS77("tDS77");
		$this->assertEquals("tDS77", $obj->getTDS77());
	}

	/**
	 * Tests the setTDS78() method.
	 *
	 * @return void
	 */
	public function testSetTDS78() {

		$obj = new Tabledeserreurs();

		$obj->setTDS78(true);
		$this->assertEquals(true, $obj->getTDS78());
	}

	/**
	 * Tests the setTDS81() method.
	 *
	 * @return void
	 */
	public function testSetTDS81() {

		$obj = new Tabledeserreurs();

		$obj->setTDS81(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS81());
	}

	/**
	 * Tests the setTDS82() method.
	 *
	 * @return void
	 */
	public function testSetTDS82() {

		$obj = new Tabledeserreurs();

		$obj->setTDS82(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS82());
	}

	/**
	 * Tests the setTDS84() method.
	 *
	 * @return void
	 */
	public function testSetTDS84() {

		$obj = new Tabledeserreurs();

		$obj->setTDS84(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS84());
	}

	/**
	 * Tests the setTDS85() method.
	 *
	 * @return void
	 */
	public function testSetTDS85() {

		$obj = new Tabledeserreurs();

		$obj->setTDS85(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS85());
	}

	/**
	 * Tests the setTDS86() method.
	 *
	 * @return void
	 */
	public function testSetTDS86() {

		$obj = new Tabledeserreurs();

		$obj->setTDS86(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS86());
	}

	/**
	 * Tests the setTDS87() method.
	 *
	 * @return void
	 */
	public function testSetTDS87() {

		$obj = new Tabledeserreurs();

		$obj->setTDS87(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS87());
	}

	/**
	 * Tests the setTDS88() method.
	 *
	 * @return void
	 */
	public function testSetTDS88() {

		$obj = new Tabledeserreurs();

		$obj->setTDS88(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS88());
	}

	/**
	 * Tests the setTDS89() method.
	 *
	 * @return void
	 */
	public function testSetTDS89() {

		$obj = new Tabledeserreurs();

		$obj->setTDS89(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS89());
	}

	/**
	 * Tests the setTDS90() method.
	 *
	 * @return void
	 */
	public function testSetTDS90() {

		$obj = new Tabledeserreurs();

		$obj->setTDS90(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS90());
	}

	/**
	 * Tests the setTDS91() method.
	 *
	 * @return void
	 */
	public function testSetTDS91() {

		$obj = new Tabledeserreurs();

		$obj->setTDS91(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS91());
	}

	/**
	 * Tests the setTDS92() method.
	 *
	 * @return void
	 */
	public function testSetTDS92() {

		$obj = new Tabledeserreurs();

		$obj->setTDS92(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS92());
	}

	/**
	 * Tests the setTDS93() method.
	 *
	 * @return void
	 */
	public function testSetTDS93() {

		$obj = new Tabledeserreurs();

		$obj->setTDS93(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS93());
	}

	/**
	 * Tests the setTDS94() method.
	 *
	 * @return void
	 */
	public function testSetTDS94() {

		$obj = new Tabledeserreurs();

		$obj->setTDS94(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS94());
	}

	/**
	 * Tests the setTDS95() method.
	 *
	 * @return void
	 */
	public function testSetTDS95() {

		$obj = new Tabledeserreurs();

		$obj->setTDS95(10.092018);
		$this->assertEquals(10.092018, $obj->getTDS95());
	}

	/**
	 * Tests the setTaux1() method.
	 *
	 * @return void
	 */
	public function testSetTaux1() {

		$obj = new Tabledeserreurs();

		$obj->setTaux1(10.092018);
		$this->assertEquals(10.092018, $obj->getTaux1());
	}

	/**
	 * Tests the setTaux2() method.
	 *
	 * @return void
	 */
	public function testSetTaux2() {

		$obj = new Tabledeserreurs();

		$obj->setTaux2(10.092018);
		$this->assertEquals(10.092018, $obj->getTaux2());
	}

	/**
	 * Tests the setTaux3() method.
	 *
	 * @return void
	 */
	public function testSetTaux3() {

		$obj = new Tabledeserreurs();

		$obj->setTaux3(10.092018);
		$this->assertEquals(10.092018, $obj->getTaux3());
	}

	/**
	 * Tests the setTaux4() method.
	 *
	 * @return void
	 */
	public function testSetTaux4() {

		$obj = new Tabledeserreurs();

		$obj->setTaux4(10.092018);
		$this->assertEquals(10.092018, $obj->getTaux4());
	}

	/**
	 * Tests the setTaux5() method.
	 *
	 * @return void
	 */
	public function testSetTaux5() {

		$obj = new Tabledeserreurs();

		$obj->setTaux5(10.092018);
		$this->assertEquals(10.092018, $obj->getTaux5());
	}

	/**
	 * Tests the setTauxAbsence() method.
	 *
	 * @return void
	 */
	public function testSetTauxAbsence() {

		$obj = new Tabledeserreurs();

		$obj->setTauxAbsence(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxAbsence());
	}

	/**
	 * Tests the setTauxAncien() method.
	 *
	 * @return void
	 */
	public function testSetTauxAncien() {

		$obj = new Tabledeserreurs();

		$obj->setTauxAncien(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxAncien());
	}

	/**
	 * Tests the setTauxHSup() method.
	 *
	 * @return void
	 */
	public function testSetTauxHSup() {

		$obj = new Tabledeserreurs();

		$obj->setTauxHSup(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxHSup());
	}

	/**
	 * Tests the setTauxPensionCivile() method.
	 *
	 * @return void
	 */
	public function testSetTauxPensionCivile() {

		$obj = new Tabledeserreurs();

		$obj->setTauxPensionCivile(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxPensionCivile());
	}

	/**
	 * Tests the setTauxPensionMilitaire() method.
	 *
	 * @return void
	 */
	public function testSetTauxPensionMilitaire() {

		$obj = new Tabledeserreurs();

		$obj->setTauxPensionMilitaire(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxPensionMilitaire());
	}

	/**
	 * Tests the setTaxeSalaire() method.
	 *
	 * @return void
	 */
	public function testSetTaxeSalaire() {

		$obj = new Tabledeserreurs();

		$obj->setTaxeSalaire(true);
		$this->assertEquals(true, $obj->getTaxeSalaire());
	}

	/**
	 * Tests the setTel1() method.
	 *
	 * @return void
	 */
	public function testSetTel1() {

		$obj = new Tabledeserreurs();

		$obj->setTel1("tel1");
		$this->assertEquals("tel1", $obj->getTel1());
	}

	/**
	 * Tests the setTelConjoint() method.
	 *
	 * @return void
	 */
	public function testSetTelConjoint() {

		$obj = new Tabledeserreurs();

		$obj->setTelConjoint("telConjoint");
		$this->assertEquals("telConjoint", $obj->getTelConjoint());
	}

	/**
	 * Tests the setTelPersAPrevenir() method.
	 *
	 * @return void
	 */
	public function testSetTelPersAPrevenir() {

		$obj = new Tabledeserreurs();

		$obj->setTelPersAPrevenir("telPersAPrevenir");
		$this->assertEquals("telPersAPrevenir", $obj->getTelPersAPrevenir());
	}

	/**
	 * Tests the setTempsPasse() method.
	 *
	 * @return void
	 */
	public function testSetTempsPasse() {

		$obj = new Tabledeserreurs();

		$obj->setTempsPasse(true);
		$this->assertEquals(true, $obj->getTempsPasse());
	}

	/**
	 * Tests the setTitre() method.
	 *
	 * @return void
	 */
	public function testSetTitre() {

		$obj = new Tabledeserreurs();

		$obj->setTitre("titre");
		$this->assertEquals("titre", $obj->getTitre());
	}

	/**
	 * Tests the setTransfertEntree1() method.
	 *
	 * @return void
	 */
	public function testSetTransfertEntree1() {

		$obj = new Tabledeserreurs();

		$obj->setTransfertEntree1(true);
		$this->assertEquals(true, $obj->getTransfertEntree1());
	}

	/**
	 * Tests the setTransfertEntree2() method.
	 *
	 * @return void
	 */
	public function testSetTransfertEntree2() {

		$obj = new Tabledeserreurs();

		$obj->setTransfertEntree2(true);
		$this->assertEquals(true, $obj->getTransfertEntree2());
	}

	/**
	 * Tests the setTransfertSortie1() method.
	 *
	 * @return void
	 */
	public function testSetTransfertSortie1() {

		$obj = new Tabledeserreurs();

		$obj->setTransfertSortie1(true);
		$this->assertEquals(true, $obj->getTransfertSortie1());
	}

	/**
	 * Tests the setTransfertSortie2() method.
	 *
	 * @return void
	 */
	public function testSetTransfertSortie2() {

		$obj = new Tabledeserreurs();

		$obj->setTransfertSortie2(true);
		$this->assertEquals(true, $obj->getTransfertSortie2());
	}

	/**
	 * Tests the setTravailleJF() method.
	 *
	 * @return void
	 */
	public function testSetTravailleJF() {

		$obj = new Tabledeserreurs();

		$obj->setTravailleJF(true);
		$this->assertEquals(true, $obj->getTravailleJF());
	}

	/**
	 * Tests the setTypeContrat() method.
	 *
	 * @return void
	 */
	public function testSetTypeContrat() {

		$obj = new Tabledeserreurs();

		$obj->setTypeContrat("typeContrat");
		$this->assertEquals("typeContrat", $obj->getTypeContrat());
	}

	/**
	 * Tests the setTypeNationalite() method.
	 *
	 * @return void
	 */
	public function testSetTypeNationalite() {

		$obj = new Tabledeserreurs();

		$obj->setTypeNationalite("typeNationalite");
		$this->assertEquals("typeNationalite", $obj->getTypeNationalite());
	}

	/**
	 * Tests the setTypePaiement() method.
	 *
	 * @return void
	 */
	public function testSetTypePaiement() {

		$obj = new Tabledeserreurs();

		$obj->setTypePaiement("typePaiement");
		$this->assertEquals("typePaiement", $obj->getTypePaiement());
	}

	/**
	 * Tests the setVrpMulticarte() method.
	 *
	 * @return void
	 */
	public function testSetVrpMulticarte() {

		$obj = new Tabledeserreurs();

		$obj->setVrpMulticarte(true);
		$this->assertEquals(true, $obj->getVrpMulticarte());
	}

	/**
	 * Tests the setplafondSS2() method.
	 *
	 * @return void
	 */
	public function testSetplafondSS2() {

		$obj = new Tabledeserreurs();

		$obj->setplafondSS2(10.092018);
		$this->assertEquals(10.092018, $obj->getplafondSS2());
	}

}
