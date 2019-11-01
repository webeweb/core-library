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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsCodeTarif3Trait;

/**
 * T r s code tarif3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsCodeTarif3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsCodeTarif3() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif3() {

        $obj = new TestStringTrsCodeTarif3Trait();

        $obj->setTrsCodeTarif3("trsCodeTarif3");
        $this->assertEquals("trsCodeTarif3", $obj->getTrsCodeTarif3());
    }
}
