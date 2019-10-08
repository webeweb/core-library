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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPaieAnal;

/**
 * Histo paie anal model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieAnalTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoPaieAnal();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getNumeroLigneAnal());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcent());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new HistoPaieAnal();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HistoPaieAnal();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature() {

        $obj = new HistoPaieAnal();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setNumeroLigneAnal() method.
     *
     * @return void
     */
    public function testSetNumeroLigneAnal() {

        $obj = new HistoPaieAnal();

        $obj->setNumeroLigneAnal(10);
        $this->assertEquals(10, $obj->getNumeroLigneAnal());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new HistoPaieAnal();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPourcent() method.
     *
     * @return void
     */
    public function testSetPourcent() {

        $obj = new HistoPaieAnal();

        $obj->setPourcent(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcent());
    }
}
