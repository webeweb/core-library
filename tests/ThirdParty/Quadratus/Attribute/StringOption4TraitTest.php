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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringOption4Trait;

/**
 * Option4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringOption4TraitTest extends AbstractTestCase {

    /**
     * Tests the setOption4() method.
     *
     * @return void
     */
    public function testSetOption4() {

        $obj = new TestStringOption4Trait();

        $obj->setOption4("option4");
        $this->assertEquals("option4", $obj->getOption4());
    }
}
