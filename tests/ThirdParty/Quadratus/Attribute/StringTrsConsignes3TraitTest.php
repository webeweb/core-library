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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsConsignes3Trait;

/**
 * T r s consignes3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsConsignes3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsConsignes3() method.
     *
     * @return void
     */
    public function testSetTrsConsignes3() {

        $obj = new TestStringTrsConsignes3Trait();

        $obj->setTrsConsignes3("trsConsignes3");
        $this->assertEquals("trsConsignes3", $obj->getTrsConsignes3());
    }
}
