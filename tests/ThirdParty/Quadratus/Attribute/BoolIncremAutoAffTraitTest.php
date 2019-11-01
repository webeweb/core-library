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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolIncremAutoAffTrait;

/**
 * Increm auto aff trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolIncremAutoAffTraitTest extends AbstractTestCase {

    /**
     * Tests the setIncremAutoAff() method.
     *
     * @return void
     */
    public function testSetIncremAutoAff() {

        $obj = new TestBoolIncremAutoAffTrait();

        $obj->setIncremAutoAff(true);
        $this->assertEquals(true, $obj->getIncremAutoAff());
    }
}
