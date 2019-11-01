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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntVmpGestEcrPmvTrait;

/**
 * V m p gest ecr p m v trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntVmpGestEcrPmvTraitTest extends AbstractTestCase {

    /**
     * Tests the setVmpGestEcrPmv() method.
     *
     * @return void
     */
    public function testSetVmpGestEcrPmv() {

        $obj = new TestIntVmpGestEcrPmvTrait();

        $obj->setVmpGestEcrPmv(10);
        $this->assertEquals(10, $obj->getVmpGestEcrPmv());
    }
}
