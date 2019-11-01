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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\RegulTva;

/**
 * Regul tva test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RegulTvaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegulTva();

        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getHt());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLigne());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTtc());
        $this->assertNull($obj->getTva());
        $this->assertNull($obj->getType());
    }
}
