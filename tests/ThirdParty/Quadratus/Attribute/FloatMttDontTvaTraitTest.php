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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMttDontTvaTrait;

/**
 * Mtt dont t v a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMttDontTvaTraitTest extends AbstractTestCase {

    /**
     * Tests the setMttDontTva() method.
     *
     * @return void
     */
    public function testSetMttDontTva() {

        $obj = new TestFloatMttDontTvaTrait();

        $obj->setMttDontTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTva());
    }
}
