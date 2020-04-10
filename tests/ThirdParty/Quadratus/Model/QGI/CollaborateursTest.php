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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Collaborateurs;

/**
 * Collaborateurs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CollaborateursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Collaborateurs();

        $this->assertNull($obj->getAccesAutoriseBonsTravaux());
        $this->assertNull($obj->getAccesAutorisePlanFacturation());
        $this->assertNull($obj->getAccesAutorisePlanTache());
        $this->assertNull($obj->getAccesCurDossOnly());
        $this->assertNull($obj->getAccesDocsCab());
        $this->assertNull($obj->getAccesDossierCpta());
        $this->assertNull($obj->getAccesDossierPaie());
        $this->assertNull($obj->getAccesGestionaireStatsCroisees());
        $this->assertNull($obj->getAccesRepCommun());
        $this->assertNull($obj->getAccesStatCab());
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
        $this->assertNull($obj->getArticlesLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getArticlesLstPersoAccesGestionnaire());
        $this->assertNull($obj->getArticlesLstPersoChampsModif());
        $this->assertNull($obj->getArticlesLstPersoCopieColonne());
        $this->assertNull($obj->getArticlesLstPersoInterdireCreat());
        $this->assertNull($obj->getAutoriseSaisieTpsColonnes());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBlocageEdCli());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCategoriePrixKm());
        $this->assertNull($obj->getCategorieTicketResto());
        $this->assertNull($obj->getChargesMensuelles());
        $this->assertNull($obj->getCleCcnPaie());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeChef1());
        $this->assertNull($obj->getCodeChef2());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeFamilleFrn());
        $this->assertNull($obj->getCodeGroupe());
        $this->assertNull($obj->getCodeGroupeVisuMsg());
        $this->assertNull($obj->getCodeLangue());
        $this->assertNull($obj->getCodeLiaisonDest());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeVehicule());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCompteComptable());
        $this->assertNull($obj->getCompteDeTiers());
        $this->assertNull($obj->getControleSaisieTp());
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
        $this->assertNull($obj->getCreationTache());
        $this->assertNull($obj->getCreationTarif());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDateValidationBudget());
        $this->assertNull($obj->getDateValidationNdF());
        $this->assertNull($obj->getDateValidationTp());
        $this->assertNull($obj->getDesactiverFiltreMsg());
        $this->assertNull($obj->getDisponible());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getDossierPaie());
        $this->assertNull($obj->getDroitParamEmailsConfidentiels());
        $this->assertNull($obj->getDroitSyncPort());
        $this->assertNull($obj->getDroitSyncQProp());
        $this->assertNull($obj->getEmailAgendaDmdConfirm());
        $this->assertNull($obj->getEmailAutoClotureImap());
        $this->assertNull($obj->getEmailModeSignature());
        $this->assertNull($obj->getEmailNbJAgMini());
        $this->assertNull($obj->getEmailObjetDefaut());
        $this->assertNull($obj->getEmailPied());
        $this->assertNull($obj->getEmailRrActive());
        $this->assertNull($obj->getEmailRedirAuto());
        $this->assertNull($obj->getEmailRedirAutoCollab());
        $this->assertNull($obj->getEmailReponseAuto());
        $this->assertNull($obj->getEmailReponseAutoText());
        $this->assertNull($obj->getEmailStartMode());
        $this->assertNull($obj->getEmailSurServeur());
        $this->assertNull($obj->getEmailTete());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmailActiverAideSaisie());
        $this->assertNull($obj->getEmailLstAdrChoixElem());
        $this->assertNull($obj->getEmailRedirection());
        $this->assertNull($obj->getEstAcheteur());
        $this->assertNull($obj->getEtabConfidentialiteQp());
        $this->assertNull($obj->getFictif());
        $this->assertNull($obj->getFonction());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getInterdictionPwd());
        $this->assertNull($obj->getInterdictionVueFacturation());
        $this->assertNull($obj->getInterdireAccesArchivesCpta());
        $this->assertNull($obj->getInterdireAccesArchivesPaie());
        $this->assertNull($obj->getInterdireAccesEditionBalance());
        $this->assertNull($obj->getInterdireAccesEntete());
        $this->assertNull($obj->getInterdireAccesSuppDocArch());
        $this->assertNull($obj->getInterdireEditionValoriseJrnTemps());
        $this->assertNull($obj->getInterdireEnvoiPostit());
        $this->assertNull($obj->getInterdireModifAffCli());
        $this->assertNull($obj->getInterdireModifDepot());
        $this->assertNull($obj->getInterdirePubliDocWeb());
        $this->assertNull($obj->getInterim());
        $this->assertNull($obj->getIsGroupe());
        $this->assertNull($obj->getIsProfilMessages());
        $this->assertNull($obj->getLimiterVisuAgenda());
        $this->assertNull($obj->getMasquerFournisseurs());
        $this->assertNull($obj->getMessagesConfidentiels());
        $this->assertNull($obj->getModifAffaire());
        $this->assertNull($obj->getModifArticle());
        $this->assertNull($obj->getModifBonsTravaux());
        $this->assertNull($obj->getModifChantier());
        $this->assertNull($obj->getModifClient());
        $this->assertNull($obj->getModifCommission());
        $this->assertNull($obj->getModifDossierFact());
        $this->assertNull($obj->getModifDroitsAsp());
        $this->assertNull($obj->getModifEnVue());
        $this->assertNull($obj->getModifFournisseur());
        $this->assertNull($obj->getModifPlanFacturation());
        $this->assertNull($obj->getModifPlanTache());
        $this->assertNull($obj->getModifTache());
        $this->assertNull($obj->getModifTarif());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getMsgRedirAuto());
        $this->assertNull($obj->getNivConfEmpPropreteRestreint());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauConfidentialiteQp());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPaInvisible());
        $this->assertNull($obj->getParcCodeRemorque());
        $this->assertNull($obj->getParcCodeVehicule());
        $this->assertNull($obj->getPasAccesQws());
        $this->assertNull($obj->getPasSaisieDesTemps());
        $this->assertNull($obj->getPasSaisieDesTempsAuto());
        $this->assertNull($obj->getPortablePerso());
        $this->assertNull($obj->getPresent());
        $this->assertNull($obj->getPrevenuNouveauCd());
        $this->assertNull($obj->getPrixKm());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getPrixVente2());
        $this->assertNull($obj->getPrixVente3());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRestrictAccesPieces());
        $this->assertNull($obj->getRestrictAccesStats());
        $this->assertNull($obj->getSaisiePvInterdite());
        $this->assertNull($obj->getSalaireMensuel());
        $this->assertNull($obj->getSelArtCollab());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionnaire());
        $this->assertNull($obj->getSelAvLstPersoChampsModif());
        $this->assertNull($obj->getSelAvLstPersoCopieColonne());
        $this->assertNull($obj->getSelAvLstPersoInterdireCreat());
        $this->assertNull($obj->getSelCliCollab());
        $this->assertNull($obj->getSelFrnCollab());
        $this->assertNull($obj->getSelectionArticle());
        $this->assertNull($obj->getSelectionClient());
        $this->assertNull($obj->getSelectionFournisseur());
        $this->assertNull($obj->getSuiviMessages());
        $this->assertNull($obj->getSuperviseur());
        $this->assertNull($obj->getSyncMso());
        $this->assertNull($obj->getTpPasControler());
        $this->assertNull($obj->getTpPasJournalTemps());
        $this->assertNull($obj->getTpPasNotesDeFrais());
        $this->assertNull($obj->getTpPasTpsValide());
        $this->assertNull($obj->getTpPourcentageNonOperationnel());
        $this->assertNull($obj->getTachesGroupe());
        $this->assertNull($obj->getTauxCommission());
        $this->assertNull($obj->getTelDirect());
        $this->assertNull($obj->getTelPerso());
        $this->assertNull($obj->getTelPortable1());
        $this->assertNull($obj->getTelPortable2());
        $this->assertNull($obj->getTelPoste());
        $this->assertNull($obj->getTpsNiveauBlocage());
        $this->assertNull($obj->getTxComInvisible());
        $this->assertNull($obj->getTypeConf2CmavCli());
        $this->assertNull($obj->getTypeConfCmavCli());
        $this->assertNull($obj->getTypeVisuAppels());
        $this->assertNull($obj->getTypeVisuTaches());
        $this->assertNull($obj->getUseMailGeneric());
        $this->assertNull($obj->getVisualisationFicheCabinet());
        $this->assertNull($obj->getVueComDroitReaffect());
        $this->assertNull($obj->getVueDevisDroitReaffect());
        $this->assertNull($obj->getVueDevisDroitSuppr());
        $this->assertNull($obj->getVueDevisDroitValid());
        $this->assertNull($obj->getYaDroitsCollab());
        $this->assertNull($obj->geteWsMdp());
    }

    /**
     * Tests the setAccesAutoriseBonsTravaux() method.
     *
     * @return void
     */
    public function testSetAccesAutoriseBonsTravaux() {

        $obj = new Collaborateurs();

        $obj->setAccesAutoriseBonsTravaux(true);
        $this->assertEquals(true, $obj->getAccesAutoriseBonsTravaux());
    }

    /**
     * Tests the setAccesAutorisePlanFacturation() method.
     *
     * @return void
     */
    public function testSetAccesAutorisePlanFacturation() {

        $obj = new Collaborateurs();

        $obj->setAccesAutorisePlanFacturation(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanFacturation());
    }

    /**
     * Tests the setAccesAutorisePlanTache() method.
     *
     * @return void
     */
    public function testSetAccesAutorisePlanTache() {

        $obj = new Collaborateurs();

        $obj->setAccesAutorisePlanTache(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanTache());
    }

    /**
     * Tests the setAccesCurDossOnly() method.
     *
     * @return void
     */
    public function testSetAccesCurDossOnly() {

        $obj = new Collaborateurs();

        $obj->setAccesCurDossOnly(true);
        $this->assertEquals(true, $obj->getAccesCurDossOnly());
    }

    /**
     * Tests the setAccesDocsCab() method.
     *
     * @return void
     */
    public function testSetAccesDocsCab() {

        $obj = new Collaborateurs();

        $obj->setAccesDocsCab(true);
        $this->assertEquals(true, $obj->getAccesDocsCab());
    }

    /**
     * Tests the setAccesDossierCpta() method.
     *
     * @return void
     */
    public function testSetAccesDossierCpta() {

        $obj = new Collaborateurs();

        $obj->setAccesDossierCpta("accesDossierCpta");
        $this->assertEquals("accesDossierCpta", $obj->getAccesDossierCpta());
    }

    /**
     * Tests the setAccesDossierPaie() method.
     *
     * @return void
     */
    public function testSetAccesDossierPaie() {

        $obj = new Collaborateurs();

        $obj->setAccesDossierPaie("accesDossierPaie");
        $this->assertEquals("accesDossierPaie", $obj->getAccesDossierPaie());
    }

    /**
     * Tests the setAccesGestionaireStatsCroisees() method.
     *
     * @return void
     */
    public function testSetAccesGestionaireStatsCroisees() {

        $obj = new Collaborateurs();

        $obj->setAccesGestionaireStatsCroisees(true);
        $this->assertEquals(true, $obj->getAccesGestionaireStatsCroisees());
    }

    /**
     * Tests the setAccesRepCommun() method.
     *
     * @return void
     */
    public function testSetAccesRepCommun() {

        $obj = new Collaborateurs();

        $obj->setAccesRepCommun("accesRepCommun");
        $this->assertEquals("accesRepCommun", $obj->getAccesRepCommun());
    }

    /**
     * Tests the setAccesStatCab() method.
     *
     * @return void
     */
    public function testSetAccesStatCab() {

        $obj = new Collaborateurs();

        $obj->setAccesStatCab(true);
        $this->assertEquals(true, $obj->getAccesStatCab());
    }

    /**
     * Tests the setAnnulationAffaire() method.
     *
     * @return void
     */
    public function testSetAnnulationAffaire() {

        $obj = new Collaborateurs();

        $obj->setAnnulationAffaire(true);
        $this->assertEquals(true, $obj->getAnnulationAffaire());
    }

    /**
     * Tests the setAnnulationArticle() method.
     *
     * @return void
     */
    public function testSetAnnulationArticle() {

        $obj = new Collaborateurs();

        $obj->setAnnulationArticle(true);
        $this->assertEquals(true, $obj->getAnnulationArticle());
    }

    /**
     * Tests the setAnnulationBonsTravaux() method.
     *
     * @return void
     */
    public function testSetAnnulationBonsTravaux() {

        $obj = new Collaborateurs();

        $obj->setAnnulationBonsTravaux(true);
        $this->assertEquals(true, $obj->getAnnulationBonsTravaux());
    }

    /**
     * Tests the setAnnulationChantier() method.
     *
     * @return void
     */
    public function testSetAnnulationChantier() {

        $obj = new Collaborateurs();

        $obj->setAnnulationChantier(true);
        $this->assertEquals(true, $obj->getAnnulationChantier());
    }

    /**
     * Tests the setAnnulationClient() method.
     *
     * @return void
     */
    public function testSetAnnulationClient() {

        $obj = new Collaborateurs();

        $obj->setAnnulationClient(true);
        $this->assertEquals(true, $obj->getAnnulationClient());
    }

    /**
     * Tests the setAnnulationCommission() method.
     *
     * @return void
     */
    public function testSetAnnulationCommission() {

        $obj = new Collaborateurs();

        $obj->setAnnulationCommission(true);
        $this->assertEquals(true, $obj->getAnnulationCommission());
    }

    /**
     * Tests the setAnnulationDossierCpta() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierCpta() {

        $obj = new Collaborateurs();

        $obj->setAnnulationDossierCpta(true);
        $this->assertEquals(true, $obj->getAnnulationDossierCpta());
    }

    /**
     * Tests the setAnnulationDossierFact() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierFact() {

        $obj = new Collaborateurs();

        $obj->setAnnulationDossierFact(true);
        $this->assertEquals(true, $obj->getAnnulationDossierFact());
    }

    /**
     * Tests the setAnnulationDossierPaie() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierPaie() {

        $obj = new Collaborateurs();

        $obj->setAnnulationDossierPaie(true);
        $this->assertEquals(true, $obj->getAnnulationDossierPaie());
    }

    /**
     * Tests the setAnnulationFournisseur() method.
     *
     * @return void
     */
    public function testSetAnnulationFournisseur() {

        $obj = new Collaborateurs();

        $obj->setAnnulationFournisseur(true);
        $this->assertEquals(true, $obj->getAnnulationFournisseur());
    }

    /**
     * Tests the setAnnulationPlanFacturation() method.
     *
     * @return void
     */
    public function testSetAnnulationPlanFacturation() {

        $obj = new Collaborateurs();

        $obj->setAnnulationPlanFacturation(true);
        $this->assertEquals(true, $obj->getAnnulationPlanFacturation());
    }

    /**
     * Tests the setAnnulationPlanTache() method.
     *
     * @return void
     */
    public function testSetAnnulationPlanTache() {

        $obj = new Collaborateurs();

        $obj->setAnnulationPlanTache(true);
        $this->assertEquals(true, $obj->getAnnulationPlanTache());
    }

    /**
     * Tests the setAnnulationTache() method.
     *
     * @return void
     */
    public function testSetAnnulationTache() {

        $obj = new Collaborateurs();

        $obj->setAnnulationTache(true);
        $this->assertEquals(true, $obj->getAnnulationTache());
    }

    /**
     * Tests the setAnnulationTarif() method.
     *
     * @return void
     */
    public function testSetAnnulationTarif() {

        $obj = new Collaborateurs();

        $obj->setAnnulationTarif(true);
        $this->assertEquals(true, $obj->getAnnulationTarif());
    }

    /**
     * Tests the setArticlesLstPersoAccesGestionModifiables() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionModifiables() {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoAccesGestionModifiables(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoAccesGestionModifiables());
    }

    /**
     * Tests the setArticlesLstPersoAccesGestionnaire() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionnaire() {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoAccesGestionnaire(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoAccesGestionnaire());
    }

    /**
     * Tests the setArticlesLstPersoChampsModif() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoChampsModif() {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoChampsModif(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoChampsModif());
    }

    /**
     * Tests the setArticlesLstPersoCopieColonne() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoCopieColonne() {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoCopieColonne(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoCopieColonne());
    }

    /**
     * Tests the setArticlesLstPersoInterdireCreat() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoInterdireCreat() {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoInterdireCreat(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoInterdireCreat());
    }

    /**
     * Tests the setAutoriseSaisieTpsColonnes() method.
     *
     * @return void
     */
    public function testSetAutoriseSaisieTpsColonnes() {

        $obj = new Collaborateurs();

        $obj->setAutoriseSaisieTpsColonnes(true);
        $this->assertEquals(true, $obj->getAutoriseSaisieTpsColonnes());
    }

    /**
     * Tests the setBic() method.
     *
     * @return void
     */
    public function testSetBic() {

        $obj = new Collaborateurs();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests the setBlocageEdCli() method.
     *
     * @return void
     */
    public function testSetBlocageEdCli() {

        $obj = new Collaborateurs();

        $obj->setBlocageEdCli(true);
        $this->assertEquals(true, $obj->getBlocageEdCli());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq() {

        $obj = new Collaborateurs();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new Collaborateurs();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCategoriePrixKm() method.
     *
     * @return void
     */
    public function testSetCategoriePrixKm() {

        $obj = new Collaborateurs();

        $obj->setCategoriePrixKm("categoriePrixKm");
        $this->assertEquals("categoriePrixKm", $obj->getCategoriePrixKm());
    }

    /**
     * Tests the setCategorieTicketResto() method.
     *
     * @return void
     */
    public function testSetCategorieTicketResto() {

        $obj = new Collaborateurs();

        $obj->setCategorieTicketResto("categorieTicketResto");
        $this->assertEquals("categorieTicketResto", $obj->getCategorieTicketResto());
    }

    /**
     * Tests the setChargesMensuelles() method.
     *
     * @return void
     */
    public function testSetChargesMensuelles() {

        $obj = new Collaborateurs();

        $obj->setChargesMensuelles(10.092018);
        $this->assertEquals(10.092018, $obj->getChargesMensuelles());
    }

    /**
     * Tests the setCleCcnPaie() method.
     *
     * @return void
     */
    public function testSetCleCcnPaie() {

        $obj = new Collaborateurs();

        $obj->setCleCcnPaie("cleCcnPaie");
        $this->assertEquals("cleCcnPaie", $obj->getCleCcnPaie());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Collaborateurs();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new Collaborateurs();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeChef1() method.
     *
     * @return void
     */
    public function testSetCodeChef1() {

        $obj = new Collaborateurs();

        $obj->setCodeChef1("codeChef1");
        $this->assertEquals("codeChef1", $obj->getCodeChef1());
    }

    /**
     * Tests the setCodeChef2() method.
     *
     * @return void
     */
    public function testSetCodeChef2() {

        $obj = new Collaborateurs();

        $obj->setCodeChef2("codeChef2");
        $this->assertEquals("codeChef2", $obj->getCodeChef2());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new Collaborateurs();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeFamille() method.
     *
     * @return void
     */
    public function testSetCodeFamille() {

        $obj = new Collaborateurs();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests the setCodeFamilleFrn() method.
     *
     * @return void
     */
    public function testSetCodeFamilleFrn() {

        $obj = new Collaborateurs();

        $obj->setCodeFamilleFrn("codeFamilleFrn");
        $this->assertEquals("codeFamilleFrn", $obj->getCodeFamilleFrn());
    }

    /**
     * Tests the setCodeGroupe() method.
     *
     * @return void
     */
    public function testSetCodeGroupe() {

        $obj = new Collaborateurs();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }

    /**
     * Tests the setCodeGroupeVisuMsg() method.
     *
     * @return void
     */
    public function testSetCodeGroupeVisuMsg() {

        $obj = new Collaborateurs();

        $obj->setCodeGroupeVisuMsg("codeGroupeVisuMsg");
        $this->assertEquals("codeGroupeVisuMsg", $obj->getCodeGroupeVisuMsg());
    }

    /**
     * Tests the setCodeLangue() method.
     *
     * @return void
     */
    public function testSetCodeLangue() {

        $obj = new Collaborateurs();

        $obj->setCodeLangue("codeLangue");
        $this->assertEquals("codeLangue", $obj->getCodeLangue());
    }

    /**
     * Tests the setCodeLiaisonDest() method.
     *
     * @return void
     */
    public function testSetCodeLiaisonDest() {

        $obj = new Collaborateurs();

        $obj->setCodeLiaisonDest("codeLiaisonDest");
        $this->assertEquals("codeLiaisonDest", $obj->getCodeLiaisonDest());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune() {

        $obj = new Collaborateurs();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new Collaborateurs();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeVehicule() method.
     *
     * @return void
     */
    public function testSetCodeVehicule() {

        $obj = new Collaborateurs();

        $obj->setCodeVehicule("codeVehicule");
        $this->assertEquals("codeVehicule", $obj->getCodeVehicule());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta() {

        $obj = new Collaborateurs();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new Collaborateurs();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setCompteComptable() method.
     *
     * @return void
     */
    public function testSetCompteComptable() {

        $obj = new Collaborateurs();

        $obj->setCompteComptable("compteComptable");
        $this->assertEquals("compteComptable", $obj->getCompteComptable());
    }

    /**
     * Tests the setCompteDeTiers() method.
     *
     * @return void
     */
    public function testSetCompteDeTiers() {

        $obj = new Collaborateurs();

        $obj->setCompteDeTiers("compteDeTiers");
        $this->assertEquals("compteDeTiers", $obj->getCompteDeTiers());
    }

    /**
     * Tests the setControleSaisieTp() method.
     *
     * @return void
     */
    public function testSetControleSaisieTp() {

        $obj = new Collaborateurs();

        $obj->setControleSaisieTp("controleSaisieTp");
        $this->assertEquals("controleSaisieTp", $obj->getControleSaisieTp());
    }

    /**
     * Tests the setCreationAffaire() method.
     *
     * @return void
     */
    public function testSetCreationAffaire() {

        $obj = new Collaborateurs();

        $obj->setCreationAffaire(true);
        $this->assertEquals(true, $obj->getCreationAffaire());
    }

    /**
     * Tests the setCreationArticle() method.
     *
     * @return void
     */
    public function testSetCreationArticle() {

        $obj = new Collaborateurs();

        $obj->setCreationArticle(true);
        $this->assertEquals(true, $obj->getCreationArticle());
    }

    /**
     * Tests the setCreationBonsTravaux() method.
     *
     * @return void
     */
    public function testSetCreationBonsTravaux() {

        $obj = new Collaborateurs();

        $obj->setCreationBonsTravaux(true);
        $this->assertEquals(true, $obj->getCreationBonsTravaux());
    }

    /**
     * Tests the setCreationChantier() method.
     *
     * @return void
     */
    public function testSetCreationChantier() {

        $obj = new Collaborateurs();

        $obj->setCreationChantier(true);
        $this->assertEquals(true, $obj->getCreationChantier());
    }

    /**
     * Tests the setCreationClient() method.
     *
     * @return void
     */
    public function testSetCreationClient() {

        $obj = new Collaborateurs();

        $obj->setCreationClient(true);
        $this->assertEquals(true, $obj->getCreationClient());
    }

    /**
     * Tests the setCreationCommission() method.
     *
     * @return void
     */
    public function testSetCreationCommission() {

        $obj = new Collaborateurs();

        $obj->setCreationCommission(true);
        $this->assertEquals(true, $obj->getCreationCommission());
    }

    /**
     * Tests the setCreationDossierCpta() method.
     *
     * @return void
     */
    public function testSetCreationDossierCpta() {

        $obj = new Collaborateurs();

        $obj->setCreationDossierCpta(true);
        $this->assertEquals(true, $obj->getCreationDossierCpta());
    }

    /**
     * Tests the setCreationDossierFact() method.
     *
     * @return void
     */
    public function testSetCreationDossierFact() {

        $obj = new Collaborateurs();

        $obj->setCreationDossierFact(true);
        $this->assertEquals(true, $obj->getCreationDossierFact());
    }

    /**
     * Tests the setCreationDossierPaie() method.
     *
     * @return void
     */
    public function testSetCreationDossierPaie() {

        $obj = new Collaborateurs();

        $obj->setCreationDossierPaie(true);
        $this->assertEquals(true, $obj->getCreationDossierPaie());
    }

    /**
     * Tests the setCreationFournisseur() method.
     *
     * @return void
     */
    public function testSetCreationFournisseur() {

        $obj = new Collaborateurs();

        $obj->setCreationFournisseur(true);
        $this->assertEquals(true, $obj->getCreationFournisseur());
    }

    /**
     * Tests the setCreationPlanFacturation() method.
     *
     * @return void
     */
    public function testSetCreationPlanFacturation() {

        $obj = new Collaborateurs();

        $obj->setCreationPlanFacturation(true);
        $this->assertEquals(true, $obj->getCreationPlanFacturation());
    }

    /**
     * Tests the setCreationPlanTache() method.
     *
     * @return void
     */
    public function testSetCreationPlanTache() {

        $obj = new Collaborateurs();

        $obj->setCreationPlanTache(true);
        $this->assertEquals(true, $obj->getCreationPlanTache());
    }

    /**
     * Tests the setCreationTache() method.
     *
     * @return void
     */
    public function testSetCreationTache() {

        $obj = new Collaborateurs();

        $obj->setCreationTache(true);
        $this->assertEquals(true, $obj->getCreationTache());
    }

    /**
     * Tests the setCreationTarif() method.
     *
     * @return void
     */
    public function testSetCreationTarif() {

        $obj = new Collaborateurs();

        $obj->setCreationTarif(true);
        $this->assertEquals(true, $obj->getCreationTarif());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests the setDateValidationBudget() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationBudget() {

        // Set a Date/time mock.
        $dateValidationBudget = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateValidationBudget($dateValidationBudget);
        $this->assertSame($dateValidationBudget, $obj->getDateValidationBudget());
    }

    /**
     * Tests the setDateValidationNdF() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationNdF() {

        // Set a Date/time mock.
        $dateValidationNdF = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateValidationNdF($dateValidationNdF);
        $this->assertSame($dateValidationNdF, $obj->getDateValidationNdF());
    }

    /**
     * Tests the setDateValidationTp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationTp() {

        // Set a Date/time mock.
        $dateValidationTp = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateValidationTp($dateValidationTp);
        $this->assertSame($dateValidationTp, $obj->getDateValidationTp());
    }

    /**
     * Tests the setDesactiverFiltreMsg() method.
     *
     * @return void
     */
    public function testSetDesactiverFiltreMsg() {

        $obj = new Collaborateurs();

        $obj->setDesactiverFiltreMsg(true);
        $this->assertEquals(true, $obj->getDesactiverFiltreMsg());
    }

    /**
     * Tests the setDisponible() method.
     *
     * @return void
     */
    public function testSetDisponible() {

        $obj = new Collaborateurs();

        $obj->setDisponible(true);
        $this->assertEquals(true, $obj->getDisponible());
    }

    /**
     * Tests the setDomBanque() method.
     *
     * @return void
     */
    public function testSetDomBanque() {

        $obj = new Collaborateurs();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Tests the setDossierPaie() method.
     *
     * @return void
     */
    public function testSetDossierPaie() {

        $obj = new Collaborateurs();

        $obj->setDossierPaie("dossierPaie");
        $this->assertEquals("dossierPaie", $obj->getDossierPaie());
    }

    /**
     * Tests the setDroitParamEmailsConfidentiels() method.
     *
     * @return void
     */
    public function testSetDroitParamEmailsConfidentiels() {

        $obj = new Collaborateurs();

        $obj->setDroitParamEmailsConfidentiels(true);
        $this->assertEquals(true, $obj->getDroitParamEmailsConfidentiels());
    }

    /**
     * Tests the setDroitSyncPort() method.
     *
     * @return void
     */
    public function testSetDroitSyncPort() {

        $obj = new Collaborateurs();

        $obj->setDroitSyncPort(true);
        $this->assertEquals(true, $obj->getDroitSyncPort());
    }

    /**
     * Tests the setDroitSyncQProp() method.
     *
     * @return void
     */
    public function testSetDroitSyncQProp() {

        $obj = new Collaborateurs();

        $obj->setDroitSyncQProp(true);
        $this->assertEquals(true, $obj->getDroitSyncQProp());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new Collaborateurs();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setEmailActiverAideSaisie() method.
     *
     * @return void
     */
    public function testSetEmailActiverAideSaisie() {

        $obj = new Collaborateurs();

        $obj->setEmailActiverAideSaisie(true);
        $this->assertEquals(true, $obj->getEmailActiverAideSaisie());
    }

    /**
     * Tests the setEmailAgendaDmdConfirm() method.
     *
     * @return void
     */
    public function testSetEmailAgendaDmdConfirm() {

        $obj = new Collaborateurs();

        $obj->setEmailAgendaDmdConfirm("emailAgendaDmdConfirm");
        $this->assertEquals("emailAgendaDmdConfirm", $obj->getEmailAgendaDmdConfirm());
    }

    /**
     * Tests the setEmailAutoClotureImap() method.
     *
     * @return void
     */
    public function testSetEmailAutoClotureImap() {

        $obj = new Collaborateurs();

        $obj->setEmailAutoClotureImap(true);
        $this->assertEquals(true, $obj->getEmailAutoClotureImap());
    }

    /**
     * Tests the setEmailLstAdrChoixElem() method.
     *
     * @return void
     */
    public function testSetEmailLstAdrChoixElem() {

        $obj = new Collaborateurs();

        $obj->setEmailLstAdrChoixElem(10);
        $this->assertEquals(10, $obj->getEmailLstAdrChoixElem());
    }

    /**
     * Tests the setEmailModeSignature() method.
     *
     * @return void
     */
    public function testSetEmailModeSignature() {

        $obj = new Collaborateurs();

        $obj->setEmailModeSignature(10);
        $this->assertEquals(10, $obj->getEmailModeSignature());
    }

    /**
     * Tests the setEmailNbJAgMini() method.
     *
     * @return void
     */
    public function testSetEmailNbJAgMini() {

        $obj = new Collaborateurs();

        $obj->setEmailNbJAgMini(10);
        $this->assertEquals(10, $obj->getEmailNbJAgMini());
    }

    /**
     * Tests the setEmailObjetDefaut() method.
     *
     * @return void
     */
    public function testSetEmailObjetDefaut() {

        $obj = new Collaborateurs();

        $obj->setEmailObjetDefaut("emailObjetDefaut");
        $this->assertEquals("emailObjetDefaut", $obj->getEmailObjetDefaut());
    }

    /**
     * Tests the setEmailPied() method.
     *
     * @return void
     */
    public function testSetEmailPied() {

        $obj = new Collaborateurs();

        $obj->setEmailPied("emailPied");
        $this->assertEquals("emailPied", $obj->getEmailPied());
    }

    /**
     * Tests the setEmailRedirAuto() method.
     *
     * @return void
     */
    public function testSetEmailRedirAuto() {

        $obj = new Collaborateurs();

        $obj->setEmailRedirAuto(true);
        $this->assertEquals(true, $obj->getEmailRedirAuto());
    }

    /**
     * Tests the setEmailRedirAutoCollab() method.
     *
     * @return void
     */
    public function testSetEmailRedirAutoCollab() {

        $obj = new Collaborateurs();

        $obj->setEmailRedirAutoCollab("emailRedirAutoCollab");
        $this->assertEquals("emailRedirAutoCollab", $obj->getEmailRedirAutoCollab());
    }

    /**
     * Tests the setEmailRedirection() method.
     *
     * @return void
     */
    public function testSetEmailRedirection() {

        $obj = new Collaborateurs();

        $obj->setEmailRedirection("emailRedirection");
        $this->assertEquals("emailRedirection", $obj->getEmailRedirection());
    }

    /**
     * Tests the setEmailReponseAuto() method.
     *
     * @return void
     */
    public function testSetEmailReponseAuto() {

        $obj = new Collaborateurs();

        $obj->setEmailReponseAuto(true);
        $this->assertEquals(true, $obj->getEmailReponseAuto());
    }

    /**
     * Tests the setEmailReponseAutoText() method.
     *
     * @return void
     */
    public function testSetEmailReponseAutoText() {

        $obj = new Collaborateurs();

        $obj->setEmailReponseAutoText("emailReponseAutoText");
        $this->assertEquals("emailReponseAutoText", $obj->getEmailReponseAutoText());
    }

    /**
     * Tests the setEmailRrActive() method.
     *
     * @return void
     */
    public function testSetEmailRrActive() {

        $obj = new Collaborateurs();

        $obj->setEmailRrActive(true);
        $this->assertEquals(true, $obj->getEmailRrActive());
    }

    /**
     * Tests the setEmailStartMode() method.
     *
     * @return void
     */
    public function testSetEmailStartMode() {

        $obj = new Collaborateurs();

        $obj->setEmailStartMode(10);
        $this->assertEquals(10, $obj->getEmailStartMode());
    }

    /**
     * Tests the setEmailSurServeur() method.
     *
     * @return void
     */
    public function testSetEmailSurServeur() {

        $obj = new Collaborateurs();

        $obj->setEmailSurServeur(true);
        $this->assertEquals(true, $obj->getEmailSurServeur());
    }

    /**
     * Tests the setEmailTete() method.
     *
     * @return void
     */
    public function testSetEmailTete() {

        $obj = new Collaborateurs();

        $obj->setEmailTete("emailTete");
        $this->assertEquals("emailTete", $obj->getEmailTete());
    }

    /**
     * Tests the setEstAcheteur() method.
     *
     * @return void
     */
    public function testSetEstAcheteur() {

        $obj = new Collaborateurs();

        $obj->setEstAcheteur(10);
        $this->assertEquals(10, $obj->getEstAcheteur());
    }

    /**
     * Tests the setEtabConfidentialiteQp() method.
     *
     * @return void
     */
    public function testSetEtabConfidentialiteQp() {

        $obj = new Collaborateurs();

        $obj->setEtabConfidentialiteQp("etabConfidentialiteQp");
        $this->assertEquals("etabConfidentialiteQp", $obj->getEtabConfidentialiteQp());
    }

    /**
     * Tests the setFictif() method.
     *
     * @return void
     */
    public function testSetFictif() {

        $obj = new Collaborateurs();

        $obj->setFictif(true);
        $this->assertEquals(true, $obj->getFictif());
    }

    /**
     * Tests the setFonction() method.
     *
     * @return void
     */
    public function testSetFonction() {

        $obj = new Collaborateurs();

        $obj->setFonction("fonction");
        $this->assertEquals("fonction", $obj->getFonction());
    }

    /**
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban() {

        $obj = new Collaborateurs();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setInterdictionPwd() method.
     *
     * @return void
     */
    public function testSetInterdictionPwd() {

        $obj = new Collaborateurs();

        $obj->setInterdictionPwd(true);
        $this->assertEquals(true, $obj->getInterdictionPwd());
    }

    /**
     * Tests the setInterdictionVueFacturation() method.
     *
     * @return void
     */
    public function testSetInterdictionVueFacturation() {

        $obj = new Collaborateurs();

        $obj->setInterdictionVueFacturation(true);
        $this->assertEquals(true, $obj->getInterdictionVueFacturation());
    }

    /**
     * Tests the setInterdireAccesArchivesCpta() method.
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesCpta() {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesArchivesCpta(true);
        $this->assertEquals(true, $obj->getInterdireAccesArchivesCpta());
    }

    /**
     * Tests the setInterdireAccesArchivesPaie() method.
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesPaie() {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesArchivesPaie(true);
        $this->assertEquals(true, $obj->getInterdireAccesArchivesPaie());
    }

    /**
     * Tests the setInterdireAccesEditionBalance() method.
     *
     * @return void
     */
    public function testSetInterdireAccesEditionBalance() {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesEditionBalance(true);
        $this->assertEquals(true, $obj->getInterdireAccesEditionBalance());
    }

    /**
     * Tests the setInterdireAccesEntete() method.
     *
     * @return void
     */
    public function testSetInterdireAccesEntete() {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesEntete(true);
        $this->assertEquals(true, $obj->getInterdireAccesEntete());
    }

    /**
     * Tests the setInterdireAccesSuppDocArch() method.
     *
     * @return void
     */
    public function testSetInterdireAccesSuppDocArch() {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesSuppDocArch(true);
        $this->assertEquals(true, $obj->getInterdireAccesSuppDocArch());
    }

    /**
     * Tests the setInterdireEditionValoriseJrnTemps() method.
     *
     * @return void
     */
    public function testSetInterdireEditionValoriseJrnTemps() {

        $obj = new Collaborateurs();

        $obj->setInterdireEditionValoriseJrnTemps(true);
        $this->assertEquals(true, $obj->getInterdireEditionValoriseJrnTemps());
    }

    /**
     * Tests the setInterdireEnvoiPostit() method.
     *
     * @return void
     */
    public function testSetInterdireEnvoiPostit() {

        $obj = new Collaborateurs();

        $obj->setInterdireEnvoiPostit(true);
        $this->assertEquals(true, $obj->getInterdireEnvoiPostit());
    }

    /**
     * Tests the setInterdireModifAffCli() method.
     *
     * @return void
     */
    public function testSetInterdireModifAffCli() {

        $obj = new Collaborateurs();

        $obj->setInterdireModifAffCli(true);
        $this->assertEquals(true, $obj->getInterdireModifAffCli());
    }

    /**
     * Tests the setInterdireModifDepot() method.
     *
     * @return void
     */
    public function testSetInterdireModifDepot() {

        $obj = new Collaborateurs();

        $obj->setInterdireModifDepot(true);
        $this->assertEquals(true, $obj->getInterdireModifDepot());
    }

    /**
     * Tests the setInterdirePubliDocWeb() method.
     *
     * @return void
     */
    public function testSetInterdirePubliDocWeb() {

        $obj = new Collaborateurs();

        $obj->setInterdirePubliDocWeb(true);
        $this->assertEquals(true, $obj->getInterdirePubliDocWeb());
    }

    /**
     * Tests the setInterim() method.
     *
     * @return void
     */
    public function testSetInterim() {

        $obj = new Collaborateurs();

        $obj->setInterim(true);
        $this->assertEquals(true, $obj->getInterim());
    }

    /**
     * Tests the setIsGroupe() method.
     *
     * @return void
     */
    public function testSetIsGroupe() {

        $obj = new Collaborateurs();

        $obj->setIsGroupe(true);
        $this->assertEquals(true, $obj->getIsGroupe());
    }

    /**
     * Tests the setIsProfilMessages() method.
     *
     * @return void
     */
    public function testSetIsProfilMessages() {

        $obj = new Collaborateurs();

        $obj->setIsProfilMessages(true);
        $this->assertEquals(true, $obj->getIsProfilMessages());
    }

    /**
     * Tests the setLimiterVisuAgenda() method.
     *
     * @return void
     */
    public function testSetLimiterVisuAgenda() {

        $obj = new Collaborateurs();

        $obj->setLimiterVisuAgenda(true);
        $this->assertEquals(true, $obj->getLimiterVisuAgenda());
    }

    /**
     * Tests the setMasquerFournisseurs() method.
     *
     * @return void
     */
    public function testSetMasquerFournisseurs() {

        $obj = new Collaborateurs();

        $obj->setMasquerFournisseurs(true);
        $this->assertEquals(true, $obj->getMasquerFournisseurs());
    }

    /**
     * Tests the setMessagesConfidentiels() method.
     *
     * @return void
     */
    public function testSetMessagesConfidentiels() {

        $obj = new Collaborateurs();

        $obj->setMessagesConfidentiels("messagesConfidentiels");
        $this->assertEquals("messagesConfidentiels", $obj->getMessagesConfidentiels());
    }

    /**
     * Tests the setModifAffaire() method.
     *
     * @return void
     */
    public function testSetModifAffaire() {

        $obj = new Collaborateurs();

        $obj->setModifAffaire("modifAffaire");
        $this->assertEquals("modifAffaire", $obj->getModifAffaire());
    }

    /**
     * Tests the setModifArticle() method.
     *
     * @return void
     */
    public function testSetModifArticle() {

        $obj = new Collaborateurs();

        $obj->setModifArticle("modifArticle");
        $this->assertEquals("modifArticle", $obj->getModifArticle());
    }

    /**
     * Tests the setModifBonsTravaux() method.
     *
     * @return void
     */
    public function testSetModifBonsTravaux() {

        $obj = new Collaborateurs();

        $obj->setModifBonsTravaux("modifBonsTravaux");
        $this->assertEquals("modifBonsTravaux", $obj->getModifBonsTravaux());
    }

    /**
     * Tests the setModifChantier() method.
     *
     * @return void
     */
    public function testSetModifChantier() {

        $obj = new Collaborateurs();

        $obj->setModifChantier("modifChantier");
        $this->assertEquals("modifChantier", $obj->getModifChantier());
    }

    /**
     * Tests the setModifClient() method.
     *
     * @return void
     */
    public function testSetModifClient() {

        $obj = new Collaborateurs();

        $obj->setModifClient("modifClient");
        $this->assertEquals("modifClient", $obj->getModifClient());
    }

    /**
     * Tests the setModifCommission() method.
     *
     * @return void
     */
    public function testSetModifCommission() {

        $obj = new Collaborateurs();

        $obj->setModifCommission("modifCommission");
        $this->assertEquals("modifCommission", $obj->getModifCommission());
    }

    /**
     * Tests the setModifDossierFact() method.
     *
     * @return void
     */
    public function testSetModifDossierFact() {

        $obj = new Collaborateurs();

        $obj->setModifDossierFact("modifDossierFact");
        $this->assertEquals("modifDossierFact", $obj->getModifDossierFact());
    }

    /**
     * Tests the setModifDroitsAsp() method.
     *
     * @return void
     */
    public function testSetModifDroitsAsp() {

        $obj = new Collaborateurs();

        $obj->setModifDroitsAsp(true);
        $this->assertEquals(true, $obj->getModifDroitsAsp());
    }

    /**
     * Tests the setModifEnVue() method.
     *
     * @return void
     */
    public function testSetModifEnVue() {

        $obj = new Collaborateurs();

        $obj->setModifEnVue(true);
        $this->assertEquals(true, $obj->getModifEnVue());
    }

    /**
     * Tests the setModifFournisseur() method.
     *
     * @return void
     */
    public function testSetModifFournisseur() {

        $obj = new Collaborateurs();

        $obj->setModifFournisseur("modifFournisseur");
        $this->assertEquals("modifFournisseur", $obj->getModifFournisseur());
    }

    /**
     * Tests the setModifPlanFacturation() method.
     *
     * @return void
     */
    public function testSetModifPlanFacturation() {

        $obj = new Collaborateurs();

        $obj->setModifPlanFacturation("modifPlanFacturation");
        $this->assertEquals("modifPlanFacturation", $obj->getModifPlanFacturation());
    }

    /**
     * Tests the setModifPlanTache() method.
     *
     * @return void
     */
    public function testSetModifPlanTache() {

        $obj = new Collaborateurs();

        $obj->setModifPlanTache("modifPlanTache");
        $this->assertEquals("modifPlanTache", $obj->getModifPlanTache());
    }

    /**
     * Tests the setModifTache() method.
     *
     * @return void
     */
    public function testSetModifTache() {

        $obj = new Collaborateurs();

        $obj->setModifTache("modifTache");
        $this->assertEquals("modifTache", $obj->getModifTache());
    }

    /**
     * Tests the setModifTarif() method.
     *
     * @return void
     */
    public function testSetModifTarif() {

        $obj = new Collaborateurs();

        $obj->setModifTarif("modifTarif");
        $this->assertEquals("modifTarif", $obj->getModifTarif());
    }

    /**
     * Tests the setMotDePasse() method.
     *
     * @return void
     */
    public function testSetMotDePasse() {

        $obj = new Collaborateurs();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests the setMsgRedirAuto() method.
     *
     * @return void
     */
    public function testSetMsgRedirAuto() {

        $obj = new Collaborateurs();

        $obj->setMsgRedirAuto(true);
        $this->assertEquals(true, $obj->getMsgRedirAuto());
    }

    /**
     * Tests the setNivConfEmpPropreteRestreint() method.
     *
     * @return void
     */
    public function testSetNivConfEmpPropreteRestreint() {

        $obj = new Collaborateurs();

        $obj->setNivConfEmpPropreteRestreint(true);
        $this->assertEquals(true, $obj->getNivConfEmpPropreteRestreint());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new Collaborateurs();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests the setNiveauConfidentialiteQp() method.
     *
     * @return void
     */
    public function testSetNiveauConfidentialiteQp() {

        $obj = new Collaborateurs();

        $obj->setNiveauConfidentialiteQp("niveauConfidentialiteQp");
        $this->assertEquals("niveauConfidentialiteQp", $obj->getNiveauConfidentialiteQp());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new Collaborateurs();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new Collaborateurs();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new Collaborateurs();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new Collaborateurs();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new Collaborateurs();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setPaInvisible() method.
     *
     * @return void
     */
    public function testSetPaInvisible() {

        $obj = new Collaborateurs();

        $obj->setPaInvisible(true);
        $this->assertEquals(true, $obj->getPaInvisible());
    }

    /**
     * Tests the setParcCodeRemorque() method.
     *
     * @return void
     */
    public function testSetParcCodeRemorque() {

        $obj = new Collaborateurs();

        $obj->setParcCodeRemorque("parcCodeRemorque");
        $this->assertEquals("parcCodeRemorque", $obj->getParcCodeRemorque());
    }

    /**
     * Tests the setParcCodeVehicule() method.
     *
     * @return void
     */
    public function testSetParcCodeVehicule() {

        $obj = new Collaborateurs();

        $obj->setParcCodeVehicule("parcCodeVehicule");
        $this->assertEquals("parcCodeVehicule", $obj->getParcCodeVehicule());
    }

    /**
     * Tests the setPasAccesQws() method.
     *
     * @return void
     */
    public function testSetPasAccesQws() {

        $obj = new Collaborateurs();

        $obj->setPasAccesQws(true);
        $this->assertEquals(true, $obj->getPasAccesQws());
    }

    /**
     * Tests the setPasSaisieDesTemps() method.
     *
     * @return void
     */
    public function testSetPasSaisieDesTemps() {

        $obj = new Collaborateurs();

        $obj->setPasSaisieDesTemps(true);
        $this->assertEquals(true, $obj->getPasSaisieDesTemps());
    }

    /**
     * Tests the setPasSaisieDesTempsAuto() method.
     *
     * @return void
     */
    public function testSetPasSaisieDesTempsAuto() {

        $obj = new Collaborateurs();

        $obj->setPasSaisieDesTempsAuto(true);
        $this->assertEquals(true, $obj->getPasSaisieDesTempsAuto());
    }

    /**
     * Tests the setPortablePerso() method.
     *
     * @return void
     */
    public function testSetPortablePerso() {

        $obj = new Collaborateurs();

        $obj->setPortablePerso("portablePerso");
        $this->assertEquals("portablePerso", $obj->getPortablePerso());
    }

    /**
     * Tests the setPresent() method.
     *
     * @return void
     */
    public function testSetPresent() {

        $obj = new Collaborateurs();

        $obj->setPresent(true);
        $this->assertEquals(true, $obj->getPresent());
    }

    /**
     * Tests the setPrevenuNouveauCd() method.
     *
     * @return void
     */
    public function testSetPrevenuNouveauCd() {

        $obj = new Collaborateurs();

        $obj->setPrevenuNouveauCd(true);
        $this->assertEquals(true, $obj->getPrevenuNouveauCd());
    }

    /**
     * Tests the setPrixKm() method.
     *
     * @return void
     */
    public function testSetPrixKm() {

        $obj = new Collaborateurs();

        $obj->setPrixKm(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixKm());
    }

    /**
     * Tests the setPrixVente() method.
     *
     * @return void
     */
    public function testSetPrixVente() {

        $obj = new Collaborateurs();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Tests the setPrixVente2() method.
     *
     * @return void
     */
    public function testSetPrixVente2() {

        $obj = new Collaborateurs();

        $obj->setPrixVente2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente2());
    }

    /**
     * Tests the setPrixVente3() method.
     *
     * @return void
     */
    public function testSetPrixVente3() {

        $obj = new Collaborateurs();

        $obj->setPrixVente3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente3());
    }

    /**
     * Tests the setRestrictAccesPieces() method.
     *
     * @return void
     */
    public function testSetRestrictAccesPieces() {

        $obj = new Collaborateurs();

        $obj->setRestrictAccesPieces(true);
        $this->assertEquals(true, $obj->getRestrictAccesPieces());
    }

    /**
     * Tests the setRestrictAccesStats() method.
     *
     * @return void
     */
    public function testSetRestrictAccesStats() {

        $obj = new Collaborateurs();

        $obj->setRestrictAccesStats(true);
        $this->assertEquals(true, $obj->getRestrictAccesStats());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new Collaborateurs();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSaisiePvInterdite() method.
     *
     * @return void
     */
    public function testSetSaisiePvInterdite() {

        $obj = new Collaborateurs();

        $obj->setSaisiePvInterdite(true);
        $this->assertEquals(true, $obj->getSaisiePvInterdite());
    }

    /**
     * Tests the setSalaireMensuel() method.
     *
     * @return void
     */
    public function testSetSalaireMensuel() {

        $obj = new Collaborateurs();

        $obj->setSalaireMensuel(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireMensuel());
    }

    /**
     * Tests the setSelArtCollab() method.
     *
     * @return void
     */
    public function testSetSelArtCollab() {

        $obj = new Collaborateurs();

        $obj->setSelArtCollab(true);
        $this->assertEquals(true, $obj->getSelArtCollab());
    }

    /**
     * Tests the setSelAvLstPersoAccesGestionModifiables() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionModifiables() {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoAccesGestionModifiables(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoAccesGestionModifiables());
    }

    /**
     * Tests the setSelAvLstPersoAccesGestionnaire() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionnaire() {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoAccesGestionnaire(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoAccesGestionnaire());
    }

    /**
     * Tests the setSelAvLstPersoChampsModif() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoChampsModif() {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoChampsModif(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoChampsModif());
    }

    /**
     * Tests the setSelAvLstPersoCopieColonne() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoCopieColonne() {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoCopieColonne(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoCopieColonne());
    }

    /**
     * Tests the setSelAvLstPersoInterdireCreat() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoInterdireCreat() {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoInterdireCreat(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoInterdireCreat());
    }

    /**
     * Tests the setSelCliCollab() method.
     *
     * @return void
     */
    public function testSetSelCliCollab() {

        $obj = new Collaborateurs();

        $obj->setSelCliCollab(true);
        $this->assertEquals(true, $obj->getSelCliCollab());
    }

    /**
     * Tests the setSelFrnCollab() method.
     *
     * @return void
     */
    public function testSetSelFrnCollab() {

        $obj = new Collaborateurs();

        $obj->setSelFrnCollab(true);
        $this->assertEquals(true, $obj->getSelFrnCollab());
    }

    /**
     * Tests the setSelectionArticle() method.
     *
     * @return void
     */
    public function testSetSelectionArticle() {

        $obj = new Collaborateurs();

        $obj->setSelectionArticle("selectionArticle");
        $this->assertEquals("selectionArticle", $obj->getSelectionArticle());
    }

    /**
     * Tests the setSelectionClient() method.
     *
     * @return void
     */
    public function testSetSelectionClient() {

        $obj = new Collaborateurs();

        $obj->setSelectionClient("selectionClient");
        $this->assertEquals("selectionClient", $obj->getSelectionClient());
    }

    /**
     * Tests the setSelectionFournisseur() method.
     *
     * @return void
     */
    public function testSetSelectionFournisseur() {

        $obj = new Collaborateurs();

        $obj->setSelectionFournisseur("selectionFournisseur");
        $this->assertEquals("selectionFournisseur", $obj->getSelectionFournisseur());
    }

    /**
     * Tests the setSuiviMessages() method.
     *
     * @return void
     */
    public function testSetSuiviMessages() {

        $obj = new Collaborateurs();

        $obj->setSuiviMessages(true);
        $this->assertEquals(true, $obj->getSuiviMessages());
    }

    /**
     * Tests the setSuperviseur() method.
     *
     * @return void
     */
    public function testSetSuperviseur() {

        $obj = new Collaborateurs();

        $obj->setSuperviseur(true);
        $this->assertEquals(true, $obj->getSuperviseur());
    }

    /**
     * Tests the setSyncMso() method.
     *
     * @return void
     */
    public function testSetSyncMso() {

        $obj = new Collaborateurs();

        $obj->setSyncMso(true);
        $this->assertEquals(true, $obj->getSyncMso());
    }

    /**
     * Tests the setTachesGroupe() method.
     *
     * @return void
     */
    public function testSetTachesGroupe() {

        $obj = new Collaborateurs();

        $obj->setTachesGroupe("tachesGroupe");
        $this->assertEquals("tachesGroupe", $obj->getTachesGroupe());
    }

    /**
     * Tests the setTauxCommission() method.
     *
     * @return void
     */
    public function testSetTauxCommission() {

        $obj = new Collaborateurs();

        $obj->setTauxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCommission());
    }

    /**
     * Tests the setTelDirect() method.
     *
     * @return void
     */
    public function testSetTelDirect() {

        $obj = new Collaborateurs();

        $obj->setTelDirect("telDirect");
        $this->assertEquals("telDirect", $obj->getTelDirect());
    }

    /**
     * Tests the setTelPerso() method.
     *
     * @return void
     */
    public function testSetTelPerso() {

        $obj = new Collaborateurs();

        $obj->setTelPerso("telPerso");
        $this->assertEquals("telPerso", $obj->getTelPerso());
    }

    /**
     * Tests the setTelPortable1() method.
     *
     * @return void
     */
    public function testSetTelPortable1() {

        $obj = new Collaborateurs();

        $obj->setTelPortable1("telPortable1");
        $this->assertEquals("telPortable1", $obj->getTelPortable1());
    }

    /**
     * Tests the setTelPortable2() method.
     *
     * @return void
     */
    public function testSetTelPortable2() {

        $obj = new Collaborateurs();

        $obj->setTelPortable2("telPortable2");
        $this->assertEquals("telPortable2", $obj->getTelPortable2());
    }

    /**
     * Tests the setTelPoste() method.
     *
     * @return void
     */
    public function testSetTelPoste() {

        $obj = new Collaborateurs();

        $obj->setTelPoste("telPoste");
        $this->assertEquals("telPoste", $obj->getTelPoste());
    }

    /**
     * Tests the setTpPasControler() method.
     *
     * @return void
     */
    public function testSetTpPasControler() {

        $obj = new Collaborateurs();

        $obj->setTpPasControler(true);
        $this->assertEquals(true, $obj->getTpPasControler());
    }

    /**
     * Tests the setTpPasJournalTemps() method.
     *
     * @return void
     */
    public function testSetTpPasJournalTemps() {

        $obj = new Collaborateurs();

        $obj->setTpPasJournalTemps(true);
        $this->assertEquals(true, $obj->getTpPasJournalTemps());
    }

    /**
     * Tests the setTpPasNotesDeFrais() method.
     *
     * @return void
     */
    public function testSetTpPasNotesDeFrais() {

        $obj = new Collaborateurs();

        $obj->setTpPasNotesDeFrais(true);
        $this->assertEquals(true, $obj->getTpPasNotesDeFrais());
    }

    /**
     * Tests the setTpPasTpsValide() method.
     *
     * @return void
     */
    public function testSetTpPasTpsValide() {

        $obj = new Collaborateurs();

        $obj->setTpPasTpsValide(true);
        $this->assertEquals(true, $obj->getTpPasTpsValide());
    }

    /**
     * Tests the setTpPourcentageNonOperationnel() method.
     *
     * @return void
     */
    public function testSetTpPourcentageNonOperationnel() {

        $obj = new Collaborateurs();

        $obj->setTpPourcentageNonOperationnel(10.092018);
        $this->assertEquals(10.092018, $obj->getTpPourcentageNonOperationnel());
    }

    /**
     * Tests the setTpsNiveauBlocage() method.
     *
     * @return void
     */
    public function testSetTpsNiveauBlocage() {

        $obj = new Collaborateurs();

        $obj->setTpsNiveauBlocage("tpsNiveauBlocage");
        $this->assertEquals("tpsNiveauBlocage", $obj->getTpsNiveauBlocage());
    }

    /**
     * Tests the setTxComInvisible() method.
     *
     * @return void
     */
    public function testSetTxComInvisible() {

        $obj = new Collaborateurs();

        $obj->setTxComInvisible(true);
        $this->assertEquals(true, $obj->getTxComInvisible());
    }

    /**
     * Tests the setTypeConf2CmavCli() method.
     *
     * @return void
     */
    public function testSetTypeConf2CmavCli() {

        $obj = new Collaborateurs();

        $obj->setTypeConf2CmavCli("typeConf2CmavCli");
        $this->assertEquals("typeConf2CmavCli", $obj->getTypeConf2CmavCli());
    }

    /**
     * Tests the setTypeConfCmavCli() method.
     *
     * @return void
     */
    public function testSetTypeConfCmavCli() {

        $obj = new Collaborateurs();

        $obj->setTypeConfCmavCli("typeConfCmavCli");
        $this->assertEquals("typeConfCmavCli", $obj->getTypeConfCmavCli());
    }

    /**
     * Tests the setTypeVisuAppels() method.
     *
     * @return void
     */
    public function testSetTypeVisuAppels() {

        $obj = new Collaborateurs();

        $obj->setTypeVisuAppels("typeVisuAppels");
        $this->assertEquals("typeVisuAppels", $obj->getTypeVisuAppels());
    }

    /**
     * Tests the setTypeVisuTaches() method.
     *
     * @return void
     */
    public function testSetTypeVisuTaches() {

        $obj = new Collaborateurs();

        $obj->setTypeVisuTaches("typeVisuTaches");
        $this->assertEquals("typeVisuTaches", $obj->getTypeVisuTaches());
    }

    /**
     * Tests the setUseMailGeneric() method.
     *
     * @return void
     */
    public function testSetUseMailGeneric() {

        $obj = new Collaborateurs();

        $obj->setUseMailGeneric(true);
        $this->assertEquals(true, $obj->getUseMailGeneric());
    }

    /**
     * Tests the setVisualisationFicheCabinet() method.
     *
     * @return void
     */
    public function testSetVisualisationFicheCabinet() {

        $obj = new Collaborateurs();

        $obj->setVisualisationFicheCabinet(true);
        $this->assertEquals(true, $obj->getVisualisationFicheCabinet());
    }

    /**
     * Tests the setVueComDroitReaffect() method.
     *
     * @return void
     */
    public function testSetVueComDroitReaffect() {

        $obj = new Collaborateurs();

        $obj->setVueComDroitReaffect(true);
        $this->assertEquals(true, $obj->getVueComDroitReaffect());
    }

    /**
     * Tests the setVueDevisDroitReaffect() method.
     *
     * @return void
     */
    public function testSetVueDevisDroitReaffect() {

        $obj = new Collaborateurs();

        $obj->setVueDevisDroitReaffect(true);
        $this->assertEquals(true, $obj->getVueDevisDroitReaffect());
    }

    /**
     * Tests the setVueDevisDroitSuppr() method.
     *
     * @return void
     */
    public function testSetVueDevisDroitSuppr() {

        $obj = new Collaborateurs();

        $obj->setVueDevisDroitSuppr(true);
        $this->assertEquals(true, $obj->getVueDevisDroitSuppr());
    }

    /**
     * Tests the setVueDevisDroitValid() method.
     *
     * @return void
     */
    public function testSetVueDevisDroitValid() {

        $obj = new Collaborateurs();

        $obj->setVueDevisDroitValid(true);
        $this->assertEquals(true, $obj->getVueDevisDroitValid());
    }

    /**
     * Tests the setYaDroitsCollab() method.
     *
     * @return void
     */
    public function testSetYaDroitsCollab() {

        $obj = new Collaborateurs();

        $obj->setYaDroitsCollab(true);
        $this->assertEquals(true, $obj->getYaDroitsCollab());
    }

    /**
     * Tests the seteWsMdp() method.
     *
     * @return void
     */
    public function testSeteWsMdp() {

        $obj = new Collaborateurs();

        $obj->seteWsMdp("eWsMdp");
        $this->assertEquals("eWsMdp", $obj->geteWsMdp());
    }
}
