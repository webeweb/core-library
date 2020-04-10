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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Immobilisations;

/**
 * Immobilisations test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ImmobilisationsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Immobilisations();

        $this->assertNull($obj->getAdAmortAnterieur());
        $this->assertNull($obj->getAdAmortAnterieur2());
        $this->assertNull($obj->getAdAnneesAmort());
        $this->assertNull($obj->getAdCoeffDegressif());
        $this->assertNull($obj->getAdDeductionAmortAnterieur());
        $this->assertNull($obj->getAdDeductionDotation());
        $this->assertNull($obj->getAdDotation());
        $this->assertNull($obj->getAdDotation2());
        $this->assertNull($obj->getAdDotationExcept());
        $this->assertNull($obj->getAdDuree());
        $this->assertNull($obj->getAdDureeTot());
        $this->assertNull($obj->getAdGarderDotSaisie());
        $this->assertNull($obj->getAdQuantite());
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
        $this->assertNull($obj->getArt151DureeDejaEtalee());
        $this->assertNull($obj->getArt151DureeEtalement());
        $this->assertNull($obj->getArt151MontantDejaEtale());
        $this->assertNull($obj->getArt151MontantEtaleAnnee());
        $this->assertNull($obj->getBaseCalcul());
        $this->assertNull($obj->getBaseTaxePro());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCrIsDot());
        $this->assertNull($obj->getCrr151Motif());
        $this->assertNull($obj->getCrr151PmValueCt());
        $this->assertNull($obj->getCrr151PmValueLt());
        $this->assertNull($obj->getCrrDate());
        $this->assertNull($obj->getCrrpmValueCt());
        $this->assertNull($obj->getCrrpmValueCtf());
        $this->assertNull($obj->getCrrpmValueLt());
        $this->assertNull($obj->getCrrpmValueLtf());
        $this->assertNull($obj->getCrrPxCessionHt());
        $this->assertNull($obj->getCrrQteVendue());
        $this->assertNull($obj->getCrrSupplAmort());
        $this->assertNull($obj->getCrrSupplValeur());
        $this->assertNull($obj->getCrrType());
        $this->assertNull($obj->getCTauxImp());
        $this->assertNull($obj->getCValeurEuros());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getDin());
        $this->assertNull($obj->getDateAcqForfait());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateMiseService());
        $this->assertNull($obj->getDateReeval());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getGuidVehicule());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleFrn());
        $this->assertNull($obj->getLibelleQuantite());
        $this->assertNull($obj->getLimiteAmort());
        $this->assertNull($obj->getMajoration());
        $this->assertNull($obj->getMateriauxAgricole());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbMoisMajoration());
        $this->assertNull($obj->getNumCptTransDot());
        $this->assertNull($obj->getNumDossOrg());
        $this->assertNull($obj->getNumEnsRealloc());
        $this->assertNull($obj->getNumEnsemble());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPilotage());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSite());
        $this->assertNull($obj->getTpDateOrigine());
        $this->assertNull($obj->getTauxTva());
        $this->assertNull($obj->getTaxeFonciere());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getVDate());
        $this->assertNull($obj->getVncRealloc());
        $this->assertNull($obj->getVNumero());
        $this->assertNull($obj->getVNumeroCompte());
        $this->assertNull($obj->getVNumeroCompteIni());
        $this->assertNull($obj->getVNumeroDeux());
        $this->assertNull($obj->getVNumeroDeuxIni());
        $this->assertNull($obj->getVNumeroIni());
        $this->assertNull($obj->getValeurAcqForfait());
        $this->assertNull($obj->getValeurBaseAmortissement());
        $this->assertNull($obj->getValeurDeduction());
        $this->assertNull($obj->getValeurHt());
        $this->assertNull($obj->getValeurHtOrigine());
        $this->assertNull($obj->getZoneLibre1());
        $this->assertNull($obj->getZoneLibre2());
        $this->assertNull($obj->getZoneLibre3());
    }

    /**
     * Tests the setAdAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetAdAmortAnterieur() {

        $obj = new Immobilisations();

        $obj->setAdAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur());
    }

    /**
     * Tests the setAdAmortAnterieur2() method.
     *
     * @return void
     */
    public function testSetAdAmortAnterieur2() {

        $obj = new Immobilisations();

        $obj->setAdAmortAnterieur2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur2());
    }

    /**
     * Tests the setAdAnneesAmort() method.
     *
     * @return void
     */
    public function testSetAdAnneesAmort() {

        $obj = new Immobilisations();

        $obj->setAdAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAnneesAmort());
    }

    /**
     * Tests the setAdCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetAdCoeffDegressif() {

        $obj = new Immobilisations();

        $obj->setAdCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAdCoeffDegressif());
    }

    /**
     * Tests the setAdDeductionAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetAdDeductionAmortAnterieur() {

        $obj = new Immobilisations();

        $obj->setAdDeductionAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDeductionAmortAnterieur());
    }

    /**
     * Tests the setAdDeductionDotation() method.
     *
     * @return void
     */
    public function testSetAdDeductionDotation() {

        $obj = new Immobilisations();

        $obj->setAdDeductionDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDeductionDotation());
    }

    /**
     * Tests the setAdDotation() method.
     *
     * @return void
     */
    public function testSetAdDotation() {

        $obj = new Immobilisations();

        $obj->setAdDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation());
    }

    /**
     * Tests the setAdDotation2() method.
     *
     * @return void
     */
    public function testSetAdDotation2() {

        $obj = new Immobilisations();

        $obj->setAdDotation2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation2());
    }

    /**
     * Tests the setAdDotationExcept() method.
     *
     * @return void
     */
    public function testSetAdDotationExcept() {

        $obj = new Immobilisations();

        $obj->setAdDotationExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotationExcept());
    }

    /**
     * Tests the setAdDuree() method.
     *
     * @return void
     */
    public function testSetAdDuree() {

        $obj = new Immobilisations();

        $obj->setAdDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDuree());
    }

    /**
     * Tests the setAdDureeTot() method.
     *
     * @return void
     */
    public function testSetAdDureeTot() {

        $obj = new Immobilisations();

        $obj->setAdDureeTot("adDureeTot");
        $this->assertEquals("adDureeTot", $obj->getAdDureeTot());
    }

    /**
     * Tests the setAdGarderDotSaisie() method.
     *
     * @return void
     */
    public function testSetAdGarderDotSaisie() {

        $obj = new Immobilisations();

        $obj->setAdGarderDotSaisie(true);
        $this->assertEquals(true, $obj->getAdGarderDotSaisie());
    }

    /**
     * Tests the setAdQuantite() method.
     *
     * @return void
     */
    public function testSetAdQuantite() {

        $obj = new Immobilisations();

        $obj->setAdQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getAdQuantite());
    }

    /**
     * Tests the setAdTauxLineaire() method.
     *
     * @return void
     */
    public function testSetAdTauxLineaire() {

        $obj = new Immobilisations();

        $obj->setAdTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAdTauxLineaire());
    }

    /**
     * Tests the setAdType() method.
     *
     * @return void
     */
    public function testSetAdType() {

        $obj = new Immobilisations();

        $obj->setAdType("adType");
        $this->assertEquals("adType", $obj->getAdType());
    }

    /**
     * Tests the setAfAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetAfAmortAnterieur() {

        $obj = new Immobilisations();

        $obj->setAfAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAmortAnterieur());
    }

    /**
     * Tests the setAfAnneesAmort() method.
     *
     * @return void
     */
    public function testSetAfAnneesAmort() {

        $obj = new Immobilisations();

        $obj->setAfAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAnneesAmort());
    }

    /**
     * Tests the setAfCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetAfCoeffDegressif() {

        $obj = new Immobilisations();

        $obj->setAfCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAfCoeffDegressif());
    }

    /**
     * Tests the setAfDotation() method.
     *
     * @return void
     */
    public function testSetAfDotation() {

        $obj = new Immobilisations();

        $obj->setAfDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDotation());
    }

    /**
     * Tests the setAfDuree() method.
     *
     * @return void
     */
    public function testSetAfDuree() {

        $obj = new Immobilisations();

        $obj->setAfDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDuree());
    }

    /**
     * Tests the setAfTauxExcept() method.
     *
     * @return void
     */
    public function testSetAfTauxExcept() {

        $obj = new Immobilisations();

        $obj->setAfTauxExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxExcept());
    }

    /**
     * Tests the setAfTauxLineaire() method.
     *
     * @return void
     */
    public function testSetAfTauxLineaire() {

        $obj = new Immobilisations();

        $obj->setAfTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxLineaire());
    }

    /**
     * Tests the setAfType() method.
     *
     * @return void
     */
    public function testSetAfType() {

        $obj = new Immobilisations();

        $obj->setAfType("afType");
        $this->assertEquals("afType", $obj->getAfType());
    }

    /**
     * Tests the setAfsii() method.
     *
     * @return void
     */
    public function testSetAfsii() {

        $obj = new Immobilisations();

        $obj->setAfsii(true);
        $this->assertEquals(true, $obj->getAfsii());
    }

    /**
     * Tests the setArt151DureeDejaEtalee() method.
     *
     * @return void
     */
    public function testSetArt151DureeDejaEtalee() {

        $obj = new Immobilisations();

        $obj->setArt151DureeDejaEtalee("art151DureeDejaEtalee");
        $this->assertEquals("art151DureeDejaEtalee", $obj->getArt151DureeDejaEtalee());
    }

    /**
     * Tests the setArt151DureeEtalement() method.
     *
     * @return void
     */
    public function testSetArt151DureeEtalement() {

        $obj = new Immobilisations();

        $obj->setArt151DureeEtalement("art151DureeEtalement");
        $this->assertEquals("art151DureeEtalement", $obj->getArt151DureeEtalement());
    }

    /**
     * Tests the setArt151MontantDejaEtale() method.
     *
     * @return void
     */
    public function testSetArt151MontantDejaEtale() {

        $obj = new Immobilisations();

        $obj->setArt151MontantDejaEtale(10.092018);
        $this->assertEquals(10.092018, $obj->getArt151MontantDejaEtale());
    }

    /**
     * Tests the setArt151MontantEtaleAnnee() method.
     *
     * @return void
     */
    public function testSetArt151MontantEtaleAnnee() {

        $obj = new Immobilisations();

        $obj->setArt151MontantEtaleAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getArt151MontantEtaleAnnee());
    }

    /**
     * Tests the setBaseCalcul() method.
     *
     * @return void
     */
    public function testSetBaseCalcul() {

        $obj = new Immobilisations();

        $obj->setBaseCalcul(10);
        $this->assertEquals(10, $obj->getBaseCalcul());
    }

    /**
     * Tests the setBaseTaxePro() method.
     *
     * @return void
     */
    public function testSetBaseTaxePro() {

        $obj = new Immobilisations();

        $obj->setBaseTaxePro(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTaxePro());
    }

    /**
     * Tests the setBureau() method.
     *
     * @return void
     */
    public function testSetBureau() {

        $obj = new Immobilisations();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Tests the setCTauxImp() method.
     *
     * @return void
     */
    public function testSetCTauxImp() {

        $obj = new Immobilisations();

        $obj->setCTauxImp(10.092018);
        $this->assertEquals(10.092018, $obj->getCTauxImp());
    }

    /**
     * Tests the setCValeurEuros() method.
     *
     * @return void
     */
    public function testSetCValeurEuros() {

        $obj = new Immobilisations();

        $obj->setCValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getCValeurEuros());
    }

    /**
     * Tests the setCentreAnalytique() method.
     *
     * @return void
     */
    public function testSetCentreAnalytique() {

        $obj = new Immobilisations();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new Immobilisations();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCompteFrn() method.
     *
     * @return void
     */
    public function testSetCompteFrn() {

        $obj = new Immobilisations();

        $obj->setCompteFrn("compteFrn");
        $this->assertEquals("compteFrn", $obj->getCompteFrn());
    }

    /**
     * Tests the setCrIsDot() method.
     *
     * @return void
     */
    public function testSetCrIsDot() {

        $obj = new Immobilisations();

        $obj->setCrIsDot(true);
        $this->assertEquals(true, $obj->getCrIsDot());
    }

    /**
     * Tests the setCrr151Motif() method.
     *
     * @return void
     */
    public function testSetCrr151Motif() {

        $obj = new Immobilisations();

        $obj->setCrr151Motif(true);
        $this->assertEquals(true, $obj->getCrr151Motif());
    }

    /**
     * Tests the setCrr151PmValueCt() method.
     *
     * @return void
     */
    public function testSetCrr151PmValueCt() {

        $obj = new Immobilisations();

        $obj->setCrr151PmValueCt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrr151PmValueCt());
    }

    /**
     * Tests the setCrr151PmValueLt() method.
     *
     * @return void
     */
    public function testSetCrr151PmValueLt() {

        $obj = new Immobilisations();

        $obj->setCrr151PmValueLt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrr151PmValueLt());
    }

    /**
     * Tests the setCrrDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCrrDate() {

        // Set a Date/time mock.
        $crrDate = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setCrrDate($crrDate);
        $this->assertSame($crrDate, $obj->getCrrDate());
    }

    /**
     * Tests the setCrrPxCessionHt() method.
     *
     * @return void
     */
    public function testSetCrrPxCessionHt() {

        $obj = new Immobilisations();

        $obj->setCrrPxCessionHt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrPxCessionHt());
    }

    /**
     * Tests the setCrrQteVendue() method.
     *
     * @return void
     */
    public function testSetCrrQteVendue() {

        $obj = new Immobilisations();

        $obj->setCrrQteVendue(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrQteVendue());
    }

    /**
     * Tests the setCrrSupplAmort() method.
     *
     * @return void
     */
    public function testSetCrrSupplAmort() {

        $obj = new Immobilisations();

        $obj->setCrrSupplAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplAmort());
    }

    /**
     * Tests the setCrrSupplValeur() method.
     *
     * @return void
     */
    public function testSetCrrSupplValeur() {

        $obj = new Immobilisations();

        $obj->setCrrSupplValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplValeur());
    }

    /**
     * Tests the setCrrType() method.
     *
     * @return void
     */
    public function testSetCrrType() {

        $obj = new Immobilisations();

        $obj->setCrrType("crrType");
        $this->assertEquals("crrType", $obj->getCrrType());
    }

    /**
     * Tests the setCrrpmValueCt() method.
     *
     * @return void
     */
    public function testSetCrrpmValueCt() {

        $obj = new Immobilisations();

        $obj->setCrrpmValueCt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueCt());
    }

    /**
     * Tests the setCrrpmValueCtf() method.
     *
     * @return void
     */
    public function testSetCrrpmValueCtf() {

        $obj = new Immobilisations();

        $obj->setCrrpmValueCtf(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueCtf());
    }

    /**
     * Tests the setCrrpmValueLt() method.
     *
     * @return void
     */
    public function testSetCrrpmValueLt() {

        $obj = new Immobilisations();

        $obj->setCrrpmValueLt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueLt());
    }

    /**
     * Tests the setCrrpmValueLtf() method.
     *
     * @return void
     */
    public function testSetCrrpmValueLtf() {

        $obj = new Immobilisations();

        $obj->setCrrpmValueLtf(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueLtf());
    }

    /**
     * Tests the setDateAcqForfait() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcqForfait() {

        // Set a Date/time mock.
        $dateAcqForfait = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setDateAcqForfait($dateAcqForfait);
        $this->assertSame($dateAcqForfait, $obj->getDateAcqForfait());
    }

    /**
     * Tests the setDateAcquisition() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition() {

        // Set a Date/time mock.
        $dateAcquisition = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setDateAcquisition($dateAcquisition);
        $this->assertSame($dateAcquisition, $obj->getDateAcquisition());
    }

    /**
     * Tests the setDateMiseService() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMiseService() {

        // Set a Date/time mock.
        $dateMiseService = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setDateMiseService($dateMiseService);
        $this->assertSame($dateMiseService, $obj->getDateMiseService());
    }

    /**
     * Tests the setDateReeval() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReeval() {

        // Set a Date/time mock.
        $dateReeval = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setDateReeval($dateReeval);
        $this->assertSame($dateReeval, $obj->getDateReeval());
    }

    /**
     * Tests the setDin() method.
     *
     * @return void
     */
    public function testSetDin() {

        $obj = new Immobilisations();

        $obj->setDin(true);
        $this->assertEquals(true, $obj->getDin());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new Immobilisations();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setFamille() method.
     *
     * @return void
     */
    public function testSetFamille() {

        $obj = new Immobilisations();

        $obj->setFamille("famille");
        $this->assertEquals("famille", $obj->getFamille());
    }

    /**
     * Tests the setGuidVehicule() method.
     *
     * @return void
     */
    public function testSetGuidVehicule() {

        $obj = new Immobilisations();

        $obj->setGuidVehicule("guidVehicule");
        $this->assertEquals("guidVehicule", $obj->getGuidVehicule());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Immobilisations();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleFrn() method.
     *
     * @return void
     */
    public function testSetLibelleFrn() {

        $obj = new Immobilisations();

        $obj->setLibelleFrn("libelleFrn");
        $this->assertEquals("libelleFrn", $obj->getLibelleFrn());
    }

    /**
     * Tests the setLibelleQuantite() method.
     *
     * @return void
     */
    public function testSetLibelleQuantite() {

        $obj = new Immobilisations();

        $obj->setLibelleQuantite("libelleQuantite");
        $this->assertEquals("libelleQuantite", $obj->getLibelleQuantite());
    }

    /**
     * Tests the setLimiteAmort() method.
     *
     * @return void
     */
    public function testSetLimiteAmort() {

        $obj = new Immobilisations();

        $obj->setLimiteAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getLimiteAmort());
    }

    /**
     * Tests the setMajoration() method.
     *
     * @return void
     */
    public function testSetMajoration() {

        $obj = new Immobilisations();

        $obj->setMajoration(true);
        $this->assertEquals(true, $obj->getMajoration());
    }

    /**
     * Tests the setMateriauxAgricole() method.
     *
     * @return void
     */
    public function testSetMateriauxAgricole() {

        $obj = new Immobilisations();

        $obj->setMateriauxAgricole(true);
        $this->assertEquals(true, $obj->getMateriauxAgricole());
    }

    /**
     * Tests the setMontantTva() method.
     *
     * @return void
     */
    public function testSetMontantTva() {

        $obj = new Immobilisations();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests the setNatureAnalytique() method.
     *
     * @return void
     */
    public function testSetNatureAnalytique() {

        $obj = new Immobilisations();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests the setNbMoisMajoration() method.
     *
     * @return void
     */
    public function testSetNbMoisMajoration() {

        $obj = new Immobilisations();

        $obj->setNbMoisMajoration("nbMoisMajoration");
        $this->assertEquals("nbMoisMajoration", $obj->getNbMoisMajoration());
    }

    /**
     * Tests the setNumCptTransDot() method.
     *
     * @return void
     */
    public function testSetNumCptTransDot() {

        $obj = new Immobilisations();

        $obj->setNumCptTransDot("numCptTransDot");
        $this->assertEquals("numCptTransDot", $obj->getNumCptTransDot());
    }

    /**
     * Tests the setNumDossOrg() method.
     *
     * @return void
     */
    public function testSetNumDossOrg() {

        $obj = new Immobilisations();

        $obj->setNumDossOrg("numDossOrg");
        $this->assertEquals("numDossOrg", $obj->getNumDossOrg());
    }

    /**
     * Tests the setNumEnsRealloc() method.
     *
     * @return void
     */
    public function testSetNumEnsRealloc() {

        $obj = new Immobilisations();

        $obj->setNumEnsRealloc(10);
        $this->assertEquals(10, $obj->getNumEnsRealloc());
    }

    /**
     * Tests the setNumEnsemble() method.
     *
     * @return void
     */
    public function testSetNumEnsemble() {

        $obj = new Immobilisations();

        $obj->setNumEnsemble(10);
        $this->assertEquals(10, $obj->getNumEnsemble());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new Immobilisations();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new Immobilisations();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDeux() method.
     *
     * @return void
     */
    public function testSetNumeroDeux() {

        $obj = new Immobilisations();

        $obj->setNumeroDeux(10);
        $this->assertEquals(10, $obj->getNumeroDeux());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj() {

        $obj = new Immobilisations();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setPilotage() method.
     *
     * @return void
     */
    public function testSetPilotage() {

        $obj = new Immobilisations();

        $obj->setPilotage(true);
        $this->assertEquals(true, $obj->getPilotage());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new Immobilisations();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new Immobilisations();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setSite() method.
     *
     * @return void
     */
    public function testSetSite() {

        $obj = new Immobilisations();

        $obj->setSite("site");
        $this->assertEquals("site", $obj->getSite());
    }

    /**
     * Tests the setTauxTva() method.
     *
     * @return void
     */
    public function testSetTauxTva() {

        $obj = new Immobilisations();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests the setTaxeFonciere() method.
     *
     * @return void
     */
    public function testSetTaxeFonciere() {

        $obj = new Immobilisations();

        $obj->setTaxeFonciere(true);
        $this->assertEquals(true, $obj->getTaxeFonciere());
    }

    /**
     * Tests the setTaxePro() method.
     *
     * @return void
     */
    public function testSetTaxePro() {

        $obj = new Immobilisations();

        $obj->setTaxePro(true);
        $this->assertEquals(true, $obj->getTaxePro());
    }

    /**
     * Tests the setTpDateOrigine() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTpDateOrigine() {

        // Set a Date/time mock.
        $tpDateOrigine = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setTpDateOrigine($tpDateOrigine);
        $this->assertSame($tpDateOrigine, $obj->getTpDateOrigine());
    }

    /**
     * Tests the setVDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetVDate() {

        // Set a Date/time mock.
        $vDate = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setVDate($vDate);
        $this->assertSame($vDate, $obj->getVDate());
    }

    /**
     * Tests the setVNumero() method.
     *
     * @return void
     */
    public function testSetVNumero() {

        $obj = new Immobilisations();

        $obj->setVNumero(10);
        $this->assertEquals(10, $obj->getVNumero());
    }

    /**
     * Tests the setVNumeroCompte() method.
     *
     * @return void
     */
    public function testSetVNumeroCompte() {

        $obj = new Immobilisations();

        $obj->setVNumeroCompte("vNumeroCompte");
        $this->assertEquals("vNumeroCompte", $obj->getVNumeroCompte());
    }

    /**
     * Tests the setVNumeroCompteIni() method.
     *
     * @return void
     */
    public function testSetVNumeroCompteIni() {

        $obj = new Immobilisations();

        $obj->setVNumeroCompteIni("vNumeroCompteIni");
        $this->assertEquals("vNumeroCompteIni", $obj->getVNumeroCompteIni());
    }

    /**
     * Tests the setVNumeroDeux() method.
     *
     * @return void
     */
    public function testSetVNumeroDeux() {

        $obj = new Immobilisations();

        $obj->setVNumeroDeux(10);
        $this->assertEquals(10, $obj->getVNumeroDeux());
    }

    /**
     * Tests the setVNumeroDeuxIni() method.
     *
     * @return void
     */
    public function testSetVNumeroDeuxIni() {

        $obj = new Immobilisations();

        $obj->setVNumeroDeuxIni(10);
        $this->assertEquals(10, $obj->getVNumeroDeuxIni());
    }

    /**
     * Tests the setVNumeroIni() method.
     *
     * @return void
     */
    public function testSetVNumeroIni() {

        $obj = new Immobilisations();

        $obj->setVNumeroIni(10);
        $this->assertEquals(10, $obj->getVNumeroIni());
    }

    /**
     * Tests the setValeurAcqForfait() method.
     *
     * @return void
     */
    public function testSetValeurAcqForfait() {

        $obj = new Immobilisations();

        $obj->setValeurAcqForfait(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurAcqForfait());
    }

    /**
     * Tests the setValeurBaseAmortissement() method.
     *
     * @return void
     */
    public function testSetValeurBaseAmortissement() {

        $obj = new Immobilisations();

        $obj->setValeurBaseAmortissement(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurBaseAmortissement());
    }

    /**
     * Tests the setValeurDeduction() method.
     *
     * @return void
     */
    public function testSetValeurDeduction() {

        $obj = new Immobilisations();

        $obj->setValeurDeduction(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurDeduction());
    }

    /**
     * Tests the setValeurHt() method.
     *
     * @return void
     */
    public function testSetValeurHt() {

        $obj = new Immobilisations();

        $obj->setValeurHt(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHt());
    }

    /**
     * Tests the setValeurHtOrigine() method.
     *
     * @return void
     */
    public function testSetValeurHtOrigine() {

        $obj = new Immobilisations();

        $obj->setValeurHtOrigine(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHtOrigine());
    }

    /**
     * Tests the setVncRealloc() method.
     *
     * @return void
     */
    public function testSetVncRealloc() {

        $obj = new Immobilisations();

        $obj->setVncRealloc(10.092018);
        $this->assertEquals(10.092018, $obj->getVncRealloc());
    }

    /**
     * Tests the setZoneLibre1() method.
     *
     * @return void
     */
    public function testSetZoneLibre1() {

        $obj = new Immobilisations();

        $obj->setZoneLibre1("zoneLibre1");
        $this->assertEquals("zoneLibre1", $obj->getZoneLibre1());
    }

    /**
     * Tests the setZoneLibre2() method.
     *
     * @return void
     */
    public function testSetZoneLibre2() {

        $obj = new Immobilisations();

        $obj->setZoneLibre2("zoneLibre2");
        $this->assertEquals("zoneLibre2", $obj->getZoneLibre2());
    }

    /**
     * Tests the setZoneLibre3() method.
     *
     * @return void
     */
    public function testSetZoneLibre3() {

        $obj = new Immobilisations();

        $obj->setZoneLibre3("zoneLibre3");
        $this->assertEquals("zoneLibre3", $obj->getZoneLibre3());
    }
}
