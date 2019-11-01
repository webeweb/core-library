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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDouble4Trait;

/**
 * Double4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDouble4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDouble4() method.
     *
     * @return void
     */
    public function testSetDouble4() {

        $obj = new TestFloatDouble4Trait();

        $obj->setDouble4(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble4());
    }
}
