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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPrime10Trait;

/**
 * Prime10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPrime10TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrime10() method.
     *
     * @return void
     */
    public function testSetPrime10() {

        $obj = new TestFloatPrime10Trait();

        $obj->setPrime10(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime10());
    }
}
