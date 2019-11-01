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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBanque1Trait;

/**
 * Banque1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBanque1TraitTest extends AbstractTestCase {

    /**
     * Tests the setBanque1() method.
     *
     * @return void
     */
    public function testSetBanque1() {

        $obj = new TestStringBanque1Trait();

        $obj->setBanque1("banque1");
        $this->assertEquals("banque1", $obj->getBanque1());
    }
}
