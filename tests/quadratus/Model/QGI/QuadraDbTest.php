<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\QuadraDb;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Quadra db test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class QuadraDbTest extends AbstractTestCase {

    /**
     * Tests setDateEnvoiMessage()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoiMessage(): void {

        // Set a Date/time mock.
        $dateEnvoiMessage = new DateTime("2018-09-10");

        $obj = new QuadraDb();

        $obj->setDateEnvoiMessage($dateEnvoiMessage);
        $this->assertSame($dateEnvoiMessage, $obj->getDateEnvoiMessage());
    }

    /**
     * Tests setTailleBase()
     *
     * @return void
     */
    public function testSetTailleBase(): void {

        $obj = new QuadraDb();

        $obj->setTailleBase(10.092018);
        $this->assertEquals(10.092018, $obj->getTailleBase());
    }

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

        $this->assertNull($obj->getDateEnvoiMessage());
        $this->assertNull($obj->getTailleBase());
        $this->assertNull($obj->getVersion());
    }
}
