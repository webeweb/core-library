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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif5SensTrait;

/**
 * T r s code tarif5 sens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif5SensTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif5Sens() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif5Sens() {

        $obj = new TestStringTrsCodeTarif5SensTrait();

        $obj->setTrsCodeTarif5Sens("trsCodeTarif5Sens");
        $this->assertEquals("trsCodeTarif5Sens", $obj->getTrsCodeTarif5Sens());
    }
}
