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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu9Trait;

/**
 * Nature menu9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu9TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu9() method.
     *
     * @return void
     */
    public function testSetNatureMenu9() {

        $obj = new TestStringNatureMenu9Trait();

        $obj->setNatureMenu9("natureMenu9");
        $this->assertEquals("natureMenu9", $obj->getNatureMenu9());
    }
}
