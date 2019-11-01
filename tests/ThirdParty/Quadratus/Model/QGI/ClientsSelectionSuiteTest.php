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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsSelectionSuite;

/**
 * Clients selection suite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelectionSuiteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsSelectionSuite();

        $this->assertNull($obj->getCocheClient());
        $this->assertNull($obj->getCocheFournisseur());
        $this->assertNull($obj->getCocheIntervenant());
        $this->assertNull($obj->getCocheProspect());
        $this->assertNull($obj->getCocheSorti());
        $this->assertNull($obj->getCodeCol());
        $this->assertNull($obj->getLibelle());
    }
}
