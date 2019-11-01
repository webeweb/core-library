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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ClientsDouteux;

/**
 * Clients douteux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ClientsDouteuxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsDouteux();

        $this->assertNull($obj->getDateDoute());
        $this->assertNull($obj->getMention());
        $this->assertNull($obj->getMtCreanceBaseHt());
        $this->assertNull($obj->getMtCreanceTtcDebExo());
        $this->assertNull($obj->getMtCreanceTtcDevDoutExo());
        $this->assertNull($obj->getMtCreanceTtcIrrecExo());
        $this->assertNull($obj->getMtCreanceTtcReglExo());
        $this->assertNull($obj->getMtProvisionDebExo());
        $this->assertNull($obj->getMtProvisionDotExo());
        $this->assertNull($obj->getMtRepProvisionIrrec());
        $this->assertNull($obj->getMtRepProvisionRegl());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTauxDouteDebExo());
        $this->assertNull($obj->getTauxDouteExo());
        $this->assertNull($obj->getTxTvaCreance());
        $this->assertNull($obj->getTxTvaCreanceForce());
    }
}
