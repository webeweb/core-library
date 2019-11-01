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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeSomme2Trait;

/**
 * Code type somme2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeSomme2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeSomme2() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme2() {

        $obj = new TestStringCodeTypeSomme2Trait();

        $obj->setCodeTypeSomme2("codeTypeSomme2");
        $this->assertEquals("codeTypeSomme2", $obj->getCodeTypeSomme2());
    }
}
