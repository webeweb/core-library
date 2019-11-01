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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle9Trait;

/**
 * Nature regle9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle9TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle9() method.
     *
     * @return void
     */
    public function testSetNatureRegle9() {

        $obj = new TestStringNatureRegle9Trait();

        $obj->setNatureRegle9("natureRegle9");
        $this->assertEquals("natureRegle9", $obj->getNatureRegle9());
    }
}
