<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\ConstantesEntreprise;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Constantes entreprise model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class ConstantesEntrepriseTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstantesEntreprise();

        $this->assertNull($obj->getAbsenceExtra());
        $this->assertNull($obj->getActiverPointageQWS());
        $this->assertNull($obj->getAdhesionTdsNorme());
        $this->assertNull($obj->getAffaire());
        $this->assertNull($obj->getAffectationTaux27());
        $this->assertNull($obj->getAnalytiqueEmploye());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getArchivageActif());
        $this->assertNull($obj->getAttestAuto());
        $this->assertNull($obj->getBeneficieCICE());
        $this->assertNull($obj->getBrutalSalMinConv());
        $this->assertNull($obj->getCICEPjMailCliDucsEdi());
        $this->assertNull($obj->getCalculAutoHTheorique());
        $this->assertNull($obj->getCertifAuto());
        $this->assertNull($obj->getChequesEuro());
        $this->assertNull($obj->getChoixEditionChequeTC());
        $this->assertNull($obj->getCleAcces1());
        $this->assertNull($obj->getClePortable());
        $this->assertNull($obj->getCodeOrgBTPDADSU());
        $this->assertNull($obj->getCollaborateuriPaie());
        $this->assertNull($obj->getCompression());
        $this->assertNull($obj->getCompteGainEuro());
        $this->assertNull($obj->getComptePerteEuro());
        $this->assertNull($obj->getCptaElitEuros());
        $this->assertNull($obj->getCtrlAutoCP());
        $this->assertNull($obj->getCtrlAutoCPAnticip());
        $this->assertNull($obj->getCtrlTauxBase());
        $this->assertNull($obj->getDADSDernierChoixGestionAEN());
        $this->assertNull($obj->getDADSTypeGestionAEN());
        $this->assertNull($obj->getDADSUNumAgrANSP());
        $this->assertNull($obj->getDADSURefDec());
        $this->assertNull($obj->getDASTypeDecl());
        $this->assertNull($obj->getDASTypeDeclDetail());
        $this->assertNull($obj->getDateDp());
        $this->assertNull($obj->getDebutPeriodeDAS());
        $this->assertNull($obj->getDebutPeriodeHistoDAS());
        $this->assertNull($obj->getDeductionHSupFillon());
        $this->assertNull($obj->getDeduireHSupNonStructurelle());
        $this->assertNull($obj->getDernierIndiceBul());
        $this->assertNull($obj->getDestPointIrc());
        $this->assertNull($obj->getDestTriPoint());
        $this->assertNull($obj->getDossierProprete());
        $this->assertNull($obj->getDossierSurWeb());
        $this->assertNull($obj->getDsCodeCollab());
        $this->assertNull($obj->getDsDateRetour());
        $this->assertNull($obj->getDsDateSortie());
        $this->assertNull($obj->getDsFusion());
        $this->assertNull($obj->getDsTypeEdition());
        $this->assertNull($obj->getDtDebutPeriode());
        $this->assertNull($obj->getDtFinPeriode());
        $this->assertNull($obj->getDucsFrancEuro());
        $this->assertNull($obj->getEcrType());
        $this->assertNull($obj->getEdBordChoixModele());
        $this->assertNull($obj->getEdBordRuptureEmp());
        $this->assertNull($obj->getEdBordTypeImp());
        $this->assertNull($obj->getEdBordereau());
        $this->assertNull($obj->getEdBordereauPrep());
        $this->assertNull($obj->getEdBordereauPrepa());
        $this->assertNull($obj->getEdBulLastFax());
        $this->assertNull($obj->getEdBulLastMail());
        $this->assertNull($obj->getEdBulTypeSortie());
        $this->assertNull($obj->getEdCorrespondance());
        $this->assertNull($obj->getEdDUCSNbEx());
        $this->assertNull($obj->getEdDUCSOptBTP());
        $this->assertNull($obj->getEdDUCSTypeSortie());
        $this->assertNull($obj->getEdDucsAuto());
        $this->assertNull($obj->getEdHSupBonifQueMajo());
        $this->assertNull($obj->getEdHistoTriEmp());
        $this->assertNull($obj->getEdHistoTriEtablissement());
        $this->assertNull($obj->getEdHistoTriService());
        $this->assertNull($obj->getEdHistoType());
        $this->assertNull($obj->getEdImputComptable());
        $this->assertNull($obj->getEdTexte1());
        $this->assertNull($obj->getEdTexte2());
        $this->assertNull($obj->getEdTrtCptaLastFax());
        $this->assertNull($obj->getEdTrtCptaLastMail());
        $this->assertNull($obj->getEdTrtCptaSortie());
        $this->assertNull($obj->getEditQPXLAbsences());
        $this->assertNull($obj->getEditQPXLAcomptes());
        $this->assertNull($obj->getEditQPXLTriEmp());
        $this->assertNull($obj->getEditQPXLViderLib());
        $this->assertNull($obj->getEditerBulletinSTC());
        $this->assertNull($obj->getEditionChequeTC());
        $this->assertNull($obj->getEditionDate());
        $this->assertNull($obj->getEditionHeure());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEnteteSoldeTC());
        $this->assertNull($obj->getEtatControleDADSU());
        $this->assertNull($obj->getEtatCtrlNorme());
        $this->assertNull($obj->getEtatDAS());
        $this->assertNull($obj->getEtatDASRect());
        $this->assertNull($obj->getFichierUnique());
        $this->assertNull($obj->getFiltrerListeEmp());
        $this->assertNull($obj->getFinPeriodeDAS());
        $this->assertNull($obj->getFinPeriodeHistoDAS());
        $this->assertNull($obj->getFlagTraite());
        $this->assertNull($obj->getFlagTraite2());
        $this->assertNull($obj->getFlagTraite3());
        $this->assertNull($obj->getFormatFicVirement());
        $this->assertNull($obj->getGestNumBulletin());
        $this->assertNull($obj->getGestRepoCompens());
        $this->assertNull($obj->getGestTexte());
        $this->assertNull($obj->getGestionCoeff());
        $this->assertNull($obj->getGestionCoeffGrille());
        $this->assertNull($obj->getGestionExemplaire());
        $this->assertNull($obj->getGestionIntemperie());
        $this->assertNull($obj->getGestionNumeroEmployeAuto());
        $this->assertNull($obj->getGestionQPXL());
        $this->assertNull($obj->getGestionTDBilaterale());
        $this->assertNull($obj->getGestionTDSouDADSU());
        $this->assertNull($obj->getGroupeGI());
        $this->assertNull($obj->getHBonifInfluCassation());
        $this->assertNull($obj->getHSup1Structurelle());
        $this->assertNull($obj->getHSup2Structurelle());
        $this->assertNull($obj->getHSup3Structurelle());
        $this->assertNull($obj->getHSup4Structurelle());
        $this->assertNull($obj->getHSup5Structurelle());
        $this->assertNull($obj->getHeureSup2InfluCassation());
        $this->assertNull($obj->getHeureSup3InfluCassation());
        $this->assertNull($obj->getHeureSup4InfluCassation());
        $this->assertNull($obj->getHeureSup5InfluCassation());
        $this->assertNull($obj->getHeureSupInfluCassation());
        $this->assertNull($obj->getHeureTheoBaseTrav());
        $this->assertNull($obj->getIndemCpIntervientBrutal());
        $this->assertNull($obj->getJourDebutTransfert());
        $this->assertNull($obj->getJourFinTransfert());
        $this->assertNull($obj->getJrnFormat());
        $this->assertNull($obj->getJrnRegroupeAbs());
        $this->assertNull($obj->getJrnTri());
        $this->assertNull($obj->getJrnTriEtablissement());
        $this->assertNull($obj->getJrnTriService());
        $this->assertNull($obj->getJrnType());
        $this->assertNull($obj->getLiaisonProprete());
        $this->assertNull($obj->getLibArbitrage());
        $this->assertNull($obj->getLibBQCP());
        $this->assertNull($obj->getLibBaseConge());
        $this->assertNull($obj->getLibCachetAEM());
        $this->assertNull($obj->getLibCotisCNE());
        $this->assertNull($obj->getLibFinContrat());
        $this->assertNull($obj->getLibFinContratCNE());
        $this->assertNull($obj->getLibIndemCp());
        $this->assertNull($obj->getLibelleLibreVirement());
        $this->assertNull($obj->getLigneBulEuro());
        $this->assertNull($obj->getLignesTransport());
        $this->assertNull($obj->getMailBulletin());
        $this->assertNull($obj->getMailBulletinCle());
        $this->assertNull($obj->getMailBulletinPJ());
        $this->assertNull($obj->getMailCLiDucsEdi());
        $this->assertNull($obj->getMentionCp());
        $this->assertNull($obj->getMessageVu());
        $this->assertNull($obj->getMillesime_1());
        $this->assertNull($obj->getModePlanning());
        $this->assertNull($obj->getModeleApercu());
        $this->assertNull($obj->getModeleBonBleu());
        $this->assertNull($obj->getModeleBulletin());
        $this->assertNull($obj->getModeleCertif());
        $this->assertNull($obj->getModeleCertifTrav());
        $this->assertNull($obj->getModeleCheque());
        $this->assertNull($obj->getMoisClotureAn());
        $this->assertNull($obj->getNAttestAEM());
        $this->assertNull($obj->getNAttestAEMEDI());
        $this->assertNull($obj->getNAttestAEMX());
        $this->assertNull($obj->getNAttestAssedic());
        $this->assertNull($obj->getNAttestExtras());
        $this->assertNull($obj->getNAttestIjss());
        $this->assertNull($obj->getNAttestIjssAT());
        $this->assertNull($obj->getNCECongesSpectacles());
        $this->assertNull($obj->getNDerDocument());
        $this->assertNull($obj->getNapEuro());
        $this->assertNull($obj->getNbExemplaire());
        $this->assertNull($obj->getNouvParamRetraiteType());
        $this->assertNull($obj->getOptionsCalcAbs());
        $this->assertNull($obj->getOrdreLibelleHSup());
        $this->assertNull($obj->getPaieEuro());
        $this->assertNull($obj->getPartSalSeule());
        $this->assertNull($obj->getPasGestionIndiceBul());
        $this->assertNull($obj->getPasPrendreICCPFillon());
        $this->assertNull($obj->getPasSousTotSBase());
        $this->assertNull($obj->getPassage35HFait());
        $this->assertNull($obj->getPathVirement());
        $this->assertNull($obj->getPeriodeIPaie());
        $this->assertNull($obj->getPeriodePaie());
        $this->assertNull($obj->getPjMailCLiDucsEdi());
        $this->assertNull($obj->getPjMailCliCouponPaiement());
        $this->assertNull($obj->getPlafond());
        $this->assertNull($obj->getPortaFraisSanteCertifTrav());
        $this->assertNull($obj->getPortaPrevoyanceOblig());
        $this->assertNull($obj->getPreparationTDP());
        $this->assertNull($obj->getPresenceMin());
        $this->assertNull($obj->getProrataDifCertifTrav());
        $this->assertNull($obj->getRDLP_ASCII());
        $this->assertNull($obj->getRDLP_EMPLOYES());
        $this->assertNull($obj->getRazCommentaire());
        $this->assertNull($obj->getRazHSup());
        $this->assertNull($obj->getRefRemise());
        $this->assertNull($obj->getRefTrans());
        $this->assertNull($obj->getReferenceInterneVirement());
        $this->assertNull($obj->getRegroupLibEdBul());
        $this->assertNull($obj->getReportMinimum());
        $this->assertNull($obj->getRetraite97());
        $this->assertNull($obj->getSaisPlanEmpSem());
        $this->assertNull($obj->getSaisieIndiceBul());
        $this->assertNull($obj->getSautPage());
        $this->assertNull($obj->getSeuil());
        $this->assertNull($obj->getSeuilConting());
        $this->assertNull($obj->getStcAuto());
        $this->assertNull($obj->getTabBordTriEtablissement());
        $this->assertNull($obj->getTabBordTriService());
        $this->assertNull($obj->getTableauCharge());
        $this->assertNull($obj->getTdsAnnee());
        $this->assertNull($obj->getTdsEuro());
        $this->assertNull($obj->getTotGeneIsole());
        $this->assertNull($obj->getTotServiceIsole());
        $this->assertNull($obj->getTotalEtabIsole());
        $this->assertNull($obj->getTransRupture());
        $this->assertNull($obj->getTransTriEtablissement());
        $this->assertNull($obj->getTransfertTDSEmp());
        $this->assertNull($obj->getTriEmploye());
        $this->assertNull($obj->getTxSalDecote());
        $this->assertNull($obj->getTypeAbsSansSolde());
        $this->assertNull($obj->getTypeAgrementAEM());
        $this->assertNull($obj->getTypeBordereauPrepa());
        $this->assertNull($obj->getTypeBulletin());
        $this->assertNull($obj->getTypeDUE());
        $this->assertNull($obj->getTypeDossier());
        $this->assertNull($obj->getTypeEffectif());
        $this->assertNull($obj->getTypeFichBilat());
        $this->assertNull($obj->getTypeGestionBal());
        $this->assertNull($obj->getTypeModele());
        $this->assertNull($obj->getTypePrepDADSU());
        $this->assertNull($obj->getTypeSaisieAbs());
        $this->assertNull($obj->getTypeSaisieAbsence());
        $this->assertNull($obj->getTypeStc());
        $this->assertNull($obj->getTypeTauxIntemperie());
        $this->assertNull($obj->getTypeTri());
        $this->assertNull($obj->getTypeVirement());
        $this->assertNull($obj->getTypeVisuColSaisieBul());
        $this->assertNull($obj->getUtilisePdpQuadra());
        $this->assertNull($obj->getUtilisePdpQuadra2());
        $this->assertNull($obj->getValCpBulletin());
        $this->assertNull($obj->getValFiltreListeEmp());
        $this->assertNull($obj->getVersionControleDADSU());
        $this->assertNull($obj->getVirCodeEtab());
        $this->assertNull($obj->getVirCollectivite());
        $this->assertNull($obj->getVirComptableCentre());
        $this->assertNull($obj->getVirComptableSub());
        $this->assertNull($obj->getVirFonctionPublique());
        $this->assertNull($obj->getVirSeuil());
        $this->assertNull($obj->getVirTypeEtab());
        $this->assertNull($obj->getVirementCrLf());
        $this->assertNull($obj->getVirementsEuro());
        $this->assertNull($obj->getWebPrioritaire());
    }

    /**
     * Tests the setAbsenceExtra() method.
     *
     * @return void
     */
    public function testSetAbsenceExtra() {

        $obj = new ConstantesEntreprise();

        $obj->setAbsenceExtra("absenceExtra");
        $this->assertEquals("absenceExtra", $obj->getAbsenceExtra());
    }

    /**
     * Tests the setActiverPointageQWS() method.
     *
     * @return void
     */
    public function testSetActiverPointageQWS() {

        $obj = new ConstantesEntreprise();

        $obj->setActiverPointageQWS(true);
        $this->assertEquals(true, $obj->getActiverPointageQWS());
    }

    /**
     * Tests the setAdhesionTdsNorme() method.
     *
     * @return void
     */
    public function testSetAdhesionTdsNorme() {

        $obj = new ConstantesEntreprise();

        $obj->setAdhesionTdsNorme("adhesionTdsNorme");
        $this->assertEquals("adhesionTdsNorme", $obj->getAdhesionTdsNorme());
    }

    /**
     * Tests the setAffaire() method.
     *
     * @return void
     */
    public function testSetAffaire() {

        $obj = new ConstantesEntreprise();

        $obj->setAffaire("affaire");
        $this->assertEquals("affaire", $obj->getAffaire());
    }

    /**
     * Tests the setAffectationTaux27() method.
     *
     * @return void
     */
    public function testSetAffectationTaux27() {

        $obj = new ConstantesEntreprise();

        $obj->setAffectationTaux27(true);
        $this->assertEquals(true, $obj->getAffectationTaux27());
    }

    /**
     * Tests the setAnalytiqueEmploye() method.
     *
     * @return void
     */
    public function testSetAnalytiqueEmploye() {

        $obj = new ConstantesEntreprise();

        $obj->setAnalytiqueEmploye(true);
        $this->assertEquals(true, $obj->getAnalytiqueEmploye());
    }

    /**
     * Tests the setArbitrageAuto() method.
     *
     * @return void
     */
    public function testSetArbitrageAuto() {

        $obj = new ConstantesEntreprise();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Tests the setArchivageActif() method.
     *
     * @return void
     */
    public function testSetArchivageActif() {

        $obj = new ConstantesEntreprise();

        $obj->setArchivageActif(true);
        $this->assertEquals(true, $obj->getArchivageActif());
    }

    /**
     * Tests the setAttestAuto() method.
     *
     * @return void
     */
    public function testSetAttestAuto() {

        $obj = new ConstantesEntreprise();

        $obj->setAttestAuto(true);
        $this->assertEquals(true, $obj->getAttestAuto());
    }

    /**
     * Tests the setBeneficieCICE() method.
     *
     * @return void
     */
    public function testSetBeneficieCICE() {

        $obj = new ConstantesEntreprise();

        $obj->setBeneficieCICE(true);
        $this->assertEquals(true, $obj->getBeneficieCICE());
    }

    /**
     * Tests the setBrutalSalMinConv() method.
     *
     * @return void
     */
    public function testSetBrutalSalMinConv() {

        $obj = new ConstantesEntreprise();

        $obj->setBrutalSalMinConv(true);
        $this->assertEquals(true, $obj->getBrutalSalMinConv());
    }

    /**
     * Tests the setCICEPjMailCliDucsEdi() method.
     *
     * @return void
     */
    public function testSetCICEPjMailCliDucsEdi() {

        $obj = new ConstantesEntreprise();

        $obj->setCICEPjMailCliDucsEdi(true);
        $this->assertEquals(true, $obj->getCICEPjMailCliDucsEdi());
    }

    /**
     * Tests the setCalculAutoHTheorique() method.
     *
     * @return void
     */
    public function testSetCalculAutoHTheorique() {

        $obj = new ConstantesEntreprise();

        $obj->setCalculAutoHTheorique(true);
        $this->assertEquals(true, $obj->getCalculAutoHTheorique());
    }

    /**
     * Tests the setCertifAuto() method.
     *
     * @return void
     */
    public function testSetCertifAuto() {

        $obj = new ConstantesEntreprise();

        $obj->setCertifAuto(true);
        $this->assertEquals(true, $obj->getCertifAuto());
    }

    /**
     * Tests the setChequesEuro() method.
     *
     * @return void
     */
    public function testSetChequesEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setChequesEuro("chequesEuro");
        $this->assertEquals("chequesEuro", $obj->getChequesEuro());
    }

    /**
     * Tests the setChoixEditionChequeTC() method.
     *
     * @return void
     */
    public function testSetChoixEditionChequeTC() {

        $obj = new ConstantesEntreprise();

        $obj->setChoixEditionChequeTC(true);
        $this->assertEquals(true, $obj->getChoixEditionChequeTC());
    }

    /**
     * Tests the setCleAcces1() method.
     *
     * @return void
     */
    public function testSetCleAcces1() {

        $obj = new ConstantesEntreprise();

        $obj->setCleAcces1("cleAcces1");
        $this->assertEquals("cleAcces1", $obj->getCleAcces1());
    }

    /**
     * Tests the setClePortable() method.
     *
     * @return void
     */
    public function testSetClePortable() {

        $obj = new ConstantesEntreprise();

        $obj->setClePortable("clePortable");
        $this->assertEquals("clePortable", $obj->getClePortable());
    }

    /**
     * Tests the setCodeOrgBTPDADSU() method.
     *
     * @return void
     */
    public function testSetCodeOrgBTPDADSU() {

        $obj = new ConstantesEntreprise();

        $obj->setCodeOrgBTPDADSU("codeOrgBTPDADSU");
        $this->assertEquals("codeOrgBTPDADSU", $obj->getCodeOrgBTPDADSU());
    }

    /**
     * Tests the setCollaborateuriPaie() method.
     *
     * @return void
     */
    public function testSetCollaborateuriPaie() {

        $obj = new ConstantesEntreprise();

        $obj->setCollaborateuriPaie("collaborateuriPaie");
        $this->assertEquals("collaborateuriPaie", $obj->getCollaborateuriPaie());
    }

    /**
     * Tests the setCompression() method.
     *
     * @return void
     */
    public function testSetCompression() {

        $obj = new ConstantesEntreprise();

        $obj->setCompression(true);
        $this->assertEquals(true, $obj->getCompression());
    }

    /**
     * Tests the setCompteGainEuro() method.
     *
     * @return void
     */
    public function testSetCompteGainEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setCompteGainEuro("compteGainEuro");
        $this->assertEquals("compteGainEuro", $obj->getCompteGainEuro());
    }

    /**
     * Tests the setComptePerteEuro() method.
     *
     * @return void
     */
    public function testSetComptePerteEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setComptePerteEuro("comptePerteEuro");
        $this->assertEquals("comptePerteEuro", $obj->getComptePerteEuro());
    }

    /**
     * Tests the setCptaElitEuros() method.
     *
     * @return void
     */
    public function testSetCptaElitEuros() {

        $obj = new ConstantesEntreprise();

        $obj->setCptaElitEuros(true);
        $this->assertEquals(true, $obj->getCptaElitEuros());
    }

    /**
     * Tests the setCtrlAutoCP() method.
     *
     * @return void
     */
    public function testSetCtrlAutoCP() {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlAutoCP(true);
        $this->assertEquals(true, $obj->getCtrlAutoCP());
    }

    /**
     * Tests the setCtrlAutoCPAnticip() method.
     *
     * @return void
     */
    public function testSetCtrlAutoCPAnticip() {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlAutoCPAnticip(true);
        $this->assertEquals(true, $obj->getCtrlAutoCPAnticip());
    }

    /**
     * Tests the setCtrlTauxBase() method.
     *
     * @return void
     */
    public function testSetCtrlTauxBase() {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlTauxBase(true);
        $this->assertEquals(true, $obj->getCtrlTauxBase());
    }

    /**
     * Tests the setDADSDernierChoixGestionAEN() method.
     *
     * @return void
     */
    public function testSetDADSDernierChoixGestionAEN() {

        $obj = new ConstantesEntreprise();

        $obj->setDADSDernierChoixGestionAEN("dADSDernierChoixGestionAEN");
        $this->assertEquals("dADSDernierChoixGestionAEN", $obj->getDADSDernierChoixGestionAEN());
    }

    /**
     * Tests the setDADSTypeGestionAEN() method.
     *
     * @return void
     */
    public function testSetDADSTypeGestionAEN() {

        $obj = new ConstantesEntreprise();

        $obj->setDADSTypeGestionAEN("dADSTypeGestionAEN");
        $this->assertEquals("dADSTypeGestionAEN", $obj->getDADSTypeGestionAEN());
    }

    /**
     * Tests the setDADSUNumAgrANSP() method.
     *
     * @return void
     */
    public function testSetDADSUNumAgrANSP() {

        $obj = new ConstantesEntreprise();

        $obj->setDADSUNumAgrANSP("dADSUNumAgrANSP");
        $this->assertEquals("dADSUNumAgrANSP", $obj->getDADSUNumAgrANSP());
    }

    /**
     * Tests the setDADSURefDec() method.
     *
     * @return void
     */
    public function testSetDADSURefDec() {

        $obj = new ConstantesEntreprise();

        $obj->setDADSURefDec("dADSURefDec");
        $this->assertEquals("dADSURefDec", $obj->getDADSURefDec());
    }

    /**
     * Tests the setDASTypeDecl() method.
     *
     * @return void
     */
    public function testSetDASTypeDecl() {

        $obj = new ConstantesEntreprise();

        $obj->setDASTypeDecl("dASTypeDecl");
        $this->assertEquals("dASTypeDecl", $obj->getDASTypeDecl());
    }

    /**
     * Tests the setDASTypeDeclDetail() method.
     *
     * @return void
     */
    public function testSetDASTypeDeclDetail() {

        $obj = new ConstantesEntreprise();

        $obj->setDASTypeDeclDetail("dASTypeDeclDetail");
        $this->assertEquals("dASTypeDeclDetail", $obj->getDASTypeDeclDetail());
    }

    /**
     * Tests the setDateDp() method.
     *
     * @return void
     */
    public function testSetDateDp() {

        $obj = new ConstantesEntreprise();

        $obj->setDateDp(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDp());
    }

    /**
     * Tests the setDebutPeriodeDAS() method.
     *
     * @return void
     */
    public function testSetDebutPeriodeDAS() {

        $obj = new ConstantesEntreprise();

        $obj->setDebutPeriodeDAS(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriodeDAS());
    }

    /**
     * Tests the setDebutPeriodeHistoDAS() method.
     *
     * @return void
     */
    public function testSetDebutPeriodeHistoDAS() {

        $obj = new ConstantesEntreprise();

        $obj->setDebutPeriodeHistoDAS(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriodeHistoDAS());
    }

    /**
     * Tests the setDeductionHSupFillon() method.
     *
     * @return void
     */
    public function testSetDeductionHSupFillon() {

        $obj = new ConstantesEntreprise();

        $obj->setDeductionHSupFillon(true);
        $this->assertEquals(true, $obj->getDeductionHSupFillon());
    }

    /**
     * Tests the setDeduireHSupNonStructurelle() method.
     *
     * @return void
     */
    public function testSetDeduireHSupNonStructurelle() {

        $obj = new ConstantesEntreprise();

        $obj->setDeduireHSupNonStructurelle(true);
        $this->assertEquals(true, $obj->getDeduireHSupNonStructurelle());
    }

    /**
     * Tests the setDernierIndiceBul() method.
     *
     * @return void
     */
    public function testSetDernierIndiceBul() {

        $obj = new ConstantesEntreprise();

        $obj->setDernierIndiceBul(10);
        $this->assertEquals(10, $obj->getDernierIndiceBul());
    }

    /**
     * Tests the setDestPointIrc() method.
     *
     * @return void
     */
    public function testSetDestPointIrc() {

        $obj = new ConstantesEntreprise();

        $obj->setDestPointIrc("destPointIrc");
        $this->assertEquals("destPointIrc", $obj->getDestPointIrc());
    }

    /**
     * Tests the setDestTriPoint() method.
     *
     * @return void
     */
    public function testSetDestTriPoint() {

        $obj = new ConstantesEntreprise();

        $obj->setDestTriPoint("destTriPoint");
        $this->assertEquals("destTriPoint", $obj->getDestTriPoint());
    }

    /**
     * Tests the setDossierProprete() method.
     *
     * @return void
     */
    public function testSetDossierProprete() {

        $obj = new ConstantesEntreprise();

        $obj->setDossierProprete("dossierProprete");
        $this->assertEquals("dossierProprete", $obj->getDossierProprete());
    }

    /**
     * Tests the setDossierSurWeb() method.
     *
     * @return void
     */
    public function testSetDossierSurWeb() {

        $obj = new ConstantesEntreprise();

        $obj->setDossierSurWeb(true);
        $this->assertEquals(true, $obj->getDossierSurWeb());
    }

    /**
     * Tests the setDsCodeCollab() method.
     *
     * @return void
     */
    public function testSetDsCodeCollab() {

        $obj = new ConstantesEntreprise();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Tests the setDsDateRetour() method.
     *
     * @return void
     */
    public function testSetDsDateRetour() {

        $obj = new ConstantesEntreprise();

        $obj->setDsDateRetour(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDsDateRetour());
    }

    /**
     * Tests the setDsDateSortie() method.
     *
     * @return void
     */
    public function testSetDsDateSortie() {

        $obj = new ConstantesEntreprise();

        $obj->setDsDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDsDateSortie());
    }

    /**
     * Tests the setDsFusion() method.
     *
     * @return void
     */
    public function testSetDsFusion() {

        $obj = new ConstantesEntreprise();

        $obj->setDsFusion("dsFusion");
        $this->assertEquals("dsFusion", $obj->getDsFusion());
    }

    /**
     * Tests the setDsTypeEdition() method.
     *
     * @return void
     */
    public function testSetDsTypeEdition() {

        $obj = new ConstantesEntreprise();

        $obj->setDsTypeEdition("dsTypeEdition");
        $this->assertEquals("dsTypeEdition", $obj->getDsTypeEdition());
    }

    /**
     * Tests the setDtDebutPeriode() method.
     *
     * @return void
     */
    public function testSetDtDebutPeriode() {

        $obj = new ConstantesEntreprise();

        $obj->setDtDebutPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebutPeriode());
    }

    /**
     * Tests the setDtFinPeriode() method.
     *
     * @return void
     */
    public function testSetDtFinPeriode() {

        $obj = new ConstantesEntreprise();

        $obj->setDtFinPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinPeriode());
    }

    /**
     * Tests the setDucsFrancEuro() method.
     *
     * @return void
     */
    public function testSetDucsFrancEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setDucsFrancEuro("ducsFrancEuro");
        $this->assertEquals("ducsFrancEuro", $obj->getDucsFrancEuro());
    }

    /**
     * Tests the setEcrType() method.
     *
     * @return void
     */
    public function testSetEcrType() {

        $obj = new ConstantesEntreprise();

        $obj->setEcrType("ecrType");
        $this->assertEquals("ecrType", $obj->getEcrType());
    }

    /**
     * Tests the setEdBordChoixModele() method.
     *
     * @return void
     */
    public function testSetEdBordChoixModele() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordChoixModele("edBordChoixModele");
        $this->assertEquals("edBordChoixModele", $obj->getEdBordChoixModele());
    }

    /**
     * Tests the setEdBordRuptureEmp() method.
     *
     * @return void
     */
    public function testSetEdBordRuptureEmp() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordRuptureEmp(true);
        $this->assertEquals(true, $obj->getEdBordRuptureEmp());
    }

    /**
     * Tests the setEdBordTypeImp() method.
     *
     * @return void
     */
    public function testSetEdBordTypeImp() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordTypeImp("edBordTypeImp");
        $this->assertEquals("edBordTypeImp", $obj->getEdBordTypeImp());
    }

    /**
     * Tests the setEdBordereau() method.
     *
     * @return void
     */
    public function testSetEdBordereau() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereau(true);
        $this->assertEquals(true, $obj->getEdBordereau());
    }

    /**
     * Tests the setEdBordereauPrep() method.
     *
     * @return void
     */
    public function testSetEdBordereauPrep() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereauPrep(true);
        $this->assertEquals(true, $obj->getEdBordereauPrep());
    }

    /**
     * Tests the setEdBordereauPrepa() method.
     *
     * @return void
     */
    public function testSetEdBordereauPrepa() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereauPrepa(true);
        $this->assertEquals(true, $obj->getEdBordereauPrepa());
    }

    /**
     * Tests the setEdBulLastFax() method.
     *
     * @return void
     */
    public function testSetEdBulLastFax() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulLastFax("edBulLastFax");
        $this->assertEquals("edBulLastFax", $obj->getEdBulLastFax());
    }

    /**
     * Tests the setEdBulLastMail() method.
     *
     * @return void
     */
    public function testSetEdBulLastMail() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulLastMail("edBulLastMail");
        $this->assertEquals("edBulLastMail", $obj->getEdBulLastMail());
    }

    /**
     * Tests the setEdBulTypeSortie() method.
     *
     * @return void
     */
    public function testSetEdBulTypeSortie() {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulTypeSortie("edBulTypeSortie");
        $this->assertEquals("edBulTypeSortie", $obj->getEdBulTypeSortie());
    }

    /**
     * Tests the setEdCorrespondance() method.
     *
     * @return void
     */
    public function testSetEdCorrespondance() {

        $obj = new ConstantesEntreprise();

        $obj->setEdCorrespondance(true);
        $this->assertEquals(true, $obj->getEdCorrespondance());
    }

    /**
     * Tests the setEdDUCSNbEx() method.
     *
     * @return void
     */
    public function testSetEdDUCSNbEx() {

        $obj = new ConstantesEntreprise();

        $obj->setEdDUCSNbEx("edDUCSNbEx");
        $this->assertEquals("edDUCSNbEx", $obj->getEdDUCSNbEx());
    }

    /**
     * Tests the setEdDUCSOptBTP() method.
     *
     * @return void
     */
    public function testSetEdDUCSOptBTP() {

        $obj = new ConstantesEntreprise();

        $obj->setEdDUCSOptBTP("edDUCSOptBTP");
        $this->assertEquals("edDUCSOptBTP", $obj->getEdDUCSOptBTP());
    }

    /**
     * Tests the setEdDUCSTypeSortie() method.
     *
     * @return void
     */
    public function testSetEdDUCSTypeSortie() {

        $obj = new ConstantesEntreprise();

        $obj->setEdDUCSTypeSortie("edDUCSTypeSortie");
        $this->assertEquals("edDUCSTypeSortie", $obj->getEdDUCSTypeSortie());
    }

    /**
     * Tests the setEdDucsAuto() method.
     *
     * @return void
     */
    public function testSetEdDucsAuto() {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsAuto(true);
        $this->assertEquals(true, $obj->getEdDucsAuto());
    }

    /**
     * Tests the setEdHSupBonifQueMajo() method.
     *
     * @return void
     */
    public function testSetEdHSupBonifQueMajo() {

        $obj = new ConstantesEntreprise();

        $obj->setEdHSupBonifQueMajo(true);
        $this->assertEquals(true, $obj->getEdHSupBonifQueMajo());
    }

    /**
     * Tests the setEdHistoTriEmp() method.
     *
     * @return void
     */
    public function testSetEdHistoTriEmp() {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriEmp("edHistoTriEmp");
        $this->assertEquals("edHistoTriEmp", $obj->getEdHistoTriEmp());
    }

    /**
     * Tests the setEdHistoTriEtablissement() method.
     *
     * @return void
     */
    public function testSetEdHistoTriEtablissement() {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriEtablissement(true);
        $this->assertEquals(true, $obj->getEdHistoTriEtablissement());
    }

    /**
     * Tests the setEdHistoTriService() method.
     *
     * @return void
     */
    public function testSetEdHistoTriService() {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriService(true);
        $this->assertEquals(true, $obj->getEdHistoTriService());
    }

    /**
     * Tests the setEdHistoType() method.
     *
     * @return void
     */
    public function testSetEdHistoType() {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoType("edHistoType");
        $this->assertEquals("edHistoType", $obj->getEdHistoType());
    }

    /**
     * Tests the setEdImputComptable() method.
     *
     * @return void
     */
    public function testSetEdImputComptable() {

        $obj = new ConstantesEntreprise();

        $obj->setEdImputComptable(true);
        $this->assertEquals(true, $obj->getEdImputComptable());
    }

    /**
     * Tests the setEdTexte1() method.
     *
     * @return void
     */
    public function testSetEdTexte1() {

        $obj = new ConstantesEntreprise();

        $obj->setEdTexte1("edTexte1");
        $this->assertEquals("edTexte1", $obj->getEdTexte1());
    }

    /**
     * Tests the setEdTexte2() method.
     *
     * @return void
     */
    public function testSetEdTexte2() {

        $obj = new ConstantesEntreprise();

        $obj->setEdTexte2("edTexte2");
        $this->assertEquals("edTexte2", $obj->getEdTexte2());
    }

    /**
     * Tests the setEdTrtCptaLastFax() method.
     *
     * @return void
     */
    public function testSetEdTrtCptaLastFax() {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaLastFax("edTrtCptaLastFax");
        $this->assertEquals("edTrtCptaLastFax", $obj->getEdTrtCptaLastFax());
    }

    /**
     * Tests the setEdTrtCptaLastMail() method.
     *
     * @return void
     */
    public function testSetEdTrtCptaLastMail() {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaLastMail("edTrtCptaLastMail");
        $this->assertEquals("edTrtCptaLastMail", $obj->getEdTrtCptaLastMail());
    }

    /**
     * Tests the setEdTrtCptaSortie() method.
     *
     * @return void
     */
    public function testSetEdTrtCptaSortie() {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaSortie("edTrtCptaSortie");
        $this->assertEquals("edTrtCptaSortie", $obj->getEdTrtCptaSortie());
    }

    /**
     * Tests the setEditQPXLAbsences() method.
     *
     * @return void
     */
    public function testSetEditQPXLAbsences() {

        $obj = new ConstantesEntreprise();

        $obj->setEditQPXLAbsences(true);
        $this->assertEquals(true, $obj->getEditQPXLAbsences());
    }

    /**
     * Tests the setEditQPXLAcomptes() method.
     *
     * @return void
     */
    public function testSetEditQPXLAcomptes() {

        $obj = new ConstantesEntreprise();

        $obj->setEditQPXLAcomptes(true);
        $this->assertEquals(true, $obj->getEditQPXLAcomptes());
    }

    /**
     * Tests the setEditQPXLTriEmp() method.
     *
     * @return void
     */
    public function testSetEditQPXLTriEmp() {

        $obj = new ConstantesEntreprise();

        $obj->setEditQPXLTriEmp("editQPXLTriEmp");
        $this->assertEquals("editQPXLTriEmp", $obj->getEditQPXLTriEmp());
    }

    /**
     * Tests the setEditQPXLViderLib() method.
     *
     * @return void
     */
    public function testSetEditQPXLViderLib() {

        $obj = new ConstantesEntreprise();

        $obj->setEditQPXLViderLib(true);
        $this->assertEquals(true, $obj->getEditQPXLViderLib());
    }

    /**
     * Tests the setEditerBulletinSTC() method.
     *
     * @return void
     */
    public function testSetEditerBulletinSTC() {

        $obj = new ConstantesEntreprise();

        $obj->setEditerBulletinSTC(true);
        $this->assertEquals(true, $obj->getEditerBulletinSTC());
    }

    /**
     * Tests the setEditionChequeTC() method.
     *
     * @return void
     */
    public function testSetEditionChequeTC() {

        $obj = new ConstantesEntreprise();

        $obj->setEditionChequeTC(true);
        $this->assertEquals(true, $obj->getEditionChequeTC());
    }

    /**
     * Tests the setEditionDate() method.
     *
     * @return void
     */
    public function testSetEditionDate() {

        $obj = new ConstantesEntreprise();

        $obj->setEditionDate(true);
        $this->assertEquals(true, $obj->getEditionDate());
    }

    /**
     * Tests the setEditionHeure() method.
     *
     * @return void
     */
    public function testSetEditionHeure() {

        $obj = new ConstantesEntreprise();

        $obj->setEditionHeure(true);
        $this->assertEquals(true, $obj->getEditionHeure());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new ConstantesEntreprise();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setEnteteSoldeTC() method.
     *
     * @return void
     */
    public function testSetEnteteSoldeTC() {

        $obj = new ConstantesEntreprise();

        $obj->setEnteteSoldeTC(true);
        $this->assertEquals(true, $obj->getEnteteSoldeTC());
    }

    /**
     * Tests the setEtatControleDADSU() method.
     *
     * @return void
     */
    public function testSetEtatControleDADSU() {

        $obj = new ConstantesEntreprise();

        $obj->setEtatControleDADSU("etatControleDADSU");
        $this->assertEquals("etatControleDADSU", $obj->getEtatControleDADSU());
    }

    /**
     * Tests the setEtatCtrlNorme() method.
     *
     * @return void
     */
    public function testSetEtatCtrlNorme() {

        $obj = new ConstantesEntreprise();

        $obj->setEtatCtrlNorme("etatCtrlNorme");
        $this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
    }

    /**
     * Tests the setEtatDAS() method.
     *
     * @return void
     */
    public function testSetEtatDAS() {

        $obj = new ConstantesEntreprise();

        $obj->setEtatDAS("etatDAS");
        $this->assertEquals("etatDAS", $obj->getEtatDAS());
    }

    /**
     * Tests the setEtatDASRect() method.
     *
     * @return void
     */
    public function testSetEtatDASRect() {

        $obj = new ConstantesEntreprise();

        $obj->setEtatDASRect("etatDASRect");
        $this->assertEquals("etatDASRect", $obj->getEtatDASRect());
    }

    /**
     * Tests the setFichierUnique() method.
     *
     * @return void
     */
    public function testSetFichierUnique() {

        $obj = new ConstantesEntreprise();

        $obj->setFichierUnique(true);
        $this->assertEquals(true, $obj->getFichierUnique());
    }

    /**
     * Tests the setFiltrerListeEmp() method.
     *
     * @return void
     */
    public function testSetFiltrerListeEmp() {

        $obj = new ConstantesEntreprise();

        $obj->setFiltrerListeEmp(10);
        $this->assertEquals(10, $obj->getFiltrerListeEmp());
    }

    /**
     * Tests the setFinPeriodeDAS() method.
     *
     * @return void
     */
    public function testSetFinPeriodeDAS() {

        $obj = new ConstantesEntreprise();

        $obj->setFinPeriodeDAS(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriodeDAS());
    }

    /**
     * Tests the setFinPeriodeHistoDAS() method.
     *
     * @return void
     */
    public function testSetFinPeriodeHistoDAS() {

        $obj = new ConstantesEntreprise();

        $obj->setFinPeriodeHistoDAS(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriodeHistoDAS());
    }

    /**
     * Tests the setFlagTraite() method.
     *
     * @return void
     */
    public function testSetFlagTraite() {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite("flagTraite");
        $this->assertEquals("flagTraite", $obj->getFlagTraite());
    }

    /**
     * Tests the setFlagTraite2() method.
     *
     * @return void
     */
    public function testSetFlagTraite2() {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite2(10);
        $this->assertEquals(10, $obj->getFlagTraite2());
    }

    /**
     * Tests the setFlagTraite3() method.
     *
     * @return void
     */
    public function testSetFlagTraite3() {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite3(10);
        $this->assertEquals(10, $obj->getFlagTraite3());
    }

    /**
     * Tests the setFormatFicVirement() method.
     *
     * @return void
     */
    public function testSetFormatFicVirement() {

        $obj = new ConstantesEntreprise();

        $obj->setFormatFicVirement("formatFicVirement");
        $this->assertEquals("formatFicVirement", $obj->getFormatFicVirement());
    }

    /**
     * Tests the setGestNumBulletin() method.
     *
     * @return void
     */
    public function testSetGestNumBulletin() {

        $obj = new ConstantesEntreprise();

        $obj->setGestNumBulletin(true);
        $this->assertEquals(true, $obj->getGestNumBulletin());
    }

    /**
     * Tests the setGestRepoCompens() method.
     *
     * @return void
     */
    public function testSetGestRepoCompens() {

        $obj = new ConstantesEntreprise();

        $obj->setGestRepoCompens(true);
        $this->assertEquals(true, $obj->getGestRepoCompens());
    }

    /**
     * Tests the setGestTexte() method.
     *
     * @return void
     */
    public function testSetGestTexte() {

        $obj = new ConstantesEntreprise();

        $obj->setGestTexte(true);
        $this->assertEquals(true, $obj->getGestTexte());
    }

    /**
     * Tests the setGestionCoeff() method.
     *
     * @return void
     */
    public function testSetGestionCoeff() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionCoeff(true);
        $this->assertEquals(true, $obj->getGestionCoeff());
    }

    /**
     * Tests the setGestionCoeffGrille() method.
     *
     * @return void
     */
    public function testSetGestionCoeffGrille() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionCoeffGrille(true);
        $this->assertEquals(true, $obj->getGestionCoeffGrille());
    }

    /**
     * Tests the setGestionExemplaire() method.
     *
     * @return void
     */
    public function testSetGestionExemplaire() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionExemplaire("gestionExemplaire");
        $this->assertEquals("gestionExemplaire", $obj->getGestionExemplaire());
    }

    /**
     * Tests the setGestionIntemperie() method.
     *
     * @return void
     */
    public function testSetGestionIntemperie() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionIntemperie(true);
        $this->assertEquals(true, $obj->getGestionIntemperie());
    }

    /**
     * Tests the setGestionNumeroEmployeAuto() method.
     *
     * @return void
     */
    public function testSetGestionNumeroEmployeAuto() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionNumeroEmployeAuto(true);
        $this->assertEquals(true, $obj->getGestionNumeroEmployeAuto());
    }

    /**
     * Tests the setGestionQPXL() method.
     *
     * @return void
     */
    public function testSetGestionQPXL() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionQPXL(true);
        $this->assertEquals(true, $obj->getGestionQPXL());
    }

    /**
     * Tests the setGestionTDBilaterale() method.
     *
     * @return void
     */
    public function testSetGestionTDBilaterale() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionTDBilaterale(true);
        $this->assertEquals(true, $obj->getGestionTDBilaterale());
    }

    /**
     * Tests the setGestionTDSouDADSU() method.
     *
     * @return void
     */
    public function testSetGestionTDSouDADSU() {

        $obj = new ConstantesEntreprise();

        $obj->setGestionTDSouDADSU(true);
        $this->assertEquals(true, $obj->getGestionTDSouDADSU());
    }

    /**
     * Tests the setGroupeGI() method.
     *
     * @return void
     */
    public function testSetGroupeGI() {

        $obj = new ConstantesEntreprise();

        $obj->setGroupeGI("groupeGI");
        $this->assertEquals("groupeGI", $obj->getGroupeGI());
    }

    /**
     * Tests the setHBonifInfluCassation() method.
     *
     * @return void
     */
    public function testSetHBonifInfluCassation() {

        $obj = new ConstantesEntreprise();

        $obj->setHBonifInfluCassation("hBonifInfluCassation");
        $this->assertEquals("hBonifInfluCassation", $obj->getHBonifInfluCassation());
    }

    /**
     * Tests the setHSup1Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup1Structurelle() {

        $obj = new ConstantesEntreprise();

        $obj->setHSup1Structurelle(true);
        $this->assertEquals(true, $obj->getHSup1Structurelle());
    }

    /**
     * Tests the setHSup2Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup2Structurelle() {

        $obj = new ConstantesEntreprise();

        $obj->setHSup2Structurelle(true);
        $this->assertEquals(true, $obj->getHSup2Structurelle());
    }

    /**
     * Tests the setHSup3Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup3Structurelle() {

        $obj = new ConstantesEntreprise();

        $obj->setHSup3Structurelle(true);
        $this->assertEquals(true, $obj->getHSup3Structurelle());
    }

    /**
     * Tests the setHSup4Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup4Structurelle() {

        $obj = new ConstantesEntreprise();

        $obj->setHSup4Structurelle(true);
        $this->assertEquals(true, $obj->getHSup4Structurelle());
    }

    /**
     * Tests the setHSup5Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup5Structurelle() {

        $obj = new ConstantesEntreprise();

        $obj->setHSup5Structurelle(true);
        $this->assertEquals(true, $obj->getHSup5Structurelle());
    }

    /**
     * Tests the setHeureSup2InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup2InfluCassation() {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup2InfluCassation("heureSup2InfluCassation");
        $this->assertEquals("heureSup2InfluCassation", $obj->getHeureSup2InfluCassation());
    }

    /**
     * Tests the setHeureSup3InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup3InfluCassation() {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup3InfluCassation("heureSup3InfluCassation");
        $this->assertEquals("heureSup3InfluCassation", $obj->getHeureSup3InfluCassation());
    }

    /**
     * Tests the setHeureSup4InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup4InfluCassation() {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup4InfluCassation("heureSup4InfluCassation");
        $this->assertEquals("heureSup4InfluCassation", $obj->getHeureSup4InfluCassation());
    }

    /**
     * Tests the setHeureSup5InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup5InfluCassation() {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup5InfluCassation("heureSup5InfluCassation");
        $this->assertEquals("heureSup5InfluCassation", $obj->getHeureSup5InfluCassation());
    }

    /**
     * Tests the setHeureSupInfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSupInfluCassation() {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSupInfluCassation("heureSupInfluCassation");
        $this->assertEquals("heureSupInfluCassation", $obj->getHeureSupInfluCassation());
    }

    /**
     * Tests the setHeureTheoBaseTrav() method.
     *
     * @return void
     */
    public function testSetHeureTheoBaseTrav() {

        $obj = new ConstantesEntreprise();

        $obj->setHeureTheoBaseTrav("heureTheoBaseTrav");
        $this->assertEquals("heureTheoBaseTrav", $obj->getHeureTheoBaseTrav());
    }

    /**
     * Tests the setIndemCpIntervientBrutal() method.
     *
     * @return void
     */
    public function testSetIndemCpIntervientBrutal() {

        $obj = new ConstantesEntreprise();

        $obj->setIndemCpIntervientBrutal(true);
        $this->assertEquals(true, $obj->getIndemCpIntervientBrutal());
    }

    /**
     * Tests the setJourDebutTransfert() method.
     *
     * @return void
     */
    public function testSetJourDebutTransfert() {

        $obj = new ConstantesEntreprise();

        $obj->setJourDebutTransfert(10);
        $this->assertEquals(10, $obj->getJourDebutTransfert());
    }

    /**
     * Tests the setJourFinTransfert() method.
     *
     * @return void
     */
    public function testSetJourFinTransfert() {

        $obj = new ConstantesEntreprise();

        $obj->setJourFinTransfert(10);
        $this->assertEquals(10, $obj->getJourFinTransfert());
    }

    /**
     * Tests the setJrnFormat() method.
     *
     * @return void
     */
    public function testSetJrnFormat() {

        $obj = new ConstantesEntreprise();

        $obj->setJrnFormat("jrnFormat");
        $this->assertEquals("jrnFormat", $obj->getJrnFormat());
    }

    /**
     * Tests the setJrnRegroupeAbs() method.
     *
     * @return void
     */
    public function testSetJrnRegroupeAbs() {

        $obj = new ConstantesEntreprise();

        $obj->setJrnRegroupeAbs(true);
        $this->assertEquals(true, $obj->getJrnRegroupeAbs());
    }

    /**
     * Tests the setJrnTri() method.
     *
     * @return void
     */
    public function testSetJrnTri() {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTri("jrnTri");
        $this->assertEquals("jrnTri", $obj->getJrnTri());
    }

    /**
     * Tests the setJrnTriEtablissement() method.
     *
     * @return void
     */
    public function testSetJrnTriEtablissement() {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTriEtablissement("jrnTriEtablissement");
        $this->assertEquals("jrnTriEtablissement", $obj->getJrnTriEtablissement());
    }

    /**
     * Tests the setJrnTriService() method.
     *
     * @return void
     */
    public function testSetJrnTriService() {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTriService("jrnTriService");
        $this->assertEquals("jrnTriService", $obj->getJrnTriService());
    }

    /**
     * Tests the setJrnType() method.
     *
     * @return void
     */
    public function testSetJrnType() {

        $obj = new ConstantesEntreprise();

        $obj->setJrnType("jrnType");
        $this->assertEquals("jrnType", $obj->getJrnType());
    }

    /**
     * Tests the setLiaisonProprete() method.
     *
     * @return void
     */
    public function testSetLiaisonProprete() {

        $obj = new ConstantesEntreprise();

        $obj->setLiaisonProprete(true);
        $this->assertEquals(true, $obj->getLiaisonProprete());
    }

    /**
     * Tests the setLibArbitrage() method.
     *
     * @return void
     */
    public function testSetLibArbitrage() {

        $obj = new ConstantesEntreprise();

        $obj->setLibArbitrage("libArbitrage");
        $this->assertEquals("libArbitrage", $obj->getLibArbitrage());
    }

    /**
     * Tests the setLibBQCP() method.
     *
     * @return void
     */
    public function testSetLibBQCP() {

        $obj = new ConstantesEntreprise();

        $obj->setLibBQCP("libBQCP");
        $this->assertEquals("libBQCP", $obj->getLibBQCP());
    }

    /**
     * Tests the setLibBaseConge() method.
     *
     * @return void
     */
    public function testSetLibBaseConge() {

        $obj = new ConstantesEntreprise();

        $obj->setLibBaseConge("libBaseConge");
        $this->assertEquals("libBaseConge", $obj->getLibBaseConge());
    }

    /**
     * Tests the setLibCachetAEM() method.
     *
     * @return void
     */
    public function testSetLibCachetAEM() {

        $obj = new ConstantesEntreprise();

        $obj->setLibCachetAEM("libCachetAEM");
        $this->assertEquals("libCachetAEM", $obj->getLibCachetAEM());
    }

    /**
     * Tests the setLibCotisCNE() method.
     *
     * @return void
     */
    public function testSetLibCotisCNE() {

        $obj = new ConstantesEntreprise();

        $obj->setLibCotisCNE("libCotisCNE");
        $this->assertEquals("libCotisCNE", $obj->getLibCotisCNE());
    }

    /**
     * Tests the setLibFinContrat() method.
     *
     * @return void
     */
    public function testSetLibFinContrat() {

        $obj = new ConstantesEntreprise();

        $obj->setLibFinContrat("libFinContrat");
        $this->assertEquals("libFinContrat", $obj->getLibFinContrat());
    }

    /**
     * Tests the setLibFinContratCNE() method.
     *
     * @return void
     */
    public function testSetLibFinContratCNE() {

        $obj = new ConstantesEntreprise();

        $obj->setLibFinContratCNE("libFinContratCNE");
        $this->assertEquals("libFinContratCNE", $obj->getLibFinContratCNE());
    }

    /**
     * Tests the setLibIndemCp() method.
     *
     * @return void
     */
    public function testSetLibIndemCp() {

        $obj = new ConstantesEntreprise();

        $obj->setLibIndemCp("libIndemCp");
        $this->assertEquals("libIndemCp", $obj->getLibIndemCp());
    }

    /**
     * Tests the setLibelleLibreVirement() method.
     *
     * @return void
     */
    public function testSetLibelleLibreVirement() {

        $obj = new ConstantesEntreprise();

        $obj->setLibelleLibreVirement("libelleLibreVirement");
        $this->assertEquals("libelleLibreVirement", $obj->getLibelleLibreVirement());
    }

    /**
     * Tests the setLigneBulEuro() method.
     *
     * @return void
     */
    public function testSetLigneBulEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setLigneBulEuro(true);
        $this->assertEquals(true, $obj->getLigneBulEuro());
    }

    /**
     * Tests the setLignesTransport() method.
     *
     * @return void
     */
    public function testSetLignesTransport() {

        $obj = new ConstantesEntreprise();

        $obj->setLignesTransport(true);
        $this->assertEquals(true, $obj->getLignesTransport());
    }

    /**
     * Tests the setMailBulletin() method.
     *
     * @return void
     */
    public function testSetMailBulletin() {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletin("mailBulletin");
        $this->assertEquals("mailBulletin", $obj->getMailBulletin());
    }

    /**
     * Tests the setMailBulletinCle() method.
     *
     * @return void
     */
    public function testSetMailBulletinCle() {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletinCle("mailBulletinCle");
        $this->assertEquals("mailBulletinCle", $obj->getMailBulletinCle());
    }

    /**
     * Tests the setMailBulletinPJ() method.
     *
     * @return void
     */
    public function testSetMailBulletinPJ() {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletinPJ("mailBulletinPJ");
        $this->assertEquals("mailBulletinPJ", $obj->getMailBulletinPJ());
    }

    /**
     * Tests the setMailCLiDucsEdi() method.
     *
     * @return void
     */
    public function testSetMailCLiDucsEdi() {

        $obj = new ConstantesEntreprise();

        $obj->setMailCLiDucsEdi(true);
        $this->assertEquals(true, $obj->getMailCLiDucsEdi());
    }

    /**
     * Tests the setMentionCp() method.
     *
     * @return void
     */
    public function testSetMentionCp() {

        $obj = new ConstantesEntreprise();

        $obj->setMentionCp(true);
        $this->assertEquals(true, $obj->getMentionCp());
    }

    /**
     * Tests the setMessageVu() method.
     *
     * @return void
     */
    public function testSetMessageVu() {

        $obj = new ConstantesEntreprise();

        $obj->setMessageVu(true);
        $this->assertEquals(true, $obj->getMessageVu());
    }

    /**
     * Tests the setMillesime_1() method.
     *
     * @return void
     */
    public function testSetMillesime_1() {

        $obj = new ConstantesEntreprise();

        $obj->setMillesime_1(10);
        $this->assertEquals(10, $obj->getMillesime_1());
    }

    /**
     * Tests the setModePlanning() method.
     *
     * @return void
     */
    public function testSetModePlanning() {

        $obj = new ConstantesEntreprise();

        $obj->setModePlanning(10);
        $this->assertEquals(10, $obj->getModePlanning());
    }

    /**
     * Tests the setModeleApercu() method.
     *
     * @return void
     */
    public function testSetModeleApercu() {

        $obj = new ConstantesEntreprise();

        $obj->setModeleApercu("modeleApercu");
        $this->assertEquals("modeleApercu", $obj->getModeleApercu());
    }

    /**
     * Tests the setModeleBonBleu() method.
     *
     * @return void
     */
    public function testSetModeleBonBleu() {

        $obj = new ConstantesEntreprise();

        $obj->setModeleBonBleu("modeleBonBleu");
        $this->assertEquals("modeleBonBleu", $obj->getModeleBonBleu());
    }

    /**
     * Tests the setModeleBulletin() method.
     *
     * @return void
     */
    public function testSetModeleBulletin() {

        $obj = new ConstantesEntreprise();

        $obj->setModeleBulletin("modeleBulletin");
        $this->assertEquals("modeleBulletin", $obj->getModeleBulletin());
    }

    /**
     * Tests the setModeleCertif() method.
     *
     * @return void
     */
    public function testSetModeleCertif() {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCertif("modeleCertif");
        $this->assertEquals("modeleCertif", $obj->getModeleCertif());
    }

    /**
     * Tests the setModeleCertifTrav() method.
     *
     * @return void
     */
    public function testSetModeleCertifTrav() {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCertifTrav("modeleCertifTrav");
        $this->assertEquals("modeleCertifTrav", $obj->getModeleCertifTrav());
    }

    /**
     * Tests the setModeleCheque() method.
     *
     * @return void
     */
    public function testSetModeleCheque() {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCheque("modeleCheque");
        $this->assertEquals("modeleCheque", $obj->getModeleCheque());
    }

    /**
     * Tests the setMoisClotureAn() method.
     *
     * @return void
     */
    public function testSetMoisClotureAn() {

        $obj = new ConstantesEntreprise();

        $obj->setMoisClotureAn("moisClotureAn");
        $this->assertEquals("moisClotureAn", $obj->getMoisClotureAn());
    }

    /**
     * Tests the setNAttestAEM() method.
     *
     * @return void
     */
    public function testSetNAttestAEM() {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAEM(10);
        $this->assertEquals(10, $obj->getNAttestAEM());
    }

    /**
     * Tests the setNAttestAEMEDI() method.
     *
     * @return void
     */
    public function testSetNAttestAEMEDI() {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAEMEDI(10);
        $this->assertEquals(10, $obj->getNAttestAEMEDI());
    }

    /**
     * Tests the setNAttestAEMX() method.
     *
     * @return void
     */
    public function testSetNAttestAEMX() {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAEMX(10);
        $this->assertEquals(10, $obj->getNAttestAEMX());
    }

    /**
     * Tests the setNAttestAssedic() method.
     *
     * @return void
     */
    public function testSetNAttestAssedic() {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAssedic(10);
        $this->assertEquals(10, $obj->getNAttestAssedic());
    }

    /**
     * Tests the setNAttestExtras() method.
     *
     * @return void
     */
    public function testSetNAttestExtras() {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestExtras(10);
        $this->assertEquals(10, $obj->getNAttestExtras());
    }

    /**
     * Tests the setNAttestIjss() method.
     *
     * @return void
     */
    public function testSetNAttestIjss() {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestIjss(10);
        $this->assertEquals(10, $obj->getNAttestIjss());
    }

    /**
     * Tests the setNAttestIjssAT() method.
     *
     * @return void
     */
    public function testSetNAttestIjssAT() {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestIjssAT(10);
        $this->assertEquals(10, $obj->getNAttestIjssAT());
    }

    /**
     * Tests the setNCECongesSpectacles() method.
     *
     * @return void
     */
    public function testSetNCECongesSpectacles() {

        $obj = new ConstantesEntreprise();

        $obj->setNCECongesSpectacles(10);
        $this->assertEquals(10, $obj->getNCECongesSpectacles());
    }

    /**
     * Tests the setNDerDocument() method.
     *
     * @return void
     */
    public function testSetNDerDocument() {

        $obj = new ConstantesEntreprise();

        $obj->setNDerDocument(10);
        $this->assertEquals(10, $obj->getNDerDocument());
    }

    /**
     * Tests the setNapEuro() method.
     *
     * @return void
     */
    public function testSetNapEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setNapEuro(true);
        $this->assertEquals(true, $obj->getNapEuro());
    }

    /**
     * Tests the setNbExemplaire() method.
     *
     * @return void
     */
    public function testSetNbExemplaire() {

        $obj = new ConstantesEntreprise();

        $obj->setNbExemplaire("nbExemplaire");
        $this->assertEquals("nbExemplaire", $obj->getNbExemplaire());
    }

    /**
     * Tests the setNouvParamRetraiteType() method.
     *
     * @return void
     */
    public function testSetNouvParamRetraiteType() {

        $obj = new ConstantesEntreprise();

        $obj->setNouvParamRetraiteType(true);
        $this->assertEquals(true, $obj->getNouvParamRetraiteType());
    }

    /**
     * Tests the setOptionsCalcAbs() method.
     *
     * @return void
     */
    public function testSetOptionsCalcAbs() {

        $obj = new ConstantesEntreprise();

        $obj->setOptionsCalcAbs(true);
        $this->assertEquals(true, $obj->getOptionsCalcAbs());
    }

    /**
     * Tests the setOrdreLibelleHSup() method.
     *
     * @return void
     */
    public function testSetOrdreLibelleHSup() {

        $obj = new ConstantesEntreprise();

        $obj->setOrdreLibelleHSup("ordreLibelleHSup");
        $this->assertEquals("ordreLibelleHSup", $obj->getOrdreLibelleHSup());
    }

    /**
     * Tests the setPaieEuro() method.
     *
     * @return void
     */
    public function testSetPaieEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setPaieEuro(true);
        $this->assertEquals(true, $obj->getPaieEuro());
    }

    /**
     * Tests the setPartSalSeule() method.
     *
     * @return void
     */
    public function testSetPartSalSeule() {

        $obj = new ConstantesEntreprise();

        $obj->setPartSalSeule(true);
        $this->assertEquals(true, $obj->getPartSalSeule());
    }

    /**
     * Tests the setPasGestionIndiceBul() method.
     *
     * @return void
     */
    public function testSetPasGestionIndiceBul() {

        $obj = new ConstantesEntreprise();

        $obj->setPasGestionIndiceBul(true);
        $this->assertEquals(true, $obj->getPasGestionIndiceBul());
    }

    /**
     * Tests the setPasPrendreICCPFillon() method.
     *
     * @return void
     */
    public function testSetPasPrendreICCPFillon() {

        $obj = new ConstantesEntreprise();

        $obj->setPasPrendreICCPFillon(true);
        $this->assertEquals(true, $obj->getPasPrendreICCPFillon());
    }

    /**
     * Tests the setPasSousTotSBase() method.
     *
     * @return void
     */
    public function testSetPasSousTotSBase() {

        $obj = new ConstantesEntreprise();

        $obj->setPasSousTotSBase(true);
        $this->assertEquals(true, $obj->getPasSousTotSBase());
    }

    /**
     * Tests the setPassage35HFait() method.
     *
     * @return void
     */
    public function testSetPassage35HFait() {

        $obj = new ConstantesEntreprise();

        $obj->setPassage35HFait(true);
        $this->assertEquals(true, $obj->getPassage35HFait());
    }

    /**
     * Tests the setPathVirement() method.
     *
     * @return void
     */
    public function testSetPathVirement() {

        $obj = new ConstantesEntreprise();

        $obj->setPathVirement("pathVirement");
        $this->assertEquals("pathVirement", $obj->getPathVirement());
    }

    /**
     * Tests the setPeriodeIPaie() method.
     *
     * @return void
     */
    public function testSetPeriodeIPaie() {

        $obj = new ConstantesEntreprise();

        $obj->setPeriodeIPaie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeIPaie());
    }

    /**
     * Tests the setPeriodePaie() method.
     *
     * @return void
     */
    public function testSetPeriodePaie() {

        $obj = new ConstantesEntreprise();

        $obj->setPeriodePaie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodePaie());
    }

    /**
     * Tests the setPjMailCLiDucsEdi() method.
     *
     * @return void
     */
    public function testSetPjMailCLiDucsEdi() {

        $obj = new ConstantesEntreprise();

        $obj->setPjMailCLiDucsEdi(true);
        $this->assertEquals(true, $obj->getPjMailCLiDucsEdi());
    }

    /**
     * Tests the setPjMailCliCouponPaiement() method.
     *
     * @return void
     */
    public function testSetPjMailCliCouponPaiement() {

        $obj = new ConstantesEntreprise();

        $obj->setPjMailCliCouponPaiement(true);
        $this->assertEquals(true, $obj->getPjMailCliCouponPaiement());
    }

    /**
     * Tests the setPlafond() method.
     *
     * @return void
     */
    public function testSetPlafond() {

        $obj = new ConstantesEntreprise();

        $obj->setPlafond(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond());
    }

    /**
     * Tests the setPortaFraisSanteCertifTrav() method.
     *
     * @return void
     */
    public function testSetPortaFraisSanteCertifTrav() {

        $obj = new ConstantesEntreprise();

        $obj->setPortaFraisSanteCertifTrav(true);
        $this->assertEquals(true, $obj->getPortaFraisSanteCertifTrav());
    }

    /**
     * Tests the setPortaPrevoyanceOblig() method.
     *
     * @return void
     */
    public function testSetPortaPrevoyanceOblig() {

        $obj = new ConstantesEntreprise();

        $obj->setPortaPrevoyanceOblig(true);
        $this->assertEquals(true, $obj->getPortaPrevoyanceOblig());
    }

    /**
     * Tests the setPreparationTDP() method.
     *
     * @return void
     */
    public function testSetPreparationTDP() {

        $obj = new ConstantesEntreprise();

        $obj->setPreparationTDP(true);
        $this->assertEquals(true, $obj->getPreparationTDP());
    }

    /**
     * Tests the setPresenceMin() method.
     *
     * @return void
     */
    public function testSetPresenceMin() {

        $obj = new ConstantesEntreprise();

        $obj->setPresenceMin("presenceMin");
        $this->assertEquals("presenceMin", $obj->getPresenceMin());
    }

    /**
     * Tests the setProrataDifCertifTrav() method.
     *
     * @return void
     */
    public function testSetProrataDifCertifTrav() {

        $obj = new ConstantesEntreprise();

        $obj->setProrataDifCertifTrav(true);
        $this->assertEquals(true, $obj->getProrataDifCertifTrav());
    }

    /**
     * Tests the setRDLP_ASCII() method.
     *
     * @return void
     */
    public function testSetRDLP_ASCII() {

        $obj = new ConstantesEntreprise();

        $obj->setRDLP_ASCII(true);
        $this->assertEquals(true, $obj->getRDLP_ASCII());
    }

    /**
     * Tests the setRDLP_EMPLOYES() method.
     *
     * @return void
     */
    public function testSetRDLP_EMPLOYES() {

        $obj = new ConstantesEntreprise();

        $obj->setRDLP_EMPLOYES(true);
        $this->assertEquals(true, $obj->getRDLP_EMPLOYES());
    }

    /**
     * Tests the setRazCommentaire() method.
     *
     * @return void
     */
    public function testSetRazCommentaire() {

        $obj = new ConstantesEntreprise();

        $obj->setRazCommentaire("razCommentaire");
        $this->assertEquals("razCommentaire", $obj->getRazCommentaire());
    }

    /**
     * Tests the setRazHSup() method.
     *
     * @return void
     */
    public function testSetRazHSup() {

        $obj = new ConstantesEntreprise();

        $obj->setRazHSup("razHSup");
        $this->assertEquals("razHSup", $obj->getRazHSup());
    }

    /**
     * Tests the setRefRemise() method.
     *
     * @return void
     */
    public function testSetRefRemise() {

        $obj = new ConstantesEntreprise();

        $obj->setRefRemise(10);
        $this->assertEquals(10, $obj->getRefRemise());
    }

    /**
     * Tests the setRefTrans() method.
     *
     * @return void
     */
    public function testSetRefTrans() {

        $obj = new ConstantesEntreprise();

        $obj->setRefTrans(10);
        $this->assertEquals(10, $obj->getRefTrans());
    }

    /**
     * Tests the setReferenceInterneVirement() method.
     *
     * @return void
     */
    public function testSetReferenceInterneVirement() {

        $obj = new ConstantesEntreprise();

        $obj->setReferenceInterneVirement("referenceInterneVirement");
        $this->assertEquals("referenceInterneVirement", $obj->getReferenceInterneVirement());
    }

    /**
     * Tests the setRegroupLibEdBul() method.
     *
     * @return void
     */
    public function testSetRegroupLibEdBul() {

        $obj = new ConstantesEntreprise();

        $obj->setRegroupLibEdBul(true);
        $this->assertEquals(true, $obj->getRegroupLibEdBul());
    }

    /**
     * Tests the setReportMinimum() method.
     *
     * @return void
     */
    public function testSetReportMinimum() {

        $obj = new ConstantesEntreprise();

        $obj->setReportMinimum(10);
        $this->assertEquals(10, $obj->getReportMinimum());
    }

    /**
     * Tests the setRetraite97() method.
     *
     * @return void
     */
    public function testSetRetraite97() {

        $obj = new ConstantesEntreprise();

        $obj->setRetraite97(true);
        $this->assertEquals(true, $obj->getRetraite97());
    }

    /**
     * Tests the setSaisPlanEmpSem() method.
     *
     * @return void
     */
    public function testSetSaisPlanEmpSem() {

        $obj = new ConstantesEntreprise();

        $obj->setSaisPlanEmpSem("saisPlanEmpSem");
        $this->assertEquals("saisPlanEmpSem", $obj->getSaisPlanEmpSem());
    }

    /**
     * Tests the setSaisieIndiceBul() method.
     *
     * @return void
     */
    public function testSetSaisieIndiceBul() {

        $obj = new ConstantesEntreprise();

        $obj->setSaisieIndiceBul(true);
        $this->assertEquals(true, $obj->getSaisieIndiceBul());
    }

    /**
     * Tests the setSautPage() method.
     *
     * @return void
     */
    public function testSetSautPage() {

        $obj = new ConstantesEntreprise();

        $obj->setSautPage(true);
        $this->assertEquals(true, $obj->getSautPage());
    }

    /**
     * Tests the setSeuil() method.
     *
     * @return void
     */
    public function testSetSeuil() {

        $obj = new ConstantesEntreprise();

        $obj->setSeuil(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuil());
    }

    /**
     * Tests the setSeuilConting() method.
     *
     * @return void
     */
    public function testSetSeuilConting() {

        $obj = new ConstantesEntreprise();

        $obj->setSeuilConting(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilConting());
    }

    /**
     * Tests the setStcAuto() method.
     *
     * @return void
     */
    public function testSetStcAuto() {

        $obj = new ConstantesEntreprise();

        $obj->setStcAuto(true);
        $this->assertEquals(true, $obj->getStcAuto());
    }

    /**
     * Tests the setTabBordTriEtablissement() method.
     *
     * @return void
     */
    public function testSetTabBordTriEtablissement() {

        $obj = new ConstantesEntreprise();

        $obj->setTabBordTriEtablissement(true);
        $this->assertEquals(true, $obj->getTabBordTriEtablissement());
    }

    /**
     * Tests the setTabBordTriService() method.
     *
     * @return void
     */
    public function testSetTabBordTriService() {

        $obj = new ConstantesEntreprise();

        $obj->setTabBordTriService(true);
        $this->assertEquals(true, $obj->getTabBordTriService());
    }

    /**
     * Tests the setTableauCharge() method.
     *
     * @return void
     */
    public function testSetTableauCharge() {

        $obj = new ConstantesEntreprise();

        $obj->setTableauCharge("tableauCharge");
        $this->assertEquals("tableauCharge", $obj->getTableauCharge());
    }

    /**
     * Tests the setTdsAnnee() method.
     *
     * @return void
     */
    public function testSetTdsAnnee() {

        $obj = new ConstantesEntreprise();

        $obj->setTdsAnnee(10);
        $this->assertEquals(10, $obj->getTdsAnnee());
    }

    /**
     * Tests the setTdsEuro() method.
     *
     * @return void
     */
    public function testSetTdsEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setTdsEuro(true);
        $this->assertEquals(true, $obj->getTdsEuro());
    }

    /**
     * Tests the setTotGeneIsole() method.
     *
     * @return void
     */
    public function testSetTotGeneIsole() {

        $obj = new ConstantesEntreprise();

        $obj->setTotGeneIsole("totGeneIsole");
        $this->assertEquals("totGeneIsole", $obj->getTotGeneIsole());
    }

    /**
     * Tests the setTotServiceIsole() method.
     *
     * @return void
     */
    public function testSetTotServiceIsole() {

        $obj = new ConstantesEntreprise();

        $obj->setTotServiceIsole("totServiceIsole");
        $this->assertEquals("totServiceIsole", $obj->getTotServiceIsole());
    }

    /**
     * Tests the setTotalEtabIsole() method.
     *
     * @return void
     */
    public function testSetTotalEtabIsole() {

        $obj = new ConstantesEntreprise();

        $obj->setTotalEtabIsole("totalEtabIsole");
        $this->assertEquals("totalEtabIsole", $obj->getTotalEtabIsole());
    }

    /**
     * Tests the setTransRupture() method.
     *
     * @return void
     */
    public function testSetTransRupture() {

        $obj = new ConstantesEntreprise();

        $obj->setTransRupture("transRupture");
        $this->assertEquals("transRupture", $obj->getTransRupture());
    }

    /**
     * Tests the setTransTriEtablissement() method.
     *
     * @return void
     */
    public function testSetTransTriEtablissement() {

        $obj = new ConstantesEntreprise();

        $obj->setTransTriEtablissement("transTriEtablissement");
        $this->assertEquals("transTriEtablissement", $obj->getTransTriEtablissement());
    }

    /**
     * Tests the setTransfertTDSEmp() method.
     *
     * @return void
     */
    public function testSetTransfertTDSEmp() {

        $obj = new ConstantesEntreprise();

        $obj->setTransfertTDSEmp(true);
        $this->assertEquals(true, $obj->getTransfertTDSEmp());
    }

    /**
     * Tests the setTriEmploye() method.
     *
     * @return void
     */
    public function testSetTriEmploye() {

        $obj = new ConstantesEntreprise();

        $obj->setTriEmploye("triEmploye");
        $this->assertEquals("triEmploye", $obj->getTriEmploye());
    }

    /**
     * Tests the setTxSalDecote() method.
     *
     * @return void
     */
    public function testSetTxSalDecote() {

        $obj = new ConstantesEntreprise();

        $obj->setTxSalDecote(10.092018);
        $this->assertEquals(10.092018, $obj->getTxSalDecote());
    }

    /**
     * Tests the setTypeAbsSansSolde() method.
     *
     * @return void
     */
    public function testSetTypeAbsSansSolde() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeAbsSansSolde("typeAbsSansSolde");
        $this->assertEquals("typeAbsSansSolde", $obj->getTypeAbsSansSolde());
    }

    /**
     * Tests the setTypeAgrementAEM() method.
     *
     * @return void
     */
    public function testSetTypeAgrementAEM() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeAgrementAEM("typeAgrementAEM");
        $this->assertEquals("typeAgrementAEM", $obj->getTypeAgrementAEM());
    }

    /**
     * Tests the setTypeBordereauPrepa() method.
     *
     * @return void
     */
    public function testSetTypeBordereauPrepa() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeBordereauPrepa("typeBordereauPrepa");
        $this->assertEquals("typeBordereauPrepa", $obj->getTypeBordereauPrepa());
    }

    /**
     * Tests the setTypeBulletin() method.
     *
     * @return void
     */
    public function testSetTypeBulletin() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeBulletin("typeBulletin");
        $this->assertEquals("typeBulletin", $obj->getTypeBulletin());
    }

    /**
     * Tests the setTypeDUE() method.
     *
     * @return void
     */
    public function testSetTypeDUE() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeDUE("typeDUE");
        $this->assertEquals("typeDUE", $obj->getTypeDUE());
    }

    /**
     * Tests the setTypeDossier() method.
     *
     * @return void
     */
    public function testSetTypeDossier() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeDossier("typeDossier");
        $this->assertEquals("typeDossier", $obj->getTypeDossier());
    }

    /**
     * Tests the setTypeEffectif() method.
     *
     * @return void
     */
    public function testSetTypeEffectif() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeEffectif("typeEffectif");
        $this->assertEquals("typeEffectif", $obj->getTypeEffectif());
    }

    /**
     * Tests the setTypeFichBilat() method.
     *
     * @return void
     */
    public function testSetTypeFichBilat() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeFichBilat("typeFichBilat");
        $this->assertEquals("typeFichBilat", $obj->getTypeFichBilat());
    }

    /**
     * Tests the setTypeGestionBal() method.
     *
     * @return void
     */
    public function testSetTypeGestionBal() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeGestionBal("typeGestionBal");
        $this->assertEquals("typeGestionBal", $obj->getTypeGestionBal());
    }

    /**
     * Tests the setTypeModele() method.
     *
     * @return void
     */
    public function testSetTypeModele() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeModele("typeModele");
        $this->assertEquals("typeModele", $obj->getTypeModele());
    }

    /**
     * Tests the setTypePrepDADSU() method.
     *
     * @return void
     */
    public function testSetTypePrepDADSU() {

        $obj = new ConstantesEntreprise();

        $obj->setTypePrepDADSU("typePrepDADSU");
        $this->assertEquals("typePrepDADSU", $obj->getTypePrepDADSU());
    }

    /**
     * Tests the setTypeSaisieAbs() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbs() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeSaisieAbs("typeSaisieAbs");
        $this->assertEquals("typeSaisieAbs", $obj->getTypeSaisieAbs());
    }

    /**
     * Tests the setTypeSaisieAbsence() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbsence() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeSaisieAbsence("typeSaisieAbsence");
        $this->assertEquals("typeSaisieAbsence", $obj->getTypeSaisieAbsence());
    }

    /**
     * Tests the setTypeStc() method.
     *
     * @return void
     */
    public function testSetTypeStc() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeStc("typeStc");
        $this->assertEquals("typeStc", $obj->getTypeStc());
    }

    /**
     * Tests the setTypeTauxIntemperie() method.
     *
     * @return void
     */
    public function testSetTypeTauxIntemperie() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeTauxIntemperie("typeTauxIntemperie");
        $this->assertEquals("typeTauxIntemperie", $obj->getTypeTauxIntemperie());
    }

    /**
     * Tests the setTypeTri() method.
     *
     * @return void
     */
    public function testSetTypeTri() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeTri("typeTri");
        $this->assertEquals("typeTri", $obj->getTypeTri());
    }

    /**
     * Tests the setTypeVirement() method.
     *
     * @return void
     */
    public function testSetTypeVirement() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeVirement("typeVirement");
        $this->assertEquals("typeVirement", $obj->getTypeVirement());
    }

    /**
     * Tests the setTypeVisuColSaisieBul() method.
     *
     * @return void
     */
    public function testSetTypeVisuColSaisieBul() {

        $obj = new ConstantesEntreprise();

        $obj->setTypeVisuColSaisieBul("typeVisuColSaisieBul");
        $this->assertEquals("typeVisuColSaisieBul", $obj->getTypeVisuColSaisieBul());
    }

    /**
     * Tests the setUtilisePdpQuadra() method.
     *
     * @return void
     */
    public function testSetUtilisePdpQuadra() {

        $obj = new ConstantesEntreprise();

        $obj->setUtilisePdpQuadra(true);
        $this->assertEquals(true, $obj->getUtilisePdpQuadra());
    }

    /**
     * Tests the setUtilisePdpQuadra2() method.
     *
     * @return void
     */
    public function testSetUtilisePdpQuadra2() {

        $obj = new ConstantesEntreprise();

        $obj->setUtilisePdpQuadra2(true);
        $this->assertEquals(true, $obj->getUtilisePdpQuadra2());
    }

    /**
     * Tests the setValCpBulletin() method.
     *
     * @return void
     */
    public function testSetValCpBulletin() {

        $obj = new ConstantesEntreprise();

        $obj->setValCpBulletin(true);
        $this->assertEquals(true, $obj->getValCpBulletin());
    }

    /**
     * Tests the setValFiltreListeEmp() method.
     *
     * @return void
     */
    public function testSetValFiltreListeEmp() {

        $obj = new ConstantesEntreprise();

        $obj->setValFiltreListeEmp(10);
        $this->assertEquals(10, $obj->getValFiltreListeEmp());
    }

    /**
     * Tests the setVersionControleDADSU() method.
     *
     * @return void
     */
    public function testSetVersionControleDADSU() {

        $obj = new ConstantesEntreprise();

        $obj->setVersionControleDADSU(10);
        $this->assertEquals(10, $obj->getVersionControleDADSU());
    }

    /**
     * Tests the setVirCodeEtab() method.
     *
     * @return void
     */
    public function testSetVirCodeEtab() {

        $obj = new ConstantesEntreprise();

        $obj->setVirCodeEtab("virCodeEtab");
        $this->assertEquals("virCodeEtab", $obj->getVirCodeEtab());
    }

    /**
     * Tests the setVirCollectivite() method.
     *
     * @return void
     */
    public function testSetVirCollectivite() {

        $obj = new ConstantesEntreprise();

        $obj->setVirCollectivite("virCollectivite");
        $this->assertEquals("virCollectivite", $obj->getVirCollectivite());
    }

    /**
     * Tests the setVirComptableCentre() method.
     *
     * @return void
     */
    public function testSetVirComptableCentre() {

        $obj = new ConstantesEntreprise();

        $obj->setVirComptableCentre("virComptableCentre");
        $this->assertEquals("virComptableCentre", $obj->getVirComptableCentre());
    }

    /**
     * Tests the setVirComptableSub() method.
     *
     * @return void
     */
    public function testSetVirComptableSub() {

        $obj = new ConstantesEntreprise();

        $obj->setVirComptableSub("virComptableSub");
        $this->assertEquals("virComptableSub", $obj->getVirComptableSub());
    }

    /**
     * Tests the setVirFonctionPublique() method.
     *
     * @return void
     */
    public function testSetVirFonctionPublique() {

        $obj = new ConstantesEntreprise();

        $obj->setVirFonctionPublique(true);
        $this->assertEquals(true, $obj->getVirFonctionPublique());
    }

    /**
     * Tests the setVirSeuil() method.
     *
     * @return void
     */
    public function testSetVirSeuil() {

        $obj = new ConstantesEntreprise();

        $obj->setVirSeuil(10.092018);
        $this->assertEquals(10.092018, $obj->getVirSeuil());
    }

    /**
     * Tests the setVirTypeEtab() method.
     *
     * @return void
     */
    public function testSetVirTypeEtab() {

        $obj = new ConstantesEntreprise();

        $obj->setVirTypeEtab("virTypeEtab");
        $this->assertEquals("virTypeEtab", $obj->getVirTypeEtab());
    }

    /**
     * Tests the setVirementCrLf() method.
     *
     * @return void
     */
    public function testSetVirementCrLf() {

        $obj = new ConstantesEntreprise();

        $obj->setVirementCrLf(true);
        $this->assertEquals(true, $obj->getVirementCrLf());
    }

    /**
     * Tests the setVirementsEuro() method.
     *
     * @return void
     */
    public function testSetVirementsEuro() {

        $obj = new ConstantesEntreprise();

        $obj->setVirementsEuro("virementsEuro");
        $this->assertEquals("virementsEuro", $obj->getVirementsEuro());
    }

    /**
     * Tests the setWebPrioritaire() method.
     *
     * @return void
     */
    public function testSetWebPrioritaire() {

        $obj = new ConstantesEntreprise();

        $obj->setWebPrioritaire(true);
        $this->assertEquals(true, $obj->getWebPrioritaire());
    }

}
