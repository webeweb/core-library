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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDerniereVersionCdTrait;

/**
 * Derniere version c d trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDerniereVersionCdTraitTest extends AbstractTestCase {

    /**
     * Tests the setDerniereVersionCd() method.
     *
     * @return void
     */
    public function testSetDerniereVersionCd() {

        $obj = new TestStringDerniereVersionCdTrait();

        $obj->setDerniereVersionCd("derniereVersionCd");
        $this->assertEquals("derniereVersionCd", $obj->getDerniereVersionCd());
    }
}
