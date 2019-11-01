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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ProvisionsCp;

/**
 * Provisions cp test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ProvisionsCpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ProvisionsCp();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getColPourSalRef());
        $this->assertNull($obj->getDernierSalaire());
        $this->assertNull($obj->getMoyenneSalaires());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNomCompletEmp());
        $this->assertNull($obj->getNumeroEmp());
        $this->assertNull($obj->getProvisionTotale());
        $this->assertNull($obj->getSalaireRef());
        $this->assertNull($obj->getSoldeJoursN());
        $this->assertNull($obj->getSoldeJoursN1());
        $this->assertNull($obj->getTxChargesSoc());
    }
}
