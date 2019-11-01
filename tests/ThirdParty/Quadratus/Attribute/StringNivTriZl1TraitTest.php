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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivTriZl1Trait;

/**
 * Niv tri zl1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivTriZl1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivTriZl1() method.
     *
     * @return void
     */
    public function testSetNivTriZl1() {

        $obj = new TestStringNivTriZl1Trait();

        $obj->setNivTriZl1("nivTriZl1");
        $this->assertEquals("nivTriZl1", $obj->getNivTriZl1());
    }
}
