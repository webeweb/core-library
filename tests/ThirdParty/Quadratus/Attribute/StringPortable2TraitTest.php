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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPortable2Trait;

/**
 * Portable2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPortable2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPortable2() method.
     *
     * @return void
     */
    public function testSetPortable2() {

        $obj = new TestStringPortable2Trait();

        $obj->setPortable2("portable2");
        $this->assertEquals("portable2", $obj->getPortable2());
    }
}
