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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolExclureLoiTepaPartPTrait;

/**
 * Exclure loi t e p a part p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolExclureLoiTepaPartPTraitTest extends AbstractTestCase {

    /**
     * Tests the setExclureLoiTepaPartP() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepaPartP() {

        $obj = new TestBoolExclureLoiTepaPartPTrait();

        $obj->setExclureLoiTepaPartP(true);
        $this->assertEquals(true, $obj->getExclureLoiTepaPartP());
    }
}
