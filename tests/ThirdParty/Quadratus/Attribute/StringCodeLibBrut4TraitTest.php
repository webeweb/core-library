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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibBrut4Trait;

/**
 * Code lib brut4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibBrut4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibBrut4() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut4() {

        $obj = new TestStringCodeLibBrut4Trait();

        $obj->setCodeLibBrut4("codeLibBrut4");
        $this->assertEquals("codeLibBrut4", $obj->getCodeLibBrut4());
    }
}
