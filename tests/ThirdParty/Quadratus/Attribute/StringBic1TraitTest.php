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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBic1Trait;

/**
 * B i c1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBic1TraitTest extends AbstractTestCase {

    /**
     * Tests the setBic1() method.
     *
     * @return void
     */
    public function testSetBic1() {

        $obj = new TestStringBic1Trait();

        $obj->setBic1("bic1");
        $this->assertEquals("bic1", $obj->getBic1());
    }
}
