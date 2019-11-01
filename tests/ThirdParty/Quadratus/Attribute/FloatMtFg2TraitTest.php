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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtFg2Trait;

/**
 * Mt f g2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtFg2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtFg2() method.
     *
     * @return void
     */
    public function testSetMtFg2() {

        $obj = new TestFloatMtFg2Trait();

        $obj->setMtFg2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtFg2());
    }
}
