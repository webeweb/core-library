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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntLong4Trait;

/**
 * Long4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntLong4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLong4() method.
     *
     * @return void
     */
    public function testSetLong4() {

        $obj = new TestIntLong4Trait();

        $obj->setLong4(10);
        $this->assertEquals(10, $obj->getLong4());
    }
}
