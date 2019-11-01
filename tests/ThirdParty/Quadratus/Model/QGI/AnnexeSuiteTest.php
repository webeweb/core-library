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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AnnexeSuite;

/**
 * Annexe suite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AnnexeSuiteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AnnexeSuite();

        $this->assertNull($obj->getCode1());
        $this->assertNull($obj->getCode2());
        $this->assertNull($obj->getCritereLibre1());
        $this->assertNull($obj->getCritereLibre2());
        $this->assertNull($obj->getDestRelance());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getRemarquesRtf());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getType());
    }
}
