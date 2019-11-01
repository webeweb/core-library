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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHnphc11Trait;

/**
 * H n p h c11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHnphc11TraitTest extends AbstractTestCase {

    /**
     * Tests the setHnphc11() method.
     *
     * @return void
     */
    public function testSetHnphc11() {

        $obj = new TestFloatHnphc11Trait();

        $obj->setHnphc11(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc11());
    }
}
