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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAEchoirEchuTrait;

/**
 * A echoir echu trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAEchoirEchuTraitTest extends AbstractTestCase {

    /**
     * Tests the setAEchoirEchu() method.
     *
     * @return void
     */
    public function testSetAEchoirEchu() {

        $obj = new TestStringAEchoirEchuTrait();

        $obj->setAEchoirEchu("aEchoirEchu");
        $this->assertEquals("aEchoirEchu", $obj->getAEchoirEchu());
    }
}
