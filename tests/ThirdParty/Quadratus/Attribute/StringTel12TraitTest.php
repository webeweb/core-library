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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTel12Trait;

/**
 * Tel12 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTel12TraitTest extends AbstractTestCase {

    /**
     * Tests the setTel12() method.
     *
     * @return void
     */
    public function testSetTel12() {

        $obj = new TestStringTel12Trait();

        $obj->setTel12("tel12");
        $this->assertEquals("tel12", $obj->getTel12());
    }
}
