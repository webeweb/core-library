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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolActiviteSaisoTrait;

/**
 * Activite saiso trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolActiviteSaisoTraitTest extends AbstractTestCase {

    /**
     * Tests the setActiviteSaiso() method.
     *
     * @return void
     */
    public function testSetActiviteSaiso() {

        $obj = new TestBoolActiviteSaisoTrait();

        $obj->setActiviteSaiso(true);
        $this->assertEquals(true, $obj->getActiviteSaiso());
    }
}
