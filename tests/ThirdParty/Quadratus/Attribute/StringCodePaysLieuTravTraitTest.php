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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePaysLieuTravTrait;

/**
 * Code pays lieu trav trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePaysLieuTravTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePaysLieuTrav() method.
     *
     * @return void
     */
    public function testSetCodePaysLieuTrav() {

        $obj = new TestStringCodePaysLieuTravTrait();

        $obj->setCodePaysLieuTrav("codePaysLieuTrav");
        $this->assertEquals("codePaysLieuTrav", $obj->getCodePaysLieuTrav());
    }
}
