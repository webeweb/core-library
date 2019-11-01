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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeRemplDefautTrait;

/**
 * Type rempl defaut trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeRemplDefautTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeRemplDefaut() method.
     *
     * @return void
     */
    public function testSetTypeRemplDefaut() {

        $obj = new TestStringTypeRemplDefautTrait();

        $obj->setTypeRemplDefaut("typeRemplDefaut");
        $this->assertEquals("typeRemplDefaut", $obj->getTypeRemplDefaut());
    }
}
