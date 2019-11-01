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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolNote0NonConformeTrait;

/**
 * Note0 non conforme trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolNote0NonConformeTraitTest extends AbstractTestCase {

    /**
     * Tests the setNote0NonConforme() method.
     *
     * @return void
     */
    public function testSetNote0NonConforme() {

        $obj = new TestBoolNote0NonConformeTrait();

        $obj->setNote0NonConforme(true);
        $this->assertEquals(true, $obj->getNote0NonConforme());
    }
}
