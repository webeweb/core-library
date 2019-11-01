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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeSomme5Trait;

/**
 * Code type somme5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeSomme5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeSomme5() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme5() {

        $obj = new TestStringCodeTypeSomme5Trait();

        $obj->setCodeTypeSomme5("codeTypeSomme5");
        $this->assertEquals("codeTypeSomme5", $obj->getCodeTypeSomme5());
    }
}
