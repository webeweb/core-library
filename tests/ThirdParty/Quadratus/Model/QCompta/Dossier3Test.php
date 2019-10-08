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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier3;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Dossier3 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier3Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dossier3();

        $this->assertNull($obj->getAchatVenteAutomate());
        $this->assertNull($obj->getAchatVenteLocalTva());
        $this->assertNull($obj->getAchatVenteStopTva());
        $this->assertNull($obj->getBonsAPayer());
        $this->assertNull($obj->getCodeICS());
        $this->assertNull($obj->getCodeJournalRevision());
        $this->assertNull($obj->getCodeJournalTransfImmo());
        $this->assertNull($obj->getCompCliFrs());
        $this->assertNull($obj->getCompteDebutAssurance());
        $this->assertNull($obj->getCompteDebutBail());
        $this->assertNull($obj->getCompteDebutCAR());
        $this->assertNull($obj->getCompteDebutSubventions());
        $this->assertNull($obj->getCompteFinAssurance());
        $this->assertNull($obj->getCompteFinBail());
        $this->assertNull($obj->getCompteFinCAR());
        $this->assertNull($obj->getCompteFinSubventions());
        $this->assertNull($obj->getCompteTVACAR());
        $this->assertNull($obj->getConserveMoisRB());
        $this->assertNull($obj->getControleEdition());
        $this->assertNull($obj->getControleExistEcr());
        $this->assertNull($obj->getControleRefTire());
        $this->assertNull($obj->getCptTransfImmoCommuns());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDateTransfCB());
        $this->assertNull($obj->getDateTransfCliDouteux());
        $this->assertNull($obj->getDateTransfIntCourus());
        $this->assertNull($obj->getDateTransfIntExtournes());
        $this->assertNull($obj->getDateTransfLF());
        $this->assertNull($obj->getDateTransfProvCP());
        $this->assertNull($obj->getDateTransfertEchCB());
        $this->assertNull($obj->getDateTransfertEchLF());
        $this->assertNull($obj->getDateTransfertEcheance());
        $this->assertNull($obj->getDebutCalculImmo());
        $this->assertNull($obj->getDelaiRejetEffet());
        $this->assertNull($obj->getDetailCB());
        $this->assertNull($obj->getDetailImmo());
        $this->assertNull($obj->getDotFrancCentime());
        $this->assertNull($obj->getEDI400());
        $this->assertNull($obj->getEditAnaContrepasse());
        $this->assertNull($obj->getFinCalculImmo());
        $this->assertNull($obj->getFolioRevision());
        $this->assertNull($obj->getFolioTransfImmo());
        $this->assertNull($obj->getGestionPMAGClient());
        $this->assertNull($obj->getGestionTraitePapier());
        $this->assertNull($obj->getGestionVirementFrn());
        $this->assertNull($obj->getImmoDetailLignes());
        $this->assertNull($obj->getImmoDetailParCpt());
        $this->assertNull($obj->getImmoEditEnsemble());
        $this->assertNull($obj->getImmoJoursParAn());
        $this->assertNull($obj->getImmoSsTotImmo());
        $this->assertNull($obj->getImmoTotParCompte());
        $this->assertNull($obj->getImmoTransfertForfaitVersReel());
        $this->assertNull($obj->getImmoTriAnalytique());
        $this->assertNull($obj->getImmoTriParDate());
        $this->assertNull($obj->getImmoTriParService());
        $this->assertNull($obj->getImmoTypeLiasse());
        $this->assertNull($obj->getIsClientExp());
        $this->assertNull($obj->getLettrePvautBO());
        $this->assertNull($obj->getLibVariable1());
        $this->assertNull($obj->getLibVariable2());
        $this->assertNull($obj->getLibVariable3());
        $this->assertNull($obj->getMiseEnPortefeuilleBicF());
        $this->assertNull($obj->getMiseEnPortefeuilleDomF());
        $this->assertNull($obj->getMiseEnPortefeuilleIbanF());
        $this->assertNull($obj->getMiseEnPortefeuilleRibF());
        $this->assertNull($obj->getMultiEchClient());
        $this->assertNull($obj->getMultiEchFrn());
        $this->assertNull($obj->getMultiEchParCodeLibAuto());
        $this->assertNull($obj->getNePlusAfficher());
        $this->assertNull($obj->getNivTriAnalytique());
        $this->assertNull($obj->getNivTriBureau());
        $this->assertNull($obj->getNivTriFamille());
        $this->assertNull($obj->getNivTriNat());
        $this->assertNull($obj->getNivTriService());
        $this->assertNull($obj->getNivTriSite());
        $this->assertNull($obj->getNivTriZl1());
        $this->assertNull($obj->getNivTriZl2());
        $this->assertNull($obj->getNivTriZl3());
        $this->assertNull($obj->getNomLettreP());
        $this->assertNull($obj->getNomLettrePC());
        $this->assertNull($obj->getNumChronoBO());
        $this->assertNull($obj->getNumLotCliDouteux());
        $this->assertNull($obj->getNumLotEcritTransAssurance());
        $this->assertNull($obj->getNumLotEcritTransBaux());
        $this->assertNull($obj->getNumLotEcritTransCAR());
        $this->assertNull($obj->getNumLotEcritTransPeriodicite());
        $this->assertNull($obj->getNumLotEcritTransSubventions());
        $this->assertNull($obj->getNumLotEcritTransfCB());
        $this->assertNull($obj->getNumLotEcritTransfImmo());
        $this->assertNull($obj->getNumLotEcritTransfLF());
        $this->assertNull($obj->getNumLotIntCourus());
        $this->assertNull($obj->getNumLotIntExtournes());
        $this->assertNull($obj->getNumLotProvCP());
        $this->assertNull($obj->getOptionImportMvtRB());
        $this->assertNull($obj->getPeriodeRevision());
        $this->assertNull($obj->getPeriodeTransfImmo());
        $this->assertNull($obj->getPeriodiciteUtiliserLibelle());
        $this->assertNull($obj->getProchainLotLCR());
        $this->assertNull($obj->getProchainLotLettreP());
        $this->assertNull($obj->getProchainLotTraite());
        $this->assertNull($obj->getProchainNumCB());
        $this->assertNull($obj->getProchainNumImmo());
        $this->assertNull($obj->getProchainNumLF());
        $this->assertNull($obj->getProchainNumPJ());
        $this->assertNull($obj->getRacineImportMvtRB());
        $this->assertNull($obj->getRebutVautCession());
        $this->assertNull($obj->getRefRemiseLCR());
        $this->assertNull($obj->getRefVirementFrn());
        $this->assertNull($obj->getRegroupFourCptEch());
        $this->assertNull($obj->getRepAss());
        $this->assertNull($obj->getRepBudget());
        $this->assertNull($obj->getRepCAR());
        $this->assertNull($obj->getRepCB());
        $this->assertNull($obj->getRepCL());
        $this->assertNull($obj->getRepComptaGen());
        $this->assertNull($obj->getRepDecTva());
        $this->assertNull($obj->getRepDosRev());
        $this->assertNull($obj->getRepES());
        $this->assertNull($obj->getRepEmprunts());
        $this->assertNull($obj->getRepImmo());
        $this->assertNull($obj->getRepLocFi());
        $this->assertNull($obj->getRepPartielle());
        $this->assertNull($obj->getRepSubv());
        $this->assertNull($obj->getRepVMP());
        $this->assertNull($obj->getRevisSoldeEnEuro());
        $this->assertNull($obj->getRevisVoirSoldeEx());
        $this->assertNull($obj->getSaisieCaisse());
        $this->assertNull($obj->getSaisieNumPiece());
        $this->assertNull($obj->getSauverPeriodicite());
        $this->assertNull($obj->getSuiviAuxClient());
        $this->assertNull($obj->getSuiviAuxFrn());
        $this->assertNull($obj->getSuiviDevises());
        $this->assertNull($obj->getTransfertImmoOk());
        $this->assertNull($obj->getTypePMAGClient());
        $this->assertNull($obj->getTypeTransfertImmo());
        $this->assertNull($obj->getTypeTransfertTiers());
        $this->assertNull($obj->getTypeTransfertTiersF());
    }

    /**
     * Tests the setAchatVenteAutomate() method.
     *
     * @return void
     */
    public function testSetAchatVenteAutomate() {

        $obj = new Dossier3();

        $obj->setAchatVenteAutomate(true);
        $this->assertEquals(true, $obj->getAchatVenteAutomate());
    }

    /**
     * Tests the setAchatVenteLocalTva() method.
     *
     * @return void
     */
    public function testSetAchatVenteLocalTva() {

        $obj = new Dossier3();

        $obj->setAchatVenteLocalTva("achatVenteLocalTva");
        $this->assertEquals("achatVenteLocalTva", $obj->getAchatVenteLocalTva());
    }

    /**
     * Tests the setAchatVenteStopTva() method.
     *
     * @return void
     */
    public function testSetAchatVenteStopTva() {

        $obj = new Dossier3();

        $obj->setAchatVenteStopTva(true);
        $this->assertEquals(true, $obj->getAchatVenteStopTva());
    }

    /**
     * Tests the setBonsAPayer() method.
     *
     * @return void
     */
    public function testSetBonsAPayer() {

        $obj = new Dossier3();

        $obj->setBonsAPayer(true);
        $this->assertEquals(true, $obj->getBonsAPayer());
    }

    /**
     * Tests the setCodeICS() method.
     *
     * @return void
     */
    public function testSetCodeICS() {

        $obj = new Dossier3();

        $obj->setCodeICS("codeICS");
        $this->assertEquals("codeICS", $obj->getCodeICS());
    }

    /**
     * Tests the setCodeJournalRevision() method.
     *
     * @return void
     */
    public function testSetCodeJournalRevision() {

        $obj = new Dossier3();

        $obj->setCodeJournalRevision("codeJournalRevision");
        $this->assertEquals("codeJournalRevision", $obj->getCodeJournalRevision());
    }

    /**
     * Tests the setCodeJournalTransfImmo() method.
     *
     * @return void
     */
    public function testSetCodeJournalTransfImmo() {

        $obj = new Dossier3();

        $obj->setCodeJournalTransfImmo("codeJournalTransfImmo");
        $this->assertEquals("codeJournalTransfImmo", $obj->getCodeJournalTransfImmo());
    }

    /**
     * Tests the setCompCliFrs() method.
     *
     * @return void
     */
    public function testSetCompCliFrs() {

        $obj = new Dossier3();

        $obj->setCompCliFrs(true);
        $this->assertEquals(true, $obj->getCompCliFrs());
    }

    /**
     * Tests the setCompteDebutAssurance() method.
     *
     * @return void
     */
    public function testSetCompteDebutAssurance() {

        $obj = new Dossier3();

        $obj->setCompteDebutAssurance("compteDebutAssurance");
        $this->assertEquals("compteDebutAssurance", $obj->getCompteDebutAssurance());
    }

    /**
     * Tests the setCompteDebutBail() method.
     *
     * @return void
     */
    public function testSetCompteDebutBail() {

        $obj = new Dossier3();

        $obj->setCompteDebutBail("compteDebutBail");
        $this->assertEquals("compteDebutBail", $obj->getCompteDebutBail());
    }

    /**
     * Tests the setCompteDebutCAR() method.
     *
     * @return void
     */
    public function testSetCompteDebutCAR() {

        $obj = new Dossier3();

        $obj->setCompteDebutCAR("compteDebutCAR");
        $this->assertEquals("compteDebutCAR", $obj->getCompteDebutCAR());
    }

    /**
     * Tests the setCompteDebutSubventions() method.
     *
     * @return void
     */
    public function testSetCompteDebutSubventions() {

        $obj = new Dossier3();

        $obj->setCompteDebutSubventions("compteDebutSubventions");
        $this->assertEquals("compteDebutSubventions", $obj->getCompteDebutSubventions());
    }

    /**
     * Tests the setCompteFinAssurance() method.
     *
     * @return void
     */
    public function testSetCompteFinAssurance() {

        $obj = new Dossier3();

        $obj->setCompteFinAssurance("compteFinAssurance");
        $this->assertEquals("compteFinAssurance", $obj->getCompteFinAssurance());
    }

    /**
     * Tests the setCompteFinBail() method.
     *
     * @return void
     */
    public function testSetCompteFinBail() {

        $obj = new Dossier3();

        $obj->setCompteFinBail("compteFinBail");
        $this->assertEquals("compteFinBail", $obj->getCompteFinBail());
    }

    /**
     * Tests the setCompteFinCAR() method.
     *
     * @return void
     */
    public function testSetCompteFinCAR() {

        $obj = new Dossier3();

        $obj->setCompteFinCAR("compteFinCAR");
        $this->assertEquals("compteFinCAR", $obj->getCompteFinCAR());
    }

    /**
     * Tests the setCompteFinSubventions() method.
     *
     * @return void
     */
    public function testSetCompteFinSubventions() {

        $obj = new Dossier3();

        $obj->setCompteFinSubventions("compteFinSubventions");
        $this->assertEquals("compteFinSubventions", $obj->getCompteFinSubventions());
    }

    /**
     * Tests the setCompteTVACAR() method.
     *
     * @return void
     */
    public function testSetCompteTVACAR() {

        $obj = new Dossier3();

        $obj->setCompteTVACAR("compteTVACAR");
        $this->assertEquals("compteTVACAR", $obj->getCompteTVACAR());
    }

    /**
     * Tests the setConserveMoisRB() method.
     *
     * @return void
     */
    public function testSetConserveMoisRB() {

        $obj = new Dossier3();

        $obj->setConserveMoisRB(true);
        $this->assertEquals(true, $obj->getConserveMoisRB());
    }

    /**
     * Tests the setControleEdition() method.
     *
     * @return void
     */
    public function testSetControleEdition() {

        $obj = new Dossier3();

        $obj->setControleEdition(true);
        $this->assertEquals(true, $obj->getControleEdition());
    }

    /**
     * Tests the setControleExistEcr() method.
     *
     * @return void
     */
    public function testSetControleExistEcr() {

        $obj = new Dossier3();

        $obj->setControleExistEcr("controleExistEcr");
        $this->assertEquals("controleExistEcr", $obj->getControleExistEcr());
    }

    /**
     * Tests the setControleRefTire() method.
     *
     * @return void
     */
    public function testSetControleRefTire() {

        $obj = new Dossier3();

        $obj->setControleRefTire(true);
        $this->assertEquals(true, $obj->getControleRefTire());
    }

    /**
     * Tests the setCptTransfImmoCommuns() method.
     *
     * @return void
     */
    public function testSetCptTransfImmoCommuns() {

        $obj = new Dossier3();

        $obj->setCptTransfImmoCommuns(true);
        $this->assertEquals(true, $obj->getCptTransfImmoCommuns());
    }

    /**
     * Tests the setDateRevision() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRevision() {

        $obj = new Dossier3();

        $obj->setDateRevision(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRevision());
    }

    /**
     * Tests the setDateTransfCB() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfCB() {

        $obj = new Dossier3();

        $obj->setDateTransfCB(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfCB());
    }

    /**
     * Tests the setDateTransfCliDouteux() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfCliDouteux() {

        $obj = new Dossier3();

        $obj->setDateTransfCliDouteux(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfCliDouteux());
    }

    /**
     * Tests the setDateTransfIntCourus() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfIntCourus() {

        $obj = new Dossier3();

        $obj->setDateTransfIntCourus(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfIntCourus());
    }

    /**
     * Tests the setDateTransfIntExtournes() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfIntExtournes() {

        $obj = new Dossier3();

        $obj->setDateTransfIntExtournes(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfIntExtournes());
    }

    /**
     * Tests the setDateTransfLF() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfLF() {

        $obj = new Dossier3();

        $obj->setDateTransfLF(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfLF());
    }

    /**
     * Tests the setDateTransfProvCP() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfProvCP() {

        $obj = new Dossier3();

        $obj->setDateTransfProvCP(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfProvCP());
    }

    /**
     * Tests the setDateTransfertEchCB() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEchCB() {

        $obj = new Dossier3();

        $obj->setDateTransfertEchCB(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfertEchCB());
    }

    /**
     * Tests the setDateTransfertEchLF() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEchLF() {

        $obj = new Dossier3();

        $obj->setDateTransfertEchLF(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfertEchLF());
    }

    /**
     * Tests the setDateTransfertEcheance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertEcheance() {

        $obj = new Dossier3();

        $obj->setDateTransfertEcheance(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfertEcheance());
    }

    /**
     * Tests the setDebutCalculImmo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutCalculImmo() {

        $obj = new Dossier3();

        $obj->setDebutCalculImmo(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutCalculImmo());
    }

    /**
     * Tests the setDelaiRejetEffet() method.
     *
     * @return void
     */
    public function testSetDelaiRejetEffet() {

        $obj = new Dossier3();

        $obj->setDelaiRejetEffet("delaiRejetEffet");
        $this->assertEquals("delaiRejetEffet", $obj->getDelaiRejetEffet());
    }

    /**
     * Tests the setDetailCB() method.
     *
     * @return void
     */
    public function testSetDetailCB() {

        $obj = new Dossier3();

        $obj->setDetailCB(true);
        $this->assertEquals(true, $obj->getDetailCB());
    }

    /**
     * Tests the setDetailImmo() method.
     *
     * @return void
     */
    public function testSetDetailImmo() {

        $obj = new Dossier3();

        $obj->setDetailImmo(true);
        $this->assertEquals(true, $obj->getDetailImmo());
    }

    /**
     * Tests the setDotFrancCentime() method.
     *
     * @return void
     */
    public function testSetDotFrancCentime() {

        $obj = new Dossier3();

        $obj->setDotFrancCentime("dotFrancCentime");
        $this->assertEquals("dotFrancCentime", $obj->getDotFrancCentime());
    }

    /**
     * Tests the setEDI400() method.
     *
     * @return void
     */
    public function testSetEDI400() {

        $obj = new Dossier3();

        $obj->setEDI400(true);
        $this->assertEquals(true, $obj->getEDI400());
    }

    /**
     * Tests the setEditAnaContrepasse() method.
     *
     * @return void
     */
    public function testSetEditAnaContrepasse() {

        $obj = new Dossier3();

        $obj->setEditAnaContrepasse(true);
        $this->assertEquals(true, $obj->getEditAnaContrepasse());
    }

    /**
     * Tests the setFinCalculImmo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinCalculImmo() {

        $obj = new Dossier3();

        $obj->setFinCalculImmo(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinCalculImmo());
    }

    /**
     * Tests the setFolioRevision() method.
     *
     * @return void
     */
    public function testSetFolioRevision() {

        $obj = new Dossier3();

        $obj->setFolioRevision(10);
        $this->assertEquals(10, $obj->getFolioRevision());
    }

    /**
     * Tests the setFolioTransfImmo() method.
     *
     * @return void
     */
    public function testSetFolioTransfImmo() {

        $obj = new Dossier3();

        $obj->setFolioTransfImmo(10);
        $this->assertEquals(10, $obj->getFolioTransfImmo());
    }

    /**
     * Tests the setGestionPMAGClient() method.
     *
     * @return void
     */
    public function testSetGestionPMAGClient() {

        $obj = new Dossier3();

        $obj->setGestionPMAGClient(true);
        $this->assertEquals(true, $obj->getGestionPMAGClient());
    }

    /**
     * Tests the setGestionTraitePapier() method.
     *
     * @return void
     */
    public function testSetGestionTraitePapier() {

        $obj = new Dossier3();

        $obj->setGestionTraitePapier(true);
        $this->assertEquals(true, $obj->getGestionTraitePapier());
    }

    /**
     * Tests the setGestionVirementFrn() method.
     *
     * @return void
     */
    public function testSetGestionVirementFrn() {

        $obj = new Dossier3();

        $obj->setGestionVirementFrn(true);
        $this->assertEquals(true, $obj->getGestionVirementFrn());
    }

    /**
     * Tests the setImmoDetailLignes() method.
     *
     * @return void
     */
    public function testSetImmoDetailLignes() {

        $obj = new Dossier3();

        $obj->setImmoDetailLignes(true);
        $this->assertEquals(true, $obj->getImmoDetailLignes());
    }

    /**
     * Tests the setImmoDetailParCpt() method.
     *
     * @return void
     */
    public function testSetImmoDetailParCpt() {

        $obj = new Dossier3();

        $obj->setImmoDetailParCpt(true);
        $this->assertEquals(true, $obj->getImmoDetailParCpt());
    }

    /**
     * Tests the setImmoEditEnsemble() method.
     *
     * @return void
     */
    public function testSetImmoEditEnsemble() {

        $obj = new Dossier3();

        $obj->setImmoEditEnsemble(true);
        $this->assertEquals(true, $obj->getImmoEditEnsemble());
    }

    /**
     * Tests the setImmoJoursParAn() method.
     *
     * @return void
     */
    public function testSetImmoJoursParAn() {

        $obj = new Dossier3();

        $obj->setImmoJoursParAn(10);
        $this->assertEquals(10, $obj->getImmoJoursParAn());
    }

    /**
     * Tests the setImmoSsTotImmo() method.
     *
     * @return void
     */
    public function testSetImmoSsTotImmo() {

        $obj = new Dossier3();

        $obj->setImmoSsTotImmo(true);
        $this->assertEquals(true, $obj->getImmoSsTotImmo());
    }

    /**
     * Tests the setImmoTotParCompte() method.
     *
     * @return void
     */
    public function testSetImmoTotParCompte() {

        $obj = new Dossier3();

        $obj->setImmoTotParCompte(true);
        $this->assertEquals(true, $obj->getImmoTotParCompte());
    }

    /**
     * Tests the setImmoTransfertForfaitVersReel() method.
     *
     * @return void
     */
    public function testSetImmoTransfertForfaitVersReel() {

        $obj = new Dossier3();

        $obj->setImmoTransfertForfaitVersReel(true);
        $this->assertEquals(true, $obj->getImmoTransfertForfaitVersReel());
    }

    /**
     * Tests the setImmoTriAnalytique() method.
     *
     * @return void
     */
    public function testSetImmoTriAnalytique() {

        $obj = new Dossier3();

        $obj->setImmoTriAnalytique(true);
        $this->assertEquals(true, $obj->getImmoTriAnalytique());
    }

    /**
     * Tests the setImmoTriParDate() method.
     *
     * @return void
     */
    public function testSetImmoTriParDate() {

        $obj = new Dossier3();

        $obj->setImmoTriParDate(true);
        $this->assertEquals(true, $obj->getImmoTriParDate());
    }

    /**
     * Tests the setImmoTriParService() method.
     *
     * @return void
     */
    public function testSetImmoTriParService() {

        $obj = new Dossier3();

        $obj->setImmoTriParService(true);
        $this->assertEquals(true, $obj->getImmoTriParService());
    }

    /**
     * Tests the setImmoTypeLiasse() method.
     *
     * @return void
     */
    public function testSetImmoTypeLiasse() {

        $obj = new Dossier3();

        $obj->setImmoTypeLiasse("immoTypeLiasse");
        $this->assertEquals("immoTypeLiasse", $obj->getImmoTypeLiasse());
    }

    /**
     * Tests the setIsClientExp() method.
     *
     * @return void
     */
    public function testSetIsClientExp() {

        $obj = new Dossier3();

        $obj->setIsClientExp(true);
        $this->assertEquals(true, $obj->getIsClientExp());
    }

    /**
     * Tests the setLettrePvautBO() method.
     *
     * @return void
     */
    public function testSetLettrePvautBO() {

        $obj = new Dossier3();

        $obj->setLettrePvautBO(true);
        $this->assertEquals(true, $obj->getLettrePvautBO());
    }

    /**
     * Tests the setLibVariable1() method.
     *
     * @return void
     */
    public function testSetLibVariable1() {

        $obj = new Dossier3();

        $obj->setLibVariable1("libVariable1");
        $this->assertEquals("libVariable1", $obj->getLibVariable1());
    }

    /**
     * Tests the setLibVariable2() method.
     *
     * @return void
     */
    public function testSetLibVariable2() {

        $obj = new Dossier3();

        $obj->setLibVariable2("libVariable2");
        $this->assertEquals("libVariable2", $obj->getLibVariable2());
    }

    /**
     * Tests the setLibVariable3() method.
     *
     * @return void
     */
    public function testSetLibVariable3() {

        $obj = new Dossier3();

        $obj->setLibVariable3("libVariable3");
        $this->assertEquals("libVariable3", $obj->getLibVariable3());
    }

    /**
     * Tests the setMiseEnPortefeuilleBicF() method.
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleBicF() {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleBicF("miseEnPortefeuilleBicF");
        $this->assertEquals("miseEnPortefeuilleBicF", $obj->getMiseEnPortefeuilleBicF());
    }

    /**
     * Tests the setMiseEnPortefeuilleDomF() method.
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleDomF() {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleDomF("miseEnPortefeuilleDomF");
        $this->assertEquals("miseEnPortefeuilleDomF", $obj->getMiseEnPortefeuilleDomF());
    }

    /**
     * Tests the setMiseEnPortefeuilleIbanF() method.
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleIbanF() {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleIbanF("miseEnPortefeuilleIbanF");
        $this->assertEquals("miseEnPortefeuilleIbanF", $obj->getMiseEnPortefeuilleIbanF());
    }

    /**
     * Tests the setMiseEnPortefeuilleRibF() method.
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleRibF() {

        $obj = new Dossier3();

        $obj->setMiseEnPortefeuilleRibF("miseEnPortefeuilleRibF");
        $this->assertEquals("miseEnPortefeuilleRibF", $obj->getMiseEnPortefeuilleRibF());
    }

    /**
     * Tests the setMultiEchClient() method.
     *
     * @return void
     */
    public function testSetMultiEchClient() {

        $obj = new Dossier3();

        $obj->setMultiEchClient(true);
        $this->assertEquals(true, $obj->getMultiEchClient());
    }

    /**
     * Tests the setMultiEchFrn() method.
     *
     * @return void
     */
    public function testSetMultiEchFrn() {

        $obj = new Dossier3();

        $obj->setMultiEchFrn(true);
        $this->assertEquals(true, $obj->getMultiEchFrn());
    }

    /**
     * Tests the setMultiEchParCodeLibAuto() method.
     *
     * @return void
     */
    public function testSetMultiEchParCodeLibAuto() {

        $obj = new Dossier3();

        $obj->setMultiEchParCodeLibAuto(true);
        $this->assertEquals(true, $obj->getMultiEchParCodeLibAuto());
    }

    /**
     * Tests the setNePlusAfficher() method.
     *
     * @return void
     */
    public function testSetNePlusAfficher() {

        $obj = new Dossier3();

        $obj->setNePlusAfficher(true);
        $this->assertEquals(true, $obj->getNePlusAfficher());
    }

    /**
     * Tests the setNivTriAnalytique() method.
     *
     * @return void
     */
    public function testSetNivTriAnalytique() {

        $obj = new Dossier3();

        $obj->setNivTriAnalytique("nivTriAnalytique");
        $this->assertEquals("nivTriAnalytique", $obj->getNivTriAnalytique());
    }

    /**
     * Tests the setNivTriBureau() method.
     *
     * @return void
     */
    public function testSetNivTriBureau() {

        $obj = new Dossier3();

        $obj->setNivTriBureau("nivTriBureau");
        $this->assertEquals("nivTriBureau", $obj->getNivTriBureau());
    }

    /**
     * Tests the setNivTriFamille() method.
     *
     * @return void
     */
    public function testSetNivTriFamille() {

        $obj = new Dossier3();

        $obj->setNivTriFamille("nivTriFamille");
        $this->assertEquals("nivTriFamille", $obj->getNivTriFamille());
    }

    /**
     * Tests the setNivTriNat() method.
     *
     * @return void
     */
    public function testSetNivTriNat() {

        $obj = new Dossier3();

        $obj->setNivTriNat("nivTriNat");
        $this->assertEquals("nivTriNat", $obj->getNivTriNat());
    }

    /**
     * Tests the setNivTriService() method.
     *
     * @return void
     */
    public function testSetNivTriService() {

        $obj = new Dossier3();

        $obj->setNivTriService("nivTriService");
        $this->assertEquals("nivTriService", $obj->getNivTriService());
    }

    /**
     * Tests the setNivTriSite() method.
     *
     * @return void
     */
    public function testSetNivTriSite() {

        $obj = new Dossier3();

        $obj->setNivTriSite("nivTriSite");
        $this->assertEquals("nivTriSite", $obj->getNivTriSite());
    }

    /**
     * Tests the setNivTriZl1() method.
     *
     * @return void
     */
    public function testSetNivTriZl1() {

        $obj = new Dossier3();

        $obj->setNivTriZl1("nivTriZl1");
        $this->assertEquals("nivTriZl1", $obj->getNivTriZl1());
    }

    /**
     * Tests the setNivTriZl2() method.
     *
     * @return void
     */
    public function testSetNivTriZl2() {

        $obj = new Dossier3();

        $obj->setNivTriZl2("nivTriZl2");
        $this->assertEquals("nivTriZl2", $obj->getNivTriZl2());
    }

    /**
     * Tests the setNivTriZl3() method.
     *
     * @return void
     */
    public function testSetNivTriZl3() {

        $obj = new Dossier3();

        $obj->setNivTriZl3("nivTriZl3");
        $this->assertEquals("nivTriZl3", $obj->getNivTriZl3());
    }

    /**
     * Tests the setNomLettreP() method.
     *
     * @return void
     */
    public function testSetNomLettreP() {

        $obj = new Dossier3();

        $obj->setNomLettreP("nomLettreP");
        $this->assertEquals("nomLettreP", $obj->getNomLettreP());
    }

    /**
     * Tests the setNomLettrePC() method.
     *
     * @return void
     */
    public function testSetNomLettrePC() {

        $obj = new Dossier3();

        $obj->setNomLettrePC("nomLettrePC");
        $this->assertEquals("nomLettrePC", $obj->getNomLettrePC());
    }

    /**
     * Tests the setNumChronoBO() method.
     *
     * @return void
     */
    public function testSetNumChronoBO() {

        $obj = new Dossier3();

        $obj->setNumChronoBO(10);
        $this->assertEquals(10, $obj->getNumChronoBO());
    }

    /**
     * Tests the setNumLotCliDouteux() method.
     *
     * @return void
     */
    public function testSetNumLotCliDouteux() {

        $obj = new Dossier3();

        $obj->setNumLotCliDouteux(10);
        $this->assertEquals(10, $obj->getNumLotCliDouteux());
    }

    /**
     * Tests the setNumLotEcritTransAssurance() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransAssurance() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransAssurance(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransAssurance());
    }

    /**
     * Tests the setNumLotEcritTransBaux() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransBaux() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransBaux(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransBaux());
    }

    /**
     * Tests the setNumLotEcritTransCAR() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransCAR() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransCAR(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransCAR());
    }

    /**
     * Tests the setNumLotEcritTransPeriodicite() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransPeriodicite() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransPeriodicite(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransPeriodicite());
    }

    /**
     * Tests the setNumLotEcritTransSubventions() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransSubventions() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransSubventions(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransSubventions());
    }

    /**
     * Tests the setNumLotEcritTransfCB() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransfCB() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfCB(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfCB());
    }

    /**
     * Tests the setNumLotEcritTransfImmo() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransfImmo() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfImmo(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfImmo());
    }

    /**
     * Tests the setNumLotEcritTransfLF() method.
     *
     * @return void
     */
    public function testSetNumLotEcritTransfLF() {

        $obj = new Dossier3();

        $obj->setNumLotEcritTransfLF(10);
        $this->assertEquals(10, $obj->getNumLotEcritTransfLF());
    }

    /**
     * Tests the setNumLotIntCourus() method.
     *
     * @return void
     */
    public function testSetNumLotIntCourus() {

        $obj = new Dossier3();

        $obj->setNumLotIntCourus(10);
        $this->assertEquals(10, $obj->getNumLotIntCourus());
    }

    /**
     * Tests the setNumLotIntExtournes() method.
     *
     * @return void
     */
    public function testSetNumLotIntExtournes() {

        $obj = new Dossier3();

        $obj->setNumLotIntExtournes(10);
        $this->assertEquals(10, $obj->getNumLotIntExtournes());
    }

    /**
     * Tests the setNumLotProvCP() method.
     *
     * @return void
     */
    public function testSetNumLotProvCP() {

        $obj = new Dossier3();

        $obj->setNumLotProvCP(10);
        $this->assertEquals(10, $obj->getNumLotProvCP());
    }

    /**
     * Tests the setOptionImportMvtRB() method.
     *
     * @return void
     */
    public function testSetOptionImportMvtRB() {

        $obj = new Dossier3();

        $obj->setOptionImportMvtRB("optionImportMvtRB");
        $this->assertEquals("optionImportMvtRB", $obj->getOptionImportMvtRB());
    }

    /**
     * Tests the setPeriodeRevision() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRevision() {

        $obj = new Dossier3();

        $obj->setPeriodeRevision(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeRevision());
    }

    /**
     * Tests the setPeriodeTransfImmo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfImmo() {

        $obj = new Dossier3();

        $obj->setPeriodeTransfImmo(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeTransfImmo());
    }

    /**
     * Tests the setPeriodiciteUtiliserLibelle() method.
     *
     * @return void
     */
    public function testSetPeriodiciteUtiliserLibelle() {

        $obj = new Dossier3();

        $obj->setPeriodiciteUtiliserLibelle(10);
        $this->assertEquals(10, $obj->getPeriodiciteUtiliserLibelle());
    }

    /**
     * Tests the setProchainLotLCR() method.
     *
     * @return void
     */
    public function testSetProchainLotLCR() {

        $obj = new Dossier3();

        $obj->setProchainLotLCR(10);
        $this->assertEquals(10, $obj->getProchainLotLCR());
    }

    /**
     * Tests the setProchainLotLettreP() method.
     *
     * @return void
     */
    public function testSetProchainLotLettreP() {

        $obj = new Dossier3();

        $obj->setProchainLotLettreP(10);
        $this->assertEquals(10, $obj->getProchainLotLettreP());
    }

    /**
     * Tests the setProchainLotTraite() method.
     *
     * @return void
     */
    public function testSetProchainLotTraite() {

        $obj = new Dossier3();

        $obj->setProchainLotTraite(10);
        $this->assertEquals(10, $obj->getProchainLotTraite());
    }

    /**
     * Tests the setProchainNumCB() method.
     *
     * @return void
     */
    public function testSetProchainNumCB() {

        $obj = new Dossier3();

        $obj->setProchainNumCB(10);
        $this->assertEquals(10, $obj->getProchainNumCB());
    }

    /**
     * Tests the setProchainNumImmo() method.
     *
     * @return void
     */
    public function testSetProchainNumImmo() {

        $obj = new Dossier3();

        $obj->setProchainNumImmo(10);
        $this->assertEquals(10, $obj->getProchainNumImmo());
    }

    /**
     * Tests the setProchainNumLF() method.
     *
     * @return void
     */
    public function testSetProchainNumLF() {

        $obj = new Dossier3();

        $obj->setProchainNumLF(10);
        $this->assertEquals(10, $obj->getProchainNumLF());
    }

    /**
     * Tests the setProchainNumPJ() method.
     *
     * @return void
     */
    public function testSetProchainNumPJ() {

        $obj = new Dossier3();

        $obj->setProchainNumPJ(10);
        $this->assertEquals(10, $obj->getProchainNumPJ());
    }

    /**
     * Tests the setRacineImportMvtRB() method.
     *
     * @return void
     */
    public function testSetRacineImportMvtRB() {

        $obj = new Dossier3();

        $obj->setRacineImportMvtRB("racineImportMvtRB");
        $this->assertEquals("racineImportMvtRB", $obj->getRacineImportMvtRB());
    }

    /**
     * Tests the setRebutVautCession() method.
     *
     * @return void
     */
    public function testSetRebutVautCession() {

        $obj = new Dossier3();

        $obj->setRebutVautCession(true);
        $this->assertEquals(true, $obj->getRebutVautCession());
    }

    /**
     * Tests the setRefRemiseLCR() method.
     *
     * @return void
     */
    public function testSetRefRemiseLCR() {

        $obj = new Dossier3();

        $obj->setRefRemiseLCR(10);
        $this->assertEquals(10, $obj->getRefRemiseLCR());
    }

    /**
     * Tests the setRefVirementFrn() method.
     *
     * @return void
     */
    public function testSetRefVirementFrn() {

        $obj = new Dossier3();

        $obj->setRefVirementFrn(10);
        $this->assertEquals(10, $obj->getRefVirementFrn());
    }

    /**
     * Tests the setRegroupFourCptEch() method.
     *
     * @return void
     */
    public function testSetRegroupFourCptEch() {

        $obj = new Dossier3();

        $obj->setRegroupFourCptEch(true);
        $this->assertEquals(true, $obj->getRegroupFourCptEch());
    }

    /**
     * Tests the setRepAss() method.
     *
     * @return void
     */
    public function testSetRepAss() {

        $obj = new Dossier3();

        $obj->setRepAss(true);
        $this->assertEquals(true, $obj->getRepAss());
    }

    /**
     * Tests the setRepBudget() method.
     *
     * @return void
     */
    public function testSetRepBudget() {

        $obj = new Dossier3();

        $obj->setRepBudget(true);
        $this->assertEquals(true, $obj->getRepBudget());
    }

    /**
     * Tests the setRepCAR() method.
     *
     * @return void
     */
    public function testSetRepCAR() {

        $obj = new Dossier3();

        $obj->setRepCAR(true);
        $this->assertEquals(true, $obj->getRepCAR());
    }

    /**
     * Tests the setRepCB() method.
     *
     * @return void
     */
    public function testSetRepCB() {

        $obj = new Dossier3();

        $obj->setRepCB(true);
        $this->assertEquals(true, $obj->getRepCB());
    }

    /**
     * Tests the setRepCL() method.
     *
     * @return void
     */
    public function testSetRepCL() {

        $obj = new Dossier3();

        $obj->setRepCL(true);
        $this->assertEquals(true, $obj->getRepCL());
    }

    /**
     * Tests the setRepComptaGen() method.
     *
     * @return void
     */
    public function testSetRepComptaGen() {

        $obj = new Dossier3();

        $obj->setRepComptaGen(true);
        $this->assertEquals(true, $obj->getRepComptaGen());
    }

    /**
     * Tests the setRepDecTva() method.
     *
     * @return void
     */
    public function testSetRepDecTva() {

        $obj = new Dossier3();

        $obj->setRepDecTva(true);
        $this->assertEquals(true, $obj->getRepDecTva());
    }

    /**
     * Tests the setRepDosRev() method.
     *
     * @return void
     */
    public function testSetRepDosRev() {

        $obj = new Dossier3();

        $obj->setRepDosRev(true);
        $this->assertEquals(true, $obj->getRepDosRev());
    }

    /**
     * Tests the setRepES() method.
     *
     * @return void
     */
    public function testSetRepES() {

        $obj = new Dossier3();

        $obj->setRepES(true);
        $this->assertEquals(true, $obj->getRepES());
    }

    /**
     * Tests the setRepEmprunts() method.
     *
     * @return void
     */
    public function testSetRepEmprunts() {

        $obj = new Dossier3();

        $obj->setRepEmprunts(true);
        $this->assertEquals(true, $obj->getRepEmprunts());
    }

    /**
     * Tests the setRepImmo() method.
     *
     * @return void
     */
    public function testSetRepImmo() {

        $obj = new Dossier3();

        $obj->setRepImmo(true);
        $this->assertEquals(true, $obj->getRepImmo());
    }

    /**
     * Tests the setRepLocFi() method.
     *
     * @return void
     */
    public function testSetRepLocFi() {

        $obj = new Dossier3();

        $obj->setRepLocFi(true);
        $this->assertEquals(true, $obj->getRepLocFi());
    }

    /**
     * Tests the setRepPartielle() method.
     *
     * @return void
     */
    public function testSetRepPartielle() {

        $obj = new Dossier3();

        $obj->setRepPartielle(true);
        $this->assertEquals(true, $obj->getRepPartielle());
    }

    /**
     * Tests the setRepSubv() method.
     *
     * @return void
     */
    public function testSetRepSubv() {

        $obj = new Dossier3();

        $obj->setRepSubv(true);
        $this->assertEquals(true, $obj->getRepSubv());
    }

    /**
     * Tests the setRepVMP() method.
     *
     * @return void
     */
    public function testSetRepVMP() {

        $obj = new Dossier3();

        $obj->setRepVMP(true);
        $this->assertEquals(true, $obj->getRepVMP());
    }

    /**
     * Tests the setRevisSoldeEnEuro() method.
     *
     * @return void
     */
    public function testSetRevisSoldeEnEuro() {

        $obj = new Dossier3();

        $obj->setRevisSoldeEnEuro(true);
        $this->assertEquals(true, $obj->getRevisSoldeEnEuro());
    }

    /**
     * Tests the setRevisVoirSoldeEx() method.
     *
     * @return void
     */
    public function testSetRevisVoirSoldeEx() {

        $obj = new Dossier3();

        $obj->setRevisVoirSoldeEx(true);
        $this->assertEquals(true, $obj->getRevisVoirSoldeEx());
    }

    /**
     * Tests the setSaisieCaisse() method.
     *
     * @return void
     */
    public function testSetSaisieCaisse() {

        $obj = new Dossier3();

        $obj->setSaisieCaisse(true);
        $this->assertEquals(true, $obj->getSaisieCaisse());
    }

    /**
     * Tests the setSaisieNumPiece() method.
     *
     * @return void
     */
    public function testSetSaisieNumPiece() {

        $obj = new Dossier3();

        $obj->setSaisieNumPiece("saisieNumPiece");
        $this->assertEquals("saisieNumPiece", $obj->getSaisieNumPiece());
    }

    /**
     * Tests the setSauverPeriodicite() method.
     *
     * @return void
     */
    public function testSetSauverPeriodicite() {

        $obj = new Dossier3();

        $obj->setSauverPeriodicite(true);
        $this->assertEquals(true, $obj->getSauverPeriodicite());
    }

    /**
     * Tests the setSuiviAuxClient() method.
     *
     * @return void
     */
    public function testSetSuiviAuxClient() {

        $obj = new Dossier3();

        $obj->setSuiviAuxClient(true);
        $this->assertEquals(true, $obj->getSuiviAuxClient());
    }

    /**
     * Tests the setSuiviAuxFrn() method.
     *
     * @return void
     */
    public function testSetSuiviAuxFrn() {

        $obj = new Dossier3();

        $obj->setSuiviAuxFrn(true);
        $this->assertEquals(true, $obj->getSuiviAuxFrn());
    }

    /**
     * Tests the setSuiviDevises() method.
     *
     * @return void
     */
    public function testSetSuiviDevises() {

        $obj = new Dossier3();

        $obj->setSuiviDevises(true);
        $this->assertEquals(true, $obj->getSuiviDevises());
    }

    /**
     * Tests the setTransfertImmoOk() method.
     *
     * @return void
     */
    public function testSetTransfertImmoOk() {

        $obj = new Dossier3();

        $obj->setTransfertImmoOk(true);
        $this->assertEquals(true, $obj->getTransfertImmoOk());
    }

    /**
     * Tests the setTypePMAGClient() method.
     *
     * @return void
     */
    public function testSetTypePMAGClient() {

        $obj = new Dossier3();

        $obj->setTypePMAGClient(10);
        $this->assertEquals(10, $obj->getTypePMAGClient());
    }

    /**
     * Tests the setTypeTransfertImmo() method.
     *
     * @return void
     */
    public function testSetTypeTransfertImmo() {

        $obj = new Dossier3();

        $obj->setTypeTransfertImmo("typeTransfertImmo");
        $this->assertEquals("typeTransfertImmo", $obj->getTypeTransfertImmo());
    }

    /**
     * Tests the setTypeTransfertTiers() method.
     *
     * @return void
     */
    public function testSetTypeTransfertTiers() {

        $obj = new Dossier3();

        $obj->setTypeTransfertTiers("typeTransfertTiers");
        $this->assertEquals("typeTransfertTiers", $obj->getTypeTransfertTiers());
    }

    /**
     * Tests the setTypeTransfertTiersF() method.
     *
     * @return void
     */
    public function testSetTypeTransfertTiersF() {

        $obj = new Dossier3();

        $obj->setTypeTransfertTiersF("typeTransfertTiersF");
        $this->assertEquals("typeTransfertTiersF", $obj->getTypeTransfertTiersF());
    }
}
