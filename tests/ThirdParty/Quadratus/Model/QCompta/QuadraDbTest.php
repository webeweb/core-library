<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\QuadraDb;

/**
 * Quadra db test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class QuadraDbTest extends AbstractTestCase {

    /**
     * Tests the setVersion() method.
     *
     * @return void
     */
    public function testSetVersion() {

        $obj = new QuadraDb();

        $obj->setVersion(10);
        $this->assertEquals(10, $obj->getVersion());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new QuadraDb();

        $this->assertNull($obj->getVersion());
    }
}
