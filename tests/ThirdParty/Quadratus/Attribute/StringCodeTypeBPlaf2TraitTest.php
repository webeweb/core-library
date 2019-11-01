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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBPlaf2Trait;

/**
 * Code type b plaf2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBPlaf2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBPlaf2() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf2() {

        $obj = new TestStringCodeTypeBPlaf2Trait();

        $obj->setCodeTypeBPlaf2("codeTypeBPlaf2");
        $this->assertEquals("codeTypeBPlaf2", $obj->getCodeTypeBPlaf2());
    }
}
