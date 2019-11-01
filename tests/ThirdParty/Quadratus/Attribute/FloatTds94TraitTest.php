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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTds94Trait;

/**
 * T d s94 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTds94TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds94() method.
     *
     * @return void
     */
    public function testSetTds94() {

        $obj = new TestFloatTds94Trait();

        $obj->setTds94(10.092018);
        $this->assertEquals(10.092018, $obj->getTds94());
    }
}
