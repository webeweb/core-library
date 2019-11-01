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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsConsignes1Trait;

/**
 * T r s consignes1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsConsignes1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsConsignes1() method.
     *
     * @return void
     */
    public function testSetTrsConsignes1() {

        $obj = new TestStringTrsConsignes1Trait();

        $obj->setTrsConsignes1("trsConsignes1");
        $this->assertEquals("trsConsignes1", $obj->getTrsConsignes1());
    }
}
