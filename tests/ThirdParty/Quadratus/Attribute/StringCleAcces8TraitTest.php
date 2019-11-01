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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces8Trait;

/**
 * Cle acces8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces8() method.
     *
     * @return void
     */
    public function testSetCleAcces8() {

        $obj = new TestStringCleAcces8Trait();

        $obj->setCleAcces8("cleAcces8");
        $this->assertEquals("cleAcces8", $obj->getCleAcces8());
    }
}
