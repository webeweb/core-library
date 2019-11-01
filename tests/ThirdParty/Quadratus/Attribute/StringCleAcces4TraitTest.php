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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces4Trait;

/**
 * Cle acces4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces4() method.
     *
     * @return void
     */
    public function testSetCleAcces4() {

        $obj = new TestStringCleAcces4Trait();

        $obj->setCleAcces4("cleAcces4");
        $this->assertEquals("cleAcces4", $obj->getCleAcces4());
    }
}
