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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHabs5Trait;

/**
 * H a b s5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHabs5TraitTest extends AbstractTestCase {

    /**
     * Tests the setHabs5() method.
     *
     * @return void
     */
    public function testSetHabs5() {

        $obj = new TestFloatHabs5Trait();

        $obj->setHabs5(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs5());
    }
}
