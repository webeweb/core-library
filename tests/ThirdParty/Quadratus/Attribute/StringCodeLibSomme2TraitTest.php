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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibSomme2Trait;

/**
 * Code lib somme2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibSomme2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibSomme2() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme2() {

        $obj = new TestStringCodeLibSomme2Trait();

        $obj->setCodeLibSomme2("codeLibSomme2");
        $this->assertEquals("codeLibSomme2", $obj->getCodeLibSomme2());
    }
}
