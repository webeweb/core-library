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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif4SensTrait;

/**
 * T r s code tarif4 sens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif4SensTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif4Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif4Sens() {

        $obj = new TestStringTrsCodeTarif4SensTrait();

        $obj->setTrsCodeTarif4Sens("trsCodeTarif4Sens");
        $this->assertEquals("trsCodeTarif4Sens", $obj->getTrsCodeTarif4Sens());
    }
}
