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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsSelAvance;

/**
 * Clients sel avance test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelAvanceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsSelAvance();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCol());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNomReq1());
        $this->assertNull($obj->getNomReq10());
        $this->assertNull($obj->getNomReq11());
        $this->assertNull($obj->getNomReq12());
        $this->assertNull($obj->getNomReq2());
        $this->assertNull($obj->getNomReq3());
        $this->assertNull($obj->getNomReq4());
        $this->assertNull($obj->getNomReq5());
        $this->assertNull($obj->getNomReq6());
        $this->assertNull($obj->getNomReq7());
        $this->assertNull($obj->getNomReq8());
        $this->assertNull($obj->getNomReq9());
        $this->assertNull($obj->getRequete1());
        $this->assertNull($obj->getRequete10());
        $this->assertNull($obj->getRequete11());
        $this->assertNull($obj->getRequete12());
        $this->assertNull($obj->getRequete2());
        $this->assertNull($obj->getRequete3());
        $this->assertNull($obj->getRequete4());
        $this->assertNull($obj->getRequete5());
        $this->assertNull($obj->getRequete6());
        $this->assertNull($obj->getRequete7());
        $this->assertNull($obj->getRequete8());
        $this->assertNull($obj->getRequete9());
    }
}
