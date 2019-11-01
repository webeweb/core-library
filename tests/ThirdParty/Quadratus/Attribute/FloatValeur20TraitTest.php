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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatValeur20Trait;

/**
 * Valeur20 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatValeur20TraitTest extends AbstractTestCase {

    /**
     * Tests the setValeur20() method.
     *
     * @return void
     */
    public function testSetValeur20() {

        $obj = new TestFloatValeur20Trait();

        $obj->setValeur20(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur20());
    }
}
