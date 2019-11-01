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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMt22Trait;

/**
 * M t22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMt22TraitTest extends AbstractTestCase {

    /**
     * Tests the setMt22() method.
     *
     * @return void
     */
    public function testSetMt22() {

        $obj = new TestFloatMt22Trait();

        $obj->setMt22(10.092018);
        $this->assertEquals(10.092018, $obj->getMt22());
    }
}
