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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TravauxTypeEntetes;

/**
 * Travaux type entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TravauxTypeEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TravauxTypeEntetes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getPolice());
        $this->assertNull($obj->getPolice2());
        $this->assertNull($obj->getPolice3());
    }
}
