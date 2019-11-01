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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TypeMissions;

/**
 * Type missions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TypeMissionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TypeMissions();

        $this->assertNull($obj->getArticle());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeResponsable());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDecalageFermetureAuto());
        $this->assertNull($obj->getDecalageFermetureAutoJours());
        $this->assertNull($obj->getDecalageOuvertureAuto());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDescriptifRtf());
        $this->assertNull($obj->getFermetureAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMoisOuvertureAuto());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getRecurrente());
        $this->assertNull($obj->getTachesGroupe());
        $this->assertNull($obj->getTransfertCentre());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeCompteur());
        $this->assertNull($obj->getTypeResponsable());
        $this->assertNull($obj->getTypeVisuTaches());
    }
}
