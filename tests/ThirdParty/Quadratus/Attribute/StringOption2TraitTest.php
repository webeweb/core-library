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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringOption2Trait;

/**
 * Option2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringOption2TraitTest extends AbstractTestCase {

    /**
     * Tests the setOption2() method.
     *
     * @return void
     */
    public function testSetOption2() {

        $obj = new TestStringOption2Trait();

        $obj->setOption2("option2");
        $this->assertEquals("option2", $obj->getOption2());
    }
}
