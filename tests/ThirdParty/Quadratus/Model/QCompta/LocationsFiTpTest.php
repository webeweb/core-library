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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\LocationsFiTp;

/**
 * Locations fi tp test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFiTpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LocationsFiTp();

        $this->assertNull($obj->getAssurance());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEntretien());
        $this->assertNull($obj->getLoyerHt());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
    }

    /**
     * Tests the setAssurance() method.
     *
     * @return void
     */
    public function testSetAssurance() {

        $obj = new LocationsFiTp();

        $obj->setAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getAssurance());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new LocationsFiTp();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new LocationsFiTp();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setEntretien() method.
     *
     * @return void
     */
    public function testSetEntretien() {

        $obj = new LocationsFiTp();

        $obj->setEntretien(10.092018);
        $this->assertEquals(10.092018, $obj->getEntretien());
    }

    /**
     * Tests the setLoyerHt() method.
     *
     * @return void
     */
    public function testSetLoyerHt() {

        $obj = new LocationsFiTp();

        $obj->setLoyerHt(10.092018);
        $this->assertEquals(10.092018, $obj->getLoyerHt());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LocationsFiTp();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new LocationsFiTp();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new LocationsFiTp();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }
}
