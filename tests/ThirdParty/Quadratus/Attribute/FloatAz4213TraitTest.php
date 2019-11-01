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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4213Trait;

/**
 * Az4213 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4213TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4213() method.
     *
     * @return void
     */
    public function testSetAz4213() {

        $obj = new TestFloatAz4213Trait();

        $obj->setAz4213(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4213());
    }
}
