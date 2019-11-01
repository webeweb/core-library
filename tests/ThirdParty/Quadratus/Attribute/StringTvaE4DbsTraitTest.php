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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaE4DbsTrait;

/**
 * Tva e4 d b s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaE4DbsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4Dbs() method.
     *
     * @return void
     */
    public function testSetTvaE4Dbs() {

        $obj = new TestStringTvaE4DbsTrait();

        $obj->setTvaE4Dbs("tvaE4Dbs");
        $this->assertEquals("tvaE4Dbs", $obj->getTvaE4Dbs());
    }
}
