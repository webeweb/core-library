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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAvenantTrait;

/**
 * Type avenant trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAvenantTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAvenant() method.
     *
     * @return void
     */
    public function testSetTypeAvenant() {

        $obj = new TestStringTypeAvenantTrait();

        $obj->setTypeAvenant("typeAvenant");
        $this->assertEquals("typeAvenant", $obj->getTypeAvenant());
    }
}
