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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaE4DrTrait;

/**
 * Tva e4 d r trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaE4DrTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4Dr() method.
     *
     * @return void
     */
    public function testSetTvaE4Dr() {

        $obj = new TestStringTvaE4DrTrait();

        $obj->setTvaE4Dr("tvaE4Dr");
        $this->assertEquals("tvaE4Dr", $obj->getTvaE4Dr());
    }
}
