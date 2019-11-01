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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSoumisCrds100Trait;

/**
 * Soumis c r d s100 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSoumisCrds100TraitTest extends AbstractTestCase {

    /**
     * Tests the setSoumisCrds100() method.
     *
     * @return void
     */
    public function testSetSoumisCrds100() {

        $obj = new TestStringSoumisCrds100Trait();

        $obj->setSoumisCrds100("soumisCrds100");
        $this->assertEquals("soumisCrds100", $obj->getSoumisCrds100());
    }
}
