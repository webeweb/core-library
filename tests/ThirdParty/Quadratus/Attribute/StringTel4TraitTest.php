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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTel4Trait;

/**
 * Tel4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTel4TraitTest extends AbstractTestCase {

    /**
     * Tests the setTel4() method.
     *
     * @return void
     */
    public function testSetTel4() {

        $obj = new TestStringTel4Trait();

        $obj->setTel4("tel4");
        $this->assertEquals("tel4", $obj->getTel4());
    }
}
