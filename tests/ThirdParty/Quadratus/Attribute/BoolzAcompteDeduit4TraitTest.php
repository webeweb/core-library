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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolzAcompteDeduit4Trait;

/**
 * z acompte deduit4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolzAcompteDeduit4TraitTest extends AbstractTestCase {

    /**
     * Tests the setzAcompteDeduit4() method.
     *
     * @return void
     */
    public function testSetzAcompteDeduit4() {

        $obj = new TestBoolzAcompteDeduit4Trait();

        $obj->setzAcompteDeduit4(true);
        $this->assertEquals(true, $obj->getzAcompteDeduit4());
    }
}
