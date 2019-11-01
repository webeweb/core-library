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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeSalTrait;

/**
 * Code type sal trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeSalTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeSal() method.
     *
     * @return void
     */
    public function testSetCodeTypeSal() {

        $obj = new TestStringCodeTypeSalTrait();

        $obj->setCodeTypeSal("codeTypeSal");
        $this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
    }
}
