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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu5Trait;

/**
 * Nature menu5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu5TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu5() method.
     *
     * @return void
     */
    public function testSetNatureMenu5() {

        $obj = new TestStringNatureMenu5Trait();

        $obj->setNatureMenu5("natureMenu5");
        $this->assertEquals("natureMenu5", $obj->getNatureMenu5());
    }
}
