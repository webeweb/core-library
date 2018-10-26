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
use WBW\Library\Core\Quadratus\Model\QGI\Fiscal;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fiscal model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class FiscalTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Fiscal();

		$this->assertNull($obj->getAbattementCGA());
		$this->assertNull($obj->getAssuranceControle());
		$this->assertNull($obj->getCDAssiette());
		$this->assertNull($obj->getCDI());
		$this->assertNull($obj->getCGA());
		$this->assertNull($obj->getCodeCGA());
		$this->assertNull($obj->getCodeCentreImpot());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeImpotDirect());
		$this->assertNull($obj->getCodeRecetteImpots());
		$this->assertNull($obj->getCodeRegimeTVA());
		$this->assertNull($obj->getContactCGA());
		$this->assertNull($obj->getContactCentreImpots());
		$this->assertNull($obj->getContactRecetteImpots());
		$this->assertNull($obj->getDateAdhesionCGA());
		$this->assertNull($obj->getDateEffetAdhesionCGA());
		$this->assertNull($obj->getDateEffetRadiationCGA());
		$this->assertNull($obj->getDateRadiationCGA());
		$this->assertNull($obj->getDeclarationSur());
		$this->assertNull($obj->getDureeExercice());
		$this->assertNull($obj->getEdiTdfcBdF());
		$this->assertNull($obj->getFRPCle());
		$this->assertNull($obj->getFRPDossier());
		$this->assertNull($obj->getFRPRecette());
		$this->assertNull($obj->getIdImpotsGouvFr());
		$this->assertNull($obj->getImpot());
		$this->assertNull($obj->getInsp());
		$this->assertNull($obj->getJourDeclaration());
		$this->assertNull($obj->getMandatDateDebutDADS());
		$this->assertNull($obj->getMandatDateDebutDUCSEDI());
		$this->assertNull($obj->getMandatDateDebutEDITVA());
		$this->assertNull($obj->getMandatDateDebutETEBAC());
		$this->assertNull($obj->getMandatDateDebutPEDI());
		$this->assertNull($obj->getMandatDateDebutREQ());
		$this->assertNull($obj->getMandatDateDebutTDFC());
		$this->assertNull($obj->getMandatDureeDADS());
		$this->assertNull($obj->getMandatDureeDUCSEDI());
		$this->assertNull($obj->getMandatDureeEDITVA());
		$this->assertNull($obj->getMandatDureeETEBAC());
		$this->assertNull($obj->getMandatDureePEDI());
		$this->assertNull($obj->getMandatDureeREQ());
		$this->assertNull($obj->getMandatDureeTDFC());
		$this->assertNull($obj->getMandatPieceJointeDADS());
		$this->assertNull($obj->getMandatPieceJointeDUCSEDI());
		$this->assertNull($obj->getMandatPieceJointeEDITVA());
		$this->assertNull($obj->getMandatPieceJointeETEBAC());
		$this->assertNull($obj->getMandatPieceJointePEDI());
		$this->assertNull($obj->getMandatPieceJointeREQ());
		$this->assertNull($obj->getMandatPieceJointeTDFC());
		$this->assertNull($obj->getMandatSuiviDADS());
		$this->assertNull($obj->getMandatSuiviDUCSEDI());
		$this->assertNull($obj->getMandatSuiviEDITVA());
		$this->assertNull($obj->getMandatSuiviETEBAC());
		$this->assertNull($obj->getMandatSuiviPEDI());
		$this->assertNull($obj->getMandatSuiviREQ());
		$this->assertNull($obj->getMandatSuiviTDFC());
		$this->assertNull($obj->getMdpImpotsGouvFr());
		$this->assertNull($obj->getMethodeCalcul());
		$this->assertNull($obj->getMotifRadiationCGA());
		$this->assertNull($obj->getNumeroRegistre());
		$this->assertNull($obj->getPMECommunautaire());
		$this->assertNull($obj->getPeriodiciteTVA());
		$this->assertNull($obj->getPoleEnregistrement());
		$this->assertNull($obj->getRefObligFisc());
		$this->assertNull($obj->getRefPaiementDGI());
		$this->assertNull($obj->getRegime());
		$this->assertNull($obj->getRegimeAgricole());
		$this->assertNull($obj->getRegimeGroupe());
		$this->assertNull($obj->getRofCFE());
		$this->assertNull($obj->getRofCVAE());
		$this->assertNull($obj->getRofCVAEP());
		$this->assertNull($obj->getRofIS());
		$this->assertNull($obj->getRofRCM());
		$this->assertNull($obj->getRofTS());
		$this->assertNull($obj->getRofTVA());
		$this->assertNull($obj->getRofTdfcGroup());
		$this->assertNull($obj->getSocieteMere());
		$this->assertNull($obj->getTVAEtab_BTQ());
		$this->assertNull($obj->getTVAEtab_BureauDistributeur());
		$this->assertNull($obj->getTVAEtab_CodePostal());
		$this->assertNull($obj->getTVAEtab_Complement());
		$this->assertNull($obj->getTVAEtab_NomRS());
		$this->assertNull($obj->getTVAEtab_NomVoie());
		$this->assertNull($obj->getTVAEtab_NumVoie());
		$this->assertNull($obj->getTVANomVir());
		$this->assertNull($obj->getTVARIBVir());
		$this->assertNull($obj->getTresorerie());
		$this->assertNull($obj->getTresorerieIS());
		$this->assertNull($obj->getTvaCA12AE());
		$this->assertNull($obj->getTvaDecaissements());
		$this->assertNull($obj->getTvaFaiteParClient());
		$this->assertNull($obj->getViseurConventionne());
		$this->assertNull($obj->getViseurDtAttest());
		$this->assertNull($obj->getViseurNumAttest());
	}

	/**
	 * Tests the setAbattementCGA() method.
	 *
	 * @return void
	 */
	public function testSetAbattementCGA() {

		$obj = new Fiscal();

		$obj->setAbattementCGA(true);
		$this->assertEquals(true, $obj->getAbattementCGA());
	}

	/**
	 * Tests the setAssuranceControle() method.
	 *
	 * @return void
	 */
	public function testSetAssuranceControle() {

		$obj = new Fiscal();

		$obj->setAssuranceControle(true);
		$this->assertEquals(true, $obj->getAssuranceControle());
	}

	/**
	 * Tests the setCDAssiette() method.
	 *
	 * @return void
	 */
	public function testSetCDAssiette() {

		$obj = new Fiscal();

		$obj->setCDAssiette("cDAssiette");
		$this->assertEquals("cDAssiette", $obj->getCDAssiette());
	}

	/**
	 * Tests the setCDI() method.
	 *
	 * @return void
	 */
	public function testSetCDI() {

		$obj = new Fiscal();

		$obj->setCDI("cDI");
		$this->assertEquals("cDI", $obj->getCDI());
	}

	/**
	 * Tests the setCGA() method.
	 *
	 * @return void
	 */
	public function testSetCGA() {

		$obj = new Fiscal();

		$obj->setCGA(true);
		$this->assertEquals(true, $obj->getCGA());
	}

	/**
	 * Tests the setCodeCGA() method.
	 *
	 * @return void
	 */
	public function testSetCodeCGA() {

		$obj = new Fiscal();

		$obj->setCodeCGA("codeCGA");
		$this->assertEquals("codeCGA", $obj->getCodeCGA());
	}

	/**
	 * Tests the setCodeCentreImpot() method.
	 *
	 * @return void
	 */
	public function testSetCodeCentreImpot() {

		$obj = new Fiscal();

		$obj->setCodeCentreImpot("codeCentreImpot");
		$this->assertEquals("codeCentreImpot", $obj->getCodeCentreImpot());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Fiscal();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeImpotDirect() method.
	 *
	 * @return void
	 */
	public function testSetCodeImpotDirect() {

		$obj = new Fiscal();

		$obj->setCodeImpotDirect("codeImpotDirect");
		$this->assertEquals("codeImpotDirect", $obj->getCodeImpotDirect());
	}

	/**
	 * Tests the setCodeRecetteImpots() method.
	 *
	 * @return void
	 */
	public function testSetCodeRecetteImpots() {

		$obj = new Fiscal();

		$obj->setCodeRecetteImpots("codeRecetteImpots");
		$this->assertEquals("codeRecetteImpots", $obj->getCodeRecetteImpots());
	}

	/**
	 * Tests the setCodeRegimeTVA() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegimeTVA() {

		$obj = new Fiscal();

		$obj->setCodeRegimeTVA("codeRegimeTVA");
		$this->assertEquals("codeRegimeTVA", $obj->getCodeRegimeTVA());
	}

	/**
	 * Tests the setContactCGA() method.
	 *
	 * @return void
	 */
	public function testSetContactCGA() {

		$obj = new Fiscal();

		$obj->setContactCGA("contactCGA");
		$this->assertEquals("contactCGA", $obj->getContactCGA());
	}

	/**
	 * Tests the setContactCentreImpots() method.
	 *
	 * @return void
	 */
	public function testSetContactCentreImpots() {

		$obj = new Fiscal();

		$obj->setContactCentreImpots("contactCentreImpots");
		$this->assertEquals("contactCentreImpots", $obj->getContactCentreImpots());
	}

	/**
	 * Tests the setContactRecetteImpots() method.
	 *
	 * @return void
	 */
	public function testSetContactRecetteImpots() {

		$obj = new Fiscal();

		$obj->setContactRecetteImpots("contactRecetteImpots");
		$this->assertEquals("contactRecetteImpots", $obj->getContactRecetteImpots());
	}

	/**
	 * Tests the setDateAdhesionCGA() method.
	 *
	 * @return void
	 */
	public function testSetDateAdhesionCGA() {

		$obj = new Fiscal();

		$obj->setDateAdhesionCGA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAdhesionCGA());
	}

	/**
	 * Tests the setDateEffetAdhesionCGA() method.
	 *
	 * @return void
	 */
	public function testSetDateEffetAdhesionCGA() {

		$obj = new Fiscal();

		$obj->setDateEffetAdhesionCGA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEffetAdhesionCGA());
	}

	/**
	 * Tests the setDateEffetRadiationCGA() method.
	 *
	 * @return void
	 */
	public function testSetDateEffetRadiationCGA() {

		$obj = new Fiscal();

		$obj->setDateEffetRadiationCGA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEffetRadiationCGA());
	}

	/**
	 * Tests the setDateRadiationCGA() method.
	 *
	 * @return void
	 */
	public function testSetDateRadiationCGA() {

		$obj = new Fiscal();

		$obj->setDateRadiationCGA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRadiationCGA());
	}

	/**
	 * Tests the setDeclarationSur() method.
	 *
	 * @return void
	 */
	public function testSetDeclarationSur() {

		$obj = new Fiscal();

		$obj->setDeclarationSur("declarationSur");
		$this->assertEquals("declarationSur", $obj->getDeclarationSur());
	}

	/**
	 * Tests the setDureeExercice() method.
	 *
	 * @return void
	 */
	public function testSetDureeExercice() {

		$obj = new Fiscal();

		$obj->setDureeExercice("dureeExercice");
		$this->assertEquals("dureeExercice", $obj->getDureeExercice());
	}

	/**
	 * Tests the setEdiTdfcBdF() method.
	 *
	 * @return void
	 */
	public function testSetEdiTdfcBdF() {

		$obj = new Fiscal();

		$obj->setEdiTdfcBdF(true);
		$this->assertEquals(true, $obj->getEdiTdfcBdF());
	}

	/**
	 * Tests the setFRPCle() method.
	 *
	 * @return void
	 */
	public function testSetFRPCle() {

		$obj = new Fiscal();

		$obj->setFRPCle("fRPCle");
		$this->assertEquals("fRPCle", $obj->getFRPCle());
	}

	/**
	 * Tests the setFRPDossier() method.
	 *
	 * @return void
	 */
	public function testSetFRPDossier() {

		$obj = new Fiscal();

		$obj->setFRPDossier("fRPDossier");
		$this->assertEquals("fRPDossier", $obj->getFRPDossier());
	}

	/**
	 * Tests the setFRPRecette() method.
	 *
	 * @return void
	 */
	public function testSetFRPRecette() {

		$obj = new Fiscal();

		$obj->setFRPRecette("fRPRecette");
		$this->assertEquals("fRPRecette", $obj->getFRPRecette());
	}

	/**
	 * Tests the setIdImpotsGouvFr() method.
	 *
	 * @return void
	 */
	public function testSetIdImpotsGouvFr() {

		$obj = new Fiscal();

		$obj->setIdImpotsGouvFr("idImpotsGouvFr");
		$this->assertEquals("idImpotsGouvFr", $obj->getIdImpotsGouvFr());
	}

	/**
	 * Tests the setImpot() method.
	 *
	 * @return void
	 */
	public function testSetImpot() {

		$obj = new Fiscal();

		$obj->setImpot("impot");
		$this->assertEquals("impot", $obj->getImpot());
	}

	/**
	 * Tests the setInsp() method.
	 *
	 * @return void
	 */
	public function testSetInsp() {

		$obj = new Fiscal();

		$obj->setInsp("insp");
		$this->assertEquals("insp", $obj->getInsp());
	}

	/**
	 * Tests the setJourDeclaration() method.
	 *
	 * @return void
	 */
	public function testSetJourDeclaration() {

		$obj = new Fiscal();

		$obj->setJourDeclaration("jourDeclaration");
		$this->assertEquals("jourDeclaration", $obj->getJourDeclaration());
	}

	/**
	 * Tests the setMandatDateDebutDADS() method.
	 *
	 * @return void
	 */
	public function testSetMandatDateDebutDADS() {

		$obj = new Fiscal();

		$obj->setMandatDateDebutDADS(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutDADS());
	}

	/**
	 * Tests the setMandatDateDebutDUCSEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatDateDebutDUCSEDI() {

		$obj = new Fiscal();

		$obj->setMandatDateDebutDUCSEDI(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutDUCSEDI());
	}

	/**
	 * Tests the setMandatDateDebutEDITVA() method.
	 *
	 * @return void
	 */
	public function testSetMandatDateDebutEDITVA() {

		$obj = new Fiscal();

		$obj->setMandatDateDebutEDITVA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutEDITVA());
	}

	/**
	 * Tests the setMandatDateDebutETEBAC() method.
	 *
	 * @return void
	 */
	public function testSetMandatDateDebutETEBAC() {

		$obj = new Fiscal();

		$obj->setMandatDateDebutETEBAC(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutETEBAC());
	}

	/**
	 * Tests the setMandatDateDebutPEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatDateDebutPEDI() {

		$obj = new Fiscal();

		$obj->setMandatDateDebutPEDI(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutPEDI());
	}

	/**
	 * Tests the setMandatDateDebutREQ() method.
	 *
	 * @return void
	 */
	public function testSetMandatDateDebutREQ() {

		$obj = new Fiscal();

		$obj->setMandatDateDebutREQ(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutREQ());
	}

	/**
	 * Tests the setMandatDateDebutTDFC() method.
	 *
	 * @return void
	 */
	public function testSetMandatDateDebutTDFC() {

		$obj = new Fiscal();

		$obj->setMandatDateDebutTDFC(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getMandatDateDebutTDFC());
	}

	/**
	 * Tests the setMandatDureeDADS() method.
	 *
	 * @return void
	 */
	public function testSetMandatDureeDADS() {

		$obj = new Fiscal();

		$obj->setMandatDureeDADS(10);
		$this->assertEquals(10, $obj->getMandatDureeDADS());
	}

	/**
	 * Tests the setMandatDureeDUCSEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatDureeDUCSEDI() {

		$obj = new Fiscal();

		$obj->setMandatDureeDUCSEDI(10);
		$this->assertEquals(10, $obj->getMandatDureeDUCSEDI());
	}

	/**
	 * Tests the setMandatDureeEDITVA() method.
	 *
	 * @return void
	 */
	public function testSetMandatDureeEDITVA() {

		$obj = new Fiscal();

		$obj->setMandatDureeEDITVA(10);
		$this->assertEquals(10, $obj->getMandatDureeEDITVA());
	}

	/**
	 * Tests the setMandatDureeETEBAC() method.
	 *
	 * @return void
	 */
	public function testSetMandatDureeETEBAC() {

		$obj = new Fiscal();

		$obj->setMandatDureeETEBAC(10);
		$this->assertEquals(10, $obj->getMandatDureeETEBAC());
	}

	/**
	 * Tests the setMandatDureePEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatDureePEDI() {

		$obj = new Fiscal();

		$obj->setMandatDureePEDI(10);
		$this->assertEquals(10, $obj->getMandatDureePEDI());
	}

	/**
	 * Tests the setMandatDureeREQ() method.
	 *
	 * @return void
	 */
	public function testSetMandatDureeREQ() {

		$obj = new Fiscal();

		$obj->setMandatDureeREQ(10);
		$this->assertEquals(10, $obj->getMandatDureeREQ());
	}

	/**
	 * Tests the setMandatDureeTDFC() method.
	 *
	 * @return void
	 */
	public function testSetMandatDureeTDFC() {

		$obj = new Fiscal();

		$obj->setMandatDureeTDFC(10);
		$this->assertEquals(10, $obj->getMandatDureeTDFC());
	}

	/**
	 * Tests the setMandatPieceJointeDADS() method.
	 *
	 * @return void
	 */
	public function testSetMandatPieceJointeDADS() {

		$obj = new Fiscal();

		$obj->setMandatPieceJointeDADS("mandatPieceJointeDADS");
		$this->assertEquals("mandatPieceJointeDADS", $obj->getMandatPieceJointeDADS());
	}

	/**
	 * Tests the setMandatPieceJointeDUCSEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatPieceJointeDUCSEDI() {

		$obj = new Fiscal();

		$obj->setMandatPieceJointeDUCSEDI("mandatPieceJointeDUCSEDI");
		$this->assertEquals("mandatPieceJointeDUCSEDI", $obj->getMandatPieceJointeDUCSEDI());
	}

	/**
	 * Tests the setMandatPieceJointeEDITVA() method.
	 *
	 * @return void
	 */
	public function testSetMandatPieceJointeEDITVA() {

		$obj = new Fiscal();

		$obj->setMandatPieceJointeEDITVA("mandatPieceJointeEDITVA");
		$this->assertEquals("mandatPieceJointeEDITVA", $obj->getMandatPieceJointeEDITVA());
	}

	/**
	 * Tests the setMandatPieceJointeETEBAC() method.
	 *
	 * @return void
	 */
	public function testSetMandatPieceJointeETEBAC() {

		$obj = new Fiscal();

		$obj->setMandatPieceJointeETEBAC("mandatPieceJointeETEBAC");
		$this->assertEquals("mandatPieceJointeETEBAC", $obj->getMandatPieceJointeETEBAC());
	}

	/**
	 * Tests the setMandatPieceJointePEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatPieceJointePEDI() {

		$obj = new Fiscal();

		$obj->setMandatPieceJointePEDI("mandatPieceJointePEDI");
		$this->assertEquals("mandatPieceJointePEDI", $obj->getMandatPieceJointePEDI());
	}

	/**
	 * Tests the setMandatPieceJointeREQ() method.
	 *
	 * @return void
	 */
	public function testSetMandatPieceJointeREQ() {

		$obj = new Fiscal();

		$obj->setMandatPieceJointeREQ("mandatPieceJointeREQ");
		$this->assertEquals("mandatPieceJointeREQ", $obj->getMandatPieceJointeREQ());
	}

	/**
	 * Tests the setMandatPieceJointeTDFC() method.
	 *
	 * @return void
	 */
	public function testSetMandatPieceJointeTDFC() {

		$obj = new Fiscal();

		$obj->setMandatPieceJointeTDFC("mandatPieceJointeTDFC");
		$this->assertEquals("mandatPieceJointeTDFC", $obj->getMandatPieceJointeTDFC());
	}

	/**
	 * Tests the setMandatSuiviDADS() method.
	 *
	 * @return void
	 */
	public function testSetMandatSuiviDADS() {

		$obj = new Fiscal();

		$obj->setMandatSuiviDADS(true);
		$this->assertEquals(true, $obj->getMandatSuiviDADS());
	}

	/**
	 * Tests the setMandatSuiviDUCSEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatSuiviDUCSEDI() {

		$obj = new Fiscal();

		$obj->setMandatSuiviDUCSEDI(true);
		$this->assertEquals(true, $obj->getMandatSuiviDUCSEDI());
	}

	/**
	 * Tests the setMandatSuiviEDITVA() method.
	 *
	 * @return void
	 */
	public function testSetMandatSuiviEDITVA() {

		$obj = new Fiscal();

		$obj->setMandatSuiviEDITVA(true);
		$this->assertEquals(true, $obj->getMandatSuiviEDITVA());
	}

	/**
	 * Tests the setMandatSuiviETEBAC() method.
	 *
	 * @return void
	 */
	public function testSetMandatSuiviETEBAC() {

		$obj = new Fiscal();

		$obj->setMandatSuiviETEBAC(true);
		$this->assertEquals(true, $obj->getMandatSuiviETEBAC());
	}

	/**
	 * Tests the setMandatSuiviPEDI() method.
	 *
	 * @return void
	 */
	public function testSetMandatSuiviPEDI() {

		$obj = new Fiscal();

		$obj->setMandatSuiviPEDI(true);
		$this->assertEquals(true, $obj->getMandatSuiviPEDI());
	}

	/**
	 * Tests the setMandatSuiviREQ() method.
	 *
	 * @return void
	 */
	public function testSetMandatSuiviREQ() {

		$obj = new Fiscal();

		$obj->setMandatSuiviREQ(true);
		$this->assertEquals(true, $obj->getMandatSuiviREQ());
	}

	/**
	 * Tests the setMandatSuiviTDFC() method.
	 *
	 * @return void
	 */
	public function testSetMandatSuiviTDFC() {

		$obj = new Fiscal();

		$obj->setMandatSuiviTDFC(true);
		$this->assertEquals(true, $obj->getMandatSuiviTDFC());
	}

	/**
	 * Tests the setMdpImpotsGouvFr() method.
	 *
	 * @return void
	 */
	public function testSetMdpImpotsGouvFr() {

		$obj = new Fiscal();

		$obj->setMdpImpotsGouvFr("mdpImpotsGouvFr");
		$this->assertEquals("mdpImpotsGouvFr", $obj->getMdpImpotsGouvFr());
	}

	/**
	 * Tests the setMethodeCalcul() method.
	 *
	 * @return void
	 */
	public function testSetMethodeCalcul() {

		$obj = new Fiscal();

		$obj->setMethodeCalcul("methodeCalcul");
		$this->assertEquals("methodeCalcul", $obj->getMethodeCalcul());
	}

	/**
	 * Tests the setMotifRadiationCGA() method.
	 *
	 * @return void
	 */
	public function testSetMotifRadiationCGA() {

		$obj = new Fiscal();

		$obj->setMotifRadiationCGA("motifRadiationCGA");
		$this->assertEquals("motifRadiationCGA", $obj->getMotifRadiationCGA());
	}

	/**
	 * Tests the setNumeroRegistre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroRegistre() {

		$obj = new Fiscal();

		$obj->setNumeroRegistre("numeroRegistre");
		$this->assertEquals("numeroRegistre", $obj->getNumeroRegistre());
	}

	/**
	 * Tests the setPMECommunautaire() method.
	 *
	 * @return void
	 */
	public function testSetPMECommunautaire() {

		$obj = new Fiscal();

		$obj->setPMECommunautaire(true);
		$this->assertEquals(true, $obj->getPMECommunautaire());
	}

	/**
	 * Tests the setPeriodiciteTVA() method.
	 *
	 * @return void
	 */
	public function testSetPeriodiciteTVA() {

		$obj = new Fiscal();

		$obj->setPeriodiciteTVA("periodiciteTVA");
		$this->assertEquals("periodiciteTVA", $obj->getPeriodiciteTVA());
	}

	/**
	 * Tests the setPoleEnregistrement() method.
	 *
	 * @return void
	 */
	public function testSetPoleEnregistrement() {

		$obj = new Fiscal();

		$obj->setPoleEnregistrement("poleEnregistrement");
		$this->assertEquals("poleEnregistrement", $obj->getPoleEnregistrement());
	}

	/**
	 * Tests the setRefObligFisc() method.
	 *
	 * @return void
	 */
	public function testSetRefObligFisc() {

		$obj = new Fiscal();

		$obj->setRefObligFisc("refObligFisc");
		$this->assertEquals("refObligFisc", $obj->getRefObligFisc());
	}

	/**
	 * Tests the setRefPaiementDGI() method.
	 *
	 * @return void
	 */
	public function testSetRefPaiementDGI() {

		$obj = new Fiscal();

		$obj->setRefPaiementDGI("refPaiementDGI");
		$this->assertEquals("refPaiementDGI", $obj->getRefPaiementDGI());
	}

	/**
	 * Tests the setRegime() method.
	 *
	 * @return void
	 */
	public function testSetRegime() {

		$obj = new Fiscal();

		$obj->setRegime("regime");
		$this->assertEquals("regime", $obj->getRegime());
	}

	/**
	 * Tests the setRegimeAgricole() method.
	 *
	 * @return void
	 */
	public function testSetRegimeAgricole() {

		$obj = new Fiscal();

		$obj->setRegimeAgricole(true);
		$this->assertEquals(true, $obj->getRegimeAgricole());
	}

	/**
	 * Tests the setRegimeGroupe() method.
	 *
	 * @return void
	 */
	public function testSetRegimeGroupe() {

		$obj = new Fiscal();

		$obj->setRegimeGroupe(true);
		$this->assertEquals(true, $obj->getRegimeGroupe());
	}

	/**
	 * Tests the setRofCFE() method.
	 *
	 * @return void
	 */
	public function testSetRofCFE() {

		$obj = new Fiscal();

		$obj->setRofCFE("rofCFE");
		$this->assertEquals("rofCFE", $obj->getRofCFE());
	}

	/**
	 * Tests the setRofCVAE() method.
	 *
	 * @return void
	 */
	public function testSetRofCVAE() {

		$obj = new Fiscal();

		$obj->setRofCVAE("rofCVAE");
		$this->assertEquals("rofCVAE", $obj->getRofCVAE());
	}

	/**
	 * Tests the setRofCVAEP() method.
	 *
	 * @return void
	 */
	public function testSetRofCVAEP() {

		$obj = new Fiscal();

		$obj->setRofCVAEP("rofCVAEP");
		$this->assertEquals("rofCVAEP", $obj->getRofCVAEP());
	}

	/**
	 * Tests the setRofIS() method.
	 *
	 * @return void
	 */
	public function testSetRofIS() {

		$obj = new Fiscal();

		$obj->setRofIS("rofIS");
		$this->assertEquals("rofIS", $obj->getRofIS());
	}

	/**
	 * Tests the setRofRCM() method.
	 *
	 * @return void
	 */
	public function testSetRofRCM() {

		$obj = new Fiscal();

		$obj->setRofRCM("rofRCM");
		$this->assertEquals("rofRCM", $obj->getRofRCM());
	}

	/**
	 * Tests the setRofTS() method.
	 *
	 * @return void
	 */
	public function testSetRofTS() {

		$obj = new Fiscal();

		$obj->setRofTS("rofTS");
		$this->assertEquals("rofTS", $obj->getRofTS());
	}

	/**
	 * Tests the setRofTVA() method.
	 *
	 * @return void
	 */
	public function testSetRofTVA() {

		$obj = new Fiscal();

		$obj->setRofTVA("rofTVA");
		$this->assertEquals("rofTVA", $obj->getRofTVA());
	}

	/**
	 * Tests the setRofTdfcGroup() method.
	 *
	 * @return void
	 */
	public function testSetRofTdfcGroup() {

		$obj = new Fiscal();

		$obj->setRofTdfcGroup("rofTdfcGroup");
		$this->assertEquals("rofTdfcGroup", $obj->getRofTdfcGroup());
	}

	/**
	 * Tests the setSocieteMere() method.
	 *
	 * @return void
	 */
	public function testSetSocieteMere() {

		$obj = new Fiscal();

		$obj->setSocieteMere(true);
		$this->assertEquals(true, $obj->getSocieteMere());
	}

	/**
	 * Tests the setTVAEtab_BTQ() method.
	 *
	 * @return void
	 */
	public function testSetTVAEtab_BTQ() {

		$obj = new Fiscal();

		$obj->setTVAEtab_BTQ("tVAEtab_BTQ");
		$this->assertEquals("tVAEtab_BTQ", $obj->getTVAEtab_BTQ());
	}

	/**
	 * Tests the setTVAEtab_BureauDistributeur() method.
	 *
	 * @return void
	 */
	public function testSetTVAEtab_BureauDistributeur() {

		$obj = new Fiscal();

		$obj->setTVAEtab_BureauDistributeur("tVAEtab_BureauDistributeur");
		$this->assertEquals("tVAEtab_BureauDistributeur", $obj->getTVAEtab_BureauDistributeur());
	}

	/**
	 * Tests the setTVAEtab_CodePostal() method.
	 *
	 * @return void
	 */
	public function testSetTVAEtab_CodePostal() {

		$obj = new Fiscal();

		$obj->setTVAEtab_CodePostal("tVAEtab_CodePostal");
		$this->assertEquals("tVAEtab_CodePostal", $obj->getTVAEtab_CodePostal());
	}

	/**
	 * Tests the setTVAEtab_Complement() method.
	 *
	 * @return void
	 */
	public function testSetTVAEtab_Complement() {

		$obj = new Fiscal();

		$obj->setTVAEtab_Complement("tVAEtab_Complement");
		$this->assertEquals("tVAEtab_Complement", $obj->getTVAEtab_Complement());
	}

	/**
	 * Tests the setTVAEtab_NomRS() method.
	 *
	 * @return void
	 */
	public function testSetTVAEtab_NomRS() {

		$obj = new Fiscal();

		$obj->setTVAEtab_NomRS("tVAEtab_NomRS");
		$this->assertEquals("tVAEtab_NomRS", $obj->getTVAEtab_NomRS());
	}

	/**
	 * Tests the setTVAEtab_NomVoie() method.
	 *
	 * @return void
	 */
	public function testSetTVAEtab_NomVoie() {

		$obj = new Fiscal();

		$obj->setTVAEtab_NomVoie("tVAEtab_NomVoie");
		$this->assertEquals("tVAEtab_NomVoie", $obj->getTVAEtab_NomVoie());
	}

	/**
	 * Tests the setTVAEtab_NumVoie() method.
	 *
	 * @return void
	 */
	public function testSetTVAEtab_NumVoie() {

		$obj = new Fiscal();

		$obj->setTVAEtab_NumVoie("tVAEtab_NumVoie");
		$this->assertEquals("tVAEtab_NumVoie", $obj->getTVAEtab_NumVoie());
	}

	/**
	 * Tests the setTVANomVir() method.
	 *
	 * @return void
	 */
	public function testSetTVANomVir() {

		$obj = new Fiscal();

		$obj->setTVANomVir("tVANomVir");
		$this->assertEquals("tVANomVir", $obj->getTVANomVir());
	}

	/**
	 * Tests the setTVARIBVir() method.
	 *
	 * @return void
	 */
	public function testSetTVARIBVir() {

		$obj = new Fiscal();

		$obj->setTVARIBVir("tVARIBVir");
		$this->assertEquals("tVARIBVir", $obj->getTVARIBVir());
	}

	/**
	 * Tests the setTresorerie() method.
	 *
	 * @return void
	 */
	public function testSetTresorerie() {

		$obj = new Fiscal();

		$obj->setTresorerie("tresorerie");
		$this->assertEquals("tresorerie", $obj->getTresorerie());
	}

	/**
	 * Tests the setTresorerieIS() method.
	 *
	 * @return void
	 */
	public function testSetTresorerieIS() {

		$obj = new Fiscal();

		$obj->setTresorerieIS("tresorerieIS");
		$this->assertEquals("tresorerieIS", $obj->getTresorerieIS());
	}

	/**
	 * Tests the setTvaCA12AE() method.
	 *
	 * @return void
	 */
	public function testSetTvaCA12AE() {

		$obj = new Fiscal();

		$obj->setTvaCA12AE("tvaCA12AE");
		$this->assertEquals("tvaCA12AE", $obj->getTvaCA12AE());
	}

	/**
	 * Tests the setTvaDecaissements() method.
	 *
	 * @return void
	 */
	public function testSetTvaDecaissements() {

		$obj = new Fiscal();

		$obj->setTvaDecaissements(true);
		$this->assertEquals(true, $obj->getTvaDecaissements());
	}

	/**
	 * Tests the setTvaFaiteParClient() method.
	 *
	 * @return void
	 */
	public function testSetTvaFaiteParClient() {

		$obj = new Fiscal();

		$obj->setTvaFaiteParClient(true);
		$this->assertEquals(true, $obj->getTvaFaiteParClient());
	}

	/**
	 * Tests the setViseurConventionne() method.
	 *
	 * @return void
	 */
	public function testSetViseurConventionne() {

		$obj = new Fiscal();

		$obj->setViseurConventionne(true);
		$this->assertEquals(true, $obj->getViseurConventionne());
	}

	/**
	 * Tests the setViseurDtAttest() method.
	 *
	 * @return void
	 */
	public function testSetViseurDtAttest() {

		$obj = new Fiscal();

		$obj->setViseurDtAttest(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getViseurDtAttest());
	}

	/**
	 * Tests the setViseurNumAttest() method.
	 *
	 * @return void
	 */
	public function testSetViseurNumAttest() {

		$obj = new Fiscal();

		$obj->setViseurNumAttest("viseurNumAttest");
		$this->assertEquals("viseurNumAttest", $obj->getViseurNumAttest());
	}

}
