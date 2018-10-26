<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\Constantes2;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Constantes2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class Constantes2Test extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Constantes2();

		$this->assertNull($obj->getASPAffectationMessages());
		$this->assertNull($obj->getActivationConf2CMAVCli());
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
		$this->assertNull($obj->getChampsCritereArticle2_1());
		$this->assertNull($obj->getChampsCritereArticle2_10());
		$this->assertNull($obj->getChampsCritereArticle2_2());
		$this->assertNull($obj->getChampsCritereArticle2_3());
		$this->assertNull($obj->getChampsCritereArticle2_4());
		$this->assertNull($obj->getChampsCritereArticle2_5());
		$this->assertNull($obj->getChampsCritereArticle2_6());
		$this->assertNull($obj->getChampsCritereArticle2_7());
		$this->assertNull($obj->getChampsCritereArticle2_8());
		$this->assertNull($obj->getChampsCritereArticle2_9());
		$this->assertNull($obj->getChampsCritereEntPieceAC1());
		$this->assertNull($obj->getChampsCritereEntPieceAC10());
		$this->assertNull($obj->getChampsCritereEntPieceAC2());
		$this->assertNull($obj->getChampsCritereEntPieceAC3());
		$this->assertNull($obj->getChampsCritereEntPieceAC4());
		$this->assertNull($obj->getChampsCritereEntPieceAC5());
		$this->assertNull($obj->getChampsCritereEntPieceAC6());
		$this->assertNull($obj->getChampsCritereEntPieceAC7());
		$this->assertNull($obj->getChampsCritereEntPieceAC8());
		$this->assertNull($obj->getChampsCritereEntPieceAC9());
		$this->assertNull($obj->getCleAccesConf());
		$this->assertNull($obj->getCleAccesPlaquettes());
		$this->assertNull($obj->getCleAccesQAdminDb());
		$this->assertNull($obj->getClotureArchivageAuto());
		$this->assertNull($obj->getCodeClientQuadratus());
		$this->assertNull($obj->getCompteurFilDiscussion());
		$this->assertNull($obj->getConfidentialiteAffaire());
		$this->assertNull($obj->getCoutMoyenHoraire());
		$this->assertNull($obj->getCreateCli1FactParBL());
		$this->assertNull($obj->getCreationAffaire());
		$this->assertNull($obj->getDateDHA());
		$this->assertNull($obj->getDateLastExeQpubWeb());
		$this->assertNull($obj->getDatePHA());
		$this->assertNull($obj->getDerniereVersionCD());
		$this->assertNull($obj->getDroitCollabVisuDocuments());
		$this->assertNull($obj->getETEBACDestMessage());
		$this->assertNull($obj->getEchDetailAff());
		$this->assertNull($obj->getFGSurCdeFrn());
		$this->assertNull($obj->getFGsurAC());
		$this->assertNull($obj->getFGsurMONF());
		$this->assertNull($obj->getFamillesLiees());
		$this->assertNull($obj->getFicheCliNePasProposerCreationDPDC());
		$this->assertNull($obj->getGestionGammes());
		$this->assertNull($obj->getGestionPointeuseQC());
		$this->assertNull($obj->getGestionPointeuseQFact());
		$this->assertNull($obj->getGestionPointeuseQGI());
		$this->assertNull($obj->getGestionPointeuseQP());
		$this->assertNull($obj->getGestionTarifsTransporteurs());
		$this->assertNull($obj->getGestionTarifsTransporteursNbDec());
		$this->assertNull($obj->getGestionVariantes());
		$this->assertNull($obj->getHTAvecJoursFeries());
		$this->assertNull($obj->getHTAvecSaisieConges());
		$this->assertNull($obj->getHTAvecSaisieCongesCodesClients());
		$this->assertNull($obj->getHTAvecSaisieCongesCodesTaches());
		$this->assertNull($obj->getIPPriveQWS());
		$this->assertNull($obj->getIncremAutoArticle());
		$this->assertNull($obj->getInterdireAccesArchivesCpta());
		$this->assertNull($obj->getInterdireAccesArchivesPaie());
		$this->assertNull($obj->getInterdireAccesEditionBalance());
		$this->assertNull($obj->getInterdireAccesSuppDocArch());
		$this->assertNull($obj->getInterdirePubliDocWeb());
		$this->assertNull($obj->getLiaisonTDA());
		$this->assertNull($obj->getLibAffectationFrn1());
		$this->assertNull($obj->getLibAffectationFrn2());
		$this->assertNull($obj->getLibAffectationFrn3());
		$this->assertNull($obj->getLibAffectationFrn4());
		$this->assertNull($obj->getLibAffectationFrn5());
		$this->assertNull($obj->getLibAffectationFrn6());
		$this->assertNull($obj->getLibAffectationFrn7());
		$this->assertNull($obj->getLibCritereArticle2_1());
		$this->assertNull($obj->getLibCritereArticle2_10());
		$this->assertNull($obj->getLibCritereArticle2_2());
		$this->assertNull($obj->getLibCritereArticle2_3());
		$this->assertNull($obj->getLibCritereArticle2_4());
		$this->assertNull($obj->getLibCritereArticle2_5());
		$this->assertNull($obj->getLibCritereArticle2_6());
		$this->assertNull($obj->getLibCritereArticle2_7());
		$this->assertNull($obj->getLibCritereArticle2_8());
		$this->assertNull($obj->getLibCritereArticle2_9());
		$this->assertNull($obj->getLibCritereEntPieceAC1());
		$this->assertNull($obj->getLibCritereEntPieceAC10());
		$this->assertNull($obj->getLibCritereEntPieceAC2());
		$this->assertNull($obj->getLibCritereEntPieceAC3());
		$this->assertNull($obj->getLibCritereEntPieceAC4());
		$this->assertNull($obj->getLibCritereEntPieceAC5());
		$this->assertNull($obj->getLibCritereEntPieceAC6());
		$this->assertNull($obj->getLibCritereEntPieceAC7());
		$this->assertNull($obj->getLibCritereEntPieceAC8());
		$this->assertNull($obj->getLibCritereEntPieceAC9());
		$this->assertNull($obj->getLibFrais1());
		$this->assertNull($obj->getLibFrais2());
		$this->assertNull($obj->getLibFrais3());
		$this->assertNull($obj->getLibelleGamme());
		$this->assertNull($obj->getLibelleVariante());
		$this->assertNull($obj->getLongueurNumAff());
		$this->assertNull($obj->getMajCodesActiviteCGA());
		$this->assertNull($obj->getMessASP_OD());
		$this->assertNull($obj->getModifAffaire());
		$this->assertNull($obj->getModifDroitsASP());
		$this->assertNull($obj->getNbMaxGamme());
		$this->assertNull($obj->getNePasCreerCptCli());
		$this->assertNull($obj->getNePasCreerCptFrn());
		$this->assertNull($obj->getNewDbInfos());
		$this->assertNull($obj->getNewQBureau());
		$this->assertNull($obj->getNoDossFactCab());
		$this->assertNull($obj->getPMEDossierRattachement());
		$this->assertNull($obj->getPasDeLienComptabilite());
		$this->assertNull($obj->getPrefixeCodeClient());
		$this->assertNull($obj->getProchainCodeClient());
		$this->assertNull($obj->getProxyActif());
		$this->assertNull($obj->getProxyAdresse());
		$this->assertNull($obj->getProxyPort());
		$this->assertNull($obj->getQPubWebCodeCollaborateurDest());
		$this->assertNull($obj->getQWSCheminLogo());
		$this->assertNull($obj->getQWSCodeIPL());
		$this->assertNull($obj->getQWSHttpSecurise());
		$this->assertNull($obj->getQWSIPL());
		$this->assertNull($obj->getQWSNomProduit());
		$this->assertNull($obj->getQWSUtiliserLogoCabinet());
		$this->assertNull($obj->getREQ_Demandeur());
		$this->assertNull($obj->getRacDataPaie());
		$this->assertNull($obj->getRapportQInfos());
		$this->assertNull($obj->getSMS_Api_Key());
		$this->assertNull($obj->getSMS_DroitAcces());
		$this->assertNull($obj->getSMS_Key());
		$this->assertNull($obj->getSMS_Prestataire());
		$this->assertNull($obj->getSMS_Sender());
		$this->assertNull($obj->getSMS_Type());
		$this->assertNull($obj->getSMS_User_Login());
		$this->assertNull($obj->getSaisieProprieteMess());
		$this->assertNull($obj->getSaisieReglDirect());
		$this->assertNull($obj->getSaisieTP_NePasAfficherDP());
		$this->assertNull($obj->getSaisieTP_OngletUniqueDP());
		$this->assertNull($obj->getSaisieTP_OngletUniqueTN());
		$this->assertNull($obj->getSaisieTempsNbJApres());
		$this->assertNull($obj->getSaisieTempsNbJAvant());
		$this->assertNull($obj->getSaveHistoMemo2File());
		$this->assertNull($obj->getSelAvLstPersoAccesGestionModifiables());
		$this->assertNull($obj->getSelAvLstPersoAccesGestionnaire());
		$this->assertNull($obj->getSelAvLstPersoChampsModif());
		$this->assertNull($obj->getSelAvLstPersoCopieColonne());
		$this->assertNull($obj->getSelAvLstPersoInterdireCreat());
		$this->assertNull($obj->getSoldeCptaOD());
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
		$this->assertNull($obj->getTPAccesEncoursClient());
		$this->assertNull($obj->getTPAvancementALaLigne());
		$this->assertNull($obj->getTPInterditQte());
		$this->assertNull($obj->getTPLibelleMission());
		$this->assertNull($obj->getTPLimiteSaisieNonOperationnel());
		$this->assertNull($obj->getTPPUPV123());
		$this->assertNull($obj->getTPPasMoisCloture());
		$this->assertNull($obj->getTPPourcentageNonOperationnelDate());
		$this->assertNull($obj->getTPQteInvisible());
		$this->assertNull($obj->getTPS_NumArchive());
		$this->assertNull($obj->getTPSaisieAvancement());
		$this->assertNull($obj->getTransVariantesFACT_GI());
		$this->assertNull($obj->getTypeAffichageSoldeFourn());
		$this->assertNull($obj->getTypeFrais1());
		$this->assertNull($obj->getTypeFrais2());
		$this->assertNull($obj->getTypeFrais3());
		$this->assertNull($obj->getTypeSaisieTauxDevises());
		$this->assertNull($obj->getVEsurDepAff());
		$this->assertNull($obj->getValAutoTarifsTransporteurs());
		$this->assertNull($obj->getVisualisationFicheCabinet());
		$this->assertNull($obj->getWordAccesParQClient());
		$this->assertNull($obj->geteWSCabinet());
		$this->assertNull($obj->geteWSCollId());
		$this->assertNull($obj->geteWSCollMdp());
		$this->assertNull($obj->geteWSSrvMdp());
		$this->assertNull($obj->geteWSSrvName());
		$this->assertNull($obj->geteWSSrvUtil());
		$this->assertNull($obj->getlngCodeArticleAuto());
	}

	/**
	 * Tests the setASPAffectationMessages() method.
	 *
	 * @return void
	 */
	public function testSetASPAffectationMessages() {

		$obj = new Constantes2();

		$obj->setASPAffectationMessages("aSPAffectationMessages");
		$this->assertEquals("aSPAffectationMessages", $obj->getASPAffectationMessages());
	}

	/**
	 * Tests the setActivationConf2CMAVCli() method.
	 *
	 * @return void
	 */
	public function testSetActivationConf2CMAVCli() {

		$obj = new Constantes2();

		$obj->setActivationConf2CMAVCli(true);
		$this->assertEquals(true, $obj->getActivationConf2CMAVCli());
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
	 * Tests the setChampsCritereArticle2_1() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_1() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_1("champsCritereArticle2_1");
		$this->assertEquals("champsCritereArticle2_1", $obj->getChampsCritereArticle2_1());
	}

	/**
	 * Tests the setChampsCritereArticle2_10() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_10() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_10("champsCritereArticle2_10");
		$this->assertEquals("champsCritereArticle2_10", $obj->getChampsCritereArticle2_10());
	}

	/**
	 * Tests the setChampsCritereArticle2_2() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_2() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_2("champsCritereArticle2_2");
		$this->assertEquals("champsCritereArticle2_2", $obj->getChampsCritereArticle2_2());
	}

	/**
	 * Tests the setChampsCritereArticle2_3() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_3() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_3("champsCritereArticle2_3");
		$this->assertEquals("champsCritereArticle2_3", $obj->getChampsCritereArticle2_3());
	}

	/**
	 * Tests the setChampsCritereArticle2_4() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_4() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_4("champsCritereArticle2_4");
		$this->assertEquals("champsCritereArticle2_4", $obj->getChampsCritereArticle2_4());
	}

	/**
	 * Tests the setChampsCritereArticle2_5() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_5() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_5("champsCritereArticle2_5");
		$this->assertEquals("champsCritereArticle2_5", $obj->getChampsCritereArticle2_5());
	}

	/**
	 * Tests the setChampsCritereArticle2_6() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_6() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_6("champsCritereArticle2_6");
		$this->assertEquals("champsCritereArticle2_6", $obj->getChampsCritereArticle2_6());
	}

	/**
	 * Tests the setChampsCritereArticle2_7() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_7() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_7("champsCritereArticle2_7");
		$this->assertEquals("champsCritereArticle2_7", $obj->getChampsCritereArticle2_7());
	}

	/**
	 * Tests the setChampsCritereArticle2_8() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_8() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_8("champsCritereArticle2_8");
		$this->assertEquals("champsCritereArticle2_8", $obj->getChampsCritereArticle2_8());
	}

	/**
	 * Tests the setChampsCritereArticle2_9() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereArticle2_9() {

		$obj = new Constantes2();

		$obj->setChampsCritereArticle2_9("champsCritereArticle2_9");
		$this->assertEquals("champsCritereArticle2_9", $obj->getChampsCritereArticle2_9());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC1() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC1() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC1("champsCritereEntPieceAC1");
		$this->assertEquals("champsCritereEntPieceAC1", $obj->getChampsCritereEntPieceAC1());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC10() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC10() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC10("champsCritereEntPieceAC10");
		$this->assertEquals("champsCritereEntPieceAC10", $obj->getChampsCritereEntPieceAC10());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC2() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC2() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC2("champsCritereEntPieceAC2");
		$this->assertEquals("champsCritereEntPieceAC2", $obj->getChampsCritereEntPieceAC2());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC3() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC3() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC3("champsCritereEntPieceAC3");
		$this->assertEquals("champsCritereEntPieceAC3", $obj->getChampsCritereEntPieceAC3());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC4() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC4() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC4("champsCritereEntPieceAC4");
		$this->assertEquals("champsCritereEntPieceAC4", $obj->getChampsCritereEntPieceAC4());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC5() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC5() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC5("champsCritereEntPieceAC5");
		$this->assertEquals("champsCritereEntPieceAC5", $obj->getChampsCritereEntPieceAC5());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC6() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC6() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC6("champsCritereEntPieceAC6");
		$this->assertEquals("champsCritereEntPieceAC6", $obj->getChampsCritereEntPieceAC6());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC7() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC7() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC7("champsCritereEntPieceAC7");
		$this->assertEquals("champsCritereEntPieceAC7", $obj->getChampsCritereEntPieceAC7());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC8() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC8() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC8("champsCritereEntPieceAC8");
		$this->assertEquals("champsCritereEntPieceAC8", $obj->getChampsCritereEntPieceAC8());
	}

	/**
	 * Tests the setChampsCritereEntPieceAC9() method.
	 *
	 * @return void
	 */
	public function testSetChampsCritereEntPieceAC9() {

		$obj = new Constantes2();

		$obj->setChampsCritereEntPieceAC9("champsCritereEntPieceAC9");
		$this->assertEquals("champsCritereEntPieceAC9", $obj->getChampsCritereEntPieceAC9());
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
	 * Tests the setCreateCli1FactParBL() method.
	 *
	 * @return void
	 */
	public function testSetCreateCli1FactParBL() {

		$obj = new Constantes2();

		$obj->setCreateCli1FactParBL(true);
		$this->assertEquals(true, $obj->getCreateCli1FactParBL());
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
	 * Tests the setDateDHA() method.
	 *
	 * @return void
	 */
	public function testSetDateDHA() {

		$obj = new Constantes2();

		$obj->setDateDHA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDHA());
	}

	/**
	 * Tests the setDateLastExeQpubWeb() method.
	 *
	 * @return void
	 */
	public function testSetDateLastExeQpubWeb() {

		$obj = new Constantes2();

		$obj->setDateLastExeQpubWeb(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateLastExeQpubWeb());
	}

	/**
	 * Tests the setDatePHA() method.
	 *
	 * @return void
	 */
	public function testSetDatePHA() {

		$obj = new Constantes2();

		$obj->setDatePHA(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePHA());
	}

	/**
	 * Tests the setDerniereVersionCD() method.
	 *
	 * @return void
	 */
	public function testSetDerniereVersionCD() {

		$obj = new Constantes2();

		$obj->setDerniereVersionCD("derniereVersionCD");
		$this->assertEquals("derniereVersionCD", $obj->getDerniereVersionCD());
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
	 * Tests the setETEBACDestMessage() method.
	 *
	 * @return void
	 */
	public function testSetETEBACDestMessage() {

		$obj = new Constantes2();

		$obj->setETEBACDestMessage("eTEBACDestMessage");
		$this->assertEquals("eTEBACDestMessage", $obj->getETEBACDestMessage());
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
	 * Tests the setFGSurCdeFrn() method.
	 *
	 * @return void
	 */
	public function testSetFGSurCdeFrn() {

		$obj = new Constantes2();

		$obj->setFGSurCdeFrn(true);
		$this->assertEquals(true, $obj->getFGSurCdeFrn());
	}

	/**
	 * Tests the setFGsurAC() method.
	 *
	 * @return void
	 */
	public function testSetFGsurAC() {

		$obj = new Constantes2();

		$obj->setFGsurAC(true);
		$this->assertEquals(true, $obj->getFGsurAC());
	}

	/**
	 * Tests the setFGsurMONF() method.
	 *
	 * @return void
	 */
	public function testSetFGsurMONF() {

		$obj = new Constantes2();

		$obj->setFGsurMONF(true);
		$this->assertEquals(true, $obj->getFGsurMONF());
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
	 * Tests the setFicheCliNePasProposerCreationDPDC() method.
	 *
	 * @return void
	 */
	public function testSetFicheCliNePasProposerCreationDPDC() {

		$obj = new Constantes2();

		$obj->setFicheCliNePasProposerCreationDPDC(true);
		$this->assertEquals(true, $obj->getFicheCliNePasProposerCreationDPDC());
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
	 * Tests the setGestionPointeuseQC() method.
	 *
	 * @return void
	 */
	public function testSetGestionPointeuseQC() {

		$obj = new Constantes2();

		$obj->setGestionPointeuseQC(true);
		$this->assertEquals(true, $obj->getGestionPointeuseQC());
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
	 * Tests the setGestionPointeuseQGI() method.
	 *
	 * @return void
	 */
	public function testSetGestionPointeuseQGI() {

		$obj = new Constantes2();

		$obj->setGestionPointeuseQGI(true);
		$this->assertEquals(true, $obj->getGestionPointeuseQGI());
	}

	/**
	 * Tests the setGestionPointeuseQP() method.
	 *
	 * @return void
	 */
	public function testSetGestionPointeuseQP() {

		$obj = new Constantes2();

		$obj->setGestionPointeuseQP(true);
		$this->assertEquals(true, $obj->getGestionPointeuseQP());
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
	 * Tests the setHTAvecJoursFeries() method.
	 *
	 * @return void
	 */
	public function testSetHTAvecJoursFeries() {

		$obj = new Constantes2();

		$obj->setHTAvecJoursFeries(true);
		$this->assertEquals(true, $obj->getHTAvecJoursFeries());
	}

	/**
	 * Tests the setHTAvecSaisieConges() method.
	 *
	 * @return void
	 */
	public function testSetHTAvecSaisieConges() {

		$obj = new Constantes2();

		$obj->setHTAvecSaisieConges(true);
		$this->assertEquals(true, $obj->getHTAvecSaisieConges());
	}

	/**
	 * Tests the setHTAvecSaisieCongesCodesClients() method.
	 *
	 * @return void
	 */
	public function testSetHTAvecSaisieCongesCodesClients() {

		$obj = new Constantes2();

		$obj->setHTAvecSaisieCongesCodesClients("hTAvecSaisieCongesCodesClients");
		$this->assertEquals("hTAvecSaisieCongesCodesClients", $obj->getHTAvecSaisieCongesCodesClients());
	}

	/**
	 * Tests the setHTAvecSaisieCongesCodesTaches() method.
	 *
	 * @return void
	 */
	public function testSetHTAvecSaisieCongesCodesTaches() {

		$obj = new Constantes2();

		$obj->setHTAvecSaisieCongesCodesTaches("hTAvecSaisieCongesCodesTaches");
		$this->assertEquals("hTAvecSaisieCongesCodesTaches", $obj->getHTAvecSaisieCongesCodesTaches());
	}

	/**
	 * Tests the setIPPriveQWS() method.
	 *
	 * @return void
	 */
	public function testSetIPPriveQWS() {

		$obj = new Constantes2();

		$obj->setIPPriveQWS("iPPriveQWS");
		$this->assertEquals("iPPriveQWS", $obj->getIPPriveQWS());
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
	 * Tests the setLiaisonTDA() method.
	 *
	 * @return void
	 */
	public function testSetLiaisonTDA() {

		$obj = new Constantes2();

		$obj->setLiaisonTDA(true);
		$this->assertEquals(true, $obj->getLiaisonTDA());
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
	 * Tests the setLibCritereArticle2_1() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_1() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_1("libCritereArticle2_1");
		$this->assertEquals("libCritereArticle2_1", $obj->getLibCritereArticle2_1());
	}

	/**
	 * Tests the setLibCritereArticle2_10() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_10() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_10("libCritereArticle2_10");
		$this->assertEquals("libCritereArticle2_10", $obj->getLibCritereArticle2_10());
	}

	/**
	 * Tests the setLibCritereArticle2_2() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_2() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_2("libCritereArticle2_2");
		$this->assertEquals("libCritereArticle2_2", $obj->getLibCritereArticle2_2());
	}

	/**
	 * Tests the setLibCritereArticle2_3() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_3() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_3("libCritereArticle2_3");
		$this->assertEquals("libCritereArticle2_3", $obj->getLibCritereArticle2_3());
	}

	/**
	 * Tests the setLibCritereArticle2_4() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_4() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_4("libCritereArticle2_4");
		$this->assertEquals("libCritereArticle2_4", $obj->getLibCritereArticle2_4());
	}

	/**
	 * Tests the setLibCritereArticle2_5() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_5() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_5("libCritereArticle2_5");
		$this->assertEquals("libCritereArticle2_5", $obj->getLibCritereArticle2_5());
	}

	/**
	 * Tests the setLibCritereArticle2_6() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_6() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_6("libCritereArticle2_6");
		$this->assertEquals("libCritereArticle2_6", $obj->getLibCritereArticle2_6());
	}

	/**
	 * Tests the setLibCritereArticle2_7() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_7() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_7("libCritereArticle2_7");
		$this->assertEquals("libCritereArticle2_7", $obj->getLibCritereArticle2_7());
	}

	/**
	 * Tests the setLibCritereArticle2_8() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_8() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_8("libCritereArticle2_8");
		$this->assertEquals("libCritereArticle2_8", $obj->getLibCritereArticle2_8());
	}

	/**
	 * Tests the setLibCritereArticle2_9() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereArticle2_9() {

		$obj = new Constantes2();

		$obj->setLibCritereArticle2_9("libCritereArticle2_9");
		$this->assertEquals("libCritereArticle2_9", $obj->getLibCritereArticle2_9());
	}

	/**
	 * Tests the setLibCritereEntPieceAC1() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC1() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC1("libCritereEntPieceAC1");
		$this->assertEquals("libCritereEntPieceAC1", $obj->getLibCritereEntPieceAC1());
	}

	/**
	 * Tests the setLibCritereEntPieceAC10() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC10() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC10("libCritereEntPieceAC10");
		$this->assertEquals("libCritereEntPieceAC10", $obj->getLibCritereEntPieceAC10());
	}

	/**
	 * Tests the setLibCritereEntPieceAC2() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC2() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC2("libCritereEntPieceAC2");
		$this->assertEquals("libCritereEntPieceAC2", $obj->getLibCritereEntPieceAC2());
	}

	/**
	 * Tests the setLibCritereEntPieceAC3() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC3() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC3("libCritereEntPieceAC3");
		$this->assertEquals("libCritereEntPieceAC3", $obj->getLibCritereEntPieceAC3());
	}

	/**
	 * Tests the setLibCritereEntPieceAC4() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC4() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC4("libCritereEntPieceAC4");
		$this->assertEquals("libCritereEntPieceAC4", $obj->getLibCritereEntPieceAC4());
	}

	/**
	 * Tests the setLibCritereEntPieceAC5() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC5() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC5("libCritereEntPieceAC5");
		$this->assertEquals("libCritereEntPieceAC5", $obj->getLibCritereEntPieceAC5());
	}

	/**
	 * Tests the setLibCritereEntPieceAC6() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC6() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC6("libCritereEntPieceAC6");
		$this->assertEquals("libCritereEntPieceAC6", $obj->getLibCritereEntPieceAC6());
	}

	/**
	 * Tests the setLibCritereEntPieceAC7() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC7() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC7("libCritereEntPieceAC7");
		$this->assertEquals("libCritereEntPieceAC7", $obj->getLibCritereEntPieceAC7());
	}

	/**
	 * Tests the setLibCritereEntPieceAC8() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC8() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC8("libCritereEntPieceAC8");
		$this->assertEquals("libCritereEntPieceAC8", $obj->getLibCritereEntPieceAC8());
	}

	/**
	 * Tests the setLibCritereEntPieceAC9() method.
	 *
	 * @return void
	 */
	public function testSetLibCritereEntPieceAC9() {

		$obj = new Constantes2();

		$obj->setLibCritereEntPieceAC9("libCritereEntPieceAC9");
		$this->assertEquals("libCritereEntPieceAC9", $obj->getLibCritereEntPieceAC9());
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
	 * Tests the setMajCodesActiviteCGA() method.
	 *
	 * @return void
	 */
	public function testSetMajCodesActiviteCGA() {

		$obj = new Constantes2();

		$obj->setMajCodesActiviteCGA("majCodesActiviteCGA");
		$this->assertEquals("majCodesActiviteCGA", $obj->getMajCodesActiviteCGA());
	}

	/**
	 * Tests the setMessASP_OD() method.
	 *
	 * @return void
	 */
	public function testSetMessASP_OD() {

		$obj = new Constantes2();

		$obj->setMessASP_OD(true);
		$this->assertEquals(true, $obj->getMessASP_OD());
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
	 * Tests the setModifDroitsASP() method.
	 *
	 * @return void
	 */
	public function testSetModifDroitsASP() {

		$obj = new Constantes2();

		$obj->setModifDroitsASP(true);
		$this->assertEquals(true, $obj->getModifDroitsASP());
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
	 * Tests the setPMEDossierRattachement() method.
	 *
	 * @return void
	 */
	public function testSetPMEDossierRattachement() {

		$obj = new Constantes2();

		$obj->setPMEDossierRattachement("pMEDossierRattachement");
		$this->assertEquals("pMEDossierRattachement", $obj->getPMEDossierRattachement());
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
	 * Tests the setQWSCheminLogo() method.
	 *
	 * @return void
	 */
	public function testSetQWSCheminLogo() {

		$obj = new Constantes2();

		$obj->setQWSCheminLogo("qWSCheminLogo");
		$this->assertEquals("qWSCheminLogo", $obj->getQWSCheminLogo());
	}

	/**
	 * Tests the setQWSCodeIPL() method.
	 *
	 * @return void
	 */
	public function testSetQWSCodeIPL() {

		$obj = new Constantes2();

		$obj->setQWSCodeIPL("qWSCodeIPL");
		$this->assertEquals("qWSCodeIPL", $obj->getQWSCodeIPL());
	}

	/**
	 * Tests the setQWSHttpSecurise() method.
	 *
	 * @return void
	 */
	public function testSetQWSHttpSecurise() {

		$obj = new Constantes2();

		$obj->setQWSHttpSecurise(true);
		$this->assertEquals(true, $obj->getQWSHttpSecurise());
	}

	/**
	 * Tests the setQWSIPL() method.
	 *
	 * @return void
	 */
	public function testSetQWSIPL() {

		$obj = new Constantes2();

		$obj->setQWSIPL("qWSIPL");
		$this->assertEquals("qWSIPL", $obj->getQWSIPL());
	}

	/**
	 * Tests the setQWSNomProduit() method.
	 *
	 * @return void
	 */
	public function testSetQWSNomProduit() {

		$obj = new Constantes2();

		$obj->setQWSNomProduit("qWSNomProduit");
		$this->assertEquals("qWSNomProduit", $obj->getQWSNomProduit());
	}

	/**
	 * Tests the setQWSUtiliserLogoCabinet() method.
	 *
	 * @return void
	 */
	public function testSetQWSUtiliserLogoCabinet() {

		$obj = new Constantes2();

		$obj->setQWSUtiliserLogoCabinet(true);
		$this->assertEquals(true, $obj->getQWSUtiliserLogoCabinet());
	}

	/**
	 * Tests the setREQ_Demandeur() method.
	 *
	 * @return void
	 */
	public function testSetREQ_Demandeur() {

		$obj = new Constantes2();

		$obj->setREQ_Demandeur("rEQ_Demandeur");
		$this->assertEquals("rEQ_Demandeur", $obj->getREQ_Demandeur());
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
	 * Tests the setSMS_Api_Key() method.
	 *
	 * @return void
	 */
	public function testSetSMS_Api_Key() {

		$obj = new Constantes2();

		$obj->setSMS_Api_Key("sMS_Api_Key");
		$this->assertEquals("sMS_Api_Key", $obj->getSMS_Api_Key());
	}

	/**
	 * Tests the setSMS_DroitAcces() method.
	 *
	 * @return void
	 */
	public function testSetSMS_DroitAcces() {

		$obj = new Constantes2();

		$obj->setSMS_DroitAcces(true);
		$this->assertEquals(true, $obj->getSMS_DroitAcces());
	}

	/**
	 * Tests the setSMS_Key() method.
	 *
	 * @return void
	 */
	public function testSetSMS_Key() {

		$obj = new Constantes2();

		$obj->setSMS_Key("sMS_Key");
		$this->assertEquals("sMS_Key", $obj->getSMS_Key());
	}

	/**
	 * Tests the setSMS_Prestataire() method.
	 *
	 * @return void
	 */
	public function testSetSMS_Prestataire() {

		$obj = new Constantes2();

		$obj->setSMS_Prestataire("sMS_Prestataire");
		$this->assertEquals("sMS_Prestataire", $obj->getSMS_Prestataire());
	}

	/**
	 * Tests the setSMS_Sender() method.
	 *
	 * @return void
	 */
	public function testSetSMS_Sender() {

		$obj = new Constantes2();

		$obj->setSMS_Sender("sMS_Sender");
		$this->assertEquals("sMS_Sender", $obj->getSMS_Sender());
	}

	/**
	 * Tests the setSMS_Type() method.
	 *
	 * @return void
	 */
	public function testSetSMS_Type() {

		$obj = new Constantes2();

		$obj->setSMS_Type(10);
		$this->assertEquals(10, $obj->getSMS_Type());
	}

	/**
	 * Tests the setSMS_User_Login() method.
	 *
	 * @return void
	 */
	public function testSetSMS_User_Login() {

		$obj = new Constantes2();

		$obj->setSMS_User_Login("sMS_User_Login");
		$this->assertEquals("sMS_User_Login", $obj->getSMS_User_Login());
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
	 * Tests the setSaisieTP_NePasAfficherDP() method.
	 *
	 * @return void
	 */
	public function testSetSaisieTP_NePasAfficherDP() {

		$obj = new Constantes2();

		$obj->setSaisieTP_NePasAfficherDP(true);
		$this->assertEquals(true, $obj->getSaisieTP_NePasAfficherDP());
	}

	/**
	 * Tests the setSaisieTP_OngletUniqueDP() method.
	 *
	 * @return void
	 */
	public function testSetSaisieTP_OngletUniqueDP() {

		$obj = new Constantes2();

		$obj->setSaisieTP_OngletUniqueDP(true);
		$this->assertEquals(true, $obj->getSaisieTP_OngletUniqueDP());
	}

	/**
	 * Tests the setSaisieTP_OngletUniqueTN() method.
	 *
	 * @return void
	 */
	public function testSetSaisieTP_OngletUniqueTN() {

		$obj = new Constantes2();

		$obj->setSaisieTP_OngletUniqueTN(true);
		$this->assertEquals(true, $obj->getSaisieTP_OngletUniqueTN());
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
	 * Tests the setSoldeCptaOD() method.
	 *
	 * @return void
	 */
	public function testSetSoldeCptaOD() {

		$obj = new Constantes2();

		$obj->setSoldeCptaOD(true);
		$this->assertEquals(true, $obj->getSoldeCptaOD());
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
	 * Tests the setTPAccesEncoursClient() method.
	 *
	 * @return void
	 */
	public function testSetTPAccesEncoursClient() {

		$obj = new Constantes2();

		$obj->setTPAccesEncoursClient(true);
		$this->assertEquals(true, $obj->getTPAccesEncoursClient());
	}

	/**
	 * Tests the setTPAvancementALaLigne() method.
	 *
	 * @return void
	 */
	public function testSetTPAvancementALaLigne() {

		$obj = new Constantes2();

		$obj->setTPAvancementALaLigne(true);
		$this->assertEquals(true, $obj->getTPAvancementALaLigne());
	}

	/**
	 * Tests the setTPInterditQte() method.
	 *
	 * @return void
	 */
	public function testSetTPInterditQte() {

		$obj = new Constantes2();

		$obj->setTPInterditQte(true);
		$this->assertEquals(true, $obj->getTPInterditQte());
	}

	/**
	 * Tests the setTPLibelleMission() method.
	 *
	 * @return void
	 */
	public function testSetTPLibelleMission() {

		$obj = new Constantes2();

		$obj->setTPLibelleMission(true);
		$this->assertEquals(true, $obj->getTPLibelleMission());
	}

	/**
	 * Tests the setTPLimiteSaisieNonOperationnel() method.
	 *
	 * @return void
	 */
	public function testSetTPLimiteSaisieNonOperationnel() {

		$obj = new Constantes2();

		$obj->setTPLimiteSaisieNonOperationnel(true);
		$this->assertEquals(true, $obj->getTPLimiteSaisieNonOperationnel());
	}

	/**
	 * Tests the setTPPUPV123() method.
	 *
	 * @return void
	 */
	public function testSetTPPUPV123() {

		$obj = new Constantes2();

		$obj->setTPPUPV123(true);
		$this->assertEquals(true, $obj->getTPPUPV123());
	}

	/**
	 * Tests the setTPPasMoisCloture() method.
	 *
	 * @return void
	 */
	public function testSetTPPasMoisCloture() {

		$obj = new Constantes2();

		$obj->setTPPasMoisCloture(true);
		$this->assertEquals(true, $obj->getTPPasMoisCloture());
	}

	/**
	 * Tests the setTPPourcentageNonOperationnelDate() method.
	 *
	 * @return void
	 */
	public function testSetTPPourcentageNonOperationnelDate() {

		$obj = new Constantes2();

		$obj->setTPPourcentageNonOperationnelDate(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getTPPourcentageNonOperationnelDate());
	}

	/**
	 * Tests the setTPQteInvisible() method.
	 *
	 * @return void
	 */
	public function testSetTPQteInvisible() {

		$obj = new Constantes2();

		$obj->setTPQteInvisible(true);
		$this->assertEquals(true, $obj->getTPQteInvisible());
	}

	/**
	 * Tests the setTPS_NumArchive() method.
	 *
	 * @return void
	 */
	public function testSetTPS_NumArchive() {

		$obj = new Constantes2();

		$obj->setTPS_NumArchive("tPS_NumArchive");
		$this->assertEquals("tPS_NumArchive", $obj->getTPS_NumArchive());
	}

	/**
	 * Tests the setTPSaisieAvancement() method.
	 *
	 * @return void
	 */
	public function testSetTPSaisieAvancement() {

		$obj = new Constantes2();

		$obj->setTPSaisieAvancement(true);
		$this->assertEquals(true, $obj->getTPSaisieAvancement());
	}

	/**
	 * Tests the setTransVariantesFACT_GI() method.
	 *
	 * @return void
	 */
	public function testSetTransVariantesFACT_GI() {

		$obj = new Constantes2();

		$obj->setTransVariantesFACT_GI(true);
		$this->assertEquals(true, $obj->getTransVariantesFACT_GI());
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
	 * Tests the seteWSCabinet() method.
	 *
	 * @return void
	 */
	public function testSeteWSCabinet() {

		$obj = new Constantes2();

		$obj->seteWSCabinet("eWSCabinet");
		$this->assertEquals("eWSCabinet", $obj->geteWSCabinet());
	}

	/**
	 * Tests the seteWSCollId() method.
	 *
	 * @return void
	 */
	public function testSeteWSCollId() {

		$obj = new Constantes2();

		$obj->seteWSCollId("eWSCollId");
		$this->assertEquals("eWSCollId", $obj->geteWSCollId());
	}

	/**
	 * Tests the seteWSCollMdp() method.
	 *
	 * @return void
	 */
	public function testSeteWSCollMdp() {

		$obj = new Constantes2();

		$obj->seteWSCollMdp("eWSCollMdp");
		$this->assertEquals("eWSCollMdp", $obj->geteWSCollMdp());
	}

	/**
	 * Tests the seteWSSrvMdp() method.
	 *
	 * @return void
	 */
	public function testSeteWSSrvMdp() {

		$obj = new Constantes2();

		$obj->seteWSSrvMdp("eWSSrvMdp");
		$this->assertEquals("eWSSrvMdp", $obj->geteWSSrvMdp());
	}

	/**
	 * Tests the seteWSSrvName() method.
	 *
	 * @return void
	 */
	public function testSeteWSSrvName() {

		$obj = new Constantes2();

		$obj->seteWSSrvName("eWSSrvName");
		$this->assertEquals("eWSSrvName", $obj->geteWSSrvName());
	}

	/**
	 * Tests the seteWSSrvUtil() method.
	 *
	 * @return void
	 */
	public function testSeteWSSrvUtil() {

		$obj = new Constantes2();

		$obj->seteWSSrvUtil("eWSSrvUtil");
		$this->assertEquals("eWSSrvUtil", $obj->geteWSSrvUtil());
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
