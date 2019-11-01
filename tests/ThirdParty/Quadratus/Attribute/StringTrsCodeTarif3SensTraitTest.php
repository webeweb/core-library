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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif3SensTrait;

/**
 * T r s code tarif3 sens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif3SensTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif3Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif3Sens() {

        $obj = new TestStringTrsCodeTarif3SensTrait();

        $obj->setTrsCodeTarif3Sens("trsCodeTarif3Sens");
        $this->assertEquals("trsCodeTarif3Sens", $obj->getTrsCodeTarif3Sens());
    }
}
