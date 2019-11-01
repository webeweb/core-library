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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBoolean7Trait;

/**
 * Boolean7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBoolean7TraitTest extends AbstractTestCase {

    /**
     * Tests the setBoolean7() method.
     *
     * @return void
     */
    public function testSetBoolean7() {

        $obj = new TestBoolBoolean7Trait();

        $obj->setBoolean7(true);
        $this->assertEquals(true, $obj->getBoolean7());
    }
}
