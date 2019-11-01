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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTvaFictive1Trait;

/**
 * T v a fictive1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTvaFictive1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaFictive1() method.
     *
     * @return void
     */
    public function testSetTvaFictive1() {

        $obj = new TestFloatTvaFictive1Trait();

        $obj->setTvaFictive1(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive1());
    }
}
