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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBic3Trait;

/**
 * B i c3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBic3TraitTest extends AbstractTestCase {

    /**
     * Tests the setBic3() method.
     *
     * @return void
     */
    public function testSetBic3() {

        $obj = new TestStringBic3Trait();

        $obj->setBic3("bic3");
        $this->assertEquals("bic3", $obj->getBic3());
    }
}
