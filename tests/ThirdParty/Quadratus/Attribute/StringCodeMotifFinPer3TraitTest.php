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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifFinPer3Trait;

/**
 * Code motif fin per3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifFinPer3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifFinPer3() method.
     *
     * @return void
     */
    public function testSetCodeMotifFinPer3() {

        $obj = new TestStringCodeMotifFinPer3Trait();

        $obj->setCodeMotifFinPer3("codeMotifFinPer3");
        $this->assertEquals("codeMotifFinPer3", $obj->getCodeMotifFinPer3());
    }
}
