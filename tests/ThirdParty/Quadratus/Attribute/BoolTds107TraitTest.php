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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds107Trait;

/**
 * T d s107 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds107TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds107() method.
     *
     * @return void
     */
    public function testSetTds107() {

        $obj = new TestBoolTds107Trait();

        $obj->setTds107(true);
        $this->assertEquals(true, $obj->getTds107());
    }
}
