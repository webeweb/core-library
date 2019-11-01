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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatzCol2Acompte3Trait;

/**
 * z col2 acompte3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatzCol2Acompte3TraitTest extends AbstractTestCase {

    /**
     * Tests the setzCol2Acompte3() method.
     *
     * @return void
     */
    public function testSetzCol2Acompte3() {

        $obj = new TestFloatzCol2Acompte3Trait();

        $obj->setzCol2Acompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte3());
    }
}
