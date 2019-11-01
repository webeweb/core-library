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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNature1Trait;

/**
 * Nature1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNature1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNature1() method.
     *
     * @return void
     */
    public function testSetNature1() {

        $obj = new TestStringNature1Trait();

        $obj->setNature1("nature1");
        $this->assertEquals("nature1", $obj->getNature1());
    }
}
