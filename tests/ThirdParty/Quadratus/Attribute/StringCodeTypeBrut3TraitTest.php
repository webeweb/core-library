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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBrut3Trait;

/**
 * Code type brut3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBrut3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBrut3() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut3() {

        $obj = new TestStringCodeTypeBrut3Trait();

        $obj->setCodeTypeBrut3("codeTypeBrut3");
        $this->assertEquals("codeTypeBrut3", $obj->getCodeTypeBrut3());
    }
}
