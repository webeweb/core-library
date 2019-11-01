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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz0990Trait;

/**
 * Az0990 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz0990TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz0990() method.
     *
     * @return void
     */
    public function testSetAz0990() {

        $obj = new TestFloatAz0990Trait();

        $obj->setAz0990(10.092018);
        $this->assertEquals(10.092018, $obj->getAz0990());
    }
}
