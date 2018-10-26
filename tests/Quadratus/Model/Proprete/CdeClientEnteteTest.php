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
use WBW\Library\Core\Quadratus\Model\Proprete\CdeClientEntete;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Cde client entete model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 * @final
 */
final class CdeClientEnteteTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CdeClientEntete();

		$this->assertNull($obj->getBTQ());
		$this->assertNull($obj->getBTQ2());
		$this->assertNull($obj->getBureauDistributeur());
		$this->assertNull($obj->getBureauDistributeur2());
		$this->assertNull($obj->getCodeAffaire());
		$this->assertNull($obj->getCodeChantier());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeDevise());
		$this->assertNull($obj->getCodeOfficielCommune());
		$this->assertNull($obj->getCodeOfficielCommune2());
		$this->assertNull($obj->getCodePostal());
		$this->assertNull($obj->getCodePostal2());
		$this->assertNull($obj->getCodeReglement());
		$this->assertNull($obj->getCodeRegroupement());
		$this->assertNull($obj->getCodeRepresentant());
		$this->assertNull($obj->getCodeTVA());
		$this->assertNull($obj->getCodeVentilCompta());
		$this->assertNull($obj->getComplement());
		$this->assertNull($obj->getComplement2());
		$this->assertNull($obj->getDateCreation());
		$this->assertNull($obj->getDateEcheance());
		$this->assertNull($obj->getDateModification());
		$this->assertNull($obj->getDatePiece());
		$this->assertNull($obj->getDateReceptionPrevue());
		$this->assertNull($obj->getEcheanceForcee());
		$this->assertNull($obj->getEdition());
		$this->assertNull($obj->getFactureEuros());
		$this->assertNull($obj->getMontantAcompte());
		$this->assertNull($obj->getNbColis());
		$this->assertNull($obj->getNoPiece());
		$this->assertNull($obj->getNom());
		$this->assertNull($obj->getNom2());
		$this->assertNull($obj->getNomSuite());
		$this->assertNull($obj->getNomSuite2());
		$this->assertNull($obj->getNomVille());
		$this->assertNull($obj->getNomVille2());
		$this->assertNull($obj->getNomVoie());
		$this->assertNull($obj->getNomVoie2());
		$this->assertNull($obj->getNombreEcheances());
		$this->assertNull($obj->getNumVoie());
		$this->assertNull($obj->getNumVoie2());
		$this->assertNull($obj->getNumeroPJ());
		$this->assertNull($obj->getPaiementDepartLe());
		$this->assertNull($obj->getPaiementLe());
		$this->assertNull($obj->getPaiementNombreDeJours());
		$this->assertNull($obj->getPoids());
		$this->assertNull($obj->getReference1());
		$this->assertNull($obj->getReference2());
		$this->assertNull($obj->getReference3());
		$this->assertNull($obj->getReference4());
		$this->assertNull($obj->getRemisePied());
		$this->assertNull($obj->getRemisePied2());
		$this->assertNull($obj->getRemisePied3());
		$this->assertNull($obj->getSaisirAdresse());
		$this->assertNull($obj->getSaisirAdresseLivraison());
		$this->assertNull($obj->getSoumisEscompte());
		$this->assertNull($obj->getSoumisTaxe1());
		$this->assertNull($obj->getSoumisTaxe2());
		$this->assertNull($obj->getSoumisTaxe3());
		$this->assertNull($obj->getTauxCommission());
		$this->assertNull($obj->getTauxDevise());
		$this->assertNull($obj->getTransfert());
		$this->assertNull($obj->getTransporteur());
		$this->assertNull($obj->getTxEscompteVente());
	}

	/**
	 * Tests the setBTQ() method.
	 *
	 * @return void
	 */
	public function testSetBTQ() {

		$obj = new CdeClientEntete();

		$obj->setBTQ("bTQ");
		$this->assertEquals("bTQ", $obj->getBTQ());
	}

	/**
	 * Tests the setBTQ2() method.
	 *
	 * @return void
	 */
	public function testSetBTQ2() {

		$obj = new CdeClientEntete();

		$obj->setBTQ2("bTQ2");
		$this->assertEquals("bTQ2", $obj->getBTQ2());
	}

	/**
	 * Tests the setBureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur() {

		$obj = new CdeClientEntete();

		$obj->setBureauDistributeur("bureauDistributeur");
		$this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
	}

	/**
	 * Tests the setBureauDistributeur2() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeur2() {

		$obj = new CdeClientEntete();

		$obj->setBureauDistributeur2("bureauDistributeur2");
		$this->assertEquals("bureauDistributeur2", $obj->getBureauDistributeur2());
	}

	/**
	 * Tests the setCodeAffaire() method.
	 *
	 * @return void
	 */
	public function testSetCodeAffaire() {

		$obj = new CdeClientEntete();

		$obj->setCodeAffaire("codeAffaire");
		$this->assertEquals("codeAffaire", $obj->getCodeAffaire());
	}

	/**
	 * Tests the setCodeChantier() method.
	 *
	 * @return void
	 */
	public function testSetCodeChantier() {

		$obj = new CdeClientEntete();

		$obj->setCodeChantier("codeChantier");
		$this->assertEquals("codeChantier", $obj->getCodeChantier());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new CdeClientEntete();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeDevise() method.
	 *
	 * @return void
	 */
	public function testSetCodeDevise() {

		$obj = new CdeClientEntete();

		$obj->setCodeDevise("codeDevise");
		$this->assertEquals("codeDevise", $obj->getCodeDevise());
	}

	/**
	 * Tests the setCodeOfficielCommune() method.
	 *
	 * @return void
	 */
	public function testSetCodeOfficielCommune() {

		$obj = new CdeClientEntete();

		$obj->setCodeOfficielCommune("codeOfficielCommune");
		$this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
	}

	/**
	 * Tests the setCodeOfficielCommune2() method.
	 *
	 * @return void
	 */
	public function testSetCodeOfficielCommune2() {

		$obj = new CdeClientEntete();

		$obj->setCodeOfficielCommune2("codeOfficielCommune2");
		$this->assertEquals("codeOfficielCommune2", $obj->getCodeOfficielCommune2());
	}

	/**
	 * Tests the setCodePostal() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal() {

		$obj = new CdeClientEntete();

		$obj->setCodePostal("codePostal");
		$this->assertEquals("codePostal", $obj->getCodePostal());
	}

	/**
	 * Tests the setCodePostal2() method.
	 *
	 * @return void
	 */
	public function testSetCodePostal2() {

		$obj = new CdeClientEntete();

		$obj->setCodePostal2("codePostal2");
		$this->assertEquals("codePostal2", $obj->getCodePostal2());
	}

	/**
	 * Tests the setCodeReglement() method.
	 *
	 * @return void
	 */
	public function testSetCodeReglement() {

		$obj = new CdeClientEntete();

		$obj->setCodeReglement("codeReglement");
		$this->assertEquals("codeReglement", $obj->getCodeReglement());
	}

	/**
	 * Tests the setCodeRegroupement() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegroupement() {

		$obj = new CdeClientEntete();

		$obj->setCodeRegroupement("codeRegroupement");
		$this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
	}

	/**
	 * Tests the setCodeRepresentant() method.
	 *
	 * @return void
	 */
	public function testSetCodeRepresentant() {

		$obj = new CdeClientEntete();

		$obj->setCodeRepresentant("codeRepresentant");
		$this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
	}

	/**
	 * Tests the setCodeTVA() method.
	 *
	 * @return void
	 */
	public function testSetCodeTVA() {

		$obj = new CdeClientEntete();

		$obj->setCodeTVA("codeTVA");
		$this->assertEquals("codeTVA", $obj->getCodeTVA());
	}

	/**
	 * Tests the setCodeVentilCompta() method.
	 *
	 * @return void
	 */
	public function testSetCodeVentilCompta() {

		$obj = new CdeClientEntete();

		$obj->setCodeVentilCompta("codeVentilCompta");
		$this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
	}

	/**
	 * Tests the setComplement() method.
	 *
	 * @return void
	 */
	public function testSetComplement() {

		$obj = new CdeClientEntete();

		$obj->setComplement("complement");
		$this->assertEquals("complement", $obj->getComplement());
	}

	/**
	 * Tests the setComplement2() method.
	 *
	 * @return void
	 */
	public function testSetComplement2() {

		$obj = new CdeClientEntete();

		$obj->setComplement2("complement2");
		$this->assertEquals("complement2", $obj->getComplement2());
	}

	/**
	 * Tests the setDateCreation() method.
	 *
	 * @return void
	 */
	public function testSetDateCreation() {

		$obj = new CdeClientEntete();

		$obj->setDateCreation(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
	}

	/**
	 * Tests the setDateEcheance() method.
	 *
	 * @return void
	 */
	public function testSetDateEcheance() {

		$obj = new CdeClientEntete();

		$obj->setDateEcheance(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEcheance());
	}

	/**
	 * Tests the setDateModification() method.
	 *
	 * @return void
	 */
	public function testSetDateModification() {

		$obj = new CdeClientEntete();

		$obj->setDateModification(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
	}

	/**
	 * Tests the setDatePiece() method.
	 *
	 * @return void
	 */
	public function testSetDatePiece() {

		$obj = new CdeClientEntete();

		$obj->setDatePiece(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePiece());
	}

	/**
	 * Tests the setDateReceptionPrevue() method.
	 *
	 * @return void
	 */
	public function testSetDateReceptionPrevue() {

		$obj = new CdeClientEntete();

		$obj->setDateReceptionPrevue(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReceptionPrevue());
	}

	/**
	 * Tests the setEcheanceForcee() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceForcee() {

		$obj = new CdeClientEntete();

		$obj->setEcheanceForcee(true);
		$this->assertEquals(true, $obj->getEcheanceForcee());
	}

	/**
	 * Tests the setEdition() method.
	 *
	 * @return void
	 */
	public function testSetEdition() {

		$obj = new CdeClientEntete();

		$obj->setEdition(10);
		$this->assertEquals(10, $obj->getEdition());
	}

	/**
	 * Tests the setFactureEuros() method.
	 *
	 * @return void
	 */
	public function testSetFactureEuros() {

		$obj = new CdeClientEntete();

		$obj->setFactureEuros(true);
		$this->assertEquals(true, $obj->getFactureEuros());
	}

	/**
	 * Tests the setMontantAcompte() method.
	 *
	 * @return void
	 */
	public function testSetMontantAcompte() {

		$obj = new CdeClientEntete();

		$obj->setMontantAcompte(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantAcompte());
	}

	/**
	 * Tests the setNbColis() method.
	 *
	 * @return void
	 */
	public function testSetNbColis() {

		$obj = new CdeClientEntete();

		$obj->setNbColis(10);
		$this->assertEquals(10, $obj->getNbColis());
	}

	/**
	 * Tests the setNoPiece() method.
	 *
	 * @return void
	 */
	public function testSetNoPiece() {

		$obj = new CdeClientEntete();

		$obj->setNoPiece("noPiece");
		$this->assertEquals("noPiece", $obj->getNoPiece());
	}

	/**
	 * Tests the setNom() method.
	 *
	 * @return void
	 */
	public function testSetNom() {

		$obj = new CdeClientEntete();

		$obj->setNom("nom");
		$this->assertEquals("nom", $obj->getNom());
	}

	/**
	 * Tests the setNom2() method.
	 *
	 * @return void
	 */
	public function testSetNom2() {

		$obj = new CdeClientEntete();

		$obj->setNom2("nom2");
		$this->assertEquals("nom2", $obj->getNom2());
	}

	/**
	 * Tests the setNomSuite() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite() {

		$obj = new CdeClientEntete();

		$obj->setNomSuite("nomSuite");
		$this->assertEquals("nomSuite", $obj->getNomSuite());
	}

	/**
	 * Tests the setNomSuite2() method.
	 *
	 * @return void
	 */
	public function testSetNomSuite2() {

		$obj = new CdeClientEntete();

		$obj->setNomSuite2("nomSuite2");
		$this->assertEquals("nomSuite2", $obj->getNomSuite2());
	}

	/**
	 * Tests the setNomVille() method.
	 *
	 * @return void
	 */
	public function testSetNomVille() {

		$obj = new CdeClientEntete();

		$obj->setNomVille("nomVille");
		$this->assertEquals("nomVille", $obj->getNomVille());
	}

	/**
	 * Tests the setNomVille2() method.
	 *
	 * @return void
	 */
	public function testSetNomVille2() {

		$obj = new CdeClientEntete();

		$obj->setNomVille2("nomVille2");
		$this->assertEquals("nomVille2", $obj->getNomVille2());
	}

	/**
	 * Tests the setNomVoie() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie() {

		$obj = new CdeClientEntete();

		$obj->setNomVoie("nomVoie");
		$this->assertEquals("nomVoie", $obj->getNomVoie());
	}

	/**
	 * Tests the setNomVoie2() method.
	 *
	 * @return void
	 */
	public function testSetNomVoie2() {

		$obj = new CdeClientEntete();

		$obj->setNomVoie2("nomVoie2");
		$this->assertEquals("nomVoie2", $obj->getNomVoie2());
	}

	/**
	 * Tests the setNombreEcheances() method.
	 *
	 * @return void
	 */
	public function testSetNombreEcheances() {

		$obj = new CdeClientEntete();

		$obj->setNombreEcheances(10);
		$this->assertEquals(10, $obj->getNombreEcheances());
	}

	/**
	 * Tests the setNumVoie() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie() {

		$obj = new CdeClientEntete();

		$obj->setNumVoie("numVoie");
		$this->assertEquals("numVoie", $obj->getNumVoie());
	}

	/**
	 * Tests the setNumVoie2() method.
	 *
	 * @return void
	 */
	public function testSetNumVoie2() {

		$obj = new CdeClientEntete();

		$obj->setNumVoie2("numVoie2");
		$this->assertEquals("numVoie2", $obj->getNumVoie2());
	}

	/**
	 * Tests the setNumeroPJ() method.
	 *
	 * @return void
	 */
	public function testSetNumeroPJ() {

		$obj = new CdeClientEntete();

		$obj->setNumeroPJ(10);
		$this->assertEquals(10, $obj->getNumeroPJ());
	}

	/**
	 * Tests the setPaiementDepartLe() method.
	 *
	 * @return void
	 */
	public function testSetPaiementDepartLe() {

		$obj = new CdeClientEntete();

		$obj->setPaiementDepartLe(10);
		$this->assertEquals(10, $obj->getPaiementDepartLe());
	}

	/**
	 * Tests the setPaiementLe() method.
	 *
	 * @return void
	 */
	public function testSetPaiementLe() {

		$obj = new CdeClientEntete();

		$obj->setPaiementLe(10);
		$this->assertEquals(10, $obj->getPaiementLe());
	}

	/**
	 * Tests the setPaiementNombreDeJours() method.
	 *
	 * @return void
	 */
	public function testSetPaiementNombreDeJours() {

		$obj = new CdeClientEntete();

		$obj->setPaiementNombreDeJours(10);
		$this->assertEquals(10, $obj->getPaiementNombreDeJours());
	}

	/**
	 * Tests the setPoids() method.
	 *
	 * @return void
	 */
	public function testSetPoids() {

		$obj = new CdeClientEntete();

		$obj->setPoids(10.092018);
		$this->assertEquals(10.092018, $obj->getPoids());
	}

	/**
	 * Tests the setReference1() method.
	 *
	 * @return void
	 */
	public function testSetReference1() {

		$obj = new CdeClientEntete();

		$obj->setReference1("reference1");
		$this->assertEquals("reference1", $obj->getReference1());
	}

	/**
	 * Tests the setReference2() method.
	 *
	 * @return void
	 */
	public function testSetReference2() {

		$obj = new CdeClientEntete();

		$obj->setReference2("reference2");
		$this->assertEquals("reference2", $obj->getReference2());
	}

	/**
	 * Tests the setReference3() method.
	 *
	 * @return void
	 */
	public function testSetReference3() {

		$obj = new CdeClientEntete();

		$obj->setReference3("reference3");
		$this->assertEquals("reference3", $obj->getReference3());
	}

	/**
	 * Tests the setReference4() method.
	 *
	 * @return void
	 */
	public function testSetReference4() {

		$obj = new CdeClientEntete();

		$obj->setReference4("reference4");
		$this->assertEquals("reference4", $obj->getReference4());
	}

	/**
	 * Tests the setRemisePied() method.
	 *
	 * @return void
	 */
	public function testSetRemisePied() {

		$obj = new CdeClientEntete();

		$obj->setRemisePied(10.092018);
		$this->assertEquals(10.092018, $obj->getRemisePied());
	}

	/**
	 * Tests the setRemisePied2() method.
	 *
	 * @return void
	 */
	public function testSetRemisePied2() {

		$obj = new CdeClientEntete();

		$obj->setRemisePied2(10.092018);
		$this->assertEquals(10.092018, $obj->getRemisePied2());
	}

	/**
	 * Tests the setRemisePied3() method.
	 *
	 * @return void
	 */
	public function testSetRemisePied3() {

		$obj = new CdeClientEntete();

		$obj->setRemisePied3(10.092018);
		$this->assertEquals(10.092018, $obj->getRemisePied3());
	}

	/**
	 * Tests the setSaisirAdresse() method.
	 *
	 * @return void
	 */
	public function testSetSaisirAdresse() {

		$obj = new CdeClientEntete();

		$obj->setSaisirAdresse(true);
		$this->assertEquals(true, $obj->getSaisirAdresse());
	}

	/**
	 * Tests the setSaisirAdresseLivraison() method.
	 *
	 * @return void
	 */
	public function testSetSaisirAdresseLivraison() {

		$obj = new CdeClientEntete();

		$obj->setSaisirAdresseLivraison(true);
		$this->assertEquals(true, $obj->getSaisirAdresseLivraison());
	}

	/**
	 * Tests the setSoumisEscompte() method.
	 *
	 * @return void
	 */
	public function testSetSoumisEscompte() {

		$obj = new CdeClientEntete();

		$obj->setSoumisEscompte(true);
		$this->assertEquals(true, $obj->getSoumisEscompte());
	}

	/**
	 * Tests the setSoumisTaxe1() method.
	 *
	 * @return void
	 */
	public function testSetSoumisTaxe1() {

		$obj = new CdeClientEntete();

		$obj->setSoumisTaxe1(true);
		$this->assertEquals(true, $obj->getSoumisTaxe1());
	}

	/**
	 * Tests the setSoumisTaxe2() method.
	 *
	 * @return void
	 */
	public function testSetSoumisTaxe2() {

		$obj = new CdeClientEntete();

		$obj->setSoumisTaxe2(true);
		$this->assertEquals(true, $obj->getSoumisTaxe2());
	}

	/**
	 * Tests the setSoumisTaxe3() method.
	 *
	 * @return void
	 */
	public function testSetSoumisTaxe3() {

		$obj = new CdeClientEntete();

		$obj->setSoumisTaxe3(true);
		$this->assertEquals(true, $obj->getSoumisTaxe3());
	}

	/**
	 * Tests the setTauxCommission() method.
	 *
	 * @return void
	 */
	public function testSetTauxCommission() {

		$obj = new CdeClientEntete();

		$obj->setTauxCommission(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxCommission());
	}

	/**
	 * Tests the setTauxDevise() method.
	 *
	 * @return void
	 */
	public function testSetTauxDevise() {

		$obj = new CdeClientEntete();

		$obj->setTauxDevise(10.092018);
		$this->assertEquals(10.092018, $obj->getTauxDevise());
	}

	/**
	 * Tests the setTransfert() method.
	 *
	 * @return void
	 */
	public function testSetTransfert() {

		$obj = new CdeClientEntete();

		$obj->setTransfert(10);
		$this->assertEquals(10, $obj->getTransfert());
	}

	/**
	 * Tests the setTransporteur() method.
	 *
	 * @return void
	 */
	public function testSetTransporteur() {

		$obj = new CdeClientEntete();

		$obj->setTransporteur("transporteur");
		$this->assertEquals("transporteur", $obj->getTransporteur());
	}

	/**
	 * Tests the setTxEscompteVente() method.
	 *
	 * @return void
	 */
	public function testSetTxEscompteVente() {

		$obj = new CdeClientEntete();

		$obj->setTxEscompteVente(10.092018);
		$this->assertEquals(10.092018, $obj->getTxEscompteVente());
	}

}
