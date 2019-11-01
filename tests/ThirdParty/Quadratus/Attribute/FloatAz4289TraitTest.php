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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4289Trait;

/**
 * Az4289 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4289TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4289() method.
     *
     * @return void
     */
    public function testSetAz4289() {

        $obj = new TestFloatAz4289Trait();

        $obj->setAz4289(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289());
    }
}
