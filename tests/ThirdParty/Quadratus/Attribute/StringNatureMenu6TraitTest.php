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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu6Trait;

/**
 * Nature menu6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu6TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu6() method.
     *
     * @return void
     */
    public function testSetNatureMenu6() {

        $obj = new TestStringNatureMenu6Trait();

        $obj->setNatureMenu6("natureMenu6");
        $this->assertEquals("natureMenu6", $obj->getNatureMenu6());
    }
}
