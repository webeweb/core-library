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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTel22Trait;

/**
 * Tel22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTel22TraitTest extends AbstractTestCase {

    /**
     * Tests the setTel22() method.
     *
     * @return void
     */
    public function testSetTel22() {

        $obj = new TestStringTel22Trait();

        $obj->setTel22("tel22");
        $this->assertEquals("tel22", $obj->getTel22());
    }
}
