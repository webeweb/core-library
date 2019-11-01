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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringJfType2Trait;

/**
 * J f type2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringJfType2TraitTest extends AbstractTestCase {

    /**
     * Tests the setJfType2() method.
     *
     * @return void
     */
    public function testSetJfType2() {

        $obj = new TestStringJfType2Trait();

        $obj->setJfType2("jfType2");
        $this->assertEquals("jfType2", $obj->getJfType2());
    }
}
