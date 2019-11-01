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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifFinPer2Trait;

/**
 * Code motif fin per2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifFinPer2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifFinPer2() method.
     *
     * @return void
     */
    public function testSetCodeMotifFinPer2() {

        $obj = new TestStringCodeMotifFinPer2Trait();

        $obj->setCodeMotifFinPer2("codeMotifFinPer2");
        $this->assertEquals("codeMotifFinPer2", $obj->getCodeMotifFinPer2());
    }
}
