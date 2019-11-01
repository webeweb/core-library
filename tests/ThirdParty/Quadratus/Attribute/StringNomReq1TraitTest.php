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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomReq1Trait;

/**
 * Nom req1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomReq1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomReq1() method.
     *
     * @return void
     */
    public function testSetNomReq1() {

        $obj = new TestStringNomReq1Trait();

        $obj->setNomReq1("nomReq1");
        $this->assertEquals("nomReq1", $obj->getNomReq1());
    }
}
