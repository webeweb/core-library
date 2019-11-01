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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCoeffTr5Trait;

/**
 * Coeff_ tr5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCoeffTr5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCoeffTr5() method.
     *
     * @return void
     */
    public function testSetCoeffTr5() {

        $obj = new TestFloatCoeffTr5Trait();

        $obj->setCoeffTr5(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffTr5());
    }
}
