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
use WBW\Library\Core\Quadratus\Model\QGI\Clients2;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Clients2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class Clients2Test extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Clients2();

		$this->assertNull($obj->getAllotissement());
		$this->assertNull($obj->getBLMail());
		$this->assertNull($obj->getCdesMail());
		$this->assertNull($obj->getCodeActiviteCGA());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeTransporteur1());
		$this->assertNull($obj->getCodeTransporteur2());
		$this->assertNull($obj->getCodeTransporteur3());
		$this->assertNull($obj->getCodeTransporteur4());
		$this->assertNull($obj->getCodeTransporteur5());
		$this->assertNull($obj->getDateDebExePublication());
		$this->assertNull($obj->getDelaiLivraison());
		$this->assertNull($obj->getDevisMail());
		$this->assertNull($obj->getEANClient());
		$this->assertNull($obj->getEANFacturePapier());
		$this->assertNull($obj->getEANPlateforme());
		$this->assertNull($obj->getEDI_Export_BL());
		$this->assertNull($obj->getEDI_Export_Fac());
		$this->assertNull($obj->getEcheanceFinDecade());
		$this->assertNull($obj->getEcheanceFinQuinzaine());
		$this->assertNull($obj->getFact_ComplementSuite());
		$this->assertNull($obj->getFact_ZipCode());
		$this->assertNull($obj->getIndMailPublication());
		$this->assertNull($obj->getIndiceBLMail());
		$this->assertNull($obj->getIndiceCdesMail());
		$this->assertNull($obj->getIndiceDevisMail());
		$this->assertNull($obj->getIndiceRelevesMail());
		$this->assertNull($obj->getLettreDeMission_DateSignature());
		$this->assertNull($obj->getModeleFactureManuelleSpe());
		$this->assertNull($obj->getMontantDepassementAutorise());
		$this->assertNull($obj->getMotifEntree());
		$this->assertNull($obj->getMotifSortie());
		$this->assertNull($obj->getMtTransport1());
		$this->assertNull($obj->getMtTransport2());
		$this->assertNull($obj->getMtTransport3());
		$this->assertNull($obj->getMtTransport4());
		$this->assertNull($obj->getMtTransport5());
		$this->assertNull($obj->getNonConcerneIS());
		$this->assertNull($obj->getNonConcerneTP());
		$this->assertNull($obj->getNonFacturable());
		$this->assertNull($obj->getPMETarifOuRemSpe());
		$this->assertNull($obj->getPrevenirMailPublier());
		$this->assertNull($obj->getRelevesMail());
		$this->assertNull($obj->getSocial_ComplementSuite());
		$this->assertNull($obj->getSocial_ZipCode());
		$this->assertNull($obj->getTRSArtPied());
		$this->assertNull($obj->getTRSArtPied2());
		$this->assertNull($obj->getTRSCategMarch());
		$this->assertNull($obj->getTRSCentreAna());
		$this->assertNull($obj->getTRSCodeTarif1());
		$this->assertNull($obj->getTRSCodeTarif1Sens());
		$this->assertNull($obj->getTRSCodeTarif2());
		$this->assertNull($obj->getTRSCodeTarif2Sens());
		$this->assertNull($obj->getTRSCodeTarif3());
		$this->assertNull($obj->getTRSCodeTarif3Sens());
		$this->assertNull($obj->getTRSCodeTarif4());
		$this->assertNull($obj->getTRSCodeTarif4Sens());
		$this->assertNull($obj->getTRSCodeTarif5());
		$this->assertNull($obj->getTRSCodeTarif5Sens());
		$this->assertNull($obj->getTRSCodeTarif6());
		$this->assertNull($obj->getTRSCodeTarif6Sens());
		$this->assertNull($obj->getTRSCodeTarifDef());
		$this->assertNull($obj->getTRSComment1());
		$this->assertNull($obj->getTRSComment2());
		$this->assertNull($obj->getTRSComment3());
		$this->assertNull($obj->getTRSComment4());
		$this->assertNull($obj->getTRSComment5());
		$this->assertNull($obj->getTRSComment6());
		$this->assertNull($obj->getTRSComment7());
		$this->assertNull($obj->getTRSComment8());
		$this->assertNull($obj->getTRSComment9());
		$this->assertNull($obj->getTRSConsignes1());
		$this->assertNull($obj->getTRSConsignes2());
		$this->assertNull($obj->getTRSConsignes3());
		$this->assertNull($obj->getTRSGestionPalettes());
		$this->assertNull($obj->getTRSMarchandiseSensible());
		$this->assertNull($obj->getTRSModeleFactureSpe());
		$this->assertNull($obj->getTRSPoidsMiniPal());
		$this->assertNull($obj->getTRSPortDuAuto());
		$this->assertNull($obj->getTRSSuiviCAMens());
		$this->assertNull($obj->getTRSSuiviDtEnl());
		$this->assertNull($obj->getTRSSuiviDtLiv());
		$this->assertNull($obj->getTRSSuiviDtLivFax());
		$this->assertNull($obj->getTRSSuiviDtLivMail());
		$this->assertNull($obj->getTRSTypeClient());
		$this->assertNull($obj->getTRSTypeFacturation());
		$this->assertNull($obj->getTRSTypeTravail());
		$this->assertNull($obj->getTypeTransport1());
		$this->assertNull($obj->getTypeTransport2());
		$this->assertNull($obj->getTypeTransport3());
		$this->assertNull($obj->getTypeTransport4());
		$this->assertNull($obj->getTypeTransport5());
		$this->assertNull($obj->getlocalisationArchives());
	}

	/**
	 * Tests the setAllotissement() method.
	 *
	 * @return void
	 */
	public function testSetAllotissement() {

		$obj = new Clients2();

		$obj->setAllotissement(true);
		$this->assertEquals(true, $obj->getAllotissement());
	}

	/**
	 * Tests the setBLMail() method.
	 *
	 * @return void
	 */
	public function testSetBLMail() {

		$obj = new Clients2();

		$obj->setBLMail(true);
		$this->assertEquals(true, $obj->getBLMail());
	}

	/**
	 * Tests the setCdesMail() method.
	 *
	 * @return void
	 */
	public function testSetCdesMail() {

		$obj = new Clients2();

		$obj->setCdesMail(true);
		$this->assertEquals(true, $obj->getCdesMail());
	}

	/**
	 * Tests the setCodeActiviteCGA() method.
	 *
	 * @return void
	 */
	public function testSetCodeActiviteCGA() {

		$obj = new Clients2();

		$obj->setCodeActiviteCGA("codeActiviteCGA");
		$this->assertEquals("codeActiviteCGA", $obj->getCodeActiviteCGA());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Clients2();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeTransporteur1() method.
	 *
	 * @return void
	 */
	public function testSetCodeTransporteur1() {

		$obj = new Clients2();

		$obj->setCodeTransporteur1("codeTransporteur1");
		$this->assertEquals("codeTransporteur1", $obj->getCodeTransporteur1());
	}

	/**
	 * Tests the setCodeTransporteur2() method.
	 *
	 * @return void
	 */
	public function testSetCodeTransporteur2() {

		$obj = new Clients2();

		$obj->setCodeTransporteur2("codeTransporteur2");
		$this->assertEquals("codeTransporteur2", $obj->getCodeTransporteur2());
	}

	/**
	 * Tests the setCodeTransporteur3() method.
	 *
	 * @return void
	 */
	public function testSetCodeTransporteur3() {

		$obj = new Clients2();

		$obj->setCodeTransporteur3("codeTransporteur3");
		$this->assertEquals("codeTransporteur3", $obj->getCodeTransporteur3());
	}

	/**
	 * Tests the setCodeTransporteur4() method.
	 *
	 * @return void
	 */
	public function testSetCodeTransporteur4() {

		$obj = new Clients2();

		$obj->setCodeTransporteur4("codeTransporteur4");
		$this->assertEquals("codeTransporteur4", $obj->getCodeTransporteur4());
	}

	/**
	 * Tests the setCodeTransporteur5() method.
	 *
	 * @return void
	 */
	public function testSetCodeTransporteur5() {

		$obj = new Clients2();

		$obj->setCodeTransporteur5("codeTransporteur5");
		$this->assertEquals("codeTransporteur5", $obj->getCodeTransporteur5());
	}

	/**
	 * Tests the setDateDebExePublication() method.
	 *
	 * @return void
	 */
	public function testSetDateDebExePublication() {

		$obj = new Clients2();

		$obj->setDateDebExePublication(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebExePublication());
	}

	/**
	 * Tests the setDelaiLivraison() method.
	 *
	 * @return void
	 */
	public function testSetDelaiLivraison() {

		$obj = new Clients2();

		$obj->setDelaiLivraison(10);
		$this->assertEquals(10, $obj->getDelaiLivraison());
	}

	/**
	 * Tests the setDevisMail() method.
	 *
	 * @return void
	 */
	public function testSetDevisMail() {

		$obj = new Clients2();

		$obj->setDevisMail(true);
		$this->assertEquals(true, $obj->getDevisMail());
	}

	/**
	 * Tests the setEANClient() method.
	 *
	 * @return void
	 */
	public function testSetEANClient() {

		$obj = new Clients2();

		$obj->setEANClient("eANClient");
		$this->assertEquals("eANClient", $obj->getEANClient());
	}

	/**
	 * Tests the setEANFacturePapier() method.
	 *
	 * @return void
	 */
	public function testSetEANFacturePapier() {

		$obj = new Clients2();

		$obj->setEANFacturePapier("eANFacturePapier");
		$this->assertEquals("eANFacturePapier", $obj->getEANFacturePapier());
	}

	/**
	 * Tests the setEANPlateforme() method.
	 *
	 * @return void
	 */
	public function testSetEANPlateforme() {

		$obj = new Clients2();

		$obj->setEANPlateforme("eANPlateforme");
		$this->assertEquals("eANPlateforme", $obj->getEANPlateforme());
	}

	/**
	 * Tests the setEDI_Export_BL() method.
	 *
	 * @return void
	 */
	public function testSetEDI_Export_BL() {

		$obj = new Clients2();

		$obj->setEDI_Export_BL(true);
		$this->assertEquals(true, $obj->getEDI_Export_BL());
	}

	/**
	 * Tests the setEDI_Export_Fac() method.
	 *
	 * @return void
	 */
	public function testSetEDI_Export_Fac() {

		$obj = new Clients2();

		$obj->setEDI_Export_Fac(true);
		$this->assertEquals(true, $obj->getEDI_Export_Fac());
	}

	/**
	 * Tests the setEcheanceFinDecade() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceFinDecade() {

		$obj = new Clients2();

		$obj->setEcheanceFinDecade(true);
		$this->assertEquals(true, $obj->getEcheanceFinDecade());
	}

	/**
	 * Tests the setEcheanceFinQuinzaine() method.
	 *
	 * @return void
	 */
	public function testSetEcheanceFinQuinzaine() {

		$obj = new Clients2();

		$obj->setEcheanceFinQuinzaine(true);
		$this->assertEquals(true, $obj->getEcheanceFinQuinzaine());
	}

	/**
	 * Tests the setFact_ComplementSuite() method.
	 *
	 * @return void
	 */
	public function testSetFact_ComplementSuite() {

		$obj = new Clients2();

		$obj->setFact_ComplementSuite("fact_ComplementSuite");
		$this->assertEquals("fact_ComplementSuite", $obj->getFact_ComplementSuite());
	}

	/**
	 * Tests the setFact_ZipCode() method.
	 *
	 * @return void
	 */
	public function testSetFact_ZipCode() {

		$obj = new Clients2();

		$obj->setFact_ZipCode("fact_ZipCode");
		$this->assertEquals("fact_ZipCode", $obj->getFact_ZipCode());
	}

	/**
	 * Tests the setIndMailPublication() method.
	 *
	 * @return void
	 */
	public function testSetIndMailPublication() {

		$obj = new Clients2();

		$obj->setIndMailPublication(10);
		$this->assertEquals(10, $obj->getIndMailPublication());
	}

	/**
	 * Tests the setIndiceBLMail() method.
	 *
	 * @return void
	 */
	public function testSetIndiceBLMail() {

		$obj = new Clients2();

		$obj->setIndiceBLMail(10);
		$this->assertEquals(10, $obj->getIndiceBLMail());
	}

	/**
	 * Tests the setIndiceCdesMail() method.
	 *
	 * @return void
	 */
	public function testSetIndiceCdesMail() {

		$obj = new Clients2();

		$obj->setIndiceCdesMail(10);
		$this->assertEquals(10, $obj->getIndiceCdesMail());
	}

	/**
	 * Tests the setIndiceDevisMail() method.
	 *
	 * @return void
	 */
	public function testSetIndiceDevisMail() {

		$obj = new Clients2();

		$obj->setIndiceDevisMail(10);
		$this->assertEquals(10, $obj->getIndiceDevisMail());
	}

	/**
	 * Tests the setIndiceRelevesMail() method.
	 *
	 * @return void
	 */
	public function testSetIndiceRelevesMail() {

		$obj = new Clients2();

		$obj->setIndiceRelevesMail(10);
		$this->assertEquals(10, $obj->getIndiceRelevesMail());
	}

	/**
	 * Tests the setLettreDeMission_DateSignature() method.
	 *
	 * @return void
	 */
	public function testSetLettreDeMission_DateSignature() {

		$obj = new Clients2();

		$obj->setLettreDeMission_DateSignature(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getLettreDeMission_DateSignature());
	}

	/**
	 * Tests the setModeleFactureManuelleSpe() method.
	 *
	 * @return void
	 */
	public function testSetModeleFactureManuelleSpe() {

		$obj = new Clients2();

		$obj->setModeleFactureManuelleSpe("modeleFactureManuelleSpe");
		$this->assertEquals("modeleFactureManuelleSpe", $obj->getModeleFactureManuelleSpe());
	}

	/**
	 * Tests the setMontantDepassementAutorise() method.
	 *
	 * @return void
	 */
	public function testSetMontantDepassementAutorise() {

		$obj = new Clients2();

		$obj->setMontantDepassementAutorise(10.092018);
		$this->assertEquals(10.092018, $obj->getMontantDepassementAutorise());
	}

	/**
	 * Tests the setMotifEntree() method.
	 *
	 * @return void
	 */
	public function testSetMotifEntree() {

		$obj = new Clients2();

		$obj->setMotifEntree("motifEntree");
		$this->assertEquals("motifEntree", $obj->getMotifEntree());
	}

	/**
	 * Tests the setMotifSortie() method.
	 *
	 * @return void
	 */
	public function testSetMotifSortie() {

		$obj = new Clients2();

		$obj->setMotifSortie("motifSortie");
		$this->assertEquals("motifSortie", $obj->getMotifSortie());
	}

	/**
	 * Tests the setMtTransport1() method.
	 *
	 * @return void
	 */
	public function testSetMtTransport1() {

		$obj = new Clients2();

		$obj->setMtTransport1(10.092018);
		$this->assertEquals(10.092018, $obj->getMtTransport1());
	}

	/**
	 * Tests the setMtTransport2() method.
	 *
	 * @return void
	 */
	public function testSetMtTransport2() {

		$obj = new Clients2();

		$obj->setMtTransport2(10.092018);
		$this->assertEquals(10.092018, $obj->getMtTransport2());
	}

	/**
	 * Tests the setMtTransport3() method.
	 *
	 * @return void
	 */
	public function testSetMtTransport3() {

		$obj = new Clients2();

		$obj->setMtTransport3(10.092018);
		$this->assertEquals(10.092018, $obj->getMtTransport3());
	}

	/**
	 * Tests the setMtTransport4() method.
	 *
	 * @return void
	 */
	public function testSetMtTransport4() {

		$obj = new Clients2();

		$obj->setMtTransport4(10.092018);
		$this->assertEquals(10.092018, $obj->getMtTransport4());
	}

	/**
	 * Tests the setMtTransport5() method.
	 *
	 * @return void
	 */
	public function testSetMtTransport5() {

		$obj = new Clients2();

		$obj->setMtTransport5(10.092018);
		$this->assertEquals(10.092018, $obj->getMtTransport5());
	}

	/**
	 * Tests the setNonConcerneIS() method.
	 *
	 * @return void
	 */
	public function testSetNonConcerneIS() {

		$obj = new Clients2();

		$obj->setNonConcerneIS(true);
		$this->assertEquals(true, $obj->getNonConcerneIS());
	}

	/**
	 * Tests the setNonConcerneTP() method.
	 *
	 * @return void
	 */
	public function testSetNonConcerneTP() {

		$obj = new Clients2();

		$obj->setNonConcerneTP(true);
		$this->assertEquals(true, $obj->getNonConcerneTP());
	}

	/**
	 * Tests the setNonFacturable() method.
	 *
	 * @return void
	 */
	public function testSetNonFacturable() {

		$obj = new Clients2();

		$obj->setNonFacturable(true);
		$this->assertEquals(true, $obj->getNonFacturable());
	}

	/**
	 * Tests the setPMETarifOuRemSpe() method.
	 *
	 * @return void
	 */
	public function testSetPMETarifOuRemSpe() {

		$obj = new Clients2();

		$obj->setPMETarifOuRemSpe(true);
		$this->assertEquals(true, $obj->getPMETarifOuRemSpe());
	}

	/**
	 * Tests the setPrevenirMailPublier() method.
	 *
	 * @return void
	 */
	public function testSetPrevenirMailPublier() {

		$obj = new Clients2();

		$obj->setPrevenirMailPublier(true);
		$this->assertEquals(true, $obj->getPrevenirMailPublier());
	}

	/**
	 * Tests the setRelevesMail() method.
	 *
	 * @return void
	 */
	public function testSetRelevesMail() {

		$obj = new Clients2();

		$obj->setRelevesMail(true);
		$this->assertEquals(true, $obj->getRelevesMail());
	}

	/**
	 * Tests the setSocial_ComplementSuite() method.
	 *
	 * @return void
	 */
	public function testSetSocial_ComplementSuite() {

		$obj = new Clients2();

		$obj->setSocial_ComplementSuite("social_ComplementSuite");
		$this->assertEquals("social_ComplementSuite", $obj->getSocial_ComplementSuite());
	}

	/**
	 * Tests the setSocial_ZipCode() method.
	 *
	 * @return void
	 */
	public function testSetSocial_ZipCode() {

		$obj = new Clients2();

		$obj->setSocial_ZipCode("social_ZipCode");
		$this->assertEquals("social_ZipCode", $obj->getSocial_ZipCode());
	}

	/**
	 * Tests the setTRSArtPied() method.
	 *
	 * @return void
	 */
	public function testSetTRSArtPied() {

		$obj = new Clients2();

		$obj->setTRSArtPied("tRSArtPied");
		$this->assertEquals("tRSArtPied", $obj->getTRSArtPied());
	}

	/**
	 * Tests the setTRSArtPied2() method.
	 *
	 * @return void
	 */
	public function testSetTRSArtPied2() {

		$obj = new Clients2();

		$obj->setTRSArtPied2("tRSArtPied2");
		$this->assertEquals("tRSArtPied2", $obj->getTRSArtPied2());
	}

	/**
	 * Tests the setTRSCategMarch() method.
	 *
	 * @return void
	 */
	public function testSetTRSCategMarch() {

		$obj = new Clients2();

		$obj->setTRSCategMarch("tRSCategMarch");
		$this->assertEquals("tRSCategMarch", $obj->getTRSCategMarch());
	}

	/**
	 * Tests the setTRSCentreAna() method.
	 *
	 * @return void
	 */
	public function testSetTRSCentreAna() {

		$obj = new Clients2();

		$obj->setTRSCentreAna("tRSCentreAna");
		$this->assertEquals("tRSCentreAna", $obj->getTRSCentreAna());
	}

	/**
	 * Tests the setTRSCodeTarif1() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif1() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif1("tRSCodeTarif1");
		$this->assertEquals("tRSCodeTarif1", $obj->getTRSCodeTarif1());
	}

	/**
	 * Tests the setTRSCodeTarif1Sens() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif1Sens() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif1Sens("tRSCodeTarif1Sens");
		$this->assertEquals("tRSCodeTarif1Sens", $obj->getTRSCodeTarif1Sens());
	}

	/**
	 * Tests the setTRSCodeTarif2() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif2() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif2("tRSCodeTarif2");
		$this->assertEquals("tRSCodeTarif2", $obj->getTRSCodeTarif2());
	}

	/**
	 * Tests the setTRSCodeTarif2Sens() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif2Sens() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif2Sens("tRSCodeTarif2Sens");
		$this->assertEquals("tRSCodeTarif2Sens", $obj->getTRSCodeTarif2Sens());
	}

	/**
	 * Tests the setTRSCodeTarif3() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif3() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif3("tRSCodeTarif3");
		$this->assertEquals("tRSCodeTarif3", $obj->getTRSCodeTarif3());
	}

	/**
	 * Tests the setTRSCodeTarif3Sens() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif3Sens() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif3Sens("tRSCodeTarif3Sens");
		$this->assertEquals("tRSCodeTarif3Sens", $obj->getTRSCodeTarif3Sens());
	}

	/**
	 * Tests the setTRSCodeTarif4() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif4() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif4("tRSCodeTarif4");
		$this->assertEquals("tRSCodeTarif4", $obj->getTRSCodeTarif4());
	}

	/**
	 * Tests the setTRSCodeTarif4Sens() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif4Sens() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif4Sens("tRSCodeTarif4Sens");
		$this->assertEquals("tRSCodeTarif4Sens", $obj->getTRSCodeTarif4Sens());
	}

	/**
	 * Tests the setTRSCodeTarif5() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif5() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif5("tRSCodeTarif5");
		$this->assertEquals("tRSCodeTarif5", $obj->getTRSCodeTarif5());
	}

	/**
	 * Tests the setTRSCodeTarif5Sens() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif5Sens() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif5Sens("tRSCodeTarif5Sens");
		$this->assertEquals("tRSCodeTarif5Sens", $obj->getTRSCodeTarif5Sens());
	}

	/**
	 * Tests the setTRSCodeTarif6() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif6() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif6("tRSCodeTarif6");
		$this->assertEquals("tRSCodeTarif6", $obj->getTRSCodeTarif6());
	}

	/**
	 * Tests the setTRSCodeTarif6Sens() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarif6Sens() {

		$obj = new Clients2();

		$obj->setTRSCodeTarif6Sens("tRSCodeTarif6Sens");
		$this->assertEquals("tRSCodeTarif6Sens", $obj->getTRSCodeTarif6Sens());
	}

	/**
	 * Tests the setTRSCodeTarifDef() method.
	 *
	 * @return void
	 */
	public function testSetTRSCodeTarifDef() {

		$obj = new Clients2();

		$obj->setTRSCodeTarifDef(10);
		$this->assertEquals(10, $obj->getTRSCodeTarifDef());
	}

	/**
	 * Tests the setTRSComment1() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment1() {

		$obj = new Clients2();

		$obj->setTRSComment1("tRSComment1");
		$this->assertEquals("tRSComment1", $obj->getTRSComment1());
	}

	/**
	 * Tests the setTRSComment2() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment2() {

		$obj = new Clients2();

		$obj->setTRSComment2("tRSComment2");
		$this->assertEquals("tRSComment2", $obj->getTRSComment2());
	}

	/**
	 * Tests the setTRSComment3() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment3() {

		$obj = new Clients2();

		$obj->setTRSComment3("tRSComment3");
		$this->assertEquals("tRSComment3", $obj->getTRSComment3());
	}

	/**
	 * Tests the setTRSComment4() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment4() {

		$obj = new Clients2();

		$obj->setTRSComment4("tRSComment4");
		$this->assertEquals("tRSComment4", $obj->getTRSComment4());
	}

	/**
	 * Tests the setTRSComment5() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment5() {

		$obj = new Clients2();

		$obj->setTRSComment5("tRSComment5");
		$this->assertEquals("tRSComment5", $obj->getTRSComment5());
	}

	/**
	 * Tests the setTRSComment6() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment6() {

		$obj = new Clients2();

		$obj->setTRSComment6("tRSComment6");
		$this->assertEquals("tRSComment6", $obj->getTRSComment6());
	}

	/**
	 * Tests the setTRSComment7() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment7() {

		$obj = new Clients2();

		$obj->setTRSComment7("tRSComment7");
		$this->assertEquals("tRSComment7", $obj->getTRSComment7());
	}

	/**
	 * Tests the setTRSComment8() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment8() {

		$obj = new Clients2();

		$obj->setTRSComment8("tRSComment8");
		$this->assertEquals("tRSComment8", $obj->getTRSComment8());
	}

	/**
	 * Tests the setTRSComment9() method.
	 *
	 * @return void
	 */
	public function testSetTRSComment9() {

		$obj = new Clients2();

		$obj->setTRSComment9("tRSComment9");
		$this->assertEquals("tRSComment9", $obj->getTRSComment9());
	}

	/**
	 * Tests the setTRSConsignes1() method.
	 *
	 * @return void
	 */
	public function testSetTRSConsignes1() {

		$obj = new Clients2();

		$obj->setTRSConsignes1("tRSConsignes1");
		$this->assertEquals("tRSConsignes1", $obj->getTRSConsignes1());
	}

	/**
	 * Tests the setTRSConsignes2() method.
	 *
	 * @return void
	 */
	public function testSetTRSConsignes2() {

		$obj = new Clients2();

		$obj->setTRSConsignes2("tRSConsignes2");
		$this->assertEquals("tRSConsignes2", $obj->getTRSConsignes2());
	}

	/**
	 * Tests the setTRSConsignes3() method.
	 *
	 * @return void
	 */
	public function testSetTRSConsignes3() {

		$obj = new Clients2();

		$obj->setTRSConsignes3("tRSConsignes3");
		$this->assertEquals("tRSConsignes3", $obj->getTRSConsignes3());
	}

	/**
	 * Tests the setTRSGestionPalettes() method.
	 *
	 * @return void
	 */
	public function testSetTRSGestionPalettes() {

		$obj = new Clients2();

		$obj->setTRSGestionPalettes(true);
		$this->assertEquals(true, $obj->getTRSGestionPalettes());
	}

	/**
	 * Tests the setTRSMarchandiseSensible() method.
	 *
	 * @return void
	 */
	public function testSetTRSMarchandiseSensible() {

		$obj = new Clients2();

		$obj->setTRSMarchandiseSensible(true);
		$this->assertEquals(true, $obj->getTRSMarchandiseSensible());
	}

	/**
	 * Tests the setTRSModeleFactureSpe() method.
	 *
	 * @return void
	 */
	public function testSetTRSModeleFactureSpe() {

		$obj = new Clients2();

		$obj->setTRSModeleFactureSpe("tRSModeleFactureSpe");
		$this->assertEquals("tRSModeleFactureSpe", $obj->getTRSModeleFactureSpe());
	}

	/**
	 * Tests the setTRSPoidsMiniPal() method.
	 *
	 * @return void
	 */
	public function testSetTRSPoidsMiniPal() {

		$obj = new Clients2();

		$obj->setTRSPoidsMiniPal(10.092018);
		$this->assertEquals(10.092018, $obj->getTRSPoidsMiniPal());
	}

	/**
	 * Tests the setTRSPortDuAuto() method.
	 *
	 * @return void
	 */
	public function testSetTRSPortDuAuto() {

		$obj = new Clients2();

		$obj->setTRSPortDuAuto(true);
		$this->assertEquals(true, $obj->getTRSPortDuAuto());
	}

	/**
	 * Tests the setTRSSuiviCAMens() method.
	 *
	 * @return void
	 */
	public function testSetTRSSuiviCAMens() {

		$obj = new Clients2();

		$obj->setTRSSuiviCAMens(true);
		$this->assertEquals(true, $obj->getTRSSuiviCAMens());
	}

	/**
	 * Tests the setTRSSuiviDtEnl() method.
	 *
	 * @return void
	 */
	public function testSetTRSSuiviDtEnl() {

		$obj = new Clients2();

		$obj->setTRSSuiviDtEnl(true);
		$this->assertEquals(true, $obj->getTRSSuiviDtEnl());
	}

	/**
	 * Tests the setTRSSuiviDtLiv() method.
	 *
	 * @return void
	 */
	public function testSetTRSSuiviDtLiv() {

		$obj = new Clients2();

		$obj->setTRSSuiviDtLiv(true);
		$this->assertEquals(true, $obj->getTRSSuiviDtLiv());
	}

	/**
	 * Tests the setTRSSuiviDtLivFax() method.
	 *
	 * @return void
	 */
	public function testSetTRSSuiviDtLivFax() {

		$obj = new Clients2();

		$obj->setTRSSuiviDtLivFax("tRSSuiviDtLivFax");
		$this->assertEquals("tRSSuiviDtLivFax", $obj->getTRSSuiviDtLivFax());
	}

	/**
	 * Tests the setTRSSuiviDtLivMail() method.
	 *
	 * @return void
	 */
	public function testSetTRSSuiviDtLivMail() {

		$obj = new Clients2();

		$obj->setTRSSuiviDtLivMail("tRSSuiviDtLivMail");
		$this->assertEquals("tRSSuiviDtLivMail", $obj->getTRSSuiviDtLivMail());
	}

	/**
	 * Tests the setTRSTypeClient() method.
	 *
	 * @return void
	 */
	public function testSetTRSTypeClient() {

		$obj = new Clients2();

		$obj->setTRSTypeClient("tRSTypeClient");
		$this->assertEquals("tRSTypeClient", $obj->getTRSTypeClient());
	}

	/**
	 * Tests the setTRSTypeFacturation() method.
	 *
	 * @return void
	 */
	public function testSetTRSTypeFacturation() {

		$obj = new Clients2();

		$obj->setTRSTypeFacturation("tRSTypeFacturation");
		$this->assertEquals("tRSTypeFacturation", $obj->getTRSTypeFacturation());
	}

	/**
	 * Tests the setTRSTypeTravail() method.
	 *
	 * @return void
	 */
	public function testSetTRSTypeTravail() {

		$obj = new Clients2();

		$obj->setTRSTypeTravail("tRSTypeTravail");
		$this->assertEquals("tRSTypeTravail", $obj->getTRSTypeTravail());
	}

	/**
	 * Tests the setTypeTransport1() method.
	 *
	 * @return void
	 */
	public function testSetTypeTransport1() {

		$obj = new Clients2();

		$obj->setTypeTransport1("typeTransport1");
		$this->assertEquals("typeTransport1", $obj->getTypeTransport1());
	}

	/**
	 * Tests the setTypeTransport2() method.
	 *
	 * @return void
	 */
	public function testSetTypeTransport2() {

		$obj = new Clients2();

		$obj->setTypeTransport2("typeTransport2");
		$this->assertEquals("typeTransport2", $obj->getTypeTransport2());
	}

	/**
	 * Tests the setTypeTransport3() method.
	 *
	 * @return void
	 */
	public function testSetTypeTransport3() {

		$obj = new Clients2();

		$obj->setTypeTransport3("typeTransport3");
		$this->assertEquals("typeTransport3", $obj->getTypeTransport3());
	}

	/**
	 * Tests the setTypeTransport4() method.
	 *
	 * @return void
	 */
	public function testSetTypeTransport4() {

		$obj = new Clients2();

		$obj->setTypeTransport4("typeTransport4");
		$this->assertEquals("typeTransport4", $obj->getTypeTransport4());
	}

	/**
	 * Tests the setTypeTransport5() method.
	 *
	 * @return void
	 */
	public function testSetTypeTransport5() {

		$obj = new Clients2();

		$obj->setTypeTransport5("typeTransport5");
		$this->assertEquals("typeTransport5", $obj->getTypeTransport5());
	}

	/**
	 * Tests the setlocalisationArchives() method.
	 *
	 * @return void
	 */
	public function testSetlocalisationArchives() {

		$obj = new Clients2();

		$obj->setlocalisationArchives("localisationArchives");
		$this->assertEquals("localisationArchives", $obj->getlocalisationArchives());
	}

}
