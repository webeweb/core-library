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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeLibBPlaf3Trait;

/**
 * Code lib b plaf3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeLibBPlaf3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeLibBPlaf3() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf3() {

        $obj = new TestStringCodeLibBPlaf3Trait();

        $obj->setCodeLibBPlaf3("codeLibBPlaf3");
        $this->assertEquals("codeLibBPlaf3", $obj->getCodeLibBPlaf3());
    }
}
