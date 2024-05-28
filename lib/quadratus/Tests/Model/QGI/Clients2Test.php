<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\Clients2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class Clients2Test extends AbstractTestCase {

    /**
     * Test setAllotissement()
     *
     * @return void
     */
    public function testSetAllotissement(): void {

        $obj = new Clients2();

        $obj->setAllotissement(true);
        $this->assertTrue($obj->getAllotissement());
    }

    /**
     * Test setBlMail()
     *
     * @return void
     */
    public function testSetBlMail(): void {

        $obj = new Clients2();

        $obj->setBlMail(true);
        $this->assertTrue($obj->getBlMail());
    }

    /**
     * Test setCdesMail()
     *
     * @return void
     */
    public function testSetCdesMail(): void {

        $obj = new Clients2();

        $obj->setCdesMail(true);
        $this->assertTrue($obj->getCdesMail());
    }

    /**
     * Test setCodeActiviteCga()
     *
     * @return void
     */
    public function testSetCodeActiviteCga(): void {

        $obj = new Clients2();

        $obj->setCodeActiviteCga("codeActiviteCga");
        $this->assertEquals("codeActiviteCga", $obj->getCodeActiviteCga());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Clients2();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeTransporteur1()
     *
     * @return void
     */
    public function testSetCodeTransporteur1(): void {

        $obj = new Clients2();

        $obj->setCodeTransporteur1("codeTransporteur1");
        $this->assertEquals("codeTransporteur1", $obj->getCodeTransporteur1());
    }

    /**
     * Test setCodeTransporteur2()
     *
     * @return void
     */
    public function testSetCodeTransporteur2(): void {

        $obj = new Clients2();

        $obj->setCodeTransporteur2("codeTransporteur2");
        $this->assertEquals("codeTransporteur2", $obj->getCodeTransporteur2());
    }

    /**
     * Test setCodeTransporteur3()
     *
     * @return void
     */
    public function testSetCodeTransporteur3(): void {

        $obj = new Clients2();

        $obj->setCodeTransporteur3("codeTransporteur3");
        $this->assertEquals("codeTransporteur3", $obj->getCodeTransporteur3());
    }

    /**
     * Test setCodeTransporteur4()
     *
     * @return void
     */
    public function testSetCodeTransporteur4(): void {

        $obj = new Clients2();

        $obj->setCodeTransporteur4("codeTransporteur4");
        $this->assertEquals("codeTransporteur4", $obj->getCodeTransporteur4());
    }

    /**
     * Test setCodeTransporteur5()
     *
     * @return void
     */
    public function testSetCodeTransporteur5(): void {

        $obj = new Clients2();

        $obj->setCodeTransporteur5("codeTransporteur5");
        $this->assertEquals("codeTransporteur5", $obj->getCodeTransporteur5());
    }

    /**
     * Test setDateDebExePublication()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebExePublication(): void {

        // Set a Date/time mock.
        $dateDebExePublication = new DateTime("2018-09-10");

        $obj = new Clients2();

        $obj->setDateDebExePublication($dateDebExePublication);
        $this->assertSame($dateDebExePublication, $obj->getDateDebExePublication());
    }

    /**
     * Test setDelaiLivraison()
     *
     * @return void
     */
    public function testSetDelaiLivraison(): void {

        $obj = new Clients2();

        $obj->setDelaiLivraison(10);
        $this->assertEquals(10, $obj->getDelaiLivraison());
    }

    /**
     * Test setDevisMail()
     *
     * @return void
     */
    public function testSetDevisMail(): void {

        $obj = new Clients2();

        $obj->setDevisMail(true);
        $this->assertTrue($obj->getDevisMail());
    }

    /**
     * Test setEanClient()
     *
     * @return void
     */
    public function testSetEanClient(): void {

        $obj = new Clients2();

        $obj->setEanClient("eanClient");
        $this->assertEquals("eanClient", $obj->getEanClient());
    }

    /**
     * Test setEanFacturePapier()
     *
     * @return void
     */
    public function testSetEanFacturePapier(): void {

        $obj = new Clients2();

        $obj->setEanFacturePapier("eanFacturePapier");
        $this->assertEquals("eanFacturePapier", $obj->getEanFacturePapier());
    }

    /**
     * Test setEanPlateforme()
     *
     * @return void
     */
    public function testSetEanPlateforme(): void {

        $obj = new Clients2();

        $obj->setEanPlateforme("eanPlateforme");
        $this->assertEquals("eanPlateforme", $obj->getEanPlateforme());
    }

    /**
     * Test setEcheanceFinDecade()
     *
     * @return void
     */
    public function testSetEcheanceFinDecade(): void {

        $obj = new Clients2();

        $obj->setEcheanceFinDecade(true);
        $this->assertTrue($obj->getEcheanceFinDecade());
    }

    /**
     * Test setEcheanceFinQuinzaine()
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine(): void {

        $obj = new Clients2();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertTrue($obj->getEcheanceFinQuinzaine());
    }

    /**
     * Test setEdiExportBl()
     *
     * @return void
     */
    public function testSetEdiExportBl(): void {

        $obj = new Clients2();

        $obj->setEdiExportBl(true);
        $this->assertTrue($obj->getEdiExportBl());
    }

    /**
     * Test setEdiExportFac()
     *
     * @return void
     */
    public function testSetEdiExportFac(): void {

        $obj = new Clients2();

        $obj->setEdiExportFac(true);
        $this->assertTrue($obj->getEdiExportFac());
    }

    /**
     * Test setFactComplementSuite()
     *
     * @return void
     */
    public function testSetFactComplementSuite(): void {

        $obj = new Clients2();

        $obj->setFactComplementSuite("factComplementSuite");
        $this->assertEquals("factComplementSuite", $obj->getFactComplementSuite());
    }

    /**
     * Test setFactZipCode()
     *
     * @return void
     */
    public function testSetFactZipCode(): void {

        $obj = new Clients2();

        $obj->setFactZipCode("factZipCode");
        $this->assertEquals("factZipCode", $obj->getFactZipCode());
    }

    /**
     * Test setIndMailPublication()
     *
     * @return void
     */
    public function testSetIndMailPublication(): void {

        $obj = new Clients2();

        $obj->setIndMailPublication(10);
        $this->assertEquals(10, $obj->getIndMailPublication());
    }

    /**
     * Test setIndiceBlMail()
     *
     * @return void
     */
    public function testSetIndiceBlMail(): void {

        $obj = new Clients2();

        $obj->setIndiceBlMail(10);
        $this->assertEquals(10, $obj->getIndiceBlMail());
    }

    /**
     * Test setIndiceCdesMail()
     *
     * @return void
     */
    public function testSetIndiceCdesMail(): void {

        $obj = new Clients2();

        $obj->setIndiceCdesMail(10);
        $this->assertEquals(10, $obj->getIndiceCdesMail());
    }

    /**
     * Test setIndiceDevisMail()
     *
     * @return void
     */
    public function testSetIndiceDevisMail(): void {

        $obj = new Clients2();

        $obj->setIndiceDevisMail(10);
        $this->assertEquals(10, $obj->getIndiceDevisMail());
    }

    /**
     * Test setIndiceRelevesMail()
     *
     * @return void
     */
    public function testSetIndiceRelevesMail(): void {

        $obj = new Clients2();

        $obj->setIndiceRelevesMail(10);
        $this->assertEquals(10, $obj->getIndiceRelevesMail());
    }

    /**
     * Test setLettreDeMissionDateSignature()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetLettreDeMissionDateSignature(): void {

        // Set a Date/time mock.
        $lettreDeMissionDateSignature = new DateTime("2018-09-10");

        $obj = new Clients2();

        $obj->setLettreDeMissionDateSignature($lettreDeMissionDateSignature);
        $this->assertSame($lettreDeMissionDateSignature, $obj->getLettreDeMissionDateSignature());
    }

    /**
     * Test setModeleFactureManuelleSpe()
     *
     * @return void
     */
    public function testSetModeleFactureManuelleSpe(): void {

        $obj = new Clients2();

        $obj->setModeleFactureManuelleSpe("modeleFactureManuelleSpe");
        $this->assertEquals("modeleFactureManuelleSpe", $obj->getModeleFactureManuelleSpe());
    }

    /**
     * Test setMontantDepassementAutorise()
     *
     * @return void
     */
    public function testSetMontantDepassementAutorise(): void {

        $obj = new Clients2();

        $obj->setMontantDepassementAutorise(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantDepassementAutorise());
    }

    /**
     * Test setMotifEntree()
     *
     * @return void
     */
    public function testSetMotifEntree(): void {

        $obj = new Clients2();

        $obj->setMotifEntree("motifEntree");
        $this->assertEquals("motifEntree", $obj->getMotifEntree());
    }

    /**
     * Test setMotifSortie()
     *
     * @return void
     */
    public function testSetMotifSortie(): void {

        $obj = new Clients2();

        $obj->setMotifSortie("motifSortie");
        $this->assertEquals("motifSortie", $obj->getMotifSortie());
    }

    /**
     * Test setMtTransport1()
     *
     * @return void
     */
    public function testSetMtTransport1(): void {

        $obj = new Clients2();

        $obj->setMtTransport1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTransport1());
    }

    /**
     * Test setMtTransport2()
     *
     * @return void
     */
    public function testSetMtTransport2(): void {

        $obj = new Clients2();

        $obj->setMtTransport2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTransport2());
    }

    /**
     * Test setMtTransport3()
     *
     * @return void
     */
    public function testSetMtTransport3(): void {

        $obj = new Clients2();

        $obj->setMtTransport3(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTransport3());
    }

    /**
     * Test setMtTransport4()
     *
     * @return void
     */
    public function testSetMtTransport4(): void {

        $obj = new Clients2();

        $obj->setMtTransport4(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTransport4());
    }

    /**
     * Test setMtTransport5()
     *
     * @return void
     */
    public function testSetMtTransport5(): void {

        $obj = new Clients2();

        $obj->setMtTransport5(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTransport5());
    }

    /**
     * Test setNonConcerneIs()
     *
     * @return void
     */
    public function testSetNonConcerneIs(): void {

        $obj = new Clients2();

        $obj->setNonConcerneIs(true);
        $this->assertTrue($obj->getNonConcerneIs());
    }

    /**
     * Test setNonConcerneTp()
     *
     * @return void
     */
    public function testSetNonConcerneTp(): void {

        $obj = new Clients2();

        $obj->setNonConcerneTp(true);
        $this->assertTrue($obj->getNonConcerneTp());
    }

    /**
     * Test setNonFacturable()
     *
     * @return void
     */
    public function testSetNonFacturable(): void {

        $obj = new Clients2();

        $obj->setNonFacturable(true);
        $this->assertTrue($obj->getNonFacturable());
    }

    /**
     * Test setPmeTarifOuRemSpe()
     *
     * @return void
     */
    public function testSetPmeTarifOuRemSpe(): void {

        $obj = new Clients2();

        $obj->setPmeTarifOuRemSpe(true);
        $this->assertTrue($obj->getPmeTarifOuRemSpe());
    }

    /**
     * Test setPrevenirMailPublier()
     *
     * @return void
     */
    public function testSetPrevenirMailPublier(): void {

        $obj = new Clients2();

        $obj->setPrevenirMailPublier(true);
        $this->assertTrue($obj->getPrevenirMailPublier());
    }

    /**
     * Test setRelevesMail()
     *
     * @return void
     */
    public function testSetRelevesMail(): void {

        $obj = new Clients2();

        $obj->setRelevesMail(true);
        $this->assertTrue($obj->getRelevesMail());
    }

    /**
     * Test setSocialComplementSuite()
     *
     * @return void
     */
    public function testSetSocialComplementSuite(): void {

        $obj = new Clients2();

        $obj->setSocialComplementSuite("socialComplementSuite");
        $this->assertEquals("socialComplementSuite", $obj->getSocialComplementSuite());
    }

    /**
     * Test setSocialZipCode()
     *
     * @return void
     */
    public function testSetSocialZipCode(): void {

        $obj = new Clients2();

        $obj->setSocialZipCode("socialZipCode");
        $this->assertEquals("socialZipCode", $obj->getSocialZipCode());
    }

    /**
     * Test setTrsArtPied()
     *
     * @return void
     */
    public function testSetTrsArtPied(): void {

        $obj = new Clients2();

        $obj->setTrsArtPied("trsArtPied");
        $this->assertEquals("trsArtPied", $obj->getTrsArtPied());
    }

    /**
     * Test setTrsArtPied2()
     *
     * @return void
     */
    public function testSetTrsArtPied2(): void {

        $obj = new Clients2();

        $obj->setTrsArtPied2("trsArtPied2");
        $this->assertEquals("trsArtPied2", $obj->getTrsArtPied2());
    }

    /**
     * Test setTrsCategMarch()
     *
     * @return void
     */
    public function testSetTrsCategMarch(): void {

        $obj = new Clients2();

        $obj->setTrsCategMarch("trsCategMarch");
        $this->assertEquals("trsCategMarch", $obj->getTrsCategMarch());
    }

    /**
     * Test setTrsCentreAna()
     *
     * @return void
     */
    public function testSetTrsCentreAna(): void {

        $obj = new Clients2();

        $obj->setTrsCentreAna("trsCentreAna");
        $this->assertEquals("trsCentreAna", $obj->getTrsCentreAna());
    }

    /**
     * Test setTrsCodeTarif1()
     *
     * @return void
     */
    public function testSetTrsCodeTarif1(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif1("trsCodeTarif1");
        $this->assertEquals("trsCodeTarif1", $obj->getTrsCodeTarif1());
    }

    /**
     * Test setTrsCodeTarif1Sens()
     *
     * @return void
     */
    public function testSetTrsCodeTarif1Sens(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif1Sens("trsCodeTarif1Sens");
        $this->assertEquals("trsCodeTarif1Sens", $obj->getTrsCodeTarif1Sens());
    }

    /**
     * Test setTrsCodeTarif2()
     *
     * @return void
     */
    public function testSetTrsCodeTarif2(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif2("trsCodeTarif2");
        $this->assertEquals("trsCodeTarif2", $obj->getTrsCodeTarif2());
    }

    /**
     * Test setTrsCodeTarif2Sens()
     *
     * @return void
     */
    public function testSetTrsCodeTarif2Sens(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif2Sens("trsCodeTarif2Sens");
        $this->assertEquals("trsCodeTarif2Sens", $obj->getTrsCodeTarif2Sens());
    }

    /**
     * Test setTrsCodeTarif3()
     *
     * @return void
     */
    public function testSetTrsCodeTarif3(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif3("trsCodeTarif3");
        $this->assertEquals("trsCodeTarif3", $obj->getTrsCodeTarif3());
    }

    /**
     * Test setTrsCodeTarif3Sens()
     *
     * @return void
     */
    public function testSetTrsCodeTarif3Sens(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif3Sens("trsCodeTarif3Sens");
        $this->assertEquals("trsCodeTarif3Sens", $obj->getTrsCodeTarif3Sens());
    }

    /**
     * Test setTrsCodeTarif4()
     *
     * @return void
     */
    public function testSetTrsCodeTarif4(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif4("trsCodeTarif4");
        $this->assertEquals("trsCodeTarif4", $obj->getTrsCodeTarif4());
    }

    /**
     * Test setTrsCodeTarif4Sens()
     *
     * @return void
     */
    public function testSetTrsCodeTarif4Sens(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif4Sens("trsCodeTarif4Sens");
        $this->assertEquals("trsCodeTarif4Sens", $obj->getTrsCodeTarif4Sens());
    }

    /**
     * Test setTrsCodeTarif5()
     *
     * @return void
     */
    public function testSetTrsCodeTarif5(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif5("trsCodeTarif5");
        $this->assertEquals("trsCodeTarif5", $obj->getTrsCodeTarif5());
    }

    /**
     * Test setTrsCodeTarif5Sens()
     *
     * @return void
     */
    public function testSetTrsCodeTarif5Sens(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif5Sens("trsCodeTarif5Sens");
        $this->assertEquals("trsCodeTarif5Sens", $obj->getTrsCodeTarif5Sens());
    }

    /**
     * Test setTrsCodeTarif6()
     *
     * @return void
     */
    public function testSetTrsCodeTarif6(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif6("trsCodeTarif6");
        $this->assertEquals("trsCodeTarif6", $obj->getTrsCodeTarif6());
    }

    /**
     * Test setTrsCodeTarif6Sens()
     *
     * @return void
     */
    public function testSetTrsCodeTarif6Sens(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarif6Sens("trsCodeTarif6Sens");
        $this->assertEquals("trsCodeTarif6Sens", $obj->getTrsCodeTarif6Sens());
    }

    /**
     * Test setTrsCodeTarifDef()
     *
     * @return void
     */
    public function testSetTrsCodeTarifDef(): void {

        $obj = new Clients2();

        $obj->setTrsCodeTarifDef(10);
        $this->assertEquals(10, $obj->getTrsCodeTarifDef());
    }

    /**
     * Test setTrsComment1()
     *
     * @return void
     */
    public function testSetTrsComment1(): void {

        $obj = new Clients2();

        $obj->setTrsComment1("trsComment1");
        $this->assertEquals("trsComment1", $obj->getTrsComment1());
    }

    /**
     * Test setTrsComment2()
     *
     * @return void
     */
    public function testSetTrsComment2(): void {

        $obj = new Clients2();

        $obj->setTrsComment2("trsComment2");
        $this->assertEquals("trsComment2", $obj->getTrsComment2());
    }

    /**
     * Test setTrsComment3()
     *
     * @return void
     */
    public function testSetTrsComment3(): void {

        $obj = new Clients2();

        $obj->setTrsComment3("trsComment3");
        $this->assertEquals("trsComment3", $obj->getTrsComment3());
    }

    /**
     * Test setTrsComment4()
     *
     * @return void
     */
    public function testSetTrsComment4(): void {

        $obj = new Clients2();

        $obj->setTrsComment4("trsComment4");
        $this->assertEquals("trsComment4", $obj->getTrsComment4());
    }

    /**
     * Test setTrsComment5()
     *
     * @return void
     */
    public function testSetTrsComment5(): void {

        $obj = new Clients2();

        $obj->setTrsComment5("trsComment5");
        $this->assertEquals("trsComment5", $obj->getTrsComment5());
    }

    /**
     * Test setTrsComment6()
     *
     * @return void
     */
    public function testSetTrsComment6(): void {

        $obj = new Clients2();

        $obj->setTrsComment6("trsComment6");
        $this->assertEquals("trsComment6", $obj->getTrsComment6());
    }

    /**
     * Test setTrsComment7()
     *
     * @return void
     */
    public function testSetTrsComment7(): void {

        $obj = new Clients2();

        $obj->setTrsComment7("trsComment7");
        $this->assertEquals("trsComment7", $obj->getTrsComment7());
    }

    /**
     * Test setTrsComment8()
     *
     * @return void
     */
    public function testSetTrsComment8(): void {

        $obj = new Clients2();

        $obj->setTrsComment8("trsComment8");
        $this->assertEquals("trsComment8", $obj->getTrsComment8());
    }

    /**
     * Test setTrsComment9()
     *
     * @return void
     */
    public function testSetTrsComment9(): void {

        $obj = new Clients2();

        $obj->setTrsComment9("trsComment9");
        $this->assertEquals("trsComment9", $obj->getTrsComment9());
    }

    /**
     * Test setTrsConsignes1()
     *
     * @return void
     */
    public function testSetTrsConsignes1(): void {

        $obj = new Clients2();

        $obj->setTrsConsignes1("trsConsignes1");
        $this->assertEquals("trsConsignes1", $obj->getTrsConsignes1());
    }

    /**
     * Test setTrsConsignes2()
     *
     * @return void
     */
    public function testSetTrsConsignes2(): void {

        $obj = new Clients2();

        $obj->setTrsConsignes2("trsConsignes2");
        $this->assertEquals("trsConsignes2", $obj->getTrsConsignes2());
    }

    /**
     * Test setTrsConsignes3()
     *
     * @return void
     */
    public function testSetTrsConsignes3(): void {

        $obj = new Clients2();

        $obj->setTrsConsignes3("trsConsignes3");
        $this->assertEquals("trsConsignes3", $obj->getTrsConsignes3());
    }

    /**
     * Test setTrsGestionPalettes()
     *
     * @return void
     */
    public function testSetTrsGestionPalettes(): void {

        $obj = new Clients2();

        $obj->setTrsGestionPalettes(true);
        $this->assertTrue($obj->getTrsGestionPalettes());
    }

    /**
     * Test setTrsMarchandiseSensible()
     *
     * @return void
     */
    public function testSetTrsMarchandiseSensible(): void {

        $obj = new Clients2();

        $obj->setTrsMarchandiseSensible(true);
        $this->assertTrue($obj->getTrsMarchandiseSensible());
    }

    /**
     * Test setTrsModeleFactureSpe()
     *
     * @return void
     */
    public function testSetTrsModeleFactureSpe(): void {

        $obj = new Clients2();

        $obj->setTrsModeleFactureSpe("trsModeleFactureSpe");
        $this->assertEquals("trsModeleFactureSpe", $obj->getTrsModeleFactureSpe());
    }

    /**
     * Test setTrsPoidsMiniPal()
     *
     * @return void
     */
    public function testSetTrsPoidsMiniPal(): void {

        $obj = new Clients2();

        $obj->setTrsPoidsMiniPal(10.092018);
        $this->assertEquals(10.092018, $obj->getTrsPoidsMiniPal());
    }

    /**
     * Test setTrsPortDuAuto()
     *
     * @return void
     */
    public function testSetTrsPortDuAuto(): void {

        $obj = new Clients2();

        $obj->setTrsPortDuAuto(true);
        $this->assertTrue($obj->getTrsPortDuAuto());
    }

    /**
     * Test setTrsSuiviCaMens()
     *
     * @return void
     */
    public function testSetTrsSuiviCaMens(): void {

        $obj = new Clients2();

        $obj->setTrsSuiviCaMens(true);
        $this->assertTrue($obj->getTrsSuiviCaMens());
    }

    /**
     * Test setTrsSuiviDtEnl()
     *
     * @return void
     */
    public function testSetTrsSuiviDtEnl(): void {

        $obj = new Clients2();

        $obj->setTrsSuiviDtEnl(true);
        $this->assertTrue($obj->getTrsSuiviDtEnl());
    }

    /**
     * Test setTrsSuiviDtLiv()
     *
     * @return void
     */
    public function testSetTrsSuiviDtLiv(): void {

        $obj = new Clients2();

        $obj->setTrsSuiviDtLiv(true);
        $this->assertTrue($obj->getTrsSuiviDtLiv());
    }

    /**
     * Test setTrsSuiviDtLivFax()
     *
     * @return void
     */
    public function testSetTrsSuiviDtLivFax(): void {

        $obj = new Clients2();

        $obj->setTrsSuiviDtLivFax("trsSuiviDtLivFax");
        $this->assertEquals("trsSuiviDtLivFax", $obj->getTrsSuiviDtLivFax());
    }

    /**
     * Test setTrsSuiviDtLivMail()
     *
     * @return void
     */
    public function testSetTrsSuiviDtLivMail(): void {

        $obj = new Clients2();

        $obj->setTrsSuiviDtLivMail("trsSuiviDtLivMail");
        $this->assertEquals("trsSuiviDtLivMail", $obj->getTrsSuiviDtLivMail());
    }

    /**
     * Test setTrsTypeClient()
     *
     * @return void
     */
    public function testSetTrsTypeClient(): void {

        $obj = new Clients2();

        $obj->setTrsTypeClient("trsTypeClient");
        $this->assertEquals("trsTypeClient", $obj->getTrsTypeClient());
    }

    /**
     * Test setTrsTypeFacturation()
     *
     * @return void
     */
    public function testSetTrsTypeFacturation(): void {

        $obj = new Clients2();

        $obj->setTrsTypeFacturation("trsTypeFacturation");
        $this->assertEquals("trsTypeFacturation", $obj->getTrsTypeFacturation());
    }

    /**
     * Test setTrsTypeTravail()
     *
     * @return void
     */
    public function testSetTrsTypeTravail(): void {

        $obj = new Clients2();

        $obj->setTrsTypeTravail("trsTypeTravail");
        $this->assertEquals("trsTypeTravail", $obj->getTrsTypeTravail());
    }

    /**
     * Test setTypeTransport1()
     *
     * @return void
     */
    public function testSetTypeTransport1(): void {

        $obj = new Clients2();

        $obj->setTypeTransport1("typeTransport1");
        $this->assertEquals("typeTransport1", $obj->getTypeTransport1());
    }

    /**
     * Test setTypeTransport2()
     *
     * @return void
     */
    public function testSetTypeTransport2(): void {

        $obj = new Clients2();

        $obj->setTypeTransport2("typeTransport2");
        $this->assertEquals("typeTransport2", $obj->getTypeTransport2());
    }

    /**
     * Test setTypeTransport3()
     *
     * @return void
     */
    public function testSetTypeTransport3(): void {

        $obj = new Clients2();

        $obj->setTypeTransport3("typeTransport3");
        $this->assertEquals("typeTransport3", $obj->getTypeTransport3());
    }

    /**
     * Test setTypeTransport4()
     *
     * @return void
     */
    public function testSetTypeTransport4(): void {

        $obj = new Clients2();

        $obj->setTypeTransport4("typeTransport4");
        $this->assertEquals("typeTransport4", $obj->getTypeTransport4());
    }

    /**
     * Test setTypeTransport5()
     *
     * @return void
     */
    public function testSetTypeTransport5(): void {

        $obj = new Clients2();

        $obj->setTypeTransport5("typeTransport5");
        $this->assertEquals("typeTransport5", $obj->getTypeTransport5());
    }

    /**
     * Test setlocalisationArchives()
     *
     * @return void
     */
    public function testSetlocalisationArchives(): void {

        $obj = new Clients2();

        $obj->setlocalisationArchives("localisationArchives");
        $this->assertEquals("localisationArchives", $obj->getlocalisationArchives());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
