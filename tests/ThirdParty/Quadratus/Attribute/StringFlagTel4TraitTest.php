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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFlagTel4Trait;

/**
 * Flag tel4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFlagTel4TraitTest extends AbstractTestCase {

    /**
     * Tests the setFlagTel4() method.
     *
     * @return void
     */
    public function testSetFlagTel4() {

        $obj = new TestStringFlagTel4Trait();

        $obj->setFlagTel4("flagTel4");
        $this->assertEquals("flagTel4", $obj->getFlagTel4());
    }
}
