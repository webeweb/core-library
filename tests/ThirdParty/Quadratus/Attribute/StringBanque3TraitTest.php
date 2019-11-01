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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBanque3Trait;

/**
 * Banque3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBanque3TraitTest extends AbstractTestCase {

    /**
     * Tests the setBanque3() method.
     *
     * @return void
     */
    public function testSetBanque3() {

        $obj = new TestStringBanque3Trait();

        $obj->setBanque3("banque3");
        $this->assertEquals("banque3", $obj->getBanque3());
    }
}
