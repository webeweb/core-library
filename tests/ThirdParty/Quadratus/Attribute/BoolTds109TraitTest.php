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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds109Trait;

/**
 * T d s109 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds109TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds109() method.
     *
     * @return void
     */
    public function testSetTds109() {

        $obj = new TestBoolTds109Trait();

        $obj->setTds109(true);
        $this->assertEquals(true, $obj->getTds109());
    }
}
