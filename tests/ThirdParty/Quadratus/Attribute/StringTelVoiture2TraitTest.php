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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTelVoiture2Trait;

/**
 * Tel voiture2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTelVoiture2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTelVoiture2() method.
     *
     * @return void
     */
    public function testSetTelVoiture2() {

        $obj = new TestStringTelVoiture2Trait();

        $obj->setTelVoiture2("telVoiture2");
        $this->assertEquals("telVoiture2", $obj->getTelVoiture2());
    }
}
