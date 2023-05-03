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
use WBW\Library\Quadratus\Model\QCompta\ComptesRecurrents;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Comptes recurrents test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ComptesRecurrentsTest extends AbstractTestCase {

    /**
     * Test setCompte()
     *
     * @return void
     */
    public function testSetCompte(): void {

        $obj = new ComptesRecurrents();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Test setCompteRecurrent()
     *
     * @return void
     */
    public function testSetCompteRecurrent(): void {

        $obj = new ComptesRecurrents();

        $obj->setCompteRecurrent("compteRecurrent");
        $this->assertEquals("compteRecurrent", $obj->getCompteRecurrent());
    }

    /**
     * Test setDateDernierAcces()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDernierAcces(): void {

        // Set a Date/time mock.
        $dateDernierAcces = new DateTime("2018-09-10");

        $obj = new ComptesRecurrents();

        $obj->setDateDernierAcces($dateDernierAcces);
        $this->assertSame($dateDernierAcces, $obj->getDateDernierAcces());
    }

    /**
     * Test setNbAcces()
     *
     * @return void
     */
    public function testSetNbAcces(): void {

        $obj = new ComptesRecurrents();

        $obj->setNbAcces(10);
        $this->assertEquals(10, $obj->getNbAcces());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ComptesRecurrents();

        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getCompteRecurrent());
        $this->assertNull($obj->getDateDernierAcces());
        $this->assertNull($obj->getNbAcces());
    }
}
