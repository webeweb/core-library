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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat13TotalTvaDeducTrait;

/**
 * 13 total tva deduc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float13TotalTvaDeducTraitTest extends AbstractTestCase {

    /**
     * Tests the set13TotalTvaDeduc() method.
     *
     * @return void
     */
    public function testSet13TotalTvaDeduc() {

        $obj = new TestFloat13TotalTvaDeducTrait();

        $obj->set13TotalTvaDeduc(10.092018);
        $this->assertEquals(10.092018, $obj->get13TotalTvaDeduc());
    }
}
