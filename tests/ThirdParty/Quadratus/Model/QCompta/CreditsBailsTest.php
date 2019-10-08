<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
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
 * Credits bails model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CreditsBailsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CreditsBails();

        $this->assertNull($obj->getADAmortAnterieur());
        $this->assertNull($obj->getADAmortAnterieur2());
        $this->assertNull($obj->getADAnneesAmort());
        $this->assertNull($obj->getADCoeffDegressif());
        $this->assertNull($obj->getADDotation());
        $this->assertNull($obj->getADDotation2());
        $this->assertNull($obj->getADDotationExcept());
        $this->assertNull($obj->getADDuree());
        $this->assertNull($obj->getADTauxLineaire());
        $this->assertNull($obj->getADType());
        $this->assertNull($obj->getAFAmortAnterieur());
        $this->assertNull($obj->getAFAnneesAmort());
        $this->assertNull($obj->getAFCoeffDegressif());
        $this->assertNull($obj->getAFDotation());
        $this->assertNull($obj->getAFDuree());
        $this->assertNull($obj->getAFSII());
        $this->assertNull($obj->getAFTauxExcept());
        $this->assertNull($obj->getAFTauxLineaire());
        $this->assertNull($obj->getAFType());
        $this->assertNull($obj->getBaseTaxePro());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCBEnFrancs());
        $this->assertNull($obj->getCRRDate());
        $this->assertNull($obj->getCRRPMValueCT());
        $this->assertNull($obj->getCRRPMValueLT());
        $this->assertNull($obj->getCRRPxCessionHT());
        $this->assertNull($obj->getCRRQteVendue());
        $this->assertNull($obj->getCRRSupplAmort());
        $this->assertNull($obj->getCRRSupplValeur());
        $this->assertNull($obj->getCRRType());
        $this->assertNull($obj->getCRValeurEuros());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeJournalEcheance());
        $this->assertNull($obj->getCodeJournalPaiement());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getCptAssurance());
        $this->assertNull($obj->getCptCharge());
        $this->assertNull($obj->getCptEntretien());
        $this->assertNull($obj->getCptTVA());
        $this->assertNull($obj->getCptTVAAssu());
        $this->assertNull($obj->getDIN());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getLimiteAmort());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTVA());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNumDeuxImmoRachat());
        $this->assertNull($obj->getNumImmoRachat());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getNumeroPJ());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getTPDuree());
        $this->assertNull($obj->getTPEchoirEchu());
        $this->assertNull($obj->getTPMoisAnnee());
        $this->assertNull($obj->getTPMonttDepot());
        $this->assertNull($obj->getTPPeriodicite());
        $this->assertNull($obj->getTPPremierPaiement());
        $this->assertNull($obj->getTaxeFonciere());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getValeurEuros());
        $this->assertNull($obj->getValeurHT());
    }

    /**
     * Tests the setADAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetADAmortAnterieur() {

        $obj = new CreditsBails();

        $obj->setADAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getADAmortAnterieur());
    }

    /**
     * Tests the setADAmortAnterieur2() method.
     *
     * @return void
     */
    public function testSetADAmortAnterieur2() {

        $obj = new CreditsBails();

        $obj->setADAmortAnterieur2(10.092018);
        $this->assertEquals(10.092018, $obj->getADAmortAnterieur2());
    }

    /**
     * Tests the setADAnneesAmort() method.
     *
     * @return void
     */
    public function testSetADAnneesAmort() {

        $obj = new CreditsBails();

        $obj->setADAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getADAnneesAmort());
    }

    /**
     * Tests the setADCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetADCoeffDegressif() {

        $obj = new CreditsBails();

        $obj->setADCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getADCoeffDegressif());
    }

    /**
     * Tests the setADDotation() method.
     *
     * @return void
     */
    public function testSetADDotation() {

        $obj = new CreditsBails();

        $obj->setADDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getADDotation());
    }

    /**
     * Tests the setADDotation2() method.
     *
     * @return void
     */
    public function testSetADDotation2() {

        $obj = new CreditsBails();

        $obj->setADDotation2(10.092018);
        $this->assertEquals(10.092018, $obj->getADDotation2());
    }

    /**
     * Tests the setADDotationExcept() method.
     *
     * @return void
     */
    public function testSetADDotationExcept() {

        $obj = new CreditsBails();

        $obj->setADDotationExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getADDotationExcept());
    }

    /**
     * Tests the setADDuree() method.
     *
     * @return void
     */
    public function testSetADDuree() {

        $obj = new CreditsBails();

        $obj->setADDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getADDuree());
    }

    /**
     * Tests the setADTauxLineaire() method.
     *
     * @return void
     */
    public function testSetADTauxLineaire() {

        $obj = new CreditsBails();

        $obj->setADTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getADTauxLineaire());
    }

    /**
     * Tests the setADType() method.
     *
     * @return void
     */
    public function testSetADType() {

        $obj = new CreditsBails();

        $obj->setADType("aDType");
        $this->assertEquals("aDType", $obj->getADType());
    }

    /**
     * Tests the setAFAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetAFAmortAnterieur() {

        $obj = new CreditsBails();

        $obj->setAFAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAFAmortAnterieur());
    }

    /**
     * Tests the setAFAnneesAmort() method.
     *
     * @return void
     */
    public function testSetAFAnneesAmort() {

        $obj = new CreditsBails();

        $obj->setAFAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAFAnneesAmort());
    }

    /**
     * Tests the setAFCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetAFCoeffDegressif() {

        $obj = new CreditsBails();

        $obj->setAFCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAFCoeffDegressif());
    }

    /**
     * Tests the setAFDotation() method.
     *
     * @return void
     */
    public function testSetAFDotation() {

        $obj = new CreditsBails();

        $obj->setAFDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAFDotation());
    }

    /**
     * Tests the setAFDuree() method.
     *
     * @return void
     */
    public function testSetAFDuree() {

        $obj = new CreditsBails();

        $obj->setAFDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAFDuree());
    }

    /**
     * Tests the setAFSII() method.
     *
     * @return void
     */
    public function testSetAFSII() {

        $obj = new CreditsBails();

        $obj->setAFSII(true);
        $this->assertEquals(true, $obj->getAFSII());
    }

    /**
     * Tests the setAFTauxExcept() method.
     *
     * @return void
     */
    public function testSetAFTauxExcept() {

        $obj = new CreditsBails();

        $obj->setAFTauxExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAFTauxExcept());
    }

    /**
     * Tests the setAFTauxLineaire() method.
     *
     * @return void
     */
    public function testSetAFTauxLineaire() {

        $obj = new CreditsBails();

        $obj->setAFTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAFTauxLineaire());
    }

    /**
     * Tests the setAFType() method.
     *
     * @return void
     */
    public function testSetAFType() {

        $obj = new CreditsBails();

        $obj->setAFType("aFType");
        $this->assertEquals("aFType", $obj->getAFType());
    }

    /**
     * Tests the setBaseTaxePro() method.
     *
     * @return void
     */
    public function testSetBaseTaxePro() {

        $obj = new CreditsBails();

        $obj->setBaseTaxePro(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTaxePro());
    }

    /**
     * Tests the setBureau() method.
     *
     * @return void
     */
    public function testSetBureau() {

        $obj = new CreditsBails();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Tests the setCBEnFrancs() method.
     *
     * @return void
     */
    public function testSetCBEnFrancs() {

        $obj = new CreditsBails();

        $obj->setCBEnFrancs(true);
        $this->assertEquals(true, $obj->getCBEnFrancs());
    }

    /**
     * Tests the setCRRDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCRRDate() {

        $obj = new CreditsBails();

        $obj->setCRRDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getCRRDate());
    }

    /**
     * Tests the setCRRPMValueCT() method.
     *
     * @return void
     */
    public function testSetCRRPMValueCT() {

        $obj = new CreditsBails();

        $obj->setCRRPMValueCT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPMValueCT());
    }

    /**
     * Tests the setCRRPMValueLT() method.
     *
     * @return void
     */
    public function testSetCRRPMValueLT() {

        $obj = new CreditsBails();

        $obj->setCRRPMValueLT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPMValueLT());
    }

    /**
     * Tests the setCRRPxCessionHT() method.
     *
     * @return void
     */
    public function testSetCRRPxCessionHT() {

        $obj = new CreditsBails();

        $obj->setCRRPxCessionHT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPxCessionHT());
    }

    /**
     * Tests the setCRRQteVendue() method.
     *
     * @return void
     */
    public function testSetCRRQteVendue() {

        $obj = new CreditsBails();

        $obj->setCRRQteVendue(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRQteVendue());
    }

    /**
     * Tests the setCRRSupplAmort() method.
     *
     * @return void
     */
    public function testSetCRRSupplAmort() {

        $obj = new CreditsBails();

        $obj->setCRRSupplAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRSupplAmort());
    }

    /**
     * Tests the setCRRSupplValeur() method.
     *
     * @return void
     */
    public function testSetCRRSupplValeur() {

        $obj = new CreditsBails();

        $obj->setCRRSupplValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRSupplValeur());
    }

    /**
     * Tests the setCRRType() method.
     *
     * @return void
     */
    public function testSetCRRType() {

        $obj = new CreditsBails();

        $obj->setCRRType("cRRType");
        $this->assertEquals("cRRType", $obj->getCRRType());
    }

    /**
     * Tests the setCRValeurEuros() method.
     *
     * @return void
     */
    public function testSetCRValeurEuros() {

        $obj = new CreditsBails();

        $obj->setCRValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getCRValeurEuros());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new CreditsBails();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setCodeJournalEcheance() method.
     *
     * @return void
     */
    public function testSetCodeJournalEcheance() {

        $obj = new CreditsBails();

        $obj->setCodeJournalEcheance("codeJournalEcheance");
        $this->assertEquals("codeJournalEcheance", $obj->getCodeJournalEcheance());
    }

    /**
     * Tests the setCodeJournalPaiement() method.
     *
     * @return void
     */
    public function testSetCodeJournalPaiement() {

        $obj = new CreditsBails();

        $obj->setCodeJournalPaiement("codeJournalPaiement");
        $this->assertEquals("codeJournalPaiement", $obj->getCodeJournalPaiement());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new CreditsBails();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setCompteFrn() method.
     *
     * @return void
     */
    public function testSetCompteFrn() {

        $obj = new CreditsBails();

        $obj->setCompteFrn("compteFrn");
        $this->assertEquals("compteFrn", $obj->getCompteFrn());
    }

    /**
     * Tests the setCptAssurance() method.
     *
     * @return void
     */
    public function testSetCptAssurance() {

        $obj = new CreditsBails();

        $obj->setCptAssurance("cptAssurance");
        $this->assertEquals("cptAssurance", $obj->getCptAssurance());
    }

    /**
     * Tests the setCptCharge() method.
     *
     * @return void
     */
    public function testSetCptCharge() {

        $obj = new CreditsBails();

        $obj->setCptCharge("cptCharge");
        $this->assertEquals("cptCharge", $obj->getCptCharge());
    }

    /**
     * Tests the setCptEntretien() method.
     *
     * @return void
     */
    public function testSetCptEntretien() {

        $obj = new CreditsBails();

        $obj->setCptEntretien("cptEntretien");
        $this->assertEquals("cptEntretien", $obj->getCptEntretien());
    }

    /**
     * Tests the setCptTVA() method.
     *
     * @return void
     */
    public function testSetCptTVA() {

        $obj = new CreditsBails();

        $obj->setCptTVA("cptTVA");
        $this->assertEquals("cptTVA", $obj->getCptTVA());
    }

    /**
     * Tests the setCptTVAAssu() method.
     *
     * @return void
     */
    public function testSetCptTVAAssu() {

        $obj = new CreditsBails();

        $obj->setCptTVAAssu("cptTVAAssu");
        $this->assertEquals("cptTVAAssu", $obj->getCptTVAAssu());
    }

    /**
     * Tests the setDIN() method.
     *
     * @return void
     */
    public function testSetDIN() {

        $obj = new CreditsBails();

        $obj->setDIN(true);
        $this->assertEquals(true, $obj->getDIN());
    }

    /**
     * Tests the setDateAcquisition() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition() {

        $obj = new CreditsBails();

        $obj->setDateAcquisition(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAcquisition());
    }

    /**
     * Tests the setDateMiseService() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMiseService() {

        $obj = new CreditsBails();

        $obj->setDateMiseService(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateMiseService());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new CreditsBails();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setGuidVehicule() method.
     *
     * @return void
     */
    public function testSetGuidVehicule() {

        $obj = new CreditsBails();

        $obj->setGuidVehicule("guidVehicule");
        $this->assertEquals("guidVehicule", $obj->getGuidVehicule());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new CreditsBails();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleFrn() method.
     *
     * @return void
     */
    public function testSetLibelleFrn() {

        $obj = new CreditsBails();

        $obj->setLibelleFrn("libelleFrn");
        $this->assertEquals("libelleFrn", $obj->getLibelleFrn());
    }

    /**
     * Tests the setLimiteAmort() method.
     *
     * @return void
     */
    public function testSetLimiteAmort() {

        $obj = new CreditsBails();

        $obj->setLimiteAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getLimiteAmort());
    }

    /**
     * Tests the setMateriauxAgricole() method.
     *
     * @return void
     */
    public function testSetMateriauxAgricole() {

        $obj = new CreditsBails();

        $obj->setMateriauxAgricole(true);
        $this->assertEquals(true, $obj->getMateriauxAgricole());
    }

    /**
     * Tests the setMontantTVA() method.
     *
     * @return void
     */
    public function testSetMontantTVA() {

        $obj = new CreditsBails();

        $obj->setMontantTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTVA());
    }

    /**
     * Tests the setNatureAnalytique() method.
     *
     * @return void
     */
    public function testSetNatureAnalytique() {

        $obj = new CreditsBails();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests the setNumDeuxImmoRachat() method.
     *
     * @return void
     */
    public function testSetNumDeuxImmoRachat() {

        $obj = new CreditsBails();

        $obj->setNumDeuxImmoRachat(10);
        $this->assertEquals(10, $obj->getNumDeuxImmoRachat());
    }

    /**
     * Tests the setNumImmoRachat() method.
     *
     * @return void
     */
    public function testSetNumImmoRachat() {

        $obj = new CreditsBails();

        $obj->setNumImmoRachat(10);
        $this->assertEquals(10, $obj->getNumImmoRachat());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new CreditsBails();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new CreditsBails();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDeux() method.
     *
     * @return void
     */
    public function testSetNumeroDeux() {

        $obj = new CreditsBails();

        $obj->setNumeroDeux(10);
        $this->assertEquals(10, $obj->getNumeroDeux());
    }

    /**
     * Tests the setNumeroPJ() method.
     *
     * @return void
     */
    public function testSetNumeroPJ() {

        $obj = new CreditsBails();

        $obj->setNumeroPJ(10);
        $this->assertEquals(10, $obj->getNumeroPJ());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new CreditsBails();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new CreditsBails();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setTPDuree() method.
     *
     * @return void
     */
    public function testSetTPDuree() {

        $obj = new CreditsBails();

        $obj->setTPDuree(10);
        $this->assertEquals(10, $obj->getTPDuree());
    }

    /**
     * Tests the setTPEchoirEchu() method.
     *
     * @return void
     */
    public function testSetTPEchoirEchu() {

        $obj = new CreditsBails();

        $obj->setTPEchoirEchu("tPEchoirEchu");
        $this->assertEquals("tPEchoirEchu", $obj->getTPEchoirEchu());
    }

    /**
     * Tests the setTPMoisAnnee() method.
     *
     * @return void
     */
    public function testSetTPMoisAnnee() {

        $obj = new CreditsBails();

        $obj->setTPMoisAnnee("tPMoisAnnee");
        $this->assertEquals("tPMoisAnnee", $obj->getTPMoisAnnee());
    }

    /**
     * Tests the setTPMonttDepot() method.
     *
     * @return void
     */
    public function testSetTPMonttDepot() {

        $obj = new CreditsBails();

        $obj->setTPMonttDepot(10.092018);
        $this->assertEquals(10.092018, $obj->getTPMonttDepot());
    }

    /**
     * Tests the setTPPeriodicite() method.
     *
     * @return void
     */
    public function testSetTPPeriodicite() {

        $obj = new CreditsBails();

        $obj->setTPPeriodicite("tPPeriodicite");
        $this->assertEquals("tPPeriodicite", $obj->getTPPeriodicite());
    }

    /**
     * Tests the setTPPremierPaiement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTPPremierPaiement() {

        $obj = new CreditsBails();

        $obj->setTPPremierPaiement(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTPPremierPaiement());
    }

    /**
     * Tests the setTaxeFonciere() method.
     *
     * @return void
     */
    public function testSetTaxeFonciere() {

        $obj = new CreditsBails();

        $obj->setTaxeFonciere(true);
        $this->assertEquals(true, $obj->getTaxeFonciere());
    }

    /**
     * Tests the setTaxePro() method.
     *
     * @return void
     */
    public function testSetTaxePro() {

        $obj = new CreditsBails();

        $obj->setTaxePro(true);
        $this->assertEquals(true, $obj->getTaxePro());
    }

    /**
     * Tests the setValeurEuros() method.
     *
     * @return void
     */
    public function testSetValeurEuros() {

        $obj = new CreditsBails();

        $obj->setValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurEuros());
    }

    /**
     * Tests the setValeurHT() method.
     *
     * @return void
     */
    public function testSetValeurHT() {

        $obj = new CreditsBails();

        $obj->setValeurHT(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHT());
    }
}
