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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBPlaf5Trait;

/**
 * Code type b plaf5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBPlaf5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBPlaf5() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf5() {

        $obj = new TestStringCodeTypeBPlaf5Trait();

        $obj->setCodeTypeBPlaf5("codeTypeBPlaf5");
        $this->assertEquals("codeTypeBPlaf5", $obj->getCodeTypeBPlaf5());
    }
}
