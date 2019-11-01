<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AvenantsContrats;

/**
 * Avenants contrats test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsContratsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AvenantsContrats();

        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateAvenant());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumAvenantSaisi());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getObservation());
        $this->assertNull($obj->getPeriodeAvenant());
        $this->assertNull($obj->getSignatureEmploye());
        $this->assertNull($obj->getTypeAvenant());
        $this->assertNull($obj->getTypeDocument());
    }
}
