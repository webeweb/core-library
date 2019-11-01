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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeDimanche1Trait;

/**
 * Code prime dimanche1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeDimanche1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeDimanche1() method.
     *
     * @return void
     */
    public function testSetCodePrimeDimanche1() {

        $obj = new TestStringCodePrimeDimanche1Trait();

        $obj->setCodePrimeDimanche1("codePrimeDimanche1");
        $this->assertEquals("codePrimeDimanche1", $obj->getCodePrimeDimanche1());
    }
}
