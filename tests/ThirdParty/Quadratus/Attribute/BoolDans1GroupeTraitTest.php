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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolDans1GroupeTrait;

/**
 * Dans1 groupe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolDans1GroupeTraitTest extends AbstractTestCase {

    /**
     * Tests the setDans1Groupe() method.
     *
     * @return void
     */
    public function testSetDans1Groupe() {

        $obj = new TestBoolDans1GroupeTrait();

        $obj->setDans1Groupe(true);
        $this->assertEquals(true, $obj->getDans1Groupe());
    }
}
