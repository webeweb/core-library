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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAcces5Trait;

/**
 * Cle acces5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAcces5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAcces5() method.
     *
     * @return void
     */
    public function testSetCleAcces5() {

        $obj = new TestStringCleAcces5Trait();

        $obj->setCleAcces5("cleAcces5");
        $this->assertEquals("cleAcces5", $obj->getCleAcces5());
    }
}
