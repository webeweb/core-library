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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatzCol1Acompte3Trait;

/**
 * z col1 acompte3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatzCol1Acompte3TraitTest extends AbstractTestCase {

    /**
     * Tests the setzCol1Acompte3() method.
     *
     * @return void
     */
    public function testSetzCol1Acompte3() {

        $obj = new TestFloatzCol1Acompte3Trait();

        $obj->setzCol1Acompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte3());
    }
}
