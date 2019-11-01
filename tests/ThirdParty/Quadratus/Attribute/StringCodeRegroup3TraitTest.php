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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegroup3Trait;

/**
 * Code regroup3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegroup3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegroup3() method.
     *
     * @return void
     */
    public function testSetCodeRegroup3() {

        $obj = new TestStringCodeRegroup3Trait();

        $obj->setCodeRegroup3("codeRegroup3");
        $this->assertEquals("codeRegroup3", $obj->getCodeRegroup3());
    }
}
