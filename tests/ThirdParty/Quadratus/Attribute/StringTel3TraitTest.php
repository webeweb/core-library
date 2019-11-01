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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTel3Trait;

/**
 * Tel3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTel3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTel3() method.
     *
     * @return void
     */
    public function testSetTel3() {

        $obj = new TestStringTel3Trait();

        $obj->setTel3("tel3");
        $this->assertEquals("tel3", $obj->getTel3());
    }
}
