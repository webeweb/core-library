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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle10Trait;

/**
 * Nature regle10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle10TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle10() method.
     *
     * @return void
     */
    public function testSetNatureRegle10() {

        $obj = new TestStringNatureRegle10Trait();

        $obj->setNatureRegle10("natureRegle10");
        $this->assertEquals("natureRegle10", $obj->getNatureRegle10());
    }
}
