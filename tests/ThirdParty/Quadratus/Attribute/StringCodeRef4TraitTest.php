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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef4Trait;

/**
 * Code ref4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef4() method.
     *
     * @return void
     */
    public function testSetCodeRef4() {

        $obj = new TestStringCodeRef4Trait();

        $obj->setCodeRef4("codeRef4");
        $this->assertEquals("codeRef4", $obj->getCodeRef4());
    }
}
