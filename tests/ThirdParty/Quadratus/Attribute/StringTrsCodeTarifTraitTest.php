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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarifTrait;

/**
 * T r s code tarif trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarifTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif() {

        $obj = new TestStringTrsCodeTarifTrait();

        $obj->setTrsCodeTarif("trsCodeTarif");
        $this->assertEquals("trsCodeTarif", $obj->getTrsCodeTarif());
    }
}
