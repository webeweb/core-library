<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\QuadraDB;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Quadra d b model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class QuadraDBTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new QuadraDB();

        $this->assertNull($obj->getVersion());
    }

    /**
     * Tests the setVersion() method.
     *
     * @return void
     */
    public function testSetVersion() {

        $obj = new QuadraDB();

        $obj->setVersion(10);
        $this->assertEquals(10, $obj->getVersion());
    }
}
