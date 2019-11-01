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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureMenu4Trait;

/**
 * Nature menu4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureMenu4TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureMenu4() method.
     *
     * @return void
     */
    public function testSetNatureMenu4() {

        $obj = new TestStringNatureMenu4Trait();

        $obj->setNatureMenu4("natureMenu4");
        $this->assertEquals("natureMenu4", $obj->getNatureMenu4());
    }
}
