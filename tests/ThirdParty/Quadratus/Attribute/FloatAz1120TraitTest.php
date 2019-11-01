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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz1120Trait;

/**
 * Az1120 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz1120TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz1120() method.
     *
     * @return void
     */
    public function testSetAz1120() {

        $obj = new TestFloatAz1120Trait();

        $obj->setAz1120(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1120());
    }
}
