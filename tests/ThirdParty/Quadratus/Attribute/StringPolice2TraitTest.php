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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPolice2Trait;

/**
 * Police2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPolice2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPolice2() method.
     *
     * @return void
     */
    public function testSetPolice2() {

        $obj = new TestStringPolice2Trait();

        $obj->setPolice2("police2");
        $this->assertEquals("police2", $obj->getPolice2());
    }
}
