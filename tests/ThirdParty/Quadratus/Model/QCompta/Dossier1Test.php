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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier1;

/**
 * Dossier1 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier1Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dossier1();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCalculAnaFait());
        $this->assertNull($obj->getCheminImplantationAscii());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCleAcces1());
        $this->assertNull($obj->getCleAcces10());
        $this->assertNull($obj->getCleAcces2());
        $this->assertNull($obj->getCleAcces3());
        $this->assertNull($obj->getCleAcces4());
        $this->assertNull($obj->getCleAcces5());
        $this->assertNull($obj->getCleAcces6());
        $this->assertNull($obj->getCleAcces7());
        $this->assertNull($obj->getCleAcces8());
        $this->assertNull($obj->getCleAcces9());
        $this->assertNull($obj->getCleDeblocageJournaux());
        $this->assertNull($obj->getClePortable());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCopieBackup());
        $this->assertNull($obj->getCptDebSuiviClasse0());
        $this->assertNull($obj->getCptDebSuiviClasse1());
        $this->assertNull($obj->getCptDebSuiviClasse2());
        $this->assertNull($obj->getCptDebSuiviClasse3());
        $this->assertNull($obj->getCptDebSuiviClasse4());
        $this->assertNull($obj->getCptDebSuiviClasse5());
        $this->assertNull($obj->getCptDebSuiviClasse8());
        $this->assertNull($obj->getCptDebSuiviClasse9());
        $this->assertNull($obj->getCptFinSuiviClasse0());
        $this->assertNull($obj->getCptFinSuiviClasse1());
        $this->assertNull($obj->getCptFinSuiviClasse2());
        $this->assertNull($obj->getCptFinSuiviClasse3());
        $this->assertNull($obj->getCptFinSuiviClasse4());
        $this->assertNull($obj->getCptFinSuiviClasse5());
        $this->assertNull($obj->getCptFinSuiviClasse8());
        $this->assertNull($obj->getCptFinSuiviClasse9());
        $this->assertNull($obj->getCreateurDossier());
        $this->assertNull($obj->getDlu());
        $this->assertNull($obj->getDateLimiteSaisie());
        $this->assertNull($obj->getDateSysChangtEx());
        $this->assertNull($obj->getDateSysCloturePeriode());
        $this->assertNull($obj->getDateSysCreation());
        $this->assertNull($obj->getDateTravail());
        $this->assertNull($obj->getDebutExercice());
        $this->assertNull($obj->getDebutExercice1());
        $this->assertNull($obj->getDelaiLimiteSaisie());
        $this->assertNull($obj->getDroitCreationTypeCpt1());
        $this->assertNull($obj->getDroitCreationTypeCpt10());
        $this->assertNull($obj->getDroitCreationTypeCpt2());
        $this->assertNull($obj->getDroitCreationTypeCpt3());
        $this->assertNull($obj->getDroitCreationTypeCpt4());
        $this->assertNull($obj->getDroitCreationTypeCpt5());
        $this->assertNull($obj->getDroitCreationTypeCpt6());
        $this->assertNull($obj->getDroitCreationTypeCpt7());
        $this->assertNull($obj->getDroitCreationTypeCpt8());
        $this->assertNull($obj->getDroitCreationTypeCpt9());
        $this->assertNull($obj->getDureeExercice());
        $this->assertNull($obj->getDureeExercice1());
        $this->assertNull($obj->getEditDateSysteme());
        $this->assertNull($obj->getEditPageGarde());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getEuroOuFranc());
        $this->assertNull($obj->getFamille1());
        $this->assertNull($obj->getFamille10());
        $this->assertNull($obj->getFamille2());
        $this->assertNull($obj->getFamille3());
        $this->assertNull($obj->getFamille4());
        $this->assertNull($obj->getFamille5());
        $this->assertNull($obj->getFamille6());
        $this->assertNull($obj->getFamille7());
        $this->assertNull($obj->getFamille8());
        $this->assertNull($obj->getFamille9());
        $this->assertNull($obj->getFamilleAnalytique());
        $this->assertNull($obj->getFinExercice());
        $this->assertNull($obj->getFinExercice1());
        $this->assertNull($obj->getGestionComptaEco());
        $this->assertNull($obj->getGroupeAppClients());
        $this->assertNull($obj->getLrActive());
        $this->assertNull($obj->getLrPeriode());
        $this->assertNull($obj->getModuleAgrActif());
        $this->assertNull($obj->getMultiDossiers());
        $this->assertNull($obj->getNatureMenu1());
        $this->assertNull($obj->getNatureMenu10());
        $this->assertNull($obj->getNatureMenu2());
        $this->assertNull($obj->getNatureMenu3());
        $this->assertNull($obj->getNatureMenu4());
        $this->assertNull($obj->getNatureMenu5());
        $this->assertNull($obj->getNatureMenu6());
        $this->assertNull($obj->getNatureMenu7());
        $this->assertNull($obj->getNatureMenu8());
        $this->assertNull($obj->getNatureMenu9());
        $this->assertNull($obj->getNatureRegle1());
        $this->assertNull($obj->getNatureRegle10());
        $this->assertNull($obj->getNatureRegle2());
        $this->assertNull($obj->getNatureRegle3());
        $this->assertNull($obj->getNatureRegle4());
        $this->assertNull($obj->getNatureRegle5());
        $this->assertNull($obj->getNatureRegle6());
        $this->assertNull($obj->getNatureRegle7());
        $this->assertNull($obj->getNatureRegle8());
        $this->assertNull($obj->getNatureRegle9());
        $this->assertNull($obj->getNiveauAnalytique());
        $this->assertNull($obj->getNiveauDroit1());
        $this->assertNull($obj->getNiveauDroit10());
        $this->assertNull($obj->getNiveauDroit2());
        $this->assertNull($obj->getNiveauDroit3());
        $this->assertNull($obj->getNiveauDroit4());
        $this->assertNull($obj->getNiveauDroit5());
        $this->assertNull($obj->getNiveauDroit6());
        $this->assertNull($obj->getNiveauDroit7());
        $this->assertNull($obj->getNiveauDroit8());
        $this->assertNull($obj->getNiveauDroit9());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getPasEcritureRb());
        $this->assertNull($obj->getPasModifRibRegl());
        $this->assertNull($obj->getPeriodeCloturee());
        $this->assertNull($obj->getPeriodeValidee());
        $this->assertNull($obj->getProchainNumPiece());
        $this->assertNull($obj->getRc());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getSaisieImmoEnEcriture());
        $this->assertNull($obj->getSauveCommun());
        $this->assertNull($obj->getSauveCompresse());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSuiviAffTout());
        $this->assertNull($obj->getSuiviAna2());
        $this->assertNull($obj->getSuiviAnaClasse0());
        $this->assertNull($obj->getSuiviAnaClasse1());
        $this->assertNull($obj->getSuiviAnaClasse2());
        $this->assertNull($obj->getSuiviAnaClasse3());
        $this->assertNull($obj->getSuiviAnaClasse4());
        $this->assertNull($obj->getSuiviAnaClasse5());
        $this->assertNull($obj->getSuiviAnaClasse8());
        $this->assertNull($obj->getSuiviAnaClasse9());
        $this->assertNull($obj->getSuiviAnaFacultatif());
        $this->assertNull($obj->getTvaCle());
        $this->assertNull($obj->getTvaCodeDossier());
        $this->assertNull($obj->getTvaCodeRecette());
        $this->assertNull($obj->getVentilationsCommunes());
    }
}
