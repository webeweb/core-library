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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolMessageVuTrait;

/**
 * Message vu trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolMessageVuTraitTest extends AbstractTestCase {

    /**
     * Tests the setMessageVu() method.
     *
     * @return void
     */
    public function testSetMessageVu() {

        $obj = new TestBoolMessageVuTrait();

        $obj->setMessageVu(true);
        $this->assertEquals(true, $obj->getMessageVu());
    }
}
