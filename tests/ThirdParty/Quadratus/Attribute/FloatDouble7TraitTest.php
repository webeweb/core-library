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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDouble7Trait;

/**
 * Double7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDouble7TraitTest extends AbstractTestCase {

    /**
     * Tests the setDouble7() method.
     *
     * @return void
     */
    public function testSetDouble7() {

        $obj = new TestFloatDouble7Trait();

        $obj->setDouble7(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble7());
    }
}
