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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4220Trait;

/**
 * Az4220 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4220TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4220() method.
     *
     * @return void
     */
    public function testSetAz4220() {

        $obj = new TestFloatAz4220Trait();

        $obj->setAz4220(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4220());
    }
}
