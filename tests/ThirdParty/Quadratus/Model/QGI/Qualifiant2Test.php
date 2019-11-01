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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Qualifiant2;

/**
 * Qualifiant2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class Qualifiant2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Qualifiant2();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeLiaison());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getColonne());
        $this->assertNull($obj->getNumLig());
        $this->assertNull($obj->getObjetRef());
    }
}
