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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatIndemnFinCneTrait;

/**
 * Indemn fin c n e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatIndemnFinCneTraitTest extends AbstractTestCase {

    /**
     * Tests the setIndemnFinCne() method.
     *
     * @return void
     */
    public function testSetIndemnFinCne() {

        $obj = new TestFloatIndemnFinCneTrait();

        $obj->setIndemnFinCne(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnFinCne());
    }
}
