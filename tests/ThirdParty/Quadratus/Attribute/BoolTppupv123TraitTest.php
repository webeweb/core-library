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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTppupv123Trait;

/**
 * T p p u p v123 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTppupv123TraitTest extends AbstractTestCase {

    /**
     * Tests the setTppupv123() method.
     *
     * @return void
     */
    public function testSetTppupv123() {

        $obj = new TestBoolTppupv123Trait();

        $obj->setTppupv123(true);
        $this->assertEquals(true, $obj->getTppupv123());
    }
}
