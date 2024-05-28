<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\TravauxMissions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Travaux missions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TravauxMissionsTest extends AbstractTestCase {

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new TravauxMissions();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new TravauxMissions();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new TravauxMissions();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setCodeTravail()
     *
     * @return void
     */
    public function testSetCodeTravail(): void {

        $obj = new TravauxMissions();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Test setDeclarationARediger()
     *
     * @return void
     */
    public function testSetDeclarationARediger(): void {

        $obj = new TravauxMissions();

        $obj->setDeclarationARediger(true);
        $this->assertTrue($obj->getDeclarationARediger());
    }

    /**
     * Test setFrequence()
     *
     * @return void
     */
    public function testSetFrequence(): void {

        $obj = new TravauxMissions();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Test setJour()
     *
     * @return void
     */
    public function testSetJour(): void {

        $obj = new TravauxMissions();

        $obj->setJour(10);
        $this->assertEquals(10, $obj->getJour());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TravauxMissions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMissions()
     *
     * @return void
     */
    public function testSetMissions(): void {

        $obj = new TravauxMissions();

        $obj->setMissions("missions");
        $this->assertEquals("missions", $obj->getMissions());
    }

    /**
     * Test setNbUo()
     *
     * @return void
     */
    public function testSetNbUo(): void {

        $obj = new TravauxMissions();

        $obj->setNbUo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbUo());
    }

    /**
     * Test setNePasEditer()
     *
     * @return void
     */
    public function testSetNePasEditer(): void {

        $obj = new TravauxMissions();

        $obj->setNePasEditer(true);
        $this->assertTrue($obj->getNePasEditer());
    }

    /**
     * Test setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new TravauxMissions();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Test setRealisePar()
     *
     * @return void
     */
    public function testSetRealisePar(): void {

        $obj = new TravauxMissions();

        $obj->setRealisePar("realisePar");
        $this->assertEquals("realisePar", $obj->getRealisePar());
    }

    /**
     * Test setTypeAffectation()
     *
     * @return void
     */
    public function testSetTypeAffectation(): void {

        $obj = new TravauxMissions();

        $obj->setTypeAffectation("typeAffectation");
        $this->assertEquals("typeAffectation", $obj->getTypeAffectation());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TravauxMissions();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getDeclarationARediger());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMissions());
        $this->assertNull($obj->getNbUo());
        $this->assertNull($obj->getNePasEditer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getRealisePar());
        $this->assertNull($obj->getTypeAffectation());
    }
}
