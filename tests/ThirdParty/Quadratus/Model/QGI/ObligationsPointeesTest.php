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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ObligationsPointees;

/**
 * Obligations pointees test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ObligationsPointeesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ObligationsPointees();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeObligation());
        $this->assertNull($obj->getDateEffet());
        $this->assertNull($obj->getLe());
        $this->assertNull($obj->getPar());
    }
}
