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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif6Trait;

/**
 * T r s code tarif6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif6TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif6() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif6() {

        $obj = new TestStringTrsCodeTarif6Trait();

        $obj->setTrsCodeTarif6("trsCodeTarif6");
        $this->assertEquals("trsCodeTarif6", $obj->getTrsCodeTarif6());
    }
}
