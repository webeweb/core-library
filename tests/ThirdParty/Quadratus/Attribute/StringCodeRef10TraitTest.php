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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef10Trait;

/**
 * Code ref10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef10TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef10() method.
     *
     * @return void
     */
    public function testSetCodeRef10() {

        $obj = new TestStringCodeRef10Trait();

        $obj->setCodeRef10("codeRef10");
        $this->assertEquals("codeRef10", $obj->getCodeRef10());
    }
}
