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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringOption3Trait;

/**
 * Option3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringOption3TraitTest extends AbstractTestCase {

    /**
     * Tests the setOption3() method.
     *
     * @return void
     */
    public function testSetOption3() {

        $obj = new TestStringOption3Trait();

        $obj->setOption3("option3");
        $this->assertEquals("option3", $obj->getOption3());
    }
}
