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

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
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
     * Test set35Heures()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSet35Heures(): void {

        // Set a Date/time mock.
        $_35Heures = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->set35Heures($_35Heures);
        $this->assertSame($_35Heures, $obj->get35Heures());
    }

    /**
     * Test setAlertesPaieDansPointage()
     *
     * @return void
     */
    public function testSetAlertesPaieDansPointage(): void {

        $obj = new Constantes();

        $obj->setAlertesPaieDansPointage(true);
        $this->assertTrue($obj->getAlertesPaieDansPointage());
    }

    /**
     * Test setAlertesPaieDansReclam()
     *
     * @return void
     */
    public function testSetAlertesPaieDansReclam(): void {

        $obj = new Constantes();

        $obj->setAlertesPaieDansReclam(true);
        $this->assertTrue($obj->getAlertesPaieDansReclam());
    }

    /**
     * Test setAnalytiqueNatureAgence()
     *
     * @return void
     */
    public function testSetAnalytiqueNatureAgence(): void {

        $obj = new Constantes();

        $obj->setAnalytiqueNatureAgence(true);
        $this->assertTrue($obj->getAnalytiqueNatureAgence());
    }

    /**
     * Test setAnalytiqueParChantier()
     *
     * @return void
     */
    public function testSetAnalytiqueParChantier(): void {

        $obj = new Constantes();

        $obj->setAnalytiqueParChantier(true);
        $this->assertTrue($obj->getAnalytiqueParChantier());
    }

    /**
     * Test setArchiverDevis()
     *
     * @return void
     */
    public function testSetArchiverDevis(): void {

        $obj = new Constantes();

        $obj->setArchiverDevis(true);
        $this->assertTrue($obj->getArchiverDevis());
    }

    /**
     * Test setArchiverFacture()
     *
     * @return void
     */
    public function testSetArchiverFacture(): void {

        $obj = new Constantes();

        $obj->setArchiverFacture(true);
        $this->assertTrue($obj->getArchiverFacture());
    }

    /**
     * Test setArrondiSurPu()
     *
     * @return void
     */
    public function testSetArrondiSurPu(): void {

        $obj = new Constantes();

        $obj->setArrondiSurPu(true);
        $this->assertTrue($obj->getArrondiSurPu());
    }

    /**
     * Test setAutoriserDaSansMajStock()
     *
     * @return void
     */
    public function testSetAutoriserDaSansMajStock(): void {

        $obj = new Constantes();

        $obj->setAutoriserDaSansMajStock(true);
        $this->assertTrue($obj->getAutoriserDaSansMajStock());
    }

    /**
     * Test setAutoriserDepBudChaCdeType()
     *
     * @return void
     */
    public function testSetAutoriserDepBudChaCdeType(): void {

        $obj = new Constantes();

        $obj->setAutoriserDepBudChaCdeType(true);
        $this->assertTrue($obj->getAutoriserDepBudChaCdeType());
    }

    /**
     * Test setAutoriserMensuTacheVide()
     *
     * @return void
     */
    public function testSetAutoriserMensuTacheVide(): void {

        $obj = new Constantes();

        $obj->setAutoriserMensuTacheVide(true);
        $this->assertTrue($obj->getAutoriserMensuTacheVide());
    }

    /**
     * Test setBlNumFact()
     *
     * @return void
     */
    public function testSetBlNumFact(): void {

        $obj = new Constantes();

        $obj->setBlNumFact(10);
        $this->assertEquals(10, $obj->getBlNumFact());
    }

    /**
     * Test setBlPrefixe()
     *
     * @return void
     */
    public function testSetBlPrefixe(): void {

        $obj = new Constantes();

        $obj->setBlPrefixe("blPrefixe");
        $this->assertEquals("blPrefixe", $obj->getBlPrefixe());
    }

    /**
     * Test setBrNumFact()
     *
     * @return void
     */
    public function testSetBrNumFact(): void {

        $obj = new Constantes();

        $obj->setBrNumFact(10);
        $this->assertEquals(10, $obj->getBrNumFact());
    }

    /**
     * Test setBrPrefixe()
     *
     * @return void
     */
    public function testSetBrPrefixe(): void {

        $obj = new Constantes();

        $obj->setBrPrefixe("brPrefixe");
        $this->assertEquals("brPrefixe", $obj->getBrPrefixe());
    }

    /**
     * Test setBsNumFact()
     *
     * @return void
     */
    public function testSetBsNumFact(): void {

        $obj = new Constantes();

        $obj->setBsNumFact(10);
        $this->assertEquals(10, $obj->getBsNumFact());
    }

    /**
     * Test setBsPrefixe()
     *
     * @return void
     */
    public function testSetBsPrefixe(): void {

        $obj = new Constantes();

        $obj->setBsPrefixe("bsPrefixe");
        $this->assertEquals("bsPrefixe", $obj->getBsPrefixe());
    }

    /**
     * Test setCddMensuTotalHeures()
     *
     * @return void
     */
    public function testSetCddMensuTotalHeures(): void {

        $obj = new Constantes();

        $obj->setCddMensuTotalHeures(true);
        $this->assertTrue($obj->getCddMensuTotalHeures());
    }

    /**
     * Test setCdeClientNumFact()
     *
     * @return void
     */
    public function testSetCdeClientNumFact(): void {

        $obj = new Constantes();

        $obj->setCdeClientNumFact(10);
        $this->assertEquals(10, $obj->getCdeClientNumFact());
    }

    /**
     * Test setCdeClientPrefixe()
     *
     * @return void
     */
    public function testSetCdeClientPrefixe(): void {

        $obj = new Constantes();

        $obj->setCdeClientPrefixe("cdeClientPrefixe");
        $this->assertEquals("cdeClientPrefixe", $obj->getCdeClientPrefixe());
    }

    /**
     * Test setCdeFrnNumFact()
     *
     * @return void
     */
    public function testSetCdeFrnNumFact(): void {

        $obj = new Constantes();

        $obj->setCdeFrnNumFact(10);
        $this->assertEquals(10, $obj->getCdeFrnNumFact());
    }

    /**
     * Test setCdeFrnPrefixe()
     *
     * @return void
     */
    public function testSetCdeFrnPrefixe(): void {

        $obj = new Constantes();

        $obj->setCdeFrnPrefixe("cdeFrnPrefixe");
        $this->assertEquals("cdeFrnPrefixe", $obj->getCdeFrnPrefixe());
    }

    /**
     * Test setCentralisationVente()
     *
     * @return void
     */
    public function testSetCentralisationVente(): void {

        $obj = new Constantes();

        $obj->setCentralisationVente(true);
        $this->assertTrue($obj->getCentralisationVente());
    }

    /**
     * Test setChargeMensuelleSansTache()
     *
     * @return void
     */
    public function testSetChargeMensuelleSansTache(): void {

        $obj = new Constantes();

        $obj->setChargeMensuelleSansTache(true);
        $this->assertTrue($obj->getChargeMensuelleSansTache());
    }

    /**
     * Test setCheminDossCompta()
     *
     * @return void
     */
    public function testSetCheminDossCompta(): void {

        $obj = new Constantes();

        $obj->setCheminDossCompta("cheminDossCompta");
        $this->assertEquals("cheminDossCompta", $obj->getCheminDossCompta());
    }

    /**
     * Test setCleDebloquerPeriodeCloturee()
     *
     * @return void
     */
    public function testSetCleDebloquerPeriodeCloturee(): void {

        $obj = new Constantes();

        $obj->setCleDebloquerPeriodeCloturee("cleDebloquerPeriodeCloturee");
        $this->assertEquals("cleDebloquerPeriodeCloturee", $obj->getCleDebloquerPeriodeCloturee());
    }

    /**
     * Test setCodeAbsCpSansSolde()
     *
     * @return void
     */
    public function testSetCodeAbsCpSansSolde(): void {

        $obj = new Constantes();

        $obj->setCodeAbsCpSansSolde("codeAbsCpSansSolde");
        $this->assertEquals("codeAbsCpSansSolde", $obj->getCodeAbsCpSansSolde());
    }

    /**
     * Test setCodeAbsDefJf()
     *
     * @return void
     */
    public function testSetCodeAbsDefJf(): void {

        $obj = new Constantes();

        $obj->setCodeAbsDefJf("codeAbsDefJf");
        $this->assertEquals("codeAbsDefJf", $obj->getCodeAbsDefJf());
    }

    /**
     * Test setCodeAbsDefJfMoins3()
     *
     * @return void
     */
    public function testSetCodeAbsDefJfMoins3(): void {

        $obj = new Constantes();

        $obj->setCodeAbsDefJfMoins3("codeAbsDefJfMoins3");
        $this->assertEquals("codeAbsDefJfMoins3", $obj->getCodeAbsDefJfMoins3());
    }

    /**
     * Test setCodeAbsFermetureChantier()
     *
     * @return void
     */
    public function testSetCodeAbsFermetureChantier(): void {

        $obj = new Constantes();

        $obj->setCodeAbsFermetureChantier("codeAbsFermetureChantier");
        $this->assertEquals("codeAbsFermetureChantier", $obj->getCodeAbsFermetureChantier());
    }

    /**
     * Test setCodeAbsPointageDefaut()
     *
     * @return void
     */
    public function testSetCodeAbsPointageDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeAbsPointageDefaut("codeAbsPointageDefaut");
        $this->assertEquals("codeAbsPointageDefaut", $obj->getCodeAbsPointageDefaut());
    }

    /**
     * Test setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new Constantes();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Constantes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeDepotParDefaut()
     *
     * @return void
     */
    public function testSetCodeDepotParDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeDepotParDefaut("codeDepotParDefaut");
        $this->assertEquals("codeDepotParDefaut", $obj->getCodeDepotParDefaut());
    }

    /**
     * Test setCodeIcs()
     *
     * @return void
     */
    public function testSetCodeIcs(): void {

        $obj = new Constantes();

        $obj->setCodeIcs("codeIcs");
        $this->assertEquals("codeIcs", $obj->getCodeIcs());
    }

    /**
     * Test setCodeJa()
     *
     * @return void
     */
    public function testSetCodeJa(): void {

        $obj = new Constantes();

        $obj->setCodeJa("codeJa");
        $this->assertEquals("codeJa", $obj->getCodeJa());
    }

    /**
     * Test setCodeJvNegoce()
     *
     * @return void
     */
    public function testSetCodeJvNegoce(): void {

        $obj = new Constantes();

        $obj->setCodeJvNegoce("codeJvNegoce");
        $this->assertEquals("codeJvNegoce", $obj->getCodeJvNegoce());
    }

    /**
     * Test setCodeJvPrestation()
     *
     * @return void
     */
    public function testSetCodeJvPrestation(): void {

        $obj = new Constantes();

        $obj->setCodeJvPrestation("codeJvPrestation");
        $this->assertEquals("codeJvPrestation", $obj->getCodeJvPrestation());
    }

    /**
     * Test setCodeLivParDefaut()
     *
     * @return void
     */
    public function testSetCodeLivParDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeLivParDefaut("codeLivParDefaut");
        $this->assertEquals("codeLivParDefaut", $obj->getCodeLivParDefaut());
    }

    /**
     * Test setCodePrimeChantier1()
     *
     * @return void
     */
    public function testSetCodePrimeChantier1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier1("codePrimeChantier1");
        $this->assertEquals("codePrimeChantier1", $obj->getCodePrimeChantier1());
    }

    /**
     * Test setCodePrimeChantier2()
     *
     * @return void
     */
    public function testSetCodePrimeChantier2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier2("codePrimeChantier2");
        $this->assertEquals("codePrimeChantier2", $obj->getCodePrimeChantier2());
    }

    /**
     * Test setCodePrimeChantier3()
     *
     * @return void
     */
    public function testSetCodePrimeChantier3(): void {

        $obj = new Constantes();

        $obj->setCodePrimeChantier3("codePrimeChantier3");
        $this->assertEquals("codePrimeChantier3", $obj->getCodePrimeChantier3());
    }

    /**
     * Test setCodePrimeDimanche1()
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1("codePrimeDimanche1");
        $this->assertEquals("codePrimeDimanche1", $obj->getCodePrimeDimanche1());
    }

    /**
     * Test setCodePrimeDimanche1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1Type2("codePrimeDimanche1Type2");
        $this->assertEquals("codePrimeDimanche1Type2", $obj->getCodePrimeDimanche1Type2());
    }

    /**
     * Test setCodePrimeDimanche2()
     *
     * @return void
     */
    public function testSetCodePrimeDimanche2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche2("codePrimeDimanche2");
        $this->assertEquals("codePrimeDimanche2", $obj->getCodePrimeDimanche2());
    }

    /**
     * Test setCodePrimeForfait()
     *
     * @return void
     */
    public function testSetCodePrimeForfait(): void {

        $obj = new Constantes();

        $obj->setCodePrimeForfait("codePrimeForfait");
        $this->assertEquals("codePrimeForfait", $obj->getCodePrimeForfait());
    }

    /**
     * Test setCodePrimeHCompl()
     *
     * @return void
     */
    public function testSetCodePrimeHCompl(): void {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl("codePrimeHCompl");
        $this->assertEquals("codePrimeHCompl", $obj->getCodePrimeHCompl());
    }

    /**
     * Test setCodePrimeHCompl2()
     *
     * @return void
     */
    public function testSetCodePrimeHCompl2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl2("codePrimeHCompl2");
        $this->assertEquals("codePrimeHCompl2", $obj->getCodePrimeHCompl2());
    }

    /**
     * Test setCodePrimeJf1()
     *
     * @return void
     */
    public function testSetCodePrimeJf1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf1("codePrimeJf1");
        $this->assertEquals("codePrimeJf1", $obj->getCodePrimeJf1());
    }

    /**
     * Test setCodePrimeJf1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeJf1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf1Type2("codePrimeJf1Type2");
        $this->assertEquals("codePrimeJf1Type2", $obj->getCodePrimeJf1Type2());
    }

    /**
     * Test setCodePrimeJf2()
     *
     * @return void
     */
    public function testSetCodePrimeJf2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJf2("codePrimeJf2");
        $this->assertEquals("codePrimeJf2", $obj->getCodePrimeJf2());
    }

    /**
     * Test setCodePrimeJfMai()
     *
     * @return void
     */
    public function testSetCodePrimeJfMai(): void {

        $obj = new Constantes();

        $obj->setCodePrimeJfMai("codePrimeJfMai");
        $this->assertEquals("codePrimeJfMai", $obj->getCodePrimeJfMai());
    }

    /**
     * Test setCodePrimeNuit1()
     *
     * @return void
     */
    public function testSetCodePrimeNuit1(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1("codePrimeNuit1");
        $this->assertEquals("codePrimeNuit1", $obj->getCodePrimeNuit1());
    }

    /**
     * Test setCodePrimeNuit1Type2()
     *
     * @return void
     */
    public function testSetCodePrimeNuit1Type2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1Type2("codePrimeNuit1Type2");
        $this->assertEquals("codePrimeNuit1Type2", $obj->getCodePrimeNuit1Type2());
    }

    /**
     * Test setCodePrimeNuit2()
     *
     * @return void
     */
    public function testSetCodePrimeNuit2(): void {

        $obj = new Constantes();

        $obj->setCodePrimeNuit2("codePrimeNuit2");
        $this->assertEquals("codePrimeNuit2", $obj->getCodePrimeNuit2());
    }

    /**
     * Test setCodePrimePaniers()
     *
     * @return void
     */
    public function testSetCodePrimePaniers(): void {

        $obj = new Constantes();

        $obj->setCodePrimePaniers("codePrimePaniers");
        $this->assertEquals("codePrimePaniers", $obj->getCodePrimePaniers());
    }

    /**
     * Test setCodePrimeRs()
     *
     * @return void
     */
    public function testSetCodePrimeRs(): void {

        $obj = new Constantes();

        $obj->setCodePrimeRs("codePrimeRs");
        $this->assertEquals("codePrimeRs", $obj->getCodePrimeRs());
    }

    /**
     * Test setCodePrimeTp()
     *
     * @return void
     */
    public function testSetCodePrimeTp(): void {

        $obj = new Constantes();

        $obj->setCodePrimeTp("codePrimeTp");
        $this->assertEquals("codePrimeTp", $obj->getCodePrimeTp());
    }

    /**
     * Test setCodeRegJvNegDebut()
     *
     * @return void
     */
    public function testSetCodeRegJvNegDebut(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvNegDebut("codeRegJvNegDebut");
        $this->assertEquals("codeRegJvNegDebut", $obj->getCodeRegJvNegDebut());
    }

    /**
     * Test setCodeRegJvNegFin()
     *
     * @return void
     */
    public function testSetCodeRegJvNegFin(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvNegFin("codeRegJvNegFin");
        $this->assertEquals("codeRegJvNegFin", $obj->getCodeRegJvNegFin());
    }

    /**
     * Test setCodeRegJvPrestDebut()
     *
     * @return void
     */
    public function testSetCodeRegJvPrestDebut(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvPrestDebut("codeRegJvPrestDebut");
        $this->assertEquals("codeRegJvPrestDebut", $obj->getCodeRegJvPrestDebut());
    }

    /**
     * Test setCodeRegJvPrestFin()
     *
     * @return void
     */
    public function testSetCodeRegJvPrestFin(): void {

        $obj = new Constantes();

        $obj->setCodeRegJvPrestFin("codeRegJvPrestFin");
        $this->assertEquals("codeRegJvPrestFin", $obj->getCodeRegJvPrestFin());
    }

    /**
     * Test setCodeTacheDefaut()
     *
     * @return void
     */
    public function testSetCodeTacheDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeTacheDefaut("codeTacheDefaut");
        $this->assertEquals("codeTacheDefaut", $obj->getCodeTacheDefaut());
    }

    /**
     * Test setCollectifDef()
     *
     * @return void
     */
    public function testSetCollectifDef(): void {

        $obj = new Constantes();

        $obj->setCollectifDef("collectifDef");
        $this->assertEquals("collectifDef", $obj->getCollectifDef());
    }

    /**
     * Test setCollectifDefFournisseur()
     *
     * @return void
     */
    public function testSetCollectifDefFournisseur(): void {

        $obj = new Constantes();

        $obj->setCollectifDefFournisseur("collectifDefFournisseur");
        $this->assertEquals("collectifDefFournisseur", $obj->getCollectifDefFournisseur());
    }

    /**
     * Test setCommentaireJourneeSolidarite()
     *
     * @return void
     */
    public function testSetCommentaireJourneeSolidarite(): void {

        $obj = new Constantes();

        $obj->setCommentaireJourneeSolidarite("commentaireJourneeSolidarite");
        $this->assertEquals("commentaireJourneeSolidarite", $obj->getCommentaireJourneeSolidarite());
    }

    /**
     * Test setCompteCollectifAchat()
     *
     * @return void
     */
    public function testSetCompteCollectifAchat(): void {

        $obj = new Constantes();

        $obj->setCompteCollectifAchat("compteCollectifAchat");
        $this->assertEquals("compteCollectifAchat", $obj->getCompteCollectifAchat());
    }

    /**
     * Test setCompteCollectifVente()
     *
     * @return void
     */
    public function testSetCompteCollectifVente(): void {

        $obj = new Constantes();

        $obj->setCompteCollectifVente("compteCollectifVente");
        $this->assertEquals("compteCollectifVente", $obj->getCompteCollectifVente());
    }

    /**
     * Test setCompteEscompteCaExonere()
     *
     * @return void
     */
    public function testSetCompteEscompteCaExonere(): void {

        $obj = new Constantes();

        $obj->setCompteEscompteCaExonere("compteEscompteCaExonere");
        $this->assertEquals("compteEscompteCaExonere", $obj->getCompteEscompteCaExonere());
    }

    /**
     * Test setCompteEscompteSoumisTva()
     *
     * @return void
     */
    public function testSetCompteEscompteSoumisTva(): void {

        $obj = new Constantes();

        $obj->setCompteEscompteSoumisTva("compteEscompteSoumisTva");
        $this->assertEquals("compteEscompteSoumisTva", $obj->getCompteEscompteSoumisTva());
    }

    /**
     * Test setCompteTvaAchat()
     *
     * @return void
     */
    public function testSetCompteTvaAchat(): void {

        $obj = new Constantes();

        $obj->setCompteTvaAchat("compteTvaAchat");
        $this->assertEquals("compteTvaAchat", $obj->getCompteTvaAchat());
    }

    /**
     * Test setCompteTvaTaxeDeee()
     *
     * @return void
     */
    public function testSetCompteTvaTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setCompteTvaTaxeDeee("compteTvaTaxeDeee");
        $this->assertEquals("compteTvaTaxeDeee", $obj->getCompteTvaTaxeDeee());
    }

    /**
     * Test setCompteTvaVente()
     *
     * @return void
     */
    public function testSetCompteTvaVente(): void {

        $obj = new Constantes();

        $obj->setCompteTvaVente("compteTvaVente");
        $this->assertEquals("compteTvaVente", $obj->getCompteTvaVente());
    }

    /**
     * Test setCompteVentilTaxeDeee()
     *
     * @return void
     */
    public function testSetCompteVentilTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setCompteVentilTaxeDeee("compteVentilTaxeDeee");
        $this->assertEquals("compteVentilTaxeDeee", $obj->getCompteVentilTaxeDeee());
    }

    /**
     * Test setCompterSamediTfCpPaie()
     *
     * @return void
     */
    public function testSetCompterSamediTfCpPaie(): void {

        $obj = new Constantes();

        $obj->setCompterSamediTfCpPaie(true);
        $this->assertTrue($obj->getCompterSamediTfCpPaie());
    }

    /**
     * Test setControlerCdeFrn()
     *
     * @return void
     */
    public function testSetControlerCdeFrn(): void {

        $obj = new Constantes();

        $obj->setControlerCdeFrn(true);
        $this->assertTrue($obj->getControlerCdeFrn());
    }

    /**
     * Test setControlerChargesMensuelles()
     *
     * @return void
     */
    public function testSetControlerChargesMensuelles(): void {

        $obj = new Constantes();

        $obj->setControlerChargesMensuelles(true);
        $this->assertTrue($obj->getControlerChargesMensuelles());
    }

    /**
     * Test setControlerCodeReg()
     *
     * @return void
     */
    public function testSetControlerCodeReg(): void {

        $obj = new Constantes();

        $obj->setControlerCodeReg(true);
        $this->assertTrue($obj->getControlerCodeReg());
    }

    /**
     * Test setControlerDepHcMax()
     *
     * @return void
     */
    public function testSetControlerDepHcMax(): void {

        $obj = new Constantes();

        $obj->setControlerDepHcMax(true);
        $this->assertTrue($obj->getControlerDepHcMax());
    }

    /**
     * Test setControlerDepHcPlusMois()
     *
     * @return void
     */
    public function testSetControlerDepHcPlusMois(): void {

        $obj = new Constantes();

        $obj->setControlerDepHcPlusMois(true);
        $this->assertTrue($obj->getControlerDepHcPlusMois());
    }

    /**
     * Test setCpSansProvisions()
     *
     * @return void
     */
    public function testSetCpSansProvisions(): void {

        $obj = new Constantes();

        $obj->setCpSansProvisions(true);
        $this->assertTrue($obj->getCpSansProvisions());
    }

    /**
     * Test setCreerAlertePaieDefEnPaie()
     *
     * @return void
     */
    public function testSetCreerAlertePaieDefEnPaie(): void {

        $obj = new Constantes();

        $obj->setCreerAlertePaieDefEnPaie(true);
        $this->assertTrue($obj->getCreerAlertePaieDefEnPaie());
    }

    /**
     * Test setCtrlAutoCp()
     *
     * @return void
     */
    public function testSetCtrlAutoCp(): void {

        $obj = new Constantes();

        $obj->setCtrlAutoCp(true);
        $this->assertTrue($obj->getCtrlAutoCp());
    }

    /**
     * Test setCtrlAutoCpAvecAnticipation()
     *
     * @return void
     */
    public function testSetCtrlAutoCpAvecAnticipation(): void {

        $obj = new Constantes();

        $obj->setCtrlAutoCpAvecAnticipation(true);
        $this->assertTrue($obj->getCtrlAutoCpAvecAnticipation());
    }

    /**
     * Test setDateAppliGestionHeuresEnPlus()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAppliGestionHeuresEnPlus(): void {

        // Set a Date/time mock.
        $dateAppliGestionHeuresEnPlus = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateAppliGestionHeuresEnPlus($dateAppliGestionHeuresEnPlus);
        $this->assertSame($dateAppliGestionHeuresEnPlus, $obj->getDateAppliGestionHeuresEnPlus());
    }

    /**
     * Test setDateJourneeSolidarite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateJourneeSolidarite(): void {

        // Set a Date/time mock.
        $dateJourneeSolidarite = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateJourneeSolidarite($dateJourneeSolidarite);
        $this->assertSame($dateJourneeSolidarite, $obj->getDateJourneeSolidarite());
    }

    /**
     * Test setDateValidationSynchro()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Test setDecMoisPrepFact()
     *
     * @return void
     */
    public function testSetDecMoisPrepFact(): void {

        $obj = new Constantes();

        $obj->setDecMoisPrepFact(10);
        $this->assertEquals(10, $obj->getDecMoisPrepFact());
    }

    /**
     * Test setDernierCompteClient()
     *
     * @return void
     */
    public function testSetDernierCompteClient(): void {

        $obj = new Constantes();

        $obj->setDernierCompteClient("dernierCompteClient");
        $this->assertEquals("dernierCompteClient", $obj->getDernierCompteClient());
    }

    /**
     * Test setDernierCompteFrn()
     *
     * @return void
     */
    public function testSetDernierCompteFrn(): void {

        $obj = new Constantes();

        $obj->setDernierCompteFrn("dernierCompteFrn");
        $this->assertEquals("dernierCompteFrn", $obj->getDernierCompteFrn());
    }

    /**
     * Test setDiscr()
     *
     * @return void
     */
    public function testSetDiscr(): void {

        $obj = new Constantes();

        $obj->setDiscr("discr");
        $this->assertEquals("discr", $obj->getDiscr());
    }

    /**
     * Test setDossCompta()
     *
     * @return void
     */
    public function testSetDossCompta(): void {

        $obj = new Constantes();

        $obj->setDossCompta("dossCompta");
        $this->assertEquals("dossCompta", $obj->getDossCompta());
    }

    /**
     * Test setDossPaie()
     *
     * @return void
     */
    public function testSetDossPaie(): void {

        $obj = new Constantes();

        $obj->setDossPaie("dossPaie");
        $this->assertEquals("dossPaie", $obj->getDossPaie());
    }

    /**
     * Test setEsCodeAbsEntree()
     *
     * @return void
     */
    public function testSetEsCodeAbsEntree(): void {

        $obj = new Constantes();

        $obj->setEsCodeAbsEntree("esCodeAbsEntree");
        $this->assertEquals("esCodeAbsEntree", $obj->getEsCodeAbsEntree());
    }

    /**
     * Test setEsCodeAbsSortie()
     *
     * @return void
     */
    public function testSetEsCodeAbsSortie(): void {

        $obj = new Constantes();

        $obj->setEsCodeAbsSortie("esCodeAbsSortie");
        $this->assertEquals("esCodeAbsSortie", $obj->getEsCodeAbsSortie());
    }

    /**
     * Test setEsHeuresReelles()
     *
     * @return void
     */
    public function testSetEsHeuresReelles(): void {

        $obj = new Constantes();

        $obj->setEsHeuresReelles(true);
        $this->assertTrue($obj->getEsHeuresReelles());
    }

    /**
     * Test setEtablissementsPaie()
     *
     * @return void
     */
    public function testSetEtablissementsPaie(): void {

        $obj = new Constantes();

        $obj->setEtablissementsPaie("etablissementsPaie");
        $this->assertEquals("etablissementsPaie", $obj->getEtablissementsPaie());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Constantes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Test setEuro()
     *
     * @return void
     */
    public function testSetEuro(): void {

        $obj = new Constantes();

        $obj->setEuro(true);
        $this->assertTrue($obj->getEuro());
    }

    /**
     * Test setFacturationProrataHeures()
     *
     * @return void
     */
    public function testSetFacturationProrataHeures(): void {

        $obj = new Constantes();

        $obj->setFacturationProrataHeures(true);
        $this->assertTrue($obj->getFacturationProrataHeures());
    }

    /**
     * Test setFolioJa()
     *
     * @return void
     */
    public function testSetFolioJa(): void {

        $obj = new Constantes();

        $obj->setFolioJa("folioJa");
        $this->assertEquals("folioJa", $obj->getFolioJa());
    }

    /**
     * Test setFolioJvNegoce()
     *
     * @return void
     */
    public function testSetFolioJvNegoce(): void {

        $obj = new Constantes();

        $obj->setFolioJvNegoce("folioJvNegoce");
        $this->assertEquals("folioJvNegoce", $obj->getFolioJvNegoce());
    }

    /**
     * Test setFolioJvPrestation()
     *
     * @return void
     */
    public function testSetFolioJvPrestation(): void {

        $obj = new Constantes();

        $obj->setFolioJvPrestation("folioJvPrestation");
        $this->assertEquals("folioJvPrestation", $obj->getFolioJvPrestation());
    }

    /**
     * Test setGererNumCptChantier()
     *
     * @return void
     */
    public function testSetGererNumCptChantier(): void {

        $obj = new Constantes();

        $obj->setGererNumCptChantier(true);
        $this->assertTrue($obj->getGererNumCptChantier());
    }

    /**
     * Test setGestionHCompl()
     *
     * @return void
     */
    public function testSetGestionHCompl(): void {

        $obj = new Constantes();

        $obj->setGestionHCompl(true);
        $this->assertTrue($obj->getGestionHCompl());
    }

    /**
     * Test setGestionHSupMens()
     *
     * @return void
     */
    public function testSetGestionHSupMens(): void {

        $obj = new Constantes();

        $obj->setGestionHSupMens(true);
        $this->assertTrue($obj->getGestionHSupMens());
    }

    /**
     * Test setGestionHSupMensuelle()
     *
     * @return void
     */
    public function testSetGestionHSupMensuelle(): void {

        $obj = new Constantes();

        $obj->setGestionHSupMensuelle(true);
        $this->assertTrue($obj->getGestionHSupMensuelle());
    }

    /**
     * Test setGestionMajDim()
     *
     * @return void
     */
    public function testSetGestionMajDim(): void {

        $obj = new Constantes();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Test setGestionMajJf()
     *
     * @return void
     */
    public function testSetGestionMajJf(): void {

        $obj = new Constantes();

        $obj->setGestionMajJf("gestionMajJf");
        $this->assertEquals("gestionMajJf", $obj->getGestionMajJf());
    }

    /**
     * Test setGestionMajNuit()
     *
     * @return void
     */
    public function testSetGestionMajNuit(): void {

        $obj = new Constantes();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Test setGestionMultiDepot()
     *
     * @return void
     */
    public function testSetGestionMultiDepot(): void {

        $obj = new Constantes();

        $obj->setGestionMultiDepot(true);
        $this->assertTrue($obj->getGestionMultiDepot());
    }

    /**
     * Test setGestionQuotas()
     *
     * @return void
     */
    public function testSetGestionQuotas(): void {

        $obj = new Constantes();

        $obj->setGestionQuotas(true);
        $this->assertTrue($obj->getGestionQuotas());
    }

    /**
     * Test setGestionSpecifJf()
     *
     * @return void
     */
    public function testSetGestionSpecifJf(): void {

        $obj = new Constantes();

        $obj->setGestionSpecifJf(true);
        $this->assertTrue($obj->getGestionSpecifJf());
    }

    /**
     * Test setGestionSpecifMajoJf()
     *
     * @return void
     */
    public function testSetGestionSpecifMajoJf(): void {

        $obj = new Constantes();

        $obj->setGestionSpecifMajoJf(true);
        $this->assertTrue($obj->getGestionSpecifMajoJf());
    }

    /**
     * Test setHDebNuit()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHDebNuit(): void {

        // Set a Date/time mock.
        $hDebNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHDebNuit($hDebNuit);
        $this->assertSame($hDebNuit, $obj->getHDebNuit());
    }

    /**
     * Test setHDebNuitTravNuit()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHDebNuitTravNuit(): void {

        // Set a Date/time mock.
        $hDebNuitTravNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHDebNuitTravNuit($hDebNuitTravNuit);
        $this->assertSame($hDebNuitTravNuit, $obj->getHDebNuitTravNuit());
    }

    /**
     * Test setHFinNuit()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHFinNuit(): void {

        // Set a Date/time mock.
        $hFinNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHFinNuit($hFinNuit);
        $this->assertSame($hFinNuit, $obj->getHFinNuit());
    }

    /**
     * Test setHFinNuitTravNuit()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHFinNuitTravNuit(): void {

        // Set a Date/time mock.
        $hFinNuitTravNuit = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setHFinNuitTravNuit($hFinNuitTravNuit);
        $this->assertSame($hFinNuitTravNuit, $obj->getHFinNuitTravNuit());
    }

    /**
     * Test setHeuresAbsenceMensualise()
     *
     * @return void
     */
    public function testSetHeuresAbsenceMensualise(): void {

        $obj = new Constantes();

        $obj->setHeuresAbsenceMensualise(true);
        $this->assertTrue($obj->getHeuresAbsenceMensualise());
    }

    /**
     * Test setHeuresRemplEgalesMensTitulaire()
     *
     * @return void
     */
    public function testSetHeuresRemplEgalesMensTitulaire(): void {

        $obj = new Constantes();

        $obj->setHeuresRemplEgalesMensTitulaire(true);
        $this->assertTrue($obj->getHeuresRemplEgalesMensTitulaire());
    }

    /**
     * Test setIncrementCompteAuto()
     *
     * @return void
     */
    public function testSetIncrementCompteAuto(): void {

        $obj = new Constantes();

        $obj->setIncrementCompteAuto(10);
        $this->assertEquals(10, $obj->getIncrementCompteAuto());
    }

    /**
     * Test setLiaisonComptaWin()
     *
     * @return void
     */
    public function testSetLiaisonComptaWin(): void {

        $obj = new Constantes();

        $obj->setLiaisonComptaWin(true);
        $this->assertTrue($obj->getLiaisonComptaWin());
    }

    /**
     * Test setLibCritereBool1()
     *
     * @return void
     */
    public function testSetLibCritereBool1(): void {

        $obj = new Constantes();

        $obj->setLibCritereBool1("libCritereBool1");
        $this->assertEquals("libCritereBool1", $obj->getLibCritereBool1());
    }

    /**
     * Test setLibCritereBool2()
     *
     * @return void
     */
    public function testSetLibCritereBool2(): void {

        $obj = new Constantes();

        $obj->setLibCritereBool2("libCritereBool2");
        $this->assertEquals("libCritereBool2", $obj->getLibCritereBool2());
    }

    /**
     * Test setLibCritereByte1()
     *
     * @return void
     */
    public function testSetLibCritereByte1(): void {

        $obj = new Constantes();

        $obj->setLibCritereByte1("libCritereByte1");
        $this->assertEquals("libCritereByte1", $obj->getLibCritereByte1());
    }

    /**
     * Test setLibCritereNum1()
     *
     * @return void
     */
    public function testSetLibCritereNum1(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum1("libCritereNum1");
        $this->assertEquals("libCritereNum1", $obj->getLibCritereNum1());
    }

    /**
     * Test setLibCritereNum2()
     *
     * @return void
     */
    public function testSetLibCritereNum2(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum2("libCritereNum2");
        $this->assertEquals("libCritereNum2", $obj->getLibCritereNum2());
    }

    /**
     * Test setLibCritereNum3()
     *
     * @return void
     */
    public function testSetLibCritereNum3(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum3("libCritereNum3");
        $this->assertEquals("libCritereNum3", $obj->getLibCritereNum3());
    }

    /**
     * Test setLibCritereNum4()
     *
     * @return void
     */
    public function testSetLibCritereNum4(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum4("libCritereNum4");
        $this->assertEquals("libCritereNum4", $obj->getLibCritereNum4());
    }

    /**
     * Test setLibCritereNum5()
     *
     * @return void
     */
    public function testSetLibCritereNum5(): void {

        $obj = new Constantes();

        $obj->setLibCritereNum5("libCritereNum5");
        $this->assertEquals("libCritereNum5", $obj->getLibCritereNum5());
    }

    /**
     * Test setLibCritereTab1()
     *
     * @return void
     */
    public function testSetLibCritereTab1(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab1("libCritereTab1");
        $this->assertEquals("libCritereTab1", $obj->getLibCritereTab1());
    }

    /**
     * Test setLibCritereTab2()
     *
     * @return void
     */
    public function testSetLibCritereTab2(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab2("libCritereTab2");
        $this->assertEquals("libCritereTab2", $obj->getLibCritereTab2());
    }

    /**
     * Test setLibCritereTab3()
     *
     * @return void
     */
    public function testSetLibCritereTab3(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab3("libCritereTab3");
        $this->assertEquals("libCritereTab3", $obj->getLibCritereTab3());
    }

    /**
     * Test setLibCritereTab4()
     *
     * @return void
     */
    public function testSetLibCritereTab4(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab4("libCritereTab4");
        $this->assertEquals("libCritereTab4", $obj->getLibCritereTab4());
    }

    /**
     * Test setLibCritereTab5()
     *
     * @return void
     */
    public function testSetLibCritereTab5(): void {

        $obj = new Constantes();

        $obj->setLibCritereTab5("libCritereTab5");
        $this->assertEquals("libCritereTab5", $obj->getLibCritereTab5());
    }

    /**
     * Test setLibCritereTxt1()
     *
     * @return void
     */
    public function testSetLibCritereTxt1(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt1("libCritereTxt1");
        $this->assertEquals("libCritereTxt1", $obj->getLibCritereTxt1());
    }

    /**
     * Test setLibCritereTxt2()
     *
     * @return void
     */
    public function testSetLibCritereTxt2(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt2("libCritereTxt2");
        $this->assertEquals("libCritereTxt2", $obj->getLibCritereTxt2());
    }

    /**
     * Test setLibCritereTxt3()
     *
     * @return void
     */
    public function testSetLibCritereTxt3(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt3("libCritereTxt3");
        $this->assertEquals("libCritereTxt3", $obj->getLibCritereTxt3());
    }

    /**
     * Test setLibCritereTxt4()
     *
     * @return void
     */
    public function testSetLibCritereTxt4(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt4("libCritereTxt4");
        $this->assertEquals("libCritereTxt4", $obj->getLibCritereTxt4());
    }

    /**
     * Test setLibCritereTxt5()
     *
     * @return void
     */
    public function testSetLibCritereTxt5(): void {

        $obj = new Constantes();

        $obj->setLibCritereTxt5("libCritereTxt5");
        $this->assertEquals("libCritereTxt5", $obj->getLibCritereTxt5());
    }

    /**
     * Test setLibelleAutoAvoir()
     *
     * @return void
     */
    public function testSetLibelleAutoAvoir(): void {

        $obj = new Constantes();

        $obj->setLibelleAutoAvoir("libelleAutoAvoir");
        $this->assertEquals("libelleAutoAvoir", $obj->getLibelleAutoAvoir());
    }

    /**
     * Test setLibelleAutoFacture()
     *
     * @return void
     */
    public function testSetLibelleAutoFacture(): void {

        $obj = new Constantes();

        $obj->setLibelleAutoFacture("libelleAutoFacture");
        $this->assertEquals("libelleAutoFacture", $obj->getLibelleAutoFacture());
    }

    /**
     * Test setLibelleHeuresSurcroit()
     *
     * @return void
     */
    public function testSetLibelleHeuresSurcroit(): void {

        $obj = new Constantes();

        $obj->setLibelleHeuresSurcroit("libelleHeuresSurcroit");
        $this->assertEquals("libelleHeuresSurcroit", $obj->getLibelleHeuresSurcroit());
    }

    /**
     * Test setLibelleTransfert()
     *
     * @return void
     */
    public function testSetLibelleTransfert(): void {

        $obj = new Constantes();

        $obj->setLibelleTransfert("libelleTransfert");
        $this->assertEquals("libelleTransfert", $obj->getLibelleTransfert());
    }

    /**
     * Test setLibelleTransfertAchat()
     *
     * @return void
     */
    public function testSetLibelleTransfertAchat(): void {

        $obj = new Constantes();

        $obj->setLibelleTransfertAchat("libelleTransfertAchat");
        $this->assertEquals("libelleTransfertAchat", $obj->getLibelleTransfertAchat());
    }

    /**
     * Test setLivCdeFrnDepotUnique()
     *
     * @return void
     */
    public function testSetLivCdeFrnDepotUnique(): void {

        $obj = new Constantes();

        $obj->setLivCdeFrnDepotUnique(true);
        $this->assertTrue($obj->getLivCdeFrnDepotUnique());
    }

    /**
     * Test setMailAttestations()
     *
     * @return void
     */
    public function testSetMailAttestations(): void {

        $obj = new Constantes();

        $obj->setMailAttestations("mailAttestations");
        $this->assertEquals("mailAttestations", $obj->getMailAttestations());
    }

    /**
     * Test setMailFactures()
     *
     * @return void
     */
    public function testSetMailFactures(): void {

        $obj = new Constantes();

        $obj->setMailFactures("mailFactures");
        $this->assertEquals("mailFactures", $obj->getMailFactures());
    }

    /**
     * Test setMajDernierPassageBt()
     *
     * @return void
     */
    public function testSetMajDernierPassageBt(): void {

        $obj = new Constantes();

        $obj->setMajDernierPassageBt(true);
        $this->assertTrue($obj->getMajDernierPassageBt());
    }

    /**
     * Test setMajDernierPrixAchat()
     *
     * @return void
     */
    public function testSetMajDernierPrixAchat(): void {

        $obj = new Constantes();

        $obj->setMajDernierPrixAchat(true);
        $this->assertTrue($obj->getMajDernierPrixAchat());
    }

    /**
     * Test setMajPamp()
     *
     * @return void
     */
    public function testSetMajPamp(): void {

        $obj = new Constantes();

        $obj->setMajPamp(true);
        $this->assertTrue($obj->getMajPamp());
    }

    /**
     * Test setMajorationCascade()
     *
     * @return void
     */
    public function testSetMajorationCascade(): void {

        $obj = new Constantes();

        $obj->setMajorationCascade(true);
        $this->assertTrue($obj->getMajorationCascade());
    }

    /**
     * Test setMajorationHPlus()
     *
     * @return void
     */
    public function testSetMajorationHPlus(): void {

        $obj = new Constantes();

        $obj->setMajorationHPlus("majorationHPlus");
        $this->assertEquals("majorationHPlus", $obj->getMajorationHPlus());
    }

    /**
     * Test setMargeNiveauEdition()
     *
     * @return void
     */
    public function testSetMargeNiveauEdition(): void {

        $obj = new Constantes();

        $obj->setMargeNiveauEdition("margeNiveauEdition");
        $this->assertEquals("margeNiveauEdition", $obj->getMargeNiveauEdition());
    }

    /**
     * Test setMargePourcentCharge()
     *
     * @return void
     */
    public function testSetMargePourcentCharge(): void {

        $obj = new Constantes();

        $obj->setMargePourcentCharge(10.092018);
        $this->assertEquals(10.092018, $obj->getMargePourcentCharge());
    }

    /**
     * Test setMargeSalInspProrataCa()
     *
     * @return void
     */
    public function testSetMargeSalInspProrataCa(): void {

        $obj = new Constantes();

        $obj->setMargeSalInspProrataCa(true);
        $this->assertTrue($obj->getMargeSalInspProrataCa());
    }

    /**
     * Test setMensualisationTache()
     *
     * @return void
     */
    public function testSetMensualisationTache(): void {

        $obj = new Constantes();

        $obj->setMensualisationTache(true);
        $this->assertTrue($obj->getMensualisationTache());
    }

    /**
     * Test setModeCalculPropositionCde()
     *
     * @return void
     */
    public function testSetModeCalculPropositionCde(): void {

        $obj = new Constantes();

        $obj->setModeCalculPropositionCde("modeCalculPropositionCde");
        $this->assertEquals("modeCalculPropositionCde", $obj->getModeCalculPropositionCde());
    }

    /**
     * Test setModeleDevis()
     *
     * @return void
     */
    public function testSetModeleDevis(): void {

        $obj = new Constantes();

        $obj->setModeleDevis("modeleDevis");
        $this->assertEquals("modeleDevis", $obj->getModeleDevis());
    }

    /**
     * Test setModeleDevisTech()
     *
     * @return void
     */
    public function testSetModeleDevisTech(): void {

        $obj = new Constantes();

        $obj->setModeleDevisTech("modeleDevisTech");
        $this->assertEquals("modeleDevisTech", $obj->getModeleDevisTech());
    }

    /**
     * Test setModeleFacture()
     *
     * @return void
     */
    public function testSetModeleFacture(): void {

        $obj = new Constantes();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Test setMtCptaNegatif()
     *
     * @return void
     */
    public function testSetMtCptaNegatif(): void {

        $obj = new Constantes();

        $obj->setMtCptaNegatif(true);
        $this->assertTrue($obj->getMtCptaNegatif());
    }

    /**
     * Test setNDerDocument()
     *
     * @return void
     */
    public function testSetNDerDocument(): void {

        $obj = new Constantes();

        $obj->setNDerDocument(10);
        $this->assertEquals(10, $obj->getNDerDocument());
    }

    /**
     * Test setNbCaracteresLigneFact()
     *
     * @return void
     */
    public function testSetNbCaracteresLigneFact(): void {

        $obj = new Constantes();

        $obj->setNbCaracteresLigneFact("nbCaracteresLigneFact");
        $this->assertEquals("nbCaracteresLigneFact", $obj->getNbCaracteresLigneFact());
    }

    /**
     * Test setNbDecimalesPrixUnitaire()
     *
     * @return void
     */
    public function testSetNbDecimalesPrixUnitaire(): void {

        $obj = new Constantes();

        $obj->setNbDecimalesPrixUnitaire("nbDecimalesPrixUnitaire");
        $this->assertEquals("nbDecimalesPrixUnitaire", $obj->getNbDecimalesPrixUnitaire());
    }

    /**
     * Test setNbDecimalesQuantite()
     *
     * @return void
     */
    public function testSetNbDecimalesQuantite(): void {

        $obj = new Constantes();

        $obj->setNbDecimalesQuantite("nbDecimalesQuantite");
        $this->assertEquals("nbDecimalesQuantite", $obj->getNbDecimalesQuantite());
    }

    /**
     * Test setNbEntiersPrixUnitaire()
     *
     * @return void
     */
    public function testSetNbEntiersPrixUnitaire(): void {

        $obj = new Constantes();

        $obj->setNbEntiersPrixUnitaire("nbEntiersPrixUnitaire");
        $this->assertEquals("nbEntiersPrixUnitaire", $obj->getNbEntiersPrixUnitaire());
    }

    /**
     * Test setNbEntiersQuantite()
     *
     * @return void
     */
    public function testSetNbEntiersQuantite(): void {

        $obj = new Constantes();

        $obj->setNbEntiersQuantite("nbEntiersQuantite");
        $this->assertEquals("nbEntiersQuantite", $obj->getNbEntiersQuantite());
    }

    /**
     * Test setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Constantes();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Test setNbJoursAbsProratisationDcp()
     *
     * @return void
     */
    public function testSetNbJoursAbsProratisationDcp(): void {

        $obj = new Constantes();

        $obj->setNbJoursAbsProratisationDcp(10);
        $this->assertEquals(10, $obj->getNbJoursAbsProratisationDcp());
    }

    /**
     * Test setNbMoisConsecutifs()
     *
     * @return void
     */
    public function testSetNbMoisConsecutifs(): void {

        $obj = new Constantes();

        $obj->setNbMoisConsecutifs(10);
        $this->assertEquals(10, $obj->getNbMoisConsecutifs());
    }

    /**
     * Test setNomFactNbLignes()
     *
     * @return void
     */
    public function testSetNomFactNbLignes(): void {

        $obj = new Constantes();

        $obj->setNomFactNbLignes("nomFactNbLignes");
        $this->assertEquals("nomFactNbLignes", $obj->getNomFactNbLignes());
    }

    /**
     * Test setNomFichierAsciiAchat()
     *
     * @return void
     */
    public function testSetNomFichierAsciiAchat(): void {

        $obj = new Constantes();

        $obj->setNomFichierAsciiAchat("nomFichierAsciiAchat");
        $this->assertEquals("nomFichierAsciiAchat", $obj->getNomFichierAsciiAchat());
    }

    /**
     * Test setNomFichierAsciiVente()
     *
     * @return void
     */
    public function testSetNomFichierAsciiVente(): void {

        $obj = new Constantes();

        $obj->setNomFichierAsciiVente("nomFichierAsciiVente");
        $this->assertEquals("nomFichierAsciiVente", $obj->getNomFichierAsciiVente());
    }

    /**
     * Test setNote0NonConforme()
     *
     * @return void
     */
    public function testSetNote0NonConforme(): void {

        $obj = new Constantes();

        $obj->setNote0NonConforme(true);
        $this->assertTrue($obj->getNote0NonConforme());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new Constantes();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setNumCritereBtNum1()
     *
     * @return void
     */
    public function testSetNumCritereBtNum1(): void {

        $obj = new Constantes();

        $obj->setNumCritereBtNum1("numCritereBtNum1");
        $this->assertEquals("numCritereBtNum1", $obj->getNumCritereBtNum1());
    }

    /**
     * Test setNumCritereBtNum2()
     *
     * @return void
     */
    public function testSetNumCritereBtNum2(): void {

        $obj = new Constantes();

        $obj->setNumCritereBtNum2("numCritereBtNum2");
        $this->assertEquals("numCritereBtNum2", $obj->getNumCritereBtNum2());
    }

    /**
     * Test setNumCritereChantierFiltre1()
     *
     * @return void
     */
    public function testSetNumCritereChantierFiltre1(): void {

        $obj = new Constantes();

        $obj->setNumCritereChantierFiltre1("numCritereChantierFiltre1");
        $this->assertEquals("numCritereChantierFiltre1", $obj->getNumCritereChantierFiltre1());
    }

    /**
     * Test setNumDevis()
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new Constantes();

        $obj->setNumDevis(10);
        $this->assertEquals(10, $obj->getNumDevis());
    }

    /**
     * Test setNumFact()
     *
     * @return void
     */
    public function testSetNumFact(): void {

        $obj = new Constantes();

        $obj->setNumFact(10);
        $this->assertEquals(10, $obj->getNumFact());
    }

    /**
     * Test setNumFactVm()
     *
     * @return void
     */
    public function testSetNumFactVm(): void {

        $obj = new Constantes();

        $obj->setNumFactVm(10);
        $this->assertEquals(10, $obj->getNumFactVm());
    }

    /**
     * Test setNumeroFicheControle()
     *
     * @return void
     */
    public function testSetNumeroFicheControle(): void {

        $obj = new Constantes();

        $obj->setNumeroFicheControle(10);
        $this->assertEquals(10, $obj->getNumeroFicheControle());
    }

    /**
     * Test setPaParFournisseur()
     *
     * @return void
     */
    public function testSetPaParFournisseur(): void {

        $obj = new Constantes();

        $obj->setPaParFournisseur(true);
        $this->assertTrue($obj->getPaParFournisseur());
    }

    /**
     * Test setPasNumCptParDossier()
     *
     * @return void
     */
    public function testSetPasNumCptParDossier(): void {

        $obj = new Constantes();

        $obj->setPasNumCptParDossier(true);
        $this->assertTrue($obj->getPasNumCptParDossier());
    }

    /**
     * Test setPdfBtCoefficient()
     *
     * @return void
     */
    public function testSetPdfBtCoefficient(): void {

        $obj = new Constantes();

        $obj->setPdfBtCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtCoefficient());
    }

    /**
     * Test setPdfBtDatePassage()
     *
     * @return void
     */
    public function testSetPdfBtDatePassage(): void {

        $obj = new Constantes();

        $obj->setPdfBtDatePassage(true);
        $this->assertTrue($obj->getPdfBtDatePassage());
    }

    /**
     * Test setPdfBtDescriptif()
     *
     * @return void
     */
    public function testSetPdfBtDescriptif(): void {

        $obj = new Constantes();

        $obj->setPdfBtDescriptif(true);
        $this->assertTrue($obj->getPdfBtDescriptif());
    }

    /**
     * Test setPdfBtEmployesCorps()
     *
     * @return void
     */
    public function testSetPdfBtEmployesCorps(): void {

        $obj = new Constantes();

        $obj->setPdfBtEmployesCorps(true);
        $this->assertTrue($obj->getPdfBtEmployesCorps());
    }

    /**
     * Test setPdfBtEmployesRef()
     *
     * @return void
     */
    public function testSetPdfBtEmployesRef(): void {

        $obj = new Constantes();

        $obj->setPdfBtEmployesRef(true);
        $this->assertTrue($obj->getPdfBtEmployesRef());
    }

    /**
     * Test setPdfBtFacturerAlaValidation()
     *
     * @return void
     */
    public function testSetPdfBtFacturerAlaValidation(): void {

        $obj = new Constantes();

        $obj->setPdfBtFacturerAlaValidation(true);
        $this->assertTrue($obj->getPdfBtFacturerAlaValidation());
    }

    /**
     * Test setPdfBtFormatSaisieQtePu()
     *
     * @return void
     */
    public function testSetPdfBtFormatSaisieQtePu(): void {

        $obj = new Constantes();

        $obj->setPdfBtFormatSaisieQtePu(true);
        $this->assertTrue($obj->getPdfBtFormatSaisieQtePu());
    }

    /**
     * Test setPdfBtLibelleDate()
     *
     * @return void
     */
    public function testSetPdfBtLibelleDate(): void {

        $obj = new Constantes();

        $obj->setPdfBtLibelleDate("pdfBtLibelleDate");
        $this->assertEquals("pdfBtLibelleDate", $obj->getPdfBtLibelleDate());
    }

    /**
     * Test setPdfBtNomChantier()
     *
     * @return void
     */
    public function testSetPdfBtNomChantier(): void {

        $obj = new Constantes();

        $obj->setPdfBtNomChantier(true);
        $this->assertTrue($obj->getPdfBtNomChantier());
    }

    /**
     * Test setPdfBtPeriodeValidite()
     *
     * @return void
     */
    public function testSetPdfBtPeriodeValidite(): void {

        $obj = new Constantes();

        $obj->setPdfBtPeriodeValidite(true);
        $this->assertTrue($obj->getPdfBtPeriodeValidite());
    }

    /**
     * Test setPdfBtPrixAchat()
     *
     * @return void
     */
    public function testSetPdfBtPrixAchat(): void {

        $obj = new Constantes();

        $obj->setPdfBtPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtPrixAchat());
    }

    /**
     * Test setPdfBtReprendreLibelleDate()
     *
     * @return void
     */
    public function testSetPdfBtReprendreLibelleDate(): void {

        $obj = new Constantes();

        $obj->setPdfBtReprendreLibelleDate(true);
        $this->assertTrue($obj->getPdfBtReprendreLibelleDate());
    }

    /**
     * Test setPdfBtTauxHoraire()
     *
     * @return void
     */
    public function testSetPdfBtTauxHoraire(): void {

        $obj = new Constantes();

        $obj->setPdfBtTauxHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBtTauxHoraire());
    }

    /**
     * Test setPjEnvoiMail()
     *
     * @return void
     */
    public function testSetPjEnvoiMail(): void {

        $obj = new Constantes();

        $obj->setPjEnvoiMail("pjEnvoiMail");
        $this->assertEquals("pjEnvoiMail", $obj->getPjEnvoiMail());
    }

    /**
     * Test setPjEnvoiMailAttestation()
     *
     * @return void
     */
    public function testSetPjEnvoiMailAttestation(): void {

        $obj = new Constantes();

        $obj->setPjEnvoiMailAttestation("pjEnvoiMailAttestation");
        $this->assertEquals("pjEnvoiMailAttestation", $obj->getPjEnvoiMailAttestation());
    }

    /**
     * Test setPointBtEmployesSortis()
     *
     * @return void
     */
    public function testSetPointBtEmployesSortis(): void {

        $obj = new Constantes();

        $obj->setPointBtEmployesSortis(true);
        $this->assertTrue($obj->getPointBtEmployesSortis());
    }

    /**
     * Test setPoste1()
     *
     * @return void
     */
    public function testSetPoste1(): void {

        $obj = new Constantes();

        $obj->setPoste1("poste1");
        $this->assertEquals("poste1", $obj->getPoste1());
    }

    /**
     * Test setPoste2()
     *
     * @return void
     */
    public function testSetPoste2(): void {

        $obj = new Constantes();

        $obj->setPoste2("poste2");
        $this->assertEquals("poste2", $obj->getPoste2());
    }

    /**
     * Test setPoste3()
     *
     * @return void
     */
    public function testSetPoste3(): void {

        $obj = new Constantes();

        $obj->setPoste3("poste3");
        $this->assertEquals("poste3", $obj->getPoste3());
    }

    /**
     * Test setPoste4()
     *
     * @return void
     */
    public function testSetPoste4(): void {

        $obj = new Constantes();

        $obj->setPoste4("poste4");
        $this->assertEquals("poste4", $obj->getPoste4());
    }

    /**
     * Test setPoste5()
     *
     * @return void
     */
    public function testSetPoste5(): void {

        $obj = new Constantes();

        $obj->setPoste5("poste5");
        $this->assertEquals("poste5", $obj->getPoste5());
    }

    /**
     * Test setPourcMajHCompl()
     *
     * @return void
     */
    public function testSetPourcMajHCompl(): void {

        $obj = new Constantes();

        $obj->setPourcMajHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl());
    }

    /**
     * Test setPourcMajHCompl2()
     *
     * @return void
     */
    public function testSetPourcMajHCompl2(): void {

        $obj = new Constantes();

        $obj->setPourcMajHCompl2(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl2());
    }

    /**
     * Test setPourcentDepHcMax()
     *
     * @return void
     */
    public function testSetPourcentDepHcMax(): void {

        $obj = new Constantes();

        $obj->setPourcentDepHcMax(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHcMax());
    }

    /**
     * Test setPourcentDepHcPlusMois()
     *
     * @return void
     */
    public function testSetPourcentDepHcPlusMois(): void {

        $obj = new Constantes();

        $obj->setPourcentDepHcPlusMois(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHcPlusMois());
    }

    /**
     * Test setPourcentageReposRemplacement()
     *
     * @return void
     */
    public function testSetPourcentageReposRemplacement(): void {

        $obj = new Constantes();

        $obj->setPourcentageReposRemplacement(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentageReposRemplacement());
    }

    /**
     * Test setPrefixe()
     *
     * @return void
     */
    public function testSetPrefixe(): void {

        $obj = new Constantes();

        $obj->setPrefixe("prefixe");
        $this->assertEquals("prefixe", $obj->getPrefixe());
    }

    /**
     * Test setPrefixeDevis()
     *
     * @return void
     */
    public function testSetPrefixeDevis(): void {

        $obj = new Constantes();

        $obj->setPrefixeDevis("prefixeDevis");
        $this->assertEquals("prefixeDevis", $obj->getPrefixeDevis());
    }

    /**
     * Test setPreparerChantierPretOnly()
     *
     * @return void
     */
    public function testSetPreparerChantierPretOnly(): void {

        $obj = new Constantes();

        $obj->setPreparerChantierPretOnly(true);
        $this->assertTrue($obj->getPreparerChantierPretOnly());
    }

    /**
     * Test setPrixDefautAchat()
     *
     * @return void
     */
    public function testSetPrixDefautAchat(): void {

        $obj = new Constantes();

        $obj->setPrixDefautAchat(10);
        $this->assertEquals(10, $obj->getPrixDefautAchat());
    }

    /**
     * Test setPrixDefautEntreeDirecte()
     *
     * @return void
     */
    public function testSetPrixDefautEntreeDirecte(): void {

        $obj = new Constantes();

        $obj->setPrixDefautEntreeDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautEntreeDirecte());
    }

    /**
     * Test setPrixDefautInventaire()
     *
     * @return void
     */
    public function testSetPrixDefautInventaire(): void {

        $obj = new Constantes();

        $obj->setPrixDefautInventaire(10);
        $this->assertEquals(10, $obj->getPrixDefautInventaire());
    }

    /**
     * Test setPrixDefautSortieDirecte()
     *
     * @return void
     */
    public function testSetPrixDefautSortieDirecte(): void {

        $obj = new Constantes();

        $obj->setPrixDefautSortieDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautSortieDirecte());
    }

    /**
     * Test setPrixDefautVente()
     *
     * @return void
     */
    public function testSetPrixDefautVente(): void {

        $obj = new Constantes();

        $obj->setPrixDefautVente(10);
        $this->assertEquals(10, $obj->getPrixDefautVente());
    }

    /**
     * Test setProchainNumeroPj()
     *
     * @return void
     */
    public function testSetProchainNumeroPj(): void {

        $obj = new Constantes();

        $obj->setProchainNumeroPj(10);
        $this->assertEquals(10, $obj->getProchainNumeroPj());
    }

    /**
     * Test setProrataHeuresCreerLigne()
     *
     * @return void
     */
    public function testSetProrataHeuresCreerLigne(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresCreerLigne(true);
        $this->assertTrue($obj->getProrataHeuresCreerLigne());
    }

    /**
     * Test setProrataHeuresDesignationMoins()
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationMoins(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationMoins("prorataHeuresDesignationMoins");
        $this->assertEquals("prorataHeuresDesignationMoins", $obj->getProrataHeuresDesignationMoins());
    }

    /**
     * Test setProrataHeuresDesignationPlus()
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationPlus(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationPlus("prorataHeuresDesignationPlus");
        $this->assertEquals("prorataHeuresDesignationPlus", $obj->getProrataHeuresDesignationPlus());
    }

    /**
     * Test setProrataHeuresOption()
     *
     * @return void
     */
    public function testSetProrataHeuresOption(): void {

        $obj = new Constantes();

        $obj->setProrataHeuresOption("prorataHeuresOption");
        $this->assertEquals("prorataHeuresOption", $obj->getProrataHeuresOption());
    }

    /**
     * Test setProvCpInfosEmp()
     *
     * @return void
     */
    public function testSetProvCpInfosEmp(): void {

        $obj = new Constantes();

        $obj->setProvCpInfosEmp(true);
        $this->assertTrue($obj->getProvCpInfosEmp());
    }

    /**
     * Test setProvisionsCp()
     *
     * @return void
     */
    public function testSetProvisionsCp(): void {

        $obj = new Constantes();

        $obj->setProvisionsCp(true);
        $this->assertTrue($obj->getProvisionsCp());
    }

    /**
     * Test setQualiteNbCriteres()
     *
     * @return void
     */
    public function testSetQualiteNbCriteres(): void {

        $obj = new Constantes();

        $obj->setQualiteNbCriteres("qualiteNbCriteres");
        $this->assertEquals("qualiteNbCriteres", $obj->getQualiteNbCriteres());
    }

    /**
     * Test setQualiteNbNotes()
     *
     * @return void
     */
    public function testSetQualiteNbNotes(): void {

        $obj = new Constantes();

        $obj->setQualiteNbNotes("qualiteNbNotes");
        $this->assertEquals("qualiteNbNotes", $obj->getQualiteNbNotes());
    }

    /**
     * Test setQualiteSatisfactionGenerale()
     *
     * @return void
     */
    public function testSetQualiteSatisfactionGenerale(): void {

        $obj = new Constantes();

        $obj->setQualiteSatisfactionGenerale(true);
        $this->assertTrue($obj->getQualiteSatisfactionGenerale());
    }

    /**
     * Test setReferenceMensuContratProprete()
     *
     * @return void
     */
    public function testSetReferenceMensuContratProprete(): void {

        $obj = new Constantes();

        $obj->setReferenceMensuContratProprete(true);
        $this->assertTrue($obj->getReferenceMensuContratProprete());
    }

    /**
     * Test setRemplacantAbsJfPasAuto()
     *
     * @return void
     */
    public function testSetRemplacantAbsJfPasAuto(): void {

        $obj = new Constantes();

        $obj->setRemplacantAbsJfPasAuto(true);
        $this->assertTrue($obj->getRemplacantAbsJfPasAuto());
    }

    /**
     * Test setRemplacantTravaillePasJf()
     *
     * @return void
     */
    public function testSetRemplacantTravaillePasJf(): void {

        $obj = new Constantes();

        $obj->setRemplacantTravaillePasJf(true);
        $this->assertTrue($obj->getRemplacantTravaillePasJf());
    }

    /**
     * Test setRemplacementHcjf()
     *
     * @return void
     */
    public function testSetRemplacementHcjf(): void {

        $obj = new Constantes();

        $obj->setRemplacementHcjf(true);
        $this->assertTrue($obj->getRemplacementHcjf());
    }

    /**
     * Test setReposCompensateurPourTravailleurNuit()
     *
     * @return void
     */
    public function testSetReposCompensateurPourTravailleurNuit(): void {

        $obj = new Constantes();

        $obj->setReposCompensateurPourTravailleurNuit(true);
        $this->assertTrue($obj->getReposCompensateurPourTravailleurNuit());
    }

    /**
     * Test setRtFdansFactDev()
     *
     * @return void
     */
    public function testSetRtFdansFactDev(): void {

        $obj = new Constantes();

        $obj->setRtFdansFactDev(true);
        $this->assertTrue($obj->getRtFdansFactDev());
    }

    /**
     * Test setSaisirAbsencesSurHc()
     *
     * @return void
     */
    public function testSetSaisirAbsencesSurHc(): void {

        $obj = new Constantes();

        $obj->setSaisirAbsencesSurHc(true);
        $this->assertTrue($obj->getSaisirAbsencesSurHc());
    }

    /**
     * Test setSaisirCodeChantierAchat()
     *
     * @return void
     */
    public function testSetSaisirCodeChantierAchat(): void {

        $obj = new Constantes();

        $obj->setSaisirCodeChantierAchat(true);
        $this->assertTrue($obj->getSaisirCodeChantierAchat());
    }

    /**
     * Test setSaisirNumBt()
     *
     * @return void
     */
    public function testSetSaisirNumBt(): void {

        $obj = new Constantes();

        $obj->setSaisirNumBt(true);
        $this->assertTrue($obj->getSaisirNumBt());
    }

    /**
     * Test setServicesPaie()
     *
     * @return void
     */
    public function testSetServicesPaie(): void {

        $obj = new Constantes();

        $obj->setServicesPaie("servicesPaie");
        $this->assertEquals("servicesPaie", $obj->getServicesPaie());
    }

    /**
     * Test setSeuilMajoHCompl()
     *
     * @return void
     */
    public function testSetSeuilMajoHCompl(): void {

        $obj = new Constantes();

        $obj->setSeuilMajoHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilMajoHCompl());
    }

    /**
     * Test setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new Constantes();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Test setTauxMajoHc33()
     *
     * @return void
     */
    public function testSetTauxMajoHc33(): void {

        $obj = new Constantes();

        $obj->setTauxMajoHc33(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajoHc33());
    }

    /**
     * Test setTauxMajorationHCompl()
     *
     * @return void
     */
    public function testSetTauxMajorationHCompl(): void {

        $obj = new Constantes();

        $obj->setTauxMajorationHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajorationHCompl());
    }

    /**
     * Test setTauxTvaAchat()
     *
     * @return void
     */
    public function testSetTauxTvaAchat(): void {

        $obj = new Constantes();

        $obj->setTauxTvaAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaAchat());
    }

    /**
     * Test setTauxTvaTaxeDeee()
     *
     * @return void
     */
    public function testSetTauxTvaTaxeDeee(): void {

        $obj = new Constantes();

        $obj->setTauxTvaTaxeDeee(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxeDeee());
    }

    /**
     * Test setTauxTvaVente()
     *
     * @return void
     */
    public function testSetTauxTvaVente(): void {

        $obj = new Constantes();

        $obj->setTauxTvaVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaVente());
    }

    /**
     * Test setTypeRemplDefaut()
     *
     * @return void
     */
    public function testSetTypeRemplDefaut(): void {

        $obj = new Constantes();

        $obj->setTypeRemplDefaut("typeRemplDefaut");
        $this->assertEquals("typeRemplDefaut", $obj->getTypeRemplDefaut());
    }

    /**
     * Test setTypeTransfertVente()
     *
     * @return void
     */
    public function testSetTypeTransfertVente(): void {

        $obj = new Constantes();

        $obj->setTypeTransfertVente("typeTransfertVente");
        $this->assertEquals("typeTransfertVente", $obj->getTypeTransfertVente());
    }

    /**
     * Test setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new Constantes();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Test setUtiliserStockMini()
     *
     * @return void
     */
    public function testSetUtiliserStockMini(): void {

        $obj = new Constantes();

        $obj->setUtiliserStockMini(true);
        $this->assertTrue($obj->getUtiliserStockMini());
    }

    /**
     * Test setVisualiserPointageBtValides()
     *
     * @return void
     */
    public function testSetVisualiserPointageBtValides(): void {

        $obj = new Constantes();

        $obj->setVisualiserPointageBtValides(true);
        $this->assertTrue($obj->getVisualiserPointageBtValides());
    }

    /**
     * Test __construct()
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
