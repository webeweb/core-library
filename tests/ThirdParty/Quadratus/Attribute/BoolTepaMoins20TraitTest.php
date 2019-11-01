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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTepaMoins20Trait;

/**
 * T e p a moins20 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTepaMoins20TraitTest extends AbstractTestCase {

    /**
     * Tests the setTepaMoins20() method.
     *
     * @return void
     */
    public function testSetTepaMoins20() {

        $obj = new TestBoolTepaMoins20Trait();

        $obj->setTepaMoins20(true);
        $this->assertEquals(true, $obj->getTepaMoins20());
    }
}
