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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AnnexeTer;

/**
 * Annexe ter test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AnnexeTerTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AnnexeTer();

        $this->assertNull($obj->getBoolean1());
        $this->assertNull($obj->getBoolean2());
        $this->assertNull($obj->getBoolean3());
        $this->assertNull($obj->getBoolean4());
        $this->assertNull($obj->getBoolean5());
        $this->assertNull($obj->getBoolean6());
        $this->assertNull($obj->getBoolean7());
        $this->assertNull($obj->getCode1());
        $this->assertNull($obj->getCode2());
        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDate2());
        $this->assertNull($obj->getDate3());
        $this->assertNull($obj->getDate4());
        $this->assertNull($obj->getDate5());
        $this->assertNull($obj->getDate6());
        $this->assertNull($obj->getDate7());
        $this->assertNull($obj->getDouble1());
        $this->assertNull($obj->getDouble2());
        $this->assertNull($obj->getDouble3());
        $this->assertNull($obj->getDouble4());
        $this->assertNull($obj->getDouble5());
        $this->assertNull($obj->getDouble6());
        $this->assertNull($obj->getDouble7());
        $this->assertNull($obj->getLong1());
        $this->assertNull($obj->getLong2());
        $this->assertNull($obj->getLong3());
        $this->assertNull($obj->getLong4());
        $this->assertNull($obj->getLong5());
        $this->assertNull($obj->getLong6());
        $this->assertNull($obj->getLong7());
        $this->assertNull($obj->getMemo1());
        $this->assertNull($obj->getMemo2());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getText1());
        $this->assertNull($obj->getText2());
        $this->assertNull($obj->getText3());
        $this->assertNull($obj->getText4());
        $this->assertNull($obj->getText5());
        $this->assertNull($obj->getText6());
        $this->assertNull($obj->getText7());
        $this->assertNull($obj->getType());
    }
}
