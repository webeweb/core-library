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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegroup1Trait;

/**
 * Code regroup1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegroup1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegroup1() method.
     *
     * @return void
     */
    public function testSetCodeRegroup1() {

        $obj = new TestStringCodeRegroup1Trait();

        $obj->setCodeRegroup1("codeRegroup1");
        $this->assertEquals("codeRegroup1", $obj->getCodeRegroup1());
    }
}
