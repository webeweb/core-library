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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringExoHCode2Trait;

/**
 * Exo h_ code2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringExoHCode2TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHCode2() method.
     *
     * @return void
     */
    public function testSetExoHCode2() {

        $obj = new TestStringExoHCode2Trait();

        $obj->setExoHCode2("exoHCode2");
        $this->assertEquals("exoHCode2", $obj->getExoHCode2());
    }
}
