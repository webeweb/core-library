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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegime1Trait;

/**
 * Code regime1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegime1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegime1() method.
     *
     * @return void
     */
    public function testSetCodeRegime1() {

        $obj = new TestStringCodeRegime1Trait();

        $obj->setCodeRegime1("codeRegime1");
        $this->assertEquals("codeRegime1", $obj->getCodeRegime1());
    }
}
