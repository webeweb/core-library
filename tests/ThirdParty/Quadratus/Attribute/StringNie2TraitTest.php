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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNie2Trait;

/**
 * N i e2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNie2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNie2() method.
     *
     * @return void
     */
    public function testSetNie2() {

        $obj = new TestStringNie2Trait();

        $obj->setNie2("nie2");
        $this->assertEquals("nie2", $obj->getNie2());
    }
}
