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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntLong5Trait;

/**
 * Long5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntLong5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLong5() method.
     *
     * @return void
     */
    public function testSetLong5() {

        $obj = new TestIntLong5Trait();

        $obj->setLong5(10);
        $this->assertEquals(10, $obj->getLong5());
    }
}
