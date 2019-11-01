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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeDatTrait;

/**
 * Type d a t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeDatTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeDat() method.
     *
     * @return void
     */
    public function testSetTypeDat() {

        $obj = new TestStringTypeDatTrait();

        $obj->setTypeDat("typeDat");
        $this->assertEquals("typeDat", $obj->getTypeDat());
    }
}
