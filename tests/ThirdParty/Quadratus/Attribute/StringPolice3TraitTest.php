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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPolice3Trait;

/**
 * Police3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPolice3TraitTest extends AbstractTestCase {

    /**
     * Tests the setPolice3() method.
     *
     * @return void
     */
    public function testSetPolice3() {

        $obj = new TestStringPolice3Trait();

        $obj->setPolice3("police3");
        $this->assertEquals("police3", $obj->getPolice3());
    }
}
