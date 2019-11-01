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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAccesParamTrait;

/**
 * Cle acces param trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAccesParamTraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAccesParam() method.
     *
     * @return void
     */
    public function testSetCleAccesParam() {

        $obj = new TestStringCleAccesParamTrait();

        $obj->setCleAccesParam("cleAccesParam");
        $this->assertEquals("cleAccesParam", $obj->getCleAccesParam());
    }
}
