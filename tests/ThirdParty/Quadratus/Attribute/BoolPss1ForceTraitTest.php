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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPss1ForceTrait;

/**
 * P s s1 force trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPss1ForceTraitTest extends AbstractTestCase {

    /**
     * Tests the setPss1Force() method.
     *
     * @return void
     */
    public function testSetPss1Force() {

        $obj = new TestBoolPss1ForceTrait();

        $obj->setPss1Force(true);
        $this->assertEquals(true, $obj->getPss1Force());
    }
}
