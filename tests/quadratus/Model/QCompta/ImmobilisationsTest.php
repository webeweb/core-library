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
use WBW\Library\Quadratus\Model\QCompta\Immobilisations;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Immobilisations test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ImmobilisationsTest extends AbstractTestCase {

    /**
     * Tests setAdAmortAnterieur()
     *
     * @return void
     */
    public function testSetAdAmortAnterieur(): void {

        $obj = new Immobilisations();

        $obj->setAdAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur());
    }

    /**
     * Tests setAdAmortAnterieur2()
     *
     * @return void
     */
    public function testSetAdAmortAnterieur2(): void {

        $obj = new Immobilisations();

        $obj->setAdAmortAnterieur2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur2());
    }

    /**
     * Tests setAdAnneesAmort()
     *
     * @return void
     */
    public function testSetAdAnneesAmort(): void {

        $obj = new Immobilisations();

        $obj->setAdAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAnneesAmort());
    }

    /**
     * Tests setAdCoeffDegressif()
     *
     * @return void
     */
    public function testSetAdCoeffDegressif(): void {

        $obj = new Immobilisations();

        $obj->setAdCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAdCoeffDegressif());
    }

    /**
     * Tests setAdDeductionAmortAnterieur()
     *
     * @return void
     */
    public function testSetAdDeductionAmortAnterieur(): void {

        $obj = new Immobilisations();

        $obj->setAdDeductionAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDeductionAmortAnterieur());
    }

    /**
     * Tests setAdDeductionDotation()
     *
     * @return void
     */
    public function testSetAdDeductionDotation(): void {

        $obj = new Immobilisations();

        $obj->setAdDeductionDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDeductionDotation());
    }

    /**
     * Tests setAdDotation()
     *
     * @return void
     */
    public function testSetAdDotation(): void {

        $obj = new Immobilisations();

        $obj->setAdDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation());
    }

    /**
     * Tests setAdDotation2()
     *
     * @return void
     */
    public function testSetAdDotation2(): void {

        $obj = new Immobilisations();

        $obj->setAdDotation2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotation2());
    }

    /**
     * Tests setAdDotationExcept()
     *
     * @return void
     */
    public function testSetAdDotationExcept(): void {

        $obj = new Immobilisations();

        $obj->setAdDotationExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDotationExcept());
    }

    /**
     * Tests setAdDuree()
     *
     * @return void
     */
    public function testSetAdDuree(): void {

        $obj = new Immobilisations();

        $obj->setAdDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAdDuree());
    }

    /**
     * Tests setAdDureeTot()
     *
     * @return void
     */
    public function testSetAdDureeTot(): void {

        $obj = new Immobilisations();

        $obj->setAdDureeTot("adDureeTot");
        $this->assertEquals("adDureeTot", $obj->getAdDureeTot());
    }

    /**
     * Tests setAdGarderDotSaisie()
     *
     * @return void
     */
    public function testSetAdGarderDotSaisie(): void {

        $obj = new Immobilisations();

        $obj->setAdGarderDotSaisie(true);
        $this->assertEquals(true, $obj->getAdGarderDotSaisie());
    }

    /**
     * Tests setAdQuantite()
     *
     * @return void
     */
    public function testSetAdQuantite(): void {

        $obj = new Immobilisations();

        $obj->setAdQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getAdQuantite());
    }

    /**
     * Tests setAdTauxLineaire()
     *
     * @return void
     */
    public function testSetAdTauxLineaire(): void {

        $obj = new Immobilisations();

        $obj->setAdTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAdTauxLineaire());
    }

    /**
     * Tests setAdType()
     *
     * @return void
     */
    public function testSetAdType(): void {

        $obj = new Immobilisations();

        $obj->setAdType("adType");
        $this->assertEquals("adType", $obj->getAdType());
    }

    /**
     * Tests setAfAmortAnterieur()
     *
     * @return void
     */
    public function testSetAfAmortAnterieur(): void {

        $obj = new Immobilisations();

        $obj->setAfAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAmortAnterieur());
    }

    /**
     * Tests setAfAnneesAmort()
     *
     * @return void
     */
    public function testSetAfAnneesAmort(): void {

        $obj = new Immobilisations();

        $obj->setAfAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAfAnneesAmort());
    }

    /**
     * Tests setAfCoeffDegressif()
     *
     * @return void
     */
    public function testSetAfCoeffDegressif(): void {

        $obj = new Immobilisations();

        $obj->setAfCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAfCoeffDegressif());
    }

    /**
     * Tests setAfDotation()
     *
     * @return void
     */
    public function testSetAfDotation(): void {

        $obj = new Immobilisations();

        $obj->setAfDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDotation());
    }

    /**
     * Tests setAfDuree()
     *
     * @return void
     */
    public function testSetAfDuree(): void {

        $obj = new Immobilisations();

        $obj->setAfDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAfDuree());
    }

    /**
     * Tests setAfTauxExcept()
     *
     * @return void
     */
    public function testSetAfTauxExcept(): void {

        $obj = new Immobilisations();

        $obj->setAfTauxExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxExcept());
    }

    /**
     * Tests setAfTauxLineaire()
     *
     * @return void
     */
    public function testSetAfTauxLineaire(): void {

        $obj = new Immobilisations();

        $obj->setAfTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAfTauxLineaire());
    }

    /**
     * Tests setAfType()
     *
     * @return void
     */
    public function testSetAfType(): void {

        $obj = new Immobilisations();

        $obj->setAfType("afType");
        $this->assertEquals("afType", $obj->getAfType());
    }

    /**
     * Tests setAfsii()
     *
     * @return void
     */
    public function testSetAfsii(): void {

        $obj = new Immobilisations();

        $obj->setAfsii(true);
        $this->assertEquals(true, $obj->getAfsii());
    }

    /**
     * Tests setArt151DureeDejaEtalee()
     *
     * @return void
     */
    public function testSetArt151DureeDejaEtalee(): void {

        $obj = new Immobilisations();

        $obj->setArt151DureeDejaEtalee("art151DureeDejaEtalee");
        $this->assertEquals("art151DureeDejaEtalee", $obj->getArt151DureeDejaEtalee());
    }

    /**
     * Tests setArt151DureeEtalement()
     *
     * @return void
     */
    public function testSetArt151DureeEtalement(): void {

        $obj = new Immobilisations();

        $obj->setArt151DureeEtalement("art151DureeEtalement");
        $this->assertEquals("art151DureeEtalement", $obj->getArt151DureeEtalement());
    }

    /**
     * Tests setArt151MontantDejaEtale()
     *
     * @return void
     */
    public function testSetArt151MontantDejaEtale(): void {

        $obj = new Immobilisations();

        $obj->setArt151MontantDejaEtale(10.092018);
        $this->assertEquals(10.092018, $obj->getArt151MontantDejaEtale());
    }

    /**
     * Tests setArt151MontantEtaleAnnee()
     *
     * @return void
     */
    public function testSetArt151MontantEtaleAnnee(): void {

        $obj = new Immobilisations();

        $obj->setArt151MontantEtaleAnnee(10.092018);
        $this->assertEquals(10.092018, $obj->getArt151MontantEtaleAnnee());
    }

    /**
     * Tests setBaseCalcul()
     *
     * @return void
     */
    public function testSetBaseCalcul(): void {

        $obj = new Immobilisations();

        $obj->setBaseCalcul(10);
        $this->assertEquals(10, $obj->getBaseCalcul());
    }

    /**
     * Tests setBaseTaxePro()
     *
     * @return void
     */
    public function testSetBaseTaxePro(): void {

        $obj = new Immobilisations();

        $obj->setBaseTaxePro(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTaxePro());
    }

    /**
     * Tests setBureau()
     *
     * @return void
     */
    public function testSetBureau(): void {

        $obj = new Immobilisations();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Tests setCTauxImp()
     *
     * @return void
     */
    public function testSetCTauxImp(): void {

        $obj = new Immobilisations();

        $obj->setCTauxImp(10.092018);
        $this->assertEquals(10.092018, $obj->getCTauxImp());
    }

    /**
     * Tests setCValeurEuros()
     *
     * @return void
     */
    public function testSetCValeurEuros(): void {

        $obj = new Immobilisations();

        $obj->setCValeurEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getCValeurEuros());
    }

    /**
     * Tests setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Immobilisations();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Immobilisations();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests setCompteFrn()
     *
     * @return void
     */
    public function testSetCompteFrn(): void {

        $obj = new Immobilisations();

        $obj->setCompteFrn("compteFrn");
        $this->assertEquals("compteFrn", $obj->getCompteFrn());
    }

    /**
     * Tests setCrIsDot()
     *
     * @return void
     */
    public function testSetCrIsDot(): void {

        $obj = new Immobilisations();

        $obj->setCrIsDot(true);
        $this->assertEquals(true, $obj->getCrIsDot());
    }

    /**
     * Tests setCrr151Motif()
     *
     * @return void
     */
    public function testSetCrr151Motif(): void {

        $obj = new Immobilisations();

        $obj->setCrr151Motif(true);
        $this->assertEquals(true, $obj->getCrr151Motif());
    }

    /**
     * Tests setCrr151PmValueCt()
     *
     * @return void
     */
    public function testSetCrr151PmValueCt(): void {

        $obj = new Immobilisations();

        $obj->setCrr151PmValueCt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrr151PmValueCt());
    }

    /**
     * Tests setCrr151PmValueLt()
     *
     * @return void
     */
    public function testSetCrr151PmValueLt(): void {

        $obj = new Immobilisations();

        $obj->setCrr151PmValueLt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrr151PmValueLt());
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

        $obj = new Immobilisations();

        $obj->setCrrDate($crrDate);
        $this->assertSame($crrDate, $obj->getCrrDate());
    }

    /**
     * Tests setCrrPxCessionHt()
     *
     * @return void
     */
    public function testSetCrrPxCessionHt(): void {

        $obj = new Immobilisations();

        $obj->setCrrPxCessionHt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrPxCessionHt());
    }

    /**
     * Tests setCrrQteVendue()
     *
     * @return void
     */
    public function testSetCrrQteVendue(): void {

        $obj = new Immobilisations();

        $obj->setCrrQteVendue(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrQteVendue());
    }

    /**
     * Tests setCrrSupplAmort()
     *
     * @return void
     */
    public function testSetCrrSupplAmort(): void {

        $obj = new Immobilisations();

        $obj->setCrrSupplAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplAmort());
    }

    /**
     * Tests setCrrSupplValeur()
     *
     * @return void
     */
    public function testSetCrrSupplValeur(): void {

        $obj = new Immobilisations();

        $obj->setCrrSupplValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrSupplValeur());
    }

    /**
     * Tests setCrrType()
     *
     * @return void
     */
    public function testSetCrrType(): void {

        $obj = new Immobilisations();

        $obj->setCrrType("crrType");
        $this->assertEquals("crrType", $obj->getCrrType());
    }

    /**
     * Tests setCrrpmValueCt()
     *
     * @return void
     */
    public function testSetCrrpmValueCt(): void {

        $obj = new Immobilisations();

        $obj->setCrrpmValueCt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueCt());
    }

    /**
     * Tests setCrrpmValueCtf()
     *
     * @return void
     */
    public function testSetCrrpmValueCtf(): void {

        $obj = new Immobilisations();

        $obj->setCrrpmValueCtf(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueCtf());
    }

    /**
     * Tests setCrrpmValueLt()
     *
     * @return void
     */
    public function testSetCrrpmValueLt(): void {

        $obj = new Immobilisations();

        $obj->setCrrpmValueLt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueLt());
    }

    /**
     * Tests setCrrpmValueLtf()
     *
     * @return void
     */
    public function testSetCrrpmValueLtf(): void {

        $obj = new Immobilisations();

        $obj->setCrrpmValueLtf(10.092018);
        $this->assertEquals(10.092018, $obj->getCrrpmValueLtf());
    }

    /**
     * Tests setDateAcqForfait()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcqForfait(): void {

        // Set a Date/time mock.
        $dateAcqForfait = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setDateAcqForfait($dateAcqForfait);
        $this->assertSame($dateAcqForfait, $obj->getDateAcqForfait());
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

        $obj = new Immobilisations();

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

        $obj = new Immobilisations();

        $obj->setDateMiseService($dateMiseService);
        $this->assertSame($dateMiseService, $obj->getDateMiseService());
    }

    /**
     * Tests setDateReeval()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReeval(): void {

        // Set a Date/time mock.
        $dateReeval = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setDateReeval($dateReeval);
        $this->assertSame($dateReeval, $obj->getDateReeval());
    }

    /**
     * Tests setDin()
     *
     * @return void
     */
    public function testSetDin(): void {

        $obj = new Immobilisations();

        $obj->setDin(true);
        $this->assertEquals(true, $obj->getDin());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Immobilisations();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setFamille()
     *
     * @return void
     */
    public function testSetFamille(): void {

        $obj = new Immobilisations();

        $obj->setFamille("famille");
        $this->assertEquals("famille", $obj->getFamille());
    }

    /**
     * Tests setGuidVehicule()
     *
     * @return void
     */
    public function testSetGuidVehicule(): void {

        $obj = new Immobilisations();

        $obj->setGuidVehicule("guidVehicule");
        $this->assertEquals("guidVehicule", $obj->getGuidVehicule());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Immobilisations();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLibelleFrn()
     *
     * @return void
     */
    public function testSetLibelleFrn(): void {

        $obj = new Immobilisations();

        $obj->setLibelleFrn("libelleFrn");
        $this->assertEquals("libelleFrn", $obj->getLibelleFrn());
    }

    /**
     * Tests setLibelleQuantite()
     *
     * @return void
     */
    public function testSetLibelleQuantite(): void {

        $obj = new Immobilisations();

        $obj->setLibelleQuantite("libelleQuantite");
        $this->assertEquals("libelleQuantite", $obj->getLibelleQuantite());
    }

    /**
     * Tests setLimiteAmort()
     *
     * @return void
     */
    public function testSetLimiteAmort(): void {

        $obj = new Immobilisations();

        $obj->setLimiteAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getLimiteAmort());
    }

    /**
     * Tests setMajoration()
     *
     * @return void
     */
    public function testSetMajoration(): void {

        $obj = new Immobilisations();

        $obj->setMajoration(true);
        $this->assertEquals(true, $obj->getMajoration());
    }

    /**
     * Tests setMateriauxAgricole()
     *
     * @return void
     */
    public function testSetMateriauxAgricole(): void {

        $obj = new Immobilisations();

        $obj->setMateriauxAgricole(true);
        $this->assertEquals(true, $obj->getMateriauxAgricole());
    }

    /**
     * Tests setMontantTva()
     *
     * @return void
     */
    public function testSetMontantTva(): void {

        $obj = new Immobilisations();

        $obj->setMontantTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTva());
    }

    /**
     * Tests setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new Immobilisations();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests setNbMoisMajoration()
     *
     * @return void
     */
    public function testSetNbMoisMajoration(): void {

        $obj = new Immobilisations();

        $obj->setNbMoisMajoration("nbMoisMajoration");
        $this->assertEquals("nbMoisMajoration", $obj->getNbMoisMajoration());
    }

    /**
     * Tests setNumCptTransDot()
     *
     * @return void
     */
    public function testSetNumCptTransDot(): void {

        $obj = new Immobilisations();

        $obj->setNumCptTransDot("numCptTransDot");
        $this->assertEquals("numCptTransDot", $obj->getNumCptTransDot());
    }

    /**
     * Tests setNumDossOrg()
     *
     * @return void
     */
    public function testSetNumDossOrg(): void {

        $obj = new Immobilisations();

        $obj->setNumDossOrg("numDossOrg");
        $this->assertEquals("numDossOrg", $obj->getNumDossOrg());
    }

    /**
     * Tests setNumEnsRealloc()
     *
     * @return void
     */
    public function testSetNumEnsRealloc(): void {

        $obj = new Immobilisations();

        $obj->setNumEnsRealloc(10);
        $this->assertEquals(10, $obj->getNumEnsRealloc());
    }

    /**
     * Tests setNumEnsemble()
     *
     * @return void
     */
    public function testSetNumEnsemble(): void {

        $obj = new Immobilisations();

        $obj->setNumEnsemble(10);
        $this->assertEquals(10, $obj->getNumEnsemble());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Immobilisations();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Immobilisations();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setNumeroDeux()
     *
     * @return void
     */
    public function testSetNumeroDeux(): void {

        $obj = new Immobilisations();

        $obj->setNumeroDeux(10);
        $this->assertEquals(10, $obj->getNumeroDeux());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Immobilisations();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setPilotage()
     *
     * @return void
     */
    public function testSetPilotage(): void {

        $obj = new Immobilisations();

        $obj->setPilotage(true);
        $this->assertEquals(true, $obj->getPilotage());
    }

    /**
     * Tests setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new Immobilisations();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new Immobilisations();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests setSite()
     *
     * @return void
     */
    public function testSetSite(): void {

        $obj = new Immobilisations();

        $obj->setSite("site");
        $this->assertEquals("site", $obj->getSite());
    }

    /**
     * Tests setTauxTva()
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new Immobilisations();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests setTaxeFonciere()
     *
     * @return void
     */
    public function testSetTaxeFonciere(): void {

        $obj = new Immobilisations();

        $obj->setTaxeFonciere(true);
        $this->assertEquals(true, $obj->getTaxeFonciere());
    }

    /**
     * Tests setTaxePro()
     *
     * @return void
     */
    public function testSetTaxePro(): void {

        $obj = new Immobilisations();

        $obj->setTaxePro(true);
        $this->assertEquals(true, $obj->getTaxePro());
    }

    /**
     * Tests setTpDateOrigine()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTpDateOrigine(): void {

        // Set a Date/time mock.
        $tpDateOrigine = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setTpDateOrigine($tpDateOrigine);
        $this->assertSame($tpDateOrigine, $obj->getTpDateOrigine());
    }

    /**
     * Tests setVDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetVDate(): void {

        // Set a Date/time mock.
        $vDate = new DateTime("2018-09-10");

        $obj = new Immobilisations();

        $obj->setVDate($vDate);
        $this->assertSame($vDate, $obj->getVDate());
    }

    /**
     * Tests setVNumero()
     *
     * @return void
     */
    public function testSetVNumero(): void {

        $obj = new Immobilisations();

        $obj->setVNumero(10);
        $this->assertEquals(10, $obj->getVNumero());
    }

    /**
     * Tests setVNumeroCompte()
     *
     * @return void
     */
    public function testSetVNumeroCompte(): void {

        $obj = new Immobilisations();

        $obj->setVNumeroCompte("vNumeroCompte");
        $this->assertEquals("vNumeroCompte", $obj->getVNumeroCompte());
    }

    /**
     * Tests setVNumeroCompteIni()
     *
     * @return void
     */
    public function testSetVNumeroCompteIni(): void {

        $obj = new Immobilisations();

        $obj->setVNumeroCompteIni("vNumeroCompteIni");
        $this->assertEquals("vNumeroCompteIni", $obj->getVNumeroCompteIni());
    }

    /**
     * Tests setVNumeroDeux()
     *
     * @return void
     */
    public function testSetVNumeroDeux(): void {

        $obj = new Immobilisations();

        $obj->setVNumeroDeux(10);
        $this->assertEquals(10, $obj->getVNumeroDeux());
    }

    /**
     * Tests setVNumeroDeuxIni()
     *
     * @return void
     */
    public function testSetVNumeroDeuxIni(): void {

        $obj = new Immobilisations();

        $obj->setVNumeroDeuxIni(10);
        $this->assertEquals(10, $obj->getVNumeroDeuxIni());
    }

    /**
     * Tests setVNumeroIni()
     *
     * @return void
     */
    public function testSetVNumeroIni(): void {

        $obj = new Immobilisations();

        $obj->setVNumeroIni(10);
        $this->assertEquals(10, $obj->getVNumeroIni());
    }

    /**
     * Tests setValeurAcqForfait()
     *
     * @return void
     */
    public function testSetValeurAcqForfait(): void {

        $obj = new Immobilisations();

        $obj->setValeurAcqForfait(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurAcqForfait());
    }

    /**
     * Tests setValeurBaseAmortissement()
     *
     * @return void
     */
    public function testSetValeurBaseAmortissement(): void {

        $obj = new Immobilisations();

        $obj->setValeurBaseAmortissement(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurBaseAmortissement());
    }

    /**
     * Tests setValeurDeduction()
     *
     * @return void
     */
    public function testSetValeurDeduction(): void {

        $obj = new Immobilisations();

        $obj->setValeurDeduction(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurDeduction());
    }

    /**
     * Tests setValeurHt()
     *
     * @return void
     */
    public function testSetValeurHt(): void {

        $obj = new Immobilisations();

        $obj->setValeurHt(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHt());
    }

    /**
     * Tests setValeurHtOrigine()
     *
     * @return void
     */
    public function testSetValeurHtOrigine(): void {

        $obj = new Immobilisations();

        $obj->setValeurHtOrigine(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHtOrigine());
    }

    /**
     * Tests setVncRealloc()
     *
     * @return void
     */
    public function testSetVncRealloc(): void {

        $obj = new Immobilisations();

        $obj->setVncRealloc(10.092018);
        $this->assertEquals(10.092018, $obj->getVncRealloc());
    }

    /**
     * Tests setZoneLibre1()
     *
     * @return void
     */
    public function testSetZoneLibre1(): void {

        $obj = new Immobilisations();

        $obj->setZoneLibre1("zoneLibre1");
        $this->assertEquals("zoneLibre1", $obj->getZoneLibre1());
    }

    /**
     * Tests setZoneLibre2()
     *
     * @return void
     */
    public function testSetZoneLibre2(): void {

        $obj = new Immobilisations();

        $obj->setZoneLibre2("zoneLibre2");
        $this->assertEquals("zoneLibre2", $obj->getZoneLibre2());
    }

    /**
     * Tests setZoneLibre3()
     *
     * @return void
     */
    public function testSetZoneLibre3(): void {

        $obj = new Immobilisations();

        $obj->setZoneLibre3("zoneLibre3");
        $this->assertEquals("zoneLibre3", $obj->getZoneLibre3());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
