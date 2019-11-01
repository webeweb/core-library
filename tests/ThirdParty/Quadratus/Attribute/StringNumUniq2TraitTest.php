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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumUniq2Trait;

/**
 * Num uniq2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumUniq2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumUniq2() method.
     *
     * @return void
     */
    public function testSetNumUniq2() {

        $obj = new TestStringNumUniq2Trait();

        $obj->setNumUniq2("numUniq2");
        $this->assertEquals("numUniq2", $obj->getNumUniq2());
    }
}
