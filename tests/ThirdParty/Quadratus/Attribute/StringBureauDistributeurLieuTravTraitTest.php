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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBureauDistributeurLieuTravTrait;

/**
 * Bureau distributeur lieu trav trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBureauDistributeurLieuTravTraitTest extends AbstractTestCase {

    /**
     * Tests the setBureauDistributeurLieuTrav() method.
     *
     * @return void
     */
    public function testSetBureauDistributeurLieuTrav() {

        $obj = new TestStringBureauDistributeurLieuTravTrait();

        $obj->setBureauDistributeurLieuTrav("bureauDistributeurLieuTrav");
        $this->assertEquals("bureauDistributeurLieuTrav", $obj->getBureauDistributeurLieuTrav());
    }
}
