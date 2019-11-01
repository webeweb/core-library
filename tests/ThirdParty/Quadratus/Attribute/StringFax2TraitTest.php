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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFax2Trait;

/**
 * Fax2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFax2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFax2() method.
     *
     * @return void
     */
    public function testSetFax2() {

        $obj = new TestStringFax2Trait();

        $obj->setFax2("fax2");
        $this->assertEquals("fax2", $obj->getFax2());
    }
}
