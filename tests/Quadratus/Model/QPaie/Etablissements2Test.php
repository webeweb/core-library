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
use WBW\Library\Core\Quadratus\Model\QPaie\Etablissements2;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Etablissements2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class Etablissements2Test extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Etablissements2();

		$this->assertNull($obj->getAdherentSyndicat());
		$this->assertNull($obj->getAnneeChgtEffectif());
		$this->assertNull($obj->getAnneeJEI());
		$this->assertNull($obj->getAssujettiCVAE());
		$this->assertNull($obj->getAutreSignatureDNAE());
		$this->assertNull($obj->getBIC2());
		$this->assertNull($obj->getBIC3());
		$this->assertNull($obj->getCaisseCPTransport());
		$this->assertNull($obj->getCategorieJuridique());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeMedTravDUE());
		$this->assertNull($obj->getCodeOrgaDUE());
		$this->assertNull($obj->getCoeffFillonMoins20());
		$this->assertNull($obj->getCompteChargeHeuresActPart());
		$this->assertNull($obj->getCompteChargeIndemAbsIntemp());
		$this->assertNull($obj->getCompteChargeIndemActPart());
		$this->assertNull($obj->getCompteChargeIntVers());
		$this->assertNull($obj->getCompteChargePartVers());
		$this->assertNull($obj->getContactSignatureDNAE());
		$this->assertNull($obj->getDateFinExclureLFR2012());
		$this->assertNull($obj->getExclureLFR2012());
		$this->assertNull($obj->getGestionHSTEPA());
		$this->assertNull($obj->getGestionMaintienSalAuto());
		$this->assertNull($obj->getIBAN2());
		$this->assertNull($obj->getIBAN3());
		$this->assertNull($obj->getIbanIdClient2());
		$this->assertNull($obj->getIbanIdClient3());
		$this->assertNull($obj->getImplantationEntreprise());
		$this->assertNull($obj->getJFChargeEmp());
		$this->assertNull($obj->getLieuSignatureDNAE());
		$this->assertNull($obj->getMaintienNetDeducCSGIJSS());
		$this->assertNull($obj->getNbFractionEtab());
		$this->assertNull($obj->getNomSignataireDNAE());
		$this->assertNull($obj->getPrenomSignataireDNAE());
		$this->assertNull($obj->getPseudoSiret());
		$this->assertNull($obj->getQualiteSignataireDNAE());
		$this->assertNull($obj->getReductionMayotte());
		$this->assertNull($obj->getRemunerationExpatries());
		$this->assertNull($obj->getSMICMCourant());
		$this->assertNull($obj->getSiretCentralisateur());
		$this->assertNull($obj->getSocieteInterim());
		$this->assertNull($obj->getTDS19());
		$this->assertNull($obj->getTEPAMoins20());
		$this->assertNull($obj->getTauxComplHeure());
		$this->assertNull($obj->getTauxCotisOSSEtOPE());
		$this->assertNull($obj->getTauxHComp());
		$this->assertNull($obj->getTelSignatureDNAE());
		$this->assertNull($obj->getTypeEffectifCT());
		$this->assertNull($obj->getTypeMaintienBrutNet());
	}

	/**
	 * Tests the setAdherentSyndicat() method.
	 *
	 * @return void
	 */
	public function testSetAdherentSyndicat() {

		$obj = new Etablissements2();

		$obj->setAdherentSyndicat(true);
		$this->assertEquals(true, $obj->getAdherentSyndicat());
	}

	/**
	 * Tests the setAnneeChgtEffectif() method.
	 *
	 * @return void
	 */
	public function testSetAnneeChgtEffectif() {

		$obj = new Etablissements2();

		$obj->setAnneeChgtEffectif("anneeChgtEffectif");
		$this->assertEquals("anneeChgtEffectif", $obj->getAnneeChgtEffectif());
	}

	/**
	 * Tests the setAnneeJEI() method.
	 *
	 * @return void
	 */
	public function testSetAnneeJEI() {

		$obj = new Etablissements2();

		$obj->setAnneeJEI(10);
		$this->assertEquals(10, $obj->getAnneeJEI());
	}

	/**
	 * Tests the setAssujettiCVAE() method.
	 *
	 * @return void
	 */
	public function testSetAssujettiCVAE() {

		$obj = new Etablissements2();

		$obj->setAssujettiCVAE(true);
		$this->assertEquals(true, $obj->getAssujettiCVAE());
	}

	/**
	 * Tests the setAutreSignatureDNAE() method.
	 *
	 * @return void
	 */
	public function testSetAutreSignatureDNAE() {

		$obj = new Etablissements2();

		$obj->setAutreSignatureDNAE("autreSignatureDNAE");
		$this->assertEquals("autreSignatureDNAE", $obj->getAutreSignatureDNAE());
	}

	/**
	 * Tests the setBIC2() method.
	 *
	 * @return void
	 */
	public function testSetBIC2() {

		$obj = new Etablissements2();

		$obj->setBIC2("bIC2");
		$this->assertEquals("bIC2", $obj->getBIC2());
	}

	/**
	 * Tests the setBIC3() method.
	 *
	 * @return void
	 */
	public function testSetBIC3() {

		$obj = new Etablissements2();

		$obj->setBIC3("bIC3");
		$this->assertEquals("bIC3", $obj->getBIC3());
	}

	/**
	 * Tests the setCaisseCPTransport() method.
	 *
	 * @return void
	 */
	public function testSetCaisseCPTransport() {

		$obj = new Etablissements2();

		$obj->setCaisseCPTransport(true);
		$this->assertEquals(true, $obj->getCaisseCPTransport());
	}

	/**
	 * Tests the setCategorieJuridique() method.
	 *
	 * @return void
	 */
	public function testSetCategorieJuridique() {

		$obj = new Etablissements2();

		$obj->setCategorieJuridique("categorieJuridique");
		$this->assertEquals("categorieJuridique", $obj->getCategorieJuridique());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new Etablissements2();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeMedTravDUE() method.
	 *
	 * @return void
	 */
	public function testSetCodeMedTravDUE() {

		$obj = new Etablissements2();

		$obj->setCodeMedTravDUE("codeMedTravDUE");
		$this->assertEquals("codeMedTravDUE", $obj->getCodeMedTravDUE());
	}

	/**
	 * Tests the setCodeOrgaDUE() method.
	 *
	 * @return void
	 */
	public function testSetCodeOrgaDUE() {

		$obj = new Etablissements2();

		$obj->setCodeOrgaDUE("codeOrgaDUE");
		$this->assertEquals("codeOrgaDUE", $obj->getCodeOrgaDUE());
	}

	/**
	 * Tests the setCoeffFillonMoins20() method.
	 *
	 * @return void
	 */
	public function testSetCoeffFillonMoins20() {

		$obj = new Etablissements2();

		$obj->setCoeffFillonMoins20(true);
		$this->assertEquals(true, $obj->getCoeffFillonMoins20());
	}

	/**
	 * Tests the setCompteChargeHeuresActPart() method.
	 *
	 * @return void
	 */
	public function testSetCompteChargeHeuresActPart() {

		$obj = new Etablissements2();

		$obj->setCompteChargeHeuresActPart("compteChargeHeuresActPart");
		$this->assertEquals("compteChargeHeuresActPart", $obj->getCompteChargeHeuresActPart());
	}

	/**
	 * Tests the setCompteChargeIndemAbsIntemp() method.
	 *
	 * @return void
	 */
	public function testSetCompteChargeIndemAbsIntemp() {

		$obj = new Etablissements2();

		$obj->setCompteChargeIndemAbsIntemp("compteChargeIndemAbsIntemp");
		$this->assertEquals("compteChargeIndemAbsIntemp", $obj->getCompteChargeIndemAbsIntemp());
	}

	/**
	 * Tests the setCompteChargeIndemActPart() method.
	 *
	 * @return void
	 */
	public function testSetCompteChargeIndemActPart() {

		$obj = new Etablissements2();

		$obj->setCompteChargeIndemActPart("compteChargeIndemActPart");
		$this->assertEquals("compteChargeIndemActPart", $obj->getCompteChargeIndemActPart());
	}

	/**
	 * Tests the setCompteChargeIntVers() method.
	 *
	 * @return void
	 */
	public function testSetCompteChargeIntVers() {

		$obj = new Etablissements2();

		$obj->setCompteChargeIntVers("compteChargeIntVers");
		$this->assertEquals("compteChargeIntVers", $obj->getCompteChargeIntVers());
	}

	/**
	 * Tests the setCompteChargePartVers() method.
	 *
	 * @return void
	 */
	public function testSetCompteChargePartVers() {

		$obj = new Etablissements2();

		$obj->setCompteChargePartVers("compteChargePartVers");
		$this->assertEquals("compteChargePartVers", $obj->getCompteChargePartVers());
	}

	/**
	 * Tests the setContactSignatureDNAE() method.
	 *
	 * @return void
	 */
	public function testSetContactSignatureDNAE() {

		$obj = new Etablissements2();

		$obj->setContactSignatureDNAE("contactSignatureDNAE");
		$this->assertEquals("contactSignatureDNAE", $obj->getContactSignatureDNAE());
	}

	/**
	 * Tests the setDateFinExclureLFR2012() method.
	 *
	 * @return void
	 */
	public function testSetDateFinExclureLFR2012() {

		$obj = new Etablissements2();

		$obj->setDateFinExclureLFR2012(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinExclureLFR2012());
	}

	/**
	 * Tests the setExclureLFR2012() method.
	 *
	 * @return void
	 */
	public function testSetExclureLFR2012() {

		$obj = new Etablissements2();

		$obj->setExclureLFR2012(true);
		$this->assertEquals(true, $obj->getExclureLFR2012());
	}

	/**
	 * Tests the setGestionHSTEPA() method.
	 *
	 * @return void
	 */
	public function testSetGestionHSTEPA() {

		$obj = new Etablissements2();

		$obj->setGestionHSTEPA("gestionHSTEPA");
		$this->assertEquals("gestionHSTEPA", $obj->getGestionHSTEPA());
	}

	/**
	 * Tests the setGestionMaintienSalAuto() method.
	 *
	 * @return void
	 */
	public function testSetGestionMaintienSalAuto() {

		$obj = new Etablissements2();

		$obj->setGestionMaintienSalAuto(true);
		$this->assertEquals(true, $obj->getGestionMaintienSalAuto());
	}

	/**
	 * Tests the setIBAN2() method.
	 *
	 * @return void
	 */
	public function testSetIBAN2() {

		$obj = new Etablissements2();

		$obj->setIBAN2("iBAN2");
		$this->assertEquals("iBAN2", $obj->getIBAN2());
	}

	/**
	 * Tests the setIBAN3() method.
	 *
	 * @return void
	 */
	public function testSetIBAN3() {

		$obj = new Etablissements2();

		$obj->setIBAN3("iBAN3");
		$this->assertEquals("iBAN3", $obj->getIBAN3());
	}

	/**
	 * Tests the setIbanIdClient2() method.
	 *
	 * @return void
	 */
	public function testSetIbanIdClient2() {

		$obj = new Etablissements2();

		$obj->setIbanIdClient2("ibanIdClient2");
		$this->assertEquals("ibanIdClient2", $obj->getIbanIdClient2());
	}

	/**
	 * Tests the setIbanIdClient3() method.
	 *
	 * @return void
	 */
	public function testSetIbanIdClient3() {

		$obj = new Etablissements2();

		$obj->setIbanIdClient3("ibanIdClient3");
		$this->assertEquals("ibanIdClient3", $obj->getIbanIdClient3());
	}

	/**
	 * Tests the setImplantationEntreprise() method.
	 *
	 * @return void
	 */
	public function testSetImplantationEntreprise() {

		$obj = new Etablissements2();

		$obj->setImplantationEntreprise("implantationEntreprise");
		$this->assertEquals("implantationEntreprise", $obj->getImplantationEntreprise());
	}

	/**
	 * Tests the setJFChargeEmp() method.
	 *
	 * @return void
	 */
	public function testSetJFChargeEmp() {

		$obj = new Etablissements2();

		$obj->setJFChargeEmp(true);
		$this->assertEquals(true, $obj->getJFChargeEmp());
	}

	/**
	 * Tests the setLieuSignatureDNAE() method.
	 *
	 * @return void
	 */
	public function testSetLieuSignatureDNAE() {

		$obj = new Etablissements2();

		$obj->setLieuSignatureDNAE("lieuSignatureDNAE");
		$this->assertEquals("lieuSignatureDNAE", $obj->getLieuSignatureDNAE());
	}

	/**
	 * Tests the setMaintienNetDeducCSGIJSS() method.
	 *
	 * @return void
	 */
	public function testSetMaintienNetDeducCSGIJSS() {

		$obj = new Etablissements2();

		$obj->setMaintienNetDeducCSGIJSS(true);
		$this->assertEquals(true, $obj->getMaintienNetDeducCSGIJSS());
	}

	/**
	 * Tests the setNbFractionEtab() method.
	 *
	 * @return void
	 */
	public function testSetNbFractionEtab() {

		$obj = new Etablissements2();

		$obj->setNbFractionEtab(10);
		$this->assertEquals(10, $obj->getNbFractionEtab());
	}

	/**
	 * Tests the setNomSignataireDNAE() method.
	 *
	 * @return void
	 */
	public function testSetNomSignataireDNAE() {

		$obj = new Etablissements2();

		$obj->setNomSignataireDNAE("nomSignataireDNAE");
		$this->assertEquals("nomSignataireDNAE", $obj->getNomSignataireDNAE());
	}

	/**
	 * Tests the setPrenomSignataireDNAE() method.
	 *
	 * @return void
	 */
	public function testSetPrenomSignataireDNAE() {

		$obj = new Etablissements2();

		$obj->setPrenomSignataireDNAE("prenomSignataireDNAE");
		$this->assertEquals("prenomSignataireDNAE", $obj->getPrenomSignataireDNAE());
	}

	/**
	 * Tests the setPseudoSiret() method.
	 *
	 * @return void
	 */
	public function testSetPseudoSiret() {

		$obj = new Etablissements2();

		$obj->setPseudoSiret("pseudoSiret");
		$this->assertEquals("pseudoSiret", $obj->getPseudoSiret());
	}

	/**
	 * Tests the setQualiteSignataireDNAE() method.
	 *
	 * @return void
	 */
	public function testSetQualiteSignataireDNAE() {

		$obj = new Etablissements2();

		$obj->setQualiteSignataireDNAE("qualiteSignataireDNAE");
		$this->assertEquals("qualiteSignataireDNAE", $obj->getQualiteSignataireDNAE());
	}

	/**
	 * Tests the setReductionMayotte() method.
	 *
	 * @return void
	 */
	public function testSetReductionMayotte() {

		$obj = new Etablissements2();

		$obj->setReductionMayotte(true);
		$this->assertEquals(true, $obj->getReductionMayotte());
	}

	/**
	 * Tests the setRemunerationExpatries() method.
	 *
	 * @return void
	 */
	public function testSetRemunerationExpatries() {

		$obj = new Etablissements2();

		$obj->setRemunerationExpatries("remunerationExpatries");
		$this->assertEquals("remunerationExpatries", $obj->getRemunerationExpatries());
	}

	/**
	 * Tests the setSMICMCourant() method.
	 *
	 * @return void
	 */
	public function testSetSMICMCourant() {

		$obj = new Etablissements2();

		$obj->setSMICMCourant(true);
		$this->assertEquals(true, $obj->getSMICMCourant());
	}

	/**
	 * Tests the setSiretCentralisateur() method.
	 *
	 * @return void
	 */
	public function testSetSiretCentralisateur() {

		$obj = new Etablissements2();

		$obj->setSiretCentralisateur(true);
		$this->assertEquals(true, $obj->getSiretCentralisateur());
	}

	/**
	 * Tests the setSocieteInterim() method.
	 *
	 * @return void
	 */
	public function testSetSocieteInterim() {

		$obj = new Etablissements2();

		$obj->setSocieteInterim(true);
		$this->assertEquals(true, $obj->getSocieteInterim());
	}

	/**
	 * Tests the setTDS19() method.
	 *
	 * @return void
	 */
	public function testSetTDS19() {

		$obj = new Etablissements2();

		$obj->setTDS19("tDS19");
		$this->assertEquals("tDS19", $obj->getTDS19());
	}

	/**
	 * Tests the setTEPAMoins20() method.
	 *
	 * @return void
	 */
	public function testSetTEPAMoins20() {

		$obj = new Etablissements2();

		$obj->setTEPAMoins20(true);
		$this->assertEquals(true, $obj->getTEPAMoins20());
	}

	/**
	 * Tests the setTauxComplHeure() method.
	 *
	 * @return void
	 */
	public function testSetTauxComplHeure() {

		$obj = new Etablissements2();

		$obj->setTauxComplHeure(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxComplHeure());
	}

	/**
	 * Tests the setTauxCotisOSSEtOPE() method.
	 *
	 * @return void
	 */
	public function testSetTauxCotisOSSEtOPE() {

		$obj = new Etablissements2();

		$obj->setTauxCotisOSSEtOPE(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxCotisOSSEtOPE());
	}

	/**
	 * Tests the setTauxHComp() method.
	 *
	 * @return void
	 */
	public function testSetTauxHComp() {

		$obj = new Etablissements2();

		$obj->setTauxHComp(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxHComp());
	}

	/**
	 * Tests the setTelSignatureDNAE() method.
	 *
	 * @return void
	 */
	public function testSetTelSignatureDNAE() {

		$obj = new Etablissements2();

		$obj->setTelSignatureDNAE("telSignatureDNAE");
		$this->assertEquals("telSignatureDNAE", $obj->getTelSignatureDNAE());
	}

	/**
	 * Tests the setTypeEffectifCT() method.
	 *
	 * @return void
	 */
	public function testSetTypeEffectifCT() {

		$obj = new Etablissements2();

		$obj->setTypeEffectifCT("typeEffectifCT");
		$this->assertEquals("typeEffectifCT", $obj->getTypeEffectifCT());
	}

	/**
	 * Tests the setTypeMaintienBrutNet() method.
	 *
	 * @return void
	 */
	public function testSetTypeMaintienBrutNet() {

		$obj = new Etablissements2();

		$obj->setTypeMaintienBrutNet("typeMaintienBrutNet");
		$this->assertEquals("typeMaintienBrutNet", $obj->getTypeMaintienBrutNet());
	}

}
