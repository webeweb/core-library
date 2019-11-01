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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds113Trait;

/**
 * T d s113 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds113TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds113() method.
     *
     * @return void
     */
    public function testSetTds113() {

        $obj = new TestBoolTds113Trait();

        $obj->setTds113(true);
        $this->assertEquals(true, $obj->getTds113());
    }
}
