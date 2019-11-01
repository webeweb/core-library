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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegroup4Trait;

/**
 * Code regroup4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegroup4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegroup4() method.
     *
     * @return void
     */
    public function testSetCodeRegroup4() {

        $obj = new TestStringCodeRegroup4Trait();

        $obj->setCodeRegroup4("codeRegroup4");
        $this->assertEquals("codeRegroup4", $obj->getCodeRegroup4());
    }
}
