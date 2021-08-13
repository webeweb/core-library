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

use WBW\Library\Quadratus\Model\QGI\ClientsLstPersoColonnes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients lst perso colonnes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsLstPersoColonnesTest extends AbstractTestCase {

    /**
     * Tests the setClauseWhere() method.
     *
     * @return void
     */
    public function testSetClauseWhere(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setClauseWhere("clauseWhere");
        $this->assertEquals("clauseWhere", $obj->getClauseWhere());
    }

    /**
     * Tests the setIndice() method.
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Tests the setIndiceTri() method.
     *
     * @return void
     */
    public function testSetIndiceTri(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setIndiceTri("indiceTri");
        $this->assertEquals("indiceTri", $obj->getIndiceTri());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIsFormule() method.
     *
     * @return void
     */
    public function testSetIsFormule(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setIsFormule(true);
        $this->assertEquals(true, $obj->getIsFormule());
    }

    /**
     * Tests the setJointure() method.
     *
     * @return void
     */
    public function testSetJointure(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setJointure("jointure");
        $this->assertEquals("jointure", $obj->getJointure());
    }

    /**
     * Tests the setNbDecimales() method.
     *
     * @return void
     */
    public function testSetNbDecimales(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setNbDecimales("nbDecimales");
        $this->assertEquals("nbDecimales", $obj->getNbDecimales());
    }

    /**
     * Tests the setNomChamp() method.
     *
     * @return void
     */
    public function testSetNomChamp(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setNomChamp("nomChamp");
        $this->assertEquals("nomChamp", $obj->getNomChamp());
    }

    /**
     * Tests the setNomTable() method.
     *
     * @return void
     */
    public function testSetNomTable(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setNomTable("nomTable");
        $this->assertEquals("nomTable", $obj->getNomTable());
    }

    /**
     * Tests the setRefGuid() method.
     *
     * @return void
     */
    public function testSetRefGuid(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setRefGuid("refGuid");
        $this->assertEquals("refGuid", $obj->getRefGuid());
    }

    /**
     * Tests the setSaisie() method.
     *
     * @return void
     */
    public function testSetSaisie(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setSaisie(true);
        $this->assertEquals(true, $obj->getSaisie());
    }

    /**
     * Tests the setSelection() method.
     *
     * @return void
     */
    public function testSetSelection(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setSelection("selection");
        $this->assertEquals("selection", $obj->getSelection());
    }

    /**
     * Tests the setTaille() method.
     *
     * @return void
     */
    public function testSetTaille(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setTaille(10);
        $this->assertEquals(10, $obj->getTaille());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new ClientsLstPersoColonnes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsLstPersoColonnes();

        $this->assertNull($obj->getClauseWhere());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getIndiceTri());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIsFormule());
        $this->assertNull($obj->getJointure());
        $this->assertNull($obj->getNbDecimales());
        $this->assertNull($obj->getNomChamp());
        $this->assertNull($obj->getNomTable());
        $this->assertNull($obj->getRefGuid());
        $this->assertNull($obj->getSaisie());
        $this->assertNull($obj->getSelection());
        $this->assertNull($obj->getTaille());
        $this->assertNull($obj->getTitre());
    }
}
