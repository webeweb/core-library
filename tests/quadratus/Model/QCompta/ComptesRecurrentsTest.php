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
use Exception;
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
     * Tests setCompte()
     *
     * @return void
     */
    public function testSetCompte(): void {

        $obj = new ComptesRecurrents();

        $obj->setCompte("compte");
        $this->assertEquals("compte", $obj->getCompte());
    }

    /**
     * Tests setCompteRecurrent()
     *
     * @return void
     */
    public function testSetCompteRecurrent(): void {

        $obj = new ComptesRecurrents();

        $obj->setCompteRecurrent("compteRecurrent");
        $this->assertEquals("compteRecurrent", $obj->getCompteRecurrent());
    }

    /**
     * Tests setDateDernierAcces()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDernierAcces(): void {

        // Set a Date/time mock.
        $dateDernierAcces = new DateTime("2018-09-10");

        $obj = new ComptesRecurrents();

        $obj->setDateDernierAcces($dateDernierAcces);
        $this->assertSame($dateDernierAcces, $obj->getDateDernierAcces());
    }

    /**
     * Tests setNbAcces()
     *
     * @return void
     */
    public function testSetNbAcces(): void {

        $obj = new ComptesRecurrents();

        $obj->setNbAcces(10);
        $this->assertEquals(10, $obj->getNbAcces());
    }

    /**
     * Tests __construct()
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
