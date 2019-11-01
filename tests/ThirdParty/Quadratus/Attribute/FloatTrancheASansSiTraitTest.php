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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTrancheASansSiTrait;

/**
 * Tranche a sans s i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTrancheASansSiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrancheASansSi() method.
     *
     * @return void
     */
    public function testSetTrancheASansSi() {

        $obj = new TestFloatTrancheASansSiTrait();

        $obj->setTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheASansSi());
    }
}
