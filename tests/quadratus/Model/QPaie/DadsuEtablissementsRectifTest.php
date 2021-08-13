<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\DadsuEtablissementsRectif;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu etablissements rectif test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuEtablissementsRectifTest extends AbstractTestCase {

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new DadsuEtablissementsRectif();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DadsuEtablissementsRectif();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setFormaProBase() method.
     *
     * @return void
     */
    public function testSetFormaProBase(): void {

        $obj = new DadsuEtablissementsRectif();

        $obj->setFormaProBase(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBase());
    }

    /**
     * Tests the setFormaProBaseCdd() method.
     *
     * @return void
     */
    public function testSetFormaProBaseCdd(): void {

        $obj = new DadsuEtablissementsRectif();

        $obj->setFormaProBaseCdd(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBaseCdd());
    }

    /**
     * Tests the setIndiceRectif() method.
     *
     * @return void
     */
    public function testSetIndiceRectif(): void {

        $obj = new DadsuEtablissementsRectif();

        $obj->setIndiceRectif(10);
        $this->assertEquals(10, $obj->getIndiceRectif());
    }

    /**
     * Tests the setTaxeApprentissageBase() method.
     *
     * @return void
     */
    public function testSetTaxeApprentissageBase(): void {

        $obj = new DadsuEtablissementsRectif();

        $obj->setTaxeApprentissageBase(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeApprentissageBase());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuEtablissementsRectif();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getFormaProBase());
        $this->assertNull($obj->getFormaProBaseCdd());
        $this->assertNull($obj->getIndiceRectif());
        $this->assertNull($obj->getTaxeApprentissageBase());
    }
}
