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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Comptes;

/**
 * Comptes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Comptes();

        $this->assertNull($obj->getALettrerAuto());
        $this->assertNull($obj->getActiverLotTrace());
        $this->assertNull($obj->getBonAPayer());
        $this->assertNull($obj->getCentraliseGdLivre());
        $this->assertNull($obj->getCleDeux());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeRegroup1());
        $this->assertNull($obj->getCodeRegroup2());
        $this->assertNull($obj->getCodeRegroup3());
        $this->assertNull($obj->getCodeRegroup4());
        $this->assertNull($obj->getCodeRepartitionAna());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCollectif1());
        $this->assertNull($obj->getCollectif2());
        $this->assertNull($obj->getCompteInactif());
        $this->assertNull($obj->getContrepartieChargeProd());
        $this->assertNull($obj->getCptParticulier());
        $this->assertNull($obj->getCptTvaContrepCpr());
        $this->assertNull($obj->getCredit());
        $this->assertNull($obj->getCreditHorsEx());
        $this->assertNull($obj->getCredit1());
        $this->assertNull($obj->getCredit2());
        $this->assertNull($obj->getCumulPiedJournal());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDateSysCreation());
        $this->assertNull($obj->getDebit());
        $this->assertNull($obj->getDebitHorsEx());
        $this->assertNull($obj->getDebit1());
        $this->assertNull($obj->getDebit2());
        $this->assertNull($obj->getDetailCloture());
        $this->assertNull($obj->getEditM2());
        $this->assertNull($obj->getEtatRevision());
        $this->assertNull($obj->getFamille());
        $this->assertNull($obj->getFranchise());
        $this->assertNull($obj->getGererIntCptCour());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntituleAll());
        $this->assertNull($obj->getIntituleAng());
        $this->assertNull($obj->getIntituleEsp());
        $this->assertNull($obj->getIntituleIta());
        $this->assertNull($obj->getIntituleLong());
        $this->assertNull($obj->getIntraCom());
        $this->assertNull($obj->getJalTreRegl());
        $this->assertNull($obj->getLibelleLotTrace());
        $this->assertNull($obj->getMargeTheorique());
        $this->assertNull($obj->getMethodeTva());
        $this->assertNull($obj->getNbEcritures());
        $this->assertNull($obj->getNiveauDroit());
        $this->assertNull($obj->getNoDossReflechi());
        $this->assertNull($obj->getNoProchainLettrage());
        $this->assertNull($obj->getNumCptReflechi());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPersonneMorale());
        $this->assertNull($obj->getPrestaTel());
        $this->assertNull($obj->getPrestataire());
        $this->assertNull($obj->getPrixMoyenNbDec());
        $this->assertNull($obj->getPrixMoyenNbDec2());
        $this->assertNull($obj->getPrixMoyenNbEntier());
        $this->assertNull($obj->getPrixMoyenNbEntier2());
        $this->assertNull($obj->getProchaineLettre());
        $this->assertNull($obj->getProchaineLettreTiers());
        $this->assertNull($obj->getQuantiteLibelle());
        $this->assertNull($obj->getQuantiteLibelle2());
        $this->assertNull($obj->getQuantiteNbDec());
        $this->assertNull($obj->getQuantiteNbDec2());
        $this->assertNull($obj->getQuantiteNbEntier());
        $this->assertNull($obj->getQuantiteNbEntier2());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getReferenceFournisseur());
        $this->assertNull($obj->getRepartitionAna());
        $this->assertNull($obj->getRepartitionAuto());
        $this->assertNull($obj->getRubriqueBilan1());
        $this->assertNull($obj->getRubriqueBilan2());
        $this->assertNull($obj->getSuiviDevises());
        $this->assertNull($obj->getSuiviQuantite());
        $this->assertNull($obj->getSuiviQuantite2());
        $this->assertNull($obj->getTvaAutresOpeImpos());
        $this->assertNull($obj->getTvaDom());
        $this->assertNull($obj->getTvaEncaissement());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeCollectif());
        $this->assertNull($obj->getTypeCptTiers());
        $this->assertNull($obj->getTypeIntraCom());
    }
}
