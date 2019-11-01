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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz0207Trait;

/**
 * z0207 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz0207TraitTest extends AbstractTestCase {

    /**
     * Tests the setz0207() method.
     *
     * @return void
     */
    public function testSetz0207() {

        $obj = new TestFloatz0207Trait();

        $obj->setz0207(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207());
    }
}
