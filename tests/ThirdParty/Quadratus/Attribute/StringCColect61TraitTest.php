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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCColect61Trait;

/**
 * C colect61 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCColect61TraitTest extends AbstractTestCase {

    /**
     * Tests the setCColect61() method.
     *
     * @return void
     */
    public function testSetCColect61() {

        $obj = new TestStringCColect61Trait();

        $obj->setCColect61("cColect61");
        $this->assertEquals("cColect61", $obj->getCColect61());
    }
}
