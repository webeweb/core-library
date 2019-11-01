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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBPlaf3Trait;

/**
 * Code type b plaf3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBPlaf3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBPlaf3() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf3() {

        $obj = new TestStringCodeTypeBPlaf3Trait();

        $obj->setCodeTypeBPlaf3("codeTypeBPlaf3");
        $this->assertEquals("codeTypeBPlaf3", $obj->getCodeTypeBPlaf3());
    }
}
