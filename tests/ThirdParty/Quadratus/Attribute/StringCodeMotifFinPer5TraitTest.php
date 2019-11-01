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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifFinPer5Trait;

/**
 * Code motif fin per5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifFinPer5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifFinPer5() method.
     *
     * @return void
     */
    public function testSetCodeMotifFinPer5() {

        $obj = new TestStringCodeMotifFinPer5Trait();

        $obj->setCodeMotifFinPer5("codeMotifFinPer5");
        $this->assertEquals("codeMotifFinPer5", $obj->getCodeMotifFinPer5());
    }
}
