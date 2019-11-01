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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBic2Trait;

/**
 * B i c2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBic2TraitTest extends AbstractTestCase {

    /**
     * Tests the setBic2() method.
     *
     * @return void
     */
    public function testSetBic2() {

        $obj = new TestStringBic2Trait();

        $obj->setBic2("bic2");
        $this->assertEquals("bic2", $obj->getBic2());
    }
}
