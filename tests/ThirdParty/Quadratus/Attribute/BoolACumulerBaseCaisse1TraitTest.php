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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolACumulerBaseCaisse1Trait;

/**
 * A cumuler base caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolACumulerBaseCaisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setACumulerBaseCaisse1() method.
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse1() {

        $obj = new TestBoolACumulerBaseCaisse1Trait();

        $obj->setACumulerBaseCaisse1(true);
        $this->assertEquals(true, $obj->getACumulerBaseCaisse1());
    }
}
