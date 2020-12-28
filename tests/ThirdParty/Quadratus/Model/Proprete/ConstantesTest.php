<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Constantes;

/**
 * Constantes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ConstantesTest extends AbstractTestCase {

    /**
     * Tests the set35Heures() method.
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
     * Tests the setAlertesPaieDansPointage() method.
     *
     * @return void
     */
    public function testSetAlertesPaieDansPointage(): void {

        $obj = new Constantes();

        $obj->setAlertesPaieDansPointage(true);
        $this->assertEquals(true, $obj->getAlertesPaieDansPointage());
    }

    /**
     * Tests the setAlertesPaieDansReclam() method.
     *
     * @return void
     */
    public function testSetAlertesPaieDansReclam(): void {

        $obj = new Constantes();

        $obj->setAlertesPaieDansReclam(true);
        $this->assertEquals(true, $obj->getAlertesPaieDansReclam());
    }

    /**
     * Tests the setAnalytiqueNatureAgence() method.
     *
     * @return void
     */
    public function testSetAnalytiqueNatureAgence(): void {

        $obj = new Constantes();

        $obj->setAnalytiqueNatureAgence(true);
        $this->assertEquals(true, $obj->getAnalytiqueNatureAgence());
    }

    /**
     * Tests the setAnalytiqueParChantier() method.
     *
     * @return void
     */
    public function testSetAnalytiqueParChantier(): void {

        $obj = new Constantes();

        $obj->setAnalytiqueParChantier(true);
        $this->assertEquals(true, $obj->getAnalytiqueParChantier());
    }

    /**
     * Tests the setArchiverDevis() method.
     *
     * @return void
     */
    public function testSetArchiverDevis(): void {

        $obj = new Constantes();

        $obj->setArchiverDevis(true);
        $this->assertEquals(true, $obj->getArchiverDevis());
    }

    /**
     * Tests the setArchiverFacture() method.
     *
     * @return void
     */
    public function testSetArchiverFacture(): void {

        $obj = new Constantes();

        $obj->setArchiverFacture(true);
        $this->assertEquals(true, $obj->getArchiverFacture());
    }

    /**
     * Tests the setArrondiSurPu() method.
     *
     * @return void
     */
    public function testSetArrondiSurPu(): void {

        $obj = new Constantes();

        $obj->setArrondiSurPu(true);
        $this->assertEquals(true, $obj->getArrondiSurPu());
    }

    /**
     * Tests the setAutoriserDaSansMajStock() method.
     *
     * @return void
     */
    public function testSetAutoriserDaSansMajStock(): void {

        $obj = new Constantes();

        $obj->setAutoriserDaSansMajStock(true);
        $this->assertEquals(true, $obj->getAutoriserDaSansMajStock());
    }

    /**
     * Tests the setAutoriserDepBudChaCdeType() method.
     *
     * @return void
     */
    public function testSetAutoriserDepBudChaCdeType(): void {

        $obj = new Constantes();

        $obj->setAutoriserDepBudChaCdeType(true);
        $this->assertEquals(true, $obj->getAutoriserDepBudChaCdeType());
    }

    /**
     * Tests the setAutoriserMensuTacheVide() method.
     *
     * @return void
     */
    public function testSetAutoriserMensuTacheVide(): void {

        $obj = new Constantes();

        $obj->setAutoriserMensuTacheVide(true);
        $this->assertEquals(true, $obj->getAutoriserMensuTacheVide());
    }

    /**
     * Tests the setBlNumFact() method.
     *
     * @return void
     */
    public function testSetBlNumFact(): void {

        $obj = new Constantes();

        $obj->setBlNumFact(10);
        $this->assertEquals(10, $obj->getBlNumFact());
    }

    /**
     * Tests the setBlPrefixe() method.
     *
     * @return void
     */
    public function testSetBlPrefixe(): void {

        $obj = new Constantes();

        $obj->setBlPrefixe("blPrefixe");
        $this->assertEquals("blPrefixe", $obj->getBlPrefixe());
    }

    /**
     * Tests the setBrNumFact() method.
     *
     * @return void
     */
    public function testSetBrNumFact(): void {

        $obj = new Constantes();

        $obj->setBrNumFact(10);
        $this->assertEquals(10, $obj->getBrNumFact());
    }

    /**
     * Tests the setBrPrefixe() method.
     *
     * @return void
     */
    public function testSetBrPrefixe(): void {

        $obj = new Constantes();

        $obj->setBrPrefixe("brPrefixe");
        $this->assertEquals("brPrefixe", $obj->getBrPrefixe());
    }

    /**
     * Tests the setBsNumFact() method.
     *
     * @return void
     */
    public function testSetBsNumFact(): void {

        $obj = new Constantes();

        $obj->setBsNumFact(10);
        $this->assertEquals(10, $obj->getBsNumFact());
    }

    /**
     * Tests the setBsPrefixe() method.
     *
     * @return void
     */
    public function testSetBsPrefixe(): void {

        $obj = new Constantes();

        $obj->setBsPrefixe("bsPrefixe");
        $this->assertEquals("bsPrefixe", $obj->getBsPrefixe());
    }

    /**
     * Tests the setCddMensuTotalHeures() method.
     *
     * @return void
     */
    public function testSetCddMensuTotalHeures(): void {

        $obj = new Constantes();

        $obj->setCddMensuTotalHeures(true);
        $this->assertEquals(true, $obj->getCddMensuTotalHeures());
    }

    /**
     * Tests the setCdeClientNumFact() method.
     *
     * @return void
     */
    public function testSetCdeClientNumFact(): void {

        $obj = new Constantes();

        $obj->setCdeClientNumFact(10);
        $this->assertEquals(10, $obj->getCdeClientNumFact());
    }

    /**
     * Tests the setCdeClientPrefixe() method.
     *
     * @return void
     */
    public function testSetCdeClientPrefixe(): void {

        $obj = new Constantes();

        $obj->setCdeClientPrefixe("cdeClientPrefixe");
        $this->assertEquals("cdeClientPrefixe", $obj->getCdeClientPrefixe());
    }

    /**
     * Tests the setCdeFrnNumFact() method.
     *
     * @return void
     */
    public function testSetCdeFrnNumFact(): void {

        $obj = new Constantes();

        $obj->setCdeFrnNumFact(10);
        $this->assertEquals(10, $obj->getCdeFrnNumFact());
    }

    /**
     * Tests the setCdeFrnPrefixe() method.
     *
     * @return void
     */
    public function testSetCdeFrnPrefixe(): void {

        $obj = new Constantes();

        $obj->setCdeFrnPrefixe("cdeFrnPrefixe");
        $this->assertEquals("cdeFrnPrefixe", $obj->getCdeFrnPrefixe());
    }

    /**
     * Tests the setCentralisationVente() method.
     *
     * @return void
     */
    public function testSetCentralisationVente(): void {

        $obj = new Constantes();

        $obj->setCentralisationVente(true);
        $this->assertEquals(true, $obj->getCentralisationVente());
    }

    /**
     * Tests the setChargeMensuelleSansTache() method.
     *
     * @return void
     */
    public function testSetChargeMensuelleSansTache(): void {

        $obj = new Constantes();

        $obj->setChargeMensuelleSansTache(true);
        $this->assertEquals(true, $obj->getChargeMensuelleSansTache());
    }

    /**
     * Tests the setCheminDossCompta() method.
     *
     * @return void
     */
    public function testSetCheminDossCompta(): void {

        $obj = new Constantes();

        $obj->setCheminDossCompta("cheminDossCompta");
        $this->assertEquals("cheminDossCompta", $obj->getCheminDossCompta());
    }

    /**
     * Tests the setCleDebloquerPeriodeCloturee() method.
     *
     * @return void
     */
    public function testSetCleDebloquerPeriodeCloturee(): void {

        $obj = new Constantes();

        $obj->setCleDebloquerPeriodeCloturee("cleDebloquerPeriodeCloturee");
        $this->assertEquals("cleDebloquerPeriodeCloturee", $obj->getCleDebloquerPeriodeCloturee());
    }

    /**
     * Tests the setCodeAbsCpSansSolde() method.
     *
     * @return void
     */
    public function testSetCodeAbsCpSansSolde(): void {

        $obj = new Constantes();

        $obj->setCodeAbsCpSansSolde("codeAbsCpSansSolde");
        $this->assertEquals("codeAbsCpSansSolde", $obj->getCodeAbsCpSansSolde());
    }

    /**
     * Tests the setCodeAbsDefJf() method.
     *
     * @return void
     */
    public function testSetCodeAbsDefJf(): void {

        $obj = new Constantes();

        $obj->setCodeAbsDefJf("codeAbsDefJf");
        $this->assertEquals("codeAbsDefJf", $obj->getCodeAbsDefJf());
    }

    /**
     * Tests the setCodeAbsDefJfMoins3() method.
     *
     * @return void
     */
    public function testSetCodeAbsDefJfMoins3(): void {

        $obj = new Constantes();

        $obj->setCodeAbsDefJfMoins3("codeAbsDefJfMoins3");
        $this->assertEquals("codeAbsDefJfMoins3", $obj->getCodeAbsDefJfMoins3());
    }

    /**
     * Tests the setCodeAbsFermetureChantier() method.
     *
     * @return void
     */
    public function testSetCodeAbsFermetureChantier(): void {

        $obj = new Constantes();

        $obj->setCodeAbsFermetureChantier("codeAbsFermetureChantier");
        $this->assertEquals("codeAbsFermetureChantier", $obj->getCodeAbsFermetureChantier());
    }

    /**
     * Tests the setCodeAbsPointageDefaut() method.
     *
     * @return void
     */
    public function testSetCodeAbsPointageDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeAbsPointageDefaut("codeAbsPointageDefaut");
        $this->assertEquals("codeAbsPointageDefaut", $obj->getCodeAbsPointageDefaut());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new Constantes();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Constantes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeDepotParDefaut() method.
     *
     * @return void
     */
    public function testSetCodeDepotParDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeDepotParDefaut("codeDepotParDefaut");
        $this->assertEquals("codeDepotParDefaut", $obj->getCodeDepotParDefaut());
    }

    /**
     * Tests the setCodeIcs() method.
     *
     * @return void
     */
    public function testSetCodeIcs(): void {

        $obj = new Constantes();

        $obj->setCodeIcs("codeIcs");
        $this->assertEquals("codeIcs", $obj->getCodeIcs());
    }

    /**
     * Tests the setCodeJa() method.
     *
     * @return void
     */
    public function testSetCodeJa(): void {

        $obj = new Constantes();

        $obj->setCodeJa("codeJa");
        $this->assertEquals("codeJa", $obj->getCodeJa());
    }

    /**
     * Tests the setCodeJvNegoce() method.
     *
     * @return void
     */
    public function testSetCodeJvNegoce(): void {

        $obj = new Constantes();

        $obj->setCodeJvNegoce("codeJvNegoce");
        $this->assertEquals("codeJvNegoce", $obj->getCodeJvNegoce());
    }

    /**
     * Tests the setCodeJvPrestation() method.
     *
     * @return void
     */
    public function testSetCodeJvPrestation(): void {

        $obj = new Constantes();

        $obj->setCodeJvPrestation("codeJvPrestation");
        $this->assertEquals("codeJvPrestation", $obj->getCodeJvPrestation());
    }

    /**
     * Tests the setCodeLivParDefaut() method.
     *
     * @return void
     */
    public function testSetCodeLivParDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeLivParDefaut("codeLivParDefaut");
        $this->assertEquals("codeLivParDefaut", $obj->getCodeLivParDefaut());
    }

    /**
     * Tests the setCodePrimeChantier1() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier1("codePrimeChantier1");
        $this->assertEquals("codePrimeChantier1", $obj->getCodePrimeChantier1());
    }

    /**
     * Tests the setCodePrimeChantier2() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier2("codePrimeChantier2");
        $this->assertEquals("codePrimeChantier2", $obj->getCodePrimeChantier2());
    }

    /**
     * Tests the setCodePrimeChantier3() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier3(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier3("codePrimeChantier3");
        $this->assertEquals("codePrimeChantier3", $obj->getCodePrimeChantier3());
    }

    /**
     * Tests the setCodePrimeDimanche1() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1("codePrimeDimanche1");
        $this->assertEquals("codePrimeDimanche1", $obj->getCodePrimeDimanche1());
    }

    /**
     * Tests the setCodePrimeDimanche1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1Type2("codePrimeDimanche1Type2");
        $this->assertEquals("codePrimeDimanche1Type2", $obj->getCodePrimeDimanche1Type2());
    }

    /**
     * Tests the setCodePrimeDimanche2() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche2("codePrimeDimanche2");
        $this->assertEquals("codePrimeDimanche2", $obj->getCodePrimeDimanche2());
    }

    /**
     * Tests the setCodePrimeForfait() method.
     *
     * @return void
     */
    public function testSetCodePrimeForfait(): void {

        $obj = new Constantes();

        $obj->setCodePrimeForfait("codePrimeForfait");
        $this->assertEquals("codePrimeForfait", $obj->getCodePrimeForfait());
    }

    /**
     * Tests the setCodePrimeHCompl() method.
     *
     * @return void
     */
    public function testSetCodePrimeHCompl(): void {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl("codePrimeHCompl");
        $this->assertEquals("codePrimeHCompl", $obj->getCodePrimeHCompl());
    }

    /**
     * Tests the setCodePrimeHCompl2() method.
     *
     * @return void
     */
    public function testSetCodePrimeHCompl2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl2("codePrimeHCompl2");
        $this->assertEquals("codePrimeHCompl2", $obj->getCodePrimeHCompl2());
    }

    /**
     * Tests the setCodePrimeJf1() method.
     *
     * @return void
     */
    public function testSetCodePrimeJf1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf1("codePrimeJf1");
        $this->assertEquals("codePrimeJf1", $obj->getCodePrimeJf1());
    }

    /**
     * Tests the setCodePrimeJf1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeJf1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf1Type2("codePrimeJf1Type2");
        $this->assertEquals("codePrimeJf1Type2", $obj->getCodePrimeJf1Type2());
    }

    /**
     * Tests the setCodePrimeJf2() method.
     *
     * @return void
     */
    public function testSetCodePrimeJf2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf2("codePrimeJf2");
        $this->assertEquals("codePrimeJf2", $obj->getCodePrimeJf2());
    }

    /**
     * Tests the setCodePrimeJfMai() method.
     *
     * @return void
     */
    public function testSetCodePrimeJfMai(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJfMai("codePrimeJfMai");
        $this->assertEquals("codePrimeJfMai", $obj->getCodePrimeJfMai());
    }

    /**
     * Tests the setCodePrimeNuit1() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1("codePrimeNuit1");
        $this->assertEquals("codePrimeNuit1", $obj->getCodePrimeNuit1());
    }

    /**
     * Tests the setCodePrimeNuit1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1Type2("codePrimeNuit1Type2");
        $this->assertEquals("codePrimeNuit1Type2", $obj->getCodePrimeNuit1Type2());
    }

    /**
     * Tests the setCodePrimeNuit2() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit2("codePrimeNuit2");
        $this->assertEquals("codePrimeNuit2", $obj->getCodePrimeNuit2());
    }

    /**
     * Tests the setCodePrimePaniers() method.
     *
     * @return void
     */
    public function testSetCodePrimePaniers(): void {

        $obj = new Constantes();

        $obj->setCodePrimePaniers("codePrimePaniers");
        $this->assertEquals("codePrimePaniers", $obj->getCodePrimePaniers());
    }

    /**
     * Tests the setCodePrimeRs() method.
     *
     * @return void
     */
    public function testSetCodePrimeRs(): void {

        $obj = new Constantes();

        $obj->setCodePrimeRs("codePrimeRs");
        $this->assertEquals("codePrimeRs", $obj->getCodePrimeRs());
    }

    /**
     * Tests the setCodePrimeTp() method.
     *
     * @return void
     */
    public function testSetCodePrimeTp(): void {

        $obj = new Constantes();

        $obj->setCodePrimeTp("codePrimeTp");
        $this->assertEquals("codePrimeTp", $obj->getCodePrimeTp());
    }

    /**
     * Tests the setCodeRegJvNegDebut() method.
     *
     * @return void
     */
    public function testSetCodeRegJvNegDebut(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvNegDebut("codeRegJvNegDebut");
        $this->assertEquals("codeRegJvNegDebut", $obj->getCodeRegJvNegDebut());
    }

    /**
     * Tests the setCodeRegJvNegFin() method.
     *
     * @return void
     */
    public function testSetCodeRegJvNegFin(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvNegFin("codeRegJvNegFin");
        $this->assertEquals("codeRegJvNegFin", $obj->getCodeRegJvNegFin());
    }

    /**
     * Tests the setCodeRegJvPrestDebut() method.
     *
     * @return void
     */
    public function testSetCodeRegJvPrestDebut(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvPrestDebut("codeRegJvPrestDebut");
        $this->assertEquals("codeRegJvPrestDebut", $obj->getCodeRegJvPrestDebut());
    }

    /**
     * Tests the setCodeRegJvPrestFin() method.
     *
     * @return void
     */
    public function testSetCodeRegJvPrestFin(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvPrestFin("codeRegJvPrestFin");
        $this->assertEquals("codeRegJvPrestFin", $obj->getCodeRegJvPrestFin());
    }

    /**
     * Tests the setCodeTacheDefaut() method.
     *
     * @return void
     */
    public function testSetCodeTacheDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeTacheDefaut("codeTacheDefaut");
        $this->assertEquals("codeTacheDefaut", $obj->getCodeTacheDefaut());
    }

    /**
     * Tests the setCollectifDef() method.
     *
     * @return void
     */
    public function testSetCollectifDef(): void {

        $obj = new Constantes();

        $obj->setCollectifDef("collectifDef");
        $this->assertEquals("collectifDef", $obj->getCollectifDef());
    }

    /**
     * Tests the setCollectifDefFournisseur() method.
     *
     * @return void
     */
    public function testSetCollectifDefFournisseur(): void {

        $obj = new Constantes();

        $obj->setCollectifDefFournisseur("collectifDefFournisseur");
        $this->assertEquals("collectifDefFournisseur", $obj->getCollectifDefFournisseur());
    }

    /**
     * Tests the setCommentaireJourneeSolidarite() method.
     *
     * @return void
     */
    public function testSetCommentaireJourneeSolidarite(): void {

        $obj = new Constantes();

        $obj->setCommentaireJourneeSolidarite("commentaireJourneeSolidarite");
        $this->assertEquals("commentaireJourneeSolidarite", $obj->getCommentaireJourneeSolidarite());
    }

    /**
     * Tests the setCompteCollectifAchat() method.
     *
     * @return void
     */
    public function testSetCompteCollectifAchat(): void {

        $obj = new Constantes();

        $obj->setCompteCollectifAchat("compteCollectifAchat");
        $this->assertEquals("compteCollectifAchat", $obj->getCompteCollectifAchat());
    }

    /**
     * Tests the setCompteCollectifVente() method.
     *
     * @return void
     */
    public function testSetCompteCollectifVente(): void {

        $obj = new Constantes();

        $obj->setCompteCollectifVente("compteCollectifVente");
        $this->assertEquals("compteCollectifVente", $obj->getCompteCollectifVente());
    }

    /**
     * Tests the setCompteEscompteCaExonere() method.
     *
     * @return void
     */
    public function testSetCompteEscompteCaExonere(): void {

        $obj = new Constantes();

        $obj->setCompteEscompteCaExonere("compteEscompteCaExonere");
        $this->assertEquals("compteEscompteCaExonere", $obj->getCompteEscompteCaExonere());
    }

    /**
     * Tests the setCompteEscompteSoumisTva() method.
     *
     * @return void
     */
    public function testSetCompteEscompteSoumisTva(): void {

        $obj = new Constantes();

        $obj->setCompteEscompteSoumisTva("compteEscompteSoumisTva");
        $this->assertEquals("compteEscompteSoumisTva", $obj->getCompteEscompteSoumisTva());
    }

    /**
     * Tests the setCompteTvaAchat() method.
     *
     * @return void
     */
    public function testSetCompteTvaAchat(): void {

        $obj = new Constantes();

        $obj->setCompteTvaAchat("compteTvaAchat");
        $this->assertEquals("compteTvaAchat", $obj->getCompteTvaAchat());
    }

    /**
     * Tests the setCompteTvaTaxeDeee() method.
     *
     * @return void
     */
    public function testSetCompteTvaTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setCompteTvaTaxeDeee("compteTvaTaxeDeee");
        $this->assertEquals("compteTvaTaxeDeee", $obj->getCompteTvaTaxeDeee());
    }

    /**
     * Tests the setCompteTvaVente() method.
     *
     * @return void
     */
    public function testSetCompteTvaVente(): void {

        $obj = new Constantes();

        $obj->setCompteTvaVente("compteTvaVente");
        $this->assertEquals("compteTvaVente", $obj->getCompteTvaVente());
    }

    /**
     * Tests the setCompteVentilTaxeDeee() method.
     *
     * @return void
     */
    public function testSetCompteVentilTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setCompteVentilTaxeDeee("compteVentilTaxeDeee");
        $this->assertEquals("compteVentilTaxeDeee", $obj->getCompteVentilTaxeDeee());
    }

    /**
     * Tests the setCompterSamediTfCpPaie() method.
     *
     * @return void
     */
    public function testSetCompterSamediTfCpPaie(): void {

        $obj = new Constantes();

        $obj->setCompterSamediTfCpPaie(true);
        $this->assertEquals(true, $obj->getCompterSamediTfCpPaie());
    }

    /**
     * Tests the setControlerCdeFrn() method.
     *
     * @return void
     */
    public function testSetControlerCdeFrn(): void {

        $obj = new Constantes();

        $obj->setControlerCdeFrn(true);
        $this->assertEquals(true, $obj->getControlerCdeFrn());
    }

    /**
     * Tests the setControlerChargesMensuelles() method.
     *
     * @return void
     */
    public function testSetControlerChargesMensuelles(): void {

        $obj = new Constantes();

        $obj->setControlerChargesMensuelles(true);
        $this->assertEquals(true, $obj->getControlerChargesMensuelles());
    }

    /**
     * Tests the setControlerCodeReg() method.
     *
     * @return void
     */
    public function testSetControlerCodeReg(): void {

        $obj = new Constantes();

        $obj->setControlerCodeReg(true);
        $this->assertEquals(true, $obj->getControlerCodeReg());
    }

    /**
     * Tests the setControlerDepHcMax() method.
     *
     * @return void
     */
    public function testSetControlerDepHcMax(): void {

        $obj = new Constantes();

        $obj->setControlerDepHcMax(true);
        $this->assertEquals(true, $obj->getControlerDepHcMax());
    }

    /**
     * Tests the setControlerDepHcPlusMois() method.
     *
     * @return void
     */
    public function testSetControlerDepHcPlusMois(): void {

        $obj = new Constantes();

        $obj->setControlerDepHcPlusMois(true);
        $this->assertEquals(true, $obj->getControlerDepHcPlusMois());
    }

    /**
     * Tests the setCpSansProvisions() method.
     *
     * @return void
     */
    public function testSetCpSansProvisions(): void {

        $obj = new Constantes();

        $obj->setCpSansProvisions(true);
        $this->assertEquals(true, $obj->getCpSansProvisions());
    }

    /**
     * Tests the setCreerAlertePaieDefEnPaie() method.
     *
     * @return void
     */
    public function testSetCreerAlertePaieDefEnPaie(): void {

        $obj = new Constantes();

        $obj->setCreerAlertePaieDefEnPaie(true);
        $this->assertEquals(true, $obj->getCreerAlertePaieDefEnPaie());
    }

    /**
     * Tests the setCtrlAutoCp() method.
     *
     * @return void
     */
    public function testSetCtrlAutoCp(): void {

        $obj = new Constantes();

        $obj->setCtrlAutoCp(true);
        $this->assertEquals(true, $obj->getCtrlAutoCp());
    }

    /**
     * Tests the setCtrlAutoCpAvecAnticipation() method.
     *
     * @return void
     */
    public function testSetCtrlAutoCpAvecAnticipation(): void {

        $obj = new Constantes();

        $obj->setCtrlAutoCpAvecAnticipation(true);
        $this->assertEquals(true, $obj->getCtrlAutoCpAvecAnticipation());
    }

    /**
     * Tests the setDateAppliGestionHeuresEnPlus() method.
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
     * Tests the setDateJourneeSolidarite() method.
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
     * Tests the setDateValidationSynchro() method.
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
     * Tests the setDecMoisPrepFact() method.
     *
     * @return void
     */
    public function testSetDecMoisPrepFact(): void {

        $obj = new Constantes();

        $obj->setDecMoisPrepFact(10);
        $this->assertEquals(10, $obj->getDecMoisPrepFact());
    }

    /**
     * Tests the setDernierCompteClient() method.
     *
     * @return void
     */
    public function testSetDernierCompteClient(): void {

        $obj = new Constantes();

        $obj->setDernierCompteClient("dernierCompteClient");
        $this->assertEquals("dernierCompteClient", $obj->getDernierCompteClient());
    }

    /**
     * Tests the setDernierCompteFrn() method.
     *
     * @return void
     */
    public function testSetDernierCompteFrn(): void {

        $obj = new Constantes();

        $obj->setDernierCompteFrn("dernierCompteFrn");
        $this->assertEquals("dernierCompteFrn", $obj->getDernierCompteFrn());
    }

    /**
     * Tests the setDiscr() method.
     *
     * @return void
     */
    public function testSetDiscr(): void {

        $obj = new Constantes();

        $obj->setDiscr("discr");
        $this->assertEquals("discr", $obj->getDiscr());
    }

    /**
     * Tests the setDossCompta() method.
     *
     * @return void
     */
    public function testSetDossCompta(): void {

        $obj = new Constantes();

        $obj->setDossCompta("dossCompta");
        $this->assertEquals("dossCompta", $obj->getDossCompta());
    }

    /**
     * Tests the setDossPaie() method.
     *
     * @return void
     */
    public function testSetDossPaie(): void {

        $obj = new Constantes();

        $obj->setDossPaie("dossPaie");
        $this->assertEquals("dossPaie", $obj->getDossPaie());
    }

    /**
     * Tests the setEsCodeAbsEntree() method.
     *
     * @return void
     */
    public function testSetEsCodeAbsEntree(): void {

        $obj = new Constantes();

        $obj->setEsCodeAbsEntree("esCodeAbsEntree");
        $this->assertEquals("esCodeAbsEntree", $obj->getEsCodeAbsEntree());
    }

    /**
     * Tests the setEsCodeAbsSortie() method.
     *
     * @return void
     */
    public function testSetEsCodeAbsSortie(): void {

        $obj = new Constantes();

        $obj->setEsCodeAbsSortie("esCodeAbsSortie");
        $this->assertEquals("esCodeAbsSortie", $obj->getEsCodeAbsSortie());
    }

    /**
     * Tests the setEsHeuresReelles() method.
     *
     * @return void
     */
    public function testSetEsHeuresReelles(): void {

        $obj = new Constantes();

        $obj->setEsHeuresReelles(true);
        $this->assertEquals(true, $obj->getEsHeuresReelles());
    }

    /**
     * Tests the setEtablissementsPaie() method.
     *
     * @return void
     */
    public function testSetEtablissementsPaie(): void {

        $obj = new Constantes();

        $obj->setEtablissementsPaie("etablissementsPaie");
        $this->assertEquals("etablissementsPaie", $obj->getEtablissementsPaie());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Constantes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setEuro() method.
     *
     * @return void
     */
    public function testSetEuro(): void {

        $obj = new Constantes();

        $obj->setEuro(true);
        $this->assertEquals(true, $obj->getEuro());
    }

    /**
     * Tests the setFacturationProrataHeures() method.
     *
     * @return void
     */
    public function testSetFacturationProrataHeures(): void {

        $obj = new Constantes();

        $obj->setFacturationProrataHeures(true);
        $this->assertEquals(true, $obj->getFacturationProrataHeures());
    }

    /**
     * Tests the setFolioJa() method.
     *
     * @return void
     */
    public function testSetFolioJa(): void {

        $obj = new Constantes();

        $obj->setFolioJa("folioJa");
        $this->assertEquals("folioJa", $obj->getFolioJa());
    }

    /**
     * Tests the setFolioJvNegoce() method.
     *
     * @return void
     */
    public function testSetFolioJvNegoce(): void {

        $obj = new Constantes();

        $obj->setFolioJvNegoce("folioJvNegoce");
        $this->assertEquals("folioJvNegoce", $obj->getFolioJvNegoce());
    }

    /**
     * Tests the setFolioJvPrestation() method.
     *
     * @return void
     */
    public function testSetFolioJvPrestation(): void {

        $obj = new Constantes();

        $obj->setFolioJvPrestation("folioJvPrestation");
        $this->assertEquals("folioJvPrestation", $obj->getFolioJvPrestation());
    }

    /**
     * Tests the setGererNumCptChantier() method.
     *
     * @return void
     */
    public function testSetGererNumCptChantier(): void {

        $obj = new Constantes();

        $obj->setGererNumCptChantier(true);
        $this->assertEquals(true, $obj->getGererNumCptChantier());
    }

    /**
     * Tests the setGestionHCompl() method.
     *
     * @return void
     */
    public function testSetGestionHCompl(): void {

        $obj = new Constantes();

        $obj->setGestionHCompl(true);
        $this->assertEquals(true, $obj->getGestionHCompl());
    }

    /**
     * Tests the setGestionHSupMens() method.
     *
     * @return void
     */
    public function testSetGestionHSupMens(): void {

        $obj = new Constantes();

        $obj->setGestionHSupMens(true);
        $this->assertEquals(true, $obj->getGestionHSupMens());
    }

    /**
     * Tests the setGestionHSupMensuelle() method.
     *
     * @return void
     */
    public function testSetGestionHSupMensuelle(): void {

        $obj = new Constantes();

        $obj->setGestionHSupMensuelle(true);
        $this->assertEquals(true, $obj->getGestionHSupMensuelle());
    }

    /**
     * Tests the setGestionMajDim() method.
     *
     * @return void
     */
    public function testSetGestionMajDim(): void {

        $obj = new Constantes();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Tests the setGestionMajJf() method.
     *
     * @return void
     */
    public function testSetGestionMajJf(): void {

        $obj = new Constantes();

        $obj->setGestionMajJf("gestionMajJf");
        $this->assertEquals("gestionMajJf", $obj->getGestionMajJf());
    }

    /**
     * Tests the setGestionMajNuit() method.
     *
     * @return void
     */
    public function testSetGestionMajNuit(): void {

        $obj = new Constantes();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Tests the setGestionMultiDepot() method.
     *
     * @return void
     */
    public function testSetGestionMultiDepot(): void {

        $obj = new Constantes();

        $obj->setGestionMultiDepot(true);
        $this->assertEquals(true, $obj->getGestionMultiDepot());
    }

    /**
     * Tests the setGestionQuotas() method.
     *
     * @return void
     */
    public function testSetGestionQuotas(): void {

        $obj = new Constantes();

        $obj->setGestionQuotas(true);
        $this->assertEquals(true, $obj->getGestionQuotas());
    }

    /**
     * Tests the setGestionSpecifJf() method.
     *
     * @return void
     */
    public function testSetGestionSpecifJf(): void {

        $obj = new Constantes();

        $obj->setGestionSpecifJf(true);
        $this->assertEquals(true, $obj->getGestionSpecifJf());
    }

    /**
     * Tests the setGestionSpecifMajoJf() method.
     *
     * @return void
     */
    public function testSetGestionSpecifMajoJf(): void {

        $obj = new Constantes();

        $obj->setGestionSpecifMajoJf(true);
        $this->assertEquals(true, $obj->getGestionSpecifMajoJf());
    }

    /**
     * Tests the setHDebNuit() method.
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
     * Tests the setHDebNuitTravNuit() method.
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
     * Tests the setHFinNuit() method.
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
     * Tests the setHFinNuitTravNuit() method.
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
     * Tests the setHeuresAbsenceMensualise() method.
     *
     * @return void
     */
    public function testSetHeuresAbsenceMensualise(): void {

        $obj = new Constantes();

        $obj->setHeuresAbsenceMensualise(true);
        $this->assertEquals(true, $obj->getHeuresAbsenceMensualise());
    }

    /**
     * Tests the setHeuresRemplEgalesMensTitulaire() method.
     *
     * @return void
     */
    public function testSetHeuresRemplEgalesMensTitulaire(): void {

        $obj = new Constantes();

        $obj->setHeuresRemplEgalesMensTitulaire(true);
        $this->assertEquals(true, $obj->getHeuresRemplEgalesMensTitulaire());
    }

    /**
     * Tests the setIncrementCompteAuto() method.
     *
     * @return void
     */
    public function testSetIncrementCompteAuto(): void {

        $obj = new Constantes();

        $obj->setIncrementCompteAuto(10);
        $this->assertEquals(10, $obj->getIncrementCompteAuto());
    }

    /**
     * Tests the setLiaisonComptaWin() method.
     *
     * @return void
     */
    public function testSetLiaisonComptaWin(): void {

        $obj = new Constantes();

        $obj->setLiaisonComptaWin(true);
        $this->assertEquals(true, $obj->getLiaisonComptaWin());
    }

    /**
     * Tests the setLibCritereBool1() method.
     *
     * @return void
     */
    public function testSetLibCritereBool1(): void {

        $obj = new Constantes();

        $obj->setLibCritereBool1("libCritereBool1");
        $this->assertEquals("libCritereBool1", $obj->getLibCritereBool1());
    }

    /**
     * Tests the setLibCritereBool2() method.
     *
     * @return void
     */
    public function testSetLibCritereBool2(): void {

        $obj = new Constantes();

        $obj->setLibCritereBool2("libCritereBool2");
        $this->assertEquals("libCritereBool2", $obj->getLibCritereBool2());
    }

    /**
     * Tests the setLibCritereByte1() method.
     *
     * @return void
     */
    public function testSetLibCritereByte1(): void {

        $obj = new Constantes();

        $obj->setLibCritereByte1("libCritereByte1");
        $this->assertEquals("libCritereByte1", $obj->getLibCritereByte1());
    }

    /**
     * Tests the setLibCritereNum1() method.
     *
     * @return void
     */
    public function testSetLibCritereNum1(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum1("libCritereNum1");
        $this->assertEquals("libCritereNum1", $obj->getLibCritereNum1());
    }

    /**
     * Tests the setLibCritereNum2() method.
     *
     * @return void
     */
    public function testSetLibCritereNum2(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum2("libCritereNum2");
        $this->assertEquals("libCritereNum2", $obj->getLibCritereNum2());
    }

    /**
     * Tests the setLibCritereNum3() method.
     *
     * @return void
     */
    public function testSetLibCritereNum3(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum3("libCritereNum3");
        $this->assertEquals("libCritereNum3", $obj->getLibCritereNum3());
    }

    /**
     * Tests the setLibCritereNum4() method.
     *
     * @return void
     */
    public function testSetLibCritereNum4(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum4("libCritereNum4");
        $this->assertEquals("libCritereNum4", $obj->getLibCritereNum4());
    }

    /**
     * Tests the setLibCritereNum5() method.
     *
     * @return void
     */
    public function testSetLibCritereNum5(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum5("libCritereNum5");
        $this->assertEquals("libCritereNum5", $obj->getLibCritereNum5());
    }

    /**
     * Tests the setLibCritereTab1() method.
     *
     * @return void
     */
    public function testSetLibCritereTab1(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab1("libCritereTab1");
        $this->assertEquals("libCritereTab1", $obj->getLibCritereTab1());
    }

    /**
     * Tests the setLibCritereTab2() method.
     *
     * @return void
     */
    public function testSetLibCritereTab2(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab2("libCritereTab2");
        $this->assertEquals("libCritereTab2", $obj->getLibCritereTab2());
    }

    /**
     * Tests the setLibCritereTab3() method.
     *
     * @return void
     */
    public function testSetLibCritereTab3(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab3("libCritereTab3");
        $this->assertEquals("libCritereTab3", $obj->getLibCritereTab3());
    }

    /**
     * Tests the setLibCritereTab4() method.
     *
     * @return void
     */
    public function testSetLibCritereTab4(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab4("libCritereTab4");
        $this->assertEquals("libCritereTab4", $obj->getLibCritereTab4());
    }

    /**
     * Tests the setLibCritereTab5() method.
     *
     * @return void
     */
    public function testSetLibCritereTab5(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab5("libCritereTab5");
        $this->assertEquals("libCritereTab5", $obj->getLibCritereTab5());
    }

    /**
     * Tests the setLibCritereTxt1() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt1(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt1("libCritereTxt1");
        $this->assertEquals("libCritereTxt1", $obj->getLibCritereTxt1());
    }

    /**
     * Tests the setLibCritereTxt2() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt2(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt2("libCritereTxt2");
        $this->assertEquals("libCritereTxt2", $obj->getLibCritereTxt2());
    }

    /**
     * Tests the setLibCritereTxt3() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt3(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt3("libCritereTxt3");
        $this->assertEquals("libCritereTxt3", $obj->getLibCritereTxt3());
    }

    /**
     * Tests the setLibCritereTxt4() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt4(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt4("libCritereTxt4");
        $this->assertEquals("libCritereTxt4", $obj->getLibCritereTxt4());
    }

    /**
     * Tests the setLibCritereTxt5() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt5(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt5("libCritereTxt5");
        $this->assertEquals("libCritereTxt5", $obj->getLibCritereTxt5());
    }

    /**
     * Tests the setLibelleAutoAvoir() method.
     *
     * @return void
     */
    public function testSetLibelleAutoAvoir(): void {

        $obj = new Constantes();

        $obj->setLibelleAutoAvoir("libelleAutoAvoir");
        $this->assertEquals("libelleAutoAvoir", $obj->getLibelleAutoAvoir());
    }

    /**
     * Tests the setLibelleAutoFacture() method.
     *
     * @return void
     */
    public function testSetLibelleAutoFacture(): void {

        $obj = new Constantes();

        $obj->setLibelleAutoFacture("libelleAutoFacture");
        $this->assertEquals("libelleAutoFacture", $obj->getLibelleAutoFacture());
    }

    /**
     * Tests the setLibelleHeuresSurcroit() method.
     *
     * @return void
     */
    public function testSetLibelleHeuresSurcroit(): void {

        $obj = new Constantes();

        $obj->setLibelleHeuresSurcroit("libelleHeuresSurcroit");
        $this->assertEquals("libelleHeuresSurcroit", $obj->getLibelleHeuresSurcroit());
    }

    /**
     * Tests the setLibelleTransfert() method.
     *
     * @return void
     */
    public function testSetLibelleTransfert(): void {

        $obj = new Constantes();

        $obj->setLibelleTransfert("libelleTransfert");
        $this->assertEquals("libelleTransfert", $obj->getLibelleTransfert());
    }

    /**
     * Tests the setLibelleTransfertAchat() method.
     *
     * @return void
     */
    public function testSetLibelleTransfertAchat(): void {

        $obj = new Constantes();

        $obj->setLibelleTransfertAchat("libelleTransfertAchat");
        $this->assertEquals("libelleTransfertAchat", $obj->getLibelleTransfertAchat());
    }

    /**
     * Tests the setLivCdeFrnDepotUnique() method.
     *
     * @return void
     */
    public function testSetLivCdeFrnDepotUnique(): void {

        $obj = new Constantes();

        $obj->setLivCdeFrnDepotUnique(true);
        $this->assertEquals(true, $obj->getLivCdeFrnDepotUnique());
    }

    /**
     * Tests the setMailAttestations() method.
     *
     * @return void
     */
    public function testSetMailAttestations(): void {

        $obj = new Constantes();

        $obj->setMailAttestations("mailAttestations");
        $this->assertEquals("mailAttestations", $obj->getMailAttestations());
    }

    /**
     * Tests the setMailFactures() method.
     *
     * @return void
     */
    public function testSetMailFactures(): void {

        $obj = new Constantes();

        $obj->setMailFactures("mailFactures");
        $this->assertEquals("mailFactures", $obj->getMailFactures());
    }

    /**
     * Tests the setMajDernierPassageBt() method.
     *
     * @return void
     */
    public function testSetMajDernierPassageBt(): void {

        $obj = new Constantes();

        $obj->setMajDernierPassageBt(true);
        $this->assertEquals(true, $obj->getMajDernierPassageBt());
    }

    /**
     * Tests the setMajDernierPrixAchat() method.
     *
     * @return void
     */
    public function testSetMajDernierPrixAchat(): void {

        $obj = new Constantes();

        $obj->setMajDernierPrixAchat(true);
        $this->assertEquals(true, $obj->getMajDernierPrixAchat());
    }

    /**
     * Tests the setMajPamp() method.
     *
     * @return void
     */
    public function testSetMajPamp(): void {

        $obj = new Constantes();

        $obj->setMajPamp(true);
        $this->assertEquals(true, $obj->getMajPamp());
    }

    /**
     * Tests the setMajorationCascade() method.
     *
     * @return void
     */
    public function testSetMajorationCascade(): void {

        $obj = new Constantes();

        $obj->setMajorationCascade(true);
        $this->assertEquals(true, $obj->getMajorationCascade());
    }

    /**
     * Tests the setMajorationHPlus() method.
     *
     * @return void
     */
    public function testSetMajorationHPlus(): void {

        $obj = new Constantes();

        $obj->setMajorationHPlus("majorationHPlus");
        $this->assertEquals("majorationHPlus", $obj->getMajorationHPlus());
    }

    /**
     * Tests the setMargeNiveauEdition() method.
     *
     * @return void
     */
    public function testSetMargeNiveauEdition(): void {

        $obj = new Constantes();

        $obj->setMargeNiveauEdition("margeNiveauEdition");
        $this->assertEquals("margeNiveauEdition", $obj->getMargeNiveauEdition());
    }

    /**
     * Tests the setMargePourcentCharge() method.
     *
     * @return void
     */
    public function testSetMargePourcentCharge(): void {

        $obj = new Constantes();

        $obj->setMargePourcentCharge(10.092018);
        $this->assertEquals(10.092018, $obj->getMargePourcentCharge());
    }

    /**
     * Tests the setMargeSalInspProrataCa() method.
     *
     * @return void
     */
    public function testSetMargeSalInspProrataCa(): void {

        $obj = new Constantes();

        $obj->setMargeSalInspProrataCa(true);
        $this->assertEquals(true, $obj->getMargeSalInspProrataCa());
    }

    /**
     * Tests the setMensualisationTache() method.
     *
     * @return void
     */
    public function testSetMensualisationTache(): void {

        $obj = new Constantes();

        $obj->setMensualisationTache(true);
        $this->assertEquals(true, $obj->getMensualisationTache());
    }

    /**
     * Tests the setModeCalculPropositionCde() method.
     *
     * @return void
     */
    public function testSetModeCalculPropositionCde(): void {

        $obj = new Constantes();

        $obj->setModeCalculPropositionCde("modeCalculPropositionCde");
        $this->assertEquals("modeCalculPropositionCde", $obj->getModeCalculPropositionCde());
    }

    /**
     * Tests the setModeleDevis() method.
     *
     * @return void
     */
    public function testSetModeleDevis(): void {

        $obj = new Constantes();

        $obj->setModeleDevis("modeleDevis");
        $this->assertEquals("modeleDevis", $obj->getModeleDevis());
    }

    /**
     * Tests the setModeleDevisTech() method.
     *
     * @return void
     */
    public function testSetModeleDevisTech(): void {

        $obj = new Constantes();

        $obj->setModeleDevisTech("modeleDevisTech");
        $this->assertEquals("modeleDevisTech", $obj->getModeleDevisTech());
    }

    /**
     * Tests the setModeleFacture() method.
     *
     * @return void
     */
    public function testSetModeleFacture(): void {

        $obj = new Constantes();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Tests the setMtCptaNegatif() method.
     *
     * @return void
     */
    public function testSetMtCptaNegatif(): void {

        $obj = new Constantes();

        $obj->setMtCptaNegatif(true);
        $this->assertEquals(true, $obj->getMtCptaNegatif());
    }

    /**
     * Tests the setNDerDocument() method.
     *
     * @return void
     */
    public function testSetNDerDocument(): void {

        $obj = new Constantes();

        $obj->setNDerDocument(10);
        $this->assertEquals(10, $obj->getNDerDocument());
    }

    /**
     * Tests the setNbCaracteresLigneFact() method.
     *
     * @return void
     */
    public function testSetNbCaracteresLigneFact(): void {

        $obj = new Constantes();

        $obj->setNbCaracteresLigneFact("nbCaracteresLigneFact");
        $this->assertEquals("nbCaracteresLigneFact", $obj->getNbCaracteresLigneFact());
    }

    /**
     * Tests the setNbDecimalesPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetNbDecimalesPrixUnitaire(): void {

        $obj = new Constantes();

        $obj->setNbDecimalesPrixUnitaire("nbDecimalesPrixUnitaire");
        $this->assertEquals("nbDecimalesPrixUnitaire", $obj->getNbDecimalesPrixUnitaire());
    }

    /**
     * Tests the setNbDecimalesQuantite() method.
     *
     * @return void
     */
    public function testSetNbDecimalesQuantite(): void {

        $obj = new Constantes();

        $obj->setNbDecimalesQuantite("nbDecimalesQuantite");
        $this->assertEquals("nbDecimalesQuantite", $obj->getNbDecimalesQuantite());
    }

    /**
     * Tests the setNbEntiersPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetNbEntiersPrixUnitaire(): void {

        $obj = new Constantes();

        $obj->setNbEntiersPrixUnitaire("nbEntiersPrixUnitaire");
        $this->assertEquals("nbEntiersPrixUnitaire", $obj->getNbEntiersPrixUnitaire());
    }

    /**
     * Tests the setNbEntiersQuantite() method.
     *
     * @return void
     */
    public function testSetNbEntiersQuantite(): void {

        $obj = new Constantes();

        $obj->setNbEntiersQuantite("nbEntiersQuantite");
        $this->assertEquals("nbEntiersQuantite", $obj->getNbEntiersQuantite());
    }

    /**
     * Tests the setNbJourCpAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Constantes();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests the setNbJoursAbsProratisationDcp() method.
     *
     * @return void
     */
    public function testSetNbJoursAbsProratisationDcp(): void {

        $obj = new Constantes();

        $obj->setNbJoursAbsProratisationDcp(10);
        $this->assertEquals(10, $obj->getNbJoursAbsProratisationDcp());
    }

    /**
     * Tests the setNbMoisConsecutifs() method.
     *
     * @return void
     */
    public function testSetNbMoisConsecutifs(): void {

        $obj = new Constantes();

        $obj->setNbMoisConsecutifs(10);
        $this->assertEquals(10, $obj->getNbMoisConsecutifs());
    }

    /**
     * Tests the setNomFactNbLignes() method.
     *
     * @return void
     */
    public function testSetNomFactNbLignes(): void {

        $obj = new Constantes();

        $obj->setNomFactNbLignes("nomFactNbLignes");
        $this->assertEquals("nomFactNbLignes", $obj->getNomFactNbLignes());
    }

    /**
     * Tests the setNomFichierAsciiAchat() method.
     *
     * @return void
     */
    public function testSetNomFichierAsciiAchat(): void {

        $obj = new Constantes();

        $obj->setNomFichierAsciiAchat("nomFichierAsciiAchat");
        $this->assertEquals("nomFichierAsciiAchat", $obj->getNomFichierAsciiAchat());
    }

    /**
     * Tests the setNomFichierAsciiVente() method.
     *
     * @return void
     */
    public function testSetNomFichierAsciiVente(): void {

        $obj = new Constantes();

        $obj->setNomFichierAsciiVente("nomFichierAsciiVente");
        $this->assertEquals("nomFichierAsciiVente", $obj->getNomFichierAsciiVente());
    }

    /**
     * Tests the setNote0NonConforme() method.
     *
     * @return void
     */
    public function testSetNote0NonConforme(): void {

        $obj = new Constantes();

        $obj->setNote0NonConforme(true);
        $this->assertEquals(true, $obj->getNote0NonConforme());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new Constantes();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setNumCritereBtNum1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtNum1(): void {

        $obj = new Constantes();

        $obj->setNumCritereBtNum1("numCritereBtNum1");
        $this->assertEquals("numCritereBtNum1", $obj->getNumCritereBtNum1());
    }

    /**
     * Tests the setNumCritereBtNum2() method.
     *
     * @return void
     */
    public function testSetNumCritereBtNum2(): void {

        $obj = new Constantes();

        $obj->setNumCritereBtNum2("numCritereBtNum2");
        $this->assertEquals("numCritereBtNum2", $obj->getNumCritereBtNum2());
    }

    /**
     * Tests the setNumCritereChantierFiltre1() method.
     *
     * @return void
     */
    public function testSetNumCritereChantierFiltre1(): void {

        $obj = new Constantes();

        $obj->setNumCritereChantierFiltre1("numCritereChantierFiltre1");
        $this->assertEquals("numCritereChantierFiltre1", $obj->getNumCritereChantierFiltre1());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new Constantes();

        $obj->setNumDevis(10);
        $this->assertEquals(10, $obj->getNumDevis());
    }

    /**
     * Tests the setNumFact() method.
     *
     * @return void
     */
    public function testSetNumFact(): void {

        $obj = new Constantes();

        $obj->setNumFact(10);
        $this->assertEquals(10, $obj->getNumFact());
    }

    /**
     * Tests the setNumFactVm() method.
     *
     * @return void
     */
    public function testSetNumFactVm(): void {

        $obj = new Constantes();

        $obj->setNumFactVm(10);
        $this->assertEquals(10, $obj->getNumFactVm());
    }

    /**
     * Tests the setNumeroFicheControle() method.
     *
     * @return void
     */
    public function testSetNumeroFicheControle(): void {

        $obj = new Constantes();

        $obj->setNumeroFicheControle(10);
        $this->assertEquals(10, $obj->getNumeroFicheControle());
    }

    /**
     * Tests the setPaParFournisseur() method.
     *
     * @return void
     */
    public function testSetPaParFournisseur(): void {

        $obj = new Constantes();

        $obj->setPaParFournisseur(true);
        $this->assertEquals(true, $obj->getPaParFournisseur());
    }

    /**
     * Tests the setPasNumCptParDossier() method.
     *
     * @return void
     */
    public function testSetPasNumCptParDossier(): void {

        $obj = new Constantes();

        $obj->setPasNumCptParDossier(true);
        $this->assertEquals(true, $obj->getPasNumCptParDossier());
    }

    /**
     * Tests the setPdfBtCoefficient() method.
     *
     * @return void
     */
    public function testSetPdfBtCoefficient(): void {

        $obj = new Constantes();

        $obj->setPdfBtCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtCoefficient());
    }

    /**
     * Tests the setPdfBtDatePassage() method.
     *
     * @return void
     */
    public function testSetPdfBtDatePassage(): void {

        $obj = new Constantes();

        $obj->setPdfBtDatePassage(true);
        $this->assertEquals(true, $obj->getPdfBtDatePassage());
    }

    /**
     * Tests the setPdfBtDescriptif() method.
     *
     * @return void
     */
    public function testSetPdfBtDescriptif(): void {

        $obj = new Constantes();

        $obj->setPdfBtDescriptif(true);
        $this->assertEquals(true, $obj->getPdfBtDescriptif());
    }

    /**
     * Tests the setPdfBtEmployesCorps() method.
     *
     * @return void
     */
    public function testSetPdfBtEmployesCorps(): void {

        $obj = new Constantes();

        $obj->setPdfBtEmployesCorps(true);
        $this->assertEquals(true, $obj->getPdfBtEmployesCorps());
    }

    /**
     * Tests the setPdfBtEmployesRef() method.
     *
     * @return void
     */
    public function testSetPdfBtEmployesRef(): void {

        $obj = new Constantes();

        $obj->setPdfBtEmployesRef(true);
        $this->assertEquals(true, $obj->getPdfBtEmployesRef());
    }

    /**
     * Tests the setPdfBtFacturerAlaValidation() method.
     *
     * @return void
     */
    public function testSetPdfBtFacturerAlaValidation(): void {

        $obj = new Constantes();

        $obj->setPdfBtFacturerAlaValidation(true);
        $this->assertEquals(true, $obj->getPdfBtFacturerAlaValidation());
    }

    /**
     * Tests the setPdfBtFormatSaisieQtePu() method.
     *
     * @return void
     */
    public function testSetPdfBtFormatSaisieQtePu(): void {

        $obj = new Constantes();

        $obj->setPdfBtFormatSaisieQtePu(true);
        $this->assertEquals(true, $obj->getPdfBtFormatSaisieQtePu());
    }

    /**
     * Tests the setPdfBtLibelleDate() method.
     *
     * @return void
     */
    public function testSetPdfBtLibelleDate(): void {

        $obj = new Constantes();

        $obj->setPdfBtLibelleDate("pdfBtLibelleDate");
        $this->assertEquals("pdfBtLibelleDate", $obj->getPdfBtLibelleDate());
    }

    /**
     * Tests the setPdfBtNomChantier() method.
     *
     * @return void
     */
    public function testSetPdfBtNomChantier(): void {

        $obj = new Constantes();

        $obj->setPdfBtNomChantier(true);
        $this->assertEquals(true, $obj->getPdfBtNomChantier());
    }

    /**
     * Tests the setPdfBtPeriodeValidite() method.
     *
     * @return void
     */
    public function testSetPdfBtPeriodeValidite(): void {

        $obj = new Constantes();

        $obj->setPdfBtPeriodeValidite(true);
        $this->assertEquals(true, $obj->getPdfBtPeriodeValidite());
    }

    /**
     * Tests the setPdfBtPrixAchat() method.
     *
     * @return void
     */
    public function testSetPdfBtPrixAchat(): void {

        $obj = new Constantes();

        $obj->setPdfBtPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtPrixAchat());
    }

    /**
     * Tests the setPdfBtReprendreLibelleDate() method.
     *
     * @return void
     */
    public function testSetPdfBtReprendreLibelleDate(): void {

        $obj = new Constantes();

        $obj->setPdfBtReprendreLibelleDate(true);
        $this->assertEquals(true, $obj->getPdfBtReprendreLibelleDate());
    }

    /**
     * Tests the setPdfBtTauxHoraire() method.
     *
     * @return void
     */
    public function testSetPdfBtTauxHoraire(): void {

        $obj = new Constantes();

        $obj->setPdfBtTauxHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtTauxHoraire());
    }

    /**
     * Tests the setPjEnvoiMail() method.
     *
     * @return void
     */
    public function testSetPjEnvoiMail(): void {

        $obj = new Constantes();

        $obj->setPjEnvoiMail("pjEnvoiMail");
        $this->assertEquals("pjEnvoiMail", $obj->getPjEnvoiMail());
    }

    /**
     * Tests the setPjEnvoiMailAttestation() method.
     *
     * @return void
     */
    public function testSetPjEnvoiMailAttestation(): void {

        $obj = new Constantes();

        $obj->setPjEnvoiMailAttestation("pjEnvoiMailAttestation");
        $this->assertEquals("pjEnvoiMailAttestation", $obj->getPjEnvoiMailAttestation());
    }

    /**
     * Tests the setPointBtEmployesSortis() method.
     *
     * @return void
     */
    public function testSetPointBtEmployesSortis(): void {

        $obj = new Constantes();

        $obj->setPointBtEmployesSortis(true);
        $this->assertEquals(true, $obj->getPointBtEmployesSortis());
    }

    /**
     * Tests the setPoste1() method.
     *
     * @return void
     */
    public function testSetPoste1(): void {

        $obj = new Constantes();

        $obj->setPoste1("poste1");
        $this->assertEquals("poste1", $obj->getPoste1());
    }

    /**
     * Tests the setPoste2() method.
     *
     * @return void
     */
    public function testSetPoste2(): void {

        $obj = new Constantes();

        $obj->setPoste2("poste2");
        $this->assertEquals("poste2", $obj->getPoste2());
    }

    /**
     * Tests the setPoste3() method.
     *
     * @return void
     */
    public function testSetPoste3(): void {

        $obj = new Constantes();

        $obj->setPoste3("poste3");
        $this->assertEquals("poste3", $obj->getPoste3());
    }

    /**
     * Tests the setPoste4() method.
     *
     * @return void
     */
    public function testSetPoste4(): void {

        $obj = new Constantes();

        $obj->setPoste4("poste4");
        $this->assertEquals("poste4", $obj->getPoste4());
    }

    /**
     * Tests the setPoste5() method.
     *
     * @return void
     */
    public function testSetPoste5(): void {

        $obj = new Constantes();

        $obj->setPoste5("poste5");
        $this->assertEquals("poste5", $obj->getPoste5());
    }

    /**
     * Tests the setPourcMajHCompl() method.
     *
     * @return void
     */
    public function testSetPourcMajHCompl(): void {

        $obj = new Constantes();

        $obj->setPourcMajHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl());
    }

    /**
     * Tests the setPourcMajHCompl2() method.
     *
     * @return void
     */
    public function testSetPourcMajHCompl2(): void {

        $obj = new Constantes();

        $obj->setPourcMajHCompl2(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl2());
    }

    /**
     * Tests the setPourcentDepHcMax() method.
     *
     * @return void
     */
    public function testSetPourcentDepHcMax(): void {

        $obj = new Constantes();

        $obj->setPourcentDepHcMax(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHcMax());
    }

    /**
     * Tests the setPourcentDepHcPlusMois() method.
     *
     * @return void
     */
    public function testSetPourcentDepHcPlusMois(): void {

        $obj = new Constantes();

        $obj->setPourcentDepHcPlusMois(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHcPlusMois());
    }

    /**
     * Tests the setPourcentageReposRemplacement() method.
     *
     * @return void
     */
    public function testSetPourcentageReposRemplacement(): void {

        $obj = new Constantes();

        $obj->setPourcentageReposRemplacement(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentageReposRemplacement());
    }

    /**
     * Tests the setPrefixe() method.
     *
     * @return void
     */
    public function testSetPrefixe(): void {

        $obj = new Constantes();

        $obj->setPrefixe("prefixe");
        $this->assertEquals("prefixe", $obj->getPrefixe());
    }

    /**
     * Tests the setPrefixeDevis() method.
     *
     * @return void
     */
    public function testSetPrefixeDevis(): void {

        $obj = new Constantes();

        $obj->setPrefixeDevis("prefixeDevis");
        $this->assertEquals("prefixeDevis", $obj->getPrefixeDevis());
    }

    /**
     * Tests the setPreparerChantierPretOnly() method.
     *
     * @return void
     */
    public function testSetPreparerChantierPretOnly(): void {

        $obj = new Constantes();

        $obj->setPreparerChantierPretOnly(true);
        $this->assertEquals(true, $obj->getPreparerChantierPretOnly());
    }

    /**
     * Tests the setPrixDefautAchat() method.
     *
     * @return void
     */
    public function testSetPrixDefautAchat(): void {

        $obj = new Constantes();

        $obj->setPrixDefautAchat(10);
        $this->assertEquals(10, $obj->getPrixDefautAchat());
    }

    /**
     * Tests the setPrixDefautEntreeDirecte() method.
     *
     * @return void
     */
    public function testSetPrixDefautEntreeDirecte(): void {

        $obj = new Constantes();

        $obj->setPrixDefautEntreeDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautEntreeDirecte());
    }

    /**
     * Tests the setPrixDefautInventaire() method.
     *
     * @return void
     */
    public function testSetPrixDefautInventaire(): void {

        $obj = new Constantes();

        $obj->setPrixDefautInventaire(10);
        $this->assertEquals(10, $obj->getPrixDefautInventaire());
    }

    /**
     * Tests the setPrixDefautSortieDirecte() method.
     *
     * @return void
     */
    public function testSetPrixDefautSortieDirecte(): void {

        $obj = new Constantes();

        $obj->setPrixDefautSortieDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautSortieDirecte());
    }

    /**
     * Tests the setPrixDefautVente() method.
     *
     * @return void
     */
    public function testSetPrixDefautVente(): void {

        $obj = new Constantes();

        $obj->setPrixDefautVente(10);
        $this->assertEquals(10, $obj->getPrixDefautVente());
    }

    /**
     * Tests the setProchainNumeroPj() method.
     *
     * @return void
     */
    public function testSetProchainNumeroPj(): void {

        $obj = new Constantes();

        $obj->setProchainNumeroPj(10);
        $this->assertEquals(10, $obj->getProchainNumeroPj());
    }

    /**
     * Tests the setProrataHeuresCreerLigne() method.
     *
     * @return void
     */
    public function testSetProrataHeuresCreerLigne(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresCreerLigne(true);
        $this->assertEquals(true, $obj->getProrataHeuresCreerLigne());
    }

    /**
     * Tests the setProrataHeuresDesignationMoins() method.
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationMoins(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationMoins("prorataHeuresDesignationMoins");
        $this->assertEquals("prorataHeuresDesignationMoins", $obj->getProrataHeuresDesignationMoins());
    }

    /**
     * Tests the setProrataHeuresDesignationPlus() method.
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationPlus(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationPlus("prorataHeuresDesignationPlus");
        $this->assertEquals("prorataHeuresDesignationPlus", $obj->getProrataHeuresDesignationPlus());
    }

    /**
     * Tests the setProrataHeuresOption() method.
     *
     * @return void
     */
    public function testSetProrataHeuresOption(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresOption("prorataHeuresOption");
        $this->assertEquals("prorataHeuresOption", $obj->getProrataHeuresOption());
    }

    /**
     * Tests the setProvCpInfosEmp() method.
     *
     * @return void
     */
    public function testSetProvCpInfosEmp(): void {

        $obj = new Constantes();

        $obj->setProvCpInfosEmp(true);
        $this->assertEquals(true, $obj->getProvCpInfosEmp());
    }

    /**
     * Tests the setProvisionsCp() method.
     *
     * @return void
     */
    public function testSetProvisionsCp(): void {

        $obj = new Constantes();

        $obj->setProvisionsCp(true);
        $this->assertEquals(true, $obj->getProvisionsCp());
    }

    /**
     * Tests the setQualiteNbCriteres() method.
     *
     * @return void
     */
    public function testSetQualiteNbCriteres(): void {

        $obj = new Constantes();

        $obj->setQualiteNbCriteres("qualiteNbCriteres");
        $this->assertEquals("qualiteNbCriteres", $obj->getQualiteNbCriteres());
    }

    /**
     * Tests the setQualiteNbNotes() method.
     *
     * @return void
     */
    public function testSetQualiteNbNotes(): void {

        $obj = new Constantes();

        $obj->setQualiteNbNotes("qualiteNbNotes");
        $this->assertEquals("qualiteNbNotes", $obj->getQualiteNbNotes());
    }

    /**
     * Tests the setQualiteSatisfactionGenerale() method.
     *
     * @return void
     */
    public function testSetQualiteSatisfactionGenerale(): void {

        $obj = new Constantes();

        $obj->setQualiteSatisfactionGenerale(true);
        $this->assertEquals(true, $obj->getQualiteSatisfactionGenerale());
    }

    /**
     * Tests the setReferenceMensuContratProprete() method.
     *
     * @return void
     */
    public function testSetReferenceMensuContratProprete(): void {

        $obj = new Constantes();

        $obj->setReferenceMensuContratProprete(true);
        $this->assertEquals(true, $obj->getReferenceMensuContratProprete());
    }

    /**
     * Tests the setRemplacantAbsJfPasAuto() method.
     *
     * @return void
     */
    public function testSetRemplacantAbsJfPasAuto(): void {

        $obj = new Constantes();

        $obj->setRemplacantAbsJfPasAuto(true);
        $this->assertEquals(true, $obj->getRemplacantAbsJfPasAuto());
    }

    /**
     * Tests the setRemplacantTravaillePasJf() method.
     *
     * @return void
     */
    public function testSetRemplacantTravaillePasJf(): void {

        $obj = new Constantes();

        $obj->setRemplacantTravaillePasJf(true);
        $this->assertEquals(true, $obj->getRemplacantTravaillePasJf());
    }

    /**
     * Tests the setRemplacementHcjf() method.
     *
     * @return void
     */
    public function testSetRemplacementHcjf(): void {

        $obj = new Constantes();

        $obj->setRemplacementHcjf(true);
        $this->assertEquals(true, $obj->getRemplacementHcjf());
    }

    /**
     * Tests the setReposCompensateurPourTravailleurNuit() method.
     *
     * @return void
     */
    public function testSetReposCompensateurPourTravailleurNuit(): void {

        $obj = new Constantes();

        $obj->setReposCompensateurPourTravailleurNuit(true);
        $this->assertEquals(true, $obj->getReposCompensateurPourTravailleurNuit());
    }

    /**
     * Tests the setRtFdansFactDev() method.
     *
     * @return void
     */
    public function testSetRtFdansFactDev(): void {

        $obj = new Constantes();

        $obj->setRtFdansFactDev(true);
        $this->assertEquals(true, $obj->getRtFdansFactDev());
    }

    /**
     * Tests the setSaisirAbsencesSurHc() method.
     *
     * @return void
     */
    public function testSetSaisirAbsencesSurHc(): void {

        $obj = new Constantes();

        $obj->setSaisirAbsencesSurHc(true);
        $this->assertEquals(true, $obj->getSaisirAbsencesSurHc());
    }

    /**
     * Tests the setSaisirCodeChantierAchat() method.
     *
     * @return void
     */
    public function testSetSaisirCodeChantierAchat(): void {

        $obj = new Constantes();

        $obj->setSaisirCodeChantierAchat(true);
        $this->assertEquals(true, $obj->getSaisirCodeChantierAchat());
    }

    /**
     * Tests the setSaisirNumBt() method.
     *
     * @return void
     */
    public function testSetSaisirNumBt(): void {

        $obj = new Constantes();

        $obj->setSaisirNumBt(true);
        $this->assertEquals(true, $obj->getSaisirNumBt());
    }

    /**
     * Tests the setServicesPaie() method.
     *
     * @return void
     */
    public function testSetServicesPaie(): void {

        $obj = new Constantes();

        $obj->setServicesPaie("servicesPaie");
        $this->assertEquals("servicesPaie", $obj->getServicesPaie());
    }

    /**
     * Tests the setSeuilMajoHCompl() method.
     *
     * @return void
     */
    public function testSetSeuilMajoHCompl(): void {

        $obj = new Constantes();

        $obj->setSeuilMajoHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilMajoHCompl());
    }

    /**
     * Tests the setTauxEscompte() method.
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new Constantes();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests the setTauxMajoHc33() method.
     *
     * @return void
     */
    public function testSetTauxMajoHc33(): void {

        $obj = new Constantes();

        $obj->setTauxMajoHc33(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajoHc33());
    }

    /**
     * Tests the setTauxMajorationHCompl() method.
     *
     * @return void
     */
    public function testSetTauxMajorationHCompl(): void {

        $obj = new Constantes();

        $obj->setTauxMajorationHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajorationHCompl());
    }

    /**
     * Tests the setTauxTvaAchat() method.
     *
     * @return void
     */
    public function testSetTauxTvaAchat(): void {

        $obj = new Constantes();

        $obj->setTauxTvaAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaAchat());
    }

    /**
     * Tests the setTauxTvaTaxeDeee() method.
     *
     * @return void
     */
    public function testSetTauxTvaTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setTauxTvaTaxeDeee(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxeDeee());
    }

    /**
     * Tests the setTauxTvaVente() method.
     *
     * @return void
     */
    public function testSetTauxTvaVente(): void {

        $obj = new Constantes();

        $obj->setTauxTvaVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaVente());
    }

    /**
     * Tests the setTypeRemplDefaut() method.
     *
     * @return void
     */
    public function testSetTypeRemplDefaut(): void {

        $obj = new Constantes();

        $obj->setTypeRemplDefaut("typeRemplDefaut");
        $this->assertEquals("typeRemplDefaut", $obj->getTypeRemplDefaut());
    }

    /**
     * Tests the setTypeTransfertVente() method.
     *
     * @return void
     */
    public function testSetTypeTransfertVente(): void {

        $obj = new Constantes();

        $obj->setTypeTransfertVente("typeTransfertVente");
        $this->assertEquals("typeTransfertVente", $obj->getTypeTransfertVente());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new Constantes();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the setUtiliserStockMini() method.
     *
     * @return void
     */
    public function testSetUtiliserStockMini(): void {

        $obj = new Constantes();

        $obj->setUtiliserStockMini(true);
        $this->assertEquals(true, $obj->getUtiliserStockMini());
    }

    /**
     * Tests the setVisualiserPointageBtValides() method.
     *
     * @return void
     */
    public function testSetVisualiserPointageBtValides(): void {

        $obj = new Constantes();

        $obj->setVisualiserPointageBtValides(true);
        $this->assertEquals(true, $obj->getVisualiserPointageBtValides());
    }

    /**
     * Tests the __construct() method.
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
