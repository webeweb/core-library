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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBrut4Trait;

/**
 * Code type brut4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBrut4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBrut4() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut4() {

        $obj = new TestStringCodeTypeBrut4Trait();

        $obj->setCodeTypeBrut4("codeTypeBrut4");
        $this->assertEquals("codeTypeBrut4", $obj->getCodeTypeBrut4());
    }
}
