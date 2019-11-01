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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivTriZl3Trait;

/**
 * Niv tri zl3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivTriZl3TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivTriZl3() method.
     *
     * @return void
     */
    public function testSetNivTriZl3() {

        $obj = new TestStringNivTriZl3Trait();

        $obj->setNivTriZl3("nivTriZl3");
        $this->assertEquals("nivTriZl3", $obj->getNivTriZl3());
    }
}
