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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz35BTaxeTrait;

/**
 * z35 b taxe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz35BTaxeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz35BTaxe() method.
     *
     * @return void
     */
    public function testSetz35BTaxe() {

        $obj = new TestFloatz35BTaxeTrait();

        $obj->setz35BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz35BTaxe());
    }
}
