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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifRupture2Trait;

/**
 * Code motif rupture2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifRupture2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifRupture2() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture2() {

        $obj = new TestStringCodeMotifRupture2Trait();

        $obj->setCodeMotifRupture2("codeMotifRupture2");
        $this->assertEquals("codeMotifRupture2", $obj->getCodeMotifRupture2());
    }
}
