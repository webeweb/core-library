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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolAppliquerRegroupementTrait;

/**
 * Appliquer regroupement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolAppliquerRegroupementTraitTest extends AbstractTestCase {

    /**
     * Tests the setAppliquerRegroupement() method.
     *
     * @return void
     */
    public function testSetAppliquerRegroupement() {

        $obj = new TestBoolAppliquerRegroupementTrait();

        $obj->setAppliquerRegroupement(true);
        $this->assertEquals(true, $obj->getAppliquerRegroupement());
    }
}
