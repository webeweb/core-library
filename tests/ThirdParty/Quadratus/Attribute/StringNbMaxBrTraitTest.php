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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNbMaxBrTrait;

/**
 * Nb max b r trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNbMaxBrTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbMaxBr() method.
     *
     * @return void
     */
    public function testSetNbMaxBr() {

        $obj = new TestStringNbMaxBrTrait();

        $obj->setNbMaxBr("nbMaxBr");
        $this->assertEquals("nbMaxBr", $obj->getNbMaxBr());
    }
}
