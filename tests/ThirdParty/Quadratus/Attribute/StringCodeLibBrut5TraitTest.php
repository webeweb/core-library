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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibBrut5Trait;

/**
 * Code lib brut5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibBrut5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibBrut5() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut5() {

        $obj = new TestStringCodeLibBrut5Trait();

        $obj->setCodeLibBrut5("codeLibBrut5");
        $this->assertEquals("codeLibBrut5", $obj->getCodeLibBrut5());
    }
}
