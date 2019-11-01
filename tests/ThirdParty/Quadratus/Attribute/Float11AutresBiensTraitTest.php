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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat11AutresBiensTrait;

/**
 * 11 autres biens trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float11AutresBiensTraitTest extends AbstractTestCase {

    /**
     * Tests the set11AutresBiens() method.
     *
     * @return void
     */
    public function testSet11AutresBiens() {

        $obj = new TestFloat11AutresBiensTrait();

        $obj->set11AutresBiens(10.092018);
        $this->assertEquals(10.092018, $obj->get11AutresBiens());
    }
}
