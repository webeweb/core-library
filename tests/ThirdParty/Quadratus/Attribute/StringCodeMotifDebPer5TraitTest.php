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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifDebPer5Trait;

/**
 * Code motif deb per5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifDebPer5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifDebPer5() method.
     *
     * @return void
     */
    public function testSetCodeMotifDebPer5() {

        $obj = new TestStringCodeMotifDebPer5Trait();

        $obj->setCodeMotifDebPer5("codeMotifDebPer5");
        $this->assertEquals("codeMotifDebPer5", $obj->getCodeMotifDebPer5());
    }
}
