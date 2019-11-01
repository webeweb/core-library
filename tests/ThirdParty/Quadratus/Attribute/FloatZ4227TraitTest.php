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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ4227Trait;

/**
 * z4227 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ4227TraitTest extends AbstractTestCase {

    /**
     * Tests the setZ4227() method.
     *
     * @return void
     */
    public function testSetZ4227() {

        $obj = new TestFloatZ4227Trait();

        $obj->setZ4227(10.092018);
        $this->assertEquals(10.092018, $obj->getZ4227());
    }
}
