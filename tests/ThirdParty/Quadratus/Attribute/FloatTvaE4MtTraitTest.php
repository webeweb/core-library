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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTvaE4MtTrait;

/**
 * Tva e4 mt trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTvaE4MtTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaE4Mt() method.
     *
     * @return void
     */
    public function testSetTvaE4Mt() {

        $obj = new TestFloatTvaE4MtTrait();

        $obj->setTvaE4Mt(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaE4Mt());
    }
}
