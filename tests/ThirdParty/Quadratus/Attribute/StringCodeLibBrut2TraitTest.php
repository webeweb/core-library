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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibBrut2Trait;

/**
 * Code lib brut2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibBrut2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibBrut2() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut2() {

        $obj = new TestStringCodeLibBrut2Trait();

        $obj->setCodeLibBrut2("codeLibBrut2");
        $this->assertEquals("codeLibBrut2", $obj->getCodeLibBrut2());
    }
}
