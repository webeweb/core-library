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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0121Trait;

/**
 * z0121 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0121TraitTest extends AbstractTestCase {

    /**
     * Tests the setz0121() method.
     *
     * @return void
     */
    public function testSetz0121() {

        $obj = new TestFloatz0121Trait();

        $obj->setz0121(10.092018);
        $this->assertEquals(10.092018, $obj->getz0121());
    }
}
