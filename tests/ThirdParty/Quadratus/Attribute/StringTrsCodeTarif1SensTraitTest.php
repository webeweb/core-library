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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif1SensTrait;

/**
 * T r s code tarif1 sens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif1SensTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif1Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif1Sens() {

        $obj = new TestStringTrsCodeTarif1SensTrait();

        $obj->setTrsCodeTarif1Sens("trsCodeTarif1Sens");
        $this->assertEquals("trsCodeTarif1Sens", $obj->getTrsCodeTarif1Sens());
    }
}
