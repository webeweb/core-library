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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBrut5Trait;

/**
 * Code type brut5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBrut5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBrut5() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut5() {

        $obj = new TestStringCodeTypeBrut5Trait();

        $obj->setCodeTypeBrut5("codeTypeBrut5");
        $this->assertEquals("codeTypeBrut5", $obj->getCodeTypeBrut5());
    }
}
