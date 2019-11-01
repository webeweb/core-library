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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPolice1Trait;

/**
 * Police1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPolice1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPolice1() method.
     *
     * @return void
     */
    public function testSetPolice1() {

        $obj = new TestStringPolice1Trait();

        $obj->setPolice1("police1");
        $this->assertEquals("police1", $obj->getPolice1());
    }
}
