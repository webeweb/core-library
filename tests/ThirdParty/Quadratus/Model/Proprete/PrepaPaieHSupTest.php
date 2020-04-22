<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PrepaPaieHSup;

/**
 * Prepa paie h sup test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PrepaPaieHSupTest extends AbstractTestCase {

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new PrepaPaieHSup();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
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
     * Tests the setNumSem() method.
     *
     * @return void
     */
    public function testSetNumSem() {

        $obj = new PrepaPaieHSup();

        $obj->setNumSem("numSem");
        $this->assertEquals("numSem", $obj->getNumSem());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new PrepaPaieHSup();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new PrepaPaieHSup();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getNbHSup());
        $this->assertNull($obj->getNumSem());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHSup());
    }
}
