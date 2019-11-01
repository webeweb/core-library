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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolGestCalcNetPayeTrait;

/**
 * Gest calc net paye trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolGestCalcNetPayeTraitTest extends AbstractTestCase {

    /**
     * Tests the setGestCalcNetPaye() method.
     *
     * @return void
     */
    public function testSetGestCalcNetPaye() {

        $obj = new TestBoolGestCalcNetPayeTrait();

        $obj->setGestCalcNetPaye(true);
        $this->assertEquals(true, $obj->getGestCalcNetPaye());
    }
}
