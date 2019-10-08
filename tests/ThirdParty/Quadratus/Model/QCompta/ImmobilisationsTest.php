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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Immobilisations;

/**
 * Immobilisations model test.
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
    public function testConstruct() {

        $obj = new Immobilisations();

        $this->assertNull($obj->getADAmortAnterieur());
        $this->assertNull($obj->getADAmortAnterieur2());
        $this->assertNull($obj->getADAnneesAmort());
        $this->assertNull($obj->getADCoeffDegressif());
        $this->assertNull($obj->getADDeductionAmortAnterieur());
        $this->assertNull($obj->getADDeductionDotation());
        $this->assertNull($obj->getADDotation());
        $this->assertNull($obj->getADDotation2());
        $this->assertNull($obj->getADDotationExcept());
        $this->assertNull($obj->getADDuree());
        $this->assertNull($obj->getADDureeTot());
        $this->assertNull($obj->getADGarderDotSaisie());
        $this->assertNull($obj->getADQuantite());
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
        $this->assertNull($obj->getArt151DureeDejaEtalee());
        $this->assertNull($obj->getArt151DureeEtalement());
        $this->assertNull($obj->getArt151MontantDejaEtale());
        $this->assertNull($obj->getArt151MontantEtaleAnnee());
        $this->assertNull($obj->getBaseCalcul());
        $this->assertNull($obj->getBaseTaxePro());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCRIsDot());
        $this->assertNull($obj->getCRR151Motif());
        $this->assertNull($obj->getCRR151PMValueCT());
        $this->assertNull($obj->getCRR151PMValueLT());
        $this->assertNull($obj->getCRRDate());
        $this->assertNull($obj->getCRRPMValueCT());
        $this->assertNull($obj->getCRRPMValueCTF());
        $this->assertNull($obj->getCRRPMValueLT());
        $this->assertNull($obj->getCRRPMValueLTF());
        $this->assertNull($obj->getCRRPxCessionHT());
        $this->assertNull($obj->getCRRQteVendue());
        $this->assertNull($obj->getCRRSupplAmort());
        $this->assertNull($obj->getCRRSupplValeur());
        $this->assertNull($obj->getCRRType());
        $this->assertNull($obj->getCTauxImp());
        $this->assertNull($obj->getCValeurEuros());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getCompteFrn());
        $this->assertNull($obj->getDIN());
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
        $this->assertNull($obj->getMontantTVA());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbMoisMajoration());
        $this->assertNull($obj->getNumCptTransDot());
        $this->assertNull($obj->getNumDossOrg());
        $this->assertNull($obj->getNumEnsRealloc());
        $this->assertNull($obj->getNumEnsemble());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getNumeroPJ());
        $this->assertNull($obj->getPilotage());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSite());
        $this->assertNull($obj->getTPDateOrigine());
        $this->assertNull($obj->getTauxTVA());
        $this->assertNull($obj->getTaxeFonciere());
        $this->assertNull($obj->getTaxePro());
        $this->assertNull($obj->getVDate());
        $this->assertNull($obj->getVNCRealloc());
        $this->assertNull($obj->getVNumero());
        $this->assertNull($obj->getVNumeroCompte());
        $this->assertNull($obj->getVNumeroCompteIni());
        $this->assertNull($obj->getVNumeroDeux());
        $this->assertNull($obj->getVNumeroDeuxIni());
        $this->assertNull($obj->getVNumeroIni());
        $this->assertNull($obj->getValeurAcqForfait());
        $this->assertNull($obj->getValeurBaseAmortissement());
        $this->assertNull($obj->getValeurDeduction());
        $this->assertNull($obj->getValeurHT());
        $this->assertNull($obj->getValeurHTOrigine());
        $this->assertNull($obj->getZoneLibre1());
        $this->assertNull($obj->getZoneLibre2());
        $this->assertNull($obj->getZoneLibre3());
    }

    /**
     * Tests the setADAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetADAmortAnterieur() {

        $obj = new Immobilisations();

        $obj->setADAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getADAmortAnterieur());
    }

    /**
     * Tests the setADAmortAnterieur2() method.
     *
     * @return void
     */
    public function testSetADAmortAnterieur2() {

        $obj = new Immobilisations();

        $obj->setADAmortAnterieur2(10.092018);
        $this->assertEquals(10.092018, $obj->getADAmortAnterieur2());
    }

    /**
     * Tests the setADAnneesAmort() method.
     *
     * @return void
     */
    public function testSetADAnneesAmort() {

        $obj = new Immobilisations();

        $obj->setADAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getADAnneesAmort());
    }

    /**
     * Tests the setADCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetADCoeffDegressif() {

        $obj = new Immobilisations();

        $obj->setADCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getADCoeffDegressif());
    }

    /**
     * Tests the setADDeductionAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetADDeductionAmortAnterieur() {

        $obj = new Immobilisations();

        $obj->setADDeductionAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getADDeductionAmortAnterieur());
    }

    /**
     * Tests the setADDeductionDotation() method.
     *
     * @return void
     */
    public function testSetADDeductionDotation() {

        $obj = new Immobilisations();

        $obj->setADDeductionDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getADDeductionDotation());
    }

    /**
     * Tests the setADDotation() method.
     *
     * @return void
     */
    public function testSetADDotation() {

        $obj = new Immobilisations();

        $obj->setADDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getADDotation());
    }

    /**
     * Tests the setADDotation2() method.
     *
     * @return void
     */
    public function testSetADDotation2() {

        $obj = new Immobilisations();

        $obj->setADDotation2(10.092018);
        $this->assertEquals(10.092018, $obj->getADDotation2());
    }

    /**
     * Tests the setADDotationExcept() method.
     *
     * @return void
     */
    public function testSetADDotationExcept() {

        $obj = new Immobilisations();

        $obj->setADDotationExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getADDotationExcept());
    }

    /**
     * Tests the setADDuree() method.
     *
     * @return void
     */
    public function testSetADDuree() {

        $obj = new Immobilisations();

        $obj->setADDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getADDuree());
    }

    /**
     * Tests the setADDureeTot() method.
     *
     * @return void
     */
    public function testSetADDureeTot() {

        $obj = new Immobilisations();

        $obj->setADDureeTot("aDDureeTot");
        $this->assertEquals("aDDureeTot", $obj->getADDureeTot());
    }

    /**
     * Tests the setADGarderDotSaisie() method.
     *
     * @return void
     */
    public function testSetADGarderDotSaisie() {

        $obj = new Immobilisations();

        $obj->setADGarderDotSaisie(true);
        $this->assertEquals(true, $obj->getADGarderDotSaisie());
    }

    /**
     * Tests the setADQuantite() method.
     *
     * @return void
     */
    public function testSetADQuantite() {

        $obj = new Immobilisations();

        $obj->setADQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getADQuantite());
    }

    /**
     * Tests the setADTauxLineaire() method.
     *
     * @return void
     */
    public function testSetADTauxLineaire() {

        $obj = new Immobilisations();

        $obj->setADTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getADTauxLineaire());
    }

    /**
     * Tests the setADType() method.
     *
     * @return void
     */
    public function testSetADType() {

        $obj = new Immobilisations();

        $obj->setADType("aDType");
        $this->assertEquals("aDType", $obj->getADType());
    }

    /**
     * Tests the setAFAmortAnterieur() method.
     *
     * @return void
     */
    public function testSetAFAmortAnterieur() {

        $obj = new Immobilisations();

        $obj->setAFAmortAnterieur(10.092018);
        $this->assertEquals(10.092018, $obj->getAFAmortAnterieur());
    }

    /**
     * Tests the setAFAnneesAmort() method.
     *
     * @return void
     */
    public function testSetAFAnneesAmort() {

        $obj = new Immobilisations();

        $obj->setAFAnneesAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getAFAnneesAmort());
    }

    /**
     * Tests the setAFCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetAFCoeffDegressif() {

        $obj = new Immobilisations();

        $obj->setAFCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getAFCoeffDegressif());
    }

    /**
     * Tests the setAFDotation() method.
     *
     * @return void
     */
    public function testSetAFDotation() {

        $obj = new Immobilisations();

        $obj->setAFDotation(10.092018);
        $this->assertEquals(10.092018, $obj->getAFDotation());
    }

    /**
     * Tests the setAFDuree() method.
     *
     * @return void
     */
    public function testSetAFDuree() {

        $obj = new Immobilisations();

        $obj->setAFDuree(10.092018);
        $this->assertEquals(10.092018, $obj->getAFDuree());
    }

    /**
     * Tests the setAFSII() method.
     *
     * @return void
     */
    public function testSetAFSII() {

        $obj = new Immobilisations();

        $obj->setAFSII(true);
        $this->assertEquals(true, $obj->getAFSII());
    }

    /**
     * Tests the setAFTauxExcept() method.
     *
     * @return void
     */
    public function testSetAFTauxExcept() {

        $obj = new Immobilisations();

        $obj->setAFTauxExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getAFTauxExcept());
    }

    /**
     * Tests the setAFTauxLineaire() method.
     *
     * @return void
     */
    public function testSetAFTauxLineaire() {

        $obj = new Immobilisations();

        $obj->setAFTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getAFTauxLineaire());
    }

    /**
     * Tests the setAFType() method.
     *
     * @return void
     */
    public function testSetAFType() {

        $obj = new Immobilisations();

        $obj->setAFType("aFType");
        $this->assertEquals("aFType", $obj->getAFType());
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
     * Tests the setCRIsDot() method.
     *
     * @return void
     */
    public function testSetCRIsDot() {

        $obj = new Immobilisations();

        $obj->setCRIsDot(true);
        $this->assertEquals(true, $obj->getCRIsDot());
    }

    /**
     * Tests the setCRR151Motif() method.
     *
     * @return void
     */
    public function testSetCRR151Motif() {

        $obj = new Immobilisations();

        $obj->setCRR151Motif(true);
        $this->assertEquals(true, $obj->getCRR151Motif());
    }

    /**
     * Tests the setCRR151PMValueCT() method.
     *
     * @return void
     */
    public function testSetCRR151PMValueCT() {

        $obj = new Immobilisations();

        $obj->setCRR151PMValueCT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRR151PMValueCT());
    }

    /**
     * Tests the setCRR151PMValueLT() method.
     *
     * @return void
     */
    public function testSetCRR151PMValueLT() {

        $obj = new Immobilisations();

        $obj->setCRR151PMValueLT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRR151PMValueLT());
    }

    /**
     * Tests the setCRRDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCRRDate() {

        $obj = new Immobilisations();

        $obj->setCRRDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getCRRDate());
    }

    /**
     * Tests the setCRRPMValueCT() method.
     *
     * @return void
     */
    public function testSetCRRPMValueCT() {

        $obj = new Immobilisations();

        $obj->setCRRPMValueCT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPMValueCT());
    }

    /**
     * Tests the setCRRPMValueCTF() method.
     *
     * @return void
     */
    public function testSetCRRPMValueCTF() {

        $obj = new Immobilisations();

        $obj->setCRRPMValueCTF(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPMValueCTF());
    }

    /**
     * Tests the setCRRPMValueLT() method.
     *
     * @return void
     */
    public function testSetCRRPMValueLT() {

        $obj = new Immobilisations();

        $obj->setCRRPMValueLT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPMValueLT());
    }

    /**
     * Tests the setCRRPMValueLTF() method.
     *
     * @return void
     */
    public function testSetCRRPMValueLTF() {

        $obj = new Immobilisations();

        $obj->setCRRPMValueLTF(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPMValueLTF());
    }

    /**
     * Tests the setCRRPxCessionHT() method.
     *
     * @return void
     */
    public function testSetCRRPxCessionHT() {

        $obj = new Immobilisations();

        $obj->setCRRPxCessionHT(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRPxCessionHT());
    }

    /**
     * Tests the setCRRQteVendue() method.
     *
     * @return void
     */
    public function testSetCRRQteVendue() {

        $obj = new Immobilisations();

        $obj->setCRRQteVendue(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRQteVendue());
    }

    /**
     * Tests the setCRRSupplAmort() method.
     *
     * @return void
     */
    public function testSetCRRSupplAmort() {

        $obj = new Immobilisations();

        $obj->setCRRSupplAmort(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRSupplAmort());
    }

    /**
     * Tests the setCRRSupplValeur() method.
     *
     * @return void
     */
    public function testSetCRRSupplValeur() {

        $obj = new Immobilisations();

        $obj->setCRRSupplValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getCRRSupplValeur());
    }

    /**
     * Tests the setCRRType() method.
     *
     * @return void
     */
    public function testSetCRRType() {

        $obj = new Immobilisations();

        $obj->setCRRType("cRRType");
        $this->assertEquals("cRRType", $obj->getCRRType());
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
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new Immobilisations();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
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
     * Tests the setDIN() method.
     *
     * @return void
     */
    public function testSetDIN() {

        $obj = new Immobilisations();

        $obj->setDIN(true);
        $this->assertEquals(true, $obj->getDIN());
    }

    /**
     * Tests the setDateAcqForfait() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcqForfait() {

        $obj = new Immobilisations();

        $obj->setDateAcqForfait(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAcqForfait());
    }

    /**
     * Tests the setDateAcquisition() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition() {

        $obj = new Immobilisations();

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

        $obj = new Immobilisations();

        $obj->setDateMiseService(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateMiseService());
    }

    /**
     * Tests the setDateReeval() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReeval() {

        $obj = new Immobilisations();

        $obj->setDateReeval(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReeval());
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
     * Tests the setMontantTVA() method.
     *
     * @return void
     */
    public function testSetMontantTVA() {

        $obj = new Immobilisations();

        $obj->setMontantTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTVA());
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
     * Tests the setNumeroPJ() method.
     *
     * @return void
     */
    public function testSetNumeroPJ() {

        $obj = new Immobilisations();

        $obj->setNumeroPJ(10);
        $this->assertEquals(10, $obj->getNumeroPJ());
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
     * Tests the setTPDateOrigine() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTPDateOrigine() {

        $obj = new Immobilisations();

        $obj->setTPDateOrigine(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTPDateOrigine());
    }

    /**
     * Tests the setTauxTVA() method.
     *
     * @return void
     */
    public function testSetTauxTVA() {

        $obj = new Immobilisations();

        $obj->setTauxTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTVA());
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
     * Tests the setVDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetVDate() {

        $obj = new Immobilisations();

        $obj->setVDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getVDate());
    }

    /**
     * Tests the setVNCRealloc() method.
     *
     * @return void
     */
    public function testSetVNCRealloc() {

        $obj = new Immobilisations();

        $obj->setVNCRealloc(10.092018);
        $this->assertEquals(10.092018, $obj->getVNCRealloc());
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
     * Tests the setValeurHT() method.
     *
     * @return void
     */
    public function testSetValeurHT() {

        $obj = new Immobilisations();

        $obj->setValeurHT(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHT());
    }

    /**
     * Tests the setValeurHTOrigine() method.
     *
     * @return void
     */
    public function testSetValeurHTOrigine() {

        $obj = new Immobilisations();

        $obj->setValeurHTOrigine(10.092018);
        $this->assertEquals(10.092018, $obj->getValeurHTOrigine());
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
