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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifFinPer4Trait;

/**
 * Code motif fin per4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifFinPer4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifFinPer4() method.
     *
     * @return void
     */
    public function testSetCodeMotifFinPer4() {

        $obj = new TestStringCodeMotifFinPer4Trait();

        $obj->setCodeMotifFinPer4("codeMotifFinPer4");
        $this->assertEquals("codeMotifFinPer4", $obj->getCodeMotifFinPer4());
    }
}
