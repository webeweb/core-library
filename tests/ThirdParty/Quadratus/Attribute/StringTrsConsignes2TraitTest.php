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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsConsignes2Trait;

/**
 * T r s consignes2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsConsignes2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsConsignes2() method.
     *
     * @return void
     */
    public function testSetTrsConsignes2() {

        $obj = new TestStringTrsConsignes2Trait();

        $obj->setTrsConsignes2("trsConsignes2");
        $this->assertEquals("trsConsignes2", $obj->getTrsConsignes2());
    }
}
