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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier2;

/**
 * Dossier2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dossier2();

        $this->assertNull($obj->getAnneeRecolte());
        $this->assertNull($obj->getAppliquerRegroupement());
        $this->assertNull($obj->getCcaMemo());
        $this->assertNull($obj->getClasse4ClientDebut());
        $this->assertNull($obj->getClasse4ClientFin());
        $this->assertNull($obj->getClasse4FrnDebut());
        $this->assertNull($obj->getClasse4FrnFin());
        $this->assertNull($obj->getCodifClasse0());
        $this->assertNull($obj->getCodifClasse0Seule());
        $this->assertNull($obj->getCodifClasse9());
        $this->assertNull($obj->getCodifClasse9Seule());
        $this->assertNull($obj->getCollectifClientDebut());
        $this->assertNull($obj->getCollectifClientDefaut());
        $this->assertNull($obj->getCollectifClientFin());
        $this->assertNull($obj->getCollectifFrnDebut());
        $this->assertNull($obj->getCollectifFrnDefaut());
        $this->assertNull($obj->getCollectifFrnFin());
        $this->assertNull($obj->getCollectifSocDebut());
        $this->assertNull($obj->getCollectifSocFin());
        $this->assertNull($obj->getCombiLettrageAuto());
        $this->assertNull($obj->getCommentaireDossier());
        $this->assertNull($obj->getControlSalaireCptEx());
        $this->assertNull($obj->getControlSalaireObs());
        $this->assertNull($obj->getDads1LivrePaie());
        $this->assertNull($obj->getDads1Paie());
        $this->assertNull($obj->getDads1RemuMoins());
        $this->assertNull($obj->getDads1RemuPlus());
        $this->assertNull($obj->getDsCodeCollab());
        $this->assertNull($obj->getDsDateRetour());
        $this->assertNull($obj->getDsDateSortie());
        $this->assertNull($obj->getDateCalculProvCp());
        $this->assertNull($obj->getDatePublication());
        $this->assertNull($obj->getDateRazEcritures());
        $this->assertNull($obj->getDernierCompteClient());
        $this->assertNull($obj->getDernierCompteFrn());
        $this->assertNull($obj->getDiffLettrageCodeJournal());
        $this->assertNull($obj->getDiffLettrageCodeLibelle());
        $this->assertNull($obj->getDiffLettrageFolio());
        $this->assertNull($obj->getDiffLettrageGains());
        $this->assertNull($obj->getDiffLettrageLibelle());
        $this->assertNull($obj->getDiffLettragePertes());
        $this->assertNull($obj->getEcartMaxiLettrageAuto());
        $this->assertNull($obj->getEcartMiniCtrlTva());
        $this->assertNull($obj->getEditerEnCfa());
        $this->assertNull($obj->getEtatProvCpObs());
        $this->assertNull($obj->getFaireControleLettrage());
        $this->assertNull($obj->getIncrementCompteAuto());
        $this->assertNull($obj->getLibellePlusDe30Carac());
        $this->assertNull($obj->getLienSaiImmos());
        $this->assertNull($obj->getLongueurPieceLettrage());
        $this->assertNull($obj->getNbComptesRaz());
        $this->assertNull($obj->getNbDecimalesMt());
        $this->assertNull($obj->getNbEcrAFacturerCloture());
        $this->assertNull($obj->getNbEcrituresRaz());
        $this->assertNull($obj->getNbJourBaseCp());
        $this->assertNull($obj->getNivRuptClasse0());
        $this->assertNull($obj->getNivRuptClasse1());
        $this->assertNull($obj->getNivRuptClasse2());
        $this->assertNull($obj->getNivRuptClasse3());
        $this->assertNull($obj->getNivRuptClasse4());
        $this->assertNull($obj->getNivRuptClasse5());
        $this->assertNull($obj->getNivRuptClasse6());
        $this->assertNull($obj->getNivRuptClasse7());
        $this->assertNull($obj->getNivRuptClasse8());
        $this->assertNull($obj->getNivRuptClasse9());
        $this->assertNull($obj->getPositionPieceLettrage());
        $this->assertNull($obj->getProchainLotEcrit());
        $this->assertNull($obj->getProchainLotFactor());
        $this->assertNull($obj->getProchainNumEcrEco());
        $this->assertNull($obj->getProchainNumLotVmp());
        $this->assertNull($obj->getProvCpCptBrut());
        $this->assertNull($obj->getProvCpCptCapcp());
        $this->assertNull($obj->getProvCpCptCapCh());
        $this->assertNull($obj->getProvCpCptCharges());
        $this->assertNull($obj->getProvMini());
        $this->assertNull($obj->getPublication());
        $this->assertNull($obj->getQimg2CptEncours());
        $this->assertNull($obj->getQimg2CptEnvoi());
        $this->assertNull($obj->getRffCptExploitant());
        $this->assertNull($obj->getRffCptInterets());
        $this->assertNull($obj->getRffCptRegul());
        $this->assertNull($obj->getRffDateLotEcr());
        $this->assertNull($obj->getRffDecouvertsAvances());
        $this->assertNull($obj->getRffInteretsEmprunts());
        $this->assertNull($obj->getRffLimite());
        $this->assertNull($obj->getRffMttRff());
        $this->assertNull($obj->getRffMttRegul());
        $this->assertNull($obj->getRffNumLotEcr());
        $this->assertNull($obj->getRffType());
        $this->assertNull($obj->getRappDads1Obs());
        $this->assertNull($obj->getRelanceAdresseCpt());
        $this->assertNull($obj->getTexteRelance0());
        $this->assertNull($obj->getTexteRelance1());
        $this->assertNull($obj->getTexteRelance2());
        $this->assertNull($obj->getTexteRelance3());
        $this->assertNull($obj->getTexteRelance4());
        $this->assertNull($obj->getTresoComptesAExclure());
        $this->assertNull($obj->getUtiliseQuantite2());
    }
}
