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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDiffLettrageGainsTrait;

/**
 * Diff lettrage gains trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDiffLettrageGainsTraitTest extends AbstractTestCase {

    /**
     * Tests the setDiffLettrageGains() method.
     *
     * @return void
     */
    public function testSetDiffLettrageGains() {

        $obj = new TestStringDiffLettrageGainsTrait();

        $obj->setDiffLettrageGains("diffLettrageGains");
        $this->assertEquals("diffLettrageGains", $obj->getDiffLettrageGains());
    }
}
