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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsuNumAgrAnspTrait;

/**
 * D a d s u num agr a n s p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsuNumAgrAnspTraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsuNumAgrAnsp() method.
     *
     * @return void
     */
    public function testSetDadsuNumAgrAnsp() {

        $obj = new TestStringDadsuNumAgrAnspTrait();

        $obj->setDadsuNumAgrAnsp("dadsuNumAgrAnsp");
        $this->assertEquals("dadsuNumAgrAnsp", $obj->getDadsuNumAgrAnsp());
    }
}
