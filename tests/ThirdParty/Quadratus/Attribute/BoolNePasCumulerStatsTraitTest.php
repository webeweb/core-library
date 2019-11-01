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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolNePasCumulerStatsTrait;

/**
 * Ne pas cumuler stats trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolNePasCumulerStatsTraitTest extends AbstractTestCase {

    /**
     * Tests the setNePasCumulerStats() method.
     *
     * @return void
     */
    public function testSetNePasCumulerStats() {

        $obj = new TestBoolNePasCumulerStatsTrait();

        $obj->setNePasCumulerStats(true);
        $this->assertEquals(true, $obj->getNePasCumulerStats());
    }
}
