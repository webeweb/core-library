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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPaieHSup;

/**
 * Histo paie h sup model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieHSupTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoPaieHSup();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getNbHSup());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentHSup());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HistoPaieHSup();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setNbHSup() method.
     *
     * @return void
     */
    public function testSetNbHSup() {

        $obj = new HistoPaieHSup();

        $obj->setNbHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new HistoPaieHSup();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPourcentHSup() method.
     *
     * @return void
     */
    public function testSetPourcentHSup() {

        $obj = new HistoPaieHSup();

        $obj->setPourcentHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentHSup());
    }
}
