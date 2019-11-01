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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFsComptaCollArchTrait;

/**
 * F s_ compta_ coll arch trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFsComptaCollArchTraitTest extends AbstractTestCase {

    /**
     * Tests the setFsComptaCollArch() method.
     *
     * @return void
     */
    public function testSetFsComptaCollArch() {

        $obj = new TestStringFsComptaCollArchTrait();

        $obj->setFsComptaCollArch("fsComptaCollArch");
        $this->assertEquals("fsComptaCollArch", $obj->getFsComptaCollArch());
    }
}
