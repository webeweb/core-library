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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSoumisCsg100Trait;

/**
 * Soumis c s g100 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSoumisCsg100TraitTest extends AbstractTestCase {

    /**
     * Tests the setSoumisCsg100() method.
     *
     * @return void
     */
    public function testSetSoumisCsg100() {

        $obj = new TestStringSoumisCsg100Trait();

        $obj->setSoumisCsg100("soumisCsg100");
        $this->assertEquals("soumisCsg100", $obj->getSoumisCsg100());
    }
}
