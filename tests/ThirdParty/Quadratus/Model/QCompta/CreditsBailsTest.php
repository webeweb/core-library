<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CreditsBails;

/**
 * Credits bails test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CreditsBailsTest extends AbstractTestCase {

    /**
     * Tests the setAdAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetAdAmortAnterieur(): void {

        $obj = new CreditsBails();

        $obj->setAdAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur());
    }

    /**
     * Tests the setAdAmortAnterieur2() method.
     *
     * @return void
     */
    public function testSetAdAmortAnterieur2(): void {

        $obj = new CreditsBails();

        $obj->setAdAmortAnterieur2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur2());
    }

    /**
     * Tests the setAdAnneesAmort() method.
     *
     * @return void
     */
    public function testSetAdAnneesAmort(): void {

        $obj = new CreditsBails();

        $obj->setAdAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAnneesAmort());
    }

    /**
     * Tests the setAdCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetAdCoeffDegressif(): void {

        $obj = new CreditsBails();

        $obj->setAdCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAdCoeffDegressif());
    }

    /**
     * Tests the setAdDotation() method.
     *
     * @return void
     */
    public function testSetAdDotation(): void {

        $obj = new CreditsBails();

        $obj->setAdDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation());
    }

    /**
     * Tests the setAdDotation2() method.
     *
     * @return void
     */
    public function testSetAdDotation2(): void {

        $obj = new CreditsBails();

        $obj->setAdDotation2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation2());
    }

    /**
     * Tests the setAdDotationExcept() method.
     *
     * @return void
     */
    public function testSetAdDotationExcept(): void {

        $obj = new CreditsBails();

        $obj->setAdDotationExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotationExcept());
    }

    /**
     * Tests the setAdDuree() method.
     *
     * @return void
     */
    public function testSetAdDuree(): void {

        $obj = new CreditsBails();

        $obj->setAdDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDuree());
    }

    /**
     * Tests the setAdTauxLineaire() method.
     *
     * @return void
     */
    public function testSetAdTauxLineaire(): void {

        $obj = new CreditsBails();

        $obj->setAdTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAdTauxLineaire());
    }

    /**
     * Tests the setAdType() method.
     *
     * @return void
     */
    public function testSetAdType(): void {

        $obj = new CreditsBails();

        $obj->setAdType("adType");
        $this->assertEquals("adType", $obj->getAdType());
    }

    /**
     * Tests the setAfAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetAfAmortAnterieur(): void {

        $obj = new CreditsBails();

        $obj->setAfAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAmortAnterieur());
    }

    /**
     * Tests the setAfAnneesAmort() method.
     *
     * @return void
     */
    public function testSetAfAnneesAmort(): void {

        $obj = new CreditsBails();

        $obj->setAfAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAnneesAmort());
    }

    /**
     * Tests the setAfCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetAfCoeffDegressif(): void {

        $obj = new CreditsBails();

        $obj->setAfCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAfCoeffDegressif());
    }

    /**
     * Tests the setAfDotation() method.
     *
     * @return void
     */
    public function testSetAfDotation(): void {

        $obj = new CreditsBails();

        $obj->setAfDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDotation());
    }

    /**
     * Tests the setAfDuree() method.
     *
     * @return void
     */
    public function testSetAfDuree(): void {

        $obj = new CreditsBails();

        $obj->setAfDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDuree());
    }

    /**
     * Tests the setAfTauxExcept() method.
     *
     * @return void
     */
    public function testSetAfTauxExcept(): void {

        $obj = new CreditsBails();

        $obj->setAfTauxExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxExcept());
    }

    /**
     * Tests the setAfTauxLineaire() method.
     *
     * @return void
     */
    public function testSetAfTauxLineaire(): void {

        $obj = new CreditsBails();

        $obj->setAfTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxLineaire());
    }

    /**
     * Tests the setAfType() method.
     *
     * @return void
     */
    public function testSetAfType(): void {

        $obj = new CreditsBails();

        $obj->setAfType("afType");
        $this->assertEquals("afType", $obj->getAfType());
    }

    /**
     * Tests the setAfsii() method.
     *
     * @return void
     */
    public function testSetAfsii(): void {

        $obj = new CreditsBails();

        $obj->setAfsii(true);
        $this->assertEquals(true, $obj->getAfsii());
    }

    /**
     * Tests the setBaseTaxePro() method.
     *
     * @return void
     */
    public function testSetBaseTaxePro(): void {

        $obj = new CreditsBails();

        $obj->setBaseTaxePro(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTaxePro());
    }

    /**
     * Tests the setBureau() method.
     *
     * @return void
     */
    public function testSetBureau(): void {

        $obj = new CreditsBails();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Tests the setCbEnFrancs() method.
     *
     * @return void
     */
    public function testSetCbEnFrancs(): void {

        $obj = new CreditsBails();

        $obj->setCbEnFrancs(true);
        $this->assertEquals(true, $obj->getCbEnFrancs());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new CreditsBails();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setCodeJournalEcheance() method.
     *
     * @return void
     */
    public function testSetCodeJournalEcheance(): void {

        $obj = new CreditsBails();

        $obj->setCodeJournalEcheance("codeJournalEcheance");
        $this->assertEquals("codeJournalEcheance", $obj->getCodeJournalEcheance());
    }

    /**
     * Tests the setCodeJournalPaiement() method.
     *
     * @return void
     */
    public function testSetCodeJournalPaiement(): void {

        $obj = new CreditsBails();

        $obj->setCodeJournalPaiement("codeJournalPaiement");
        $this->assertEquals("codeJournalPaiement", $obj->getCodeJournalPaiement());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new CreditsBails();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCompteFrn() method.
     *
     * @return void
     */
    public function testSetCompteFrn(): void {

        $obj = new CreditsBails();

        $obj->setCompteFrn("compteFrn");
        $this->assertEquals("compteFrn", $obj->getCompteFrn());
    }

    /**
     * Tests the setCptAssurance() method.
     *
     * @return void
     */
    public function testSetCptAssurance(): void {

        $obj = new CreditsBails();

        $obj->setCptAssurance("cptAssurance");
        $this->assertEquals("cptAssurance", $obj->getCptAssurance());
    }

    /**
     * Tests the setCptCharge() method.
     *
     * @return void
     */
    public function testSetCptCharge(): void {

        $obj = new CreditsBails();

        $obj->setCptCharge("cptCharge");
        $this->assertEquals("cptCharge", $obj->getCptCharge());
    }

    /**
     * Tests the setCptEntretien() method.
     *
     * @return void
     */
    public function testSetCptEntretien(): void {

        $obj = new CreditsBails();

        $obj->setCptEntretien("cptEntretien");
        $this->assertEquals("cptEntretien", $obj->getCptEntretien());
    }

    /**
     * Tests the setCptTva() method.
     *
     * @return void
     */
    public function testSetCptTva(): void {

        $obj = new CreditsBails();

        $obj->setCptTva("cptTva");
        $this->assertEquals("cptTva", $obj->getCptTva());
    }

    /**
     * Tests the setCptTvaAssu() method.
     *
     * @return void
     */
    public function testSetCptTvaAssu(): void {

        $obj = new CreditsBails();

        $obj->setCptTvaAssu("cptTvaAssu");
        $this->assertEquals("cptTvaAssu", $obj->getCptTvaAssu());
    }

    /**
     * Tests the setCrValeurEuros() method.
     *
     * @return void
     */
    public function testSetCrValeurEuros(): void {

        $obj = new CreditsBails();

        $obj->setCrValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getCrValeurEuros());
    }

    /**
     * Tests the setCrrDate() method.
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
     * Tests the setCrrPxCessionHt() method.
     *
     * @return void
     */
    public function testSetCrrPxCessionHt(): void {

        $obj = new CreditsBails();

        $obj->setCrrPxCessionHt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrPxCessionHt());
    }

    /**
     * Tests the setCrrQteVendue() method.
     *
     * @return void
     */
    public function testSetCrrQteVendue(): void {

        $obj = new CreditsBails();

        $obj->setCrrQteVendue(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrQteVendue());
    }

    /**
     * Tests the setCrrSupplAmort() method.
     *
     * @return void
     */
    public function testSetCrrSupplAmort(): void {

        $obj = new CreditsBails();

        $obj->setCrrSupplAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplAmort());
    }

    /**
     * Tests the setCrrSupplValeur() method.
     *
     * @return void
     */
    public function testSetCrrSupplValeur(): void {

        $obj = new CreditsBails();

        $obj->setCrrSupplValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplValeur());
    }

    /**
     * Tests the setCrrType() method.
     *
     * @return void
     */
    public function testSetCrrType(): void {

        $obj = new CreditsBails();

        $obj->setCrrType("crrType");
        $this->assertEquals("crrType", $obj->getCrrType());
    }

    /**
     * Tests the setCrrpmValueCt() method.
     *
     * @return void
     */
    public function testSetCrrpmValueCt(): void {

        $obj = new CreditsBails();

        $obj->setCrrpmValueCt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueCt());
    }

    /**
     * Tests the setCrrpmValueLt() method.
     *
     * @return void
     */
    public function testSetCrrpmValueLt(): void {

        $obj = new CreditsBails();

        $obj->setCrrpmValueLt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueLt());
    }

    /**
     * Tests the setDateAcquisition() method.
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
     * Tests the setDateMiseService() method.
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
     * Tests the setDin() method.
     *
     * @return void
     */
    public function testSetDin(): void {

        $obj = new CreditsBails();

        $obj->setDin(true);
        $this->assertEquals(true, $obj->getDin());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new CreditsBails();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setGuidVehicule() method.
     *
     * @return void
     */
    public function testSetGuidVehicule(): void {

        $obj = new CreditsBails();

        $obj->setGuidVehicule("guidVehicule");
        $this->assertEquals("guidVehicule", $obj->getGuidVehicule());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new CreditsBails();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleFrn() method.
     *
     * @return void
     */
    public function testSetLibelleFrn(): void {

        $obj = new CreditsBails();

        $obj->setLibelleFrn("libelleFrn");
        $this->assertEquals("libelleFrn", $obj->getLibelleFrn());
    }

    /**
     * Tests the setLimiteAmort() method.
     *
     * @return void
     */
    public function testSetLimiteAmort(): void {

        $obj = new CreditsBails();

        $obj->setLimiteAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getLimiteAmort());
    }

    /**
     * Tests the setMateriauxAgricole() method.
     *
     * @return void
     */
    public function testSetMateriauxAgricole(): void {

        $obj = new CreditsBails();

        $obj->setMateriauxAgricole(true);
        $this->assertEquals(true, $obj->getMateriauxAgricole());
    }

    /**
     * Tests the setMontantTva() method.
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new CreditsBails();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests the setNatureAnalytique() method.
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new CreditsBails();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests the setNumDeuxImmoRachat() method.
     *
     * @return void
     */
    public function testSetNumDeuxImmoRachat(): void {

        $obj = new CreditsBails();

        $obj->setNumDeuxImmoRachat(10);
        $this->assertEquals(10, $obj->getNumDeuxImmoRachat());
    }

    /**
     * Tests the setNumImmoRachat() method.
     *
     * @return void
     */
    public function testSetNumImmoRachat(): void {

        $obj = new CreditsBails();

        $obj->setNumImmoRachat(10);
        $this->assertEquals(10, $obj->getNumImmoRachat());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new CreditsBails();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new CreditsBails();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDeux() method.
     *
     * @return void
     */
    public function testSetNumeroDeux(): void {

        $obj = new CreditsBails();

        $obj->setNumeroDeux(10);
        $this->assertEquals(10, $obj->getNumeroDeux());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new CreditsBails();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new CreditsBails();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new CreditsBails();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setTaxeFonciere() method.
     *
     * @return void
     */
    public function testSetTaxeFonciere(): void {

        $obj = new CreditsBails();

        $obj->setTaxeFonciere(true);
        $this->assertEquals(true, $obj->getTaxeFonciere());
    }

    /**
     * Tests the setTaxePro() method.
     *
     * @return void
     */
    public function testSetTaxePro(): void {

        $obj = new CreditsBails();

        $obj->setTaxePro(true);
        $this->assertEquals(true, $obj->getTaxePro());
    }

    /**
     * Tests the setTpDuree() method.
     *
     * @return void
     */
    public function testSetTpDuree(): void {

        $obj = new CreditsBails();

        $obj->setTpDuree(10);
        $this->assertEquals(10, $obj->getTpDuree());
    }

    /**
     * Tests the setTpEchoirEchu() method.
     *
     * @return void
     */
    public function testSetTpEchoirEchu(): void {

        $obj = new CreditsBails();

        $obj->setTpEchoirEchu("tpEchoirEchu");
        $this->assertEquals("tpEchoirEchu", $obj->getTpEchoirEchu());
    }

    /**
     * Tests the setTpMoisAnnee() method.
     *
     * @return void
     */
    public function testSetTpMoisAnnee(): void {

        $obj = new CreditsBails();

        $obj->setTpMoisAnnee("tpMoisAnnee");
        $this->assertEquals("tpMoisAnnee", $obj->getTpMoisAnnee());
    }

    /**
     * Tests the setTpMonttDepot() method.
     *
     * @return void
     */
    public function testSetTpMonttDepot(): void {

        $obj = new CreditsBails();

        $obj->setTpMonttDepot(10.092018);
        $this->assertEquals(10.092018, $obj->getTpMonttDepot());
    }

    /**
     * Tests the setTpPeriodicite() method.
     *
     * @return void
     */
    public function testSetTpPeriodicite(): void {

        $obj = new CreditsBails();

        $obj->setTpPeriodicite("tpPeriodicite");
        $this->assertEquals("tpPeriodicite", $obj->getTpPeriodicite());
    }

    /**
     * Tests the setTpPremierPaiement() method.
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
     * Tests the setValeurEuros() method.
     *
     * @return void
     */
    public function testSetValeurEuros(): void {

        $obj = new CreditsBails();

        $obj->setValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurEuros());
    }

    /**
     * Tests the setValeurHt() method.
     *
     * @return void
     */
    public function testSetValeurHt(): void {

        $obj = new CreditsBails();

        $obj->setValeurHt(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHt());
    }

    /**
     * Tests the __construct() method.
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
