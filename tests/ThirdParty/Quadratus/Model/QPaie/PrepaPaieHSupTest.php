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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\PrepaPaieHSup;

/**
 * Prepa paie h sup model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class PrepaPaieHSupTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PrepaPaieHSup();

        $this->assertNull($obj->getCodeLibHS());
        $this->assertNull($obj->getNbHSup());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHSup());
        $this->assertNull($obj->getSemaine());
    }

    /**
     * Tests the setCodeLibHS() method.
     *
     * @return void
     */
    public function testSetCodeLibHS() {

        $obj = new PrepaPaieHSup();

        $obj->setCodeLibHS("codeLibHS");
        $this->assertEquals("codeLibHS", $obj->getCodeLibHS());
    }

    /**
     * Tests the setNbHSup() method.
     *
     * @return void
     */
    public function testSetNbHSup() {

        $obj = new PrepaPaieHSup();

        $obj->setNbHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new PrepaPaieHSup();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new PrepaPaieHSup();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPourcentHSup() method.
     *
     * @return void
     */
    public function testSetPourcentHSup() {

        $obj = new PrepaPaieHSup();

        $obj->setPourcentHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHSup());
    }

    /**
     * Tests the setSemaine() method.
     *
     * @return void
     */
    public function testSetSemaine() {

        $obj = new PrepaPaieHSup();

        $obj->setSemaine("semaine");
        $this->assertEquals("semaine", $obj->getSemaine());
    }
}
