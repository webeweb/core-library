<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolOrigineChargeMensTrait;

/**
 * Origine charge mens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolOrigineChargeMensTraitTest extends AbstractTestCase {

    /**
     * Tests the setOrigineChargeMens() method.
     *
     * @return void
     */
    public function testSetOrigineChargeMens() {

        $obj = new TestBoolOrigineChargeMensTrait();

        $obj->setOrigineChargeMens(true);
        $this->assertEquals(true, $obj->getOrigineChargeMens());
    }
}
