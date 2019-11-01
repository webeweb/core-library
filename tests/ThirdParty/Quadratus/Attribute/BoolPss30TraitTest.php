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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPss30Trait;

/**
 * P s s30 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPss30TraitTest extends AbstractTestCase {

    /**
     * Tests the setPss30() method.
     *
     * @return void
     */
    public function testSetPss30() {

        $obj = new TestBoolPss30Trait();

        $obj->setPss30(true);
        $this->assertEquals(true, $obj->getPss30());
    }
}
