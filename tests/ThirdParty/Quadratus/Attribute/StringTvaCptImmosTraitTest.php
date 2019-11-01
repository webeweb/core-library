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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaCptImmosTrait;

/**
 * Tva cpt immos trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaCptImmosTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaCptImmos() method.
     *
     * @return void
     */
    public function testSetTvaCptImmos() {

        $obj = new TestStringTvaCptImmosTrait();

        $obj->setTvaCptImmos("tvaCptImmos");
        $this->assertEquals("tvaCptImmos", $obj->getTvaCptImmos());
    }
}
