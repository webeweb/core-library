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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringText5Trait;

/**
 * Text5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringText5TraitTest extends AbstractTestCase {

    /**
     * Tests the setText5() method.
     *
     * @return void
     */
    public function testSetText5() {

        $obj = new TestStringText5Trait();

        $obj->setText5("text5");
        $this->assertEquals("text5", $obj->getText5());
    }
}
