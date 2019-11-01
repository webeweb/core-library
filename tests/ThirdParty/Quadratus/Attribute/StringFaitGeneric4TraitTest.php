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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric4Trait;

/**
 * Fait generic4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric4TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric4() method.
     *
     * @return void
     */
    public function testSetFaitGeneric4() {

        $obj = new TestStringFaitGeneric4Trait();

        $obj->setFaitGeneric4("faitGeneric4");
        $this->assertEquals("faitGeneric4", $obj->getFaitGeneric4());
    }
}
