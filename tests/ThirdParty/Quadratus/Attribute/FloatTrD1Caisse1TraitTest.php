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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTrD1Caisse1Trait;

/**
 * Tr d1 caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTrD1Caisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetTrD1Caisse1() {

        $obj = new TestFloatTrD1Caisse1Trait();

        $obj->setTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrD1Caisse1());
    }
}
