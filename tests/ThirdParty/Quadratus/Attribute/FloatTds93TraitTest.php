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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTds93Trait;

/**
 * T d s93 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTds93TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds93() method.
     *
     * @return void
     */
    public function testSetTds93() {

        $obj = new TestFloatTds93Trait();

        $obj->setTds93(10.092018);
        $this->assertEquals(10.092018, $obj->getTds93());
    }
}
