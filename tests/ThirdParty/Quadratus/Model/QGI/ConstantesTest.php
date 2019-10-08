<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Constantes;

/**
 * Constantes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ConstantesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Constantes();

        $this->assertNull($obj->getAccesAutoriseBonsTravaux());
        $this->assertNull($obj->getAccesAutorisePlanFacturation());
        $this->assertNull($obj->getAccesAutorisePlanTache());
        $this->assertNull($obj->getAccesDocsCab());
        $this->assertNull($obj->getAccesDossierCpta());
        $this->assertNull($obj->getAccesDossierPaie());
        $this->assertNull($obj->getAccesStatCab());
        $this->assertNull($obj->getActivationConfCMAVCli());
        $this->assertNull($obj->getActivationConfControle());
        $this->assertNull($obj->getActivationLstRestri());
        $this->assertNull($obj->getActivationNiveau2());
        $this->assertNull($obj->getActivationNiveau3());
        $this->assertNull($obj->getAffichePoint());
        $this->assertNull($obj->getAfficheSemaine());
        $this->assertNull($obj->getAnnulationAffaire());
        $this->assertNull($obj->getAnnulationArticle());
        $this->assertNull($obj->getAnnulationBonsTravaux());
        $this->assertNull($obj->getAnnulationChantier());
        $this->assertNull($obj->getAnnulationClient());
        $this->assertNull($obj->getAnnulationCommission());
        $this->assertNull($obj->getAnnulationDossierCpta());
        $this->assertNull($obj->getAnnulationDossierFact());
        $this->assertNull($obj->getAnnulationDossierPaie());
        $this->assertNull($obj->getAnnulationFournisseur());
        $this->assertNull($obj->getAnnulationPlanFacturation());
        $this->assertNull($obj->getAnnulationPlanTache());
        $this->assertNull($obj->getAnnulationTache());
        $this->assertNull($obj->getAnnulationTarif());
        $this->assertNull($obj->getBlocageEdCli());
        $this->assertNull($obj->getBudgetTypeSaisie());
        $this->assertNull($obj->getChampsCritere1());
        $this->assertNull($obj->getChampsCritere10());
        $this->assertNull($obj->getChampsCritere2());
        $this->assertNull($obj->getChampsCritere3());
        $this->assertNull($obj->getChampsCritere4());
        $this->assertNull($obj->getChampsCritere5());
        $this->assertNull($obj->getChampsCritere6());
        $this->assertNull($obj->getChampsCritere7());
        $this->assertNull($obj->getChampsCritere8());
        $this->assertNull($obj->getChampsCritere9());
        $this->assertNull($obj->getChampsCritereAffaire1());
        $this->assertNull($obj->getChampsCritereAffaire10());
        $this->assertNull($obj->getChampsCritereAffaire2());
        $this->assertNull($obj->getChampsCritereAffaire3());
        $this->assertNull($obj->getChampsCritereAffaire4());
        $this->assertNull($obj->getChampsCritereAffaire5());
        $this->assertNull($obj->getChampsCritereAffaire6());
        $this->assertNull($obj->getChampsCritereAffaire7());
        $this->assertNull($obj->getChampsCritereAffaire8());
        $this->assertNull($obj->getChampsCritereAffaire9());
        $this->assertNull($obj->getChampsCritereArticle1());
        $this->assertNull($obj->getChampsCritereArticle10());
        $this->assertNull($obj->getChampsCritereArticle2());
        $this->assertNull($obj->getChampsCritereArticle3());
        $this->assertNull($obj->getChampsCritereArticle4());
        $this->assertNull($obj->getChampsCritereArticle5());
        $this->assertNull($obj->getChampsCritereArticle6());
        $this->assertNull($obj->getChampsCritereArticle7());
        $this->assertNull($obj->getChampsCritereArticle8());
        $this->assertNull($obj->getChampsCritereArticle9());
        $this->assertNull($obj->getChampsCritereEntPiece1());
        $this->assertNull($obj->getChampsCritereEntPiece10());
        $this->assertNull($obj->getChampsCritereEntPiece2());
        $this->assertNull($obj->getChampsCritereEntPiece3());
        $this->assertNull($obj->getChampsCritereEntPiece4());
        $this->assertNull($obj->getChampsCritereEntPiece5());
        $this->assertNull($obj->getChampsCritereEntPiece6());
        $this->assertNull($obj->getChampsCritereEntPiece7());
        $this->assertNull($obj->getChampsCritereEntPiece8());
        $this->assertNull($obj->getChampsCritereEntPiece9());
        $this->assertNull($obj->getChronoActivation());
        $this->assertNull($obj->getChronoPrefixe());
        $this->assertNull($obj->getChronoProchainNum());
        $this->assertNull($obj->getCleAccesCnPaie());
        $this->assertNull($obj->getCleAccesFicheClient());
        $this->assertNull($obj->getCleAccesMenus());
        $this->assertNull($obj->getCleAccesParam());
        $this->assertNull($obj->getCleDesEtrCommuns());
        $this->assertNull($obj->getCleJrnLibCommuns());
        $this->assertNull($obj->getCodeEmetteur());
        $this->assertNull($obj->getCodeExpertDefaut());
        $this->assertNull($obj->getCodeRegroupementPreFact());
        $this->assertNull($obj->getConversionPwd());
        $this->assertNull($obj->getCpteCollectifCli());
        $this->assertNull($obj->getCpteCollectifFrn());
        $this->assertNull($obj->getCreationAffaire());
        $this->assertNull($obj->getCreationArticle());
        $this->assertNull($obj->getCreationBonsTravaux());
        $this->assertNull($obj->getCreationChantier());
        $this->assertNull($obj->getCreationClient());
        $this->assertNull($obj->getCreationCommission());
        $this->assertNull($obj->getCreationDossierCpta());
        $this->assertNull($obj->getCreationDossierFact());
        $this->assertNull($obj->getCreationDossierPaie());
        $this->assertNull($obj->getCreationFournisseur());
        $this->assertNull($obj->getCreationPlanFacturation());
        $this->assertNull($obj->getCreationPlanTache());
        $this->assertNull($obj->getCreationProspect());
        $this->assertNull($obj->getCreationTache());
        $this->assertNull($obj->getCreationTarif());
        $this->assertNull($obj->getDateCloture());
        $this->assertNull($obj->getDtDernModifConfZone());
        $this->assertNull($obj->getEchAffEnMt());
        $this->assertNull($obj->getFonctionnementCGA());
        $this->assertNull($obj->getHeuresTrav1());
        $this->assertNull($obj->getHeuresTrav2());
        $this->assertNull($obj->getHeuresTrav3());
        $this->assertNull($obj->getHeuresTrav4());
        $this->assertNull($obj->getIncremAuto());
        $this->assertNull($obj->getIncremAutoAff());
        $this->assertNull($obj->getIncremAutoFrn());
        $this->assertNull($obj->getIncremCpteCliAuto());
        $this->assertNull($obj->getIncremCpteFrnAuto());
        $this->assertNull($obj->getIncrementCpteCli());
        $this->assertNull($obj->getIncrementCpteFrn());
        $this->assertNull($obj->getLiaisonBuCpta());
        $this->assertNull($obj->getLibAffectation1());
        $this->assertNull($obj->getLibAffectation2());
        $this->assertNull($obj->getLibAffectation3());
        $this->assertNull($obj->getLibAffectation4());
        $this->assertNull($obj->getLibAffectation5());
        $this->assertNull($obj->getLibAffectation6());
        $this->assertNull($obj->getLibAffectation7());
        $this->assertNull($obj->getLibCritere1());
        $this->assertNull($obj->getLibCritere10());
        $this->assertNull($obj->getLibCritere2());
        $this->assertNull($obj->getLibCritere3());
        $this->assertNull($obj->getLibCritere4());
        $this->assertNull($obj->getLibCritere5());
        $this->assertNull($obj->getLibCritere6());
        $this->assertNull($obj->getLibCritere7());
        $this->assertNull($obj->getLibCritere8());
        $this->assertNull($obj->getLibCritere9());
        $this->assertNull($obj->getLibCritereAffaire1());
        $this->assertNull($obj->getLibCritereAffaire10());
        $this->assertNull($obj->getLibCritereAffaire2());
        $this->assertNull($obj->getLibCritereAffaire3());
        $this->assertNull($obj->getLibCritereAffaire4());
        $this->assertNull($obj->getLibCritereAffaire5());
        $this->assertNull($obj->getLibCritereAffaire6());
        $this->assertNull($obj->getLibCritereAffaire7());
        $this->assertNull($obj->getLibCritereAffaire8());
        $this->assertNull($obj->getLibCritereAffaire9());
        $this->assertNull($obj->getLibCritereArticle1());
        $this->assertNull($obj->getLibCritereArticle10());
        $this->assertNull($obj->getLibCritereArticle2());
        $this->assertNull($obj->getLibCritereArticle3());
        $this->assertNull($obj->getLibCritereArticle4());
        $this->assertNull($obj->getLibCritereArticle5());
        $this->assertNull($obj->getLibCritereArticle6());
        $this->assertNull($obj->getLibCritereArticle7());
        $this->assertNull($obj->getLibCritereArticle8());
        $this->assertNull($obj->getLibCritereArticle9());
        $this->assertNull($obj->getLibCritereEntPiece1());
        $this->assertNull($obj->getLibCritereEntPiece10());
        $this->assertNull($obj->getLibCritereEntPiece2());
        $this->assertNull($obj->getLibCritereEntPiece3());
        $this->assertNull($obj->getLibCritereEntPiece4());
        $this->assertNull($obj->getLibCritereEntPiece5());
        $this->assertNull($obj->getLibCritereEntPiece6());
        $this->assertNull($obj->getLibCritereEntPiece7());
        $this->assertNull($obj->getLibCritereEntPiece8());
        $this->assertNull($obj->getLibCritereEntPiece9());
        $this->assertNull($obj->getLibCritereInterloc());
        $this->assertNull($obj->getLibCritereInterloc2());
        $this->assertNull($obj->getMajorHeuresTrav1());
        $this->assertNull($obj->getMajorHeuresTrav2());
        $this->assertNull($obj->getMajorHeuresTrav3());
        $this->assertNull($obj->getMajorHeuresTrav4());
        $this->assertNull($obj->getMntTicketRestoA());
        $this->assertNull($obj->getMntTicketRestoB());
        $this->assertNull($obj->getMntTicketRestoC());
        $this->assertNull($obj->getMntTicketRestoD());
        $this->assertNull($obj->getMntTicketRestoE());
        $this->assertNull($obj->getModifAffaire());
        $this->assertNull($obj->getModifArticle());
        $this->assertNull($obj->getModifBonsTravaux());
        $this->assertNull($obj->getModifChantier());
        $this->assertNull($obj->getModifClient());
        $this->assertNull($obj->getModifCommission());
        $this->assertNull($obj->getModifDossierFact());
        $this->assertNull($obj->getModifFournisseur());
        $this->assertNull($obj->getModifPlanFacturation());
        $this->assertNull($obj->getModifPlanTache());
        $this->assertNull($obj->getModifTache());
        $this->assertNull($obj->getModifTarif());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getNbDecMonnaie());
        $this->assertNull($obj->getNoDossCpta());
        $this->assertNull($obj->getNoDossPaie());
        $this->assertNull($obj->getPrefixeAff());
        $this->assertNull($obj->getPrioriteSaisieAff());
        $this->assertNull($obj->getPrioriteSaisieClient());
        $this->assertNull($obj->getPrioriteSaisieFrn());
        $this->assertNull($obj->getProchainCpteCli());
        $this->assertNull($obj->getProchainCpteFrn());
        $this->assertNull($obj->getProchainMoisOblig());
        $this->assertNull($obj->getProchainNumAff());
        $this->assertNull($obj->getPxKmA());
        $this->assertNull($obj->getPxKmB());
        $this->assertNull($obj->getPxKmC());
        $this->assertNull($obj->getPxKmD());
        $this->assertNull($obj->getPxKmE());
        $this->assertNull($obj->getQETCodeCollaborateurDest());
        $this->assertNull($obj->getQTELCodeMission());
        $this->assertNull($obj->getQTELCodeTache());
        $this->assertNull($obj->getQTELSpecial());
        $this->assertNull($obj->getRacDataCpta());
        $this->assertNull($obj->getRacDataPaie());
        $this->assertNull($obj->getRadicalCompteCli());
        $this->assertNull($obj->getRadicalCompteFrn());
        $this->assertNull($obj->getSaisDateFin());
        $this->assertNull($obj->getTDFC_AdhesionTotale());
        $this->assertNull($obj->getTDFC_Emetteur());
        $this->assertNull($obj->getTDFC_Facturant());
        $this->assertNull($obj->getTDFC_InfoTrans());
        $this->assertNull($obj->getTPInterditCreatMillesime());
        $this->assertNull($obj->getTPInterditCreatMission());
        $this->assertNull($obj->getTPPasClientsSortis());
        $this->assertNull($obj->getTPPasIntervenants());
        $this->assertNull($obj->getTPPrixInvisible());
        $this->assertNull($obj->getTPRempliPrefAuto());
        $this->assertNull($obj->getTPSaisieDOS());
        $this->assertNull($obj->getTpsPassesInterditPrix());
    }

    /**
     * Tests the setAccesAutoriseBonsTravaux() method.
     *
     * @return void
     */
    public function testSetAccesAutoriseBonsTravaux() {

        $obj = new Constantes();

        $obj->setAccesAutoriseBonsTravaux(true);
        $this->assertEquals(true, $obj->getAccesAutoriseBonsTravaux());
    }

    /**
     * Tests the setAccesAutorisePlanFacturation() method.
     *
     * @return void
     */
    public function testSetAccesAutorisePlanFacturation() {

        $obj = new Constantes();

        $obj->setAccesAutorisePlanFacturation(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanFacturation());
    }

    /**
     * Tests the setAccesAutorisePlanTache() method.
     *
     * @return void
     */
    public function testSetAccesAutorisePlanTache() {

        $obj = new Constantes();

        $obj->setAccesAutorisePlanTache(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanTache());
    }

    /**
     * Tests the setAccesDocsCab() method.
     *
     * @return void
     */
    public function testSetAccesDocsCab() {

        $obj = new Constantes();

        $obj->setAccesDocsCab(true);
        $this->assertEquals(true, $obj->getAccesDocsCab());
    }

    /**
     * Tests the setAccesDossierCpta() method.
     *
     * @return void
     */
    public function testSetAccesDossierCpta() {

        $obj = new Constantes();

        $obj->setAccesDossierCpta("accesDossierCpta");
        $this->assertEquals("accesDossierCpta", $obj->getAccesDossierCpta());
    }

    /**
     * Tests the setAccesDossierPaie() method.
     *
     * @return void
     */
    public function testSetAccesDossierPaie() {

        $obj = new Constantes();

        $obj->setAccesDossierPaie("accesDossierPaie");
        $this->assertEquals("accesDossierPaie", $obj->getAccesDossierPaie());
    }

    /**
     * Tests the setAccesStatCab() method.
     *
     * @return void
     */
    public function testSetAccesStatCab() {

        $obj = new Constantes();

        $obj->setAccesStatCab(true);
        $this->assertEquals(true, $obj->getAccesStatCab());
    }

    /**
     * Tests the setActivationConfCMAVCli() method.
     *
     * @return void
     */
    public function testSetActivationConfCMAVCli() {

        $obj = new Constantes();

        $obj->setActivationConfCMAVCli(true);
        $this->assertEquals(true, $obj->getActivationConfCMAVCli());
    }

    /**
     * Tests the setActivationConfControle() method.
     *
     * @return void
     */
    public function testSetActivationConfControle() {

        $obj = new Constantes();

        $obj->setActivationConfControle(true);
        $this->assertEquals(true, $obj->getActivationConfControle());
    }

    /**
     * Tests the setActivationLstRestri() method.
     *
     * @return void
     */
    public function testSetActivationLstRestri() {

        $obj = new Constantes();

        $obj->setActivationLstRestri(true);
        $this->assertEquals(true, $obj->getActivationLstRestri());
    }

    /**
     * Tests the setActivationNiveau2() method.
     *
     * @return void
     */
    public function testSetActivationNiveau2() {

        $obj = new Constantes();

        $obj->setActivationNiveau2(true);
        $this->assertEquals(true, $obj->getActivationNiveau2());
    }

    /**
     * Tests the setActivationNiveau3() method.
     *
     * @return void
     */
    public function testSetActivationNiveau3() {

        $obj = new Constantes();

        $obj->setActivationNiveau3(true);
        $this->assertEquals(true, $obj->getActivationNiveau3());
    }

    /**
     * Tests the setAffichePoint() method.
     *
     * @return void
     */
    public function testSetAffichePoint() {

        $obj = new Constantes();

        $obj->setAffichePoint(true);
        $this->assertEquals(true, $obj->getAffichePoint());
    }

    /**
     * Tests the setAfficheSemaine() method.
     *
     * @return void
     */
    public function testSetAfficheSemaine() {

        $obj = new Constantes();

        $obj->setAfficheSemaine(true);
        $this->assertEquals(true, $obj->getAfficheSemaine());
    }

    /**
     * Tests the setAnnulationAffaire() method.
     *
     * @return void
     */
    public function testSetAnnulationAffaire() {

        $obj = new Constantes();

        $obj->setAnnulationAffaire(true);
        $this->assertEquals(true, $obj->getAnnulationAffaire());
    }

    /**
     * Tests the setAnnulationArticle() method.
     *
     * @return void
     */
    public function testSetAnnulationArticle() {

        $obj = new Constantes();

        $obj->setAnnulationArticle(true);
        $this->assertEquals(true, $obj->getAnnulationArticle());
    }

    /**
     * Tests the setAnnulationBonsTravaux() method.
     *
     * @return void
     */
    public function testSetAnnulationBonsTravaux() {

        $obj = new Constantes();

        $obj->setAnnulationBonsTravaux(true);
        $this->assertEquals(true, $obj->getAnnulationBonsTravaux());
    }

    /**
     * Tests the setAnnulationChantier() method.
     *
     * @return void
     */
    public function testSetAnnulationChantier() {

        $obj = new Constantes();

        $obj->setAnnulationChantier(true);
        $this->assertEquals(true, $obj->getAnnulationChantier());
    }

    /**
     * Tests the setAnnulationClient() method.
     *
     * @return void
     */
    public function testSetAnnulationClient() {

        $obj = new Constantes();

        $obj->setAnnulationClient(true);
        $this->assertEquals(true, $obj->getAnnulationClient());
    }

    /**
     * Tests the setAnnulationCommission() method.
     *
     * @return void
     */
    public function testSetAnnulationCommission() {

        $obj = new Constantes();

        $obj->setAnnulationCommission(true);
        $this->assertEquals(true, $obj->getAnnulationCommission());
    }

    /**
     * Tests the setAnnulationDossierCpta() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierCpta() {

        $obj = new Constantes();

        $obj->setAnnulationDossierCpta(true);
        $this->assertEquals(true, $obj->getAnnulationDossierCpta());
    }

    /**
     * Tests the setAnnulationDossierFact() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierFact() {

        $obj = new Constantes();

        $obj->setAnnulationDossierFact(true);
        $this->assertEquals(true, $obj->getAnnulationDossierFact());
    }

    /**
     * Tests the setAnnulationDossierPaie() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierPaie() {

        $obj = new Constantes();

        $obj->setAnnulationDossierPaie(true);
        $this->assertEquals(true, $obj->getAnnulationDossierPaie());
    }

    /**
     * Tests the setAnnulationFournisseur() method.
     *
     * @return void
     */
    public function testSetAnnulationFournisseur() {

        $obj = new Constantes();

        $obj->setAnnulationFournisseur(true);
        $this->assertEquals(true, $obj->getAnnulationFournisseur());
    }

    /**
     * Tests the setAnnulationPlanFacturation() method.
     *
     * @return void
     */
    public function testSetAnnulationPlanFacturation() {

        $obj = new Constantes();

        $obj->setAnnulationPlanFacturation(true);
        $this->assertEquals(true, $obj->getAnnulationPlanFacturation());
    }

    /**
     * Tests the setAnnulationPlanTache() method.
     *
     * @return void
     */
    public function testSetAnnulationPlanTache() {

        $obj = new Constantes();

        $obj->setAnnulationPlanTache(true);
        $this->assertEquals(true, $obj->getAnnulationPlanTache());
    }

    /**
     * Tests the setAnnulationTache() method.
     *
     * @return void
     */
    public function testSetAnnulationTache() {

        $obj = new Constantes();

        $obj->setAnnulationTache(true);
        $this->assertEquals(true, $obj->getAnnulationTache());
    }

    /**
     * Tests the setAnnulationTarif() method.
     *
     * @return void
     */
    public function testSetAnnulationTarif() {

        $obj = new Constantes();

        $obj->setAnnulationTarif(true);
        $this->assertEquals(true, $obj->getAnnulationTarif());
    }

    /**
     * Tests the setBlocageEdCli() method.
     *
     * @return void
     */
    public function testSetBlocageEdCli() {

        $obj = new Constantes();

        $obj->setBlocageEdCli(true);
        $this->assertEquals(true, $obj->getBlocageEdCli());
    }

    /**
     * Tests the setBudgetTypeSaisie() method.
     *
     * @return void
     */
    public function testSetBudgetTypeSaisie() {

        $obj = new Constantes();

        $obj->setBudgetTypeSaisie(10);
        $this->assertEquals(10, $obj->getBudgetTypeSaisie());
    }

    /**
     * Tests the setChampsCritere1() method.
     *
     * @return void
     */
    public function testSetChampsCritere1() {

        $obj = new Constantes();

        $obj->setChampsCritere1("champsCritere1");
        $this->assertEquals("champsCritere1", $obj->getChampsCritere1());
    }

    /**
     * Tests the setChampsCritere10() method.
     *
     * @return void
     */
    public function testSetChampsCritere10() {

        $obj = new Constantes();

        $obj->setChampsCritere10("champsCritere10");
        $this->assertEquals("champsCritere10", $obj->getChampsCritere10());
    }

    /**
     * Tests the setChampsCritere2() method.
     *
     * @return void
     */
    public function testSetChampsCritere2() {

        $obj = new Constantes();

        $obj->setChampsCritere2("champsCritere2");
        $this->assertEquals("champsCritere2", $obj->getChampsCritere2());
    }

    /**
     * Tests the setChampsCritere3() method.
     *
     * @return void
     */
    public function testSetChampsCritere3() {

        $obj = new Constantes();

        $obj->setChampsCritere3("champsCritere3");
        $this->assertEquals("champsCritere3", $obj->getChampsCritere3());
    }

    /**
     * Tests the setChampsCritere4() method.
     *
     * @return void
     */
    public function testSetChampsCritere4() {

        $obj = new Constantes();

        $obj->setChampsCritere4("champsCritere4");
        $this->assertEquals("champsCritere4", $obj->getChampsCritere4());
    }

    /**
     * Tests the setChampsCritere5() method.
     *
     * @return void
     */
    public function testSetChampsCritere5() {

        $obj = new Constantes();

        $obj->setChampsCritere5("champsCritere5");
        $this->assertEquals("champsCritere5", $obj->getChampsCritere5());
    }

    /**
     * Tests the setChampsCritere6() method.
     *
     * @return void
     */
    public function testSetChampsCritere6() {

        $obj = new Constantes();

        $obj->setChampsCritere6("champsCritere6");
        $this->assertEquals("champsCritere6", $obj->getChampsCritere6());
    }

    /**
     * Tests the setChampsCritere7() method.
     *
     * @return void
     */
    public function testSetChampsCritere7() {

        $obj = new Constantes();

        $obj->setChampsCritere7("champsCritere7");
        $this->assertEquals("champsCritere7", $obj->getChampsCritere7());
    }

    /**
     * Tests the setChampsCritere8() method.
     *
     * @return void
     */
    public function testSetChampsCritere8() {

        $obj = new Constantes();

        $obj->setChampsCritere8("champsCritere8");
        $this->assertEquals("champsCritere8", $obj->getChampsCritere8());
    }

    /**
     * Tests the setChampsCritere9() method.
     *
     * @return void
     */
    public function testSetChampsCritere9() {

        $obj = new Constantes();

        $obj->setChampsCritere9("champsCritere9");
        $this->assertEquals("champsCritere9", $obj->getChampsCritere9());
    }

    /**
     * Tests the setChampsCritereAffaire1() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire1() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire1("champsCritereAffaire1");
        $this->assertEquals("champsCritereAffaire1", $obj->getChampsCritereAffaire1());
    }

    /**
     * Tests the setChampsCritereAffaire10() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire10() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire10("champsCritereAffaire10");
        $this->assertEquals("champsCritereAffaire10", $obj->getChampsCritereAffaire10());
    }

    /**
     * Tests the setChampsCritereAffaire2() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire2() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire2("champsCritereAffaire2");
        $this->assertEquals("champsCritereAffaire2", $obj->getChampsCritereAffaire2());
    }

    /**
     * Tests the setChampsCritereAffaire3() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire3() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire3("champsCritereAffaire3");
        $this->assertEquals("champsCritereAffaire3", $obj->getChampsCritereAffaire3());
    }

    /**
     * Tests the setChampsCritereAffaire4() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire4() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire4("champsCritereAffaire4");
        $this->assertEquals("champsCritereAffaire4", $obj->getChampsCritereAffaire4());
    }

    /**
     * Tests the setChampsCritereAffaire5() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire5() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire5("champsCritereAffaire5");
        $this->assertEquals("champsCritereAffaire5", $obj->getChampsCritereAffaire5());
    }

    /**
     * Tests the setChampsCritereAffaire6() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire6() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire6("champsCritereAffaire6");
        $this->assertEquals("champsCritereAffaire6", $obj->getChampsCritereAffaire6());
    }

    /**
     * Tests the setChampsCritereAffaire7() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire7() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire7("champsCritereAffaire7");
        $this->assertEquals("champsCritereAffaire7", $obj->getChampsCritereAffaire7());
    }

    /**
     * Tests the setChampsCritereAffaire8() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire8() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire8("champsCritereAffaire8");
        $this->assertEquals("champsCritereAffaire8", $obj->getChampsCritereAffaire8());
    }

    /**
     * Tests the setChampsCritereAffaire9() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire9() {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire9("champsCritereAffaire9");
        $this->assertEquals("champsCritereAffaire9", $obj->getChampsCritereAffaire9());
    }

    /**
     * Tests the setChampsCritereArticle1() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle1() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle1("champsCritereArticle1");
        $this->assertEquals("champsCritereArticle1", $obj->getChampsCritereArticle1());
    }

    /**
     * Tests the setChampsCritereArticle10() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle10() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle10("champsCritereArticle10");
        $this->assertEquals("champsCritereArticle10", $obj->getChampsCritereArticle10());
    }

    /**
     * Tests the setChampsCritereArticle2() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle2() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle2("champsCritereArticle2");
        $this->assertEquals("champsCritereArticle2", $obj->getChampsCritereArticle2());
    }

    /**
     * Tests the setChampsCritereArticle3() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle3() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle3("champsCritereArticle3");
        $this->assertEquals("champsCritereArticle3", $obj->getChampsCritereArticle3());
    }

    /**
     * Tests the setChampsCritereArticle4() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle4() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle4("champsCritereArticle4");
        $this->assertEquals("champsCritereArticle4", $obj->getChampsCritereArticle4());
    }

    /**
     * Tests the setChampsCritereArticle5() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle5() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle5("champsCritereArticle5");
        $this->assertEquals("champsCritereArticle5", $obj->getChampsCritereArticle5());
    }

    /**
     * Tests the setChampsCritereArticle6() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle6() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle6("champsCritereArticle6");
        $this->assertEquals("champsCritereArticle6", $obj->getChampsCritereArticle6());
    }

    /**
     * Tests the setChampsCritereArticle7() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle7() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle7("champsCritereArticle7");
        $this->assertEquals("champsCritereArticle7", $obj->getChampsCritereArticle7());
    }

    /**
     * Tests the setChampsCritereArticle8() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle8() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle8("champsCritereArticle8");
        $this->assertEquals("champsCritereArticle8", $obj->getChampsCritereArticle8());
    }

    /**
     * Tests the setChampsCritereArticle9() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle9() {

        $obj = new Constantes();

        $obj->setChampsCritereArticle9("champsCritereArticle9");
        $this->assertEquals("champsCritereArticle9", $obj->getChampsCritereArticle9());
    }

    /**
     * Tests the setChampsCritereEntPiece1() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece1() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece1("champsCritereEntPiece1");
        $this->assertEquals("champsCritereEntPiece1", $obj->getChampsCritereEntPiece1());
    }

    /**
     * Tests the setChampsCritereEntPiece10() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece10() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece10("champsCritereEntPiece10");
        $this->assertEquals("champsCritereEntPiece10", $obj->getChampsCritereEntPiece10());
    }

    /**
     * Tests the setChampsCritereEntPiece2() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece2() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece2("champsCritereEntPiece2");
        $this->assertEquals("champsCritereEntPiece2", $obj->getChampsCritereEntPiece2());
    }

    /**
     * Tests the setChampsCritereEntPiece3() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece3() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece3("champsCritereEntPiece3");
        $this->assertEquals("champsCritereEntPiece3", $obj->getChampsCritereEntPiece3());
    }

    /**
     * Tests the setChampsCritereEntPiece4() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece4() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece4("champsCritereEntPiece4");
        $this->assertEquals("champsCritereEntPiece4", $obj->getChampsCritereEntPiece4());
    }

    /**
     * Tests the setChampsCritereEntPiece5() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece5() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece5("champsCritereEntPiece5");
        $this->assertEquals("champsCritereEntPiece5", $obj->getChampsCritereEntPiece5());
    }

    /**
     * Tests the setChampsCritereEntPiece6() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece6() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece6("champsCritereEntPiece6");
        $this->assertEquals("champsCritereEntPiece6", $obj->getChampsCritereEntPiece6());
    }

    /**
     * Tests the setChampsCritereEntPiece7() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece7() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece7("champsCritereEntPiece7");
        $this->assertEquals("champsCritereEntPiece7", $obj->getChampsCritereEntPiece7());
    }

    /**
     * Tests the setChampsCritereEntPiece8() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece8() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece8("champsCritereEntPiece8");
        $this->assertEquals("champsCritereEntPiece8", $obj->getChampsCritereEntPiece8());
    }

    /**
     * Tests the setChampsCritereEntPiece9() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece9() {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece9("champsCritereEntPiece9");
        $this->assertEquals("champsCritereEntPiece9", $obj->getChampsCritereEntPiece9());
    }

    /**
     * Tests the setChronoActivation() method.
     *
     * @return void
     */
    public function testSetChronoActivation() {

        $obj = new Constantes();

        $obj->setChronoActivation(true);
        $this->assertEquals(true, $obj->getChronoActivation());
    }

    /**
     * Tests the setChronoPrefixe() method.
     *
     * @return void
     */
    public function testSetChronoPrefixe() {

        $obj = new Constantes();

        $obj->setChronoPrefixe("chronoPrefixe");
        $this->assertEquals("chronoPrefixe", $obj->getChronoPrefixe());
    }

    /**
     * Tests the setChronoProchainNum() method.
     *
     * @return void
     */
    public function testSetChronoProchainNum() {

        $obj = new Constantes();

        $obj->setChronoProchainNum(10);
        $this->assertEquals(10, $obj->getChronoProchainNum());
    }

    /**
     * Tests the setCleAccesCnPaie() method.
     *
     * @return void
     */
    public function testSetCleAccesCnPaie() {

        $obj = new Constantes();

        $obj->setCleAccesCnPaie("cleAccesCnPaie");
        $this->assertEquals("cleAccesCnPaie", $obj->getCleAccesCnPaie());
    }

    /**
     * Tests the setCleAccesFicheClient() method.
     *
     * @return void
     */
    public function testSetCleAccesFicheClient() {

        $obj = new Constantes();

        $obj->setCleAccesFicheClient("cleAccesFicheClient");
        $this->assertEquals("cleAccesFicheClient", $obj->getCleAccesFicheClient());
    }

    /**
     * Tests the setCleAccesMenus() method.
     *
     * @return void
     */
    public function testSetCleAccesMenus() {

        $obj = new Constantes();

        $obj->setCleAccesMenus("cleAccesMenus");
        $this->assertEquals("cleAccesMenus", $obj->getCleAccesMenus());
    }

    /**
     * Tests the setCleAccesParam() method.
     *
     * @return void
     */
    public function testSetCleAccesParam() {

        $obj = new Constantes();

        $obj->setCleAccesParam("cleAccesParam");
        $this->assertEquals("cleAccesParam", $obj->getCleAccesParam());
    }

    /**
     * Tests the setCleDesEtrCommuns() method.
     *
     * @return void
     */
    public function testSetCleDesEtrCommuns() {

        $obj = new Constantes();

        $obj->setCleDesEtrCommuns("cleDesEtrCommuns");
        $this->assertEquals("cleDesEtrCommuns", $obj->getCleDesEtrCommuns());
    }

    /**
     * Tests the setCleJrnLibCommuns() method.
     *
     * @return void
     */
    public function testSetCleJrnLibCommuns() {

        $obj = new Constantes();

        $obj->setCleJrnLibCommuns("cleJrnLibCommuns");
        $this->assertEquals("cleJrnLibCommuns", $obj->getCleJrnLibCommuns());
    }

    /**
     * Tests the setCodeEmetteur() method.
     *
     * @return void
     */
    public function testSetCodeEmetteur() {

        $obj = new Constantes();

        $obj->setCodeEmetteur("codeEmetteur");
        $this->assertEquals("codeEmetteur", $obj->getCodeEmetteur());
    }

    /**
     * Tests the setCodeExpertDefaut() method.
     *
     * @return void
     */
    public function testSetCodeExpertDefaut() {

        $obj = new Constantes();

        $obj->setCodeExpertDefaut("codeExpertDefaut");
        $this->assertEquals("codeExpertDefaut", $obj->getCodeExpertDefaut());
    }

    /**
     * Tests the setCodeRegroupementPreFact() method.
     *
     * @return void
     */
    public function testSetCodeRegroupementPreFact() {

        $obj = new Constantes();

        $obj->setCodeRegroupementPreFact("codeRegroupementPreFact");
        $this->assertEquals("codeRegroupementPreFact", $obj->getCodeRegroupementPreFact());
    }

    /**
     * Tests the setConversionPwd() method.
     *
     * @return void
     */
    public function testSetConversionPwd() {

        $obj = new Constantes();

        $obj->setConversionPwd(true);
        $this->assertEquals(true, $obj->getConversionPwd());
    }

    /**
     * Tests the setCpteCollectifCli() method.
     *
     * @return void
     */
    public function testSetCpteCollectifCli() {

        $obj = new Constantes();

        $obj->setCpteCollectifCli("cpteCollectifCli");
        $this->assertEquals("cpteCollectifCli", $obj->getCpteCollectifCli());
    }

    /**
     * Tests the setCpteCollectifFrn() method.
     *
     * @return void
     */
    public function testSetCpteCollectifFrn() {

        $obj = new Constantes();

        $obj->setCpteCollectifFrn("cpteCollectifFrn");
        $this->assertEquals("cpteCollectifFrn", $obj->getCpteCollectifFrn());
    }

    /**
     * Tests the setCreationAffaire() method.
     *
     * @return void
     */
    public function testSetCreationAffaire() {

        $obj = new Constantes();

        $obj->setCreationAffaire(true);
        $this->assertEquals(true, $obj->getCreationAffaire());
    }

    /**
     * Tests the setCreationArticle() method.
     *
     * @return void
     */
    public function testSetCreationArticle() {

        $obj = new Constantes();

        $obj->setCreationArticle(true);
        $this->assertEquals(true, $obj->getCreationArticle());
    }

    /**
     * Tests the setCreationBonsTravaux() method.
     *
     * @return void
     */
    public function testSetCreationBonsTravaux() {

        $obj = new Constantes();

        $obj->setCreationBonsTravaux(true);
        $this->assertEquals(true, $obj->getCreationBonsTravaux());
    }

    /**
     * Tests the setCreationChantier() method.
     *
     * @return void
     */
    public function testSetCreationChantier() {

        $obj = new Constantes();

        $obj->setCreationChantier(true);
        $this->assertEquals(true, $obj->getCreationChantier());
    }

    /**
     * Tests the setCreationClient() method.
     *
     * @return void
     */
    public function testSetCreationClient() {

        $obj = new Constantes();

        $obj->setCreationClient(true);
        $this->assertEquals(true, $obj->getCreationClient());
    }

    /**
     * Tests the setCreationCommission() method.
     *
     * @return void
     */
    public function testSetCreationCommission() {

        $obj = new Constantes();

        $obj->setCreationCommission(true);
        $this->assertEquals(true, $obj->getCreationCommission());
    }

    /**
     * Tests the setCreationDossierCpta() method.
     *
     * @return void
     */
    public function testSetCreationDossierCpta() {

        $obj = new Constantes();

        $obj->setCreationDossierCpta(true);
        $this->assertEquals(true, $obj->getCreationDossierCpta());
    }

    /**
     * Tests the setCreationDossierFact() method.
     *
     * @return void
     */
    public function testSetCreationDossierFact() {

        $obj = new Constantes();

        $obj->setCreationDossierFact(true);
        $this->assertEquals(true, $obj->getCreationDossierFact());
    }

    /**
     * Tests the setCreationDossierPaie() method.
     *
     * @return void
     */
    public function testSetCreationDossierPaie() {

        $obj = new Constantes();

        $obj->setCreationDossierPaie(true);
        $this->assertEquals(true, $obj->getCreationDossierPaie());
    }

    /**
     * Tests the setCreationFournisseur() method.
     *
     * @return void
     */
    public function testSetCreationFournisseur() {

        $obj = new Constantes();

        $obj->setCreationFournisseur(true);
        $this->assertEquals(true, $obj->getCreationFournisseur());
    }

    /**
     * Tests the setCreationPlanFacturation() method.
     *
     * @return void
     */
    public function testSetCreationPlanFacturation() {

        $obj = new Constantes();

        $obj->setCreationPlanFacturation(true);
        $this->assertEquals(true, $obj->getCreationPlanFacturation());
    }

    /**
     * Tests the setCreationPlanTache() method.
     *
     * @return void
     */
    public function testSetCreationPlanTache() {

        $obj = new Constantes();

        $obj->setCreationPlanTache(true);
        $this->assertEquals(true, $obj->getCreationPlanTache());
    }

    /**
     * Tests the setCreationProspect() method.
     *
     * @return void
     */
    public function testSetCreationProspect() {

        $obj = new Constantes();

        $obj->setCreationProspect(true);
        $this->assertEquals(true, $obj->getCreationProspect());
    }

    /**
     * Tests the setCreationTache() method.
     *
     * @return void
     */
    public function testSetCreationTache() {

        $obj = new Constantes();

        $obj->setCreationTache(true);
        $this->assertEquals(true, $obj->getCreationTache());
    }

    /**
     * Tests the setCreationTarif() method.
     *
     * @return void
     */
    public function testSetCreationTarif() {

        $obj = new Constantes();

        $obj->setCreationTarif(true);
        $this->assertEquals(true, $obj->getCreationTarif());
    }

    /**
     * Tests the setDateCloture() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCloture() {

        $obj = new Constantes();

        $obj->setDateCloture(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCloture());
    }

    /**
     * Tests the setDtDernModifConfZone() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernModifConfZone() {

        $obj = new Constantes();

        $obj->setDtDernModifConfZone(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDernModifConfZone());
    }

    /**
     * Tests the setEchAffEnMt() method.
     *
     * @return void
     */
    public function testSetEchAffEnMt() {

        $obj = new Constantes();

        $obj->setEchAffEnMt(true);
        $this->assertEquals(true, $obj->getEchAffEnMt());
    }

    /**
     * Tests the setFonctionnementCGA() method.
     *
     * @return void
     */
    public function testSetFonctionnementCGA() {

        $obj = new Constantes();

        $obj->setFonctionnementCGA(true);
        $this->assertEquals(true, $obj->getFonctionnementCGA());
    }

    /**
     * Tests the setHeuresTrav1() method.
     *
     * @return void
     */
    public function testSetHeuresTrav1() {

        $obj = new Constantes();

        $obj->setHeuresTrav1(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav1());
    }

    /**
     * Tests the setHeuresTrav2() method.
     *
     * @return void
     */
    public function testSetHeuresTrav2() {

        $obj = new Constantes();

        $obj->setHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav2());
    }

    /**
     * Tests the setHeuresTrav3() method.
     *
     * @return void
     */
    public function testSetHeuresTrav3() {

        $obj = new Constantes();

        $obj->setHeuresTrav3(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav3());
    }

    /**
     * Tests the setHeuresTrav4() method.
     *
     * @return void
     */
    public function testSetHeuresTrav4() {

        $obj = new Constantes();

        $obj->setHeuresTrav4(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav4());
    }

    /**
     * Tests the setIncremAuto() method.
     *
     * @return void
     */
    public function testSetIncremAuto() {

        $obj = new Constantes();

        $obj->setIncremAuto(true);
        $this->assertEquals(true, $obj->getIncremAuto());
    }

    /**
     * Tests the setIncremAutoAff() method.
     *
     * @return void
     */
    public function testSetIncremAutoAff() {

        $obj = new Constantes();

        $obj->setIncremAutoAff(true);
        $this->assertEquals(true, $obj->getIncremAutoAff());
    }

    /**
     * Tests the setIncremAutoFrn() method.
     *
     * @return void
     */
    public function testSetIncremAutoFrn() {

        $obj = new Constantes();

        $obj->setIncremAutoFrn(true);
        $this->assertEquals(true, $obj->getIncremAutoFrn());
    }

    /**
     * Tests the setIncremCpteCliAuto() method.
     *
     * @return void
     */
    public function testSetIncremCpteCliAuto() {

        $obj = new Constantes();

        $obj->setIncremCpteCliAuto(true);
        $this->assertEquals(true, $obj->getIncremCpteCliAuto());
    }

    /**
     * Tests the setIncremCpteFrnAuto() method.
     *
     * @return void
     */
    public function testSetIncremCpteFrnAuto() {

        $obj = new Constantes();

        $obj->setIncremCpteFrnAuto(true);
        $this->assertEquals(true, $obj->getIncremCpteFrnAuto());
    }

    /**
     * Tests the setIncrementCpteCli() method.
     *
     * @return void
     */
    public function testSetIncrementCpteCli() {

        $obj = new Constantes();

        $obj->setIncrementCpteCli(10);
        $this->assertEquals(10, $obj->getIncrementCpteCli());
    }

    /**
     * Tests the setIncrementCpteFrn() method.
     *
     * @return void
     */
    public function testSetIncrementCpteFrn() {

        $obj = new Constantes();

        $obj->setIncrementCpteFrn(10);
        $this->assertEquals(10, $obj->getIncrementCpteFrn());
    }

    /**
     * Tests the setLiaisonBuCpta() method.
     *
     * @return void
     */
    public function testSetLiaisonBuCpta() {

        $obj = new Constantes();

        $obj->setLiaisonBuCpta(true);
        $this->assertEquals(true, $obj->getLiaisonBuCpta());
    }

    /**
     * Tests the setLibAffectation1() method.
     *
     * @return void
     */
    public function testSetLibAffectation1() {

        $obj = new Constantes();

        $obj->setLibAffectation1("libAffectation1");
        $this->assertEquals("libAffectation1", $obj->getLibAffectation1());
    }

    /**
     * Tests the setLibAffectation2() method.
     *
     * @return void
     */
    public function testSetLibAffectation2() {

        $obj = new Constantes();

        $obj->setLibAffectation2("libAffectation2");
        $this->assertEquals("libAffectation2", $obj->getLibAffectation2());
    }

    /**
     * Tests the setLibAffectation3() method.
     *
     * @return void
     */
    public function testSetLibAffectation3() {

        $obj = new Constantes();

        $obj->setLibAffectation3("libAffectation3");
        $this->assertEquals("libAffectation3", $obj->getLibAffectation3());
    }

    /**
     * Tests the setLibAffectation4() method.
     *
     * @return void
     */
    public function testSetLibAffectation4() {

        $obj = new Constantes();

        $obj->setLibAffectation4("libAffectation4");
        $this->assertEquals("libAffectation4", $obj->getLibAffectation4());
    }

    /**
     * Tests the setLibAffectation5() method.
     *
     * @return void
     */
    public function testSetLibAffectation5() {

        $obj = new Constantes();

        $obj->setLibAffectation5("libAffectation5");
        $this->assertEquals("libAffectation5", $obj->getLibAffectation5());
    }

    /**
     * Tests the setLibAffectation6() method.
     *
     * @return void
     */
    public function testSetLibAffectation6() {

        $obj = new Constantes();

        $obj->setLibAffectation6("libAffectation6");
        $this->assertEquals("libAffectation6", $obj->getLibAffectation6());
    }

    /**
     * Tests the setLibAffectation7() method.
     *
     * @return void
     */
    public function testSetLibAffectation7() {

        $obj = new Constantes();

        $obj->setLibAffectation7("libAffectation7");
        $this->assertEquals("libAffectation7", $obj->getLibAffectation7());
    }

    /**
     * Tests the setLibCritere1() method.
     *
     * @return void
     */
    public function testSetLibCritere1() {

        $obj = new Constantes();

        $obj->setLibCritere1("libCritere1");
        $this->assertEquals("libCritere1", $obj->getLibCritere1());
    }

    /**
     * Tests the setLibCritere10() method.
     *
     * @return void
     */
    public function testSetLibCritere10() {

        $obj = new Constantes();

        $obj->setLibCritere10("libCritere10");
        $this->assertEquals("libCritere10", $obj->getLibCritere10());
    }

    /**
     * Tests the setLibCritere2() method.
     *
     * @return void
     */
    public function testSetLibCritere2() {

        $obj = new Constantes();

        $obj->setLibCritere2("libCritere2");
        $this->assertEquals("libCritere2", $obj->getLibCritere2());
    }

    /**
     * Tests the setLibCritere3() method.
     *
     * @return void
     */
    public function testSetLibCritere3() {

        $obj = new Constantes();

        $obj->setLibCritere3("libCritere3");
        $this->assertEquals("libCritere3", $obj->getLibCritere3());
    }

    /**
     * Tests the setLibCritere4() method.
     *
     * @return void
     */
    public function testSetLibCritere4() {

        $obj = new Constantes();

        $obj->setLibCritere4("libCritere4");
        $this->assertEquals("libCritere4", $obj->getLibCritere4());
    }

    /**
     * Tests the setLibCritere5() method.
     *
     * @return void
     */
    public function testSetLibCritere5() {

        $obj = new Constantes();

        $obj->setLibCritere5("libCritere5");
        $this->assertEquals("libCritere5", $obj->getLibCritere5());
    }

    /**
     * Tests the setLibCritere6() method.
     *
     * @return void
     */
    public function testSetLibCritere6() {

        $obj = new Constantes();

        $obj->setLibCritere6("libCritere6");
        $this->assertEquals("libCritere6", $obj->getLibCritere6());
    }

    /**
     * Tests the setLibCritere7() method.
     *
     * @return void
     */
    public function testSetLibCritere7() {

        $obj = new Constantes();

        $obj->setLibCritere7("libCritere7");
        $this->assertEquals("libCritere7", $obj->getLibCritere7());
    }

    /**
     * Tests the setLibCritere8() method.
     *
     * @return void
     */
    public function testSetLibCritere8() {

        $obj = new Constantes();

        $obj->setLibCritere8("libCritere8");
        $this->assertEquals("libCritere8", $obj->getLibCritere8());
    }

    /**
     * Tests the setLibCritere9() method.
     *
     * @return void
     */
    public function testSetLibCritere9() {

        $obj = new Constantes();

        $obj->setLibCritere9("libCritere9");
        $this->assertEquals("libCritere9", $obj->getLibCritere9());
    }

    /**
     * Tests the setLibCritereAffaire1() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire1() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire1("libCritereAffaire1");
        $this->assertEquals("libCritereAffaire1", $obj->getLibCritereAffaire1());
    }

    /**
     * Tests the setLibCritereAffaire10() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire10() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire10("libCritereAffaire10");
        $this->assertEquals("libCritereAffaire10", $obj->getLibCritereAffaire10());
    }

    /**
     * Tests the setLibCritereAffaire2() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire2() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire2("libCritereAffaire2");
        $this->assertEquals("libCritereAffaire2", $obj->getLibCritereAffaire2());
    }

    /**
     * Tests the setLibCritereAffaire3() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire3() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire3("libCritereAffaire3");
        $this->assertEquals("libCritereAffaire3", $obj->getLibCritereAffaire3());
    }

    /**
     * Tests the setLibCritereAffaire4() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire4() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire4("libCritereAffaire4");
        $this->assertEquals("libCritereAffaire4", $obj->getLibCritereAffaire4());
    }

    /**
     * Tests the setLibCritereAffaire5() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire5() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire5("libCritereAffaire5");
        $this->assertEquals("libCritereAffaire5", $obj->getLibCritereAffaire5());
    }

    /**
     * Tests the setLibCritereAffaire6() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire6() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire6("libCritereAffaire6");
        $this->assertEquals("libCritereAffaire6", $obj->getLibCritereAffaire6());
    }

    /**
     * Tests the setLibCritereAffaire7() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire7() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire7("libCritereAffaire7");
        $this->assertEquals("libCritereAffaire7", $obj->getLibCritereAffaire7());
    }

    /**
     * Tests the setLibCritereAffaire8() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire8() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire8("libCritereAffaire8");
        $this->assertEquals("libCritereAffaire8", $obj->getLibCritereAffaire8());
    }

    /**
     * Tests the setLibCritereAffaire9() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire9() {

        $obj = new Constantes();

        $obj->setLibCritereAffaire9("libCritereAffaire9");
        $this->assertEquals("libCritereAffaire9", $obj->getLibCritereAffaire9());
    }

    /**
     * Tests the setLibCritereArticle1() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle1() {

        $obj = new Constantes();

        $obj->setLibCritereArticle1("libCritereArticle1");
        $this->assertEquals("libCritereArticle1", $obj->getLibCritereArticle1());
    }

    /**
     * Tests the setLibCritereArticle10() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle10() {

        $obj = new Constantes();

        $obj->setLibCritereArticle10("libCritereArticle10");
        $this->assertEquals("libCritereArticle10", $obj->getLibCritereArticle10());
    }

    /**
     * Tests the setLibCritereArticle2() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle2() {

        $obj = new Constantes();

        $obj->setLibCritereArticle2("libCritereArticle2");
        $this->assertEquals("libCritereArticle2", $obj->getLibCritereArticle2());
    }

    /**
     * Tests the setLibCritereArticle3() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle3() {

        $obj = new Constantes();

        $obj->setLibCritereArticle3("libCritereArticle3");
        $this->assertEquals("libCritereArticle3", $obj->getLibCritereArticle3());
    }

    /**
     * Tests the setLibCritereArticle4() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle4() {

        $obj = new Constantes();

        $obj->setLibCritereArticle4("libCritereArticle4");
        $this->assertEquals("libCritereArticle4", $obj->getLibCritereArticle4());
    }

    /**
     * Tests the setLibCritereArticle5() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle5() {

        $obj = new Constantes();

        $obj->setLibCritereArticle5("libCritereArticle5");
        $this->assertEquals("libCritereArticle5", $obj->getLibCritereArticle5());
    }

    /**
     * Tests the setLibCritereArticle6() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle6() {

        $obj = new Constantes();

        $obj->setLibCritereArticle6("libCritereArticle6");
        $this->assertEquals("libCritereArticle6", $obj->getLibCritereArticle6());
    }

    /**
     * Tests the setLibCritereArticle7() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle7() {

        $obj = new Constantes();

        $obj->setLibCritereArticle7("libCritereArticle7");
        $this->assertEquals("libCritereArticle7", $obj->getLibCritereArticle7());
    }

    /**
     * Tests the setLibCritereArticle8() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle8() {

        $obj = new Constantes();

        $obj->setLibCritereArticle8("libCritereArticle8");
        $this->assertEquals("libCritereArticle8", $obj->getLibCritereArticle8());
    }

    /**
     * Tests the setLibCritereArticle9() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle9() {

        $obj = new Constantes();

        $obj->setLibCritereArticle9("libCritereArticle9");
        $this->assertEquals("libCritereArticle9", $obj->getLibCritereArticle9());
    }

    /**
     * Tests the setLibCritereEntPiece1() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece1() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece1("libCritereEntPiece1");
        $this->assertEquals("libCritereEntPiece1", $obj->getLibCritereEntPiece1());
    }

    /**
     * Tests the setLibCritereEntPiece10() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece10() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece10("libCritereEntPiece10");
        $this->assertEquals("libCritereEntPiece10", $obj->getLibCritereEntPiece10());
    }

    /**
     * Tests the setLibCritereEntPiece2() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece2() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece2("libCritereEntPiece2");
        $this->assertEquals("libCritereEntPiece2", $obj->getLibCritereEntPiece2());
    }

    /**
     * Tests the setLibCritereEntPiece3() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece3() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece3("libCritereEntPiece3");
        $this->assertEquals("libCritereEntPiece3", $obj->getLibCritereEntPiece3());
    }

    /**
     * Tests the setLibCritereEntPiece4() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece4() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece4("libCritereEntPiece4");
        $this->assertEquals("libCritereEntPiece4", $obj->getLibCritereEntPiece4());
    }

    /**
     * Tests the setLibCritereEntPiece5() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece5() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece5("libCritereEntPiece5");
        $this->assertEquals("libCritereEntPiece5", $obj->getLibCritereEntPiece5());
    }

    /**
     * Tests the setLibCritereEntPiece6() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece6() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece6("libCritereEntPiece6");
        $this->assertEquals("libCritereEntPiece6", $obj->getLibCritereEntPiece6());
    }

    /**
     * Tests the setLibCritereEntPiece7() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece7() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece7("libCritereEntPiece7");
        $this->assertEquals("libCritereEntPiece7", $obj->getLibCritereEntPiece7());
    }

    /**
     * Tests the setLibCritereEntPiece8() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece8() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece8("libCritereEntPiece8");
        $this->assertEquals("libCritereEntPiece8", $obj->getLibCritereEntPiece8());
    }

    /**
     * Tests the setLibCritereEntPiece9() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece9() {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece9("libCritereEntPiece9");
        $this->assertEquals("libCritereEntPiece9", $obj->getLibCritereEntPiece9());
    }

    /**
     * Tests the setLibCritereInterloc() method.
     *
     * @return void
     */
    public function testSetLibCritereInterloc() {

        $obj = new Constantes();

        $obj->setLibCritereInterloc("libCritereInterloc");
        $this->assertEquals("libCritereInterloc", $obj->getLibCritereInterloc());
    }

    /**
     * Tests the setLibCritereInterloc2() method.
     *
     * @return void
     */
    public function testSetLibCritereInterloc2() {

        $obj = new Constantes();

        $obj->setLibCritereInterloc2("libCritereInterloc2");
        $this->assertEquals("libCritereInterloc2", $obj->getLibCritereInterloc2());
    }

    /**
     * Tests the setMajorHeuresTrav1() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav1() {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav1(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav1());
    }

    /**
     * Tests the setMajorHeuresTrav2() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav2() {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav2());
    }

    /**
     * Tests the setMajorHeuresTrav3() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav3() {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav3(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav3());
    }

    /**
     * Tests the setMajorHeuresTrav4() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav4() {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav4(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav4());
    }

    /**
     * Tests the setMntTicketRestoA() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoA() {

        $obj = new Constantes();

        $obj->setMntTicketRestoA(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoA());
    }

    /**
     * Tests the setMntTicketRestoB() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoB() {

        $obj = new Constantes();

        $obj->setMntTicketRestoB(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoB());
    }

    /**
     * Tests the setMntTicketRestoC() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoC() {

        $obj = new Constantes();

        $obj->setMntTicketRestoC(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoC());
    }

    /**
     * Tests the setMntTicketRestoD() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoD() {

        $obj = new Constantes();

        $obj->setMntTicketRestoD(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoD());
    }

    /**
     * Tests the setMntTicketRestoE() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoE() {

        $obj = new Constantes();

        $obj->setMntTicketRestoE(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoE());
    }

    /**
     * Tests the setModifAffaire() method.
     *
     * @return void
     */
    public function testSetModifAffaire() {

        $obj = new Constantes();

        $obj->setModifAffaire("modifAffaire");
        $this->assertEquals("modifAffaire", $obj->getModifAffaire());
    }

    /**
     * Tests the setModifArticle() method.
     *
     * @return void
     */
    public function testSetModifArticle() {

        $obj = new Constantes();

        $obj->setModifArticle("modifArticle");
        $this->assertEquals("modifArticle", $obj->getModifArticle());
    }

    /**
     * Tests the setModifBonsTravaux() method.
     *
     * @return void
     */
    public function testSetModifBonsTravaux() {

        $obj = new Constantes();

        $obj->setModifBonsTravaux("modifBonsTravaux");
        $this->assertEquals("modifBonsTravaux", $obj->getModifBonsTravaux());
    }

    /**
     * Tests the setModifChantier() method.
     *
     * @return void
     */
    public function testSetModifChantier() {

        $obj = new Constantes();

        $obj->setModifChantier("modifChantier");
        $this->assertEquals("modifChantier", $obj->getModifChantier());
    }

    /**
     * Tests the setModifClient() method.
     *
     * @return void
     */
    public function testSetModifClient() {

        $obj = new Constantes();

        $obj->setModifClient("modifClient");
        $this->assertEquals("modifClient", $obj->getModifClient());
    }

    /**
     * Tests the setModifCommission() method.
     *
     * @return void
     */
    public function testSetModifCommission() {

        $obj = new Constantes();

        $obj->setModifCommission("modifCommission");
        $this->assertEquals("modifCommission", $obj->getModifCommission());
    }

    /**
     * Tests the setModifDossierFact() method.
     *
     * @return void
     */
    public function testSetModifDossierFact() {

        $obj = new Constantes();

        $obj->setModifDossierFact("modifDossierFact");
        $this->assertEquals("modifDossierFact", $obj->getModifDossierFact());
    }

    /**
     * Tests the setModifFournisseur() method.
     *
     * @return void
     */
    public function testSetModifFournisseur() {

        $obj = new Constantes();

        $obj->setModifFournisseur("modifFournisseur");
        $this->assertEquals("modifFournisseur", $obj->getModifFournisseur());
    }

    /**
     * Tests the setModifPlanFacturation() method.
     *
     * @return void
     */
    public function testSetModifPlanFacturation() {

        $obj = new Constantes();

        $obj->setModifPlanFacturation("modifPlanFacturation");
        $this->assertEquals("modifPlanFacturation", $obj->getModifPlanFacturation());
    }

    /**
     * Tests the setModifPlanTache() method.
     *
     * @return void
     */
    public function testSetModifPlanTache() {

        $obj = new Constantes();

        $obj->setModifPlanTache("modifPlanTache");
        $this->assertEquals("modifPlanTache", $obj->getModifPlanTache());
    }

    /**
     * Tests the setModifTache() method.
     *
     * @return void
     */
    public function testSetModifTache() {

        $obj = new Constantes();

        $obj->setModifTache("modifTache");
        $this->assertEquals("modifTache", $obj->getModifTache());
    }

    /**
     * Tests the setModifTarif() method.
     *
     * @return void
     */
    public function testSetModifTarif() {

        $obj = new Constantes();

        $obj->setModifTarif("modifTarif");
        $this->assertEquals("modifTarif", $obj->getModifTarif());
    }

    /**
     * Tests the setMonnaie() method.
     *
     * @return void
     */
    public function testSetMonnaie() {

        $obj = new Constantes();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests the setNbDecMonnaie() method.
     *
     * @return void
     */
    public function testSetNbDecMonnaie() {

        $obj = new Constantes();

        $obj->setNbDecMonnaie(10);
        $this->assertEquals(10, $obj->getNbDecMonnaie());
    }

    /**
     * Tests the setNoDossCpta() method.
     *
     * @return void
     */
    public function testSetNoDossCpta() {

        $obj = new Constantes();

        $obj->setNoDossCpta("noDossCpta");
        $this->assertEquals("noDossCpta", $obj->getNoDossCpta());
    }

    /**
     * Tests the setNoDossPaie() method.
     *
     * @return void
     */
    public function testSetNoDossPaie() {

        $obj = new Constantes();

        $obj->setNoDossPaie("noDossPaie");
        $this->assertEquals("noDossPaie", $obj->getNoDossPaie());
    }

    /**
     * Tests the setPrefixeAff() method.
     *
     * @return void
     */
    public function testSetPrefixeAff() {

        $obj = new Constantes();

        $obj->setPrefixeAff("prefixeAff");
        $this->assertEquals("prefixeAff", $obj->getPrefixeAff());
    }

    /**
     * Tests the setPrioriteSaisieAff() method.
     *
     * @return void
     */
    public function testSetPrioriteSaisieAff() {

        $obj = new Constantes();

        $obj->setPrioriteSaisieAff(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieAff());
    }

    /**
     * Tests the setPrioriteSaisieClient() method.
     *
     * @return void
     */
    public function testSetPrioriteSaisieClient() {

        $obj = new Constantes();

        $obj->setPrioriteSaisieClient(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieClient());
    }

    /**
     * Tests the setPrioriteSaisieFrn() method.
     *
     * @return void
     */
    public function testSetPrioriteSaisieFrn() {

        $obj = new Constantes();

        $obj->setPrioriteSaisieFrn(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieFrn());
    }

    /**
     * Tests the setProchainCpteCli() method.
     *
     * @return void
     */
    public function testSetProchainCpteCli() {

        $obj = new Constantes();

        $obj->setProchainCpteCli("prochainCpteCli");
        $this->assertEquals("prochainCpteCli", $obj->getProchainCpteCli());
    }

    /**
     * Tests the setProchainCpteFrn() method.
     *
     * @return void
     */
    public function testSetProchainCpteFrn() {

        $obj = new Constantes();

        $obj->setProchainCpteFrn("prochainCpteFrn");
        $this->assertEquals("prochainCpteFrn", $obj->getProchainCpteFrn());
    }

    /**
     * Tests the setProchainMoisOblig() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetProchainMoisOblig() {

        $obj = new Constantes();

        $obj->setProchainMoisOblig(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getProchainMoisOblig());
    }

    /**
     * Tests the setProchainNumAff() method.
     *
     * @return void
     */
    public function testSetProchainNumAff() {

        $obj = new Constantes();

        $obj->setProchainNumAff(10);
        $this->assertEquals(10, $obj->getProchainNumAff());
    }

    /**
     * Tests the setPxKmA() method.
     *
     * @return void
     */
    public function testSetPxKmA() {

        $obj = new Constantes();

        $obj->setPxKmA(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmA());
    }

    /**
     * Tests the setPxKmB() method.
     *
     * @return void
     */
    public function testSetPxKmB() {

        $obj = new Constantes();

        $obj->setPxKmB(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmB());
    }

    /**
     * Tests the setPxKmC() method.
     *
     * @return void
     */
    public function testSetPxKmC() {

        $obj = new Constantes();

        $obj->setPxKmC(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmC());
    }

    /**
     * Tests the setPxKmD() method.
     *
     * @return void
     */
    public function testSetPxKmD() {

        $obj = new Constantes();

        $obj->setPxKmD(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmD());
    }

    /**
     * Tests the setPxKmE() method.
     *
     * @return void
     */
    public function testSetPxKmE() {

        $obj = new Constantes();

        $obj->setPxKmE(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmE());
    }

    /**
     * Tests the setQETCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetQETCodeCollaborateurDest() {

        $obj = new Constantes();

        $obj->setQETCodeCollaborateurDest("qETCodeCollaborateurDest");
        $this->assertEquals("qETCodeCollaborateurDest", $obj->getQETCodeCollaborateurDest());
    }

    /**
     * Tests the setQTELCodeMission() method.
     *
     * @return void
     */
    public function testSetQTELCodeMission() {

        $obj = new Constantes();

        $obj->setQTELCodeMission("qTELCodeMission");
        $this->assertEquals("qTELCodeMission", $obj->getQTELCodeMission());
    }

    /**
     * Tests the setQTELCodeTache() method.
     *
     * @return void
     */
    public function testSetQTELCodeTache() {

        $obj = new Constantes();

        $obj->setQTELCodeTache("qTELCodeTache");
        $this->assertEquals("qTELCodeTache", $obj->getQTELCodeTache());
    }

    /**
     * Tests the setQTELSpecial() method.
     *
     * @return void
     */
    public function testSetQTELSpecial() {

        $obj = new Constantes();

        $obj->setQTELSpecial(10);
        $this->assertEquals(10, $obj->getQTELSpecial());
    }

    /**
     * Tests the setRacDataCpta() method.
     *
     * @return void
     */
    public function testSetRacDataCpta() {

        $obj = new Constantes();

        $obj->setRacDataCpta("racDataCpta");
        $this->assertEquals("racDataCpta", $obj->getRacDataCpta());
    }

    /**
     * Tests the setRacDataPaie() method.
     *
     * @return void
     */
    public function testSetRacDataPaie() {

        $obj = new Constantes();

        $obj->setRacDataPaie("racDataPaie");
        $this->assertEquals("racDataPaie", $obj->getRacDataPaie());
    }

    /**
     * Tests the setRadicalCompteCli() method.
     *
     * @return void
     */
    public function testSetRadicalCompteCli() {

        $obj = new Constantes();

        $obj->setRadicalCompteCli("radicalCompteCli");
        $this->assertEquals("radicalCompteCli", $obj->getRadicalCompteCli());
    }

    /**
     * Tests the setRadicalCompteFrn() method.
     *
     * @return void
     */
    public function testSetRadicalCompteFrn() {

        $obj = new Constantes();

        $obj->setRadicalCompteFrn("radicalCompteFrn");
        $this->assertEquals("radicalCompteFrn", $obj->getRadicalCompteFrn());
    }

    /**
     * Tests the setSaisDateFin() method.
     *
     * @return void
     */
    public function testSetSaisDateFin() {

        $obj = new Constantes();

        $obj->setSaisDateFin(true);
        $this->assertEquals(true, $obj->getSaisDateFin());
    }

    /**
     * Tests the setTDFC_AdhesionTotale() method.
     *
     * @return void
     */
    public function testSetTDFC_AdhesionTotale() {

        $obj = new Constantes();

        $obj->setTDFC_AdhesionTotale(true);
        $this->assertEquals(true, $obj->getTDFC_AdhesionTotale());
    }

    /**
     * Tests the setTDFC_Emetteur() method.
     *
     * @return void
     */
    public function testSetTDFC_Emetteur() {

        $obj = new Constantes();

        $obj->setTDFC_Emetteur("tDFC_Emetteur");
        $this->assertEquals("tDFC_Emetteur", $obj->getTDFC_Emetteur());
    }

    /**
     * Tests the setTDFC_Facturant() method.
     *
     * @return void
     */
    public function testSetTDFC_Facturant() {

        $obj = new Constantes();

        $obj->setTDFC_Facturant("tDFC_Facturant");
        $this->assertEquals("tDFC_Facturant", $obj->getTDFC_Facturant());
    }

    /**
     * Tests the setTDFC_InfoTrans() method.
     *
     * @return void
     */
    public function testSetTDFC_InfoTrans() {

        $obj = new Constantes();

        $obj->setTDFC_InfoTrans("tDFC_InfoTrans");
        $this->assertEquals("tDFC_InfoTrans", $obj->getTDFC_InfoTrans());
    }

    /**
     * Tests the setTPInterditCreatMillesime() method.
     *
     * @return void
     */
    public function testSetTPInterditCreatMillesime() {

        $obj = new Constantes();

        $obj->setTPInterditCreatMillesime(true);
        $this->assertEquals(true, $obj->getTPInterditCreatMillesime());
    }

    /**
     * Tests the setTPInterditCreatMission() method.
     *
     * @return void
     */
    public function testSetTPInterditCreatMission() {

        $obj = new Constantes();

        $obj->setTPInterditCreatMission(true);
        $this->assertEquals(true, $obj->getTPInterditCreatMission());
    }

    /**
     * Tests the setTPPasClientsSortis() method.
     *
     * @return void
     */
    public function testSetTPPasClientsSortis() {

        $obj = new Constantes();

        $obj->setTPPasClientsSortis(true);
        $this->assertEquals(true, $obj->getTPPasClientsSortis());
    }

    /**
     * Tests the setTPPasIntervenants() method.
     *
     * @return void
     */
    public function testSetTPPasIntervenants() {

        $obj = new Constantes();

        $obj->setTPPasIntervenants(true);
        $this->assertEquals(true, $obj->getTPPasIntervenants());
    }

    /**
     * Tests the setTPPrixInvisible() method.
     *
     * @return void
     */
    public function testSetTPPrixInvisible() {

        $obj = new Constantes();

        $obj->setTPPrixInvisible(true);
        $this->assertEquals(true, $obj->getTPPrixInvisible());
    }

    /**
     * Tests the setTPRempliPrefAuto() method.
     *
     * @return void
     */
    public function testSetTPRempliPrefAuto() {

        $obj = new Constantes();

        $obj->setTPRempliPrefAuto(true);
        $this->assertEquals(true, $obj->getTPRempliPrefAuto());
    }

    /**
     * Tests the setTPSaisieDOS() method.
     *
     * @return void
     */
    public function testSetTPSaisieDOS() {

        $obj = new Constantes();

        $obj->setTPSaisieDOS(true);
        $this->assertEquals(true, $obj->getTPSaisieDOS());
    }

    /**
     * Tests the setTpsPassesInterditPrix() method.
     *
     * @return void
     */
    public function testSetTpsPassesInterditPrix() {

        $obj = new Constantes();

        $obj->setTpsPassesInterditPrix(true);
        $this->assertEquals(true, $obj->getTpsPassesInterditPrix());
    }
}
