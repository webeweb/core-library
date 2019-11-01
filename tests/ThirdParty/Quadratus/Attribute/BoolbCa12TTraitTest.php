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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolbCa12TTrait;

/**
 * b ca12 t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolbCa12TTraitTest extends AbstractTestCase {

    /**
     * Tests the setbCa12T() method.
     *
     * @return void
     */
    public function testSetbCa12T() {

        $obj = new TestBoolbCa12TTrait();

        $obj->setbCa12T(true);
        $this->assertEquals(true, $obj->getbCa12T());
    }
}
