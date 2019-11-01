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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef1Trait;

/**
 * Code ref1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef1() method.
     *
     * @return void
     */
    public function testSetCodeRef1() {

        $obj = new TestStringCodeRef1Trait();

        $obj->setCodeRef1("codeRef1");
        $this->assertEquals("codeRef1", $obj->getCodeRef1());
    }
}
