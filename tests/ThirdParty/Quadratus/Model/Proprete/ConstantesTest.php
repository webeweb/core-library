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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Constantes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Constantes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ConstantesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Constantes();

        $this->assertNull($obj->get35Heures());
        $this->assertNull($obj->getAlertesPaieDansPointage());
        $this->assertNull($obj->getAlertesPaieDansReclam());
        $this->assertNull($obj->getAnalytiqueNatureAgence());
        $this->assertNull($obj->getAnalytiqueParChantier());
        $this->assertNull($obj->getArchiverDevis());
        $this->assertNull($obj->getArchiverFacture());
        $this->assertNull($obj->getArrondiSurPU());
        $this->assertNull($obj->getAutoriserDASansMajStock());
        $this->assertNull($obj->getAutoriserDepBudChaCdeType());
        $this->assertNull($obj->getAutoriserMensuTacheVide());
        $this->assertNull($obj->getBLNumFact());
        $this->assertNull($obj->getBLPrefixe());
        $this->assertNull($obj->getBRNumFact());
        $this->assertNull($obj->getBRPrefixe());
        $this->assertNull($obj->getBSNumFact());
        $this->assertNull($obj->getBSPrefixe());
        $this->assertNull($obj->getCDDMensuTotalHeures());
        $this->assertNull($obj->getCPSansProvisions());
        $this->assertNull($obj->getCdeClientNumFact());
        $this->assertNull($obj->getCdeClientPrefixe());
        $this->assertNull($obj->getCdeFrnNumFact());
        $this->assertNull($obj->getCdeFrnPrefixe());
        $this->assertNull($obj->getCentralisationVente());
        $this->assertNull($obj->getChargeMensuelleSansTache());
        $this->assertNull($obj->getCheminDossCompta());
        $this->assertNull($obj->getCleDebloquerPeriodeCloturee());
        $this->assertNull($obj->getCodeAbsCPSansSolde());
        $this->assertNull($obj->getCodeAbsDefJF());
        $this->assertNull($obj->getCodeAbsDefJFMoins3());
        $this->assertNull($obj->getCodeAbsFermetureChantier());
        $this->assertNull($obj->getCodeAbsPointageDefaut());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeDepotParDefaut());
        $this->assertNull($obj->getCodeICS());
        $this->assertNull($obj->getCodeJA());
        $this->assertNull($obj->getCodeJVNegoce());
        $this->assertNull($obj->getCodeJVPrestation());
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
        $this->assertNull($obj->getCodePrimeJF1());
        $this->assertNull($obj->getCodePrimeJF1Type2());
        $this->assertNull($obj->getCodePrimeJF2());
        $this->assertNull($obj->getCodePrimeJFMai());
        $this->assertNull($obj->getCodePrimeNuit1());
        $this->assertNull($obj->getCodePrimeNuit1Type2());
        $this->assertNull($obj->getCodePrimeNuit2());
        $this->assertNull($obj->getCodePrimePaniers());
        $this->assertNull($obj->getCodePrimeRS());
        $this->assertNull($obj->getCodePrimeTP());
        $this->assertNull($obj->getCodeRegJVNegDebut());
        $this->assertNull($obj->getCodeRegJVNegFin());
        $this->assertNull($obj->getCodeRegJVPrestDebut());
        $this->assertNull($obj->getCodeRegJVPrestFin());
        $this->assertNull($obj->getCodeTacheDefaut());
        $this->assertNull($obj->getCollectifDef());
        $this->assertNull($obj->getCollectifDefFournisseur());
        $this->assertNull($obj->getCommentaireJourneeSolidarite());
        $this->assertNull($obj->getCompteCollectifAchat());
        $this->assertNull($obj->getCompteCollectifVente());
        $this->assertNull($obj->getCompteEscompteCAExonere());
        $this->assertNull($obj->getCompteEscompteSoumisTVA());
        $this->assertNull($obj->getCompteTvaAchat());
        $this->assertNull($obj->getCompteTvaTaxeDEEE());
        $this->assertNull($obj->getCompteTvaVente());
        $this->assertNull($obj->getCompteVentilTaxeDEEE());
        $this->assertNull($obj->getCompterSamediTfCPPaie());
        $this->assertNull($obj->getControlerCdeFrn());
        $this->assertNull($obj->getControlerChargesMensuelles());
        $this->assertNull($obj->getControlerCodeReg());
        $this->assertNull($obj->getControlerDepHCMax());
        $this->assertNull($obj->getControlerDepHCPlusMois());
        $this->assertNull($obj->getCreerAlertePaieDefEnPaie());
        $this->assertNull($obj->getCtrlAutoCP());
        $this->assertNull($obj->getCtrlAutoCPAvecAnticipation());
        $this->assertNull($obj->getDateAppliGestionHeuresEnPlus());
        $this->assertNull($obj->getDateJourneeSolidarite());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDecMoisPrepFact());
        $this->assertNull($obj->getDernierCompteClient());
        $this->assertNull($obj->getDernierCompteFrn());
        $this->assertNull($obj->getDiscr());
        $this->assertNull($obj->getDossCompta());
        $this->assertNull($obj->getDossPaie());
        $this->assertNull($obj->getESCodeAbsEntree());
        $this->assertNull($obj->getESCodeAbsSortie());
        $this->assertNull($obj->getESHeuresReelles());
        $this->assertNull($obj->getEtablissementsPaie());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getFacturationProrataHeures());
        $this->assertNull($obj->getFolioJA());
        $this->assertNull($obj->getFolioJVNegoce());
        $this->assertNull($obj->getFolioJVPrestation());
        $this->assertNull($obj->getGererNumCptChantier());
        $this->assertNull($obj->getGestionHCompl());
        $this->assertNull($obj->getGestionHSupMens());
        $this->assertNull($obj->getGestionHSupMensuelle());
        $this->assertNull($obj->getGestionMajDim());
        $this->assertNull($obj->getGestionMajJF());
        $this->assertNull($obj->getGestionMajNuit());
        $this->assertNull($obj->getGestionMultiDepot());
        $this->assertNull($obj->getGestionQuotas());
        $this->assertNull($obj->getGestionSpecifJF());
        $this->assertNull($obj->getGestionSpecifMajoJF());
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
        $this->assertNull($obj->getMAJDernierPassageBT());
        $this->assertNull($obj->getMailAttestations());
        $this->assertNull($obj->getMailFactures());
        $this->assertNull($obj->getMajDernierPrixAchat());
        $this->assertNull($obj->getMajPAMP());
        $this->assertNull($obj->getMajorationCascade());
        $this->assertNull($obj->getMajorationHPlus());
        $this->assertNull($obj->getMargeNiveauEdition());
        $this->assertNull($obj->getMargePourcentCharge());
        $this->assertNull($obj->getMargeSalInspProrataCA());
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
        $this->assertNull($obj->getNbJoursAbsProratisationDCP());
        $this->assertNull($obj->getNbMoisConsecutifs());
        $this->assertNull($obj->getNomFactNbLignes());
        $this->assertNull($obj->getNomFichierAsciiAchat());
        $this->assertNull($obj->getNomFichierAsciiVente());
        $this->assertNull($obj->getNote0NonConforme());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumCritereBTNum1());
        $this->assertNull($obj->getNumCritereBTNum2());
        $this->assertNull($obj->getNumCritereChantierFiltre1());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumFact());
        $this->assertNull($obj->getNumFactVM());
        $this->assertNull($obj->getNumeroFicheControle());
        $this->assertNull($obj->getPAParFournisseur());
        $this->assertNull($obj->getPJEnvoiMail());
        $this->assertNull($obj->getPJEnvoiMailAttestation());
        $this->assertNull($obj->getPasNumCptParDossier());
        $this->assertNull($obj->getPdfBT_Coefficient());
        $this->assertNull($obj->getPdfBT_DatePassage());
        $this->assertNull($obj->getPdfBT_Descriptif());
        $this->assertNull($obj->getPdfBT_EmployesCorps());
        $this->assertNull($obj->getPdfBT_EmployesRef());
        $this->assertNull($obj->getPdfBT_FacturerAlaValidation());
        $this->assertNull($obj->getPdfBT_FormatSaisieQtePU());
        $this->assertNull($obj->getPdfBT_LibelleDate());
        $this->assertNull($obj->getPdfBT_NomChantier());
        $this->assertNull($obj->getPdfBT_PeriodeValidite());
        $this->assertNull($obj->getPdfBT_PrixAchat());
        $this->assertNull($obj->getPdfBT_ReprendreLibelleDate());
        $this->assertNull($obj->getPdfBT_TauxHoraire());
        $this->assertNull($obj->getPointBT_EmployesSortis());
        $this->assertNull($obj->getPoste1());
        $this->assertNull($obj->getPoste2());
        $this->assertNull($obj->getPoste3());
        $this->assertNull($obj->getPoste4());
        $this->assertNull($obj->getPoste5());
        $this->assertNull($obj->getPourcMajHCompl());
        $this->assertNull($obj->getPourcMajHCompl2());
        $this->assertNull($obj->getPourcentDepHCMax());
        $this->assertNull($obj->getPourcentDepHCPlusMois());
        $this->assertNull($obj->getPourcentageReposRemplacement());
        $this->assertNull($obj->getPrefixe());
        $this->assertNull($obj->getPrefixeDevis());
        $this->assertNull($obj->getPreparerChantierPretOnly());
        $this->assertNull($obj->getPrixDefautAchat());
        $this->assertNull($obj->getPrixDefautEntreeDirecte());
        $this->assertNull($obj->getPrixDefautInventaire());
        $this->assertNull($obj->getPrixDefautSortieDirecte());
        $this->assertNull($obj->getPrixDefautVente());
        $this->assertNull($obj->getProchainNumeroPJ());
        $this->assertNull($obj->getProrataHeuresCreerLigne());
        $this->assertNull($obj->getProrataHeuresDesignationMoins());
        $this->assertNull($obj->getProrataHeuresDesignationPlus());
        $this->assertNull($obj->getProrataHeuresOption());
        $this->assertNull($obj->getProvCPInfosEmp());
        $this->assertNull($obj->getProvisionsCP());
        $this->assertNull($obj->getQualiteNbCriteres());
        $this->assertNull($obj->getQualiteNbNotes());
        $this->assertNull($obj->getQualiteSatisfactionGenerale());
        $this->assertNull($obj->getRTFdansFactDev());
        $this->assertNull($obj->getReferenceMensuContratProprete());
        $this->assertNull($obj->getRemplacantAbsJFPasAuto());
        $this->assertNull($obj->getRemplacantTravaillePasJF());
        $this->assertNull($obj->getRemplacementHCJF());
        $this->assertNull($obj->getReposCompensateurPourTravailleurNuit());
        $this->assertNull($obj->getSaisirAbsencesSurHC());
        $this->assertNull($obj->getSaisirCodeChantierAchat());
        $this->assertNull($obj->getSaisirNumBT());
        $this->assertNull($obj->getServicesPaie());
        $this->assertNull($obj->getSeuilMajoHCompl());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTauxMajoHC33());
        $this->assertNull($obj->getTauxMajorationHCompl());
        $this->assertNull($obj->getTauxTvaAchat());
        $this->assertNull($obj->getTauxTvaTaxeDEEE());
        $this->assertNull($obj->getTauxTvaVente());
        $this->assertNull($obj->getTypeRemplDefaut());
        $this->assertNull($obj->getTypeTransfertVente());
        $this->assertNull($obj->getUniqIDSynchro());
        $this->assertNull($obj->getUtiliserStockMini());
        $this->assertNull($obj->getVisualiserPointageBTValides());
    }

    /**
     * Tests the set35Heures() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSet35Heures() {

        $obj = new Constantes();

        $obj->set35Heures(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->get35Heures());
    }

    /**
     * Tests the setAlertesPaieDansPointage() method.
     *
     * @return void
     */
    public function testSetAlertesPaieDansPointage() {

        $obj = new Constantes();

        $obj->setAlertesPaieDansPointage(true);
        $this->assertEquals(true, $obj->getAlertesPaieDansPointage());
    }

    /**
     * Tests the setAlertesPaieDansReclam() method.
     *
     * @return void
     */
    public function testSetAlertesPaieDansReclam() {

        $obj = new Constantes();

        $obj->setAlertesPaieDansReclam(true);
        $this->assertEquals(true, $obj->getAlertesPaieDansReclam());
    }

    /**
     * Tests the setAnalytiqueNatureAgence() method.
     *
     * @return void
     */
    public function testSetAnalytiqueNatureAgence() {

        $obj = new Constantes();

        $obj->setAnalytiqueNatureAgence(true);
        $this->assertEquals(true, $obj->getAnalytiqueNatureAgence());
    }

    /**
     * Tests the setAnalytiqueParChantier() method.
     *
     * @return void
     */
    public function testSetAnalytiqueParChantier() {

        $obj = new Constantes();

        $obj->setAnalytiqueParChantier(true);
        $this->assertEquals(true, $obj->getAnalytiqueParChantier());
    }

    /**
     * Tests the setArchiverDevis() method.
     *
     * @return void
     */
    public function testSetArchiverDevis() {

        $obj = new Constantes();

        $obj->setArchiverDevis(true);
        $this->assertEquals(true, $obj->getArchiverDevis());
    }

    /**
     * Tests the setArchiverFacture() method.
     *
     * @return void
     */
    public function testSetArchiverFacture() {

        $obj = new Constantes();

        $obj->setArchiverFacture(true);
        $this->assertEquals(true, $obj->getArchiverFacture());
    }

    /**
     * Tests the setArrondiSurPU() method.
     *
     * @return void
     */
    public function testSetArrondiSurPU() {

        $obj = new Constantes();

        $obj->setArrondiSurPU(true);
        $this->assertEquals(true, $obj->getArrondiSurPU());
    }

    /**
     * Tests the setAutoriserDASansMajStock() method.
     *
     * @return void
     */
    public function testSetAutoriserDASansMajStock() {

        $obj = new Constantes();

        $obj->setAutoriserDASansMajStock(true);
        $this->assertEquals(true, $obj->getAutoriserDASansMajStock());
    }

    /**
     * Tests the setAutoriserDepBudChaCdeType() method.
     *
     * @return void
     */
    public function testSetAutoriserDepBudChaCdeType() {

        $obj = new Constantes();

        $obj->setAutoriserDepBudChaCdeType(true);
        $this->assertEquals(true, $obj->getAutoriserDepBudChaCdeType());
    }

    /**
     * Tests the setAutoriserMensuTacheVide() method.
     *
     * @return void
     */
    public function testSetAutoriserMensuTacheVide() {

        $obj = new Constantes();

        $obj->setAutoriserMensuTacheVide(true);
        $this->assertEquals(true, $obj->getAutoriserMensuTacheVide());
    }

    /**
     * Tests the setBLNumFact() method.
     *
     * @return void
     */
    public function testSetBLNumFact() {

        $obj = new Constantes();

        $obj->setBLNumFact(10);
        $this->assertEquals(10, $obj->getBLNumFact());
    }

    /**
     * Tests the setBLPrefixe() method.
     *
     * @return void
     */
    public function testSetBLPrefixe() {

        $obj = new Constantes();

        $obj->setBLPrefixe("bLPrefixe");
        $this->assertEquals("bLPrefixe", $obj->getBLPrefixe());
    }

    /**
     * Tests the setBRNumFact() method.
     *
     * @return void
     */
    public function testSetBRNumFact() {

        $obj = new Constantes();

        $obj->setBRNumFact(10);
        $this->assertEquals(10, $obj->getBRNumFact());
    }

    /**
     * Tests the setBRPrefixe() method.
     *
     * @return void
     */
    public function testSetBRPrefixe() {

        $obj = new Constantes();

        $obj->setBRPrefixe("bRPrefixe");
        $this->assertEquals("bRPrefixe", $obj->getBRPrefixe());
    }

    /**
     * Tests the setBSNumFact() method.
     *
     * @return void
     */
    public function testSetBSNumFact() {

        $obj = new Constantes();

        $obj->setBSNumFact(10);
        $this->assertEquals(10, $obj->getBSNumFact());
    }

    /**
     * Tests the setBSPrefixe() method.
     *
     * @return void
     */
    public function testSetBSPrefixe() {

        $obj = new Constantes();

        $obj->setBSPrefixe("bSPrefixe");
        $this->assertEquals("bSPrefixe", $obj->getBSPrefixe());
    }

    /**
     * Tests the setCDDMensuTotalHeures() method.
     *
     * @return void
     */
    public function testSetCDDMensuTotalHeures() {

        $obj = new Constantes();

        $obj->setCDDMensuTotalHeures(true);
        $this->assertEquals(true, $obj->getCDDMensuTotalHeures());
    }

    /**
     * Tests the setCPSansProvisions() method.
     *
     * @return void
     */
    public function testSetCPSansProvisions() {

        $obj = new Constantes();

        $obj->setCPSansProvisions(true);
        $this->assertEquals(true, $obj->getCPSansProvisions());
    }

    /**
     * Tests the setCdeClientNumFact() method.
     *
     * @return void
     */
    public function testSetCdeClientNumFact() {

        $obj = new Constantes();

        $obj->setCdeClientNumFact(10);
        $this->assertEquals(10, $obj->getCdeClientNumFact());
    }

    /**
     * Tests the setCdeClientPrefixe() method.
     *
     * @return void
     */
    public function testSetCdeClientPrefixe() {

        $obj = new Constantes();

        $obj->setCdeClientPrefixe("cdeClientPrefixe");
        $this->assertEquals("cdeClientPrefixe", $obj->getCdeClientPrefixe());
    }

    /**
     * Tests the setCdeFrnNumFact() method.
     *
     * @return void
     */
    public function testSetCdeFrnNumFact() {

        $obj = new Constantes();

        $obj->setCdeFrnNumFact(10);
        $this->assertEquals(10, $obj->getCdeFrnNumFact());
    }

    /**
     * Tests the setCdeFrnPrefixe() method.
     *
     * @return void
     */
    public function testSetCdeFrnPrefixe() {

        $obj = new Constantes();

        $obj->setCdeFrnPrefixe("cdeFrnPrefixe");
        $this->assertEquals("cdeFrnPrefixe", $obj->getCdeFrnPrefixe());
    }

    /**
     * Tests the setCentralisationVente() method.
     *
     * @return void
     */
    public function testSetCentralisationVente() {

        $obj = new Constantes();

        $obj->setCentralisationVente(true);
        $this->assertEquals(true, $obj->getCentralisationVente());
    }

    /**
     * Tests the setChargeMensuelleSansTache() method.
     *
     * @return void
     */
    public function testSetChargeMensuelleSansTache() {

        $obj = new Constantes();

        $obj->setChargeMensuelleSansTache(true);
        $this->assertEquals(true, $obj->getChargeMensuelleSansTache());
    }

    /**
     * Tests the setCheminDossCompta() method.
     *
     * @return void
     */
    public function testSetCheminDossCompta() {

        $obj = new Constantes();

        $obj->setCheminDossCompta("cheminDossCompta");
        $this->assertEquals("cheminDossCompta", $obj->getCheminDossCompta());
    }

    /**
     * Tests the setCleDebloquerPeriodeCloturee() method.
     *
     * @return void
     */
    public function testSetCleDebloquerPeriodeCloturee() {

        $obj = new Constantes();

        $obj->setCleDebloquerPeriodeCloturee("cleDebloquerPeriodeCloturee");
        $this->assertEquals("cleDebloquerPeriodeCloturee", $obj->getCleDebloquerPeriodeCloturee());
    }

    /**
     * Tests the setCodeAbsCPSansSolde() method.
     *
     * @return void
     */
    public function testSetCodeAbsCPSansSolde() {

        $obj = new Constantes();

        $obj->setCodeAbsCPSansSolde("codeAbsCPSansSolde");
        $this->assertEquals("codeAbsCPSansSolde", $obj->getCodeAbsCPSansSolde());
    }

    /**
     * Tests the setCodeAbsDefJF() method.
     *
     * @return void
     */
    public function testSetCodeAbsDefJF() {

        $obj = new Constantes();

        $obj->setCodeAbsDefJF("codeAbsDefJF");
        $this->assertEquals("codeAbsDefJF", $obj->getCodeAbsDefJF());
    }

    /**
     * Tests the setCodeAbsDefJFMoins3() method.
     *
     * @return void
     */
    public function testSetCodeAbsDefJFMoins3() {

        $obj = new Constantes();

        $obj->setCodeAbsDefJFMoins3("codeAbsDefJFMoins3");
        $this->assertEquals("codeAbsDefJFMoins3", $obj->getCodeAbsDefJFMoins3());
    }

    /**
     * Tests the setCodeAbsFermetureChantier() method.
     *
     * @return void
     */
    public function testSetCodeAbsFermetureChantier() {

        $obj = new Constantes();

        $obj->setCodeAbsFermetureChantier("codeAbsFermetureChantier");
        $this->assertEquals("codeAbsFermetureChantier", $obj->getCodeAbsFermetureChantier());
    }

    /**
     * Tests the setCodeAbsPointageDefaut() method.
     *
     * @return void
     */
    public function testSetCodeAbsPointageDefaut() {

        $obj = new Constantes();

        $obj->setCodeAbsPointageDefaut("codeAbsPointageDefaut");
        $this->assertEquals("codeAbsPointageDefaut", $obj->getCodeAbsPointageDefaut());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new Constantes();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new Constantes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeDepotParDefaut() method.
     *
     * @return void
     */
    public function testSetCodeDepotParDefaut() {

        $obj = new Constantes();

        $obj->setCodeDepotParDefaut("codeDepotParDefaut");
        $this->assertEquals("codeDepotParDefaut", $obj->getCodeDepotParDefaut());
    }

    /**
     * Tests the setCodeICS() method.
     *
     * @return void
     */
    public function testSetCodeICS() {

        $obj = new Constantes();

        $obj->setCodeICS("codeICS");
        $this->assertEquals("codeICS", $obj->getCodeICS());
    }

    /**
     * Tests the setCodeJA() method.
     *
     * @return void
     */
    public function testSetCodeJA() {

        $obj = new Constantes();

        $obj->setCodeJA("codeJA");
        $this->assertEquals("codeJA", $obj->getCodeJA());
    }

    /**
     * Tests the setCodeJVNegoce() method.
     *
     * @return void
     */
    public function testSetCodeJVNegoce() {

        $obj = new Constantes();

        $obj->setCodeJVNegoce("codeJVNegoce");
        $this->assertEquals("codeJVNegoce", $obj->getCodeJVNegoce());
    }

    /**
     * Tests the setCodeJVPrestation() method.
     *
     * @return void
     */
    public function testSetCodeJVPrestation() {

        $obj = new Constantes();

        $obj->setCodeJVPrestation("codeJVPrestation");
        $this->assertEquals("codeJVPrestation", $obj->getCodeJVPrestation());
    }

    /**
     * Tests the setCodeLivParDefaut() method.
     *
     * @return void
     */
    public function testSetCodeLivParDefaut() {

        $obj = new Constantes();

        $obj->setCodeLivParDefaut("codeLivParDefaut");
        $this->assertEquals("codeLivParDefaut", $obj->getCodeLivParDefaut());
    }

    /**
     * Tests the setCodePrimeChantier1() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier1() {

        $obj = new Constantes();

        $obj->setCodePrimeChantier1("codePrimeChantier1");
        $this->assertEquals("codePrimeChantier1", $obj->getCodePrimeChantier1());
    }

    /**
     * Tests the setCodePrimeChantier2() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier2() {

        $obj = new Constantes();

        $obj->setCodePrimeChantier2("codePrimeChantier2");
        $this->assertEquals("codePrimeChantier2", $obj->getCodePrimeChantier2());
    }

    /**
     * Tests the setCodePrimeChantier3() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier3() {

        $obj = new Constantes();

        $obj->setCodePrimeChantier3("codePrimeChantier3");
        $this->assertEquals("codePrimeChantier3", $obj->getCodePrimeChantier3());
    }

    /**
     * Tests the setCodePrimeDimanche1() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1() {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1("codePrimeDimanche1");
        $this->assertEquals("codePrimeDimanche1", $obj->getCodePrimeDimanche1());
    }

    /**
     * Tests the setCodePrimeDimanche1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1Type2() {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche1Type2("codePrimeDimanche1Type2");
        $this->assertEquals("codePrimeDimanche1Type2", $obj->getCodePrimeDimanche1Type2());
    }

    /**
     * Tests the setCodePrimeDimanche2() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche2() {

        $obj = new Constantes();

        $obj->setCodePrimeDimanche2("codePrimeDimanche2");
        $this->assertEquals("codePrimeDimanche2", $obj->getCodePrimeDimanche2());
    }

    /**
     * Tests the setCodePrimeForfait() method.
     *
     * @return void
     */
    public function testSetCodePrimeForfait() {

        $obj = new Constantes();

        $obj->setCodePrimeForfait("codePrimeForfait");
        $this->assertEquals("codePrimeForfait", $obj->getCodePrimeForfait());
    }

    /**
     * Tests the setCodePrimeHCompl() method.
     *
     * @return void
     */
    public function testSetCodePrimeHCompl() {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl("codePrimeHCompl");
        $this->assertEquals("codePrimeHCompl", $obj->getCodePrimeHCompl());
    }

    /**
     * Tests the setCodePrimeHCompl2() method.
     *
     * @return void
     */
    public function testSetCodePrimeHCompl2() {

        $obj = new Constantes();

        $obj->setCodePrimeHCompl2("codePrimeHCompl2");
        $this->assertEquals("codePrimeHCompl2", $obj->getCodePrimeHCompl2());
    }

    /**
     * Tests the setCodePrimeJF1() method.
     *
     * @return void
     */
    public function testSetCodePrimeJF1() {

        $obj = new Constantes();

        $obj->setCodePrimeJF1("codePrimeJF1");
        $this->assertEquals("codePrimeJF1", $obj->getCodePrimeJF1());
    }

    /**
     * Tests the setCodePrimeJF1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeJF1Type2() {

        $obj = new Constantes();

        $obj->setCodePrimeJF1Type2("codePrimeJF1Type2");
        $this->assertEquals("codePrimeJF1Type2", $obj->getCodePrimeJF1Type2());
    }

    /**
     * Tests the setCodePrimeJF2() method.
     *
     * @return void
     */
    public function testSetCodePrimeJF2() {

        $obj = new Constantes();

        $obj->setCodePrimeJF2("codePrimeJF2");
        $this->assertEquals("codePrimeJF2", $obj->getCodePrimeJF2());
    }

    /**
     * Tests the setCodePrimeJFMai() method.
     *
     * @return void
     */
    public function testSetCodePrimeJFMai() {

        $obj = new Constantes();

        $obj->setCodePrimeJFMai("codePrimeJFMai");
        $this->assertEquals("codePrimeJFMai", $obj->getCodePrimeJFMai());
    }

    /**
     * Tests the setCodePrimeNuit1() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit1() {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1("codePrimeNuit1");
        $this->assertEquals("codePrimeNuit1", $obj->getCodePrimeNuit1());
    }

    /**
     * Tests the setCodePrimeNuit1Type2() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit1Type2() {

        $obj = new Constantes();

        $obj->setCodePrimeNuit1Type2("codePrimeNuit1Type2");
        $this->assertEquals("codePrimeNuit1Type2", $obj->getCodePrimeNuit1Type2());
    }

    /**
     * Tests the setCodePrimeNuit2() method.
     *
     * @return void
     */
    public function testSetCodePrimeNuit2() {

        $obj = new Constantes();

        $obj->setCodePrimeNuit2("codePrimeNuit2");
        $this->assertEquals("codePrimeNuit2", $obj->getCodePrimeNuit2());
    }

    /**
     * Tests the setCodePrimePaniers() method.
     *
     * @return void
     */
    public function testSetCodePrimePaniers() {

        $obj = new Constantes();

        $obj->setCodePrimePaniers("codePrimePaniers");
        $this->assertEquals("codePrimePaniers", $obj->getCodePrimePaniers());
    }

    /**
     * Tests the setCodePrimeRS() method.
     *
     * @return void
     */
    public function testSetCodePrimeRS() {

        $obj = new Constantes();

        $obj->setCodePrimeRS("codePrimeRS");
        $this->assertEquals("codePrimeRS", $obj->getCodePrimeRS());
    }

    /**
     * Tests the setCodePrimeTP() method.
     *
     * @return void
     */
    public function testSetCodePrimeTP() {

        $obj = new Constantes();

        $obj->setCodePrimeTP("codePrimeTP");
        $this->assertEquals("codePrimeTP", $obj->getCodePrimeTP());
    }

    /**
     * Tests the setCodeRegJVNegDebut() method.
     *
     * @return void
     */
    public function testSetCodeRegJVNegDebut() {

        $obj = new Constantes();

        $obj->setCodeRegJVNegDebut("codeRegJVNegDebut");
        $this->assertEquals("codeRegJVNegDebut", $obj->getCodeRegJVNegDebut());
    }

    /**
     * Tests the setCodeRegJVNegFin() method.
     *
     * @return void
     */
    public function testSetCodeRegJVNegFin() {

        $obj = new Constantes();

        $obj->setCodeRegJVNegFin("codeRegJVNegFin");
        $this->assertEquals("codeRegJVNegFin", $obj->getCodeRegJVNegFin());
    }

    /**
     * Tests the setCodeRegJVPrestDebut() method.
     *
     * @return void
     */
    public function testSetCodeRegJVPrestDebut() {

        $obj = new Constantes();

        $obj->setCodeRegJVPrestDebut("codeRegJVPrestDebut");
        $this->assertEquals("codeRegJVPrestDebut", $obj->getCodeRegJVPrestDebut());
    }

    /**
     * Tests the setCodeRegJVPrestFin() method.
     *
     * @return void
     */
    public function testSetCodeRegJVPrestFin() {

        $obj = new Constantes();

        $obj->setCodeRegJVPrestFin("codeRegJVPrestFin");
        $this->assertEquals("codeRegJVPrestFin", $obj->getCodeRegJVPrestFin());
    }

    /**
     * Tests the setCodeTacheDefaut() method.
     *
     * @return void
     */
    public function testSetCodeTacheDefaut() {

        $obj = new Constantes();

        $obj->setCodeTacheDefaut("codeTacheDefaut");
        $this->assertEquals("codeTacheDefaut", $obj->getCodeTacheDefaut());
    }

    /**
     * Tests the setCollectifDef() method.
     *
     * @return void
     */
    public function testSetCollectifDef() {

        $obj = new Constantes();

        $obj->setCollectifDef("collectifDef");
        $this->assertEquals("collectifDef", $obj->getCollectifDef());
    }

    /**
     * Tests the setCollectifDefFournisseur() method.
     *
     * @return void
     */
    public function testSetCollectifDefFournisseur() {

        $obj = new Constantes();

        $obj->setCollectifDefFournisseur("collectifDefFournisseur");
        $this->assertEquals("collectifDefFournisseur", $obj->getCollectifDefFournisseur());
    }

    /**
     * Tests the setCommentaireJourneeSolidarite() method.
     *
     * @return void
     */
    public function testSetCommentaireJourneeSolidarite() {

        $obj = new Constantes();

        $obj->setCommentaireJourneeSolidarite("commentaireJourneeSolidarite");
        $this->assertEquals("commentaireJourneeSolidarite", $obj->getCommentaireJourneeSolidarite());
    }

    /**
     * Tests the setCompteCollectifAchat() method.
     *
     * @return void
     */
    public function testSetCompteCollectifAchat() {

        $obj = new Constantes();

        $obj->setCompteCollectifAchat("compteCollectifAchat");
        $this->assertEquals("compteCollectifAchat", $obj->getCompteCollectifAchat());
    }

    /**
     * Tests the setCompteCollectifVente() method.
     *
     * @return void
     */
    public function testSetCompteCollectifVente() {

        $obj = new Constantes();

        $obj->setCompteCollectifVente("compteCollectifVente");
        $this->assertEquals("compteCollectifVente", $obj->getCompteCollectifVente());
    }

    /**
     * Tests the setCompteEscompteCAExonere() method.
     *
     * @return void
     */
    public function testSetCompteEscompteCAExonere() {

        $obj = new Constantes();

        $obj->setCompteEscompteCAExonere("compteEscompteCAExonere");
        $this->assertEquals("compteEscompteCAExonere", $obj->getCompteEscompteCAExonere());
    }

    /**
     * Tests the setCompteEscompteSoumisTVA() method.
     *
     * @return void
     */
    public function testSetCompteEscompteSoumisTVA() {

        $obj = new Constantes();

        $obj->setCompteEscompteSoumisTVA("compteEscompteSoumisTVA");
        $this->assertEquals("compteEscompteSoumisTVA", $obj->getCompteEscompteSoumisTVA());
    }

    /**
     * Tests the setCompteTvaAchat() method.
     *
     * @return void
     */
    public function testSetCompteTvaAchat() {

        $obj = new Constantes();

        $obj->setCompteTvaAchat("compteTvaAchat");
        $this->assertEquals("compteTvaAchat", $obj->getCompteTvaAchat());
    }

    /**
     * Tests the setCompteTvaTaxeDEEE() method.
     *
     * @return void
     */
    public function testSetCompteTvaTaxeDEEE() {

        $obj = new Constantes();

        $obj->setCompteTvaTaxeDEEE("compteTvaTaxeDEEE");
        $this->assertEquals("compteTvaTaxeDEEE", $obj->getCompteTvaTaxeDEEE());
    }

    /**
     * Tests the setCompteTvaVente() method.
     *
     * @return void
     */
    public function testSetCompteTvaVente() {

        $obj = new Constantes();

        $obj->setCompteTvaVente("compteTvaVente");
        $this->assertEquals("compteTvaVente", $obj->getCompteTvaVente());
    }

    /**
     * Tests the setCompteVentilTaxeDEEE() method.
     *
     * @return void
     */
    public function testSetCompteVentilTaxeDEEE() {

        $obj = new Constantes();

        $obj->setCompteVentilTaxeDEEE("compteVentilTaxeDEEE");
        $this->assertEquals("compteVentilTaxeDEEE", $obj->getCompteVentilTaxeDEEE());
    }

    /**
     * Tests the setCompterSamediTfCPPaie() method.
     *
     * @return void
     */
    public function testSetCompterSamediTfCPPaie() {

        $obj = new Constantes();

        $obj->setCompterSamediTfCPPaie(true);
        $this->assertEquals(true, $obj->getCompterSamediTfCPPaie());
    }

    /**
     * Tests the setControlerCdeFrn() method.
     *
     * @return void
     */
    public function testSetControlerCdeFrn() {

        $obj = new Constantes();

        $obj->setControlerCdeFrn(true);
        $this->assertEquals(true, $obj->getControlerCdeFrn());
    }

    /**
     * Tests the setControlerChargesMensuelles() method.
     *
     * @return void
     */
    public function testSetControlerChargesMensuelles() {

        $obj = new Constantes();

        $obj->setControlerChargesMensuelles(true);
        $this->assertEquals(true, $obj->getControlerChargesMensuelles());
    }

    /**
     * Tests the setControlerCodeReg() method.
     *
     * @return void
     */
    public function testSetControlerCodeReg() {

        $obj = new Constantes();

        $obj->setControlerCodeReg(true);
        $this->assertEquals(true, $obj->getControlerCodeReg());
    }

    /**
     * Tests the setControlerDepHCMax() method.
     *
     * @return void
     */
    public function testSetControlerDepHCMax() {

        $obj = new Constantes();

        $obj->setControlerDepHCMax(true);
        $this->assertEquals(true, $obj->getControlerDepHCMax());
    }

    /**
     * Tests the setControlerDepHCPlusMois() method.
     *
     * @return void
     */
    public function testSetControlerDepHCPlusMois() {

        $obj = new Constantes();

        $obj->setControlerDepHCPlusMois(true);
        $this->assertEquals(true, $obj->getControlerDepHCPlusMois());
    }

    /**
     * Tests the setCreerAlertePaieDefEnPaie() method.
     *
     * @return void
     */
    public function testSetCreerAlertePaieDefEnPaie() {

        $obj = new Constantes();

        $obj->setCreerAlertePaieDefEnPaie(true);
        $this->assertEquals(true, $obj->getCreerAlertePaieDefEnPaie());
    }

    /**
     * Tests the setCtrlAutoCP() method.
     *
     * @return void
     */
    public function testSetCtrlAutoCP() {

        $obj = new Constantes();

        $obj->setCtrlAutoCP(true);
        $this->assertEquals(true, $obj->getCtrlAutoCP());
    }

    /**
     * Tests the setCtrlAutoCPAvecAnticipation() method.
     *
     * @return void
     */
    public function testSetCtrlAutoCPAvecAnticipation() {

        $obj = new Constantes();

        $obj->setCtrlAutoCPAvecAnticipation(true);
        $this->assertEquals(true, $obj->getCtrlAutoCPAvecAnticipation());
    }

    /**
     * Tests the setDateAppliGestionHeuresEnPlus() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAppliGestionHeuresEnPlus() {

        $obj = new Constantes();

        $obj->setDateAppliGestionHeuresEnPlus(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAppliGestionHeuresEnPlus());
    }

    /**
     * Tests the setDateJourneeSolidarite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateJourneeSolidarite() {

        $obj = new Constantes();

        $obj->setDateJourneeSolidarite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateJourneeSolidarite());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        $obj = new Constantes();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDecMoisPrepFact() method.
     *
     * @return void
     */
    public function testSetDecMoisPrepFact() {

        $obj = new Constantes();

        $obj->setDecMoisPrepFact(10);
        $this->assertEquals(10, $obj->getDecMoisPrepFact());
    }

    /**
     * Tests the setDernierCompteClient() method.
     *
     * @return void
     */
    public function testSetDernierCompteClient() {

        $obj = new Constantes();

        $obj->setDernierCompteClient("dernierCompteClient");
        $this->assertEquals("dernierCompteClient", $obj->getDernierCompteClient());
    }

    /**
     * Tests the setDernierCompteFrn() method.
     *
     * @return void
     */
    public function testSetDernierCompteFrn() {

        $obj = new Constantes();

        $obj->setDernierCompteFrn("dernierCompteFrn");
        $this->assertEquals("dernierCompteFrn", $obj->getDernierCompteFrn());
    }

    /**
     * Tests the setDiscr() method.
     *
     * @return void
     */
    public function testSetDiscr() {

        $obj = new Constantes();

        $obj->setDiscr("discr");
        $this->assertEquals("discr", $obj->getDiscr());
    }

    /**
     * Tests the setDossCompta() method.
     *
     * @return void
     */
    public function testSetDossCompta() {

        $obj = new Constantes();

        $obj->setDossCompta("dossCompta");
        $this->assertEquals("dossCompta", $obj->getDossCompta());
    }

    /**
     * Tests the setDossPaie() method.
     *
     * @return void
     */
    public function testSetDossPaie() {

        $obj = new Constantes();

        $obj->setDossPaie("dossPaie");
        $this->assertEquals("dossPaie", $obj->getDossPaie());
    }

    /**
     * Tests the setESCodeAbsEntree() method.
     *
     * @return void
     */
    public function testSetESCodeAbsEntree() {

        $obj = new Constantes();

        $obj->setESCodeAbsEntree("eSCodeAbsEntree");
        $this->assertEquals("eSCodeAbsEntree", $obj->getESCodeAbsEntree());
    }

    /**
     * Tests the setESCodeAbsSortie() method.
     *
     * @return void
     */
    public function testSetESCodeAbsSortie() {

        $obj = new Constantes();

        $obj->setESCodeAbsSortie("eSCodeAbsSortie");
        $this->assertEquals("eSCodeAbsSortie", $obj->getESCodeAbsSortie());
    }

    /**
     * Tests the setESHeuresReelles() method.
     *
     * @return void
     */
    public function testSetESHeuresReelles() {

        $obj = new Constantes();

        $obj->setESHeuresReelles(true);
        $this->assertEquals(true, $obj->getESHeuresReelles());
    }

    /**
     * Tests the setEtablissementsPaie() method.
     *
     * @return void
     */
    public function testSetEtablissementsPaie() {

        $obj = new Constantes();

        $obj->setEtablissementsPaie("etablissementsPaie");
        $this->assertEquals("etablissementsPaie", $obj->getEtablissementsPaie());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new Constantes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setEuro() method.
     *
     * @return void
     */
    public function testSetEuro() {

        $obj = new Constantes();

        $obj->setEuro(true);
        $this->assertEquals(true, $obj->getEuro());
    }

    /**
     * Tests the setFacturationProrataHeures() method.
     *
     * @return void
     */
    public function testSetFacturationProrataHeures() {

        $obj = new Constantes();

        $obj->setFacturationProrataHeures(true);
        $this->assertEquals(true, $obj->getFacturationProrataHeures());
    }

    /**
     * Tests the setFolioJA() method.
     *
     * @return void
     */
    public function testSetFolioJA() {

        $obj = new Constantes();

        $obj->setFolioJA("folioJA");
        $this->assertEquals("folioJA", $obj->getFolioJA());
    }

    /**
     * Tests the setFolioJVNegoce() method.
     *
     * @return void
     */
    public function testSetFolioJVNegoce() {

        $obj = new Constantes();

        $obj->setFolioJVNegoce("folioJVNegoce");
        $this->assertEquals("folioJVNegoce", $obj->getFolioJVNegoce());
    }

    /**
     * Tests the setFolioJVPrestation() method.
     *
     * @return void
     */
    public function testSetFolioJVPrestation() {

        $obj = new Constantes();

        $obj->setFolioJVPrestation("folioJVPrestation");
        $this->assertEquals("folioJVPrestation", $obj->getFolioJVPrestation());
    }

    /**
     * Tests the setGererNumCptChantier() method.
     *
     * @return void
     */
    public function testSetGererNumCptChantier() {

        $obj = new Constantes();

        $obj->setGererNumCptChantier(true);
        $this->assertEquals(true, $obj->getGererNumCptChantier());
    }

    /**
     * Tests the setGestionHCompl() method.
     *
     * @return void
     */
    public function testSetGestionHCompl() {

        $obj = new Constantes();

        $obj->setGestionHCompl(true);
        $this->assertEquals(true, $obj->getGestionHCompl());
    }

    /**
     * Tests the setGestionHSupMens() method.
     *
     * @return void
     */
    public function testSetGestionHSupMens() {

        $obj = new Constantes();

        $obj->setGestionHSupMens(true);
        $this->assertEquals(true, $obj->getGestionHSupMens());
    }

    /**
     * Tests the setGestionHSupMensuelle() method.
     *
     * @return void
     */
    public function testSetGestionHSupMensuelle() {

        $obj = new Constantes();

        $obj->setGestionHSupMensuelle(true);
        $this->assertEquals(true, $obj->getGestionHSupMensuelle());
    }

    /**
     * Tests the setGestionMajDim() method.
     *
     * @return void
     */
    public function testSetGestionMajDim() {

        $obj = new Constantes();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Tests the setGestionMajJF() method.
     *
     * @return void
     */
    public function testSetGestionMajJF() {

        $obj = new Constantes();

        $obj->setGestionMajJF("gestionMajJF");
        $this->assertEquals("gestionMajJF", $obj->getGestionMajJF());
    }

    /**
     * Tests the setGestionMajNuit() method.
     *
     * @return void
     */
    public function testSetGestionMajNuit() {

        $obj = new Constantes();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Tests the setGestionMultiDepot() method.
     *
     * @return void
     */
    public function testSetGestionMultiDepot() {

        $obj = new Constantes();

        $obj->setGestionMultiDepot(true);
        $this->assertEquals(true, $obj->getGestionMultiDepot());
    }

    /**
     * Tests the setGestionQuotas() method.
     *
     * @return void
     */
    public function testSetGestionQuotas() {

        $obj = new Constantes();

        $obj->setGestionQuotas(true);
        $this->assertEquals(true, $obj->getGestionQuotas());
    }

    /**
     * Tests the setGestionSpecifJF() method.
     *
     * @return void
     */
    public function testSetGestionSpecifJF() {

        $obj = new Constantes();

        $obj->setGestionSpecifJF(true);
        $this->assertEquals(true, $obj->getGestionSpecifJF());
    }

    /**
     * Tests the setGestionSpecifMajoJF() method.
     *
     * @return void
     */
    public function testSetGestionSpecifMajoJF() {

        $obj = new Constantes();

        $obj->setGestionSpecifMajoJF(true);
        $this->assertEquals(true, $obj->getGestionSpecifMajoJF());
    }

    /**
     * Tests the setHDebNuit() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHDebNuit() {

        $obj = new Constantes();

        $obj->setHDebNuit(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHDebNuit());
    }

    /**
     * Tests the setHDebNuitTravNuit() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHDebNuitTravNuit() {

        $obj = new Constantes();

        $obj->setHDebNuitTravNuit(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHDebNuitTravNuit());
    }

    /**
     * Tests the setHFinNuit() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHFinNuit() {

        $obj = new Constantes();

        $obj->setHFinNuit(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHFinNuit());
    }

    /**
     * Tests the setHFinNuitTravNuit() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHFinNuitTravNuit() {

        $obj = new Constantes();

        $obj->setHFinNuitTravNuit(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHFinNuitTravNuit());
    }

    /**
     * Tests the setHeuresAbsenceMensualise() method.
     *
     * @return void
     */
    public function testSetHeuresAbsenceMensualise() {

        $obj = new Constantes();

        $obj->setHeuresAbsenceMensualise(true);
        $this->assertEquals(true, $obj->getHeuresAbsenceMensualise());
    }

    /**
     * Tests the setHeuresRemplEgalesMensTitulaire() method.
     *
     * @return void
     */
    public function testSetHeuresRemplEgalesMensTitulaire() {

        $obj = new Constantes();

        $obj->setHeuresRemplEgalesMensTitulaire(true);
        $this->assertEquals(true, $obj->getHeuresRemplEgalesMensTitulaire());
    }

    /**
     * Tests the setIncrementCompteAuto() method.
     *
     * @return void
     */
    public function testSetIncrementCompteAuto() {

        $obj = new Constantes();

        $obj->setIncrementCompteAuto(10);
        $this->assertEquals(10, $obj->getIncrementCompteAuto());
    }

    /**
     * Tests the setLiaisonComptaWin() method.
     *
     * @return void
     */
    public function testSetLiaisonComptaWin() {

        $obj = new Constantes();

        $obj->setLiaisonComptaWin(true);
        $this->assertEquals(true, $obj->getLiaisonComptaWin());
    }

    /**
     * Tests the setLibCritereBool1() method.
     *
     * @return void
     */
    public function testSetLibCritereBool1() {

        $obj = new Constantes();

        $obj->setLibCritereBool1("libCritereBool1");
        $this->assertEquals("libCritereBool1", $obj->getLibCritereBool1());
    }

    /**
     * Tests the setLibCritereBool2() method.
     *
     * @return void
     */
    public function testSetLibCritereBool2() {

        $obj = new Constantes();

        $obj->setLibCritereBool2("libCritereBool2");
        $this->assertEquals("libCritereBool2", $obj->getLibCritereBool2());
    }

    /**
     * Tests the setLibCritereByte1() method.
     *
     * @return void
     */
    public function testSetLibCritereByte1() {

        $obj = new Constantes();

        $obj->setLibCritereByte1("libCritereByte1");
        $this->assertEquals("libCritereByte1", $obj->getLibCritereByte1());
    }

    /**
     * Tests the setLibCritereNum1() method.
     *
     * @return void
     */
    public function testSetLibCritereNum1() {

        $obj = new Constantes();

        $obj->setLibCritereNum1("libCritereNum1");
        $this->assertEquals("libCritereNum1", $obj->getLibCritereNum1());
    }

    /**
     * Tests the setLibCritereNum2() method.
     *
     * @return void
     */
    public function testSetLibCritereNum2() {

        $obj = new Constantes();

        $obj->setLibCritereNum2("libCritereNum2");
        $this->assertEquals("libCritereNum2", $obj->getLibCritereNum2());
    }

    /**
     * Tests the setLibCritereNum3() method.
     *
     * @return void
     */
    public function testSetLibCritereNum3() {

        $obj = new Constantes();

        $obj->setLibCritereNum3("libCritereNum3");
        $this->assertEquals("libCritereNum3", $obj->getLibCritereNum3());
    }

    /**
     * Tests the setLibCritereNum4() method.
     *
     * @return void
     */
    public function testSetLibCritereNum4() {

        $obj = new Constantes();

        $obj->setLibCritereNum4("libCritereNum4");
        $this->assertEquals("libCritereNum4", $obj->getLibCritereNum4());
    }

    /**
     * Tests the setLibCritereNum5() method.
     *
     * @return void
     */
    public function testSetLibCritereNum5() {

        $obj = new Constantes();

        $obj->setLibCritereNum5("libCritereNum5");
        $this->assertEquals("libCritereNum5", $obj->getLibCritereNum5());
    }

    /**
     * Tests the setLibCritereTab1() method.
     *
     * @return void
     */
    public function testSetLibCritereTab1() {

        $obj = new Constantes();

        $obj->setLibCritereTab1("libCritereTab1");
        $this->assertEquals("libCritereTab1", $obj->getLibCritereTab1());
    }

    /**
     * Tests the setLibCritereTab2() method.
     *
     * @return void
     */
    public function testSetLibCritereTab2() {

        $obj = new Constantes();

        $obj->setLibCritereTab2("libCritereTab2");
        $this->assertEquals("libCritereTab2", $obj->getLibCritereTab2());
    }

    /**
     * Tests the setLibCritereTab3() method.
     *
     * @return void
     */
    public function testSetLibCritereTab3() {

        $obj = new Constantes();

        $obj->setLibCritereTab3("libCritereTab3");
        $this->assertEquals("libCritereTab3", $obj->getLibCritereTab3());
    }

    /**
     * Tests the setLibCritereTab4() method.
     *
     * @return void
     */
    public function testSetLibCritereTab4() {

        $obj = new Constantes();

        $obj->setLibCritereTab4("libCritereTab4");
        $this->assertEquals("libCritereTab4", $obj->getLibCritereTab4());
    }

    /**
     * Tests the setLibCritereTab5() method.
     *
     * @return void
     */
    public function testSetLibCritereTab5() {

        $obj = new Constantes();

        $obj->setLibCritereTab5("libCritereTab5");
        $this->assertEquals("libCritereTab5", $obj->getLibCritereTab5());
    }

    /**
     * Tests the setLibCritereTxt1() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt1() {

        $obj = new Constantes();

        $obj->setLibCritereTxt1("libCritereTxt1");
        $this->assertEquals("libCritereTxt1", $obj->getLibCritereTxt1());
    }

    /**
     * Tests the setLibCritereTxt2() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt2() {

        $obj = new Constantes();

        $obj->setLibCritereTxt2("libCritereTxt2");
        $this->assertEquals("libCritereTxt2", $obj->getLibCritereTxt2());
    }

    /**
     * Tests the setLibCritereTxt3() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt3() {

        $obj = new Constantes();

        $obj->setLibCritereTxt3("libCritereTxt3");
        $this->assertEquals("libCritereTxt3", $obj->getLibCritereTxt3());
    }

    /**
     * Tests the setLibCritereTxt4() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt4() {

        $obj = new Constantes();

        $obj->setLibCritereTxt4("libCritereTxt4");
        $this->assertEquals("libCritereTxt4", $obj->getLibCritereTxt4());
    }

    /**
     * Tests the setLibCritereTxt5() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt5() {

        $obj = new Constantes();

        $obj->setLibCritereTxt5("libCritereTxt5");
        $this->assertEquals("libCritereTxt5", $obj->getLibCritereTxt5());
    }

    /**
     * Tests the setLibelleAutoAvoir() method.
     *
     * @return void
     */
    public function testSetLibelleAutoAvoir() {

        $obj = new Constantes();

        $obj->setLibelleAutoAvoir("libelleAutoAvoir");
        $this->assertEquals("libelleAutoAvoir", $obj->getLibelleAutoAvoir());
    }

    /**
     * Tests the setLibelleAutoFacture() method.
     *
     * @return void
     */
    public function testSetLibelleAutoFacture() {

        $obj = new Constantes();

        $obj->setLibelleAutoFacture("libelleAutoFacture");
        $this->assertEquals("libelleAutoFacture", $obj->getLibelleAutoFacture());
    }

    /**
     * Tests the setLibelleHeuresSurcroit() method.
     *
     * @return void
     */
    public function testSetLibelleHeuresSurcroit() {

        $obj = new Constantes();

        $obj->setLibelleHeuresSurcroit("libelleHeuresSurcroit");
        $this->assertEquals("libelleHeuresSurcroit", $obj->getLibelleHeuresSurcroit());
    }

    /**
     * Tests the setLibelleTransfert() method.
     *
     * @return void
     */
    public function testSetLibelleTransfert() {

        $obj = new Constantes();

        $obj->setLibelleTransfert("libelleTransfert");
        $this->assertEquals("libelleTransfert", $obj->getLibelleTransfert());
    }

    /**
     * Tests the setLibelleTransfertAchat() method.
     *
     * @return void
     */
    public function testSetLibelleTransfertAchat() {

        $obj = new Constantes();

        $obj->setLibelleTransfertAchat("libelleTransfertAchat");
        $this->assertEquals("libelleTransfertAchat", $obj->getLibelleTransfertAchat());
    }

    /**
     * Tests the setLivCdeFrnDepotUnique() method.
     *
     * @return void
     */
    public function testSetLivCdeFrnDepotUnique() {

        $obj = new Constantes();

        $obj->setLivCdeFrnDepotUnique(true);
        $this->assertEquals(true, $obj->getLivCdeFrnDepotUnique());
    }

    /**
     * Tests the setMAJDernierPassageBT() method.
     *
     * @return void
     */
    public function testSetMAJDernierPassageBT() {

        $obj = new Constantes();

        $obj->setMAJDernierPassageBT(true);
        $this->assertEquals(true, $obj->getMAJDernierPassageBT());
    }

    /**
     * Tests the setMailAttestations() method.
     *
     * @return void
     */
    public function testSetMailAttestations() {

        $obj = new Constantes();

        $obj->setMailAttestations("mailAttestations");
        $this->assertEquals("mailAttestations", $obj->getMailAttestations());
    }

    /**
     * Tests the setMailFactures() method.
     *
     * @return void
     */
    public function testSetMailFactures() {

        $obj = new Constantes();

        $obj->setMailFactures("mailFactures");
        $this->assertEquals("mailFactures", $obj->getMailFactures());
    }

    /**
     * Tests the setMajDernierPrixAchat() method.
     *
     * @return void
     */
    public function testSetMajDernierPrixAchat() {

        $obj = new Constantes();

        $obj->setMajDernierPrixAchat(true);
        $this->assertEquals(true, $obj->getMajDernierPrixAchat());
    }

    /**
     * Tests the setMajPAMP() method.
     *
     * @return void
     */
    public function testSetMajPAMP() {

        $obj = new Constantes();

        $obj->setMajPAMP(true);
        $this->assertEquals(true, $obj->getMajPAMP());
    }

    /**
     * Tests the setMajorationCascade() method.
     *
     * @return void
     */
    public function testSetMajorationCascade() {

        $obj = new Constantes();

        $obj->setMajorationCascade(true);
        $this->assertEquals(true, $obj->getMajorationCascade());
    }

    /**
     * Tests the setMajorationHPlus() method.
     *
     * @return void
     */
    public function testSetMajorationHPlus() {

        $obj = new Constantes();

        $obj->setMajorationHPlus("majorationHPlus");
        $this->assertEquals("majorationHPlus", $obj->getMajorationHPlus());
    }

    /**
     * Tests the setMargeNiveauEdition() method.
     *
     * @return void
     */
    public function testSetMargeNiveauEdition() {

        $obj = new Constantes();

        $obj->setMargeNiveauEdition("margeNiveauEdition");
        $this->assertEquals("margeNiveauEdition", $obj->getMargeNiveauEdition());
    }

    /**
     * Tests the setMargePourcentCharge() method.
     *
     * @return void
     */
    public function testSetMargePourcentCharge() {

        $obj = new Constantes();

        $obj->setMargePourcentCharge(10.092018);
        $this->assertEquals(10.092018, $obj->getMargePourcentCharge());
    }

    /**
     * Tests the setMargeSalInspProrataCA() method.
     *
     * @return void
     */
    public function testSetMargeSalInspProrataCA() {

        $obj = new Constantes();

        $obj->setMargeSalInspProrataCA(true);
        $this->assertEquals(true, $obj->getMargeSalInspProrataCA());
    }

    /**
     * Tests the setMensualisationTache() method.
     *
     * @return void
     */
    public function testSetMensualisationTache() {

        $obj = new Constantes();

        $obj->setMensualisationTache(true);
        $this->assertEquals(true, $obj->getMensualisationTache());
    }

    /**
     * Tests the setModeCalculPropositionCde() method.
     *
     * @return void
     */
    public function testSetModeCalculPropositionCde() {

        $obj = new Constantes();

        $obj->setModeCalculPropositionCde("modeCalculPropositionCde");
        $this->assertEquals("modeCalculPropositionCde", $obj->getModeCalculPropositionCde());
    }

    /**
     * Tests the setModeleDevis() method.
     *
     * @return void
     */
    public function testSetModeleDevis() {

        $obj = new Constantes();

        $obj->setModeleDevis("modeleDevis");
        $this->assertEquals("modeleDevis", $obj->getModeleDevis());
    }

    /**
     * Tests the setModeleDevisTech() method.
     *
     * @return void
     */
    public function testSetModeleDevisTech() {

        $obj = new Constantes();

        $obj->setModeleDevisTech("modeleDevisTech");
        $this->assertEquals("modeleDevisTech", $obj->getModeleDevisTech());
    }

    /**
     * Tests the setModeleFacture() method.
     *
     * @return void
     */
    public function testSetModeleFacture() {

        $obj = new Constantes();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Tests the setMtCptaNegatif() method.
     *
     * @return void
     */
    public function testSetMtCptaNegatif() {

        $obj = new Constantes();

        $obj->setMtCptaNegatif(true);
        $this->assertEquals(true, $obj->getMtCptaNegatif());
    }

    /**
     * Tests the setNDerDocument() method.
     *
     * @return void
     */
    public function testSetNDerDocument() {

        $obj = new Constantes();

        $obj->setNDerDocument(10);
        $this->assertEquals(10, $obj->getNDerDocument());
    }

    /**
     * Tests the setNbCaracteresLigneFact() method.
     *
     * @return void
     */
    public function testSetNbCaracteresLigneFact() {

        $obj = new Constantes();

        $obj->setNbCaracteresLigneFact("nbCaracteresLigneFact");
        $this->assertEquals("nbCaracteresLigneFact", $obj->getNbCaracteresLigneFact());
    }

    /**
     * Tests the setNbDecimalesPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetNbDecimalesPrixUnitaire() {

        $obj = new Constantes();

        $obj->setNbDecimalesPrixUnitaire("nbDecimalesPrixUnitaire");
        $this->assertEquals("nbDecimalesPrixUnitaire", $obj->getNbDecimalesPrixUnitaire());
    }

    /**
     * Tests the setNbDecimalesQuantite() method.
     *
     * @return void
     */
    public function testSetNbDecimalesQuantite() {

        $obj = new Constantes();

        $obj->setNbDecimalesQuantite("nbDecimalesQuantite");
        $this->assertEquals("nbDecimalesQuantite", $obj->getNbDecimalesQuantite());
    }

    /**
     * Tests the setNbEntiersPrixUnitaire() method.
     *
     * @return void
     */
    public function testSetNbEntiersPrixUnitaire() {

        $obj = new Constantes();

        $obj->setNbEntiersPrixUnitaire("nbEntiersPrixUnitaire");
        $this->assertEquals("nbEntiersPrixUnitaire", $obj->getNbEntiersPrixUnitaire());
    }

    /**
     * Tests the setNbEntiersQuantite() method.
     *
     * @return void
     */
    public function testSetNbEntiersQuantite() {

        $obj = new Constantes();

        $obj->setNbEntiersQuantite("nbEntiersQuantite");
        $this->assertEquals("nbEntiersQuantite", $obj->getNbEntiersQuantite());
    }

    /**
     * Tests the setNbJourCpAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCpAcquis() {

        $obj = new Constantes();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests the setNbJoursAbsProratisationDCP() method.
     *
     * @return void
     */
    public function testSetNbJoursAbsProratisationDCP() {

        $obj = new Constantes();

        $obj->setNbJoursAbsProratisationDCP(10);
        $this->assertEquals(10, $obj->getNbJoursAbsProratisationDCP());
    }

    /**
     * Tests the setNbMoisConsecutifs() method.
     *
     * @return void
     */
    public function testSetNbMoisConsecutifs() {

        $obj = new Constantes();

        $obj->setNbMoisConsecutifs(10);
        $this->assertEquals(10, $obj->getNbMoisConsecutifs());
    }

    /**
     * Tests the setNomFactNbLignes() method.
     *
     * @return void
     */
    public function testSetNomFactNbLignes() {

        $obj = new Constantes();

        $obj->setNomFactNbLignes("nomFactNbLignes");
        $this->assertEquals("nomFactNbLignes", $obj->getNomFactNbLignes());
    }

    /**
     * Tests the setNomFichierAsciiAchat() method.
     *
     * @return void
     */
    public function testSetNomFichierAsciiAchat() {

        $obj = new Constantes();

        $obj->setNomFichierAsciiAchat("nomFichierAsciiAchat");
        $this->assertEquals("nomFichierAsciiAchat", $obj->getNomFichierAsciiAchat());
    }

    /**
     * Tests the setNomFichierAsciiVente() method.
     *
     * @return void
     */
    public function testSetNomFichierAsciiVente() {

        $obj = new Constantes();

        $obj->setNomFichierAsciiVente("nomFichierAsciiVente");
        $this->assertEquals("nomFichierAsciiVente", $obj->getNomFichierAsciiVente());
    }

    /**
     * Tests the setNote0NonConforme() method.
     *
     * @return void
     */
    public function testSetNote0NonConforme() {

        $obj = new Constantes();

        $obj->setNote0NonConforme(true);
        $this->assertEquals(true, $obj->getNote0NonConforme());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new Constantes();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumCritereBTNum1() method.
     *
     * @return void
     */
    public function testSetNumCritereBTNum1() {

        $obj = new Constantes();

        $obj->setNumCritereBTNum1("numCritereBTNum1");
        $this->assertEquals("numCritereBTNum1", $obj->getNumCritereBTNum1());
    }

    /**
     * Tests the setNumCritereBTNum2() method.
     *
     * @return void
     */
    public function testSetNumCritereBTNum2() {

        $obj = new Constantes();

        $obj->setNumCritereBTNum2("numCritereBTNum2");
        $this->assertEquals("numCritereBTNum2", $obj->getNumCritereBTNum2());
    }

    /**
     * Tests the setNumCritereChantierFiltre1() method.
     *
     * @return void
     */
    public function testSetNumCritereChantierFiltre1() {

        $obj = new Constantes();

        $obj->setNumCritereChantierFiltre1("numCritereChantierFiltre1");
        $this->assertEquals("numCritereChantierFiltre1", $obj->getNumCritereChantierFiltre1());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis() {

        $obj = new Constantes();

        $obj->setNumDevis(10);
        $this->assertEquals(10, $obj->getNumDevis());
    }

    /**
     * Tests the setNumFact() method.
     *
     * @return void
     */
    public function testSetNumFact() {

        $obj = new Constantes();

        $obj->setNumFact(10);
        $this->assertEquals(10, $obj->getNumFact());
    }

    /**
     * Tests the setNumFactVM() method.
     *
     * @return void
     */
    public function testSetNumFactVM() {

        $obj = new Constantes();

        $obj->setNumFactVM(10);
        $this->assertEquals(10, $obj->getNumFactVM());
    }

    /**
     * Tests the setNumeroFicheControle() method.
     *
     * @return void
     */
    public function testSetNumeroFicheControle() {

        $obj = new Constantes();

        $obj->setNumeroFicheControle(10);
        $this->assertEquals(10, $obj->getNumeroFicheControle());
    }

    /**
     * Tests the setPAParFournisseur() method.
     *
     * @return void
     */
    public function testSetPAParFournisseur() {

        $obj = new Constantes();

        $obj->setPAParFournisseur(true);
        $this->assertEquals(true, $obj->getPAParFournisseur());
    }

    /**
     * Tests the setPJEnvoiMail() method.
     *
     * @return void
     */
    public function testSetPJEnvoiMail() {

        $obj = new Constantes();

        $obj->setPJEnvoiMail("pJEnvoiMail");
        $this->assertEquals("pJEnvoiMail", $obj->getPJEnvoiMail());
    }

    /**
     * Tests the setPJEnvoiMailAttestation() method.
     *
     * @return void
     */
    public function testSetPJEnvoiMailAttestation() {

        $obj = new Constantes();

        $obj->setPJEnvoiMailAttestation("pJEnvoiMailAttestation");
        $this->assertEquals("pJEnvoiMailAttestation", $obj->getPJEnvoiMailAttestation());
    }

    /**
     * Tests the setPasNumCptParDossier() method.
     *
     * @return void
     */
    public function testSetPasNumCptParDossier() {

        $obj = new Constantes();

        $obj->setPasNumCptParDossier(true);
        $this->assertEquals(true, $obj->getPasNumCptParDossier());
    }

    /**
     * Tests the setPdfBT_Coefficient() method.
     *
     * @return void
     */
    public function testSetPdfBT_Coefficient() {

        $obj = new Constantes();

        $obj->setPdfBT_Coefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBT_Coefficient());
    }

    /**
     * Tests the setPdfBT_DatePassage() method.
     *
     * @return void
     */
    public function testSetPdfBT_DatePassage() {

        $obj = new Constantes();

        $obj->setPdfBT_DatePassage(true);
        $this->assertEquals(true, $obj->getPdfBT_DatePassage());
    }

    /**
     * Tests the setPdfBT_Descriptif() method.
     *
     * @return void
     */
    public function testSetPdfBT_Descriptif() {

        $obj = new Constantes();

        $obj->setPdfBT_Descriptif(true);
        $this->assertEquals(true, $obj->getPdfBT_Descriptif());
    }

    /**
     * Tests the setPdfBT_EmployesCorps() method.
     *
     * @return void
     */
    public function testSetPdfBT_EmployesCorps() {

        $obj = new Constantes();

        $obj->setPdfBT_EmployesCorps(true);
        $this->assertEquals(true, $obj->getPdfBT_EmployesCorps());
    }

    /**
     * Tests the setPdfBT_EmployesRef() method.
     *
     * @return void
     */
    public function testSetPdfBT_EmployesRef() {

        $obj = new Constantes();

        $obj->setPdfBT_EmployesRef(true);
        $this->assertEquals(true, $obj->getPdfBT_EmployesRef());
    }

    /**
     * Tests the setPdfBT_FacturerAlaValidation() method.
     *
     * @return void
     */
    public function testSetPdfBT_FacturerAlaValidation() {

        $obj = new Constantes();

        $obj->setPdfBT_FacturerAlaValidation(true);
        $this->assertEquals(true, $obj->getPdfBT_FacturerAlaValidation());
    }

    /**
     * Tests the setPdfBT_FormatSaisieQtePU() method.
     *
     * @return void
     */
    public function testSetPdfBT_FormatSaisieQtePU() {

        $obj = new Constantes();

        $obj->setPdfBT_FormatSaisieQtePU(true);
        $this->assertEquals(true, $obj->getPdfBT_FormatSaisieQtePU());
    }

    /**
     * Tests the setPdfBT_LibelleDate() method.
     *
     * @return void
     */
    public function testSetPdfBT_LibelleDate() {

        $obj = new Constantes();

        $obj->setPdfBT_LibelleDate("pdfBT_LibelleDate");
        $this->assertEquals("pdfBT_LibelleDate", $obj->getPdfBT_LibelleDate());
    }

    /**
     * Tests the setPdfBT_NomChantier() method.
     *
     * @return void
     */
    public function testSetPdfBT_NomChantier() {

        $obj = new Constantes();

        $obj->setPdfBT_NomChantier(true);
        $this->assertEquals(true, $obj->getPdfBT_NomChantier());
    }

    /**
     * Tests the setPdfBT_PeriodeValidite() method.
     *
     * @return void
     */
    public function testSetPdfBT_PeriodeValidite() {

        $obj = new Constantes();

        $obj->setPdfBT_PeriodeValidite(true);
        $this->assertEquals(true, $obj->getPdfBT_PeriodeValidite());
    }

    /**
     * Tests the setPdfBT_PrixAchat() method.
     *
     * @return void
     */
    public function testSetPdfBT_PrixAchat() {

        $obj = new Constantes();

        $obj->setPdfBT_PrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBT_PrixAchat());
    }

    /**
     * Tests the setPdfBT_ReprendreLibelleDate() method.
     *
     * @return void
     */
    public function testSetPdfBT_ReprendreLibelleDate() {

        $obj = new Constantes();

        $obj->setPdfBT_ReprendreLibelleDate(true);
        $this->assertEquals(true, $obj->getPdfBT_ReprendreLibelleDate());
    }

    /**
     * Tests the setPdfBT_TauxHoraire() method.
     *
     * @return void
     */
    public function testSetPdfBT_TauxHoraire() {

        $obj = new Constantes();

        $obj->setPdfBT_TauxHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getPdfBT_TauxHoraire());
    }

    /**
     * Tests the setPointBT_EmployesSortis() method.
     *
     * @return void
     */
    public function testSetPointBT_EmployesSortis() {

        $obj = new Constantes();

        $obj->setPointBT_EmployesSortis(true);
        $this->assertEquals(true, $obj->getPointBT_EmployesSortis());
    }

    /**
     * Tests the setPoste1() method.
     *
     * @return void
     */
    public function testSetPoste1() {

        $obj = new Constantes();

        $obj->setPoste1("poste1");
        $this->assertEquals("poste1", $obj->getPoste1());
    }

    /**
     * Tests the setPoste2() method.
     *
     * @return void
     */
    public function testSetPoste2() {

        $obj = new Constantes();

        $obj->setPoste2("poste2");
        $this->assertEquals("poste2", $obj->getPoste2());
    }

    /**
     * Tests the setPoste3() method.
     *
     * @return void
     */
    public function testSetPoste3() {

        $obj = new Constantes();

        $obj->setPoste3("poste3");
        $this->assertEquals("poste3", $obj->getPoste3());
    }

    /**
     * Tests the setPoste4() method.
     *
     * @return void
     */
    public function testSetPoste4() {

        $obj = new Constantes();

        $obj->setPoste4("poste4");
        $this->assertEquals("poste4", $obj->getPoste4());
    }

    /**
     * Tests the setPoste5() method.
     *
     * @return void
     */
    public function testSetPoste5() {

        $obj = new Constantes();

        $obj->setPoste5("poste5");
        $this->assertEquals("poste5", $obj->getPoste5());
    }

    /**
     * Tests the setPourcMajHCompl() method.
     *
     * @return void
     */
    public function testSetPourcMajHCompl() {

        $obj = new Constantes();

        $obj->setPourcMajHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl());
    }

    /**
     * Tests the setPourcMajHCompl2() method.
     *
     * @return void
     */
    public function testSetPourcMajHCompl2() {

        $obj = new Constantes();

        $obj->setPourcMajHCompl2(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMajHCompl2());
    }

    /**
     * Tests the setPourcentDepHCMax() method.
     *
     * @return void
     */
    public function testSetPourcentDepHCMax() {

        $obj = new Constantes();

        $obj->setPourcentDepHCMax(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHCMax());
    }

    /**
     * Tests the setPourcentDepHCPlusMois() method.
     *
     * @return void
     */
    public function testSetPourcentDepHCPlusMois() {

        $obj = new Constantes();

        $obj->setPourcentDepHCPlusMois(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentDepHCPlusMois());
    }

    /**
     * Tests the setPourcentageReposRemplacement() method.
     *
     * @return void
     */
    public function testSetPourcentageReposRemplacement() {

        $obj = new Constantes();

        $obj->setPourcentageReposRemplacement(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentageReposRemplacement());
    }

    /**
     * Tests the setPrefixe() method.
     *
     * @return void
     */
    public function testSetPrefixe() {

        $obj = new Constantes();

        $obj->setPrefixe("prefixe");
        $this->assertEquals("prefixe", $obj->getPrefixe());
    }

    /**
     * Tests the setPrefixeDevis() method.
     *
     * @return void
     */
    public function testSetPrefixeDevis() {

        $obj = new Constantes();

        $obj->setPrefixeDevis("prefixeDevis");
        $this->assertEquals("prefixeDevis", $obj->getPrefixeDevis());
    }

    /**
     * Tests the setPreparerChantierPretOnly() method.
     *
     * @return void
     */
    public function testSetPreparerChantierPretOnly() {

        $obj = new Constantes();

        $obj->setPreparerChantierPretOnly(true);
        $this->assertEquals(true, $obj->getPreparerChantierPretOnly());
    }

    /**
     * Tests the setPrixDefautAchat() method.
     *
     * @return void
     */
    public function testSetPrixDefautAchat() {

        $obj = new Constantes();

        $obj->setPrixDefautAchat(10);
        $this->assertEquals(10, $obj->getPrixDefautAchat());
    }

    /**
     * Tests the setPrixDefautEntreeDirecte() method.
     *
     * @return void
     */
    public function testSetPrixDefautEntreeDirecte() {

        $obj = new Constantes();

        $obj->setPrixDefautEntreeDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautEntreeDirecte());
    }

    /**
     * Tests the setPrixDefautInventaire() method.
     *
     * @return void
     */
    public function testSetPrixDefautInventaire() {

        $obj = new Constantes();

        $obj->setPrixDefautInventaire(10);
        $this->assertEquals(10, $obj->getPrixDefautInventaire());
    }

    /**
     * Tests the setPrixDefautSortieDirecte() method.
     *
     * @return void
     */
    public function testSetPrixDefautSortieDirecte() {

        $obj = new Constantes();

        $obj->setPrixDefautSortieDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautSortieDirecte());
    }

    /**
     * Tests the setPrixDefautVente() method.
     *
     * @return void
     */
    public function testSetPrixDefautVente() {

        $obj = new Constantes();

        $obj->setPrixDefautVente(10);
        $this->assertEquals(10, $obj->getPrixDefautVente());
    }

    /**
     * Tests the setProchainNumeroPJ() method.
     *
     * @return void
     */
    public function testSetProchainNumeroPJ() {

        $obj = new Constantes();

        $obj->setProchainNumeroPJ(10);
        $this->assertEquals(10, $obj->getProchainNumeroPJ());
    }

    /**
     * Tests the setProrataHeuresCreerLigne() method.
     *
     * @return void
     */
    public function testSetProrataHeuresCreerLigne() {

        $obj = new Constantes();

        $obj->setProrataHeuresCreerLigne(true);
        $this->assertEquals(true, $obj->getProrataHeuresCreerLigne());
    }

    /**
     * Tests the setProrataHeuresDesignationMoins() method.
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationMoins() {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationMoins("prorataHeuresDesignationMoins");
        $this->assertEquals("prorataHeuresDesignationMoins", $obj->getProrataHeuresDesignationMoins());
    }

    /**
     * Tests the setProrataHeuresDesignationPlus() method.
     *
     * @return void
     */
    public function testSetProrataHeuresDesignationPlus() {

        $obj = new Constantes();

        $obj->setProrataHeuresDesignationPlus("prorataHeuresDesignationPlus");
        $this->assertEquals("prorataHeuresDesignationPlus", $obj->getProrataHeuresDesignationPlus());
    }

    /**
     * Tests the setProrataHeuresOption() method.
     *
     * @return void
     */
    public function testSetProrataHeuresOption() {

        $obj = new Constantes();

        $obj->setProrataHeuresOption("prorataHeuresOption");
        $this->assertEquals("prorataHeuresOption", $obj->getProrataHeuresOption());
    }

    /**
     * Tests the setProvCPInfosEmp() method.
     *
     * @return void
     */
    public function testSetProvCPInfosEmp() {

        $obj = new Constantes();

        $obj->setProvCPInfosEmp(true);
        $this->assertEquals(true, $obj->getProvCPInfosEmp());
    }

    /**
     * Tests the setProvisionsCP() method.
     *
     * @return void
     */
    public function testSetProvisionsCP() {

        $obj = new Constantes();

        $obj->setProvisionsCP(true);
        $this->assertEquals(true, $obj->getProvisionsCP());
    }

    /**
     * Tests the setQualiteNbCriteres() method.
     *
     * @return void
     */
    public function testSetQualiteNbCriteres() {

        $obj = new Constantes();

        $obj->setQualiteNbCriteres("qualiteNbCriteres");
        $this->assertEquals("qualiteNbCriteres", $obj->getQualiteNbCriteres());
    }

    /**
     * Tests the setQualiteNbNotes() method.
     *
     * @return void
     */
    public function testSetQualiteNbNotes() {

        $obj = new Constantes();

        $obj->setQualiteNbNotes("qualiteNbNotes");
        $this->assertEquals("qualiteNbNotes", $obj->getQualiteNbNotes());
    }

    /**
     * Tests the setQualiteSatisfactionGenerale() method.
     *
     * @return void
     */
    public function testSetQualiteSatisfactionGenerale() {

        $obj = new Constantes();

        $obj->setQualiteSatisfactionGenerale(true);
        $this->assertEquals(true, $obj->getQualiteSatisfactionGenerale());
    }

    /**
     * Tests the setRTFdansFactDev() method.
     *
     * @return void
     */
    public function testSetRTFdansFactDev() {

        $obj = new Constantes();

        $obj->setRTFdansFactDev(true);
        $this->assertEquals(true, $obj->getRTFdansFactDev());
    }

    /**
     * Tests the setReferenceMensuContratProprete() method.
     *
     * @return void
     */
    public function testSetReferenceMensuContratProprete() {

        $obj = new Constantes();

        $obj->setReferenceMensuContratProprete(true);
        $this->assertEquals(true, $obj->getReferenceMensuContratProprete());
    }

    /**
     * Tests the setRemplacantAbsJFPasAuto() method.
     *
     * @return void
     */
    public function testSetRemplacantAbsJFPasAuto() {

        $obj = new Constantes();

        $obj->setRemplacantAbsJFPasAuto(true);
        $this->assertEquals(true, $obj->getRemplacantAbsJFPasAuto());
    }

    /**
     * Tests the setRemplacantTravaillePasJF() method.
     *
     * @return void
     */
    public function testSetRemplacantTravaillePasJF() {

        $obj = new Constantes();

        $obj->setRemplacantTravaillePasJF(true);
        $this->assertEquals(true, $obj->getRemplacantTravaillePasJF());
    }

    /**
     * Tests the setRemplacementHCJF() method.
     *
     * @return void
     */
    public function testSetRemplacementHCJF() {

        $obj = new Constantes();

        $obj->setRemplacementHCJF(true);
        $this->assertEquals(true, $obj->getRemplacementHCJF());
    }

    /**
     * Tests the setReposCompensateurPourTravailleurNuit() method.
     *
     * @return void
     */
    public function testSetReposCompensateurPourTravailleurNuit() {

        $obj = new Constantes();

        $obj->setReposCompensateurPourTravailleurNuit(true);
        $this->assertEquals(true, $obj->getReposCompensateurPourTravailleurNuit());
    }

    /**
     * Tests the setSaisirAbsencesSurHC() method.
     *
     * @return void
     */
    public function testSetSaisirAbsencesSurHC() {

        $obj = new Constantes();

        $obj->setSaisirAbsencesSurHC(true);
        $this->assertEquals(true, $obj->getSaisirAbsencesSurHC());
    }

    /**
     * Tests the setSaisirCodeChantierAchat() method.
     *
     * @return void
     */
    public function testSetSaisirCodeChantierAchat() {

        $obj = new Constantes();

        $obj->setSaisirCodeChantierAchat(true);
        $this->assertEquals(true, $obj->getSaisirCodeChantierAchat());
    }

    /**
     * Tests the setSaisirNumBT() method.
     *
     * @return void
     */
    public function testSetSaisirNumBT() {

        $obj = new Constantes();

        $obj->setSaisirNumBT(true);
        $this->assertEquals(true, $obj->getSaisirNumBT());
    }

    /**
     * Tests the setServicesPaie() method.
     *
     * @return void
     */
    public function testSetServicesPaie() {

        $obj = new Constantes();

        $obj->setServicesPaie("servicesPaie");
        $this->assertEquals("servicesPaie", $obj->getServicesPaie());
    }

    /**
     * Tests the setSeuilMajoHCompl() method.
     *
     * @return void
     */
    public function testSetSeuilMajoHCompl() {

        $obj = new Constantes();

        $obj->setSeuilMajoHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilMajoHCompl());
    }

    /**
     * Tests the setTauxEscompte() method.
     *
     * @return void
     */
    public function testSetTauxEscompte() {

        $obj = new Constantes();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests the setTauxMajoHC33() method.
     *
     * @return void
     */
    public function testSetTauxMajoHC33() {

        $obj = new Constantes();

        $obj->setTauxMajoHC33(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajoHC33());
    }

    /**
     * Tests the setTauxMajorationHCompl() method.
     *
     * @return void
     */
    public function testSetTauxMajorationHCompl() {

        $obj = new Constantes();

        $obj->setTauxMajorationHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajorationHCompl());
    }

    /**
     * Tests the setTauxTvaAchat() method.
     *
     * @return void
     */
    public function testSetTauxTvaAchat() {

        $obj = new Constantes();

        $obj->setTauxTvaAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaAchat());
    }

    /**
     * Tests the setTauxTvaTaxeDEEE() method.
     *
     * @return void
     */
    public function testSetTauxTvaTaxeDEEE() {

        $obj = new Constantes();

        $obj->setTauxTvaTaxeDEEE(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxeDEEE());
    }

    /**
     * Tests the setTauxTvaVente() method.
     *
     * @return void
     */
    public function testSetTauxTvaVente() {

        $obj = new Constantes();

        $obj->setTauxTvaVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaVente());
    }

    /**
     * Tests the setTypeRemplDefaut() method.
     *
     * @return void
     */
    public function testSetTypeRemplDefaut() {

        $obj = new Constantes();

        $obj->setTypeRemplDefaut("typeRemplDefaut");
        $this->assertEquals("typeRemplDefaut", $obj->getTypeRemplDefaut());
    }

    /**
     * Tests the setTypeTransfertVente() method.
     *
     * @return void
     */
    public function testSetTypeTransfertVente() {

        $obj = new Constantes();

        $obj->setTypeTransfertVente("typeTransfertVente");
        $this->assertEquals("typeTransfertVente", $obj->getTypeTransfertVente());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new Constantes();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }

    /**
     * Tests the setUtiliserStockMini() method.
     *
     * @return void
     */
    public function testSetUtiliserStockMini() {

        $obj = new Constantes();

        $obj->setUtiliserStockMini(true);
        $this->assertEquals(true, $obj->getUtiliserStockMini());
    }

    /**
     * Tests the setVisualiserPointageBTValides() method.
     *
     * @return void
     */
    public function testSetVisualiserPointageBTValides() {

        $obj = new Constantes();

        $obj->setVisualiserPointageBTValides(true);
        $this->assertEquals(true, $obj->getVisualiserPointageBTValides());
    }
}
