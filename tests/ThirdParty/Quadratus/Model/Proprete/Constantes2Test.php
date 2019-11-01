<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Constantes2;

/**
 * Constantes2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class Constantes2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Constantes2();

        $this->assertNull($obj->getFormatDuree());
        $this->assertNull($obj->getJoursCpaDeduire());
        $this->assertNull($obj->getNbDecimalesDuree());
        $this->assertNull($obj->getNumCritereBtBool1());
        $this->assertNull($obj->getNumCritereBtBool2());
        $this->assertNull($obj->getNumCritereBtByte1());
        $this->assertNull($obj->getNumCritereBtLst1());
        $this->assertNull($obj->getNumCritereBtLst2());
        $this->assertNull($obj->getNumCritereBtTxt1());
        $this->assertNull($obj->getNumCritereBtTxt2());
        $this->assertNull($obj->getNumCritereCouleurBt());
        $this->assertNull($obj->getNumCritereDaTxt1());
        $this->assertNull($obj->getNumCritereReclaLst1());
        $this->assertNull($obj->getNumCritereReclaLst2());
        $this->assertNull($obj->getPublierPhotoWeb());
        $this->assertNull($obj->getTypeCritereCouleurBt());
    }
}
