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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Constantes2;

/**
 * Constantes2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class Constantes2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Constantes2();

        $this->assertNull($obj->getAspAffectationMessages());
        $this->assertNull($obj->getActivationConf2CmavCli());
        $this->assertNull($obj->getActiveConfConvCol());
        $this->assertNull($obj->getActiverSaisieRegl());
        $this->assertNull($obj->getAffectationsCliFrn());
        $this->assertNull($obj->getAnnulationAffaire());
        $this->assertNull($obj->getArticlesLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getArticlesLstPersoAccesGestionnaire());
        $this->assertNull($obj->getArticlesLstPersoChampsModif());
        $this->assertNull($obj->getArticlesLstPersoCopieColonne());
        $this->assertNull($obj->getArticlesLstPersoInterdireCreat());
        $this->assertNull($obj->getAvecHeuresTheo());
        $this->assertNull($obj->getCalculNombreMessages());
        $this->assertNull($obj->getChampsCritereArticle21());
        $this->assertNull($obj->getChampsCritereArticle210());
        $this->assertNull($obj->getChampsCritereArticle22());
        $this->assertNull($obj->getChampsCritereArticle23());
        $this->assertNull($obj->getChampsCritereArticle24());
        $this->assertNull($obj->getChampsCritereArticle25());
        $this->assertNull($obj->getChampsCritereArticle26());
        $this->assertNull($obj->getChampsCritereArticle27());
        $this->assertNull($obj->getChampsCritereArticle28());
        $this->assertNull($obj->getChampsCritereArticle29());
        $this->assertNull($obj->getChampsCritereEntPieceAc1());
        $this->assertNull($obj->getChampsCritereEntPieceAc10());
        $this->assertNull($obj->getChampsCritereEntPieceAc2());
        $this->assertNull($obj->getChampsCritereEntPieceAc3());
        $this->assertNull($obj->getChampsCritereEntPieceAc4());
        $this->assertNull($obj->getChampsCritereEntPieceAc5());
        $this->assertNull($obj->getChampsCritereEntPieceAc6());
        $this->assertNull($obj->getChampsCritereEntPieceAc7());
        $this->assertNull($obj->getChampsCritereEntPieceAc8());
        $this->assertNull($obj->getChampsCritereEntPieceAc9());
        $this->assertNull($obj->getCleAccesConf());
        $this->assertNull($obj->getCleAccesPlaquettes());
        $this->assertNull($obj->getCleAccesQAdminDb());
        $this->assertNull($obj->getClotureArchivageAuto());
        $this->assertNull($obj->getCodeClientQuadratus());
        $this->assertNull($obj->getCompteurFilDiscussion());
        $this->assertNull($obj->getConfidentialiteAffaire());
        $this->assertNull($obj->getCoutMoyenHoraire());
        $this->assertNull($obj->getCreateCli1FactParBl());
        $this->assertNull($obj->getCreationAffaire());
        $this->assertNull($obj->getDateDha());
        $this->assertNull($obj->getDateLastExeQpubWeb());
        $this->assertNull($obj->getDatePha());
        $this->assertNull($obj->getDerniereVersionCd());
        $this->assertNull($obj->getDroitCollabVisuDocuments());
        $this->assertNull($obj->getEtebacDestMessage());
        $this->assertNull($obj->getEchDetailAff());
        $this->assertNull($obj->getFgSurCdeFrn());
        $this->assertNull($obj->getFGsurAc());
        $this->assertNull($obj->getFGsurMonf());
        $this->assertNull($obj->getFamillesLiees());
        $this->assertNull($obj->getFicheCliNePasProposerCreationDpdc());
        $this->assertNull($obj->getGestionGammes());
        $this->assertNull($obj->getGestionPointeuseQc());
        $this->assertNull($obj->getGestionPointeuseQFact());
        $this->assertNull($obj->getGestionPointeuseQgi());
        $this->assertNull($obj->getGestionPointeuseQp());
        $this->assertNull($obj->getGestionTarifsTransporteurs());
        $this->assertNull($obj->getGestionTarifsTransporteursNbDec());
        $this->assertNull($obj->getGestionVariantes());
        $this->assertNull($obj->getHtAvecJoursFeries());
        $this->assertNull($obj->getHtAvecSaisieConges());
        $this->assertNull($obj->getHtAvecSaisieCongesCodesClients());
        $this->assertNull($obj->getHtAvecSaisieCongesCodesTaches());
        $this->assertNull($obj->getIpPriveQws());
        $this->assertNull($obj->getIncremAutoArticle());
        $this->assertNull($obj->getInterdireAccesArchivesCpta());
        $this->assertNull($obj->getInterdireAccesArchivesPaie());
        $this->assertNull($obj->getInterdireAccesEditionBalance());
        $this->assertNull($obj->getInterdireAccesSuppDocArch());
        $this->assertNull($obj->getInterdirePubliDocWeb());
        $this->assertNull($obj->getLiaisonTda());
        $this->assertNull($obj->getLibAffectationFrn1());
        $this->assertNull($obj->getLibAffectationFrn2());
        $this->assertNull($obj->getLibAffectationFrn3());
        $this->assertNull($obj->getLibAffectationFrn4());
        $this->assertNull($obj->getLibAffectationFrn5());
        $this->assertNull($obj->getLibAffectationFrn6());
        $this->assertNull($obj->getLibAffectationFrn7());
        $this->assertNull($obj->getLibCritereArticle21());
        $this->assertNull($obj->getLibCritereArticle210());
        $this->assertNull($obj->getLibCritereArticle22());
        $this->assertNull($obj->getLibCritereArticle23());
        $this->assertNull($obj->getLibCritereArticle24());
        $this->assertNull($obj->getLibCritereArticle25());
        $this->assertNull($obj->getLibCritereArticle26());
        $this->assertNull($obj->getLibCritereArticle27());
        $this->assertNull($obj->getLibCritereArticle28());
        $this->assertNull($obj->getLibCritereArticle29());
        $this->assertNull($obj->getLibCritereEntPieceAc1());
        $this->assertNull($obj->getLibCritereEntPieceAc10());
        $this->assertNull($obj->getLibCritereEntPieceAc2());
        $this->assertNull($obj->getLibCritereEntPieceAc3());
        $this->assertNull($obj->getLibCritereEntPieceAc4());
        $this->assertNull($obj->getLibCritereEntPieceAc5());
        $this->assertNull($obj->getLibCritereEntPieceAc6());
        $this->assertNull($obj->getLibCritereEntPieceAc7());
        $this->assertNull($obj->getLibCritereEntPieceAc8());
        $this->assertNull($obj->getLibCritereEntPieceAc9());
        $this->assertNull($obj->getLibFrais1());
        $this->assertNull($obj->getLibFrais2());
        $this->assertNull($obj->getLibFrais3());
        $this->assertNull($obj->getLibelleGamme());
        $this->assertNull($obj->getLibelleVariante());
        $this->assertNull($obj->getLongueurNumAff());
        $this->assertNull($obj->getMajCodesActiviteCga());
        $this->assertNull($obj->getMessAspod());
        $this->assertNull($obj->getModifAffaire());
        $this->assertNull($obj->getModifDroitsAsp());
        $this->assertNull($obj->getNbMaxGamme());
        $this->assertNull($obj->getNePasCreerCptCli());
        $this->assertNull($obj->getNePasCreerCptFrn());
        $this->assertNull($obj->getNewDbInfos());
        $this->assertNull($obj->getNewQBureau());
        $this->assertNull($obj->getNoDossFactCab());
        $this->assertNull($obj->getPmeDossierRattachement());
        $this->assertNull($obj->getPasDeLienComptabilite());
        $this->assertNull($obj->getPrefixeCodeClient());
        $this->assertNull($obj->getProchainCodeClient());
        $this->assertNull($obj->getProxyActif());
        $this->assertNull($obj->getProxyAdresse());
        $this->assertNull($obj->getProxyPort());
        $this->assertNull($obj->getQPubWebCodeCollaborateurDest());
        $this->assertNull($obj->getQwsCheminLogo());
        $this->assertNull($obj->getQwsCodeIpl());
        $this->assertNull($obj->getQwsHttpSecurise());
        $this->assertNull($obj->getQwsipl());
        $this->assertNull($obj->getQwsNomProduit());
        $this->assertNull($obj->getQwsUtiliserLogoCabinet());
        $this->assertNull($obj->getReqDemandeur());
        $this->assertNull($obj->getRacDataPaie());
        $this->assertNull($obj->getRapportQInfos());
        $this->assertNull($obj->getSmsApiKey());
        $this->assertNull($obj->getSmsDroitAcces());
        $this->assertNull($obj->getSmsKey());
        $this->assertNull($obj->getSmsPrestataire());
        $this->assertNull($obj->getSmsSender());
        $this->assertNull($obj->getSmsType());
        $this->assertNull($obj->getSmsUserLogin());
        $this->assertNull($obj->getSaisieProprieteMess());
        $this->assertNull($obj->getSaisieReglDirect());
        $this->assertNull($obj->getSaisieTpNePasAfficherDp());
        $this->assertNull($obj->getSaisieTpOngletUniqueDp());
        $this->assertNull($obj->getSaisieTpOngletUniqueTn());
        $this->assertNull($obj->getSaisieTempsNbJApres());
        $this->assertNull($obj->getSaisieTempsNbJAvant());
        $this->assertNull($obj->getSaveHistoMemo2File());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionnaire());
        $this->assertNull($obj->getSelAvLstPersoChampsModif());
        $this->assertNull($obj->getSelAvLstPersoCopieColonne());
        $this->assertNull($obj->getSelAvLstPersoInterdireCreat());
        $this->assertNull($obj->getSoldeCptaOd());
        $this->assertNull($obj->getSuiviClientIntituleGeneric1());
        $this->assertNull($obj->getSuiviClientIntituleGeneric10());
        $this->assertNull($obj->getSuiviClientIntituleGeneric2());
        $this->assertNull($obj->getSuiviClientIntituleGeneric3());
        $this->assertNull($obj->getSuiviClientIntituleGeneric4());
        $this->assertNull($obj->getSuiviClientIntituleGeneric5());
        $this->assertNull($obj->getSuiviClientIntituleGeneric6());
        $this->assertNull($obj->getSuiviClientIntituleGeneric7());
        $this->assertNull($obj->getSuiviClientIntituleGeneric8());
        $this->assertNull($obj->getSuiviClientIntituleGeneric9());
        $this->assertNull($obj->getTpAccesEncoursClient());
        $this->assertNull($obj->getTpAvancementALaLigne());
        $this->assertNull($obj->getTpInterditQte());
        $this->assertNull($obj->getTpLibelleMission());
        $this->assertNull($obj->getTpLimiteSaisieNonOperationnel());
        $this->assertNull($obj->getTppupv123());
        $this->assertNull($obj->getTpPasMoisCloture());
        $this->assertNull($obj->getTpPourcentageNonOperationnelDate());
        $this->assertNull($obj->getTpQteInvisible());
        $this->assertNull($obj->getTpsNumArchive());
        $this->assertNull($obj->getTpSaisieAvancement());
        $this->assertNull($obj->getTransVariantesFactgi());
        $this->assertNull($obj->getTypeAffichageSoldeFourn());
        $this->assertNull($obj->getTypeFrais1());
        $this->assertNull($obj->getTypeFrais2());
        $this->assertNull($obj->getTypeFrais3());
        $this->assertNull($obj->getTypeSaisieTauxDevises());
        $this->assertNull($obj->getVEsurDepAff());
        $this->assertNull($obj->getValAutoTarifsTransporteurs());
        $this->assertNull($obj->getVisualisationFicheCabinet());
        $this->assertNull($obj->getWordAccesParQClient());
        $this->assertNull($obj->geteWsCabinet());
        $this->assertNull($obj->geteWsCollId());
        $this->assertNull($obj->geteWsCollMdp());
        $this->assertNull($obj->geteWsSrvMdp());
        $this->assertNull($obj->geteWsSrvName());
        $this->assertNull($obj->geteWsSrvUtil());
        $this->assertNull($obj->getlngCodeArticleAuto());
    }

    /**
     * Tests the setActivationConf2CmavCli() method.
     *
     * @return void
     */
    public function testSetActivationConf2CmavCli() {

        $obj = new Constantes2();

        $obj->setActivationConf2CmavCli(true);
        $this->assertEquals(true, $obj->getActivationConf2CmavCli());
    }

    /**
     * Tests the setActiveConfConvCol() method.
     *
     * @return void
     */
    public function testSetActiveConfConvCol() {

        $obj = new Constantes2();

        $obj->setActiveConfConvCol(true);
        $this->assertEquals(true, $obj->getActiveConfConvCol());
    }

    /**
     * Tests the setActiverSaisieRegl() method.
     *
     * @return void
     */
    public function testSetActiverSaisieRegl() {

        $obj = new Constantes2();

        $obj->setActiverSaisieRegl(true);
        $this->assertEquals(true, $obj->getActiverSaisieRegl());
    }

    /**
     * Tests the setAffectationsCliFrn() method.
     *
     * @return void
     */
    public function testSetAffectationsCliFrn() {

        $obj = new Constantes2();

        $obj->setAffectationsCliFrn(true);
        $this->assertEquals(true, $obj->getAffectationsCliFrn());
    }

    /**
     * Tests the setAnnulationAffaire() method.
     *
     * @return void
     */
    public function testSetAnnulationAffaire() {

        $obj = new Constantes2();

        $obj->setAnnulationAffaire(true);
        $this->assertEquals(true, $obj->getAnnulationAffaire());
    }

    /**
     * Tests the setArticlesLstPersoAccesGestionModifiables() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionModifiables() {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoAccesGestionModifiables(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoAccesGestionModifiables());
    }

    /**
     * Tests the setArticlesLstPersoAccesGestionnaire() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionnaire() {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoAccesGestionnaire(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoAccesGestionnaire());
    }

    /**
     * Tests the setArticlesLstPersoChampsModif() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoChampsModif() {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoChampsModif(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoChampsModif());
    }

    /**
     * Tests the setArticlesLstPersoCopieColonne() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoCopieColonne() {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoCopieColonne(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoCopieColonne());
    }

    /**
     * Tests the setArticlesLstPersoInterdireCreat() method.
     *
     * @return void
     */
    public function testSetArticlesLstPersoInterdireCreat() {

        $obj = new Constantes2();

        $obj->setArticlesLstPersoInterdireCreat(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoInterdireCreat());
    }

    /**
     * Tests the setAspAffectationMessages() method.
     *
     * @return void
     */
    public function testSetAspAffectationMessages() {

        $obj = new Constantes2();

        $obj->setAspAffectationMessages("aspAffectationMessages");
        $this->assertEquals("aspAffectationMessages", $obj->getAspAffectationMessages());
    }

    /**
     * Tests the setAvecHeuresTheo() method.
     *
     * @return void
     */
    public function testSetAvecHeuresTheo() {

        $obj = new Constantes2();

        $obj->setAvecHeuresTheo(true);
        $this->assertEquals(true, $obj->getAvecHeuresTheo());
    }

    /**
     * Tests the setCalculNombreMessages() method.
     *
     * @return void
     */
    public function testSetCalculNombreMessages() {

        $obj = new Constantes2();

        $obj->setCalculNombreMessages(true);
        $this->assertEquals(true, $obj->getCalculNombreMessages());
    }

    /**
     * Tests the setChampsCritereArticle21() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle21() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle21("champsCritereArticle21");
        $this->assertEquals("champsCritereArticle21", $obj->getChampsCritereArticle21());
    }

    /**
     * Tests the setChampsCritereArticle210() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle210() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle210("champsCritereArticle210");
        $this->assertEquals("champsCritereArticle210", $obj->getChampsCritereArticle210());
    }

    /**
     * Tests the setChampsCritereArticle22() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle22() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle22("champsCritereArticle22");
        $this->assertEquals("champsCritereArticle22", $obj->getChampsCritereArticle22());
    }

    /**
     * Tests the setChampsCritereArticle23() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle23() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle23("champsCritereArticle23");
        $this->assertEquals("champsCritereArticle23", $obj->getChampsCritereArticle23());
    }

    /**
     * Tests the setChampsCritereArticle24() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle24() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle24("champsCritereArticle24");
        $this->assertEquals("champsCritereArticle24", $obj->getChampsCritereArticle24());
    }

    /**
     * Tests the setChampsCritereArticle25() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle25() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle25("champsCritereArticle25");
        $this->assertEquals("champsCritereArticle25", $obj->getChampsCritereArticle25());
    }

    /**
     * Tests the setChampsCritereArticle26() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle26() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle26("champsCritereArticle26");
        $this->assertEquals("champsCritereArticle26", $obj->getChampsCritereArticle26());
    }

    /**
     * Tests the setChampsCritereArticle27() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle27() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle27("champsCritereArticle27");
        $this->assertEquals("champsCritereArticle27", $obj->getChampsCritereArticle27());
    }

    /**
     * Tests the setChampsCritereArticle28() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle28() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle28("champsCritereArticle28");
        $this->assertEquals("champsCritereArticle28", $obj->getChampsCritereArticle28());
    }

    /**
     * Tests the setChampsCritereArticle29() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle29() {

        $obj = new Constantes2();

        $obj->setChampsCritereArticle29("champsCritereArticle29");
        $this->assertEquals("champsCritereArticle29", $obj->getChampsCritereArticle29());
    }

    /**
     * Tests the setChampsCritereEntPieceAc1() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc1() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc1("champsCritereEntPieceAc1");
        $this->assertEquals("champsCritereEntPieceAc1", $obj->getChampsCritereEntPieceAc1());
    }

    /**
     * Tests the setChampsCritereEntPieceAc10() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc10() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc10("champsCritereEntPieceAc10");
        $this->assertEquals("champsCritereEntPieceAc10", $obj->getChampsCritereEntPieceAc10());
    }

    /**
     * Tests the setChampsCritereEntPieceAc2() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc2() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc2("champsCritereEntPieceAc2");
        $this->assertEquals("champsCritereEntPieceAc2", $obj->getChampsCritereEntPieceAc2());
    }

    /**
     * Tests the setChampsCritereEntPieceAc3() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc3() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc3("champsCritereEntPieceAc3");
        $this->assertEquals("champsCritereEntPieceAc3", $obj->getChampsCritereEntPieceAc3());
    }

    /**
     * Tests the setChampsCritereEntPieceAc4() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc4() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc4("champsCritereEntPieceAc4");
        $this->assertEquals("champsCritereEntPieceAc4", $obj->getChampsCritereEntPieceAc4());
    }

    /**
     * Tests the setChampsCritereEntPieceAc5() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc5() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc5("champsCritereEntPieceAc5");
        $this->assertEquals("champsCritereEntPieceAc5", $obj->getChampsCritereEntPieceAc5());
    }

    /**
     * Tests the setChampsCritereEntPieceAc6() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc6() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc6("champsCritereEntPieceAc6");
        $this->assertEquals("champsCritereEntPieceAc6", $obj->getChampsCritereEntPieceAc6());
    }

    /**
     * Tests the setChampsCritereEntPieceAc7() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc7() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc7("champsCritereEntPieceAc7");
        $this->assertEquals("champsCritereEntPieceAc7", $obj->getChampsCritereEntPieceAc7());
    }

    /**
     * Tests the setChampsCritereEntPieceAc8() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc8() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc8("champsCritereEntPieceAc8");
        $this->assertEquals("champsCritereEntPieceAc8", $obj->getChampsCritereEntPieceAc8());
    }

    /**
     * Tests the setChampsCritereEntPieceAc9() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc9() {

        $obj = new Constantes2();

        $obj->setChampsCritereEntPieceAc9("champsCritereEntPieceAc9");
        $this->assertEquals("champsCritereEntPieceAc9", $obj->getChampsCritereEntPieceAc9());
    }

    /**
     * Tests the setCleAccesConf() method.
     *
     * @return void
     */
    public function testSetCleAccesConf() {

        $obj = new Constantes2();

        $obj->setCleAccesConf("cleAccesConf");
        $this->assertEquals("cleAccesConf", $obj->getCleAccesConf());
    }

    /**
     * Tests the setCleAccesPlaquettes() method.
     *
     * @return void
     */
    public function testSetCleAccesPlaquettes() {

        $obj = new Constantes2();

        $obj->setCleAccesPlaquettes("cleAccesPlaquettes");
        $this->assertEquals("cleAccesPlaquettes", $obj->getCleAccesPlaquettes());
    }

    /**
     * Tests the setCleAccesQAdminDb() method.
     *
     * @return void
     */
    public function testSetCleAccesQAdminDb() {

        $obj = new Constantes2();

        $obj->setCleAccesQAdminDb("cleAccesQAdminDb");
        $this->assertEquals("cleAccesQAdminDb", $obj->getCleAccesQAdminDb());
    }

    /**
     * Tests the setClotureArchivageAuto() method.
     *
     * @return void
     */
    public function testSetClotureArchivageAuto() {

        $obj = new Constantes2();

        $obj->setClotureArchivageAuto(true);
        $this->assertEquals(true, $obj->getClotureArchivageAuto());
    }

    /**
     * Tests the setCodeClientQuadratus() method.
     *
     * @return void
     */
    public function testSetCodeClientQuadratus() {

        $obj = new Constantes2();

        $obj->setCodeClientQuadratus("codeClientQuadratus");
        $this->assertEquals("codeClientQuadratus", $obj->getCodeClientQuadratus());
    }

    /**
     * Tests the setCompteurFilDiscussion() method.
     *
     * @return void
     */
    public function testSetCompteurFilDiscussion() {

        $obj = new Constantes2();

        $obj->setCompteurFilDiscussion(10);
        $this->assertEquals(10, $obj->getCompteurFilDiscussion());
    }

    /**
     * Tests the setConfidentialiteAffaire() method.
     *
     * @return void
     */
    public function testSetConfidentialiteAffaire() {

        $obj = new Constantes2();

        $obj->setConfidentialiteAffaire(true);
        $this->assertEquals(true, $obj->getConfidentialiteAffaire());
    }

    /**
     * Tests the setCoutMoyenHoraire() method.
     *
     * @return void
     */
    public function testSetCoutMoyenHoraire() {

        $obj = new Constantes2();

        $obj->setCoutMoyenHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutMoyenHoraire());
    }

    /**
     * Tests the setCreateCli1FactParBl() method.
     *
     * @return void
     */
    public function testSetCreateCli1FactParBl() {

        $obj = new Constantes2();

        $obj->setCreateCli1FactParBl(true);
        $this->assertEquals(true, $obj->getCreateCli1FactParBl());
    }

    /**
     * Tests the setCreationAffaire() method.
     *
     * @return void
     */
    public function testSetCreationAffaire() {

        $obj = new Constantes2();

        $obj->setCreationAffaire(true);
        $this->assertEquals(true, $obj->getCreationAffaire());
    }

    /**
     * Tests the setDateDha() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDha() {

        // Set a Date/time mock.
        $dateDha = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setDateDha($dateDha);
        $this->assertSame($dateDha, $obj->getDateDha());
    }

    /**
     * Tests the setDateLastExeQpubWeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLastExeQpubWeb() {

        // Set a Date/time mock.
        $dateLastExeQpubWeb = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setDateLastExeQpubWeb($dateLastExeQpubWeb);
        $this->assertSame($dateLastExeQpubWeb, $obj->getDateLastExeQpubWeb());
    }

    /**
     * Tests the setDatePha() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePha() {

        // Set a Date/time mock.
        $datePha = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setDatePha($datePha);
        $this->assertSame($datePha, $obj->getDatePha());
    }

    /**
     * Tests the setDerniereVersionCd() method.
     *
     * @return void
     */
    public function testSetDerniereVersionCd() {

        $obj = new Constantes2();

        $obj->setDerniereVersionCd("derniereVersionCd");
        $this->assertEquals("derniereVersionCd", $obj->getDerniereVersionCd());
    }

    /**
     * Tests the setDroitCollabVisuDocuments() method.
     *
     * @return void
     */
    public function testSetDroitCollabVisuDocuments() {

        $obj = new Constantes2();

        $obj->setDroitCollabVisuDocuments(true);
        $this->assertEquals(true, $obj->getDroitCollabVisuDocuments());
    }

    /**
     * Tests the setEchDetailAff() method.
     *
     * @return void
     */
    public function testSetEchDetailAff() {

        $obj = new Constantes2();

        $obj->setEchDetailAff(true);
        $this->assertEquals(true, $obj->getEchDetailAff());
    }

    /**
     * Tests the setEtebacDestMessage() method.
     *
     * @return void
     */
    public function testSetEtebacDestMessage() {

        $obj = new Constantes2();

        $obj->setEtebacDestMessage("etebacDestMessage");
        $this->assertEquals("etebacDestMessage", $obj->getEtebacDestMessage());
    }

    /**
     * Tests the setFGsurAc() method.
     *
     * @return void
     */
    public function testSetFGsurAc() {

        $obj = new Constantes2();

        $obj->setFGsurAc(true);
        $this->assertEquals(true, $obj->getFGsurAc());
    }

    /**
     * Tests the setFGsurMonf() method.
     *
     * @return void
     */
    public function testSetFGsurMonf() {

        $obj = new Constantes2();

        $obj->setFGsurMonf(true);
        $this->assertEquals(true, $obj->getFGsurMonf());
    }

    /**
     * Tests the setFamillesLiees() method.
     *
     * @return void
     */
    public function testSetFamillesLiees() {

        $obj = new Constantes2();

        $obj->setFamillesLiees(true);
        $this->assertEquals(true, $obj->getFamillesLiees());
    }

    /**
     * Tests the setFgSurCdeFrn() method.
     *
     * @return void
     */
    public function testSetFgSurCdeFrn() {

        $obj = new Constantes2();

        $obj->setFgSurCdeFrn(true);
        $this->assertEquals(true, $obj->getFgSurCdeFrn());
    }

    /**
     * Tests the setFicheCliNePasProposerCreationDpdc() method.
     *
     * @return void
     */
    public function testSetFicheCliNePasProposerCreationDpdc() {

        $obj = new Constantes2();

        $obj->setFicheCliNePasProposerCreationDpdc(true);
        $this->assertEquals(true, $obj->getFicheCliNePasProposerCreationDpdc());
    }

    /**
     * Tests the setGestionGammes() method.
     *
     * @return void
     */
    public function testSetGestionGammes() {

        $obj = new Constantes2();

        $obj->setGestionGammes(true);
        $this->assertEquals(true, $obj->getGestionGammes());
    }

    /**
     * Tests the setGestionPointeuseQFact() method.
     *
     * @return void
     */
    public function testSetGestionPointeuseQFact() {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQFact(true);
        $this->assertEquals(true, $obj->getGestionPointeuseQFact());
    }

    /**
     * Tests the setGestionPointeuseQc() method.
     *
     * @return void
     */
    public function testSetGestionPointeuseQc() {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQc(true);
        $this->assertEquals(true, $obj->getGestionPointeuseQc());
    }

    /**
     * Tests the setGestionPointeuseQgi() method.
     *
     * @return void
     */
    public function testSetGestionPointeuseQgi() {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQgi(true);
        $this->assertEquals(true, $obj->getGestionPointeuseQgi());
    }

    /**
     * Tests the setGestionPointeuseQp() method.
     *
     * @return void
     */
    public function testSetGestionPointeuseQp() {

        $obj = new Constantes2();

        $obj->setGestionPointeuseQp(true);
        $this->assertEquals(true, $obj->getGestionPointeuseQp());
    }

    /**
     * Tests the setGestionTarifsTransporteurs() method.
     *
     * @return void
     */
    public function testSetGestionTarifsTransporteurs() {

        $obj = new Constantes2();

        $obj->setGestionTarifsTransporteurs(true);
        $this->assertEquals(true, $obj->getGestionTarifsTransporteurs());
    }

    /**
     * Tests the setGestionTarifsTransporteursNbDec() method.
     *
     * @return void
     */
    public function testSetGestionTarifsTransporteursNbDec() {

        $obj = new Constantes2();

        $obj->setGestionTarifsTransporteursNbDec(10);
        $this->assertEquals(10, $obj->getGestionTarifsTransporteursNbDec());
    }

    /**
     * Tests the setGestionVariantes() method.
     *
     * @return void
     */
    public function testSetGestionVariantes() {

        $obj = new Constantes2();

        $obj->setGestionVariantes(true);
        $this->assertEquals(true, $obj->getGestionVariantes());
    }

    /**
     * Tests the setHtAvecJoursFeries() method.
     *
     * @return void
     */
    public function testSetHtAvecJoursFeries() {

        $obj = new Constantes2();

        $obj->setHtAvecJoursFeries(true);
        $this->assertEquals(true, $obj->getHtAvecJoursFeries());
    }

    /**
     * Tests the setHtAvecSaisieConges() method.
     *
     * @return void
     */
    public function testSetHtAvecSaisieConges() {

        $obj = new Constantes2();

        $obj->setHtAvecSaisieConges(true);
        $this->assertEquals(true, $obj->getHtAvecSaisieConges());
    }

    /**
     * Tests the setHtAvecSaisieCongesCodesClients() method.
     *
     * @return void
     */
    public function testSetHtAvecSaisieCongesCodesClients() {

        $obj = new Constantes2();

        $obj->setHtAvecSaisieCongesCodesClients("htAvecSaisieCongesCodesClients");
        $this->assertEquals("htAvecSaisieCongesCodesClients", $obj->getHtAvecSaisieCongesCodesClients());
    }

    /**
     * Tests the setHtAvecSaisieCongesCodesTaches() method.
     *
     * @return void
     */
    public function testSetHtAvecSaisieCongesCodesTaches() {

        $obj = new Constantes2();

        $obj->setHtAvecSaisieCongesCodesTaches("htAvecSaisieCongesCodesTaches");
        $this->assertEquals("htAvecSaisieCongesCodesTaches", $obj->getHtAvecSaisieCongesCodesTaches());
    }

    /**
     * Tests the setIncremAutoArticle() method.
     *
     * @return void
     */
    public function testSetIncremAutoArticle() {

        $obj = new Constantes2();

        $obj->setIncremAutoArticle(true);
        $this->assertEquals(true, $obj->getIncremAutoArticle());
    }

    /**
     * Tests the setInterdireAccesArchivesCpta() method.
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesCpta() {

        $obj = new Constantes2();

        $obj->setInterdireAccesArchivesCpta(true);
        $this->assertEquals(true, $obj->getInterdireAccesArchivesCpta());
    }

    /**
     * Tests the setInterdireAccesArchivesPaie() method.
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesPaie() {

        $obj = new Constantes2();

        $obj->setInterdireAccesArchivesPaie(true);
        $this->assertEquals(true, $obj->getInterdireAccesArchivesPaie());
    }

    /**
     * Tests the setInterdireAccesEditionBalance() method.
     *
     * @return void
     */
    public function testSetInterdireAccesEditionBalance() {

        $obj = new Constantes2();

        $obj->setInterdireAccesEditionBalance(true);
        $this->assertEquals(true, $obj->getInterdireAccesEditionBalance());
    }

    /**
     * Tests the setInterdireAccesSuppDocArch() method.
     *
     * @return void
     */
    public function testSetInterdireAccesSuppDocArch() {

        $obj = new Constantes2();

        $obj->setInterdireAccesSuppDocArch(true);
        $this->assertEquals(true, $obj->getInterdireAccesSuppDocArch());
    }

    /**
     * Tests the setInterdirePubliDocWeb() method.
     *
     * @return void
     */
    public function testSetInterdirePubliDocWeb() {

        $obj = new Constantes2();

        $obj->setInterdirePubliDocWeb(true);
        $this->assertEquals(true, $obj->getInterdirePubliDocWeb());
    }

    /**
     * Tests the setIpPriveQws() method.
     *
     * @return void
     */
    public function testSetIpPriveQws() {

        $obj = new Constantes2();

        $obj->setIpPriveQws("ipPriveQws");
        $this->assertEquals("ipPriveQws", $obj->getIpPriveQws());
    }

    /**
     * Tests the setLiaisonTda() method.
     *
     * @return void
     */
    public function testSetLiaisonTda() {

        $obj = new Constantes2();

        $obj->setLiaisonTda(true);
        $this->assertEquals(true, $obj->getLiaisonTda());
    }

    /**
     * Tests the setLibAffectationFrn1() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn1() {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn1("libAffectationFrn1");
        $this->assertEquals("libAffectationFrn1", $obj->getLibAffectationFrn1());
    }

    /**
     * Tests the setLibAffectationFrn2() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn2() {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn2("libAffectationFrn2");
        $this->assertEquals("libAffectationFrn2", $obj->getLibAffectationFrn2());
    }

    /**
     * Tests the setLibAffectationFrn3() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn3() {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn3("libAffectationFrn3");
        $this->assertEquals("libAffectationFrn3", $obj->getLibAffectationFrn3());
    }

    /**
     * Tests the setLibAffectationFrn4() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn4() {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn4("libAffectationFrn4");
        $this->assertEquals("libAffectationFrn4", $obj->getLibAffectationFrn4());
    }

    /**
     * Tests the setLibAffectationFrn5() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn5() {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn5("libAffectationFrn5");
        $this->assertEquals("libAffectationFrn5", $obj->getLibAffectationFrn5());
    }

    /**
     * Tests the setLibAffectationFrn6() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn6() {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn6("libAffectationFrn6");
        $this->assertEquals("libAffectationFrn6", $obj->getLibAffectationFrn6());
    }

    /**
     * Tests the setLibAffectationFrn7() method.
     *
     * @return void
     */
    public function testSetLibAffectationFrn7() {

        $obj = new Constantes2();

        $obj->setLibAffectationFrn7("libAffectationFrn7");
        $this->assertEquals("libAffectationFrn7", $obj->getLibAffectationFrn7());
    }

    /**
     * Tests the setLibCritereArticle21() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle21() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle21("libCritereArticle21");
        $this->assertEquals("libCritereArticle21", $obj->getLibCritereArticle21());
    }

    /**
     * Tests the setLibCritereArticle210() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle210() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle210("libCritereArticle210");
        $this->assertEquals("libCritereArticle210", $obj->getLibCritereArticle210());
    }

    /**
     * Tests the setLibCritereArticle22() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle22() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle22("libCritereArticle22");
        $this->assertEquals("libCritereArticle22", $obj->getLibCritereArticle22());
    }

    /**
     * Tests the setLibCritereArticle23() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle23() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle23("libCritereArticle23");
        $this->assertEquals("libCritereArticle23", $obj->getLibCritereArticle23());
    }

    /**
     * Tests the setLibCritereArticle24() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle24() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle24("libCritereArticle24");
        $this->assertEquals("libCritereArticle24", $obj->getLibCritereArticle24());
    }

    /**
     * Tests the setLibCritereArticle25() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle25() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle25("libCritereArticle25");
        $this->assertEquals("libCritereArticle25", $obj->getLibCritereArticle25());
    }

    /**
     * Tests the setLibCritereArticle26() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle26() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle26("libCritereArticle26");
        $this->assertEquals("libCritereArticle26", $obj->getLibCritereArticle26());
    }

    /**
     * Tests the setLibCritereArticle27() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle27() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle27("libCritereArticle27");
        $this->assertEquals("libCritereArticle27", $obj->getLibCritereArticle27());
    }

    /**
     * Tests the setLibCritereArticle28() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle28() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle28("libCritereArticle28");
        $this->assertEquals("libCritereArticle28", $obj->getLibCritereArticle28());
    }

    /**
     * Tests the setLibCritereArticle29() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle29() {

        $obj = new Constantes2();

        $obj->setLibCritereArticle29("libCritereArticle29");
        $this->assertEquals("libCritereArticle29", $obj->getLibCritereArticle29());
    }

    /**
     * Tests the setLibCritereEntPieceAc1() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc1() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc1("libCritereEntPieceAc1");
        $this->assertEquals("libCritereEntPieceAc1", $obj->getLibCritereEntPieceAc1());
    }

    /**
     * Tests the setLibCritereEntPieceAc10() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc10() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc10("libCritereEntPieceAc10");
        $this->assertEquals("libCritereEntPieceAc10", $obj->getLibCritereEntPieceAc10());
    }

    /**
     * Tests the setLibCritereEntPieceAc2() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc2() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc2("libCritereEntPieceAc2");
        $this->assertEquals("libCritereEntPieceAc2", $obj->getLibCritereEntPieceAc2());
    }

    /**
     * Tests the setLibCritereEntPieceAc3() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc3() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc3("libCritereEntPieceAc3");
        $this->assertEquals("libCritereEntPieceAc3", $obj->getLibCritereEntPieceAc3());
    }

    /**
     * Tests the setLibCritereEntPieceAc4() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc4() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc4("libCritereEntPieceAc4");
        $this->assertEquals("libCritereEntPieceAc4", $obj->getLibCritereEntPieceAc4());
    }

    /**
     * Tests the setLibCritereEntPieceAc5() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc5() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc5("libCritereEntPieceAc5");
        $this->assertEquals("libCritereEntPieceAc5", $obj->getLibCritereEntPieceAc5());
    }

    /**
     * Tests the setLibCritereEntPieceAc6() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc6() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc6("libCritereEntPieceAc6");
        $this->assertEquals("libCritereEntPieceAc6", $obj->getLibCritereEntPieceAc6());
    }

    /**
     * Tests the setLibCritereEntPieceAc7() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc7() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc7("libCritereEntPieceAc7");
        $this->assertEquals("libCritereEntPieceAc7", $obj->getLibCritereEntPieceAc7());
    }

    /**
     * Tests the setLibCritereEntPieceAc8() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc8() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc8("libCritereEntPieceAc8");
        $this->assertEquals("libCritereEntPieceAc8", $obj->getLibCritereEntPieceAc8());
    }

    /**
     * Tests the setLibCritereEntPieceAc9() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc9() {

        $obj = new Constantes2();

        $obj->setLibCritereEntPieceAc9("libCritereEntPieceAc9");
        $this->assertEquals("libCritereEntPieceAc9", $obj->getLibCritereEntPieceAc9());
    }

    /**
     * Tests the setLibFrais1() method.
     *
     * @return void
     */
    public function testSetLibFrais1() {

        $obj = new Constantes2();

        $obj->setLibFrais1("libFrais1");
        $this->assertEquals("libFrais1", $obj->getLibFrais1());
    }

    /**
     * Tests the setLibFrais2() method.
     *
     * @return void
     */
    public function testSetLibFrais2() {

        $obj = new Constantes2();

        $obj->setLibFrais2("libFrais2");
        $this->assertEquals("libFrais2", $obj->getLibFrais2());
    }

    /**
     * Tests the setLibFrais3() method.
     *
     * @return void
     */
    public function testSetLibFrais3() {

        $obj = new Constantes2();

        $obj->setLibFrais3("libFrais3");
        $this->assertEquals("libFrais3", $obj->getLibFrais3());
    }

    /**
     * Tests the setLibelleGamme() method.
     *
     * @return void
     */
    public function testSetLibelleGamme() {

        $obj = new Constantes2();

        $obj->setLibelleGamme("libelleGamme");
        $this->assertEquals("libelleGamme", $obj->getLibelleGamme());
    }

    /**
     * Tests the setLibelleVariante() method.
     *
     * @return void
     */
    public function testSetLibelleVariante() {

        $obj = new Constantes2();

        $obj->setLibelleVariante("libelleVariante");
        $this->assertEquals("libelleVariante", $obj->getLibelleVariante());
    }

    /**
     * Tests the setLongueurNumAff() method.
     *
     * @return void
     */
    public function testSetLongueurNumAff() {

        $obj = new Constantes2();

        $obj->setLongueurNumAff(10);
        $this->assertEquals(10, $obj->getLongueurNumAff());
    }

    /**
     * Tests the setMajCodesActiviteCga() method.
     *
     * @return void
     */
    public function testSetMajCodesActiviteCga() {

        $obj = new Constantes2();

        $obj->setMajCodesActiviteCga("majCodesActiviteCga");
        $this->assertEquals("majCodesActiviteCga", $obj->getMajCodesActiviteCga());
    }

    /**
     * Tests the setMessAspod() method.
     *
     * @return void
     */
    public function testSetMessAspod() {

        $obj = new Constantes2();

        $obj->setMessAspod(true);
        $this->assertEquals(true, $obj->getMessAspod());
    }

    /**
     * Tests the setModifAffaire() method.
     *
     * @return void
     */
    public function testSetModifAffaire() {

        $obj = new Constantes2();

        $obj->setModifAffaire("modifAffaire");
        $this->assertEquals("modifAffaire", $obj->getModifAffaire());
    }

    /**
     * Tests the setModifDroitsAsp() method.
     *
     * @return void
     */
    public function testSetModifDroitsAsp() {

        $obj = new Constantes2();

        $obj->setModifDroitsAsp(true);
        $this->assertEquals(true, $obj->getModifDroitsAsp());
    }

    /**
     * Tests the setNbMaxGamme() method.
     *
     * @return void
     */
    public function testSetNbMaxGamme() {

        $obj = new Constantes2();

        $obj->setNbMaxGamme(10);
        $this->assertEquals(10, $obj->getNbMaxGamme());
    }

    /**
     * Tests the setNePasCreerCptCli() method.
     *
     * @return void
     */
    public function testSetNePasCreerCptCli() {

        $obj = new Constantes2();

        $obj->setNePasCreerCptCli(true);
        $this->assertEquals(true, $obj->getNePasCreerCptCli());
    }

    /**
     * Tests the setNePasCreerCptFrn() method.
     *
     * @return void
     */
    public function testSetNePasCreerCptFrn() {

        $obj = new Constantes2();

        $obj->setNePasCreerCptFrn(true);
        $this->assertEquals(true, $obj->getNePasCreerCptFrn());
    }

    /**
     * Tests the setNewDbInfos() method.
     *
     * @return void
     */
    public function testSetNewDbInfos() {

        $obj = new Constantes2();

        $obj->setNewDbInfos(true);
        $this->assertEquals(true, $obj->getNewDbInfos());
    }

    /**
     * Tests the setNewQBureau() method.
     *
     * @return void
     */
    public function testSetNewQBureau() {

        $obj = new Constantes2();

        $obj->setNewQBureau(true);
        $this->assertEquals(true, $obj->getNewQBureau());
    }

    /**
     * Tests the setNoDossFactCab() method.
     *
     * @return void
     */
    public function testSetNoDossFactCab() {

        $obj = new Constantes2();

        $obj->setNoDossFactCab("noDossFactCab");
        $this->assertEquals("noDossFactCab", $obj->getNoDossFactCab());
    }

    /**
     * Tests the setPasDeLienComptabilite() method.
     *
     * @return void
     */
    public function testSetPasDeLienComptabilite() {

        $obj = new Constantes2();

        $obj->setPasDeLienComptabilite(true);
        $this->assertEquals(true, $obj->getPasDeLienComptabilite());
    }

    /**
     * Tests the setPmeDossierRattachement() method.
     *
     * @return void
     */
    public function testSetPmeDossierRattachement() {

        $obj = new Constantes2();

        $obj->setPmeDossierRattachement("pmeDossierRattachement");
        $this->assertEquals("pmeDossierRattachement", $obj->getPmeDossierRattachement());
    }

    /**
     * Tests the setPrefixeCodeClient() method.
     *
     * @return void
     */
    public function testSetPrefixeCodeClient() {

        $obj = new Constantes2();

        $obj->setPrefixeCodeClient("prefixeCodeClient");
        $this->assertEquals("prefixeCodeClient", $obj->getPrefixeCodeClient());
    }

    /**
     * Tests the setProchainCodeClient() method.
     *
     * @return void
     */
    public function testSetProchainCodeClient() {

        $obj = new Constantes2();

        $obj->setProchainCodeClient("prochainCodeClient");
        $this->assertEquals("prochainCodeClient", $obj->getProchainCodeClient());
    }

    /**
     * Tests the setProxyActif() method.
     *
     * @return void
     */
    public function testSetProxyActif() {

        $obj = new Constantes2();

        $obj->setProxyActif(true);
        $this->assertEquals(true, $obj->getProxyActif());
    }

    /**
     * Tests the setProxyAdresse() method.
     *
     * @return void
     */
    public function testSetProxyAdresse() {

        $obj = new Constantes2();

        $obj->setProxyAdresse("proxyAdresse");
        $this->assertEquals("proxyAdresse", $obj->getProxyAdresse());
    }

    /**
     * Tests the setProxyPort() method.
     *
     * @return void
     */
    public function testSetProxyPort() {

        $obj = new Constantes2();

        $obj->setProxyPort(10);
        $this->assertEquals(10, $obj->getProxyPort());
    }

    /**
     * Tests the setQPubWebCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetQPubWebCodeCollaborateurDest() {

        $obj = new Constantes2();

        $obj->setQPubWebCodeCollaborateurDest("qPubWebCodeCollaborateurDest");
        $this->assertEquals("qPubWebCodeCollaborateurDest", $obj->getQPubWebCodeCollaborateurDest());
    }

    /**
     * Tests the setQwsCheminLogo() method.
     *
     * @return void
     */
    public function testSetQwsCheminLogo() {

        $obj = new Constantes2();

        $obj->setQwsCheminLogo("qwsCheminLogo");
        $this->assertEquals("qwsCheminLogo", $obj->getQwsCheminLogo());
    }

    /**
     * Tests the setQwsCodeIpl() method.
     *
     * @return void
     */
    public function testSetQwsCodeIpl() {

        $obj = new Constantes2();

        $obj->setQwsCodeIpl("qwsCodeIpl");
        $this->assertEquals("qwsCodeIpl", $obj->getQwsCodeIpl());
    }

    /**
     * Tests the setQwsHttpSecurise() method.
     *
     * @return void
     */
    public function testSetQwsHttpSecurise() {

        $obj = new Constantes2();

        $obj->setQwsHttpSecurise(true);
        $this->assertEquals(true, $obj->getQwsHttpSecurise());
    }

    /**
     * Tests the setQwsNomProduit() method.
     *
     * @return void
     */
    public function testSetQwsNomProduit() {

        $obj = new Constantes2();

        $obj->setQwsNomProduit("qwsNomProduit");
        $this->assertEquals("qwsNomProduit", $obj->getQwsNomProduit());
    }

    /**
     * Tests the setQwsUtiliserLogoCabinet() method.
     *
     * @return void
     */
    public function testSetQwsUtiliserLogoCabinet() {

        $obj = new Constantes2();

        $obj->setQwsUtiliserLogoCabinet(true);
        $this->assertEquals(true, $obj->getQwsUtiliserLogoCabinet());
    }

    /**
     * Tests the setQwsipl() method.
     *
     * @return void
     */
    public function testSetQwsipl() {

        $obj = new Constantes2();

        $obj->setQwsipl("qwsipl");
        $this->assertEquals("qwsipl", $obj->getQwsipl());
    }

    /**
     * Tests the setRacDataPaie() method.
     *
     * @return void
     */
    public function testSetRacDataPaie() {

        $obj = new Constantes2();

        $obj->setRacDataPaie("racDataPaie");
        $this->assertEquals("racDataPaie", $obj->getRacDataPaie());
    }

    /**
     * Tests the setRapportQInfos() method.
     *
     * @return void
     */
    public function testSetRapportQInfos() {

        $obj = new Constantes2();

        $obj->setRapportQInfos("rapportQInfos");
        $this->assertEquals("rapportQInfos", $obj->getRapportQInfos());
    }

    /**
     * Tests the setReqDemandeur() method.
     *
     * @return void
     */
    public function testSetReqDemandeur() {

        $obj = new Constantes2();

        $obj->setReqDemandeur("reqDemandeur");
        $this->assertEquals("reqDemandeur", $obj->getReqDemandeur());
    }

    /**
     * Tests the setSaisieProprieteMess() method.
     *
     * @return void
     */
    public function testSetSaisieProprieteMess() {

        $obj = new Constantes2();

        $obj->setSaisieProprieteMess(10);
        $this->assertEquals(10, $obj->getSaisieProprieteMess());
    }

    /**
     * Tests the setSaisieReglDirect() method.
     *
     * @return void
     */
    public function testSetSaisieReglDirect() {

        $obj = new Constantes2();

        $obj->setSaisieReglDirect(true);
        $this->assertEquals(true, $obj->getSaisieReglDirect());
    }

    /**
     * Tests the setSaisieTempsNbJApres() method.
     *
     * @return void
     */
    public function testSetSaisieTempsNbJApres() {

        $obj = new Constantes2();

        $obj->setSaisieTempsNbJApres(10);
        $this->assertEquals(10, $obj->getSaisieTempsNbJApres());
    }

    /**
     * Tests the setSaisieTempsNbJAvant() method.
     *
     * @return void
     */
    public function testSetSaisieTempsNbJAvant() {

        $obj = new Constantes2();

        $obj->setSaisieTempsNbJAvant(10);
        $this->assertEquals(10, $obj->getSaisieTempsNbJAvant());
    }

    /**
     * Tests the setSaisieTpNePasAfficherDp() method.
     *
     * @return void
     */
    public function testSetSaisieTpNePasAfficherDp() {

        $obj = new Constantes2();

        $obj->setSaisieTpNePasAfficherDp(true);
        $this->assertEquals(true, $obj->getSaisieTpNePasAfficherDp());
    }

    /**
     * Tests the setSaisieTpOngletUniqueDp() method.
     *
     * @return void
     */
    public function testSetSaisieTpOngletUniqueDp() {

        $obj = new Constantes2();

        $obj->setSaisieTpOngletUniqueDp(true);
        $this->assertEquals(true, $obj->getSaisieTpOngletUniqueDp());
    }

    /**
     * Tests the setSaisieTpOngletUniqueTn() method.
     *
     * @return void
     */
    public function testSetSaisieTpOngletUniqueTn() {

        $obj = new Constantes2();

        $obj->setSaisieTpOngletUniqueTn(true);
        $this->assertEquals(true, $obj->getSaisieTpOngletUniqueTn());
    }

    /**
     * Tests the setSaveHistoMemo2File() method.
     *
     * @return void
     */
    public function testSetSaveHistoMemo2File() {

        $obj = new Constantes2();

        $obj->setSaveHistoMemo2File(true);
        $this->assertEquals(true, $obj->getSaveHistoMemo2File());
    }

    /**
     * Tests the setSelAvLstPersoAccesGestionModifiables() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionModifiables() {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoAccesGestionModifiables(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoAccesGestionModifiables());
    }

    /**
     * Tests the setSelAvLstPersoAccesGestionnaire() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionnaire() {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoAccesGestionnaire(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoAccesGestionnaire());
    }

    /**
     * Tests the setSelAvLstPersoChampsModif() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoChampsModif() {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoChampsModif(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoChampsModif());
    }

    /**
     * Tests the setSelAvLstPersoCopieColonne() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoCopieColonne() {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoCopieColonne(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoCopieColonne());
    }

    /**
     * Tests the setSelAvLstPersoInterdireCreat() method.
     *
     * @return void
     */
    public function testSetSelAvLstPersoInterdireCreat() {

        $obj = new Constantes2();

        $obj->setSelAvLstPersoInterdireCreat(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoInterdireCreat());
    }

    /**
     * Tests the setSmsApiKey() method.
     *
     * @return void
     */
    public function testSetSmsApiKey() {

        $obj = new Constantes2();

        $obj->setSmsApiKey("smsApiKey");
        $this->assertEquals("smsApiKey", $obj->getSmsApiKey());
    }

    /**
     * Tests the setSmsDroitAcces() method.
     *
     * @return void
     */
    public function testSetSmsDroitAcces() {

        $obj = new Constantes2();

        $obj->setSmsDroitAcces(true);
        $this->assertEquals(true, $obj->getSmsDroitAcces());
    }

    /**
     * Tests the setSmsKey() method.
     *
     * @return void
     */
    public function testSetSmsKey() {

        $obj = new Constantes2();

        $obj->setSmsKey("smsKey");
        $this->assertEquals("smsKey", $obj->getSmsKey());
    }

    /**
     * Tests the setSmsPrestataire() method.
     *
     * @return void
     */
    public function testSetSmsPrestataire() {

        $obj = new Constantes2();

        $obj->setSmsPrestataire("smsPrestataire");
        $this->assertEquals("smsPrestataire", $obj->getSmsPrestataire());
    }

    /**
     * Tests the setSmsSender() method.
     *
     * @return void
     */
    public function testSetSmsSender() {

        $obj = new Constantes2();

        $obj->setSmsSender("smsSender");
        $this->assertEquals("smsSender", $obj->getSmsSender());
    }

    /**
     * Tests the setSmsType() method.
     *
     * @return void
     */
    public function testSetSmsType() {

        $obj = new Constantes2();

        $obj->setSmsType(10);
        $this->assertEquals(10, $obj->getSmsType());
    }

    /**
     * Tests the setSmsUserLogin() method.
     *
     * @return void
     */
    public function testSetSmsUserLogin() {

        $obj = new Constantes2();

        $obj->setSmsUserLogin("smsUserLogin");
        $this->assertEquals("smsUserLogin", $obj->getSmsUserLogin());
    }

    /**
     * Tests the setSoldeCptaOd() method.
     *
     * @return void
     */
    public function testSetSoldeCptaOd() {

        $obj = new Constantes2();

        $obj->setSoldeCptaOd(true);
        $this->assertEquals(true, $obj->getSoldeCptaOd());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric1() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric1() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric1("suiviClientIntituleGeneric1");
        $this->assertEquals("suiviClientIntituleGeneric1", $obj->getSuiviClientIntituleGeneric1());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric10() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric10() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric10("suiviClientIntituleGeneric10");
        $this->assertEquals("suiviClientIntituleGeneric10", $obj->getSuiviClientIntituleGeneric10());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric2() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric2() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric2("suiviClientIntituleGeneric2");
        $this->assertEquals("suiviClientIntituleGeneric2", $obj->getSuiviClientIntituleGeneric2());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric3() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric3() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric3("suiviClientIntituleGeneric3");
        $this->assertEquals("suiviClientIntituleGeneric3", $obj->getSuiviClientIntituleGeneric3());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric4() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric4() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric4("suiviClientIntituleGeneric4");
        $this->assertEquals("suiviClientIntituleGeneric4", $obj->getSuiviClientIntituleGeneric4());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric5() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric5() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric5("suiviClientIntituleGeneric5");
        $this->assertEquals("suiviClientIntituleGeneric5", $obj->getSuiviClientIntituleGeneric5());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric6() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric6() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric6("suiviClientIntituleGeneric6");
        $this->assertEquals("suiviClientIntituleGeneric6", $obj->getSuiviClientIntituleGeneric6());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric7() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric7() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric7("suiviClientIntituleGeneric7");
        $this->assertEquals("suiviClientIntituleGeneric7", $obj->getSuiviClientIntituleGeneric7());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric8() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric8() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric8("suiviClientIntituleGeneric8");
        $this->assertEquals("suiviClientIntituleGeneric8", $obj->getSuiviClientIntituleGeneric8());
    }

    /**
     * Tests the setSuiviClientIntituleGeneric9() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric9() {

        $obj = new Constantes2();

        $obj->setSuiviClientIntituleGeneric9("suiviClientIntituleGeneric9");
        $this->assertEquals("suiviClientIntituleGeneric9", $obj->getSuiviClientIntituleGeneric9());
    }

    /**
     * Tests the setTpAccesEncoursClient() method.
     *
     * @return void
     */
    public function testSetTpAccesEncoursClient() {

        $obj = new Constantes2();

        $obj->setTpAccesEncoursClient(true);
        $this->assertEquals(true, $obj->getTpAccesEncoursClient());
    }

    /**
     * Tests the setTpAvancementALaLigne() method.
     *
     * @return void
     */
    public function testSetTpAvancementALaLigne() {

        $obj = new Constantes2();

        $obj->setTpAvancementALaLigne(true);
        $this->assertEquals(true, $obj->getTpAvancementALaLigne());
    }

    /**
     * Tests the setTpInterditQte() method.
     *
     * @return void
     */
    public function testSetTpInterditQte() {

        $obj = new Constantes2();

        $obj->setTpInterditQte(true);
        $this->assertEquals(true, $obj->getTpInterditQte());
    }

    /**
     * Tests the setTpLibelleMission() method.
     *
     * @return void
     */
    public function testSetTpLibelleMission() {

        $obj = new Constantes2();

        $obj->setTpLibelleMission(true);
        $this->assertEquals(true, $obj->getTpLibelleMission());
    }

    /**
     * Tests the setTpLimiteSaisieNonOperationnel() method.
     *
     * @return void
     */
    public function testSetTpLimiteSaisieNonOperationnel() {

        $obj = new Constantes2();

        $obj->setTpLimiteSaisieNonOperationnel(true);
        $this->assertEquals(true, $obj->getTpLimiteSaisieNonOperationnel());
    }

    /**
     * Tests the setTpPasMoisCloture() method.
     *
     * @return void
     */
    public function testSetTpPasMoisCloture() {

        $obj = new Constantes2();

        $obj->setTpPasMoisCloture(true);
        $this->assertEquals(true, $obj->getTpPasMoisCloture());
    }

    /**
     * Tests the setTpPourcentageNonOperationnelDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTpPourcentageNonOperationnelDate() {

        // Set a Date/time mock.
        $tpPourcentageNonOperationnelDate = new DateTime("2018-09-10");

        $obj = new Constantes2();

        $obj->setTpPourcentageNonOperationnelDate($tpPourcentageNonOperationnelDate);
        $this->assertSame($tpPourcentageNonOperationnelDate, $obj->getTpPourcentageNonOperationnelDate());
    }

    /**
     * Tests the setTpQteInvisible() method.
     *
     * @return void
     */
    public function testSetTpQteInvisible() {

        $obj = new Constantes2();

        $obj->setTpQteInvisible(true);
        $this->assertEquals(true, $obj->getTpQteInvisible());
    }

    /**
     * Tests the setTpSaisieAvancement() method.
     *
     * @return void
     */
    public function testSetTpSaisieAvancement() {

        $obj = new Constantes2();

        $obj->setTpSaisieAvancement(true);
        $this->assertEquals(true, $obj->getTpSaisieAvancement());
    }

    /**
     * Tests the setTppupv123() method.
     *
     * @return void
     */
    public function testSetTppupv123() {

        $obj = new Constantes2();

        $obj->setTppupv123(true);
        $this->assertEquals(true, $obj->getTppupv123());
    }

    /**
     * Tests the setTpsNumArchive() method.
     *
     * @return void
     */
    public function testSetTpsNumArchive() {

        $obj = new Constantes2();

        $obj->setTpsNumArchive("tpsNumArchive");
        $this->assertEquals("tpsNumArchive", $obj->getTpsNumArchive());
    }

    /**
     * Tests the setTransVariantesFactgi() method.
     *
     * @return void
     */
    public function testSetTransVariantesFactgi() {

        $obj = new Constantes2();

        $obj->setTransVariantesFactgi(true);
        $this->assertEquals(true, $obj->getTransVariantesFactgi());
    }

    /**
     * Tests the setTypeAffichageSoldeFourn() method.
     *
     * @return void
     */
    public function testSetTypeAffichageSoldeFourn() {

        $obj = new Constantes2();

        $obj->setTypeAffichageSoldeFourn("typeAffichageSoldeFourn");
        $this->assertEquals("typeAffichageSoldeFourn", $obj->getTypeAffichageSoldeFourn());
    }

    /**
     * Tests the setTypeFrais1() method.
     *
     * @return void
     */
    public function testSetTypeFrais1() {

        $obj = new Constantes2();

        $obj->setTypeFrais1(true);
        $this->assertEquals(true, $obj->getTypeFrais1());
    }

    /**
     * Tests the setTypeFrais2() method.
     *
     * @return void
     */
    public function testSetTypeFrais2() {

        $obj = new Constantes2();

        $obj->setTypeFrais2(true);
        $this->assertEquals(true, $obj->getTypeFrais2());
    }

    /**
     * Tests the setTypeFrais3() method.
     *
     * @return void
     */
    public function testSetTypeFrais3() {

        $obj = new Constantes2();

        $obj->setTypeFrais3(true);
        $this->assertEquals(true, $obj->getTypeFrais3());
    }

    /**
     * Tests the setTypeSaisieTauxDevises() method.
     *
     * @return void
     */
    public function testSetTypeSaisieTauxDevises() {

        $obj = new Constantes2();

        $obj->setTypeSaisieTauxDevises("typeSaisieTauxDevises");
        $this->assertEquals("typeSaisieTauxDevises", $obj->getTypeSaisieTauxDevises());
    }

    /**
     * Tests the setVEsurDepAff() method.
     *
     * @return void
     */
    public function testSetVEsurDepAff() {

        $obj = new Constantes2();

        $obj->setVEsurDepAff(true);
        $this->assertEquals(true, $obj->getVEsurDepAff());
    }

    /**
     * Tests the setValAutoTarifsTransporteurs() method.
     *
     * @return void
     */
    public function testSetValAutoTarifsTransporteurs() {

        $obj = new Constantes2();

        $obj->setValAutoTarifsTransporteurs(true);
        $this->assertEquals(true, $obj->getValAutoTarifsTransporteurs());
    }

    /**
     * Tests the setVisualisationFicheCabinet() method.
     *
     * @return void
     */
    public function testSetVisualisationFicheCabinet() {

        $obj = new Constantes2();

        $obj->setVisualisationFicheCabinet(true);
        $this->assertEquals(true, $obj->getVisualisationFicheCabinet());
    }

    /**
     * Tests the setWordAccesParQClient() method.
     *
     * @return void
     */
    public function testSetWordAccesParQClient() {

        $obj = new Constantes2();

        $obj->setWordAccesParQClient(true);
        $this->assertEquals(true, $obj->getWordAccesParQClient());
    }

    /**
     * Tests the seteWsCabinet() method.
     *
     * @return void
     */
    public function testSeteWsCabinet() {

        $obj = new Constantes2();

        $obj->seteWsCabinet("eWsCabinet");
        $this->assertEquals("eWsCabinet", $obj->geteWsCabinet());
    }

    /**
     * Tests the seteWsCollId() method.
     *
     * @return void
     */
    public function testSeteWsCollId() {

        $obj = new Constantes2();

        $obj->seteWsCollId("eWsCollId");
        $this->assertEquals("eWsCollId", $obj->geteWsCollId());
    }

    /**
     * Tests the seteWsCollMdp() method.
     *
     * @return void
     */
    public function testSeteWsCollMdp() {

        $obj = new Constantes2();

        $obj->seteWsCollMdp("eWsCollMdp");
        $this->assertEquals("eWsCollMdp", $obj->geteWsCollMdp());
    }

    /**
     * Tests the seteWsSrvMdp() method.
     *
     * @return void
     */
    public function testSeteWsSrvMdp() {

        $obj = new Constantes2();

        $obj->seteWsSrvMdp("eWsSrvMdp");
        $this->assertEquals("eWsSrvMdp", $obj->geteWsSrvMdp());
    }

    /**
     * Tests the seteWsSrvName() method.
     *
     * @return void
     */
    public function testSeteWsSrvName() {

        $obj = new Constantes2();

        $obj->seteWsSrvName("eWsSrvName");
        $this->assertEquals("eWsSrvName", $obj->geteWsSrvName());
    }

    /**
     * Tests the seteWsSrvUtil() method.
     *
     * @return void
     */
    public function testSeteWsSrvUtil() {

        $obj = new Constantes2();

        $obj->seteWsSrvUtil("eWsSrvUtil");
        $this->assertEquals("eWsSrvUtil", $obj->geteWsSrvUtil());
    }

    /**
     * Tests the setlngCodeArticleAuto() method.
     *
     * @return void
     */
    public function testSetlngCodeArticleAuto() {

        $obj = new Constantes2();

        $obj->setlngCodeArticleAuto(10);
        $this->assertEquals(10, $obj->getlngCodeArticleAuto());
    }
}
