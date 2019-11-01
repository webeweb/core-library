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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatz5bTaxeTrait;

/**
 * z5b taxe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Floatz5bTaxeTraitTest extends AbstractTestCase {

    /**
     * Tests the setz5bTaxe() method.
     *
     * @return void
     */
    public function testSetz5bTaxe() {

        $obj = new TestFloatz5bTaxeTrait();

        $obj->setz5bTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz5bTaxe());
    }
}
