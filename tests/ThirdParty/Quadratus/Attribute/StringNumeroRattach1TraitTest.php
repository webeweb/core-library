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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumeroRattach1Trait;

/**
 * Numero rattach1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumeroRattach1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumeroRattach1() method.
     *
     * @return void
     */
    public function testSetNumeroRattach1() {

        $obj = new TestStringNumeroRattach1Trait();

        $obj->setNumeroRattach1("numeroRattach1");
        $this->assertEquals("numeroRattach1", $obj->getNumeroRattach1());
    }
}
