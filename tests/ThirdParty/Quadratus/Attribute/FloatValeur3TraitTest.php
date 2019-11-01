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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatValeur3Trait;

/**
 * Valeur3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatValeur3TraitTest extends AbstractTestCase {

    /**
     * Tests the setValeur3() method.
     *
     * @return void
     */
    public function testSetValeur3() {

        $obj = new TestFloatValeur3Trait();

        $obj->setValeur3(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur3());
    }
}
