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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iComptaDroits;

/**
 * i compta droits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iComptaDroitsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iComptaDroits();

        $this->assertNull($obj->getCodeCollabMessages());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateLimiteVisu());
        $this->assertNull($obj->getDroitClients());
        $this->assertNull($obj->getDroitFournisseurs());
        $this->assertNull($obj->getDroitGeneraux());
        $this->assertNull($obj->getDroitModifCompte());
        $this->assertNull($obj->getEspaceClient());
        $this->assertNull($obj->getFctBalanceClient());
        $this->assertNull($obj->getFctBalanceFournisseur());
        $this->assertNull($obj->getFctBalanceGenerale());
        $this->assertNull($obj->getFctConsultDa());
        $this->assertNull($obj->getFctConsultDc());
        $this->assertNull($obj->getFctDeclareTva());
        $this->assertNull($obj->getFctDelettrage());
        $this->assertNull($obj->getFctEditionJournaux());
        $this->assertNull($obj->getFctInterrogationCpt());
        $this->assertNull($obj->getFctLettrage());
        $this->assertNull($obj->getFctModifEcriture());
        $this->assertNull($obj->getFctRapprochBanq());
        $this->assertNull($obj->getFctSaisieAchats());
        $this->assertNull($obj->getFctSaisieBanques());
        $this->assertNull($obj->getFctSaisieCaisseOrientee());
        $this->assertNull($obj->getFctSaisieEtebac());
        $this->assertNull($obj->getFctSaisieStandard());
        $this->assertNull($obj->getFctSaisieTrame());
        $this->assertNull($obj->getFctSaisieVentes());
        $this->assertNull($obj->getFctSupprEcriture());
        $this->assertNull($obj->getFctTableBord());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getNiveauDroitClients());
        $this->assertNull($obj->getNiveauDroitFournisseurs());
        $this->assertNull($obj->getNiveauDroitGeneraux());
        $this->assertNull($obj->getNoDossCpta());
        $this->assertNull($obj->getNomUser());
        $this->assertNull($obj->getNumiKey());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getPeriodeSaisieDeb());
        $this->assertNull($obj->getPeriodeSaisieFin());
    }
}
