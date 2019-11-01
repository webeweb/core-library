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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz3520BaseTrait;

/**
 * Az3520 base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz3520BaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz3520Base() method.
     *
     * @return void
     */
    public function testSetAz3520Base() {

        $obj = new TestFloatAz3520BaseTrait();

        $obj->setAz3520Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3520Base());
    }
}
