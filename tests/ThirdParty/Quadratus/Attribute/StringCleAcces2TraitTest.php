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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces2Trait;

/**
 * Cle acces2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces2() method.
     *
     * @return void
     */
    public function testSetCleAcces2() {

        $obj = new TestStringCleAcces2Trait();

        $obj->setCleAcces2("cleAcces2");
        $this->assertEquals("cleAcces2", $obj->getCleAcces2());
    }
}
