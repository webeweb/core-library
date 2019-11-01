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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat10BiensImmosTrait;

/**
 * 10 biens immos trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float10BiensImmosTraitTest extends AbstractTestCase {

    /**
     * Tests the set10BiensImmos() method.
     *
     * @return void
     */
    public function testSet10BiensImmos() {

        $obj = new TestFloat10BiensImmosTrait();

        $obj->set10BiensImmos(10.092018);
        $this->assertEquals(10.092018, $obj->get10BiensImmos());
    }
}
