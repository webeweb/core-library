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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4271Trait;

/**
 * Az4271 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4271TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4271() method.
     *
     * @return void
     */
    public function testSetAz4271() {

        $obj = new TestFloatAz4271Trait();

        $obj->setAz4271(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271());
    }
}
