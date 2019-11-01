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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegroup2Trait;

/**
 * Code regroup2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegroup2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegroup2() method.
     *
     * @return void
     */
    public function testSetCodeRegroup2() {

        $obj = new TestStringCodeRegroup2Trait();

        $obj->setCodeRegroup2("codeRegroup2");
        $this->assertEquals("codeRegroup2", $obj->getCodeRegroup2());
    }
}
