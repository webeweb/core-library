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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsTypeClientTrait;

/**
 * T r s type client trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsTypeClientTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsTypeClient() method.
     *
     * @return void
     */
    public function testSetTrsTypeClient() {

        $obj = new TestStringTrsTypeClientTrait();

        $obj->setTrsTypeClient("trsTypeClient");
        $this->assertEquals("trsTypeClient", $obj->getTrsTypeClient());
    }
}
