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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTds88Trait;

/**
 * T d s88 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTds88TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds88() method.
     *
     * @return void
     */
    public function testSetTds88() {

        $obj = new TestFloatTds88Trait();

        $obj->setTds88(10.092018);
        $this->assertEquals(10.092018, $obj->getTds88());
    }
}
