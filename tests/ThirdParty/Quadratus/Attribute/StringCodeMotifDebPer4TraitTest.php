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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifDebPer4Trait;

/**
 * Code motif deb per4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifDebPer4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifDebPer4() method.
     *
     * @return void
     */
    public function testSetCodeMotifDebPer4() {

        $obj = new TestStringCodeMotifDebPer4Trait();

        $obj->setCodeMotifDebPer4("codeMotifDebPer4");
        $this->assertEquals("codeMotifDebPer4", $obj->getCodeMotifDebPer4());
    }
}
