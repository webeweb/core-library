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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSoumisPort1Trait;

/**
 * Soumis port1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSoumisPort1TraitTest extends AbstractTestCase {

    /**
     * Tests the setSoumisPort1() method.
     *
     * @return void
     */
    public function testSetSoumisPort1() {

        $obj = new TestStringSoumisPort1Trait();

        $obj->setSoumisPort1("soumisPort1");
        $this->assertEquals("soumisPort1", $obj->getSoumisPort1());
    }
}
