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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRdvJour6Trait;

/**
 * R d v jour6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRdvJour6TraitTest extends AbstractTestCase {

    /**
     * Tests the setRdvJour6() method.
     *
     * @return void
     */
    public function testSetRdvJour6() {

        $obj = new TestBoolRdvJour6Trait();

        $obj->setRdvJour6(true);
        $this->assertEquals(true, $obj->getRdvJour6());
    }
}
