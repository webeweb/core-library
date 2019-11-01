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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringExoHCode1Trait;

/**
 * Exo h_ code1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringExoHCode1TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHCode1() method.
     *
     * @return void
     */
    public function testSetExoHCode1() {

        $obj = new TestStringExoHCode1Trait();

        $obj->setExoHCode1("exoHCode1");
        $this->assertEquals("exoHCode1", $obj->getExoHCode1());
    }
}
