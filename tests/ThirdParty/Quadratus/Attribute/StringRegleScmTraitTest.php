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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRegleScmTrait;

/**
 * Regle s c m trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRegleScmTraitTest extends AbstractTestCase {

    /**
     * Tests the setRegleScm() method.
     *
     * @return void
     */
    public function testSetRegleScm() {

        $obj = new TestStringRegleScmTrait();

        $obj->setRegleScm("regleScm");
        $this->assertEquals("regleScm", $obj->getRegleScm());
    }
}
