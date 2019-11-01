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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\FichesConfidentialitesMenus;

/**
 * Fiches confidentialites menus test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FichesConfidentialitesMenusTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesConfidentialitesMenus();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getDroitAjout());
        $this->assertNull($obj->getDroitModification());
        $this->assertNull($obj->getDroitSuppression());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getIndexDuPereNo1());
        $this->assertNull($obj->getIndexDuPereNo2());
        $this->assertNull($obj->getIndexDuPereNo3());
        $this->assertNull($obj->getIndexDuPereNo4());
        $this->assertNull($obj->getIndexDuPereNo5());
        $this->assertNull($obj->getIndexDuPereNo6());
        $this->assertNull($obj->getIndexDuPereNo7());
        $this->assertNull($obj->getLibelleMenu());
        $this->assertNull($obj->getMenuVisible());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNomDuPereNo1());
        $this->assertNull($obj->getNomDuPereNo2());
        $this->assertNull($obj->getNomDuPereNo3());
        $this->assertNull($obj->getNomDuPereNo4());
        $this->assertNull($obj->getNomDuPereNo5());
        $this->assertNull($obj->getNomDuPereNo6());
        $this->assertNull($obj->getNomDuPereNo7());
        $this->assertNull($obj->getNomMenu());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeSelection());
    }
}
