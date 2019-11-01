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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatzCol2Acompte2Trait;

/**
 * z col2 acompte2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatzCol2Acompte2TraitTest extends AbstractTestCase {

    /**
     * Tests the setzCol2Acompte2() method.
     *
     * @return void
     */
    public function testSetzCol2Acompte2() {

        $obj = new TestFloatzCol2Acompte2Trait();

        $obj->setzCol2Acompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte2());
    }
}
