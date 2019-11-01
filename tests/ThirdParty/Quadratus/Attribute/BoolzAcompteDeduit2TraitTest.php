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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolzAcompteDeduit2Trait;

/**
 * z acompte deduit2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolzAcompteDeduit2TraitTest extends AbstractTestCase {

    /**
     * Tests the setzAcompteDeduit2() method.
     *
     * @return void
     */
    public function testSetzAcompteDeduit2() {

        $obj = new TestBoolzAcompteDeduit2Trait();

        $obj->setzAcompteDeduit2(true);
        $this->assertEquals(true, $obj->getzAcompteDeduit2());
    }
}
