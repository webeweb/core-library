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
use WBW\Library\Core\Quadratus\Model\Proprete\DevisCommercialEntetes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Devis commercial entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class DevisCommercialEntetesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new DevisCommercialEntetes();

		$this->assertNull($obj->getAdIntBTQ());
		$this->assertNull($obj->getAdIntBureauDistributeur());
		$this->assertNull($obj->getAdIntCodePays());
		$this->assertNull($obj->getAdIntCodePostal());
		$this->assertNull($obj->getAdIntComplement());
		$this->assertNull($obj->getAdIntNom());
		$this->assertNull($obj->getAdIntNomVoie());
		$this->assertNull($obj->getAdIntNumVoie());
		$this->assertNull($obj->getBTQ());
		$this->assertNull($obj->getBureauDistributeur());
		$this->assertNull($obj->getCivilite());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeAnalClient());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeClientFact());
		$this->assertNull($obj->getCodeDevise());
		$this->assertNull($obj->getCodeFactor());
		$this->assertNull($obj->getCodeLangueDesignationArticle());
		$this->assertNull($obj->getCodeModeReglement());
		$this->assertNull($obj->getCodePays());
		$this->assertNull($obj->getCodePostal());
		$this->assertNull($obj->getCodeRegroupement());
		$this->assertNull($obj->getCodeRepresentant());
		$this->assertNull($obj->getCodeTVAClient());
		$this->assertNull($obj->getCodeVentilClient());
		$this->assertNull($obj->getComplement());
		$this->assertNull($obj->getDateAcceptation());
		$this->assertNull($obj->getDateDevis());
		$this->assertNull($obj->getDateEcheance());
		$this->assertNull($obj->getDateValidation());
		$this->assertNull($obj->getDevisEuros());
		$this->assertNull($obj->getDevisVM());
		$this->assertNull($obj->getEcheanceDepart());
		$this->assertNull($obj->getEcheanceForcee());
		$this->assertNull($obj->getEcheanceLe());
		$this->assertNull($obj->getEcheanceNbJours());
		$this->assertNull($obj->getEtat());
		$this->assertNull($obj->getFonctionCommercial());
		$this->assertNull($obj->getInterlocuteur());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getLibelleTransfCpta());
		$this->assertNull($obj->getLienDocument());
		$this->assertNull($obj->getMentionLibre());
		$this->assertNull($obj->getMontantAcompte());
		$this->assertNull($obj->getMontantHTPX());
		$this->assertNull($obj->getMontantHTVM());
		$this->assertNull($obj->getMontantTTC());
		$this->assertNull($obj->getNomClient());
		$this->assertNull($obj->getNomSuite());
		$this->assertNull($obj->getNomSuite2());
		$this->assertNull($obj->getNomSuite3());
		$this->assertNull($obj->getNomVoie());
		$this->assertNull($obj->getNombreEcheances());
		$this->assertNull($obj->getNumVoie());
		$this->assertNull($obj->getNumeroDevis());
		$this->assertNull($obj->getNumeroPJ());
		$this->assertNull($obj->getPrestation());
		$this->assertNull($obj->getReference1());
		$this->assertNull($obj->getReference2());
		$this->assertNull($obj->getReference3());
		$this->assertNull($obj->getReference4());
		$this->assertNull($obj->getSaisirAdresse());
		$this->assertNull($obj->getSoumisEscompte());
		$this->assertNull($obj->getSoumisTaxeDEEE());
		$this->assertNull($obj->getTauxDevise());
		$this->assertNull($obj->getTauxEscompte());
		$this->assertNull($obj->getTauxRemise1());
		$this->assertNull($obj->getTauxRemise2());
	}

	/**
	 * Tests the setAdIntBTQ() method.
	 *
	 * @return void
	 */
	public function testSetAdIntBTQ() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntBTQ("adIntBTQ");
		$this->assertEquals("adIntBTQ", $obj->getAdIntBTQ());
	}

	/**
	 * Tests the setAdIntBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetAdIntBureauDistributeur() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntBureauDistributeur("adIntBureauDistributeur");
		$this->assertEquals("adIntBureauDistributeur", $obj->getAdIntBureauDistributeur());
	}

	/**
	 * Tests the setAdIntCodePays() method.
	 *
	 * @return void
	 */
	public function testSetAdIntCodePays() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntCodePays("adIntCodePays");
		$this->assertEquals("adIntCodePays", $obj->getAdIntCodePays());
	}

	/**
	 * Tests the setAdIntCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetAdIntCodePostal() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntCodePostal("adIntCodePostal");
		$this->assertEquals("adIntCodePostal", $obj->getAdIntCodePostal());
	}

	/**
	 * Tests the setAdIntComplement() method.
	 *
	 * @return void
	 */
	public function testSetAdIntComplement() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntComplement("adIntComplement");
		$this->assertEquals("adIntComplement", $obj->getAdIntComplement());
	}

	/**
	 * Tests the setAdIntNom() method.
	 *
	 * @return void
	 */
	public function testSetAdIntNom() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntNom("adIntNom");
		$this->assertEquals("adIntNom", $obj->getAdIntNom());
	}

	/**
	 * Tests the setAdIntNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetAdIntNomVoie() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntNomVoie("adIntNomVoie");
		$this->assertEquals("adIntNomVoie", $obj->getAdIntNomVoie());
	}

	/**
	 * Tests the setAdIntNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetAdIntNumVoie() {

		$obj = new DevisCommercialEntetes();

		$obj->setAdIntNumVoie("adIntNumVoie");
		$this->assertEquals("adIntNumVoie", $obj->getAdIntNumVoie());
	}

	/**
	 * Tests the setBTQ() method.
	 *
	 * @return void
	 */
	public function testSetBTQ() {

		$obj = new DevisCommercialEntetes();

		$obj->setBTQ("bTQ");
		$this->assertEquals("bTQ", $obj->getBTQ());
	}

	/**
	 * Tests the setBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur() {

		$obj = new DevisCommercialEntetes();

		$obj->setBureauDistributeur("bureauDistributeur");
		$this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
	}

	/**
	 * Tests the setCivilite() method.
	 *
	 * @return void
	 */
	public function testSetCivilite() {

		$obj = new DevisCommercialEntetes();

		$obj->setCivilite("civilite");
		$this->assertEquals("civilite", $obj->getCivilite());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeAnalClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeAnalClient() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeAnalClient("codeAnalClient");
		$this->assertEquals("codeAnalClient", $obj->getCodeAnalClient());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeClientFact() method.
	 *
	 * @return void
	 */
	public function testSetCodeClientFact() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeClientFact("codeClientFact");
		$this->assertEquals("codeClientFact", $obj->getCodeClientFact());
	}

	/**
	 * Tests the setCodeDevise() method.
	 *
	 * @return void
	 */
	public function testSetCodeDevise() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeDevise("codeDevise");
		$this->assertEquals("codeDevise", $obj->getCodeDevise());
	}

	/**
	 * Tests the setCodeFactor() method.
	 *
	 * @return void
	 */
	public function testSetCodeFactor() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeFactor("codeFactor");
		$this->assertEquals("codeFactor", $obj->getCodeFactor());
	}

	/**
	 * Tests the setCodeLangueDesignationArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeLangueDesignationArticle() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
		$this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
	}

	/**
	 * Tests the setCodeModeReglement() method.
	 *
	 * @return void
	 */
	public function testSetCodeModeReglement() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeModeReglement("codeModeReglement");
		$this->assertEquals("codeModeReglement", $obj->getCodeModeReglement());
	}

	/**
	 * Tests the setCodePays() method.
	 *
	 * @return void
	 */
	public function testSetCodePays() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodePays("codePays");
		$this->assertEquals("codePays", $obj->getCodePays());
	}

	/**
	 * Tests the setCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodePostal("codePostal");
		$this->assertEquals("codePostal", $obj->getCodePostal());
	}

	/**
	 * Tests the setCodeRegroupement() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegroupement() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeRegroupement("codeRegroupement");
		$this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
	}

	/**
	 * Tests the setCodeRepresentant() method.
	 *
	 * @return void
	 */
	public function testSetCodeRepresentant() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeRepresentant("codeRepresentant");
		$this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
	}

	/**
	 * Tests the setCodeTVAClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeTVAClient() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeTVAClient("codeTVAClient");
		$this->assertEquals("codeTVAClient", $obj->getCodeTVAClient());
	}

	/**
	 * Tests the setCodeVentilClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeVentilClient() {

		$obj = new DevisCommercialEntetes();

		$obj->setCodeVentilClient("codeVentilClient");
		$this->assertEquals("codeVentilClient", $obj->getCodeVentilClient());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new DevisCommercialEntetes();

		$obj->setComplement("complément");
		$this->assertEquals("complément", $obj->getComplement());
	}

	/**
	 * Tests the setDateAcceptation() method.
	 *
	 * @return void
	 */
	public function testSetDateAcceptation() {

		$obj = new DevisCommercialEntetes();

		$obj->setDateAcceptation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAcceptation());
	}

	/**
	 * Tests the setDateDevis() method.
	 *
	 * @return void
	 */
	public function testSetDateDevis() {

		$obj = new DevisCommercialEntetes();

		$obj->setDateDevis(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDevis());
	}

	/**
	 * Tests the setDateEcheance() method.
	 *
	 * @return void
	 */
	public function testSetDateEcheance() {

		$obj = new DevisCommercialEntetes();

		$obj->setDateEcheance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEcheance());
	}

	/**
	 * Tests the setDateValidation() method.
	 *
	 * @return void
	 */
	public function testSetDateValidation() {

		$obj = new DevisCommercialEntetes();

		$obj->setDateValidation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidation());
	}

	/**
	 * Tests the setDevisEuros() method.
	 *
	 * @return void
	 */
	public function testSetDevisEuros() {

		$obj = new DevisCommercialEntetes();

		$obj->setDevisEuros(true);
		$this->assertEquals(true, $obj->getDevisEuros());
	}

	/**
	 * Tests the setDevisVM() method.
	 *
	 * @return void
	 */
	public function testSetDevisVM() {

		$obj = new DevisCommercialEntetes();

		$obj->setDevisVM(true);
		$this->assertEquals(true, $obj->getDevisVM());
	}

	/**
	 * Tests the setEcheanceDepart() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceDepart() {

		$obj = new DevisCommercialEntetes();

		$obj->setEcheanceDepart("echeanceDepart");
		$this->assertEquals("echeanceDepart", $obj->getEcheanceDepart());
	}

	/**
	 * Tests the setEcheanceForcee() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceForcee() {

		$obj = new DevisCommercialEntetes();

		$obj->setEcheanceForcee(true);
		$this->assertEquals(true, $obj->getEcheanceForcee());
	}

	/**
	 * Tests the setEcheanceLe() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceLe() {

		$obj = new DevisCommercialEntetes();

		$obj->setEcheanceLe("echeanceLe");
		$this->assertEquals("echeanceLe", $obj->getEcheanceLe());
	}

	/**
	 * Tests the setEcheanceNbJours() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceNbJours() {

		$obj = new DevisCommercialEntetes();

		$obj->setEcheanceNbJours(10);
		$this->assertEquals(10, $obj->getEcheanceNbJours());
	}

	/**
	 * Tests the setEtat() method.
	 *
	 * @return void
	 */
	public function testSetEtat() {

		$obj = new DevisCommercialEntetes();

		$obj->setEtat("etat");
		$this->assertEquals("etat", $obj->getEtat());
	}

	/**
	 * Tests the setFonctionCommercial() method.
	 *
	 * @return void
	 */
	public function testSetFonctionCommercial() {

		$obj = new DevisCommercialEntetes();

		$obj->setFonctionCommercial("fonctionCommercial");
		$this->assertEquals("fonctionCommercial", $obj->getFonctionCommercial());
	}

	/**
	 * Tests the setInterlocuteur() method.
	 *
	 * @return void
	 */
	public function testSetInterlocuteur() {

		$obj = new DevisCommercialEntetes();

		$obj->setInterlocuteur("interlocuteur");
		$this->assertEquals("interlocuteur", $obj->getInterlocuteur());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new DevisCommercialEntetes();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setLibelleTransfCpta() method.
	 *
	 * @return void
	 */
	public function testSetLibelleTransfCpta() {

		$obj = new DevisCommercialEntetes();

		$obj->setLibelleTransfCpta("libelleTransfCpta");
		$this->assertEquals("libelleTransfCpta", $obj->getLibelleTransfCpta());
	}

	/**
	 * Tests the setLienDocument() method.
	 *
	 * @return void
	 */
	public function testSetLienDocument() {

		$obj = new DevisCommercialEntetes();

		$obj->setLienDocument("lienDocument");
		$this->assertEquals("lienDocument", $obj->getLienDocument());
	}

	/**
	 * Tests the setMentionLibre() method.
	 *
	 * @return void
	 */
	public function testSetMentionLibre() {

		$obj = new DevisCommercialEntetes();

		$obj->setMentionLibre("mentionLibre");
		$this->assertEquals("mentionLibre", $obj->getMentionLibre());
	}

	/**
	 * Tests the setMontantAcompte() method.
	 *
	 * @return void
	 */
	public function testSetMontantAcompte() {

		$obj = new DevisCommercialEntetes();

		$obj->setMontantAcompte(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantAcompte());
	}

	/**
	 * Tests the setMontantHTPX() method.
	 *
	 * @return void
	 */
	public function testSetMontantHTPX() {

		$obj = new DevisCommercialEntetes();

		$obj->setMontantHTPX(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantHTPX());
	}

	/**
	 * Tests the setMontantHTVM() method.
	 *
	 * @return void
	 */
	public function testSetMontantHTVM() {

		$obj = new DevisCommercialEntetes();

		$obj->setMontantHTVM(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantHTVM());
	}

	/**
	 * Tests the setMontantTTC() method.
	 *
	 * @return void
	 */
	public function testSetMontantTTC() {

		$obj = new DevisCommercialEntetes();

		$obj->setMontantTTC(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantTTC());
	}

	/**
	 * Tests the setNomClient() method.
	 *
	 * @return void
	 */
	public function testSetNomClient() {

		$obj = new DevisCommercialEntetes();

		$obj->setNomClient("nomClient");
		$this->assertEquals("nomClient", $obj->getNomClient());
	}

	/**
	 * Tests the setNomSuite() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite() {

		$obj = new DevisCommercialEntetes();

		$obj->setNomSuite("nomSuite");
		$this->assertEquals("nomSuite", $obj->getNomSuite());
	}

	/**
	 * Tests the setNomSuite2() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite2() {

		$obj = new DevisCommercialEntetes();

		$obj->setNomSuite2("nomSuite2");
		$this->assertEquals("nomSuite2", $obj->getNomSuite2());
	}

	/**
	 * Tests the setNomSuite3() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite3() {

		$obj = new DevisCommercialEntetes();

		$obj->setNomSuite3("nomSuite3");
		$this->assertEquals("nomSuite3", $obj->getNomSuite3());
	}

	/**
	 * Tests the setNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie() {

		$obj = new DevisCommercialEntetes();

		$obj->setNomVoie("nomVoie");
		$this->assertEquals("nomVoie", $obj->getNomVoie());
	}

	/**
	 * Tests the setNombreEcheances() method.
	 *
	 * @return void
	 */
	public function testSetNombreEcheances() {

		$obj = new DevisCommercialEntetes();

		$obj->setNombreEcheances("nombreEcheances");
		$this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
	}

	/**
	 * Tests the setNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie() {

		$obj = new DevisCommercialEntetes();

		$obj->setNumVoie("numVoie");
		$this->assertEquals("numVoie", $obj->getNumVoie());
	}

	/**
	 * Tests the setNumeroDevis() method.
	 *
	 * @return void
	 */
	public function testSetNumeroDevis() {

		$obj = new DevisCommercialEntetes();

		$obj->setNumeroDevis("numeroDevis");
		$this->assertEquals("numeroDevis", $obj->getNumeroDevis());
	}

	/**
	 * Tests the setNumeroPJ() method.
	 *
	 * @return void
	 */
	public function testSetNumeroPJ() {

		$obj = new DevisCommercialEntetes();

		$obj->setNumeroPJ(10);
		$this->assertEquals(10, $obj->getNumeroPJ());
	}

	/**
	 * Tests the setPrestation() method.
	 *
	 * @return void
	 */
	public function testSetPrestation() {

		$obj = new DevisCommercialEntetes();

		$obj->setPrestation("prestation");
		$this->assertEquals("prestation", $obj->getPrestation());
	}

	/**
	 * Tests the setReference1() method.
	 *
	 * @return void
	 */
	public function testSetReference1() {

		$obj = new DevisCommercialEntetes();

		$obj->setReference1("reference1");
		$this->assertEquals("reference1", $obj->getReference1());
	}

	/**
	 * Tests the setReference2() method.
	 *
	 * @return void
	 */
	public function testSetReference2() {

		$obj = new DevisCommercialEntetes();

		$obj->setReference2("reference2");
		$this->assertEquals("reference2", $obj->getReference2());
	}

	/**
	 * Tests the setReference3() method.
	 *
	 * @return void
	 */
	public function testSetReference3() {

		$obj = new DevisCommercialEntetes();

		$obj->setReference3("reference3");
		$this->assertEquals("reference3", $obj->getReference3());
	}

	/**
	 * Tests the setReference4() method.
	 *
	 * @return void
	 */
	public function testSetReference4() {

		$obj = new DevisCommercialEntetes();

		$obj->setReference4("reference4");
		$this->assertEquals("reference4", $obj->getReference4());
	}

	/**
	 * Tests the setSaisirAdresse() method.
	 *
	 * @return void
	 */
	public function testSetSaisirAdresse() {

		$obj = new DevisCommercialEntetes();

		$obj->setSaisirAdresse(true);
		$this->assertEquals(true, $obj->getSaisirAdresse());
	}

	/**
	 * Tests the setSoumisEscompte() method.
	 *
	 * @return void
	 */
	public function testSetSoumisEscompte() {

		$obj = new DevisCommercialEntetes();

		$obj->setSoumisEscompte(true);
		$this->assertEquals(true, $obj->getSoumisEscompte());
	}

	/**
	 * Tests the setSoumisTaxeDEEE() method.
	 *
	 * @return void
	 */
	public function testSetSoumisTaxeDEEE() {

		$obj = new DevisCommercialEntetes();

		$obj->setSoumisTaxeDEEE(true);
		$this->assertEquals(true, $obj->getSoumisTaxeDEEE());
	}

	/**
	 * Tests the setTauxDevise() method.
	 *
	 * @return void
	 */
	public function testSetTauxDevise() {

		$obj = new DevisCommercialEntetes();

		$obj->setTauxDevise(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxDevise());
	}

	/**
	 * Tests the setTauxEscompte() method.
	 *
	 * @return void
	 */
	public function testSetTauxEscompte() {

		$obj = new DevisCommercialEntetes();

		$obj->setTauxEscompte(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxEscompte());
	}

	/**
	 * Tests the setTauxRemise1() method.
	 *
	 * @return void
	 */
	public function testSetTauxRemise1() {

		$obj = new DevisCommercialEntetes();

		$obj->setTauxRemise1(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxRemise1());
	}

	/**
	 * Tests the setTauxRemise2() method.
	 *
	 * @return void
	 */
	public function testSetTauxRemise2() {

		$obj = new DevisCommercialEntetes();

		$obj->setTauxRemise2(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxRemise2());
	}

}
