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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMttEmpruntsTrait;

/**
 * Mtt emprunts trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMttEmpruntsTraitTest extends AbstractTestCase {

    /**
     * Tests the setMttEmprunts() method.
     *
     * @return void
     */
    public function testSetMttEmprunts() {

        $obj = new TestFloatMttEmpruntsTrait();

        $obj->setMttEmprunts(10.092018);
        $this->assertEquals(10.092018, $obj->getMttEmprunts());
    }
}
