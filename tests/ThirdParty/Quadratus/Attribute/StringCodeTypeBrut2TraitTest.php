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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBrut2Trait;

/**
 * Code type brut2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBrut2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBrut2() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut2() {

        $obj = new TestStringCodeTypeBrut2Trait();

        $obj->setCodeTypeBrut2("codeTypeBrut2");
        $this->assertEquals("codeTypeBrut2", $obj->getCodeTypeBrut2());
    }
}
