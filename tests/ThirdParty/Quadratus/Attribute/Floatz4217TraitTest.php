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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz4217Trait;

/**
 * z4217 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz4217TraitTest extends AbstractTestCase {

    /**
     * Tests the setz4217() method.
     *
     * @return void
     */
    public function testSetz4217() {

        $obj = new TestFloatz4217Trait();

        $obj->setz4217(10.092018);
        $this->assertEquals(10.092018, $obj->getz4217());
    }
}
