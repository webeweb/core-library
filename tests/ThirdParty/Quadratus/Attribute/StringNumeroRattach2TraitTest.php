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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumeroRattach2Trait;

/**
 * Numero rattach2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumeroRattach2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumeroRattach2() method.
     *
     * @return void
     */
    public function testSetNumeroRattach2() {

        $obj = new TestStringNumeroRattach2Trait();

        $obj->setNumeroRattach2("numeroRattach2");
        $this->assertEquals("numeroRattach2", $obj->getNumeroRattach2());
    }
}
