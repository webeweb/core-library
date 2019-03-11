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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HistoTauxRetraiteMetier;

/**
 * Histo taux retraite metier model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HistoTauxRetraiteMetierTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoTauxRetraiteMetier();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeMetier());
        $this->assertNull($obj->getFormatNonEtendu());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
    }

    /**
     * Tests the setAPartirDe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAPartirDe() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setAPartirDe(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getAPartirDe());
    }

    /**
     * Tests the setCategSalarie() method.
     *
     * @return void
     */
    public function testSetCategSalarie() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCategSalarie(10);
        $this->assertEquals(10, $obj->getCategSalarie());
    }

    /**
     * Tests the setCodeActivite() method.
     *
     * @return void
     */
    public function testSetCodeActivite() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeMetier() method.
     *
     * @return void
     */
    public function testSetCodeMetier() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setCodeMetier("codeMetier");
        $this->assertEquals("codeMetier", $obj->getCodeMetier());
    }

    /**
     * Tests the setFormatNonEtendu() method.
     *
     * @return void
     */
    public function testSetFormatNonEtendu() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setFormatNonEtendu(true);
        $this->assertEquals(true, $obj->getFormatNonEtendu());
    }

    /**
     * Tests the setIndiceCateg() method.
     *
     * @return void
     */
    public function testSetIndiceCateg() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setTauxPatronal() method.
     *
     * @return void
     */
    public function testSetTauxPatronal() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setTauxPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronal());
    }

    /**
     * Tests the setTauxSalarial() method.
     *
     * @return void
     */
    public function testSetTauxSalarial() {

        $obj = new HistoTauxRetraiteMetier();

        $obj->setTauxSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarial());
    }
}
