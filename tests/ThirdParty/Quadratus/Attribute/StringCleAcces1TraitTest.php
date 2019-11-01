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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces1Trait;

/**
 * Cle acces1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces1() method.
     *
     * @return void
     */
    public function testSetCleAcces1() {

        $obj = new TestStringCleAcces1Trait();

        $obj->setCleAcces1("cleAcces1");
        $this->assertEquals("cleAcces1", $obj->getCleAcces1());
    }
}
