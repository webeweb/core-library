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
use WBW\Library\Quadratus\Model\QCompta\Interets;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Interets test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class InteretsTest extends AbstractTestCase {

    /**
     * Tests setDateDebut()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new Interets();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Interets();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setTaux()
     *
     * @return void
     */
    public function testSetTaux(): void {

        $obj = new Interets();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Tests setTypeCpt()
     *
     * @return void
     */
    public function testSetTypeCpt(): void {

        $obj = new Interets();

        $obj->setTypeCpt("typeCpt");
        $this->assertEquals("typeCpt", $obj->getTypeCpt());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Interets();

        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getTaux());
        $this->assertNull($obj->getTypeCpt());
    }
}
