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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntLong8Trait;

/**
 * Long8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntLong8TraitTest extends AbstractTestCase {

    /**
     * Tests the setLong8() method.
     *
     * @return void
     */
    public function testSetLong8() {

        $obj = new TestIntLong8Trait();

        $obj->setLong8(10);
        $this->assertEquals(10, $obj->getLong8());
    }
}
