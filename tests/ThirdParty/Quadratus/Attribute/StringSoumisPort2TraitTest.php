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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSoumisPort2Trait;

/**
 * Soumis port2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSoumisPort2TraitTest extends AbstractTestCase {

    /**
     * Tests the setSoumisPort2() method.
     *
     * @return void
     */
    public function testSetSoumisPort2() {

        $obj = new TestStringSoumisPort2Trait();

        $obj->setSoumisPort2("soumisPort2");
        $this->assertEquals("soumisPort2", $obj->getSoumisPort2());
    }
}
