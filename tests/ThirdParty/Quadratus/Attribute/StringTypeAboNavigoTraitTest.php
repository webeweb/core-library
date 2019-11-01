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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAboNavigoTrait;

/**
 * Type abo navigo trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAboNavigoTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAboNavigo() method.
     *
     * @return void
     */
    public function testSetTypeAboNavigo() {

        $obj = new TestStringTypeAboNavigoTrait();

        $obj->setTypeAboNavigo("typeAboNavigo");
        $this->assertEquals("typeAboNavigo", $obj->getTypeAboNavigo());
    }
}
