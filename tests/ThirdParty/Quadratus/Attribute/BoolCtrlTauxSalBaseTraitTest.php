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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCtrlTauxSalBaseTrait;

/**
 * Ctrl taux sal base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCtrlTauxSalBaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setCtrlTauxSalBase() method.
     *
     * @return void
     */
    public function testSetCtrlTauxSalBase() {

        $obj = new TestBoolCtrlTauxSalBaseTrait();

        $obj->setCtrlTauxSalBase(true);
        $this->assertEquals(true, $obj->getCtrlTauxSalBase());
    }
}
