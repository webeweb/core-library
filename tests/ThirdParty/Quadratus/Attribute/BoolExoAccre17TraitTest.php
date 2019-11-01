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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolExoAccre17Trait;

/**
 * Exo a c c r e17 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolExoAccre17TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoAccre17() method.
     *
     * @return void
     */
    public function testSetExoAccre17() {

        $obj = new TestBoolExoAccre17Trait();

        $obj->setExoAccre17(true);
        $this->assertEquals(true, $obj->getExoAccre17());
    }
}
