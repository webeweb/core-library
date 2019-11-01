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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbJDus1Trait;

/**
 * Nb j dus_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbJDus1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNbJDus1() method.
     *
     * @return void
     */
    public function testSetNbJDus1() {

        $obj = new TestFloatNbJDus1Trait();

        $obj->setNbJDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJDus1());
    }
}
