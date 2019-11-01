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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz1010Trait;

/**
 * Az1010 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz1010TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz1010() method.
     *
     * @return void
     */
    public function testSetAz1010() {

        $obj = new TestFloatAz1010Trait();

        $obj->setAz1010(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1010());
    }
}
