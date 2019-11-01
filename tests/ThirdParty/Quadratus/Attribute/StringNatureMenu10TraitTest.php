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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu10Trait;

/**
 * Nature menu10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu10TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu10() method.
     *
     * @return void
     */
    public function testSetNatureMenu10() {

        $obj = new TestStringNatureMenu10Trait();

        $obj->setNatureMenu10("natureMenu10");
        $this->assertEquals("natureMenu10", $obj->getNatureMenu10());
    }
}
