<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier3;

/**
 * Dossier3 test.
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
        $this->assertNull($obj->getCodeIcs());
        $this->assertNull($obj->getCodeJournalRevision());
        $this->assertNull($obj->getCodeJournalTransfImmo());
        $this->assertNull($obj->getCompCliFrs());
        $this->assertNull($obj->getCompteDebutAssurance());
        $this->assertNull($obj->getCompteDebutBail());
        $this->assertNull($obj->getCompteDebutCar());
        $this->assertNull($obj->getCompteDebutSubventions());
        $this->assertNull($obj->getCompteFinAssurance());
        $this->assertNull($obj->getCompteFinBail());
        $this->assertNull($obj->getCompteFinCar());
        $this->assertNull($obj->getCompteFinSubventions());
        $this->assertNull($obj->getCompteTvacar());
        $this->assertNull($obj->getConserveMoisRb());
        $this->assertNull($obj->getControleEdition());
        $this->assertNull($obj->getControleExistEcr());
        $this->assertNull($obj->getControleRefTire());
        $this->assertNull($obj->getCptTransfImmoCommuns());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDateTransfCb());
        $this->assertNull($obj->getDateTransfCliDouteux());
        $this->assertNull($obj->getDateTransfIntCourus());
        $this->assertNull($obj->getDateTransfIntExtournes());
        $this->assertNull($obj->getDateTransfLf());
        $this->assertNull($obj->getDateTransfProvCp());
        $this->assertNull($obj->getDateTransfertEchCb());
        $this->assertNull($obj->getDateTransfertEchLf());
        $this->assertNull($obj->getDateTransfertEcheance());
        $this->assertNull($obj->getDebutCalculImmo());
        $this->assertNull($obj->getDelaiRejetEffet());
        $this->assertNull($obj->getDetailCb());
        $this->assertNull($obj->getDetailImmo());
        $this->assertNull($obj->getDotFrancCentime());
        $this->assertNull($obj->getEdi400());
        $this->assertNull($obj->getEditAnaContrepasse());
        $this->assertNull($obj->getFinCalculImmo());
        $this->assertNull($obj->getFolioRevision());
        $this->assertNull($obj->getFolioTransfImmo());
        $this->assertNull($obj->getGestionPmagClient());
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
        $this->assertNull($obj->getLettrePvautBo());
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
        $this->assertNull($obj->getNomLettrePc());
        $this->assertNull($obj->getNumChronoBo());
        $this->assertNull($obj->getNumLotCliDouteux());
        $this->assertNull($obj->getNumLotEcritTransAssurance());
        $this->assertNull($obj->getNumLotEcritTransBaux());
        $this->assertNull($obj->getNumLotEcritTransCar());
        $this->assertNull($obj->getNumLotEcritTransPeriodicite());
        $this->assertNull($obj->getNumLotEcritTransSubventions());
        $this->assertNull($obj->getNumLotEcritTransfCb());
        $this->assertNull($obj->getNumLotEcritTransfImmo());
        $this->assertNull($obj->getNumLotEcritTransfLf());
        $this->assertNull($obj->getNumLotIntCourus());
        $this->assertNull($obj->getNumLotIntExtournes());
        $this->assertNull($obj->getNumLotProvCp());
        $this->assertNull($obj->getOptionImportMvtRb());
        $this->assertNull($obj->getPeriodeRevision());
        $this->assertNull($obj->getPeriodeTransfImmo());
        $this->assertNull($obj->getPeriodiciteUtiliserLibelle());
        $this->assertNull($obj->getProchainLotLcr());
        $this->assertNull($obj->getProchainLotLettreP());
        $this->assertNull($obj->getProchainLotTraite());
        $this->assertNull($obj->getProchainNumCb());
        $this->assertNull($obj->getProchainNumImmo());
        $this->assertNull($obj->getProchainNumLf());
        $this->assertNull($obj->getProchainNumPj());
        $this->assertNull($obj->getRacineImportMvtRb());
        $this->assertNull($obj->getRebutVautCession());
        $this->assertNull($obj->getRefRemiseLcr());
        $this->assertNull($obj->getRefVirementFrn());
        $this->assertNull($obj->getRegroupFourCptEch());
        $this->assertNull($obj->getRepAss());
        $this->assertNull($obj->getRepBudget());
        $this->assertNull($obj->getRepCar());
        $this->assertNull($obj->getRepCb());
        $this->assertNull($obj->getRepCl());
        $this->assertNull($obj->getRepComptaGen());
        $this->assertNull($obj->getRepDecTva());
        $this->assertNull($obj->getRepDosRev());
        $this->assertNull($obj->getRepEs());
        $this->assertNull($obj->getRepEmprunts());
        $this->assertNull($obj->getRepImmo());
        $this->assertNull($obj->getRepLocFi());
        $this->assertNull($obj->getRepPartielle());
        $this->assertNull($obj->getRepSubv());
        $this->assertNull($obj->getRepVmp());
        $this->assertNull($obj->getRevisSoldeEnEuro());
        $this->assertNull($obj->getRevisVoirSoldeEx());
        $this->assertNull($obj->getSaisieCaisse());
        $this->assertNull($obj->getSaisieNumPiece());
        $this->assertNull($obj->getSauverPeriodicite());
        $this->assertNull($obj->getSuiviAuxClient());
        $this->assertNull($obj->getSuiviAuxFrn());
        $this->assertNull($obj->getSuiviDevises());
        $this->assertNull($obj->getTransfertImmoOk());
        $this->assertNull($obj->getTypePmagClient());
        $this->assertNull($obj->getTypeTransfertImmo());
        $this->assertNull($obj->getTypeTransfertTiers());
        $this->assertNull($obj->getTypeTransfertTiersF());
    }
}
