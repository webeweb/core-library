<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\HistoriquesEmployesColonnes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historiques employes colonnes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HistoriquesEmployesColonnesTest extends AbstractTestCase {

    /**
     * Test setClauseWhere()
     *
     * @return void
     */
    public function testSetClauseWhere(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setClauseWhere("clauseWhere");
        $this->assertEquals("clauseWhere", $obj->getClauseWhere());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Test setIndiceTri()
     *
     * @return void
     */
    public function testSetIndiceTri(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setIndiceTri("indiceTri");
        $this->assertEquals("indiceTri", $obj->getIndiceTri());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setJointure()
     *
     * @return void
     */
    public function testSetJointure(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setJointure("jointure");
        $this->assertEquals("jointure", $obj->getJointure());
    }

    /**
     * Test setNomChamp()
     *
     * @return void
     */
    public function testSetNomChamp(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setNomChamp("nomChamp");
        $this->assertEquals("nomChamp", $obj->getNomChamp());
    }

    /**
     * Test setNomTable()
     *
     * @return void
     */
    public function testSetNomTable(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setNomTable("nomTable");
        $this->assertEquals("nomTable", $obj->getNomTable());
    }

    /**
     * Test setRefGuid()
     *
     * @return void
     */
    public function testSetRefGuid(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setRefGuid("refGuid");
        $this->assertEquals("refGuid", $obj->getRefGuid());
    }

    /**
     * Test setSaisie()
     *
     * @return void
     */
    public function testSetSaisie(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setSaisie(true);
        $this->assertTrue($obj->getSaisie());
    }

    /**
     * Test setSelection()
     *
     * @return void
     */
    public function testSetSelection(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setSelection("selection");
        $this->assertEquals("selection", $obj->getSelection());
    }

    /**
     * Test setTaille()
     *
     * @return void
     */
    public function testSetTaille(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setTaille(10);
        $this->assertEquals(10, $obj->getTaille());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test setbEnGraph()
     *
     * @return void
     */
    public function testSetbEnGraph(): void {

        $obj = new HistoriquesEmployesColonnes();

        $obj->setbEnGraph(true);
        $this->assertTrue($obj->getbEnGraph());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoriquesEmployesColonnes();

        $this->assertNull($obj->getClauseWhere());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getIndiceTri());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getJointure());
        $this->assertNull($obj->getNomChamp());
        $this->assertNull($obj->getNomTable());
        $this->assertNull($obj->getRefGuid());
        $this->assertNull($obj->getSaisie());
        $this->assertNull($obj->getSelection());
        $this->assertNull($obj->getTaille());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getbEnGraph());
    }
}
