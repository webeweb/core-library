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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMttDetTa1Trait;

/**
 * Mtt det t a1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMttDetTa1TraitTest extends AbstractTestCase {

    /**
     * Tests the setMttDetTa1() method.
     *
     * @return void
     */
    public function testSetMttDetTa1() {

        $obj = new TestFloatMttDetTa1Trait();

        $obj->setMttDetTa1(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa1());
    }
}
