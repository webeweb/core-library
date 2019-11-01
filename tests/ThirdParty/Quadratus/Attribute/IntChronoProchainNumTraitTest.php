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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntChronoProchainNumTrait;

/**
 * Chrono prochain num trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntChronoProchainNumTraitTest extends AbstractTestCase {

    /**
     * Tests the setChronoProchainNum() method.
     *
     * @return void
     */
    public function testSetChronoProchainNum() {

        $obj = new TestIntChronoProchainNumTrait();

        $obj->setChronoProchainNum(10);
        $this->assertEquals(10, $obj->getChronoProchainNum());
    }
}
