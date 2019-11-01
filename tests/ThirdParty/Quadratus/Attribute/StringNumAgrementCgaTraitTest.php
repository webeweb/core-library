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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumAgrementCgaTrait;

/**
 * Num agrement c g a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumAgrementCgaTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumAgrementCga() method.
     *
     * @return void
     */
    public function testSetNumAgrementCga() {

        $obj = new TestStringNumAgrementCgaTrait();

        $obj->setNumAgrementCga("numAgrementCga");
        $this->assertEquals("numAgrementCga", $obj->getNumAgrementCga());
    }
}
