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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PostesCharge;

/**
 * Postes charge test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PostesChargeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PostesCharge();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getDernPosteAffecte());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getTypeProrata());
    }
}
