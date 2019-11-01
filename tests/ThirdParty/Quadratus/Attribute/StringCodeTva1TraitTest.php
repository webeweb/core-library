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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTva1Trait;

/**
 * Code t v a1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTva1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTva1() method.
     *
     * @return void
     */
    public function testSetCodeTva1() {

        $obj = new TestStringCodeTva1Trait();

        $obj->setCodeTva1("codeTva1");
        $this->assertEquals("codeTva1", $obj->getCodeTva1());
    }
}
