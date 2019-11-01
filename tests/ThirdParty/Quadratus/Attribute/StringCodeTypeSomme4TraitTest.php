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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeSomme4Trait;

/**
 * Code type somme4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeSomme4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeSomme4() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme4() {

        $obj = new TestStringCodeTypeSomme4Trait();

        $obj->setCodeTypeSomme4("codeTypeSomme4");
        $this->assertEquals("codeTypeSomme4", $obj->getCodeTypeSomme4());
    }
}
