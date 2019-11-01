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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNie1Trait;

/**
 * N i e1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNie1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNie1() method.
     *
     * @return void
     */
    public function testSetNie1() {

        $obj = new TestStringNie1Trait();

        $obj->setNie1("nie1");
        $this->assertEquals("nie1", $obj->getNie1());
    }
}
