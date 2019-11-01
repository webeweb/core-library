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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypePrepDadsuTrait;

/**
 * Type prep d a d s u trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypePrepDadsuTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypePrepDadsu() method.
     *
     * @return void
     */
    public function testSetTypePrepDadsu() {

        $obj = new TestStringTypePrepDadsuTrait();

        $obj->setTypePrepDadsu("typePrepDadsu");
        $this->assertEquals("typePrepDadsu", $obj->getTypePrepDadsu());
    }
}
