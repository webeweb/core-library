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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCaisseCpTrait;

/**
 * Code caisse c p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCaisseCpTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCaisseCp() method.
     *
     * @return void
     */
    public function testSetCodeCaisseCp() {

        $obj = new TestStringCodeCaisseCpTrait();

        $obj->setCodeCaisseCp("codeCaisseCp");
        $this->assertEquals("codeCaisseCp", $obj->getCodeCaisseCp());
    }
}
