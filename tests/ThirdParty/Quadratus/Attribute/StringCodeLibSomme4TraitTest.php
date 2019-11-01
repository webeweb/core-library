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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibSomme4Trait;

/**
 * Code lib somme4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibSomme4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibSomme4() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme4() {

        $obj = new TestStringCodeLibSomme4Trait();

        $obj->setCodeLibSomme4("codeLibSomme4");
        $this->assertEquals("codeLibSomme4", $obj->getCodeLibSomme4());
    }
}
