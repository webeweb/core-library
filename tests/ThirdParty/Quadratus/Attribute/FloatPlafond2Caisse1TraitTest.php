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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPlafond2Caisse1Trait;

/**
 * Plafond2 caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPlafond2Caisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPlafond2Caisse1() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse1() {

        $obj = new TestFloatPlafond2Caisse1Trait();

        $obj->setPlafond2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse1());
    }
}
