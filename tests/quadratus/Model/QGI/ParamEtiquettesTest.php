<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\ParamEtiquettes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Param etiquettes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ParamEtiquettesTest extends AbstractTestCase {

    /**
     * Tests the setAvecCodeBarre() method.
     *
     * @return void
     */
    public function testSetAvecCodeBarre(): void {

        $obj = new ParamEtiquettes();

        $obj->setAvecCodeBarre(true);
        $this->assertEquals(true, $obj->getAvecCodeBarre());
    }

    /**
     * Tests the setAvecPrixVente() method.
     *
     * @return void
     */
    public function testSetAvecPrixVente(): void {

        $obj = new ParamEtiquettes();

        $obj->setAvecPrixVente(true);
        $this->assertEquals(true, $obj->getAvecPrixVente());
    }

    /**
     * Tests the setCodeModele() method.
     *
     * @return void
     */
    public function testSetCodeModele(): void {

        $obj = new ParamEtiquettes();

        $obj->setCodeModele("codeModele");
        $this->assertEquals("codeModele", $obj->getCodeModele());
    }

    /**
     * Tests the setEtiqDeFront() method.
     *
     * @return void
     */
    public function testSetEtiqDeFront(): void {

        $obj = new ParamEtiquettes();

        $obj->setEtiqDeFront(10);
        $this->assertEquals(10, $obj->getEtiqDeFront());
    }

    /**
     * Tests the setEtiqMasque() method.
     *
     * @return void
     */
    public function testSetEtiqMasque(): void {

        $obj = new ParamEtiquettes();

        $obj->setEtiqMasque(true);
        $this->assertEquals(true, $obj->getEtiqMasque());
    }

    /**
     * Tests the setEtiqPlus() method.
     *
     * @return void
     */
    public function testSetEtiqPlus(): void {

        $obj = new ParamEtiquettes();

        $obj->setEtiqPlus(true);
        $this->assertEquals(true, $obj->getEtiqPlus());
    }

    /**
     * Tests the setImprimante() method.
     *
     * @return void
     */
    public function testSetImprimante(): void {

        $obj = new ParamEtiquettes();

        $obj->setImprimante("imprimante");
        $this->assertEquals("imprimante", $obj->getImprimante());
    }

    /**
     * Tests the setInitChamp() method.
     *
     * @return void
     */
    public function testSetInitChamp(): void {

        $obj = new ParamEtiquettes();

        $obj->setInitChamp("initChamp");
        $this->assertEquals("initChamp", $obj->getInitChamp());
    }

    /**
     * Tests the setInitTable() method.
     *
     * @return void
     */
    public function testSetInitTable(): void {

        $obj = new ParamEtiquettes();

        $obj->setInitTable("initTable");
        $this->assertEquals("initTable", $obj->getInitTable());
    }

    /**
     * Tests the setInitValeur() method.
     *
     * @return void
     */
    public function testSetInitValeur(): void {

        $obj = new ParamEtiquettes();

        $obj->setInitValeur("initValeur");
        $this->assertEquals("initValeur", $obj->getInitValeur());
    }

    /**
     * Tests the setLgZone() method.
     *
     * @return void
     */
    public function testSetLgZone(): void {

        $obj = new ParamEtiquettes();

        $obj->setLgZone("lgZone");
        $this->assertEquals("lgZone", $obj->getLgZone());
    }

    /**
     * Tests the setLibZone() method.
     *
     * @return void
     */
    public function testSetLibZone(): void {

        $obj = new ParamEtiquettes();

        $obj->setLibZone("libZone");
        $this->assertEquals("libZone", $obj->getLibZone());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ParamEtiquettes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new ParamEtiquettes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setQteEnt() method.
     *
     * @return void
     */
    public function testSetQteEnt(): void {

        $obj = new ParamEtiquettes();

        $obj->setQteEnt(true);
        $this->assertEquals(true, $obj->getQteEnt());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ParamEtiquettes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ParamEtiquettes();

        $this->assertNull($obj->getAvecCodeBarre());
        $this->assertNull($obj->getAvecPrixVente());
        $this->assertNull($obj->getCodeModele());
        $this->assertNull($obj->getEtiqDeFront());
        $this->assertNull($obj->getEtiqMasque());
        $this->assertNull($obj->getEtiqPlus());
        $this->assertNull($obj->getImprimante());
        $this->assertNull($obj->getInitChamp());
        $this->assertNull($obj->getInitTable());
        $this->assertNull($obj->getInitValeur());
        $this->assertNull($obj->getLgZone());
        $this->assertNull($obj->getLibZone());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getQteEnt());
        $this->assertNull($obj->getType());
    }
}
