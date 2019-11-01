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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringReference3Trait;

/**
 * Reference3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringReference3TraitTest extends AbstractTestCase {

    /**
     * Tests the setReference3() method.
     *
     * @return void
     */
    public function testSetReference3() {

        $obj = new TestStringReference3Trait();

        $obj->setReference3("reference3");
        $this->assertEquals("reference3", $obj->getReference3());
    }
}
