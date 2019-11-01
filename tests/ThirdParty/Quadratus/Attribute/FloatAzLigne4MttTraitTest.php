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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAzLigne4MttTrait;

/**
 * Az ligne4 mtt trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAzLigne4MttTraitTest extends AbstractTestCase {

    /**
     * Tests the setAzLigne4Mtt() method.
     *
     * @return void
     */
    public function testSetAzLigne4Mtt() {

        $obj = new TestFloatAzLigne4MttTrait();

        $obj->setAzLigne4Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzLigne4Mtt());
    }
}
