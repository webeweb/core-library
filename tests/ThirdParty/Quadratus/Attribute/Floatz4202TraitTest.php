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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz4202Trait;

/**
 * z4202 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz4202TraitTest extends AbstractTestCase {

    /**
     * Tests the setz4202() method.
     *
     * @return void
     */
    public function testSetz4202() {

        $obj = new TestFloatz4202Trait();

        $obj->setz4202(10.092018);
        $this->assertEquals(10.092018, $obj->getz4202());
    }
}
