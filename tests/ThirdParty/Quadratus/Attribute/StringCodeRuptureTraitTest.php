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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRuptureTrait;

/**
 * Code rupture trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRuptureTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRupture() method.
     *
     * @return void
     */
    public function testSetCodeRupture() {

        $obj = new TestStringCodeRuptureTrait();

        $obj->setCodeRupture("codeRupture");
        $this->assertEquals("codeRupture", $obj->getCodeRupture());
    }
}
