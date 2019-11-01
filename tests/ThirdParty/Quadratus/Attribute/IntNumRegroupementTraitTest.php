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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNumRegroupementTrait;

/**
 * Num regroupement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNumRegroupementTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumRegroupement() method.
     *
     * @return void
     */
    public function testSetNumRegroupement() {

        $obj = new TestIntNumRegroupementTrait();

        $obj->setNumRegroupement(10);
        $this->assertEquals(10, $obj->getNumRegroupement());
    }
}
