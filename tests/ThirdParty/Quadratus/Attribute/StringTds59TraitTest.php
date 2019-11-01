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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds59Trait;

/**
 * T d s59 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds59TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds59() method.
     *
     * @return void
     */
    public function testSetTds59() {

        $obj = new TestStringTds59Trait();

        $obj->setTds59("tds59");
        $this->assertEquals("tds59", $obj->getTds59());
    }
}
