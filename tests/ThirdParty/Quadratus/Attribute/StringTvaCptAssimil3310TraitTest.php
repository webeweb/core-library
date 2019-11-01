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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaCptAssimil3310Trait;

/**
 * Tva cpt assimil3310 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaCptAssimil3310TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaCptAssimil3310() method.
     *
     * @return void
     */
    public function testSetTvaCptAssimil3310() {

        $obj = new TestStringTvaCptAssimil3310Trait();

        $obj->setTvaCptAssimil3310("tvaCptAssimil3310");
        $this->assertEquals("tvaCptAssimil3310", $obj->getTvaCptAssimil3310());
    }
}
