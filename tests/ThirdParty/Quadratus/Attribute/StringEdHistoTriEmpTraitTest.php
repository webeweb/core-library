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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEdHistoTriEmpTrait;

/**
 * Ed histo tri emp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEdHistoTriEmpTraitTest extends AbstractTestCase {

    /**
     * Tests the setEdHistoTriEmp() method.
     *
     * @return void
     */
    public function testSetEdHistoTriEmp() {

        $obj = new TestStringEdHistoTriEmpTrait();

        $obj->setEdHistoTriEmp("edHistoTriEmp");
        $this->assertEquals("edHistoTriEmp", $obj->getEdHistoTriEmp());
    }
}
