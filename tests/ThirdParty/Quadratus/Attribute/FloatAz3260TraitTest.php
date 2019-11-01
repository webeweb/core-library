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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz3260Trait;

/**
 * Az3260 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz3260TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz3260() method.
     *
     * @return void
     */
    public function testSetAz3260() {

        $obj = new TestFloatAz3260Trait();

        $obj->setAz3260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3260());
    }
}
