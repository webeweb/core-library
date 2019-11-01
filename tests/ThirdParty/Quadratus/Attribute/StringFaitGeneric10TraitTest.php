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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric10Trait;

/**
 * Fait generic10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric10TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric10() method.
     *
     * @return void
     */
    public function testSetFaitGeneric10() {

        $obj = new TestStringFaitGeneric10Trait();

        $obj->setFaitGeneric10("faitGeneric10");
        $this->assertEquals("faitGeneric10", $obj->getFaitGeneric10());
    }
}
