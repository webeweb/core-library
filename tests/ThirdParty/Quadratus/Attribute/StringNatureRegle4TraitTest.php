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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle4Trait;

/**
 * Nature regle4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle4TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle4() method.
     *
     * @return void
     */
    public function testSetNatureRegle4() {

        $obj = new TestStringNatureRegle4Trait();

        $obj->setNatureRegle4("natureRegle4");
        $this->assertEquals("natureRegle4", $obj->getNatureRegle4());
    }
}
