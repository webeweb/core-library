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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\VmpMouvements;

/**
 * Vmp mouvements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class VmpMouvementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new VmpMouvements();

        $this->assertNull($obj->getCodeVmp());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getFrancsEuros());
        $this->assertNull($obj->getGratuit());
        $this->assertNull($obj->getMontantComm());
        $this->assertNull($obj->getMontantCoupon());
        $this->assertNull($obj->getMontantFrais());
        $this->assertNull($obj->getNoLotEcr());
        $this->assertNull($obj->getNoLotTrace());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniqEcr());
        $this->assertNull($obj->getPrixUnitaire());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getSoldeQuantite());
        $this->assertNull($obj->getType());
    }
}
