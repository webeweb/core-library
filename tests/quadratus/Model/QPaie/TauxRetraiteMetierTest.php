<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\TauxRetraiteMetier;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taux retraite metier test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TauxRetraiteMetierTest extends AbstractTestCase {

    /**
     * Tests the setActive() method.
     *
     * @return void
     */
    public function testSetActive(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setActive(true);
        $this->assertEquals(true, $obj->getActive());
    }

    /**
     * Tests the setCategSalarie() method.
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCategSalarie(10);
        $this->assertEquals(10, $obj->getCategSalarie());
    }

    /**
     * Tests the setCodeActivite() method.
     *
     * @return void
     */
    public function testSetCodeActivite(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests the setCodeDucs() method.
     *
     * @return void
     */
    public function testSetCodeDucs(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCodeDucs("codeDucs");
        $this->assertEquals("codeDucs", $obj->getCodeDucs());
    }

    /**
     * Tests the setCodeEditionHisto() method.
     *
     * @return void
     */
    public function testSetCodeEditionHisto(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCodeEditionHisto("codeEditionHisto");
        $this->assertEquals("codeEditionHisto", $obj->getCodeEditionHisto());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeMetier() method.
     *
     * @return void
     */
    public function testSetCodeMetier(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCodeMetier("codeMetier");
        $this->assertEquals("codeMetier", $obj->getCodeMetier());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCompteCharge() method.
     *
     * @return void
     */
    public function testSetCompteCharge(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setCompteCharge("compteCharge");
        $this->assertEquals("compteCharge", $obj->getCompteCharge());
    }

    /**
     * Tests the setConditionSpec() method.
     *
     * @return void
     */
    public function testSetConditionSpec(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setConditionSpec("conditionSpec");
        $this->assertEquals("conditionSpec", $obj->getConditionSpec());
    }

    /**
     * Tests the setExclureLoiTepa() method.
     *
     * @return void
     */
    public function testSetExclureLoiTepa(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setExclureLoiTepa("exclureLoiTepa");
        $this->assertEquals("exclureLoiTepa", $obj->getExclureLoiTepa());
    }

    /**
     * Tests the setIndiceCateg() method.
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests the setLibelleBul() method.
     *
     * @return void
     */
    public function testSetLibelleBul(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setLibelleBul("libelleBul");
        $this->assertEquals("libelleBul", $obj->getLibelleBul());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setQualifiantCotis() method.
     *
     * @return void
     */
    public function testSetQualifiantCotis(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setQualifiantCotis("qualifiantCotis");
        $this->assertEquals("qualifiantCotis", $obj->getQualifiantCotis());
    }

    /**
     * Tests the setTypeLibelle() method.
     *
     * @return void
     */
    public function testSetTypeLibelle(): void {

        $obj = new TauxRetraiteMetier();

        $obj->setTypeLibelle(10);
        $this->assertEquals(10, $obj->getTypeLibelle());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TauxRetraiteMetier();

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeDucs());
        $this->assertNull($obj->getCodeEditionHisto());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeMetier());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getConditionSpec());
        $this->assertNull($obj->getExclureLoiTepa());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getLibelleBul());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getQualifiantCotis());
        $this->assertNull($obj->getTypeLibelle());
    }
}
