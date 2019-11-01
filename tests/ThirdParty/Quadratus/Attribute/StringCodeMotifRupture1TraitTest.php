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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeMotifRupture1Trait;

/**
 * Code motif rupture1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeMotifRupture1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeMotifRupture1() method.
     *
     * @return void
     */
    public function testSetCodeMotifRupture1() {

        $obj = new TestStringCodeMotifRupture1Trait();

        $obj->setCodeMotifRupture1("codeMotifRupture1");
        $this->assertEquals("codeMotifRupture1", $obj->getCodeMotifRupture1());
    }
}
