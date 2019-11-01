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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitDas2Trait;

/**
 * Fait d a s2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitDas2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitDas2() method.
     *
     * @return void
     */
    public function testSetFaitDas2() {

        $obj = new TestStringFaitDas2Trait();

        $obj->setFaitDas2("faitDas2");
        $this->assertEquals("faitDas2", $obj->getFaitDas2());
    }
}
