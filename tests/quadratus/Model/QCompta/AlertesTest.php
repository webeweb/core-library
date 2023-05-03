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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\Alertes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Alertes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class AlertesTest extends AbstractTestCase {

    /**
     * Test setCloturee()
     *
     * @return void
     */
    public function testSetCloturee(): void {

        $obj = new Alertes();

        $obj->setCloturee(true);
        $this->assertTrue($obj->getCloturee());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Alertes();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDateDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new Alertes();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new Alertes();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Alertes();

        $this->assertNull($obj->getCloturee());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getUniqId());
    }
}
