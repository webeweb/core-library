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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif6SensTrait;

/**
 * T r s code tarif6 sens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif6SensTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif6Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif6Sens() {

        $obj = new TestStringTrsCodeTarif6SensTrait();

        $obj->setTrsCodeTarif6Sens("trsCodeTarif6Sens");
        $this->assertEquals("trsCodeTarif6Sens", $obj->getTrsCodeTarif6Sens());
    }
}
