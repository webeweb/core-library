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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolIndemCpMsaTrait;

/**
 * Indem cp m s a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolIndemCpMsaTraitTest extends AbstractTestCase {

    /**
     * Tests the setIndemCpMsa() method.
     *
     * @return void
     */
    public function testSetIndemCpMsa() {

        $obj = new TestBoolIndemCpMsaTrait();

        $obj->setIndemCpMsa(true);
        $this->assertEquals(true, $obj->getIndemCpMsa());
    }
}
