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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric5Trait;

/**
 * Fait generic5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric5TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric5() method.
     *
     * @return void
     */
    public function testSetFaitGeneric5() {

        $obj = new TestStringFaitGeneric5Trait();

        $obj->setFaitGeneric5("faitGeneric5");
        $this->assertEquals("faitGeneric5", $obj->getFaitGeneric5());
    }
}
