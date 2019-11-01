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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif2SensTrait;

/**
 * T r s code tarif2 sens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif2SensTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif2Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif2Sens() {

        $obj = new TestStringTrsCodeTarif2SensTrait();

        $obj->setTrsCodeTarif2Sens("trsCodeTarif2Sens");
        $this->assertEquals("trsCodeTarif2Sens", $obj->getTrsCodeTarif2Sens());
    }
}
