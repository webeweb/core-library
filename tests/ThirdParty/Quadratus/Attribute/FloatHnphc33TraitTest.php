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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHnphc33Trait;

/**
 * H n p h c33 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHnphc33TraitTest extends AbstractTestCase {

    /**
     * Tests the setHnphc33() method.
     *
     * @return void
     */
    public function testSetHnphc33() {

        $obj = new TestFloatHnphc33Trait();

        $obj->setHnphc33(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc33());
    }
}
