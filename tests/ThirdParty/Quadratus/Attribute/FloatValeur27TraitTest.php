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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatValeur27Trait;

/**
 * Valeur27 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatValeur27TraitTest extends AbstractTestCase {

    /**
     * Tests the setValeur27() method.
     *
     * @return void
     */
    public function testSetValeur27() {

        $obj = new TestFloatValeur27Trait();

        $obj->setValeur27(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur27());
    }
}
