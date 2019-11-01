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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds121Trait;

/**
 * T d s121 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds121TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds121() method.
     *
     * @return void
     */
    public function testSetTds121() {

        $obj = new TestBoolTds121Trait();

        $obj->setTds121(true);
        $this->assertEquals(true, $obj->getTds121());
    }
}
