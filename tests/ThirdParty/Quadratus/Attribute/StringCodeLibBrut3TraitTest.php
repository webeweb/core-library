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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibBrut3Trait;

/**
 * Code lib brut3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibBrut3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibBrut3() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut3() {

        $obj = new TestStringCodeLibBrut3Trait();

        $obj->setCodeLibBrut3("codeLibBrut3");
        $this->assertEquals("codeLibBrut3", $obj->getCodeLibBrut3());
    }
}
