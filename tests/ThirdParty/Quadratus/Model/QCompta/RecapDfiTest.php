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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\RecapDfi;

/**
 * Recap dfi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDfiTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RecapDfi();

        $this->assertNull($obj->getAnneeDed());
        $this->assertNull($obj->getAnneeUtilisation());
        $this->assertNull($obj->getImmobilisations());
        $this->assertNull($obj->getMttAnnee());
        $this->assertNull($obj->getPartsSociales());
        $this->assertNull($obj->getReintAnticipee());
        $this->assertNull($obj->getStocks());
    }
}
