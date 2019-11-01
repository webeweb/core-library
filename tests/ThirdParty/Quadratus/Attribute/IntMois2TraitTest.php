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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMois2Trait;

/**
 * Mois2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMois2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMois2() method.
     *
     * @return void
     */
    public function testSetMois2() {

        $obj = new TestIntMois2Trait();

        $obj->setMois2(10);
        $this->assertEquals(10, $obj->getMois2());
    }
}
