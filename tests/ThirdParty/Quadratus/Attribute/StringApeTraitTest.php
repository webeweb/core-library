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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringApeTrait;

/**
 * A p e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringApeTraitTest extends AbstractTestCase {

    /**
     * Tests the setApe() method.
     *
     * @return void
     */
    public function testSetApe() {

        $obj = new TestStringApeTrait();

        $obj->setApe("ape");
        $this->assertEquals("ape", $obj->getApe());
    }
}
