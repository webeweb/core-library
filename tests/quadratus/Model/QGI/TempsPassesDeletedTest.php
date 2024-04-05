<?php

declare(strict_types = 1);

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
use Throwable;
use WBW\Library\Quadratus\Model\QGI\TempsPassesDeleted;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Temps passes deleted test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TempsPassesDeletedTest extends AbstractTestCase {

    /**
     * Test setContexte()
     *
     * @return void
     */
    public function testSetContexte(): void {

        $obj = new TempsPassesDeleted();

        $obj->setContexte("contexte");
        $this->assertEquals("contexte", $obj->getContexte());
    }

    /**
     * Test setDateSuppression()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSuppression(): void {

        // Set a Date/time mock.
        $dateSuppression = new DateTime("2018-09-10");

        $obj = new TempsPassesDeleted();

        $obj->setDateSuppression($dateSuppression);
        $this->assertSame($dateSuppression, $obj->getDateSuppression());
    }

    /**
     * Test setGUniqId()
     *
     * @return void
     */
    public function testSetGUniqId(): void {

        $obj = new TempsPassesDeleted();

        $obj->setGUniqId("gUniqId");
        $this->assertEquals("gUniqId", $obj->getGUniqId());
    }

    /**
     * Test setUser()
     *
     * @return void
     */
    public function testSetUser(): void {

        $obj = new TempsPassesDeleted();

        $obj->setUser("user");
        $this->assertEquals("user", $obj->getUser());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TempsPassesDeleted();

        $this->assertNull($obj->getContexte());
        $this->assertNull($obj->getDateSuppression());
        $this->assertNull($obj->getGUniqId());
        $this->assertNull($obj->getUser());
    }
}
