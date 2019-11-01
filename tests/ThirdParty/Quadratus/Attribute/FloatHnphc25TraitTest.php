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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHnphc25Trait;

/**
 * H n p h c25 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHnphc25TraitTest extends AbstractTestCase {

    /**
     * Tests the setHnphc25() method.
     *
     * @return void
     */
    public function testSetHnphc25() {

        $obj = new TestFloatHnphc25Trait();

        $obj->setHnphc25(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc25());
    }
}
