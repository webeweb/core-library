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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntPrixDefautEntreeDirecteTrait;

/**
 * Prix defaut entree directe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntPrixDefautEntreeDirecteTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixDefautEntreeDirecte() method.
     *
     * @return void
     */
    public function testSetPrixDefautEntreeDirecte() {

        $obj = new TestIntPrixDefautEntreeDirecteTrait();

        $obj->setPrixDefautEntreeDirecte(10);
        $this->assertEquals(10, $obj->getPrixDefautEntreeDirecte());
    }
}
