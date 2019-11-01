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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif2Trait;

/**
 * T r s code tarif2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif2() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif2() {

        $obj = new TestStringTrsCodeTarif2Trait();

        $obj->setTrsCodeTarif2("trsCodeTarif2");
        $this->assertEquals("trsCodeTarif2", $obj->getTrsCodeTarif2());
    }
}
