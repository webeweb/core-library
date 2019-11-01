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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif4Trait;

/**
 * T r s code tarif4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif4TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif4() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif4() {

        $obj = new TestStringTrsCodeTarif4Trait();

        $obj->setTrsCodeTarif4("trsCodeTarif4");
        $this->assertEquals("trsCodeTarif4", $obj->getTrsCodeTarif4());
    }
}
