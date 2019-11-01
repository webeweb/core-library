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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTypeBPlaf4Trait;

/**
 * Code type b plaf4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTypeBPlaf4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTypeBPlaf4() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf4() {

        $obj = new TestStringCodeTypeBPlaf4Trait();

        $obj->setCodeTypeBPlaf4("codeTypeBPlaf4");
        $this->assertEquals("codeTypeBPlaf4", $obj->getCodeTypeBPlaf4());
    }
}
