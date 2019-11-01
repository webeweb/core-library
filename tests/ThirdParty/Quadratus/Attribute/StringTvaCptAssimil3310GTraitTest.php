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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaCptAssimil3310GTrait;

/**
 * Tva cpt assimil3310 g trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaCptAssimil3310GTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaCptAssimil3310G() method.
     *
     * @return void
     */
    public function testSetTvaCptAssimil3310G() {

        $obj = new TestStringTvaCptAssimil3310GTrait();

        $obj->setTvaCptAssimil3310G("tvaCptAssimil3310G");
        $this->assertEquals("tvaCptAssimil3310G", $obj->getTvaCptAssimil3310G());
    }
}
