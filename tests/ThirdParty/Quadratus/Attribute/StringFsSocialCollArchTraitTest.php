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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFsSocialCollArchTrait;

/**
 * F s_ social_ coll arch trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFsSocialCollArchTraitTest extends AbstractTestCase {

    /**
     * Tests the setFsSocialCollArch() method.
     *
     * @return void
     */
    public function testSetFsSocialCollArch() {

        $obj = new TestStringFsSocialCollArchTrait();

        $obj->setFsSocialCollArch("fsSocialCollArch");
        $this->assertEquals("fsSocialCollArch", $obj->getFsSocialCollArch());
    }
}
