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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolACumulerBaseCaisse2Trait;

/**
 * A cumuler base caisse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolACumulerBaseCaisse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setACumulerBaseCaisse2() method.
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse2() {

        $obj = new TestBoolACumulerBaseCaisse2Trait();

        $obj->setACumulerBaseCaisse2(true);
        $this->assertEquals(true, $obj->getACumulerBaseCaisse2());
    }
}
