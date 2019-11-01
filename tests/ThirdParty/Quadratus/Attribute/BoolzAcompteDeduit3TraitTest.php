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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolzAcompteDeduit3Trait;

/**
 * z acompte deduit3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolzAcompteDeduit3TraitTest extends AbstractTestCase {

    /**
     * Tests the setzAcompteDeduit3() method.
     *
     * @return void
     */
    public function testSetzAcompteDeduit3() {

        $obj = new TestBoolzAcompteDeduit3Trait();

        $obj->setzAcompteDeduit3(true);
        $this->assertEquals(true, $obj->getzAcompteDeduit3());
    }
}
