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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntLong6Trait;

/**
 * Long6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntLong6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLong6() method.
     *
     * @return void
     */
    public function testSetLong6() {

        $obj = new TestIntLong6Trait();

        $obj->setLong6(10);
        $this->assertEquals(10, $obj->getLong6());
    }
}
