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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbJours1Trait;

/**
 * Nb jours1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbJours1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNbJours1() method.
     *
     * @return void
     */
    public function testSetNbJours1() {

        $obj = new TestIntNbJours1Trait();

        $obj->setNbJours1(10);
        $this->assertEquals(10, $obj->getNbJours1());
    }
}
