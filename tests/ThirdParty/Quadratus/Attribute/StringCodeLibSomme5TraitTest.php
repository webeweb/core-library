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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibSomme5Trait;

/**
 * Code lib somme5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibSomme5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibSomme5() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme5() {

        $obj = new TestStringCodeLibSomme5Trait();

        $obj->setCodeLibSomme5("codeLibSomme5");
        $this->assertEquals("codeLibSomme5", $obj->getCodeLibSomme5());
    }
}
