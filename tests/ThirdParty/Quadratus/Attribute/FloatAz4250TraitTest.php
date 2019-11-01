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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4250Trait;

/**
 * Az4250 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4250TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4250() method.
     *
     * @return void
     */
    public function testSetAz4250() {

        $obj = new TestFloatAz4250Trait();

        $obj->setAz4250(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4250());
    }
}
