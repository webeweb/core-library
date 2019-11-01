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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibIrc2Trait;

/**
 * Code lib i r c2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibIrc2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibIrc2() method.
     *
     * @return void
     */
    public function testSetCodeLibIrc2() {

        $obj = new TestStringCodeLibIrc2Trait();

        $obj->setCodeLibIrc2("codeLibIrc2");
        $this->assertEquals("codeLibIrc2", $obj->getCodeLibIrc2());
    }
}
