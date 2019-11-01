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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaE4RbsTrait;

/**
 * Tva e4 r b s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaE4RbsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4Rbs() method.
     *
     * @return void
     */
    public function testSetTvaE4Rbs() {

        $obj = new TestStringTvaE4RbsTrait();

        $obj->setTvaE4Rbs("tvaE4Rbs");
        $this->assertEquals("tvaE4Rbs", $obj->getTvaE4Rbs());
    }
}
