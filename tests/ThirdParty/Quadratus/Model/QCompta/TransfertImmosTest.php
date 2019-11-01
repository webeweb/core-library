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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\TransfertImmos;

/**
 * Transfert immos test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class TransfertImmosTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TransfertImmos();

        $this->assertNull($obj->getCptDerCap());
        $this->assertNull($obj->getCptDerDot());
        $this->assertNull($obj->getCptDerMaj());
        $this->assertNull($obj->getCptDerRep());
        $this->assertNull($obj->getCptDotCor());
        $this->assertNull($obj->getCptDotExc());
        $this->assertNull($obj->getCptDotFin());
        $this->assertNull($obj->getCptDotInc());
        $this->assertNull($obj->getCptValCor());
        $this->assertNull($obj->getCptValExc());
        $this->assertNull($obj->getCptValFin());
        $this->assertNull($obj->getCptValInc());
    }
}
