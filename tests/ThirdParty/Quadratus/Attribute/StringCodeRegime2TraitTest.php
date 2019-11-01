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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegime2Trait;

/**
 * Code regime2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegime2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegime2() method.
     *
     * @return void
     */
    public function testSetCodeRegime2() {

        $obj = new TestStringCodeRegime2Trait();

        $obj->setCodeRegime2("codeRegime2");
        $this->assertEquals("codeRegime2", $obj->getCodeRegime2());
    }
}
