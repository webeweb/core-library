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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringACorres5Trait;

/**
 * A corres5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringACorres5TraitTest extends AbstractTestCase {

    /**
     * Tests the setACorres5() method.
     *
     * @return void
     */
    public function testSetACorres5() {

        $obj = new TestStringACorres5Trait();

        $obj->setACorres5("aCorres5");
        $this->assertEquals("aCorres5", $obj->getACorres5());
    }
}
