<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Spectacles;

/**
 * Spectacles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class SpectaclesTest extends AbstractTestCase {

    /**
     * Tests the setDtDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebut(): void {

        // Set a Date/time mock.
        $dtDebut = new DateTime("2018-09-10");

        $obj = new Spectacles();

        $obj->setDtDebut($dtDebut);
        $this->assertSame($dtDebut, $obj->getDtDebut());
    }

    /**
     * Tests the setDtFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFin(): void {

        // Set a Date/time mock.
        $dtFin = new DateTime("2018-09-10");

        $obj = new Spectacles();

        $obj->setDtFin($dtFin);
        $this->assertSame($dtFin, $obj->getDtFin());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Spectacles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumObjet() method.
     *
     * @return void
     */
    public function testSetNumObjet(): void {

        $obj = new Spectacles();

        $obj->setNumObjet("numObjet");
        $this->assertEquals("numObjet", $obj->getNumObjet());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Spectacles();

        $this->assertNull($obj->getDtDebut());
        $this->assertNull($obj->getDtFin());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumObjet());
    }
}
