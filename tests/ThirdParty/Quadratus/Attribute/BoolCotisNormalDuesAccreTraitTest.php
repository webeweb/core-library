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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolCotisNormalDuesAccreTrait;

/**
 * Cotis normal dues a c c r e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolCotisNormalDuesAccreTraitTest extends AbstractTestCase {

    /**
     * Tests the setCotisNormalDuesAccre() method.
     *
     * @return void
     */
    public function testSetCotisNormalDuesAccre() {

        $obj = new TestBoolCotisNormalDuesAccreTrait();

        $obj->setCotisNormalDuesAccre(true);
        $this->assertEquals(true, $obj->getCotisNormalDuesAccre());
    }
}
