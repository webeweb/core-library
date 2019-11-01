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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4252Trait;

/**
 * Az4252 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4252TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4252() method.
     *
     * @return void
     */
    public function testSetAz4252() {

        $obj = new TestFloatAz4252Trait();

        $obj->setAz4252(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252());
    }
}
