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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumeroRattach3Trait;

/**
 * Numero rattach3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumeroRattach3TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumeroRattach3() method.
     *
     * @return void
     */
    public function testSetNumeroRattach3() {

        $obj = new TestStringNumeroRattach3Trait();

        $obj->setNumeroRattach3("numeroRattach3");
        $this->assertEquals("numeroRattach3", $obj->getNumeroRattach3());
    }
}
