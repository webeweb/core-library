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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifDebPer3Trait;

/**
 * Code motif deb per3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifDebPer3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifDebPer3() method.
     *
     * @return void
     */
    public function testSetCodeMotifDebPer3() {

        $obj = new TestStringCodeMotifDebPer3Trait();

        $obj->setCodeMotifDebPer3("codeMotifDebPer3");
        $this->assertEquals("codeMotifDebPer3", $obj->getCodeMotifDebPer3());
    }
}
