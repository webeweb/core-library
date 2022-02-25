<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\CreditsBails;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Credits bails test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CreditsBailsTest extends AbstractTestCase {

    /**
     * Tests setAdAmortAnterieur()
     *
     * @return void
     */
    public function testSetAdAmortAnterieur(): void {

        $obj = new CreditsBails();

        $obj->setAdAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur());
    }

    /**
     * Tests setAdAmortAnterieur2()
     *
     * @return void
     */
    public function testSetAdAmortAnterieur2(): void {

        $obj = new CreditsBails();

        $obj->setAdAmortAnterieur2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur2());
    }

    /**
     * Tests setAdAnneesAmort()
     *
     * @return void
     */
    public function testSetAdAnneesAmort(): void {

        $obj = new CreditsBails();

        $obj->setAdAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAnneesAmort());
    }

    /**
     * Tests setAdCoeffDegressif()
     *
     * @return void
     */
    public function testSetAdCoeffDegressif(): void {

        $obj = new CreditsBails();

        $obj->setAdCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAdCoeffDegressif());
    }

    /**
     * Tests setAdDotation()
     *
     * @return void
     */
    public function testSetAdDotation(): void {

        $obj = new CreditsBails();

        $obj->setAdDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation());
    }

    /**
     * Tests setAdDotation2()
     *
     * @return void
     */
    public function testSetAdDotation2(): void {

        $obj = new CreditsBails();

        $obj->setAdDotation2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation2());
    }

    /**
     * Tests setAdDotationExcept()
     *
     * @return void
     */
    public function testSetAdDotationExcept(): void {

        $obj = new CreditsBails();

        $obj->setAdDotationExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotationExcept());
    }

    /**
     * Tests setAdDuree()
     *
     * @return void
     */
    public function testSetAdDuree(): void {

        $obj = new CreditsBails();

        $obj->setAdDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDuree());
    }

    /**
     * Tests setAdTauxLineaire()
     *
     * @return void
     */
    public function testSetAdTauxLineaire(): void {

        $obj = new CreditsBails();

        $obj->setAdTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAdTauxLineaire());
    }

    /**
     * Tests setAdType()
     *
     * @return void
     */
    public function testSetAdType(): void {

        $obj = new CreditsBails();

        $obj->setAdType("adType");
        $this->assertEquals("adType", $obj->getAdType());
    }

    /**
     * Tests setAfAmortAnterieur()
     *
     * @return void
     */
    public function testSetAfAmortAnterieur(): void {

        $obj = new CreditsBails();

        $obj->setAfAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAmortAnterieur());
    }

    /**
     * Tests setAfAnneesAmort()
     *
     * @return void
     */
    public function testSetAfAnneesAmort(): void {

        $obj = new CreditsBails();

        $obj->setAfAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAnneesAmort());
    }

    /**
     * Tests setAfCoeffDegressif()
     *
     * @return void
     */
    public function testSetAfCoeffDegressif(): void {

        $obj = new CreditsBails();

        $obj->setAfCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAfCoeffDegressif());
    }

    /**
     * Tests setAfDotation()
     *
     * @return void
     */
    public function testSetAfDotation(): void {

        $obj = new CreditsBails();

        $obj->setAfDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDotation());
    }

    /**
     * Tests setAfDuree()
     *
     * @return void
     */
    public function testSetAfDuree(): void {

        $obj = new CreditsBails();

        $obj->setAfDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDuree());
    }

    /**
     * Tests setAfTauxExcept()
     *
     * @return void
     */
    public function testSetAfTauxExcept(): void {

        $obj = new CreditsBails();

        $obj->setAfTauxExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxExcept());
    }

    /**
     * Tests setAfTauxLineaire()
     *
     * @return void
     */
    public function testSetAfTauxLineaire(): void {

        $obj = new CreditsBails();

        $obj->setAfTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxLineaire());
    }

    /**
     * Tests setAfType()
     *
     * @return void
     */
    public function testSetAfType(): void {

        $obj = new CreditsBails();

        $obj->setAfType("afType");
        $this->assertEquals("afType", $obj->getAfType());
    }

    /**
     * Tests setAfsii()
     *
     * @return void
     */
    public function testSetAfsii(): void {

        $obj = new CreditsBails();

        $obj->setAfsii(true);
        $this->assertEquals(true, $obj->getAfsii());
    }

    /**
     * Tests setBaseTaxePro()
     *
     * @return void
     */
    public function testSetBaseTaxePro(): void {

        $obj = new CreditsBails();

        $obj->setBaseTaxePro(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTaxePro());
    }

    /**
     * Tests setBureau()
     *
     * @return void
     */
    public function testSetBureau(): void {

        $obj = new CreditsBails();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Tests setCbEnFrancs()
     *
     * @return void
     */
    public function testSetCbEnFrancs(): void {

        $obj = new CreditsBails();

        $obj->setCbEnFrancs(true);
        $this->assertEquals(true, $obj->getCbEnFrancs());
    }

    /**
     * Tests setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new CreditsBails();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests setCodeJournalEcheance()
     *
     * @return void
     */
    public function testSetCodeJournalEcheance(): void {

        $obj = new CreditsBails();

        $obj->setCodeJournalEcheance("codeJournalEcheance");
        $this->assertEquals("codeJournalEcheance", $obj->getCodeJournalEcheance());
    }

    /**
     * Tests setCodeJournalPaiement()
     *
     * @return void
     */
    public function testSetCodeJournalPaiement(): void {

        $obj = new CreditsBails();

        $obj->setCodeJournalPaiement("codeJournalPaiement");
        $this->assertEquals("codeJournalPaiement", $obj->getCodeJournalPaiement());
    }

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new CreditsBails();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests setCompteFrn()
     *
     * @return void
     */
    public function testSetCompteFrn(): void {

        $obj = new CreditsBails();

        $obj->setCompteFrn("compteFrn");
        $this->assertEquals("compteFrn", $obj->getCompteFrn());
    }

    /**
     * Tests setCptAssurance()
     *
     * @return void
     */
    public function testSetCptAssurance(): void {

        $obj = new CreditsBails();

        $obj->setCptAssurance("cptAssurance");
        $this->assertEquals("cptAssurance", $obj->getCptAssurance());
    }

    /**
     * Tests setCptCharge()
     *
     * @return void
     */
    public function testSetCptCharge(): void {

        $obj = new CreditsBails();

        $obj->setCptCharge("cptCharge");
        $this->assertEquals("cptCharge", $obj->getCptCharge());
    }

    /**
     * Tests setCptEntretien()
     *
     * @return void
     */
    public function testSetCptEntretien(): void {

        $obj = new CreditsBails();

        $obj->setCptEntretien("cptEntretien");
        $this->assertEquals("cptEntretien", $obj->getCptEntretien());
    }

    /**
     * Tests setCptTva()
     *
     * @return void
     */
    public function testSetCptTva(): void {

        $obj = new CreditsBails();

        $obj->setCptTva("cptTva");
        $this->assertEquals("cptTva", $obj->getCptTva());
    }

    /**
     * Tests setCptTvaAssu()
     *
     * @return void
     */
    public function testSetCptTvaAssu(): void {

        $obj = new CreditsBails();

        $obj->setCptTvaAssu("cptTvaAssu");
        $this->assertEquals("cptTvaAssu", $obj->getCptTvaAssu());
    }

    /**
     * Tests setCrValeurEuros()
     *
     * @return void
     */
    public function testSetCrValeurEuros(): void {

        $obj = new CreditsBails();

        $obj->setCrValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getCrValeurEuros());
    }

    /**
     * Tests setCrrDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCrrDate(): void {

        // Set a Date/time mock.
        $crrDate = new DateTime("2018-09-10");

        $obj = new CreditsBails();

        $obj->setCrrDate($crrDate);
        $this->assertSame($crrDate, $obj->getCrrDate());
    }

    /**
     * Tests setCrrPxCessionHt()
     *
     * @return void
     */
    public function testSetCrrPxCessionHt(): void {

        $obj = new CreditsBails();

        $obj->setCrrPxCessionHt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrPxCessionHt());
    }

    /**
     * Tests setCrrQteVendue()
     *
     * @return void
     */
    public function testSetCrrQteVendue(): void {

        $obj = new CreditsBails();

        $obj->setCrrQteVendue(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrQteVendue());
    }

    /**
     * Tests setCrrSupplAmort()
     *
     * @return void
     */
    public function testSetCrrSupplAmort(): void {

        $obj = new CreditsBails();

        $obj->setCrrSupplAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplAmort());
    }

    /**
     * Tests setCrrSupplValeur()
     *
     * @return void
     */
    public function testSetCrrSupplValeur(): void {

        $obj = new CreditsBails();

        $obj->setCrrSupplValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplValeur());
    }

    /**
     * Tests setCrrType()
     *
     * @return void
     */
    public function testSetCrrType(): void {

        $obj = new CreditsBails();

        $obj->setCrrType("crrType");
        $this->assertEquals("crrType", $obj->getCrrType());
    }

    /**
     * Tests setCrrpmValueCt()
     *
     * @return void
     */
    public function testSetCrrpmValueCt(): void {

        $obj = new CreditsBails();

        $obj->setCrrpmValueCt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueCt());
    }

    /**
     * Tests setCrrpmValueLt()
     *
     * @return void
     */
    public function testSetCrrpmValueLt(): void {

        $obj = new CreditsBails();

        $obj->setCrrpmValueLt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueLt());
    }

    /**
     * Tests setDateAcquisition()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition(): void {

        // Set a Date/time mock.
        $dateAcquisition = new DateTime("2018-09-10");

        $obj = new CreditsBails();

        $obj->setDateAcquisition($dateAcquisition);
        $this->assertSame($dateAcquisition, $obj->getDateAcquisition());
    }

    /**
     * Tests setDateMiseService()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMiseService(): void {

        // Set a Date/time mock.
        $dateMiseService = new DateTime("2018-09-10");

        $obj = new CreditsBails();

        $obj->setDateMiseService($dateMiseService);
        $this->assertSame($dateMiseService, $obj->getDateMiseService());
    }

    /**
     * Tests setDin()
     *
     * @return void
     */
    public function testSetDin(): void {

        $obj = new CreditsBails();

        $obj->setDin(true);
        $this->assertEquals(true, $obj->getDin());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new CreditsBails();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setGuidVehicule()
     *
     * @return void
     */
    public function testSetGuidVehicule(): void {

        $obj = new CreditsBails();

        $obj->setGuidVehicule("guidVehicule");
        $this->assertEquals("guidVehicule", $obj->getGuidVehicule());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new CreditsBails();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLibelleFrn()
     *
     * @return void
     */
    public function testSetLibelleFrn(): void {

        $obj = new CreditsBails();

        $obj->setLibelleFrn("libelleFrn");
        $this->assertEquals("libelleFrn", $obj->getLibelleFrn());
    }

    /**
     * Tests setLimiteAmort()
     *
     * @return void
     */
    public function testSetLimiteAmort(): void {

        $obj = new CreditsBails();

        $obj->setLimiteAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getLimiteAmort());
    }

    /**
     * Tests setMateriauxAgricole()
     *
     * @return void
     */
    public function testSetMateriauxAgricole(): void {

        $obj = new CreditsBails();

        $obj->setMateriauxAgricole(true);
        $this->assertEquals(true, $obj->getMateriauxAgricole());
    }

    /**
     * Tests setMontantTva()
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new CreditsBails();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new CreditsBails();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests setNumDeuxImmoRachat()
     *
     * @return void
     */
    public function testSetNumDeuxImmoRachat(): void {

        $obj = new CreditsBails();

        $obj->setNumDeuxImmoRachat(10);
        $this->assertEquals(10, $obj->getNumDeuxImmoRachat());
    }

    /**
     * Tests setNumImmoRachat()
     *
     * @return void
     */
    public function testSetNumImmoRachat(): void {

        $obj = new CreditsBails();

        $obj->setNumImmoRachat(10);
        $this->assertEquals(10, $obj->getNumImmoRachat());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new CreditsBails();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new CreditsBails();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setNumeroDeux()
     *
     * @return void
     */
    public function testSetNumeroDeux(): void {

        $obj = new CreditsBails();

        $obj->setNumeroDeux(10);
        $this->assertEquals(10, $obj->getNumeroDeux());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new CreditsBails();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new CreditsBails();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new CreditsBails();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests setTaxeFonciere()
     *
     * @return void
     */
    public function testSetTaxeFonciere(): void {

        $obj = new CreditsBails();

        $obj->setTaxeFonciere(true);
        $this->assertEquals(true, $obj->getTaxeFonciere());
    }

    /**
     * Tests setTaxePro()
     *
     * @return void
     */
    public function testSetTaxePro(): void {

        $obj = new CreditsBails();

        $obj->setTaxePro(true);
        $this->assertEquals(true, $obj->getTaxePro());
    }

    /**
     * Tests setTpDuree()
     *
     * @return void
     */
    public function testSetTpDuree(): void {

        $obj = new CreditsBails();

        $obj->setTpDuree(10);
        $this->assertEquals(10, $obj->getTpDuree());
    }

    /**
     * Tests setTpEchoirEchu()
     *
     * @return void
     */
    public function testSetTpEchoirEchu(): void {

        $obj = new CreditsBails();

        $obj->setTpEchoirEchu("tpEchoirEchu");
        $this->assertEquals("tpEchoirEchu", $obj->getTpEchoirEchu());
    }

    /**
     * Tests setTpMoisAnnee()
     *
     * @return void
     */
    public function testSetTpMoisAnnee(): void {

        $obj = new CreditsBails();

        $obj->setTpMoisAnnee("tpMoisAnnee");
        $this->assertEquals("tpMoisAnnee", $obj->getTpMoisAnnee());
    }

    /**
     * Tests setTpMonttDepot()
     *
     * @return void
     */
    public function testSetTpMonttDepot(): void {

        $obj = new CreditsBails();

        $obj->setTpMonttDepot(10.092018);
        $this->assertEquals(10.092018, $obj->getTpMonttDepot());
    }

    /**
     * Tests setTpPeriodicite()
     *
     * @return void
     */
    public function testSetTpPeriodicite(): void {

        $obj = new CreditsBails();

        $obj->setTpPeriodicite("tpPeriodicite");
        $this->assertEquals("tpPeriodicite", $obj->getTpPeriodicite());
    }

    /**
     * Tests setTpPremierPaiement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTpPremierPaiement(): void {

        // Set a Date/time mock.
        $tpPremierPaiement = new DateTime("2018-09-10");

        $obj = new CreditsBails();

        $obj->setTpPremierPaiement($tpPremierPaiement);
        $this->assertSame($tpPremierPaiement, $obj->getTpPremierPaiement());
    }

    /**
     * Tests setValeurEuros()
     *
     * @return void
     */
    public function testSetValeurEuros(): void {

        $obj = new CreditsBails();

        $obj->setValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurEuros());
    }

    /**
     * Tests setValeurHt()
     *
     * @return void
     */
    public function testSetValeurHt(): void {

        $obj = new CreditsBails();

        $obj->setValeurHt(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHt());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CreditsBails();

        $this->assertNull($obj->getAdAmortAnterieur());
        $this->assertNull($obj->getAdAmortAnterieur2());
        $this->assertNull($obj->getAdAnneesAmort());
        $this->assertNull($obj->getAdCoeffDegressif());
        $this->assertNull($obj->getAdDotation());
        $this->assertNull($obj->getAdDotation2());
        $this->assertNull($obj->getAdDotationExcept());
        $this->assertNull($obj->getAdDuree());
        $this->assertNull($obj->getAdTauxLineaire());
        $this->assertNull($obj->getAdType());
        $this->assertNull($obj->getAfAmortAnterieur());
        $this->assertNull($obj->getAfAnneesAmort());
        $this->assertNull($obj->getAfCoeffDegressif());
        $this->assertNull($obj->getAfDotation());
        $this->assertNull($obj->getAfDuree());
        $this->assertNull($obj->getAfsii());
        $this->assertNull($obj->getAfTauxExcept());
        $this->assertNull($obj->getAfTauxLineaire());
        $this->assertNull($obj->getAfType());
        $this->assertNull($obj->getBaseTaxePro());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCbEnFrancs());
        $this->assertNull($obj->getCrrDate());
        $this->assertNull($obj->getCrrpmValueCt());
        $this->assertNull($obj->getCrrpmValueLt());
        $this->assertNull($obj->getCrrPxCessionHt());
        $this->assertNull($obj->getCrrQteVendue());
        $this->assertNull($obj->getCrrSupplAmort());
        $this->assertNull($obj->getCrrSupplValeur());
        $this->assertNull($obj->getCrrType());
        $this->assertNull($obj->getCrValeurEuros());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeJournalEcheance());
        $this->assertNull($obj->getCodeJournalPaiement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getCptAssurance());
        $this->assertNull($obj->getCptCharge());
        $this->assertNull($obj->getCptEntretien());
        $this->assertNull($obj->getCptTva());
        $this->assertNull($obj->getCptTvaAssu());
        $this->assertNull($obj->getDin());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getLimiteAmort());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNumDeuxImmoRachat());
        $this->assertNull($obj->getNumImmoRachat());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getTpDuree());
        $this->assertNull($obj->getTpEchoirEchu());
        $this->assertNull($obj->getTpMoisAnnee());
        $this->assertNull($obj->getTpMonttDepot());
        $this->assertNull($obj->getTpPeriodicite());
        $this->assertNull($obj->getTpPremierPaiement());
        $this->assertNull($obj->getTaxeFonciere());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getValeurEuros());
        $this->assertNull($obj->getValeurHt());
    }
}
