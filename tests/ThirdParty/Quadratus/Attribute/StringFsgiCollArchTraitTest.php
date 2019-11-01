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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFsgiCollArchTrait;

/**
 * F s_ g i_ coll arch trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFsgiCollArchTraitTest extends AbstractTestCase {

    /**
     * Tests the setFsgiCollArch() method.
     *
     * @return void
     */
    public function testSetFsgiCollArch() {

        $obj = new TestStringFsgiCollArchTrait();

        $obj->setFsgiCollArch("fsgiCollArch");
        $this->assertEquals("fsgiCollArch", $obj->getFsgiCollArch());
    }
}
