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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringXFerCliA2Trait;

/**
 * X fer cli a2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringXFerCliA2TraitTest extends AbstractTestCase {

    /**
     * Tests the setXFerCliA2() method.
     *
     * @return void
     */
    public function testSetXFerCliA2() {

        $obj = new TestStringXFerCliA2Trait();

        $obj->setXFerCliA2("xFerCliA2");
        $this->assertEquals("xFerCliA2", $obj->getXFerCliA2());
    }
}
