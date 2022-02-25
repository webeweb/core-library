<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\Constantes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstantesTest extends AbstractTestCase {

    /**
     * Tests set35Heures()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSet35Heures(): void {

        // Set a Date/time mock.
        $_35Heures = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->set35Heures($_35Heures);
        $this->assertSame($_35Heures, $obj->get35Heures());
    }

    /**
     * Tests setAlertesPaieDansPointage()
     *
     * @return void
     */
    public function testSetAlertesPaieDansPointage(): void {

        $obj = new Constantes();

        $obj->setAlertesPaieDansPointage(true);
        $this->assertEquals(true, $obj->getAlertesPaieDansPointage());
    }

    /**
     * Tests setAlertesPaieDansReclam()
     *
     * @return void
     */
    public function testSetAlertesPaieDansReclam(): void {

        $obj = new Constantes();

        $obj->setAlertesPaieDansReclam(true);
        $this->assertEquals(true, $obj->getAlertesPaieDansReclam());
    }

    /**
     * Tests setAnalytiqueNatureAgence()
     *
     * @return void
     */
    public function testSetAnalytiqueNatureAgence(): void {

        $obj = new Constantes();

        $obj->setAnalytiqueNatureAgence(true);
        $this->assertEquals(true, $obj->getAnalytiqueNatureAgence());
    }

    /**
     * Tests setAnalytiqueParChantier()
     *
     * @return void
     */
    public function testSetAnalytiqueParChantier(): void {

        $obj = new Constantes();

        $obj->setAnalytiqueParChantier(true);
        $this->assertEquals(true, $obj->getAnalytiqueParChantier());
    }

    /**
     * Tests setArchiverDevis()
     *
     * @return void
     */
    public function testSetArchiverDevis(): void {

        $obj = new Constantes();

        $obj->setArchiverDevis(true);
        $this->assertEquals(true, $obj->getArchiverDevis());
    }

    /**
     * Tests setArchiverFacture()
     *
     * @return void
     */
    public function testSetArchiverFacture(): void {

        $obj = new Constantes();

        $obj->setArchiverFacture(true);
        $this->assertEquals(true, $obj->getArchiverFacture());
    }

    /**
     * Tests setArrondiSurPu()
     *
     * @return void
     */
    public function testSetArrondiSurPu(): void {

        $obj = new Constantes();

        $obj->setArrondiSurPu(true);
        $this->assertEquals(true, $obj->getArrondiSurPu());
    }

    /**
     * Tests setAutoriserDaSansMajStock()
     *
     * @return void
     */
    public function testSetAutoriserDaSansMajStock(): void {

        $obj = new Constantes();

        $obj->setAutoriserDaSansMajStock(true);
        $this->assertEquals(true, $obj->getAutoriserDaSansMajStock());
    }

    /**
     * Tests setAutoriserDepBudChaCdeType()
     *
     * @return void
     */
    public function testSetAutoriserDepBudChaCdeType(): void {

        $obj = new Constantes();

        $obj->setAutoriserDepBudChaCdeType(true);
        $this->assertEquals(true, $obj->getAutoriserDepBudChaCdeType());
    }

    /**
     * Tests setAutoriserMensuTacheVide()
     *
     * @return void
     */
    public function testSetAutoriserMensuTacheVide(): void {

        $obj = new Constantes();

        $obj->setAutoriserMensuTacheVide(true);
        $this->assertEquals(true, $obj->getAutoriserMensuTacheVide());
    }

    /**
     * Tests setBlNumFact()
     *
     * @return void
     */
    public function testSetBlNumFact(): void {

        $obj = new Constantes();

        $obj->setBlNumFact(10);
        $this->assertEquals(10, $obj->getBlNumFact());
    }

    /**
     * Tests setBlPrefixe()
     *
     * @return void
     */
    public function testSetBlPrefixe(): void {

        $obj = new Constantes();

        $obj->setBlPrefixe("blPrefixe");
        $this->assertEquals("blPrefixe", $obj->getBlPrefixe());
    }

    /**
     * Tests setBrNumFact()
     *
     * @return void
     */
    public function testSetBrNumFact(): void {

        $obj = new Constantes();

        $obj->setBrNumFact(10);
        $this->assertEquals(10, $obj->getBrNumFact());
    }

    /**
     * Tests setBrPrefixe()
     *
     * @return void
     */
    public function testSetBrPrefixe(): void {

        $obj = new Constantes();

        $obj->setBrPrefixe("brPrefixe");
        $this->assertEquals("brPrefixe", $obj->getBrPrefixe());
    }

    /**
     * Tests setBsNumFact()
     *
     * @return void
     */
    public function testSetBsNumFact(): void {

        $obj = new Constantes();

        $obj->setBsNumFact(10);
        $this->assertEquals(10, $obj->getBsNumFact());
    }

    /**
     * Tests setBsPrefixe()
     *
     * @return void
     */
    public function testSetBsPrefixe(): void {

        $obj = new Constantes();

        $obj->setBsPrefixe("bsPrefixe");
        $this->assertEquals("bsPrefixe", $obj->getBsPrefixe());
    }

    /**
     * Tests setCddMensuTotalHeures()
     *
     * @return void
     */
    public function testSetCddMensuTotalHeures(): void {

        $obj = new Constantes();

        $obj->setCddMensuTotalHeures(true);
        $this->assertEquals(true, $obj->getCddMensuTotalHeures());
    }

    /**
     * Tests setCdeClientNumFact()
     *
     * @return void
     */
    public function testSetCdeClientNumFact(): void {

        $obj = new Constantes();

        $obj->setCdeClientNumFact(10);
        $this->assertEquals(10, $obj->getCdeClientNumFact());
    }

    /**
     * Tests setCdeClientPrefixe()
     *
     * @return void
     */
    public function testSetCdeClientPrefixe(): void {

        $obj = new Constantes();

        $obj->setCdeClientPrefixe("cdeClientPrefixe");
        $this->assertEquals("cdeClientPrefixe", $obj->getCdeClientPrefixe());
    }

    /**
     * Tests setCdeFrnNumFact()
     *
     * @return void
     */
    public function testSetCdeFrnNumFact(): void {

        $obj = new Constantes();

        $obj->setCdeFrnNumFact(10);
        $this->assertEquals(10, $obj->getCdeFrnNumFact());
    }

    /**
     * Tests setCdeFrnPrefixe()
     *
     * @return void
     */
    public function testSetCdeFrnPrefixe(): void {

        $obj = new Constantes();

        $obj->setCdeFrnPrefixe("cdeFrnPrefixe");
        $this->assertEquals("cdeFrnPrefixe", $obj->getCdeFrnPrefixe());
    }

    /**
     * Tests setCentralisationVente()
     *
     * @return void
     */
    public function testSetCentralisationVente(): void {

        $obj = new Constantes();

        $obj->setCentralisationVente(true);
        $this->assertEquals(true, $obj->getCentralisationVente());
    }

    /**
     * Tests setChargeMensuelleSansTache()
     *
     * @return void
     */
    public function testSetChargeMensuelleSansTache(): void {

        $obj = new Constantes();

        $obj->setChargeMensuelleSansTache(true);
        $this->assertEquals(true, $obj->getChargeMensuelleSansTache());
    }

    /**
     * Tests setCheminDossCompta()
     *
     * @return void
     */
    public function testSetCheminDossCompta(): void {

        $obj = new Constantes();

        $obj->setCheminDossCompta("cheminDossCompta");
        $this->assertEquals("cheminDossCompta", $obj->getCheminDossCompta());
    }

    /**
     * Tests setCleDebloquerPeriodeCloturee()
     *
     * @return void
     */
    public function testSetCleDebloquerPeriodeCloturee(): void {

        $obj = new Constantes();

        $obj->setCleDebloquerPeriodeCloturee("cleDebloquerPeriodeCloturee");
        $this->assertEquals("cleDebloquerPeriodeCloturee", $obj->getCleDebloquerPeriodeCloturee());
    }

    /**
     * Tests setCodeAbsCpSansSolde()
     *
     * @return void
     */
    public function testSetCodeAbsCpSansSolde(): void {

        $obj = new Constantes();

        $obj->setCodeAbsCpSansSolde("codeAbsCpSansSolde");
        $this->assertEquals("codeAbsCpSansSolde", $obj->getCodeAbsCpSansSolde());
    }

    /**
     * Tests setCodeAbsDefJf()
     *
     * @return void
     */
    public function testSetCodeAbsDefJf(): void {

        $obj = new Constantes();

        $obj->setCodeAbsDefJf("codeAbsDefJf");
        $this->assertEquals("codeAbsDefJf", $obj->getCodeAbsDefJf());
    }

    /**
     * Tests setCodeAbsDefJfMoins3()
     *
     * @return void
     */
    public function testSetCodeAbsDefJfMoins3(): void {

        $obj = new Constantes();

        $obj->setCodeAbsDefJfMoins3("codeAbsDefJfMoins3");
        $this->assertEquals("codeAbsDefJfMoins3", $obj->getCodeAbsDefJfMoins3());
    }

    /**
     * Tests setCodeAbsFermetureChantier()
     *
     * @return void
     */
    public function testSetCodeAbsFermetureChantier(): void {

        $obj = new Constantes();

        $obj->setCodeAbsFermetureChantier("codeAbsFermetureChantier");
        $this->assertEquals("codeAbsFermetureChantier", $obj->getCodeAbsFermetureChantier());
    }

    /**
     * Tests setCodeAbsPointageDefaut()
     *
     * @return void
     */
    public function testSetCodeAbsPointageDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeAbsPointageDefaut("codeAbsPointageDefaut");
        $this->assertEquals("codeAbsPointageDefaut", $obj->getCodeAbsPointageDefaut());
    }

    /**
     * Tests setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new Constantes();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Constantes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeDepotParDefaut()
     *
     * @return void
     */
    public function testSetCodeDepotParDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeDepotParDefaut("codeDepotParDefaut");
        $this->assertEquals("codeDepotParDefaut", $obj->getCodeDepotParDefaut());
    }

    /**
     * Tests setCodeIcs()
     *
     * @return void
     */
    public function testSetCodeIcs(): void {

        $obj = new Constantes();

        $obj->setCodeIcs("codeIcs");
        $this->assertEquals("codeIcs", $obj->getCodeIcs());
    }

    /**
     * Tests setCodeJa()
     *
     * @return void
     */
    public function testSetCodeJa(): void {

        $obj = new Constantes();

        $obj->setCodeJa("codeJa");
        $this->assertEquals("codeJa", $obj->getCodeJa());
    }

    /**
     * Tests setCodeJvNegoce()
     *
     * @return void
     */
    public function testSetCodeJvNegoce(): void {

        $obj = new Constantes();

        $obj->setCodeJvNegoce("codeJvNegoce");
        $this->assertEquals("codeJvNegoce", $obj->getCodeJvNegoce());
    }

    /**
     * Tests setCodeJvPrestation()
     *
     * @return void
     */
    public function testSetCodeJvPrestation(): void {

        $obj = new Constantes();

        $obj->setCodeJvPrestation("codeJvPrestation");
        $this->assertEquals("codeJvPrestation", $obj->getCodeJvPrestation());
    }

    /**
     * Tests setCodeLivParDefaut()
     *
     * @return void
     */
    public function testSetCodeLivParDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeLivParDefaut("codeLivParDefaut");
        $this->assertEquals("codeLivParDefaut", $obj->getCodeLivParDefaut());
    }

    /**
     * Tests setCodePrimeChantier1()
     *
     * @return void
     */
    public function testSetCodePrimeChantier1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier1("codePrimeChantier1");
        $this->assertEquals("codePrimeChantier1", $obj->getCodePrimeChantier1());
    }

    /**
     * Tests setCodePrimeChantier2()
     *
     * @return void
     */
    public function testSetCodePrimeChantier2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier2("codePrimeChantier2");
        $this->assertEquals("codePrimeChantier2", $obj->getCodePrimeChantier2());
    }

    /**
     * Tests setCodePrimeChantier3()
     *
     * @return void
     */
    public function testSetCodePrimeChantier3(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier3("codePrimeChantier3");
        $this->assertEquals("codePrimeChantier3", $obj->getCodePrimeChantier3());
    }

    /**
     * Tests setCodePrimeDimanche1()
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1("codePrimeDimanche1");
        $this->assertEquals("codePrimeDimanche1", $obj->getCodePrimeDimanche1());
    }

    /**
     * Tests setCodePrimeDimanche1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1Type2("codePrimeDimanche1Type2");
        $this->assertEquals("codePrimeDimanche1Type2", $obj->getCodePrimeDimanche1Type2());
    }

    /**
     * Tests setCodePrimeDimanche2()
     *
     * @return void
     */
    public function testSetCodePrimeDimanche2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche2("codePrimeDimanche2");
        $this->assertEquals("codePrimeDimanche2", $obj->getCodePrimeDimanche2());
    }

    /**
     * Tests setCodePrimeForfait()
     *
     * @return void
     */
    public function testSetCodePrimeForfait(): void {

        $obj = new Constantes();

        $obj->setCodePrimeForfait("codePrimeForfait");
        $this->assertEquals("codePrimeForfait", $obj->getCodePrimeForfait());
    }

    /**
     * Tests setCodePrimeHCompl()
     *
     * @return void
     */
    public function testSetCodePrimeHCompl(): void {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl("codePrimeHCompl");
        $this->assertEquals("codePrimeHCompl", $obj->getCodePrimeHCompl());
    }

    /**
     * Tests setCodePrimeHCompl2()
     *
     * @return void
     */
    public function testSetCodePrimeHCompl2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl2("codePrimeHCompl2");
        $this->assertEquals("codePrimeHCompl2", $obj->getCodePrimeHCompl2());
    }

    /**
     * Tests setCodePrimeJf1()
     *
     * @return void
     */
    public function testSetCodePrimeJf1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf1("codePrimeJf1");
        $this->assertEquals("codePrimeJf1", $obj->getCodePrimeJf1());
    }

    /**
     * Tests setCodePrimeJf1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeJf1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf1Type2("codePrimeJf1Type2");
        $this->assertEquals("codePrimeJf1Type2", $obj->getCodePrimeJf1Type2());
    }

    /**
     * Tests setCodePrimeJf2()
     *
     * @return void
     */
    public function testSetCodePrimeJf2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf2("codePrimeJf2");
        $this->assertEquals("codePrimeJf2", $obj->getCodePrimeJf2());
    }

    /**
     * Tests setCodePrimeJfMai()
     *
     * @return void
     */
    public function testSetCodePrimeJfMai(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJfMai("codePrimeJfMai");
        $this->assertEquals("codePrimeJfMai", $obj->getCodePrimeJfMai());
    }

    /**
     * Tests setCodePrimeNuit1()
     *
     * @return void
     */
    public function testSetCodePrimeNuit1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1("codePrimeNuit1");
        $this->assertEquals("codePrimeNuit1", $obj->getCodePrimeNuit1());
    }

    /**
     * Tests setCodePrimeNuit1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeNuit1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1Type2("codePrimeNuit1Type2");
        $this->assertEquals("codePrimeNuit1Type2", $obj->getCodePrimeNuit1Type2());
    }

    /**
     * Tests setCodePrimeNuit2()
     *
     * @return void
     */
    public function testSetCodePrimeNuit2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit2("codePrimeNuit2");
        $this->assertEquals("codePrimeNuit2", $obj->getCodePrimeNuit2());
    }

    /**
     * Tests setCodePrimePaniers()
     *
     * @return void
     */
    public function testSetCodePrimePaniers(): void {

        $obj = new Constantes();

        $obj->setCodePrimePaniers("codePrimePaniers");
        $this->assertEquals("codePrimePaniers", $obj->getCodePrimePaniers());
    }

    /**
     * Tests setCodePrimeRs()
     *
     * @return void
     */
    public function testSetCodePrimeRs(): void {

        $obj = new Constantes();

        $obj->setCodePrimeRs("codePrimeRs");
        $this->assertEquals("codePrimeRs", $obj->getCodePrimeRs());
    }

    /**
     * Tests setCodePrimeTp()
     *
     * @return void
     */
    public function testSetCodePrimeTp(): void {

        $obj = new Constantes();

        $obj->setCodePrimeTp("codePrimeTp");
        $this->assertEquals("codePrimeTp", $obj->getCodePrimeTp());
    }

    /**
     * Tests setCodeRegJvNegDebut()
     *
     * @return void
     */
    public function testSetCodeRegJvNegDebut(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvNegDebut("codeRegJvNegDebut");
        $this->assertEquals("codeRegJvNegDebut", $obj->getCodeRegJvNegDebut());
    }

    /**
     * Tests setCodeRegJvNegFin()
     *
     * @return void
     */
    public function testSetCodeRegJvNegFin(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvNegFin("codeRegJvNegFin");
        $this->assertEquals("codeRegJvNegFin", $obj->getCodeRegJvNegFin());
    }

    /**
     * Tests setCodeRegJvPrestDebut()
     *
     * @return void
     */
    public function testSetCodeRegJvPrestDebut(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvPrestDebut("codeRegJvPrestDebut");
        $this->assertEquals("codeRegJvPrestDebut", $obj->getCodeRegJvPrestDebut());
    }

    /**
     * Tests setCodeRegJvPrestFin()
     *
     * @return void
     */
    public function testSetCodeRegJvPrestFin(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvPrestFin("codeRegJvPrestFin");
        $this->assertEquals("codeRegJvPrestFin", $obj->getCodeRegJvPrestFin());
    }

    /**
     * Tests setCodeTacheDefaut()
     *
     * @return void
     */
    public function testSetCodeTacheDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeTacheDefaut("codeTacheDefaut");
        $this->assertEquals("codeTacheDefaut", $obj->getCodeTacheDefaut());
    }

    /**
     * Tests setCollectifDef()
     *
     * @return void
     */
    public function testSetCollectifDef(): void {

        $obj = new Constantes();

        $obj->setCollectifDef("collectifDef");
        $this->assertEquals("collectifDef", $obj->getCollectifDef());
    }

    /**
     * Tests setCollectifDefFournisseur()
     *
     * @return void
     */
    public function testSetCollectifDefFournisseur(): void {

        $obj = new Constantes();

        $obj->setCollectifDefFournisseur("collectifDefFournisseur");
        $this->assertEquals("collectifDefFournisseur", $obj->getCollectifDefFournisseur());
    }

    /**
     * Tests setCommentaireJourneeSolidarite()
     *
     * @return void
     */
    public function testSetCommentaireJourneeSolidarite(): void {

        $obj = new Constantes();

        $obj->setCommentaireJourneeSolidarite("commentaireJourneeSolidarite");
        $this->assertEquals("commentaireJourneeSolidarite", $obj->getCommentaireJourneeSolidarite());
    }

    /**
     * Tests setCompteCollectifAchat()
     *
     * @return void
     */
    public function testSetCompteCollectifAchat(): void {

        $obj = new Constantes();

        $obj->setCompteCollectifAchat("compteCollectifAchat");
        $this->assertEquals("compteCollectifAchat", $obj->getCompteCollectifAchat());
    }

    /**
     * Tests setCompteCollectifVente()
     *
     * @return void
     */
    public function testSetCompteCollectifVente(): void {

        $obj = new Constantes();

        $obj->setCompteCollectifVente("compteCollectifVente");
        $this->assertEquals("compteCollectifVente", $obj->getCompteCollectifVente());
    }

    /**
     * Tests setCompteEscompteCaExonere()
     *
     * @return void
     */
    public function testSetCompteEscompteCaExonere(): void {

        $obj = new Constantes();

        $obj->setCompteEscompteCaExonere("compteEscompteCaExonere");
        $this->assertEquals("compteEscompteCaExonere", $obj->getCompteEscompteCaExonere());
    }

    /**
     * Tests setCompteEscompteSoumisTva()
     *
     * @return void
     */
    public function testSetCompteEscompteSoumisTva(): void {

        $obj = new Constantes();

        $obj->setCompteEscompteSoumisTva("compteEscompteSoumisTva");
        $this->assertEquals("compteEscompteSoumisTva", $obj->getCompteEscompteSoumisTva());
    }

    /**
     * Tests setCompteTvaAchat()
     *
     * @return void
     */
    public function testSetCompteTvaAchat(): void {

        $obj = new Constantes();

        $obj->setCompteTvaAchat("compteTvaAchat");
        $this->assertEquals("compteTvaAchat", $obj->getCompteTvaAchat());
    }

    /**
     * Tests setCompteTvaTaxeDeee()
     *
     * @return void
     */
    public function testSetCompteTvaTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setCompteTvaTaxeDeee("compteTvaTaxeDeee");
        $this->assertEquals("compteTvaTaxeDeee", $obj->getCompteTvaTaxeDeee());
    }

    /**
     * Tests setCompteTvaVente()
     *
     * @return void
     */
    public function testSetCompteTvaVente(): void {

        $obj = new Constantes();

        $obj->setCompteTvaVente("compteTvaVente");
        $this->assertEquals("compteTvaVente", $obj->getCompteTvaVente());
    }

    /**
     * Tests setCompteVentilTaxeDeee()
     *
     * @return void
     */
    public function testSetCompteVentilTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setCompteVentilTaxeDeee("compteVentilTaxeDeee");
        $this->assertEquals("compteVentilTaxeDeee", $obj->getCompteVentilTaxeDeee());
    }

    /**
     * Tests setCompterSamediTfCpPaie()
     *
     * @return void
     */
    public function testSetCompterSamediTfCpPaie(): void {

        $obj = new Constantes();

        $obj->setCompterSamediTfCpPaie(true);
        $this->assertEquals(true, $obj->getCompterSamediTfCpPaie());
    }

    /**
     * Tests setControlerCdeFrn()
     *
     * @return void
     */
    public function testSetControlerCdeFrn(): void {

        $obj = new Constantes();

        $obj->setControlerCdeFrn(true);
        $this->assertEquals(true, $obj->getControlerCdeFrn());
    }

    /**
     * Tests setControlerChargesMensuelles()
     *
     * @return void
     */
    public function testSetControlerChargesMensuelles(): void {

        $obj = new Constantes();

        $obj->setControlerChargesMensuelles(true);
        $this->assertEquals(true, $obj->getControlerChargesMensuelles());
    }

    /**
     * Tests setControlerCodeReg()
     *
     * @return void
     */
    public function testSetControlerCodeReg(): void {

        $obj = new Constantes();

        $obj->setControlerCodeReg(true);
        $this->assertEquals(true, $obj->getControlerCodeReg());
    }

    /**
     * Tests setControlerDepHcMax()
     *
     * @return void
     */
    public function testSetControlerDepHcMax(): void {

        $obj = new Constantes();

        $obj->setControlerDepHcMax(true);
        $this->assertEquals(true, $obj->getControlerDepHcMax());
    }

    /**
     * Tests setControlerDepHcPlusMois()
     *
     * @return void
     */
    public function testSetControlerDepHcPlusMois(): void {

        $obj = new Constantes();

        $obj->setControlerDepHcPlusMois(true);
        $this->assertEquals(true, $obj->getControlerDepHcPlusMois());
    }

    /**
     * Tests setCpSansProvisions()
     *
     * @return void
     */
    public function testSetCpSansProvisions(): void {

        $obj = new Constantes();

        $obj->setCpSansProvisions(true);
        $this->assertEquals(true, $obj->getCpSansProvisions());
    }

    /**
     * Tests setCreerAlertePaieDefEnPaie()
     *
     * @return void
     */
    public function testSetCreerAlertePaieDefEnPaie(): void {

        $obj = new Constantes();

        $obj->setCreerAlertePaieDefEnPaie(true);
        $this->assertEquals(true, $obj->getCreerAlertePaieDefEnPaie());
    }

    /**
     * Tests setCtrlAutoCp()
     *
     * @return void
     */
    public function testSetCtrlAutoCp(): void {

        $obj = new Constantes();

        $obj->setCtrlAutoCp(true);
        $this->assertEquals(true, $obj->getCtrlAutoCp());
    }

    /**
     * Tests setCtrlAutoCpAvecAnticipation()
     *
     * @return void
     */
    public function testSetCtrlAutoCpAvecAnticipation(): void {

        $obj = new Constantes();

        $obj->setCtrlAutoCpAvecAnticipation(true);
        $this->assertEquals(true, $obj->getCtrlAutoCpAvecAnticipation());
    }

    /**
     * Tests setDateAppliGestionHeuresEnPlus()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAppliGestionHeuresEnPlus(): void {

        // Set a Date/time mock.
        $dateAppliGestionHeuresEnPlus = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateAppliGestionHeuresEnPlus($dateAppliGestionHeuresEnPlus);
        $this->assertSame($dateAppliGestionHeuresEnPlus, $obj->getDateAppliGestionHeuresEnPlus());
    }

    /**
     * Tests setDateJourneeSolidarite()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateJourneeSolidarite(): void {

        // Set a Date/time mock.
        $dateJourneeSolidarite = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateJourneeSolidarite($dateJourneeSolidarite);
        $this->assertSame($dateJourneeSolidarite, $obj->getDateJourneeSolidarite());
    }

    /**
     * Tests setDateValidationSynchro()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests setDecMoisPrepFact()
     *
     * @return void
     */
    public function testSetDecMoisPrepFact(): void {

        $obj = new Constantes();

        $obj->setDecMoisPrepFact(10);
        $this->assertEquals(10, $obj->getDecMoisPrepFact());
    }

    /**
     * Tests setDernierCompteClient()
     *
     * @return void
     */
    public function testSetDernierCompteClient(): void {

        $obj = new Constantes();

        $obj->setDernierCompteClient("dernierCompteClient");
        $this->assertEquals("dernierCompteClient", $obj->getDernierCompteClient());
    }

    /**
     * Tests setDernierCompteFrn()
     *
     * @return void
     */
    public function testSetDernierCompteFrn(): void {

        $obj = new Constantes();

        $obj->setDernierCompteFrn("dernierCompteFrn");
        $this->assertEquals("dernierCompteFrn", $obj->getDernierCompteFrn());
    }

    /**
     * Tests setDiscr()
     *
     * @return void
     */
    public function testSetDiscr(): void {

        $obj = new Constantes();

        $obj->setDiscr("discr");
        $this->assertEquals("discr", $obj->getDiscr());
    }

    /**
     * Tests setDossCompta()
     *
     * @return void
     */
    public function testSetDossCompta(): void {

        $obj = new Constantes();

        $obj->setDossCompta("dossCompta");
        $this->assertEquals("dossCompta", $obj->getDossCompta());
    }

    /**
     * Tests setDossPaie()
     *
     * @return void
     */
    public function testSetDossPaie(): void {

        $obj = new Constantes();

        $obj->setDossPaie("dossPaie");
        $this->assertEquals("dossPaie", $obj->getDossPaie());
    }

    /**
     * Tests setEsCodeAbsEntree()
     *
     * @return void
     */
    public function testSetEsCodeAbsEntree(): void {

        $obj = new Constantes();

        $obj->setEsCodeAbsEntree("esCodeAbsEntree");
        $this->assertEquals("esCodeAbsEntree", $obj->getEsCodeAbsEntree());
    }

    /**
     * Tests setEsCodeAbsSortie()
     *
     * @return void
     */
    public function testSetEsCodeAbsSortie(): void {

        $obj = new Constantes();

        $obj->setEsCodeAbsSortie("esCodeAbsSortie");
        $this->assertEquals("esCodeAbsSortie", $obj->getEsCodeAbsSortie());
    }

    /**
     * Tests setEsHeuresReelles()
     *
     * @return void
     */
    public function testSetEsHeuresReelles(): void {

        $obj = new Constantes();

        $obj->setEsHeuresReelles(true);
        $this->assertEquals(true, $obj->getEsHeuresReelles());
    }

    /**
     * Tests setEtablissementsPaie()
     *
     * @return void
     */
    public function testSetEtablissementsPaie(): void {

        $obj = new Constantes();

        $obj->setEtablissementsPaie("etablissementsPaie");
        $this->assertEquals("etablissementsPaie", $obj->getEtablissementsPaie());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Constantes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setEuro()
     *
     * @return void
     */
    public function testSetEuro(): void {

        $obj = new Constantes();

        $obj->setEuro(true);
        $this->assertEquals(true, $obj->getEuro());
    }

    /**
     * Tests setFacturationProrataHeures()
     *
     * @return void
     */
    public function testSetFacturationProrataHeures(): void {

        $obj = new Constantes();

        $obj->setFacturationProrataHeures(true);
        $this->assertEquals(true, $obj->getFacturationProrataHeures());
    }

    /**
     * Tests setFolioJa()
     *
     * @return void
     */
    public function testSetFolioJa(): void {

        $obj = new Constantes();

        $obj->setFolioJa("folioJa");
        $this->assertEquals("folioJa", $obj->getFolioJa());
    }

    /**
     * Tests setFolioJvNegoce()
     *
     * @return void
     */
    public function testSetFolioJvNegoce(): void {

        $obj = new Constantes();

        $obj->setFolioJvNegoce("folioJvNegoce");
        $this->assertEquals("folioJvNegoce", $obj->getFolioJvNegoce());
    }

    /**
     * Tests setFolioJvPrestation()
     *
     * @return void
     */
    public function testSetFolioJvPrestation(): void {

        $obj = new Constantes();

        $obj->setFolioJvPrestation("folioJvPrestation");
        $this->assertEquals("folioJvPrestation", $obj->getFolioJvPrestation());
    }

    /**
     * Tests setGererNumCptChantier()
     *
     * @return void
     */
    public function testSetGererNumCptChantier(): void {

        $obj = new Constantes();

        $obj->setGererNumCptChantier(true);
        $this->assertEquals(true, $obj->getGererNumCptChantier());
    }

    /**
     * Tests setGestionHCompl()
     *
     * @return void
     */
    public function testSetGestionHCompl(): void {

        $obj = new Constantes();

        $obj->setGestionHCompl(true);
        $this->assertEquals(true, $obj->getGestionHCompl());
    }

    /**
     * Tests setGestionHSupMens()
     *
     * @return void
     */
    public function testSetGestionHSupMens(): void {

        $obj = new Constantes();

        $obj->setGestionHSupMens(true);
        $this->assertEquals(true, $obj->getGestionHSupMens());
    }

    /**
     * Tests setGestionHSupMensuelle()
     *
     * @return void
     */
    public function testSetGestionHSupMensuelle(): void {

        $obj = new Constantes();

        $obj->setGestionHSupMensuelle(true);
        $this->assertEquals(true, $obj->getGestionHSupMensuelle());
    }

    /**
     * Tests setGestionMajDim()
     *
     * @return void
     */
    public function testSetGestionMajDim(): void {

        $obj = new Constantes();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Tests setGestionMajJf()
     *
     * @return void
     */
    public function testSetGestionMajJf(): void {

        $obj = new Constantes();

        $obj->setGestionMajJf("gestionMajJf");
        $this->assertEquals("gestionMajJf", $obj->getGestionMajJf());
    }

    /**
     * Tests setGestionMajNuit()
     *
     * @return void
     */
    public function testSetGestionMajNuit(): void {

        $obj = new Constantes();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Tests setGestionMultiDepot()
     *
     * @return void
     */
    public function testSetGestionMultiDepot(): void {

        $obj = new Constantes();

        $obj->setGestionMultiDepot(true);
        $this->assertEquals(true, $obj->getGestionMultiDepot());
    }

    /**
     * Tests setGestionQuotas()
     *
     * @return void
     */
    public function testSetGestionQuotas(): void {

        $obj = new Constantes();

        $obj->setGestionQuotas(true);
        $this->assertEquals(true, $obj->getGestionQuotas());
    }

    /**
     * Tests setGestionSpecifJf()
     *
     * @return void
     */
    public function testSetGestionSpecifJf(): void {

        $obj = new Constantes();

        $obj->setGestionSpecifJf(true);
        $this->assertEquals(true, $obj->getGestionSpecifJf());
    }

    /**
     * Tests setGestionSpecifMajoJf()
     *
     * @return void
     */
    public function testSetGestionSpecifMajoJf(): void {

        $obj = new Constantes();

        $obj->setGestionSpecifMajoJf(true);
        $this->assertEquals(true, $obj->getGestionSpecifMajoJf());
    }

    /**
     * Tests setHDebNuit()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHDebNuit(): void {

        // Set a Date/time mock.
        $hDebNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHDebNuit($hDebNuit);
        $this->assertSame($hDebNuit, $obj->getHDebNuit());
    }

    /**
     * Tests setHDebNuitTravNuit()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHDebNuitTravNuit(): void {

        // Set a Date/time mock.
        $hDebNuitTravNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHDebNuitTravNuit($hDebNuitTravNuit);
        $this->assertSame($hDebNuitTravNuit, $obj->getHDebNuitTravNuit());
    }

    /**
     * Tests setHFinNuit()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHFinNuit(): void {

        // Set a Date/time mock.
        $hFinNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHFinNuit($hFinNuit);
        $this->assertSame($hFinNuit, $obj->getHFinNuit());
    }

    /**
     * Tests setHFinNuitTravNuit()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHFinNuitTravNuit(): void {

        // Set a Date/time mock.
        $hFinNuitTravNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHFinNuitTravNuit($hFinNuitTravNuit);
        $this->assertSame($hFinNuitTravNuit, $obj->getHFinNuitTravNuit());
    }

    /**
     * Tests setHeuresAbsenceMensualise()
     *
     * @return void
     */
    public function testSetHeuresAbsenceMensualise(): void {

        $obj = new Constantes();

        $obj->setHeuresAbsenceMensualise(true);
        $this->assertEquals(true, $obj->getHeuresAbsenceMensualise());
    }

    /**
     * Tests setHeuresRemplEgalesMensTitulaire()
     *
     * @return void
     */
    public function testSetHeuresRemplEgalesMensTitulaire(): void {

        $obj = new Constantes();

        $obj->setHeuresRemplEgalesMensTitulaire(true);
        $this->assertEquals(true, $obj->getHeuresRemplEgalesMensTitulaire());
    }

    /**
     * Tests setIncrementCompteAuto()
     *
     * @return void
     */
    public function testSetIncrementCompteAuto(): void {

        $obj = new Constantes();

        $obj->setIncrementCompteAuto(10);
        $this->assertEquals(10, $obj->getIncrementCompteAuto());
    }

    /**
     * Tests setLiaisonComptaWin()
     *
     * @return void
     */
    public function testSetLiaisonComptaWin(): void {

        $obj = new Constantes();

        $obj->setLiaisonComptaWin(true);
        $this->assertEquals(true, $obj->getLiaisonComptaWin());
    }

    /**
     * Tests setLibCritereBool1()
     *
     * @return void
     */
    public function testSetLibCritereBool1(): void {

        $obj = new Constantes();

        $obj->setLibCritereBool1("libCritereBool1");
        $this->assertEquals("libCritereBool1", $obj->getLibCritereBool1());
    }

    /**
     * Tests setLibCritereBool2()
     *
     * @return void
     */
    public function testSetLibCritereBool2(): void {

        $obj = new Constantes();

        $obj->setLibCritereBool2("libCritereBool2");
        $this->assertEquals("libCritereBool2", $obj->getLibCritereBool2());
    }

    /**
     * Tests setLibCritereByte1()
     *
     * @return void
     */
    public function testSetLibCritereByte1(): void {

        $obj = new Constantes();

        $obj->setLibCritereByte1("libCritereByte1");
        $this->assertEquals("libCritereByte1", $obj->getLibCritereByte1());
    }

    /**
     * Tests setLibCritereNum1()
     *
     * @return void
     */
    public function testSetLibCritereNum1(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum1("libCritereNum1");
        $this->assertEquals("libCritereNum1", $obj->getLibCritereNum1());
    }

    /**
     * Tests setLibCritereNum2()
     *
     * @return void
     */
    public function testSetLibCritereNum2(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum2("libCritereNum2");
        $this->assertEquals("libCritereNum2", $obj->getLibCritereNum2());
    }

    /**
     * Tests setLibCritereNum3()
     *
     * @return void
     */
    public function testSetLibCritereNum3(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum3("libCritereNum3");
        $this->assertEquals("libCritereNum3", $obj->getLibCritereNum3());
    }

    /**
     * Tests setLibCritereNum4()
     *
     * @return void
     */
    public function testSetLibCritereNum4(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum4("libCritereNum4");
        $this->assertEquals("libCritereNum4", $obj->getLibCritereNum4());
    }

    /**
     * Tests setLibCritereNum5()
     *
     * @return void
     */
    public function testSetLibCritereNum5(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum5("libCritereNum5");
        $this->assertEquals("libCritereNum5", $obj->getLibCritereNum5());
    }

    /**
     * Tests setLibCritereTab1()
     *
     * @return void
     */
    public function testSetLibCritereTab1(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab1("libCritereTab1");
        $this->assertEquals("libCritereTab1", $obj->getLibCritereTab1());
    }

    /**
     * Tests setLibCritereTab2()
     *
     * @return void
     */
    public function testSetLibCritereTab2(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab2("libCritereTab2");
        $this->assertEquals("libCritereTab2", $obj->getLibCritereTab2());
    }

    /**
     * Tests setLibCritereTab3()
     *
     * @return void
     */
    public function testSetLibCritereTab3(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab3("libCritereTab3");
        $this->assertEquals("libCritereTab3", $obj->getLibCritereTab3());
    }

    /**
     * Tests setLibCritereTab4()
     *
     * @return void
     */
    public function testSetLibCritereTab4(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab4("libCritereTab4");
        $this->assertEquals("libCritereTab4", $obj->getLibCritereTab4());
    }

    /**
     * Tests setLibCritereTab5()
     *
     * @return void
     */
    public function testSetLibCritereTab5(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab5("libCritereTab5");
        $this->assertEquals("libCritereTab5", $obj->getLibCritereTab5());
    }

    /**
     * Tests setLibCritereTxt1()
     *
     * @return void
     */
    public function testSetLibCritereTxt1(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt1("libCritereTxt1");
        $this->assertEquals("libCritereTxt1", $obj->getLibCritereTxt1());
    }

    /**
     * Tests setLibCritereTxt2()
     *
     * @return void
     */
    public function testSetLibCritereTxt2(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt2("libCritereTxt2");
        $this->assertEquals("libCritereTxt2", $obj->getLibCritereTxt2());
    }

    /**
     * Tests setLibCritereTxt3()
     *
     * @return void
     */
    public function testSetLibCritereTxt3(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt3("libCritereTxt3");
        $this->assertEquals("libCritereTxt3", $obj->getLibCritereTxt3());
    }

    /**
     * Tests setLibCritereTxt4()
     *
     * @return void
     */
    public function testSetLibCritereTxt4(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt4("libCritereTxt4");
        $this->assertEquals("libCritereTxt4", $obj->getLibCritereTxt4());
    }

    /**
     * Tests setLibCritereTxt5()
     *
     * @return void
     */
    public function testSetLibCritereTxt5(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt5("libCritereTxt5");
        $this->assertEquals("libCritereTxt5", $obj->getLibCritereTxt5());
    }

    /**
     * Tests setLibelleAutoAvoir()
     *
     * @return void
     */
    public function testSetLibelleAutoAvoir(): void {

        $obj = new Constantes();

        $obj->setLibelleAutoAvoir("libelleAutoAvoir");
        $this->assertEquals("libelleAutoAvoir", $obj->getLibelleAutoAvoir());
    }

    /**
     * Tests setLibelleAutoFacture()
     *
     * @return void
     */
    public function testSetLibelleAutoFacture(): void {

        $obj = new Constantes();

        $obj->setLibelleAutoFacture("libelleAutoFacture");
        $this->assertEquals("libelleAutoFacture", $obj->getLibelleAutoFacture());
    }

    /**
     * Tests setLibelleHeuresSurcroit()
     *
     * @return void
     */
    public function testSetLibelleHeuresSurcroit(): void {

        $obj = new Constantes();

        $obj->setLibelleHeuresSurcroit("libelleHeuresSurcroit");
        $this->assertEquals("libelleHeuresSurcroit", $obj->getLibelleHeuresSurcroit());
    }

    /**
     * Tests setLibelleTransfert()
     *
     * @return void
     */
    public function testSetLibelleTransfert(): void {

        $obj = new Constantes();

        $obj->setLibelleTransfert("libelleTransfert");
        $this->assertEquals("libelleTransfert", $obj->getLibelleTransfert());
    }

    /**
     * Tests setLibelleTransfertAchat()
     *
     * @return void
     */
    public function testSetLibelleTransfertAchat(): void {

        $obj = new Constantes();

        $obj->setLibelleTransfertAchat("libelleTransfertAchat");
        $this->assertEquals("libelleTransfertAchat", $obj->getLibelleTransfertAchat());
    }

    /**
     * Tests setLivCdeFrnDepotUnique()
     *
     * @return void
     */
    public function testSetLivCdeFrnDepotUnique(): void {

        $obj = new Constantes();

        $obj->setLivCdeFrnDepotUnique(true);
        $this->assertEquals(true, $obj->getLivCdeFrnDepotUnique());
    }

    /**
     * Tests setMailAttestations()
     *
     * @return void
     */
    public function testSetMailAttestations(): void {

        $obj = new Constantes();

        $obj->setMailAttestations("mailAttestations");
        $this->assertEquals("mailAttestations", $obj->getMailAttestations());
    }

    /**
     * Tests setMailFactures()
     *
     * @return void
     */
    public function testSetMailFactures(): void {

        $obj = new Constantes();

        $obj->setMailFactures("mailFactures");
        $this->assertEquals("mailFactures", $obj->getMailFactures());
    }

    /**
     * Tests setMajDernierPassageBt()
     *
     * @return void
     */
    public function testSetMajDernierPassageBt(): void {

        $obj = new Constantes();

        $obj->setMajDernierPassageBt(true);
        $this->assertEquals(true, $obj->getMajDernierPassageBt());
    }

    /**
     * Tests setMajDernierPrixAchat()
     *
     * @return void
     */
    public function testSetMajDernierPrixAchat(): void {

        $obj = new Constantes();

        $obj->setMajDernierPrixAchat(true);
        $this->assertEquals(true, $obj->getMajDernierPrixAchat());
    }

    /**
     * Tests setMajPamp()
     *
     * @return void
     */
    public function testSetMajPamp(): void {

        $obj = new Constantes();

        $obj->setMajPamp(true);
        $this->assertEquals(true, $obj->getMajPamp());
    }

    /**
     * Tests setMajorationCascade()
     *
     * @return void
     */
    public function testSetMajorationCascade(): void {

        $obj = new Constantes();

        $obj->setMajorationCascade(true);
        $this->assertEquals(true, $obj->getMajorationCascade());
    }

    /**
     * Tests setMajorationHPlus()
     *
     * @return void
     */
    public function testSetMajorationHPlus(): void {

        $obj = new Constantes();

        $obj->setMajorationHPlus("majorationHPlus");
        $this->assertEquals("majorationHPlus", $obj->getMajorationHPlus());
    }

    /**
     * Tests setMargeNiveauEdition()
     *
     * @return void
     */
    public function testSetMargeNiveauEdition(): void {

        $obj = new Constantes();

        $obj->setMargeNiveauEdition("margeNiveauEdition");
        $this->assertEquals("margeNiveauEdition", $obj->getMargeNiveauEdition());
    }

    /**
     * Tests setMargePourcentCharge()
     *
     * @return void
     */
    public function testSetMargePourcentCharge(): void {

        $obj = new Constantes();

        $obj->setMargePourcentCharge(10.092018);
        $this->assertEquals(10.092018, $obj->getMargePourcentCharge());
    }

    /**
     * Tests setMargeSalInspProrataCa()
     *
     * @return void
     */
    public function testSetMargeSalInspProrataCa(): void {

        $obj = new Constantes();

        $obj->setMargeSalInspProrataCa(true);
        $this->assertEquals(true, $obj->getMargeSalInspProrataCa());
    }

    /**
     * Tests setMensualisationTache()
     *
     * @return void
     */
    public function testSetMensualisationTache(): void {

        $obj = new Constantes();

        $obj->setMensualisationTache(true);
        $this->assertEquals(true, $obj->getMensualisationTache());
    }

    /**
     * Tests setModeCalculPropositionCde()
     *
     * @return void
     */
    public function testSetModeCalculPropositionCde(): void {

        $obj = new Constantes();

        $obj->setModeCalculPropositionCde("modeCalculPropositionCde");
        $this->assertEquals("modeCalculPropositionCde", $obj->getModeCalculPropositionCde());
    }

    /**
     * Tests setModeleDevis()
     *
     * @return void
     */
    public function testSetModeleDevis(): void {

        $obj = new Constantes();

        $obj->setModeleDevis("modeleDevis");
        $this->assertEquals("modeleDevis", $obj->getModeleDevis());
    }

    /**
     * Tests setModeleDevisTech()
     *
     * @return void
     */
    public function testSetModeleDevisTech(): void {

        $obj = new Constantes();

        $obj->setModeleDevisTech("modeleDevisTech");
        $this->assertEquals("modeleDevisTech", $obj->getModeleDevisTech());
    }

    /**
     * Tests setModeleFacture()
     *
     * @return void
     */
    public function testSetModeleFacture(): void {

        $obj = new Constantes();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Tests setMtCptaNegatif()
     *
     * @return void
     */
    public function testSetMtCptaNegatif(): void {

        $obj = new Constantes();

        $obj->setMtCptaNegatif(true);
        $this->assertEquals(true, $obj->getMtCptaNegatif());
    }

    /**
     * Tests setNDerDocument()
     *
     * @return void
     */
    public function testSetNDerDocument(): void {

        $obj = new Constantes();

        $obj->setNDerDocument(10);
        $this->assertEquals(10, $obj->getNDerDocument());
    }

    /**
     * Tests setNbCaracteresLigneFact()
     *
     * @return void
     */
    public function testSetNbCaracteresLigneFact(): void {

        $obj = new Constantes();

        $obj->setNbCaracteresLigneFact("nbCaracteresLigneFact");
        $this->assertEquals("nbCaracteresLigneFact", $obj->getNbCaracteresLigneFact());
    }

    /**
     * Tests setNbDecimalesPrixUnitaire()
     *
     * @return void
     */
    public function testSetNbDecimalesPrixUnitaire(): void {

        $obj = new Constantes();

        $obj->setNbDecimalesPrixUnitaire("nbDecimalesPrixUnitaire");
        $this->assertEquals("nbDecimalesPrixUnitaire", $obj->getNbDecimalesPrixUnitaire());
    }

    /**
     * Tests setNbDecimalesQuantite()
     *
     * @return void
     */
    public function testSetNbDecimalesQuantite(): void {

        $obj = new Constantes();

        $obj->setNbDecimalesQuantite("nbDecimalesQuantite");
        $this->assertEquals("nbDecimalesQuantite", $obj->getNbDecimalesQuantite());
    }

    /**
     * Tests setNbEntiersPrixUnitaire()
     *
     * @return void
     */
    public function testSetNbEntiersPrixUnitaire(): void {

        $obj = new Constantes();

        $obj->setNbEntiersPrixUnitaire("nbEntiersPrixUnitaire");
        $this->assertEquals("nbEntiersPrixUnitaire", $obj->getNbEntiersPrixUnitaire());
    }

    /**
     * Tests setNbEntiersQuantite()
     *
     * @return void
     */
    public function testSetNbEntiersQuantite(): void {

        $obj = new Constantes();

        $obj->setNbEntiersQuantite("nbEntiersQuantite");
        $this->assertEquals("nbEntiersQuantite", $obj->getNbEntiersQuantite());
    }

    /**
     * Tests setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Constantes();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests setNbJoursAbsProratisationDcp()
     *
     * @return void
     */
    public function testSetNbJoursAbsProratisationDcp(): void {

        $obj = new Constantes();

        $obj->setNbJoursAbsProratisationDcp(10);
        $this->assertEquals(10, $obj->getNbJoursAbsProratisationDcp());
    }

    /**
     * Tests setNbMoisConsecutifs()
     *
     * @return void
     */
    public function testSetNbMoisConsecutifs(): void {

        $obj = new Constantes();

        $obj->setNbMoisConsecutifs(10);
        $this->assertEquals(10, $obj->getNbMoisConsecutifs());
    }

    /**
     * Tests setNomFactNbLignes()
     *
     * @return void
     */
    public function testSetNomFactNbLignes(): void {

        $obj = new Constantes();

        $obj->setNomFactNbLignes("nomFactNbLignes");
        $this->assertEquals("nomFactNbLignes", $obj->getNomFactNbLignes());
    }

    /**
     * Tests setNomFichierAsciiAchat()
     *
     * @return void
     */
    public function testSetNomFichierAsciiAchat(): void {

        $obj = new Constantes();

        $obj->setNomFichierAsciiAchat("nomFichierAsciiAchat");
        $this->assertEquals("nomFichierAsciiAchat", $obj->getNomFichierAsciiAchat());
    }

    /**
     * Tests setNomFichierAsciiVente()
     *
     * @return void
     */
    public function testSetNomFichierAsciiVente(): void {

        $obj = new Constantes();

        $obj->setNomFichierAsciiVente("nomFichierAsciiVente");
        $this->assertEquals("nomFichierAsciiVente", $obj->getNomFichierAsciiVente());
    }

    /**
     * Tests setNote0NonConforme()
     *
     * @return void
     */
    public function testSetNote0NonConforme(): void {

        $obj = new Constantes();

        $obj->setNote0NonConforme(true);
        $this->assertEquals(true, $obj->getNote0NonConforme());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new Constantes();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setNumCritereBtNum1()
     *
     * @return void
     */
    public function testSetNumCritereBtNum1(): void {

        $obj = new Constantes();

        $obj->setNumCritereBtNum1("numCritereBtNum1");
        $this->assertEquals("numCritereBtNum1", $obj->getNumCritereBtNum1());
    }

    /**
     * Tests setNumCritereBtNum2()
     *
     * @return void
     */
    public function testSetNumCritereBtNum2(): void {

        $obj = new Constantes();

        $obj->setNumCritereBtNum2("numCritereBtNum2");
        $this->assertEquals("numCritereBtNum2", $obj->getNumCritereBtNum2());
    }

    /**
     * Tests setNumCritereChantierFiltre1()
     *
     * @return void
     */
    public function testSetNumCritereChantierFiltre1(): void {

        $obj = new Constantes();

        $obj->setNumCritereChantierFiltre1("numCritereChantierFiltre1");
        $this->assertEquals("numCritereChantierFiltre1", $obj->getNumCritereChantierFiltre1());
    }

    /**
     * Tests setNumDevis()
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new Constantes();

        $obj->setNumDevis(10);
        $this->assertEquals(10, $obj->getNumDevis());
    }

    /**
     * Tests setNumFact()
     *
     * @return void
     */
    public function testSetNumFact(): void {

        $obj = new Constantes();

        $obj->setNumFact(10);
        $this->assertEquals(10, $obj->getNumFact());
    }

    /**
     * Tests setNumFactVm()
     *
     * @return void
     */
    public function testSetNumFactVm(): void {

        $obj = new Constantes();

        $obj->setNumFactVm(10);
        $this->assertEquals(10, $obj->getNumFactVm());
    }

    /**
     * Tests setNumeroFicheControle()
     *
     * @return void
     */
    public function testSetNumeroFicheControle(): void {

        $obj = new Constantes();

        $obj->setNumeroFicheControle(10);
        $this->assertEquals(10, $obj->getNumeroFicheControle());
    }

    /**
     * Tests setPaParFournisseur()
     *
     * @return void
     */
    public function testSetPaParFournisseur(): void {

        $obj = new Constantes();

        $obj->setPaParFournisseur(true);
        $this->assertEquals(true, $obj->getPaParFournisseur());
    }

    /**
     * Tests setPasNumCptParDossier()
     *
     * @return void
     */
    public function testSetPasNumCptParDossier(): void {

        $obj = new Constantes();

        $obj->setPasNumCptParDossier(true);
        $this->assertEquals(true, $obj->getPasNumCptParDossier());
    }

    /**
     * Tests setPdfBtCoefficient()
     *
     * @return void
     */
    public function testSetPdfBtCoefficient(): void {

        $obj = new Constantes();

        $obj->setPdfBtCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtCoefficient());
    }

    /**
     * Tests setPdfBtDatePassage()
     *
     * @return void
     */
    public function testSetPdfBtDatePassage(): void {

        $obj = new Constantes();

        $obj->setPdfBtDatePassage(true);
        $this->assertEquals(true, $obj->getPdfBtDatePassage());
    }

    /**
     * Tests setPdfBtDescriptif()
     *
     * @return void
     */
    public function testSetPdfBtDescriptif(): void {

        $obj = new Constantes();

        $obj->setPdfBtDescriptif(true);
        $this->assertEquals(true, $obj->getPdfBtDescriptif());
    }

    /**
     * Tests setPdfBtEmployesCorps()
     *
     * @return void
     */
    public function testSetPdfBtEmployesCorps(): void {

        $obj = new Constantes();

        $obj->setPdfBtEmployesCorps(true);
        $this->assertEquals(true, $obj->getPdfBtEmployesCorps());
    }

    /**
     * Tests setPdfBtEmployesRef()
     *
     * @return void
     */
    public function testSetPdfBtEmployesRef(): void {

        $obj = new Constantes();

        $obj->setPdfBtEmployesRef(true);
        $this->assertEquals(true, $obj->getPdfBtEmployesRef());
    }

    /**
     * Tests setPdfBtFacturerAlaValidation()
     *
     * @return void
     */
    public function testSetPdfBtFacturerAlaValidation(): void {

        $obj = new Constantes();

        $obj->setPdfBtFacturerAlaValidation(true);
        $this->assertEquals(true, $obj->getPdfBtFacturerAlaValidation());
    }

    /**
     * Tests setPdfBtFormatSaisieQtePu()
     *
     * @return void
     */
    public function testSetPdfBtFormatSaisieQtePu(): void {

        $obj = new Constantes();

        $obj->setPdfBtFormatSaisieQtePu(true);
        $this->assertEquals(true, $obj->getPdfBtFormatSaisieQtePu());
    }

    /**
     * Tests setPdfBtLibelleDate()
     *
     * @return void
     */
    public function testSetPdfBtLibelleDate(): void {

        $obj = new Constantes();

        $obj->setPdfBtLibelleDate("pdfBtLibelleDate");
        $this->assertEquals("pdfBtLibelleDate", $obj->getPdfBtLibelleDate());
    }

    /**
     * Tests setPdfBtNomChantier()
     *
     * @return void
     */
    public function testSetPdfBtNomChantier(): void {

        $obj = new Constantes();

        $obj->setPdfBtNomChantier(true);
        $this->assertEquals(true, $obj->getPdfBtNomChantier());
    }

    /**
     * Tests setPdfBtPeriodeValidite()
     *
     * @return void
     */
    public function testSetPdfBtPeriodeValidite(): void {

        $obj = new Constantes();

        $obj->setPdfBtPeriodeValidite(true);
        $this->assertEquals(true, $obj->getPdfBtPeriodeValidite());
    }

    /**
     * Tests setPdfBtPrixAchat()
     *
     * @return void
     */
    public function testSetPdfBtPrixAchat(): void {

        $obj = new Constantes();

        $obj->setPdfBtPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtPrixAchat());
    }

    /**
     * Tests setPdfBtReprendreLibelleDate()
     *
     * @return void
     */
    public function testSetPdfBtReprendreLibelleDate(): void {

        $obj = new Constantes();

        $obj->setPdfBtReprendreLibelleDate(true);
        $this->assertEquals(true, $obj->getPdfBtReprendreLibelleDate());
    }

    /**
     * Tests setPdfBtTauxHoraire()
     *
     * @return void
     */
    public function testSetPdfBtTauxHoraire(): void {

        $obj = new Constantes();

        $obj->setPdfBtTauxHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtTauxHoraire());
    }

    /**
     * Tests setPjEnvoiMail()
     *
     * @return void
     */
    public function testSetPjEnvoiMail(): void {

        $obj = new Constantes();

        $obj->setPjEnvoiMail("pjEnvoiMail");
        $this->assertEquals("pjEnvoiMail", $obj->getPjEnvoiMail());
    }

    /**
     * Tests setPjEnvoiMailAttestation()
     *
     * @return void
     */
    public function testSetPjEnvoiMailAttestation(): void {

        $obj = new Constantes();

        $obj->setPjEnvoiMailAttestation("pjEnvoiMailAttestation");
        $this->assertEquals("pjEnvoiMailAttestation", $obj->getPjEnvoiMailAttestation());
    }

    /**
     * Tests setPointBtEmployesSortis()
     *
     * @return void
     */
    public function testSetPointBtEmployesSortis(): void {

        $obj = new Constantes();

        $obj->setPointBtEmployesSortis(true);
        $this->assertEquals(true, $obj->getPointBtEmployesSortis());
    }

    /**
     * Tests setPoste1()
     *
     * @return void
     */
    public function testSetPoste1(): void {

        $obj = new Constantes();

        $obj->setPoste1("poste1");
        $this->assertEquals("poste1", $obj->getPoste1());
    }

    /**
     * Tests setPoste2()
     *
     * @return void
     */
    public function testSetPoste2(): void {

        $obj = new Constantes();

        $obj->setPoste2("poste2");
        $this->assertEquals("poste2", $obj->getPoste2());
    }

    /**
     * Tests setPoste3()
     *
     * @return void
     */
    public function testSetPoste3(): void {

        $obj = new Constantes();

        $obj->setPoste3("poste3");
        $this->assertEquals("poste3", $obj->getPoste3());
    }

    /**
     * Tests setPoste4()
     *
     * @return void
     */
    public function testSetPoste4(): void {

        $obj = new Constantes();

        $obj->setPoste4("poste4");
        $this->assertEquals("poste4", $obj->getPoste4());
    }

    /**
     * Tests setPoste5()
     *
     * @return void
     */
    public function testSetPoste5(): void {

        $obj = new Constantes();

        $obj->setPoste5("poste5");
        $this->assertEquals("poste5", $obj->getPoste5());
    }

    /**
     * Tests setPourcMajHCompl()
     *
     * @return void
     */
    public function testSetPourcMajHCompl(): void {

        $obj = new Constantes();

        $obj->setPourcMajHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl());
    }

    /**
     * Tests setPourcMajHCompl2()
     *
     * @return void
     */
    public function testSetPourcMajHCompl2(): void {

        $obj = new Constantes();

        $obj->setPourcMajHCompl2(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl2());
    }

    /**
     * Tests setPourcentDepHcMax()
     *
     * @return void
     */
    public function testSetPourcentDepHcMax(): void {

        $obj = new Constantes();

        $obj->setPourcentDepHcMax(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHcMax());
    }

    /**
     * Tests setPourcentDepHcPlusMois()
     *
     * @return void
     */
    public function testSetPourcentDepHcPlusMois(): void {

        $obj = new Constantes();

        $obj->setPourcentDepHcPlusMois(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHcPlusMois());
    }

    /**
     * Tests setPourcentageReposRemplacement()
     *
     * @return void
     */
    public function testSetPourcentageReposRemplacement(): void {

        $obj = new Constantes();

        $obj->setPourcentageReposRemplacement(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentageReposRemplacement());
    }

    /**
     * Tests setPrefixe()
     *
     * @return void
     */
    public function testSetPrefixe(): void {

        $obj = new Constantes();

        $obj->setPrefixe("prefixe");
        $this->assertEquals("prefixe", $obj->getPrefixe());
    }

    /**
     * Tests setPrefixeDevis()
     *
     * @return void
     */
    public function testSetPrefixeDevis(): void {

        $obj = new Constantes();

        $obj->setPrefixeDevis("prefixeDevis");
        $this->assertEquals("prefixeDevis", $obj->getPrefixeDevis());
    }

    /**
     * Tests setPreparerChantierPretOnly()
     *
     * @return void
     */
    public function testSetPreparerChantierPretOnly(): void {

        $obj = new Constantes();

        $obj->setPreparerChantierPretOnly(true);
        $this->assertEquals(true, $obj->getPreparerChantierPretOnly());
    }

    /**
     * Tests setPrixDefautAchat()
     *
     * @return void
     */
    public function testSetPrixDefautAchat(): void {

        $obj = new Constantes();

        $obj->setPrixDefautAchat(10);
        $this->assertEquals(10, $obj->getPrixDefautAchat());
    }

    /**
     * Tests setPrixDefautEntreeDirecte()
     *
     * @return void
     */
    public function testSetPrixDefautEntreeDirecte(): void {

        $obj = new Constantes();

        $obj->setPrixDefautEntreeDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautEntreeDirecte());
    }

    /**
     * Tests setPrixDefautInventaire()
     *
     * @return void
     */
    public function testSetPrixDefautInventaire(): void {

        $obj = new Constantes();

        $obj->setPrixDefautInventaire(10);
        $this->assertEquals(10, $obj->getPrixDefautInventaire());
    }

    /**
     * Tests setPrixDefautSortieDirecte()
     *
     * @return void
     */
    public function testSetPrixDefautSortieDirecte(): void {

        $obj = new Constantes();

        $obj->setPrixDefautSortieDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautSortieDirecte());
    }

    /**
     * Tests setPrixDefautVente()
     *
     * @return void
     */
    public function testSetPrixDefautVente(): void {

        $obj = new Constantes();

        $obj->setPrixDefautVente(10);
        $this->assertEquals(10, $obj->getPrixDefautVente());
    }

    /**
     * Tests setProchainNumeroPj()
     *
     * @return void
     */
    public function testSetProchainNumeroPj(): void {

        $obj = new Constantes();

        $obj->setProchainNumeroPj(10);
        $this->assertEquals(10, $obj->getProchainNumeroPj());
    }

    /**
     * Tests setProrataHeuresCreerLigne()
     *
     * @return void
     */
    public function testSetProrataHeuresCreerLigne(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresCreerLigne(true);
        $this->assertEquals(true, $obj->getProrataHeuresCreerLigne());
    }

    /**
     * Tests setProrataHeuresDesignationMoins()
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationMoins(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationMoins("prorataHeuresDesignationMoins");
        $this->assertEquals("prorataHeuresDesignationMoins", $obj->getProrataHeuresDesignationMoins());
    }

    /**
     * Tests setProrataHeuresDesignationPlus()
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationPlus(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationPlus("prorataHeuresDesignationPlus");
        $this->assertEquals("prorataHeuresDesignationPlus", $obj->getProrataHeuresDesignationPlus());
    }

    /**
     * Tests setProrataHeuresOption()
     *
     * @return void
     */
    public function testSetProrataHeuresOption(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresOption("prorataHeuresOption");
        $this->assertEquals("prorataHeuresOption", $obj->getProrataHeuresOption());
    }

    /**
     * Tests setProvCpInfosEmp()
     *
     * @return void
     */
    public function testSetProvCpInfosEmp(): void {

        $obj = new Constantes();

        $obj->setProvCpInfosEmp(true);
        $this->assertEquals(true, $obj->getProvCpInfosEmp());
    }

    /**
     * Tests setProvisionsCp()
     *
     * @return void
     */
    public function testSetProvisionsCp(): void {

        $obj = new Constantes();

        $obj->setProvisionsCp(true);
        $this->assertEquals(true, $obj->getProvisionsCp());
    }

    /**
     * Tests setQualiteNbCriteres()
     *
     * @return void
     */
    public function testSetQualiteNbCriteres(): void {

        $obj = new Constantes();

        $obj->setQualiteNbCriteres("qualiteNbCriteres");
        $this->assertEquals("qualiteNbCriteres", $obj->getQualiteNbCriteres());
    }

    /**
     * Tests setQualiteNbNotes()
     *
     * @return void
     */
    public function testSetQualiteNbNotes(): void {

        $obj = new Constantes();

        $obj->setQualiteNbNotes("qualiteNbNotes");
        $this->assertEquals("qualiteNbNotes", $obj->getQualiteNbNotes());
    }

    /**
     * Tests setQualiteSatisfactionGenerale()
     *
     * @return void
     */
    public function testSetQualiteSatisfactionGenerale(): void {

        $obj = new Constantes();

        $obj->setQualiteSatisfactionGenerale(true);
        $this->assertEquals(true, $obj->getQualiteSatisfactionGenerale());
    }

    /**
     * Tests setReferenceMensuContratProprete()
     *
     * @return void
     */
    public function testSetReferenceMensuContratProprete(): void {

        $obj = new Constantes();

        $obj->setReferenceMensuContratProprete(true);
        $this->assertEquals(true, $obj->getReferenceMensuContratProprete());
    }

    /**
     * Tests setRemplacantAbsJfPasAuto()
     *
     * @return void
     */
    public function testSetRemplacantAbsJfPasAuto(): void {

        $obj = new Constantes();

        $obj->setRemplacantAbsJfPasAuto(true);
        $this->assertEquals(true, $obj->getRemplacantAbsJfPasAuto());
    }

    /**
     * Tests setRemplacantTravaillePasJf()
     *
     * @return void
     */
    public function testSetRemplacantTravaillePasJf(): void {

        $obj = new Constantes();

        $obj->setRemplacantTravaillePasJf(true);
        $this->assertEquals(true, $obj->getRemplacantTravaillePasJf());
    }

    /**
     * Tests setRemplacementHcjf()
     *
     * @return void
     */
    public function testSetRemplacementHcjf(): void {

        $obj = new Constantes();

        $obj->setRemplacementHcjf(true);
        $this->assertEquals(true, $obj->getRemplacementHcjf());
    }

    /**
     * Tests setReposCompensateurPourTravailleurNuit()
     *
     * @return void
     */
    public function testSetReposCompensateurPourTravailleurNuit(): void {

        $obj = new Constantes();

        $obj->setReposCompensateurPourTravailleurNuit(true);
        $this->assertEquals(true, $obj->getReposCompensateurPourTravailleurNuit());
    }

    /**
     * Tests setRtFdansFactDev()
     *
     * @return void
     */
    public function testSetRtFdansFactDev(): void {

        $obj = new Constantes();

        $obj->setRtFdansFactDev(true);
        $this->assertEquals(true, $obj->getRtFdansFactDev());
    }

    /**
     * Tests setSaisirAbsencesSurHc()
     *
     * @return void
     */
    public function testSetSaisirAbsencesSurHc(): void {

        $obj = new Constantes();

        $obj->setSaisirAbsencesSurHc(true);
        $this->assertEquals(true, $obj->getSaisirAbsencesSurHc());
    }

    /**
     * Tests setSaisirCodeChantierAchat()
     *
     * @return void
     */
    public function testSetSaisirCodeChantierAchat(): void {

        $obj = new Constantes();

        $obj->setSaisirCodeChantierAchat(true);
        $this->assertEquals(true, $obj->getSaisirCodeChantierAchat());
    }

    /**
     * Tests setSaisirNumBt()
     *
     * @return void
     */
    public function testSetSaisirNumBt(): void {

        $obj = new Constantes();

        $obj->setSaisirNumBt(true);
        $this->assertEquals(true, $obj->getSaisirNumBt());
    }

    /**
     * Tests setServicesPaie()
     *
     * @return void
     */
    public function testSetServicesPaie(): void {

        $obj = new Constantes();

        $obj->setServicesPaie("servicesPaie");
        $this->assertEquals("servicesPaie", $obj->getServicesPaie());
    }

    /**
     * Tests setSeuilMajoHCompl()
     *
     * @return void
     */
    public function testSetSeuilMajoHCompl(): void {

        $obj = new Constantes();

        $obj->setSeuilMajoHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilMajoHCompl());
    }

    /**
     * Tests setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new Constantes();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests setTauxMajoHc33()
     *
     * @return void
     */
    public function testSetTauxMajoHc33(): void {

        $obj = new Constantes();

        $obj->setTauxMajoHc33(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajoHc33());
    }

    /**
     * Tests setTauxMajorationHCompl()
     *
     * @return void
     */
    public function testSetTauxMajorationHCompl(): void {

        $obj = new Constantes();

        $obj->setTauxMajorationHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajorationHCompl());
    }

    /**
     * Tests setTauxTvaAchat()
     *
     * @return void
     */
    public function testSetTauxTvaAchat(): void {

        $obj = new Constantes();

        $obj->setTauxTvaAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaAchat());
    }

    /**
     * Tests setTauxTvaTaxeDeee()
     *
     * @return void
     */
    public function testSetTauxTvaTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setTauxTvaTaxeDeee(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxeDeee());
    }

    /**
     * Tests setTauxTvaVente()
     *
     * @return void
     */
    public function testSetTauxTvaVente(): void {

        $obj = new Constantes();

        $obj->setTauxTvaVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaVente());
    }

    /**
     * Tests setTypeRemplDefaut()
     *
     * @return void
     */
    public function testSetTypeRemplDefaut(): void {

        $obj = new Constantes();

        $obj->setTypeRemplDefaut("typeRemplDefaut");
        $this->assertEquals("typeRemplDefaut", $obj->getTypeRemplDefaut());
    }

    /**
     * Tests setTypeTransfertVente()
     *
     * @return void
     */
    public function testSetTypeTransfertVente(): void {

        $obj = new Constantes();

        $obj->setTypeTransfertVente("typeTransfertVente");
        $this->assertEquals("typeTransfertVente", $obj->getTypeTransfertVente());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new Constantes();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests setUtiliserStockMini()
     *
     * @return void
     */
    public function testSetUtiliserStockMini(): void {

        $obj = new Constantes();

        $obj->setUtiliserStockMini(true);
        $this->assertEquals(true, $obj->getUtiliserStockMini());
    }

    /**
     * Tests setVisualiserPointageBtValides()
     *
     * @return void
     */
    public function testSetVisualiserPointageBtValides(): void {

        $obj = new Constantes();

        $obj->setVisualiserPointageBtValides(true);
        $this->assertEquals(true, $obj->getVisualiserPointageBtValides());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Constantes();

        $this->assertNull($obj->get35Heures());
        $this->assertNull($obj->getAlertesPaieDansPointage());
        $this->assertNull($obj->getAlertesPaieDansReclam());
        $this->assertNull($obj->getAnalytiqueNatureAgence());
        $this->assertNull($obj->getAnalytiqueParChantier());
        $this->assertNull($obj->getArchiverDevis());
        $this->assertNull($obj->getArchiverFacture());
        $this->assertNull($obj->getArrondiSurPu());
        $this->assertNull($obj->getAutoriserDaSansMajStock());
        $this->assertNull($obj->getAutoriserDepBudChaCdeType());
        $this->assertNull($obj->getAutoriserMensuTacheVide());
        $this->assertNull($obj->getBlNumFact());
        $this->assertNull($obj->getBlPrefixe());
        $this->assertNull($obj->getBrNumFact());
        $this->assertNull($obj->getBrPrefixe());
        $this->assertNull($obj->getBsNumFact());
        $this->assertNull($obj->getBsPrefixe());
        $this->assertNull($obj->getCddMensuTotalHeures());
        $this->assertNull($obj->getCpSansProvisions());
        $this->assertNull($obj->getCdeClientNumFact());
        $this->assertNull($obj->getCdeClientPrefixe());
        $this->assertNull($obj->getCdeFrnNumFact());
        $this->assertNull($obj->getCdeFrnPrefixe());
        $this->assertNull($obj->getCentralisationVente());
        $this->assertNull($obj->getChargeMensuelleSansTache());
        $this->assertNull($obj->getCheminDossCompta());
        $this->assertNull($obj->getCleDebloquerPeriodeCloturee());
        $this->assertNull($obj->getCodeAbsCpSansSolde());
        $this->assertNull($obj->getCodeAbsDefJf());
        $this->assertNull($obj->getCodeAbsDefJfMoins3());
        $this->assertNull($obj->getCodeAbsFermetureChantier());
        $this->assertNull($obj->getCodeAbsPointageDefaut());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeDepotParDefaut());
        $this->assertNull($obj->getCodeIcs());
        $this->assertNull($obj->getCodeJa());
        $this->assertNull($obj->getCodeJvNegoce());
        $this->assertNull($obj->getCodeJvPrestation());
        $this->assertNull($obj->getCodeLivParDefaut());
        $this->assertNull($obj->getCodePrimeChantier1());
        $this->assertNull($obj->getCodePrimeChantier2());
        $this->assertNull($obj->getCodePrimeChantier3());
        $this->assertNull($obj->getCodePrimeDimanche1());
        $this->assertNull($obj->getCodePrimeDimanche1Type2());
        $this->assertNull($obj->getCodePrimeDimanche2());
        $this->assertNull($obj->getCodePrimeForfait());
        $this->assertNull($obj->getCodePrimeHCompl());
        $this->assertNull($obj->getCodePrimeHCompl2());
        $this->assertNull($obj->getCodePrimeJf1());
        $this->assertNull($obj->getCodePrimeJf1Type2());
        $this->assertNull($obj->getCodePrimeJf2());
        $this->assertNull($obj->getCodePrimeJfMai());
        $this->assertNull($obj->getCodePrimeNuit1());
        $this->assertNull($obj->getCodePrimeNuit1Type2());
        $this->assertNull($obj->getCodePrimeNuit2());
        $this->assertNull($obj->getCodePrimePaniers());
        $this->assertNull($obj->getCodePrimeRs());
        $this->assertNull($obj->getCodePrimeTp());
        $this->assertNull($obj->getCodeRegJvNegDebut());
        $this->assertNull($obj->getCodeRegJvNegFin());
        $this->assertNull($obj->getCodeRegJvPrestDebut());
        $this->assertNull($obj->getCodeRegJvPrestFin());
        $this->assertNull($obj->getCodeTacheDefaut());
        $this->assertNull($obj->getCollectifDef());
        $this->assertNull($obj->getCollectifDefFournisseur());
        $this->assertNull($obj->getCommentaireJourneeSolidarite());
        $this->assertNull($obj->getCompteCollectifAchat());
        $this->assertNull($obj->getCompteCollectifVente());
        $this->assertNull($obj->getCompteEscompteCaExonere());
        $this->assertNull($obj->getCompteEscompteSoumisTva());
        $this->assertNull($obj->getCompteTvaAchat());
        $this->assertNull($obj->getCompteTvaTaxeDeee());
        $this->assertNull($obj->getCompteTvaVente());
        $this->assertNull($obj->getCompteVentilTaxeDeee());
        $this->assertNull($obj->getCompterSamediTfCpPaie());
        $this->assertNull($obj->getControlerCdeFrn());
        $this->assertNull($obj->getControlerChargesMensuelles());
        $this->assertNull($obj->getControlerCodeReg());
        $this->assertNull($obj->getControlerDepHcMax());
        $this->assertNull($obj->getControlerDepHcPlusMois());
        $this->assertNull($obj->getCreerAlertePaieDefEnPaie());
        $this->assertNull($obj->getCtrlAutoCp());
        $this->assertNull($obj->getCtrlAutoCpAvecAnticipation());
        $this->assertNull($obj->getDateAppliGestionHeuresEnPlus());
        $this->assertNull($obj->getDateJourneeSolidarite());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDecMoisPrepFact());
        $this->assertNull($obj->getDernierCompteClient());
        $this->assertNull($obj->getDernierCompteFrn());
        $this->assertNull($obj->getDiscr());
        $this->assertNull($obj->getDossCompta());
        $this->assertNull($obj->getDossPaie());
        $this->assertNull($obj->getEsCodeAbsEntree());
        $this->assertNull($obj->getEsCodeAbsSortie());
        $this->assertNull($obj->getEsHeuresReelles());
        $this->assertNull($obj->getEtablissementsPaie());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getFacturationProrataHeures());
        $this->assertNull($obj->getFolioJa());
        $this->assertNull($obj->getFolioJvNegoce());
        $this->assertNull($obj->getFolioJvPrestation());
        $this->assertNull($obj->getGererNumCptChantier());
        $this->assertNull($obj->getGestionHCompl());
        $this->assertNull($obj->getGestionHSupMens());
        $this->assertNull($obj->getGestionHSupMensuelle());
        $this->assertNull($obj->getGestionMajDim());
        $this->assertNull($obj->getGestionMajJf());
        $this->assertNull($obj->getGestionMajNuit());
        $this->assertNull($obj->getGestionMultiDepot());
        $this->assertNull($obj->getGestionQuotas());
        $this->assertNull($obj->getGestionSpecifJf());
        $this->assertNull($obj->getGestionSpecifMajoJf());
        $this->assertNull($obj->getHDebNuit());
        $this->assertNull($obj->getHDebNuitTravNuit());
        $this->assertNull($obj->getHFinNuit());
        $this->assertNull($obj->getHFinNuitTravNuit());
        $this->assertNull($obj->getHeuresAbsenceMensualise());
        $this->assertNull($obj->getHeuresRemplEgalesMensTitulaire());
        $this->assertNull($obj->getIncrementCompteAuto());
        $this->assertNull($obj->getLiaisonComptaWin());
        $this->assertNull($obj->getLibCritereBool1());
        $this->assertNull($obj->getLibCritereBool2());
        $this->assertNull($obj->getLibCritereByte1());
        $this->assertNull($obj->getLibCritereNum1());
        $this->assertNull($obj->getLibCritereNum2());
        $this->assertNull($obj->getLibCritereNum3());
        $this->assertNull($obj->getLibCritereNum4());
        $this->assertNull($obj->getLibCritereNum5());
        $this->assertNull($obj->getLibCritereTab1());
        $this->assertNull($obj->getLibCritereTab2());
        $this->assertNull($obj->getLibCritereTab3());
        $this->assertNull($obj->getLibCritereTab4());
        $this->assertNull($obj->getLibCritereTab5());
        $this->assertNull($obj->getLibCritereTxt1());
        $this->assertNull($obj->getLibCritereTxt2());
        $this->assertNull($obj->getLibCritereTxt3());
        $this->assertNull($obj->getLibCritereTxt4());
        $this->assertNull($obj->getLibCritereTxt5());
        $this->assertNull($obj->getLibelleAutoAvoir());
        $this->assertNull($obj->getLibelleAutoFacture());
        $this->assertNull($obj->getLibelleHeuresSurcroit());
        $this->assertNull($obj->getLibelleTransfert());
        $this->assertNull($obj->getLibelleTransfertAchat());
        $this->assertNull($obj->getLivCdeFrnDepotUnique());
        $this->assertNull($obj->getMajDernierPassageBt());
        $this->assertNull($obj->getMailAttestations());
        $this->assertNull($obj->getMailFactures());
        $this->assertNull($obj->getMajDernierPrixAchat());
        $this->assertNull($obj->getMajPamp());
        $this->assertNull($obj->getMajorationCascade());
        $this->assertNull($obj->getMajorationHPlus());
        $this->assertNull($obj->getMargeNiveauEdition());
        $this->assertNull($obj->getMargePourcentCharge());
        $this->assertNull($obj->getMargeSalInspProrataCa());
        $this->assertNull($obj->getMensualisationTache());
        $this->assertNull($obj->getModeCalculPropositionCde());
        $this->assertNull($obj->getModeleDevis());
        $this->assertNull($obj->getModeleDevisTech());
        $this->assertNull($obj->getModeleFacture());
        $this->assertNull($obj->getMtCptaNegatif());
        $this->assertNull($obj->getNDerDocument());
        $this->assertNull($obj->getNbCaracteresLigneFact());
        $this->assertNull($obj->getNbDecimalesPrixUnitaire());
        $this->assertNull($obj->getNbDecimalesQuantite());
        $this->assertNull($obj->getNbEntiersPrixUnitaire());
        $this->assertNull($obj->getNbEntiersQuantite());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbJoursAbsProratisationDcp());
        $this->assertNull($obj->getNbMoisConsecutifs());
        $this->assertNull($obj->getNomFactNbLignes());
        $this->assertNull($obj->getNomFichierAsciiAchat());
        $this->assertNull($obj->getNomFichierAsciiVente());
        $this->assertNull($obj->getNote0NonConforme());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumCritereBtNum1());
        $this->assertNull($obj->getNumCritereBtNum2());
        $this->assertNull($obj->getNumCritereChantierFiltre1());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumFact());
        $this->assertNull($obj->getNumFactVm());
        $this->assertNull($obj->getNumeroFicheControle());
        $this->assertNull($obj->getPaParFournisseur());
        $this->assertNull($obj->getPjEnvoiMail());
        $this->assertNull($obj->getPjEnvoiMailAttestation());
        $this->assertNull($obj->getPasNumCptParDossier());
        $this->assertNull($obj->getPdfBtCoefficient());
        $this->assertNull($obj->getPdfBtDatePassage());
        $this->assertNull($obj->getPdfBtDescriptif());
        $this->assertNull($obj->getPdfBtEmployesCorps());
        $this->assertNull($obj->getPdfBtEmployesRef());
        $this->assertNull($obj->getPdfBtFacturerAlaValidation());
        $this->assertNull($obj->getPdfBtFormatSaisieQtePu());
        $this->assertNull($obj->getPdfBtLibelleDate());
        $this->assertNull($obj->getPdfBtNomChantier());
        $this->assertNull($obj->getPdfBtPeriodeValidite());
        $this->assertNull($obj->getPdfBtPrixAchat());
        $this->assertNull($obj->getPdfBtReprendreLibelleDate());
        $this->assertNull($obj->getPdfBtTauxHoraire());
        $this->assertNull($obj->getPointBtEmployesSortis());
        $this->assertNull($obj->getPoste1());
        $this->assertNull($obj->getPoste2());
        $this->assertNull($obj->getPoste3());
        $this->assertNull($obj->getPoste4());
        $this->assertNull($obj->getPoste5());
        $this->assertNull($obj->getPourcMajHCompl());
        $this->assertNull($obj->getPourcMajHCompl2());
        $this->assertNull($obj->getPourcentDepHcMax());
        $this->assertNull($obj->getPourcentDepHcPlusMois());
        $this->assertNull($obj->getPourcentageReposRemplacement());
        $this->assertNull($obj->getPrefixe());
        $this->assertNull($obj->getPrefixeDevis());
        $this->assertNull($obj->getPreparerChantierPretOnly());
        $this->assertNull($obj->getPrixDefautAchat());
        $this->assertNull($obj->getPrixDefautEntreeDirecte());
        $this->assertNull($obj->getPrixDefautInventaire());
        $this->assertNull($obj->getPrixDefautSortieDirecte());
        $this->assertNull($obj->getPrixDefautVente());
        $this->assertNull($obj->getProchainNumeroPj());
        $this->assertNull($obj->getProrataHeuresCreerLigne());
        $this->assertNull($obj->getProrataHeuresDesignationMoins());
        $this->assertNull($obj->getProrataHeuresDesignationPlus());
        $this->assertNull($obj->getProrataHeuresOption());
        $this->assertNull($obj->getProvCpInfosEmp());
        $this->assertNull($obj->getProvisionsCp());
        $this->assertNull($obj->getQualiteNbCriteres());
        $this->assertNull($obj->getQualiteNbNotes());
        $this->assertNull($obj->getQualiteSatisfactionGenerale());
        $this->assertNull($obj->getRtFdansFactDev());
        $this->assertNull($obj->getReferenceMensuContratProprete());
        $this->assertNull($obj->getRemplacantAbsJfPasAuto());
        $this->assertNull($obj->getRemplacantTravaillePasJf());
        $this->assertNull($obj->getRemplacementHcjf());
        $this->assertNull($obj->getReposCompensateurPourTravailleurNuit());
        $this->assertNull($obj->getSaisirAbsencesSurHc());
        $this->assertNull($obj->getSaisirCodeChantierAchat());
        $this->assertNull($obj->getSaisirNumBt());
        $this->assertNull($obj->getServicesPaie());
        $this->assertNull($obj->getSeuilMajoHCompl());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTauxMajoHc33());
        $this->assertNull($obj->getTauxMajorationHCompl());
        $this->assertNull($obj->getTauxTvaAchat());
        $this->assertNull($obj->getTauxTvaTaxeDeee());
        $this->assertNull($obj->getTauxTvaVente());
        $this->assertNull($obj->getTypeRemplDefaut());
        $this->assertNull($obj->getTypeTransfertVente());
        $this->assertNull($obj->getUniqIdSynchro());
        $this->assertNull($obj->getUtiliserStockMini());
        $this->assertNull($obj->getVisualiserPointageBtValides());
    }
}
