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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaLignes;

/**
 * Agenda lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AgendaLignes();

        $this->assertNull($obj->getBudgetNumUniq());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCollCreation());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getConfirme());
        $this->assertNull($obj->getCritereLibre());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getInterlocuteur());
        $this->assertNull($obj->getIsTacheTp());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getMemoPlus());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumOrdreMission());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumUniq2());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getPrive());
        $this->assertNull($obj->getRecurrence());
        $this->assertNull($obj->getTypeActivite());
    }
}
