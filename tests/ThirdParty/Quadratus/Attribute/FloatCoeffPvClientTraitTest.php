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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCoeffPvClientTrait;

/**
 * Coeff p v client trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCoeffPvClientTraitTest extends AbstractTestCase {

    /**
     * Tests the setCoeffPvClient() method.
     *
     * @return void
     */
    public function testSetCoeffPvClient() {

        $obj = new TestFloatCoeffPvClientTrait();

        $obj->setCoeffPvClient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffPvClient());
    }
}
