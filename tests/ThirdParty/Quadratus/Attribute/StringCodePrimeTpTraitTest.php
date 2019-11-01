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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeTpTrait;

/**
 * Code prime t p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeTpTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeTp() method.
     *
     * @return void
     */
    public function testSetCodePrimeTp() {

        $obj = new TestStringCodePrimeTpTrait();

        $obj->setCodePrimeTp("codePrimeTp");
        $this->assertEquals("codePrimeTp", $obj->getCodePrimeTp());
    }
}
