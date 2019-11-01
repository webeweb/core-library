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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaCollabConst;

/**
 * Agenda collab const test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaCollabConstTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AgendaCollabConst();

        $this->assertNull($obj->getArtt());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeSiteTenue());
        $this->assertNull($obj->getConfidentiel());
        $this->assertNull($obj->getDateDerniereModifAgenda());
        $this->assertNull($obj->getDimancheAMdeb());
        $this->assertNull($obj->getDimancheAMfin());
        $this->assertNull($obj->getDimanchePMdeb());
        $this->assertNull($obj->getDimanchePMfin());
        $this->assertNull($obj->getInterdireRdVHorsTravail());
        $this->assertNull($obj->getJeudiAMdeb());
        $this->assertNull($obj->getJeudiAMfin());
        $this->assertNull($obj->getJeudiPMdeb());
        $this->assertNull($obj->getJeudiPMfin());
        $this->assertNull($obj->getLundiAMdeb());
        $this->assertNull($obj->getLundiAMfin());
        $this->assertNull($obj->getLundiPMdeb());
        $this->assertNull($obj->getLundiPMfin());
        $this->assertNull($obj->getMardiAMdeb());
        $this->assertNull($obj->getMardiAMfin());
        $this->assertNull($obj->getMardiPMdeb());
        $this->assertNull($obj->getMardiPMfin());
        $this->assertNull($obj->getMercrediAMdeb());
        $this->assertNull($obj->getMercrediAMfin());
        $this->assertNull($obj->getMercrediPMdeb());
        $this->assertNull($obj->getMercrediPMfin());
        $this->assertNull($obj->getPlusPetiteDateActiviteModifiee());
        $this->assertNull($obj->getSamediAMdeb());
        $this->assertNull($obj->getSamediAMfin());
        $this->assertNull($obj->getSamediPMdeb());
        $this->assertNull($obj->getSamediPMfin());
        $this->assertNull($obj->getSuiviOrdreMission());
        $this->assertNull($obj->getUniteRdv());
        $this->assertNull($obj->getVendrediAMdeb());
        $this->assertNull($obj->getVendrediAMfin());
        $this->assertNull($obj->getVendrediPMdeb());
        $this->assertNull($obj->getVendrediPMfin());
    }
}
