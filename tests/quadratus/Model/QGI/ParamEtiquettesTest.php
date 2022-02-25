<?php

/*
 * This file is part of the core-library package.
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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ParamEtiquettesTest extends AbstractTestCase {

    /**
     * Tests setAvecCodeBarre()
     *
     * @return void
     */
    public function testSetAvecCodeBarre(): void {

        $obj = new ParamEtiquettes();

        $obj->setAvecCodeBarre(true);
        $this->assertEquals(true, $obj->getAvecCodeBarre());
    }

    /**
     * Tests setAvecPrixVente()
     *
     * @return void
     */
    public function testSetAvecPrixVente(): void {

        $obj = new ParamEtiquettes();

        $obj->setAvecPrixVente(true);
        $this->assertEquals(true, $obj->getAvecPrixVente());
    }

    /**
     * Tests setCodeModele()
     *
     * @return void
     */
    public function testSetCodeModele(): void {

        $obj = new ParamEtiquettes();

        $obj->setCodeModele("codeModele");
        $this->assertEquals("codeModele", $obj->getCodeModele());
    }

    /**
     * Tests setEtiqDeFront()
     *
     * @return void
     */
    public function testSetEtiqDeFront(): void {

        $obj = new ParamEtiquettes();

        $obj->setEtiqDeFront(10);
        $this->assertEquals(10, $obj->getEtiqDeFront());
    }

    /**
     * Tests setEtiqMasque()
     *
     * @return void
     */
    public function testSetEtiqMasque(): void {

        $obj = new ParamEtiquettes();

        $obj->setEtiqMasque(true);
        $this->assertEquals(true, $obj->getEtiqMasque());
    }

    /**
     * Tests setEtiqPlus()
     *
     * @return void
     */
    public function testSetEtiqPlus(): void {

        $obj = new ParamEtiquettes();

        $obj->setEtiqPlus(true);
        $this->assertEquals(true, $obj->getEtiqPlus());
    }

    /**
     * Tests setImprimante()
     *
     * @return void
     */
    public function testSetImprimante(): void {

        $obj = new ParamEtiquettes();

        $obj->setImprimante("imprimante");
        $this->assertEquals("imprimante", $obj->getImprimante());
    }

    /**
     * Tests setInitChamp()
     *
     * @return void
     */
    public function testSetInitChamp(): void {

        $obj = new ParamEtiquettes();

        $obj->setInitChamp("initChamp");
        $this->assertEquals("initChamp", $obj->getInitChamp());
    }

    /**
     * Tests setInitTable()
     *
     * @return void
     */
    public function testSetInitTable(): void {

        $obj = new ParamEtiquettes();

        $obj->setInitTable("initTable");
        $this->assertEquals("initTable", $obj->getInitTable());
    }

    /**
     * Tests setInitValeur()
     *
     * @return void
     */
    public function testSetInitValeur(): void {

        $obj = new ParamEtiquettes();

        $obj->setInitValeur("initValeur");
        $this->assertEquals("initValeur", $obj->getInitValeur());
    }

    /**
     * Tests setLgZone()
     *
     * @return void
     */
    public function testSetLgZone(): void {

        $obj = new ParamEtiquettes();

        $obj->setLgZone("lgZone");
        $this->assertEquals("lgZone", $obj->getLgZone());
    }

    /**
     * Tests setLibZone()
     *
     * @return void
     */
    public function testSetLibZone(): void {

        $obj = new ParamEtiquettes();

        $obj->setLibZone("libZone");
        $this->assertEquals("libZone", $obj->getLibZone());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ParamEtiquettes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new ParamEtiquettes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests setQteEnt()
     *
     * @return void
     */
    public function testSetQteEnt(): void {

        $obj = new ParamEtiquettes();

        $obj->setQteEnt(true);
        $this->assertEquals(true, $obj->getQteEnt());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ParamEtiquettes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
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
