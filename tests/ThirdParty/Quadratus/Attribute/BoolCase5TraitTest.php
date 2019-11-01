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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCase5Trait;

/**
 * Case5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCase5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCase5() method.
     *
     * @return void
     */
    public function testSetCase5() {

        $obj = new TestBoolCase5Trait();

        $obj->setCase5(true);
        $this->assertEquals(true, $obj->getCase5());
    }
}
