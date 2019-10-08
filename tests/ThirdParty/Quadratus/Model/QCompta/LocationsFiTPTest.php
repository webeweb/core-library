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

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\LocationsFiTP;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Locations fi t p model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class LocationsFiTPTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LocationsFiTP();

        $this->assertNull($obj->getAssurance());
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEntretien());
        $this->assertNull($obj->getLoyerHT());
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

        $obj = new LocationsFiTP();

        $obj->setAssurance(10.092018);
        $this->assertEquals(10.092018, $obj->getAssurance());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new LocationsFiTP();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate() {

        $obj = new LocationsFiTP();

        $obj->setDate(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate());
    }

    /**
     * Tests the setEntretien() method.
     *
     * @return void
     */
    public function testSetEntretien() {

        $obj = new LocationsFiTP();

        $obj->setEntretien(10.092018);
        $this->assertEquals(10.092018, $obj->getEntretien());
    }

    /**
     * Tests the setLoyerHT() method.
     *
     * @return void
     */
    public function testSetLoyerHT() {

        $obj = new LocationsFiTP();

        $obj->setLoyerHT(10.092018);
        $this->assertEquals(10.092018, $obj->getLoyerHT());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LocationsFiTP();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new LocationsFiTP();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new LocationsFiTP();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }
}
