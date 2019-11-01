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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeNaf2Trait;

/**
 * Code naf2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeNaf2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeNaf2() method.
     *
     * @return void
     */
    public function testSetCodeNaf2() {

        $obj = new TestStringCodeNaf2Trait();

        $obj->setCodeNaf2("codeNaf2");
        $this->assertEquals("codeNaf2", $obj->getCodeNaf2());
    }
}
