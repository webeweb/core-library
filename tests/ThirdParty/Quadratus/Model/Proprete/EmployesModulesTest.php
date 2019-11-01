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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\EmployesModules;

/**
 * Employes modules test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesModulesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmployesModules();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDebutModulation());
        $this->assertNull($obj->getEcartCumuleInit());
        $this->assertNull($obj->getFinModulation());
        $this->assertNull($obj->getPeriodeEcartCumule());
    }
}
