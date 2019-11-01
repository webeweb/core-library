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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsTypeFacturationTrait;

/**
 * T r s type facturation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsTypeFacturationTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsTypeFacturation() method.
     *
     * @return void
     */
    public function testSetTrsTypeFacturation() {

        $obj = new TestStringTrsTypeFacturationTrait();

        $obj->setTrsTypeFacturation("trsTypeFacturation");
        $this->assertEquals("trsTypeFacturation", $obj->getTrsTypeFacturation());
    }
}
