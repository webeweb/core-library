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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeDimanche2Trait;

/**
 * Code prime dimanche2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeDimanche2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeDimanche2() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche2() {

        $obj = new TestStringCodePrimeDimanche2Trait();

        $obj->setCodePrimeDimanche2("codePrimeDimanche2");
        $this->assertEquals("codePrimeDimanche2", $obj->getCodePrimeDimanche2());
    }
}
