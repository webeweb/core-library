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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumColAcbsTrait;

/**
 * Num col acbs trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumColAcbsTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumColAcbs() method.
     *
     * @return void
     */
    public function testSetNumColAcbs() {

        $obj = new TestStringNumColAcbsTrait();

        $obj->setNumColAcbs("numColAcbs");
        $this->assertEquals("numColAcbs", $obj->getNumColAcbs());
    }
}
