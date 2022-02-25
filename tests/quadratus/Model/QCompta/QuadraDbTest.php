<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\QuadraDb;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Quadra db test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class QuadraDbTest extends AbstractTestCase {

    /**
     * Tests setVersion()
     *
     * @return void
     */
    public function testSetVersion(): void {

        $obj = new QuadraDb();

        $obj->setVersion(10);
        $this->assertEquals(10, $obj->getVersion());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new QuadraDb();

        $this->assertNull($obj->getVersion());
    }
}
