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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivTriZl2Trait;

/**
 * Niv tri zl2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivTriZl2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivTriZl2() method.
     *
     * @return void
     */
    public function testSetNivTriZl2() {

        $obj = new TestStringNivTriZl2Trait();

        $obj->setNivTriZl2("nivTriZl2");
        $this->assertEquals("nivTriZl2", $obj->getNivTriZl2());
    }
}
