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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTva2Trait;

/**
 * Code t v a2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTva2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTva2() method.
     *
     * @return void
     */
    public function testSetCodeTva2() {

        $obj = new TestStringCodeTva2Trait();

        $obj->setCodeTva2("codeTva2");
        $this->assertEquals("codeTva2", $obj->getCodeTva2());
    }
}
