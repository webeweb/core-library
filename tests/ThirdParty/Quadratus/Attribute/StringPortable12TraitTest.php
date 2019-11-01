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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPortable12Trait;

/**
 * Portable12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPortable12TraitTest extends AbstractTestCase {

    /**
     * Tests the setPortable12() method.
     *
     * @return void
     */
    public function testSetPortable12() {

        $obj = new TestStringPortable12Trait();

        $obj->setPortable12("portable12");
        $this->assertEquals("portable12", $obj->getPortable12());
    }
}
