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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Missions;

/**
 * Missions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class MissionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Missions();

        $this->assertNull($obj->getArticle());
        $this->assertNull($obj->getBmCalcule());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCloture());
        $this->assertNull($obj->getClotureContexte());
        $this->assertNull($obj->getClotureDate());
        $this->assertNull($obj->getCloturePar());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeMissionType());
        $this->assertNull($obj->getCodeResponsable());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebutTp());
        $this->assertNull($obj->getDateFinTp());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDecalageFermetureAuto());
        $this->assertNull($obj->getDecalageFermetureAutoJours());
        $this->assertNull($obj->getDecalageOuvertureAuto());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDescriptifRtf());
        $this->assertNull($obj->getDtFermetureAuto());
        $this->assertNull($obj->getFermetureAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMissionMillesime());
        $this->assertNull($obj->getMoisOuvertureAuto());
        $this->assertNull($obj->getOuvertureContexte());
        $this->assertNull($obj->getOuvertureDate());
        $this->assertNull($obj->getOuverturePar());
        $this->assertNull($obj->getSociete());
        $this->assertNull($obj->getTpArchive());
        $this->assertNull($obj->getTpCloture());
        $this->assertNull($obj->getTransfertCentre());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeResponsable());
    }
}
