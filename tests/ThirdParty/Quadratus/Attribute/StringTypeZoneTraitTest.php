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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeZoneTrait;

/**
 * Type zone trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeZoneTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeZone() method.
     *
     * @return void
     */
    public function testSetTypeZone() {

        $obj = new TestStringTypeZoneTrait();

        $obj->setTypeZone("typeZone");
        $this->assertEquals("typeZone", $obj->getTypeZone());
    }
}
