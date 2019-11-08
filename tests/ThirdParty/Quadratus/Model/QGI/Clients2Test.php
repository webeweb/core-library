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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Clients2;

/**
 * Clients2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class Clients2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Clients2();

        $this->assertNull($obj->getAllotissement());
        $this->assertNull($obj->getBlMail());
        $this->assertNull($obj->getCdesMail());
        $this->assertNull($obj->getCodeActiviteCga());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeTransporteur1());
        $this->assertNull($obj->getCodeTransporteur2());
        $this->assertNull($obj->getCodeTransporteur3());
        $this->assertNull($obj->getCodeTransporteur4());
        $this->assertNull($obj->getCodeTransporteur5());
        $this->assertNull($obj->getDateDebExePublication());
        $this->assertNull($obj->getDelaiLivraison());
        $this->assertNull($obj->getDevisMail());
        $this->assertNull($obj->getEanClient());
        $this->assertNull($obj->getEanFacturePapier());
        $this->assertNull($obj->getEanPlateforme());
        $this->assertNull($obj->getEdiExportBl());
        $this->assertNull($obj->getEdiExportFac());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getEcheanceFinQuinzaine());
        $this->assertNull($obj->getFactComplementSuite());
        $this->assertNull($obj->getFactZipCode());
        $this->assertNull($obj->getIndMailPublication());
        $this->assertNull($obj->getIndiceBlMail());
        $this->assertNull($obj->getIndiceCdesMail());
        $this->assertNull($obj->getIndiceDevisMail());
        $this->assertNull($obj->getIndiceRelevesMail());
        $this->assertNull($obj->getLettreDeMissionDateSignature());
        $this->assertNull($obj->getModeleFactureManuelleSpe());
        $this->assertNull($obj->getMontantDepassementAutorise());
        $this->assertNull($obj->getMotifEntree());
        $this->assertNull($obj->getMotifSortie());
        $this->assertNull($obj->getMtTransport1());
        $this->assertNull($obj->getMtTransport2());
        $this->assertNull($obj->getMtTransport3());
        $this->assertNull($obj->getMtTransport4());
        $this->assertNull($obj->getMtTransport5());
        $this->assertNull($obj->getNonConcerneIs());
        $this->assertNull($obj->getNonConcerneTp());
        $this->assertNull($obj->getNonFacturable());
        $this->assertNull($obj->getPmeTarifOuRemSpe());
        $this->assertNull($obj->getPrevenirMailPublier());
        $this->assertNull($obj->getRelevesMail());
        $this->assertNull($obj->getSocialComplementSuite());
        $this->assertNull($obj->getSocialZipCode());
        $this->assertNull($obj->getTrsArtPied());
        $this->assertNull($obj->getTrsArtPied2());
        $this->assertNull($obj->getTrsCategMarch());
        $this->assertNull($obj->getTrsCentreAna());
        $this->assertNull($obj->getTrsCodeTarif1());
        $this->assertNull($obj->getTrsCodeTarif1Sens());
        $this->assertNull($obj->getTrsCodeTarif2());
        $this->assertNull($obj->getTrsCodeTarif2Sens());
        $this->assertNull($obj->getTrsCodeTarif3());
        $this->assertNull($obj->getTrsCodeTarif3Sens());
        $this->assertNull($obj->getTrsCodeTarif4());
        $this->assertNull($obj->getTrsCodeTarif4Sens());
        $this->assertNull($obj->getTrsCodeTarif5());
        $this->assertNull($obj->getTrsCodeTarif5Sens());
        $this->assertNull($obj->getTrsCodeTarif6());
        $this->assertNull($obj->getTrsCodeTarif6Sens());
        $this->assertNull($obj->getTrsCodeTarifDef());
        $this->assertNull($obj->getTrsComment1());
        $this->assertNull($obj->getTrsComment2());
        $this->assertNull($obj->getTrsComment3());
        $this->assertNull($obj->getTrsComment4());
        $this->assertNull($obj->getTrsComment5());
        $this->assertNull($obj->getTrsComment6());
        $this->assertNull($obj->getTrsComment7());
        $this->assertNull($obj->getTrsComment8());
        $this->assertNull($obj->getTrsComment9());
        $this->assertNull($obj->getTrsConsignes1());
        $this->assertNull($obj->getTrsConsignes2());
        $this->assertNull($obj->getTrsConsignes3());
        $this->assertNull($obj->getTrsGestionPalettes());
        $this->assertNull($obj->getTrsMarchandiseSensible());
        $this->assertNull($obj->getTrsModeleFactureSpe());
        $this->assertNull($obj->getTrsPoidsMiniPal());
        $this->assertNull($obj->getTrsPortDuAuto());
        $this->assertNull($obj->getTrsSuiviCaMens());
        $this->assertNull($obj->getTrsSuiviDtEnl());
        $this->assertNull($obj->getTrsSuiviDtLiv());
        $this->assertNull($obj->getTrsSuiviDtLivFax());
        $this->assertNull($obj->getTrsSuiviDtLivMail());
        $this->assertNull($obj->getTrsTypeClient());
        $this->assertNull($obj->getTrsTypeFacturation());
        $this->assertNull($obj->getTrsTypeTravail());
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
     * Tests the setBlMail() method.
     *
     * @return void
     */
    public function testSetBlMail() {

        $obj = new Clients2();

        $obj->setBlMail(true);
        $this->assertEquals(true, $obj->getBlMail());
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
     * Tests the setCodeActiviteCga() method.
     *
     * @return void
     */
    public function testSetCodeActiviteCga() {

        $obj = new Clients2();

        $obj->setCodeActiviteCga("codeActiviteCga");
        $this->assertEquals("codeActiviteCga", $obj->getCodeActiviteCga());
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
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebExePublication() {

        // Set a Date/time mock.
        $dateDebExePublication = new DateTime("2018-09-10");

        $obj = new Clients2();

        $obj->setDateDebExePublication($dateDebExePublication);
        $this->assertSame($dateDebExePublication, $obj->getDateDebExePublication());
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
     * Tests the setEanClient() method.
     *
     * @return void
     */
    public function testSetEanClient() {

        $obj = new Clients2();

        $obj->setEanClient("eanClient");
        $this->assertEquals("eanClient", $obj->getEanClient());
    }

    /**
     * Tests the setEanFacturePapier() method.
     *
     * @return void
     */
    public function testSetEanFacturePapier() {

        $obj = new Clients2();

        $obj->setEanFacturePapier("eanFacturePapier");
        $this->assertEquals("eanFacturePapier", $obj->getEanFacturePapier());
    }

    /**
     * Tests the setEanPlateforme() method.
     *
     * @return void
     */
    public function testSetEanPlateforme() {

        $obj = new Clients2();

        $obj->setEanPlateforme("eanPlateforme");
        $this->assertEquals("eanPlateforme", $obj->getEanPlateforme());
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
     * Tests the setEdiExportBl() method.
     *
     * @return void
     */
    public function testSetEdiExportBl() {

        $obj = new Clients2();

        $obj->setEdiExportBl(true);
        $this->assertEquals(true, $obj->getEdiExportBl());
    }

    /**
     * Tests the setEdiExportFac() method.
     *
     * @return void
     */
    public function testSetEdiExportFac() {

        $obj = new Clients2();

        $obj->setEdiExportFac(true);
        $this->assertEquals(true, $obj->getEdiExportFac());
    }

    /**
     * Tests the setFactComplementSuite() method.
     *
     * @return void
     */
    public function testSetFactComplementSuite() {

        $obj = new Clients2();

        $obj->setFactComplementSuite("factComplementSuite");
        $this->assertEquals("factComplementSuite", $obj->getFactComplementSuite());
    }

    /**
     * Tests the setFactZipCode() method.
     *
     * @return void
     */
    public function testSetFactZipCode() {

        $obj = new Clients2();

        $obj->setFactZipCode("factZipCode");
        $this->assertEquals("factZipCode", $obj->getFactZipCode());
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
     * Tests the setIndiceBlMail() method.
     *
     * @return void
     */
    public function testSetIndiceBlMail() {

        $obj = new Clients2();

        $obj->setIndiceBlMail(10);
        $this->assertEquals(10, $obj->getIndiceBlMail());
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
     * Tests the setLettreDeMissionDateSignature() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetLettreDeMissionDateSignature() {

        // Set a Date/time mock.
        $lettreDeMissionDateSignature = new DateTime("2018-09-10");

        $obj = new Clients2();

        $obj->setLettreDeMissionDateSignature($lettreDeMissionDateSignature);
        $this->assertSame($lettreDeMissionDateSignature, $obj->getLettreDeMissionDateSignature());
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
     * Tests the setNonConcerneIs() method.
     *
     * @return void
     */
    public function testSetNonConcerneIs() {

        $obj = new Clients2();

        $obj->setNonConcerneIs(true);
        $this->assertEquals(true, $obj->getNonConcerneIs());
    }

    /**
     * Tests the setNonConcerneTp() method.
     *
     * @return void
     */
    public function testSetNonConcerneTp() {

        $obj = new Clients2();

        $obj->setNonConcerneTp(true);
        $this->assertEquals(true, $obj->getNonConcerneTp());
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
     * Tests the setPmeTarifOuRemSpe() method.
     *
     * @return void
     */
    public function testSetPmeTarifOuRemSpe() {

        $obj = new Clients2();

        $obj->setPmeTarifOuRemSpe(true);
        $this->assertEquals(true, $obj->getPmeTarifOuRemSpe());
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
     * Tests the setSocialComplementSuite() method.
     *
     * @return void
     */
    public function testSetSocialComplementSuite() {

        $obj = new Clients2();

        $obj->setSocialComplementSuite("socialComplementSuite");
        $this->assertEquals("socialComplementSuite", $obj->getSocialComplementSuite());
    }

    /**
     * Tests the setSocialZipCode() method.
     *
     * @return void
     */
    public function testSetSocialZipCode() {

        $obj = new Clients2();

        $obj->setSocialZipCode("socialZipCode");
        $this->assertEquals("socialZipCode", $obj->getSocialZipCode());
    }

    /**
     * Tests the setTrsArtPied() method.
     *
     * @return void
     */
    public function testSetTrsArtPied() {

        $obj = new Clients2();

        $obj->setTrsArtPied("trsArtPied");
        $this->assertEquals("trsArtPied", $obj->getTrsArtPied());
    }

    /**
     * Tests the setTrsArtPied2() method.
     *
     * @return void
     */
    public function testSetTrsArtPied2() {

        $obj = new Clients2();

        $obj->setTrsArtPied2("trsArtPied2");
        $this->assertEquals("trsArtPied2", $obj->getTrsArtPied2());
    }

    /**
     * Tests the setTrsCategMarch() method.
     *
     * @return void
     */
    public function testSetTrsCategMarch() {

        $obj = new Clients2();

        $obj->setTrsCategMarch("trsCategMarch");
        $this->assertEquals("trsCategMarch", $obj->getTrsCategMarch());
    }

    /**
     * Tests the setTrsCentreAna() method.
     *
     * @return void
     */
    public function testSetTrsCentreAna() {

        $obj = new Clients2();

        $obj->setTrsCentreAna("trsCentreAna");
        $this->assertEquals("trsCentreAna", $obj->getTrsCentreAna());
    }

    /**
     * Tests the setTrsCodeTarif1() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif1() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif1("trsCodeTarif1");
        $this->assertEquals("trsCodeTarif1", $obj->getTrsCodeTarif1());
    }

    /**
     * Tests the setTrsCodeTarif1Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif1Sens() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif1Sens("trsCodeTarif1Sens");
        $this->assertEquals("trsCodeTarif1Sens", $obj->getTrsCodeTarif1Sens());
    }

    /**
     * Tests the setTrsCodeTarif2() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif2() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif2("trsCodeTarif2");
        $this->assertEquals("trsCodeTarif2", $obj->getTrsCodeTarif2());
    }

    /**
     * Tests the setTrsCodeTarif2Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif2Sens() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif2Sens("trsCodeTarif2Sens");
        $this->assertEquals("trsCodeTarif2Sens", $obj->getTrsCodeTarif2Sens());
    }

    /**
     * Tests the setTrsCodeTarif3() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif3() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif3("trsCodeTarif3");
        $this->assertEquals("trsCodeTarif3", $obj->getTrsCodeTarif3());
    }

    /**
     * Tests the setTrsCodeTarif3Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif3Sens() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif3Sens("trsCodeTarif3Sens");
        $this->assertEquals("trsCodeTarif3Sens", $obj->getTrsCodeTarif3Sens());
    }

    /**
     * Tests the setTrsCodeTarif4() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif4() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif4("trsCodeTarif4");
        $this->assertEquals("trsCodeTarif4", $obj->getTrsCodeTarif4());
    }

    /**
     * Tests the setTrsCodeTarif4Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif4Sens() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif4Sens("trsCodeTarif4Sens");
        $this->assertEquals("trsCodeTarif4Sens", $obj->getTrsCodeTarif4Sens());
    }

    /**
     * Tests the setTrsCodeTarif5() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif5() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif5("trsCodeTarif5");
        $this->assertEquals("trsCodeTarif5", $obj->getTrsCodeTarif5());
    }

    /**
     * Tests the setTrsCodeTarif5Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif5Sens() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif5Sens("trsCodeTarif5Sens");
        $this->assertEquals("trsCodeTarif5Sens", $obj->getTrsCodeTarif5Sens());
    }

    /**
     * Tests the setTrsCodeTarif6() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif6() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif6("trsCodeTarif6");
        $this->assertEquals("trsCodeTarif6", $obj->getTrsCodeTarif6());
    }

    /**
     * Tests the setTrsCodeTarif6Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif6Sens() {

        $obj = new Clients2();

        $obj->setTrsCodeTarif6Sens("trsCodeTarif6Sens");
        $this->assertEquals("trsCodeTarif6Sens", $obj->getTrsCodeTarif6Sens());
    }

    /**
     * Tests the setTrsCodeTarifDef() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarifDef() {

        $obj = new Clients2();

        $obj->setTrsCodeTarifDef(10);
        $this->assertEquals(10, $obj->getTrsCodeTarifDef());
    }

    /**
     * Tests the setTrsComment1() method.
     *
     * @return void
     */
    public function testSetTrsComment1() {

        $obj = new Clients2();

        $obj->setTrsComment1("trsComment1");
        $this->assertEquals("trsComment1", $obj->getTrsComment1());
    }

    /**
     * Tests the setTrsComment2() method.
     *
     * @return void
     */
    public function testSetTrsComment2() {

        $obj = new Clients2();

        $obj->setTrsComment2("trsComment2");
        $this->assertEquals("trsComment2", $obj->getTrsComment2());
    }

    /**
     * Tests the setTrsComment3() method.
     *
     * @return void
     */
    public function testSetTrsComment3() {

        $obj = new Clients2();

        $obj->setTrsComment3("trsComment3");
        $this->assertEquals("trsComment3", $obj->getTrsComment3());
    }

    /**
     * Tests the setTrsComment4() method.
     *
     * @return void
     */
    public function testSetTrsComment4() {

        $obj = new Clients2();

        $obj->setTrsComment4("trsComment4");
        $this->assertEquals("trsComment4", $obj->getTrsComment4());
    }

    /**
     * Tests the setTrsComment5() method.
     *
     * @return void
     */
    public function testSetTrsComment5() {

        $obj = new Clients2();

        $obj->setTrsComment5("trsComment5");
        $this->assertEquals("trsComment5", $obj->getTrsComment5());
    }

    /**
     * Tests the setTrsComment6() method.
     *
     * @return void
     */
    public function testSetTrsComment6() {

        $obj = new Clients2();

        $obj->setTrsComment6("trsComment6");
        $this->assertEquals("trsComment6", $obj->getTrsComment6());
    }

    /**
     * Tests the setTrsComment7() method.
     *
     * @return void
     */
    public function testSetTrsComment7() {

        $obj = new Clients2();

        $obj->setTrsComment7("trsComment7");
        $this->assertEquals("trsComment7", $obj->getTrsComment7());
    }

    /**
     * Tests the setTrsComment8() method.
     *
     * @return void
     */
    public function testSetTrsComment8() {

        $obj = new Clients2();

        $obj->setTrsComment8("trsComment8");
        $this->assertEquals("trsComment8", $obj->getTrsComment8());
    }

    /**
     * Tests the setTrsComment9() method.
     *
     * @return void
     */
    public function testSetTrsComment9() {

        $obj = new Clients2();

        $obj->setTrsComment9("trsComment9");
        $this->assertEquals("trsComment9", $obj->getTrsComment9());
    }

    /**
     * Tests the setTrsConsignes1() method.
     *
     * @return void
     */
    public function testSetTrsConsignes1() {

        $obj = new Clients2();

        $obj->setTrsConsignes1("trsConsignes1");
        $this->assertEquals("trsConsignes1", $obj->getTrsConsignes1());
    }

    /**
     * Tests the setTrsConsignes2() method.
     *
     * @return void
     */
    public function testSetTrsConsignes2() {

        $obj = new Clients2();

        $obj->setTrsConsignes2("trsConsignes2");
        $this->assertEquals("trsConsignes2", $obj->getTrsConsignes2());
    }

    /**
     * Tests the setTrsConsignes3() method.
     *
     * @return void
     */
    public function testSetTrsConsignes3() {

        $obj = new Clients2();

        $obj->setTrsConsignes3("trsConsignes3");
        $this->assertEquals("trsConsignes3", $obj->getTrsConsignes3());
    }

    /**
     * Tests the setTrsGestionPalettes() method.
     *
     * @return void
     */
    public function testSetTrsGestionPalettes() {

        $obj = new Clients2();

        $obj->setTrsGestionPalettes(true);
        $this->assertEquals(true, $obj->getTrsGestionPalettes());
    }

    /**
     * Tests the setTrsMarchandiseSensible() method.
     *
     * @return void
     */
    public function testSetTrsMarchandiseSensible() {

        $obj = new Clients2();

        $obj->setTrsMarchandiseSensible(true);
        $this->assertEquals(true, $obj->getTrsMarchandiseSensible());
    }

    /**
     * Tests the setTrsModeleFactureSpe() method.
     *
     * @return void
     */
    public function testSetTrsModeleFactureSpe() {

        $obj = new Clients2();

        $obj->setTrsModeleFactureSpe("trsModeleFactureSpe");
        $this->assertEquals("trsModeleFactureSpe", $obj->getTrsModeleFactureSpe());
    }

    /**
     * Tests the setTrsPoidsMiniPal() method.
     *
     * @return void
     */
    public function testSetTrsPoidsMiniPal() {

        $obj = new Clients2();

        $obj->setTrsPoidsMiniPal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrsPoidsMiniPal());
    }

    /**
     * Tests the setTrsPortDuAuto() method.
     *
     * @return void
     */
    public function testSetTrsPortDuAuto() {

        $obj = new Clients2();

        $obj->setTrsPortDuAuto(true);
        $this->assertEquals(true, $obj->getTrsPortDuAuto());
    }

    /**
     * Tests the setTrsSuiviCaMens() method.
     *
     * @return void
     */
    public function testSetTrsSuiviCaMens() {

        $obj = new Clients2();

        $obj->setTrsSuiviCaMens(true);
        $this->assertEquals(true, $obj->getTrsSuiviCaMens());
    }

    /**
     * Tests the setTrsSuiviDtEnl() method.
     *
     * @return void
     */
    public function testSetTrsSuiviDtEnl() {

        $obj = new Clients2();

        $obj->setTrsSuiviDtEnl(true);
        $this->assertEquals(true, $obj->getTrsSuiviDtEnl());
    }

    /**
     * Tests the setTrsSuiviDtLiv() method.
     *
     * @return void
     */
    public function testSetTrsSuiviDtLiv() {

        $obj = new Clients2();

        $obj->setTrsSuiviDtLiv(true);
        $this->assertEquals(true, $obj->getTrsSuiviDtLiv());
    }

    /**
     * Tests the setTrsSuiviDtLivFax() method.
     *
     * @return void
     */
    public function testSetTrsSuiviDtLivFax() {

        $obj = new Clients2();

        $obj->setTrsSuiviDtLivFax("trsSuiviDtLivFax");
        $this->assertEquals("trsSuiviDtLivFax", $obj->getTrsSuiviDtLivFax());
    }

    /**
     * Tests the setTrsSuiviDtLivMail() method.
     *
     * @return void
     */
    public function testSetTrsSuiviDtLivMail() {

        $obj = new Clients2();

        $obj->setTrsSuiviDtLivMail("trsSuiviDtLivMail");
        $this->assertEquals("trsSuiviDtLivMail", $obj->getTrsSuiviDtLivMail());
    }

    /**
     * Tests the setTrsTypeClient() method.
     *
     * @return void
     */
    public function testSetTrsTypeClient() {

        $obj = new Clients2();

        $obj->setTrsTypeClient("trsTypeClient");
        $this->assertEquals("trsTypeClient", $obj->getTrsTypeClient());
    }

    /**
     * Tests the setTrsTypeFacturation() method.
     *
     * @return void
     */
    public function testSetTrsTypeFacturation() {

        $obj = new Clients2();

        $obj->setTrsTypeFacturation("trsTypeFacturation");
        $this->assertEquals("trsTypeFacturation", $obj->getTrsTypeFacturation());
    }

    /**
     * Tests the setTrsTypeTravail() method.
     *
     * @return void
     */
    public function testSetTrsTypeTravail() {

        $obj = new Clients2();

        $obj->setTrsTypeTravail("trsTypeTravail");
        $this->assertEquals("trsTypeTravail", $obj->getTrsTypeTravail());
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
