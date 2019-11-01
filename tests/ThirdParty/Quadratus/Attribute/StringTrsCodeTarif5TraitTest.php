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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif5Trait;

/**
 * T r s code tarif5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif5TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif5() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif5() {

        $obj = new TestStringTrsCodeTarif5Trait();

        $obj->setTrsCodeTarif5("trsCodeTarif5");
        $this->assertEquals("trsCodeTarif5", $obj->getTrsCodeTarif5());
    }
}
