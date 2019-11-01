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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMandatDureeEditvaTrait;

/**
 * Mandat duree e d i t v a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMandatDureeEditvaTraitTest extends AbstractTestCase {

    /**
     * Tests the setMandatDureeEditva() method.
     *
     * @return void
     */
    public function testSetMandatDureeEditva() {

        $obj = new TestIntMandatDureeEditvaTrait();

        $obj->setMandatDureeEditva(10);
        $this->assertEquals(10, $obj->getMandatDureeEditva());
    }
}
