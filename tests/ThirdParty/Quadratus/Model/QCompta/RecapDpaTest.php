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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\RecapDpa;

/**
 * Recap dpa test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class RecapDpaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RecapDpa();

        $this->assertNull($obj->getAleasClimat());
        $this->assertNull($obj->getAleasEco());
        $this->assertNull($obj->getAnneeDed());
        $this->assertNull($obj->getAnneeUtilisation());
        $this->assertNull($obj->getAutres());
        $this->assertNull($obj->getFranchDommages());
        $this->assertNull($obj->getMttAnnee());
        $this->assertNull($obj->getPrimesFranch());
    }
}
