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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces10Trait;

/**
 * Cle acces10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces10TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces10() method.
     *
     * @return void
     */
    public function testSetCleAcces10() {

        $obj = new TestStringCleAcces10Trait();

        $obj->setCleAcces10("cleAcces10");
        $this->assertEquals("cleAcces10", $obj->getCleAcces10());
    }
}
