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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds142DejaCalculeTrait;

/**
 * Tds142 deja calcule trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds142DejaCalculeTraitTest extends AbstractTestCase {

    /**
     * Tests the setTds142DejaCalcule() method.
     *
     * @return void
     */
    public function testSetTds142DejaCalcule() {

        $obj = new TestBoolTds142DejaCalculeTrait();

        $obj->setTds142DejaCalcule(true);
        $this->assertEquals(true, $obj->getTds142DejaCalcule());
    }
}
