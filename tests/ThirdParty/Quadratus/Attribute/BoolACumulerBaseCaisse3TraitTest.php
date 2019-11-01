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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolACumulerBaseCaisse3Trait;

/**
 * A cumuler base caisse3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolACumulerBaseCaisse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setACumulerBaseCaisse3() method.
     *
     * @return void
     */
    public function testSetACumulerBaseCaisse3() {

        $obj = new TestBoolACumulerBaseCaisse3Trait();

        $obj->setACumulerBaseCaisse3(true);
        $this->assertEquals(true, $obj->getACumulerBaseCaisse3());
    }
}
